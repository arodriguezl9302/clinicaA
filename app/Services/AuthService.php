<?php

namespace App\Services;

use Illuminate\Support\Facades\Mail;
use App\Mail\Verification;

class AuthService {

    public function apiAuth(string $login): bool | array {

        $user = [
            'id' => 265142,
            'email' => 'arodriguezl9302@gmail.com',
            'username' => 'admin',
        ];

        if($user['email'] === $login || $user['username'] === $login){
            return $user;
        }else {
            return false;
        }
    }

    public function sendActivateMail(string $email, string $login, string $id, string $token): void {
        Mail::to($email)->send(new Verification($login, env('APP_URL')."/auth/verify/".$id."/".$token));
    }

    public function sendRecoveryMail(string $email, string $login, string $id, string $token): void {
        Mail::to($email)->send(new Verification($login, env('APP_URL')."/auth/recovery-password/".$id."/".$token));
    }

    function generateRandomString($length = 10): String {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ_-';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[random_int(0, $charactersLength - 1)];
        }
        return $randomString;
    }

}