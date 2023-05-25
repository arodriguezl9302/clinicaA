<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Http\Requests\AuthLoginRequest;
use App\Http\Requests\LoginPasswordRequest;
use App\Http\Requests\VerifyPasswordRequest;
use App\Models\User;
use App\Services\AuthService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function __construct(
        protected User $userModel,
        protected AuthService $authService
    ){}

    public function getLogin(Request $request): View{

        //$request->session()->pull('login', '');
        //dd($request->session()->get('login')->email);

        if($request->session()->get('login')){
            return view('pages.auth.password');
        }else{
            return view('pages.auth.login');
        }        
    }
    
    public function postApilogin(AuthLoginRequest $request): RedirectResponse {
        $request->validated();

        $randomString = $this->authService->generateRandomString(12);
        $login = $this->authService->apiAuth($request['login']);

        if($login){
           $user = $this->userModel->firstOrCreate(
            ['external_id' => $login['id']],
            [
                'external_id' => $login['id'], 
                'username' => $login['username'], 
                'email' => $login['email'],
                'token' => $randomString,
                'verified' => false,
            ]
           ); 

           if($user->verified == false || $user->token !== ""){
                $this->authService->sendActivateMail($user->email, $user->username, $user->id, $user->token);
                $request->session()->put('send_email', true);
                return redirect()->route('auth.showForgotPassword');
           }else{
                $request->session()->put('login', $user);
                return redirect()->route('auth.showLogin');
           }

        }else{
            throw ValidationException::withMessages(['login' => __('auth.failed')]);
        }

    }

    public function postLogin(LoginPasswordRequest $request): RedirectResponse {
        $request->validated();

        //dd($request->session()->get('login')->email, $request->password);
        $credentials = [
            "email" => $request->session()->get('login')->email,
            "password" => $request->password
        ];

        if (Auth::attempt($credentials)) {
            return redirect('home');
        }
    
        throw ValidationException::withMessages(['password' => __('auth.failed')]);
    }

    public function getVerify(string $id = null, string $token = null): View {
        $user = $this->userModel->where('id', $id)->where('token', $token)->firstOrFail();
        return view('pages.auth.verify', compact('user'));
    }

    public function postVerify(VerifyPasswordRequest $request){
        $request->validated();

        $this->userModel->where('id', $request->id)
                        ->update([
                            'password' => Hash::make($request->password),
                            'verified' => true,
                            'token' => "",
        ]);
                        
        return redirect()->route('auth.showLogin');              
    }

    public function getForgotPassword(): View {

        if(request()->session()->get('send_email')){
            return view('pages.auth.forgot-password');
        }else{
            redirect(abort(404));
        }
    }

    public function postforgotPassword(): RedirectResponse {
        $user = request()->session()->get('login');
        $token = $this->authService->generateRandomString(12);

        $this->userModel->where('id', $user->id)
                        ->update([
                            'verified' => false,
                            'token' => $token,
        ]);

        $this->authService->sendRecoveryMail($user->email, $user->username, $user->id, $token);

        request()->session()->pull('login', '');
        request()->session()->put('send_email', true);
        
        return redirect()->route('auth.showForgotPassword');
    }

    public function getRecoveryPassword(string $id = null, string $token = null): View {
        $user = $this->userModel->where('id', $id)->where('token', $token)->firstOrFail();
        return view('pages.auth.recovery-password', compact('user'));
    }

    public function postRecoveryPassword(VerifyPasswordRequest $request): RedirectResponse {
        $request->validated();

        $this->userModel->where('id', $request->id)
                        ->update([
                            'password' => Hash::make($request->password),
                            'verified' => true,
                            'token' => "",
        ]);
                        
        return redirect()->route('auth.showLogin');              
    }

    public function logout(Request $request): RedirectResponse {
        Auth::guard()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
