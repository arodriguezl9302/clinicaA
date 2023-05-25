<?php

namespace App\Providers;

use Illuminate\Auth\GenericUser;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Contracts\Auth\UserProvider;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Contracts\Encryption\Encrypter;
use Illuminate\Contracts\Encryption\EncryptException;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Crypt;

class ExternalApiUserProvider implements UserProvider
{

    public function retrieveById($identifier)
    {
        try {
            $payload = Crypt::decryptString($identifier);
            $payload = \json_decode($payload, true, \JSON_THROW_ON_ERROR);
        } catch (DecryptException $exception) {
            return null;
        } catch (\JsonException $exception) {
            return null;
        }

        $payload['id'] = $identifier;
        $payload['remember_token'] = '';

        return new GenericUser($payload);
    }

    public function retrieveByToken($identifier, $token)
    {
        return null;
    }

    public function updateRememberToken(Authenticatable $user, $token)
    {
    }

    public function retrieveByCredentials(array $credentials)
    {

        if (! array_key_exists('login', $credentials)) {
            return null;
        }

        if (! array_key_exists('password', $credentials)) {
            return null;
        }

        // $response = Http::withHeaders([
        //     'accept' => 'application/json',
        //     'Content-Type' => 'application/json'
        // ])->post('https://api.nexo-house.com/api/v1/auth', [
        //     'email' => $credentials['email'],
        //     'password' => $credentials['password'],
        // ]);

        $user = [
            'id' => 265142,
            'email' => 'admin@admin.com',
            'username' => 'admin',
            'password' => 'password'
        ];

        $response = ($user['email'] === $credentials['login'] || $user['username'] === $credentials['login']) && $user['password'] === $credentials['password'];
        // if (! $response->ok()) {
        //     return null;
        // }
        if (! $response) {
            return null;
        }

        //dd($response->json());
        //$payload = $response->json();
        $payload = [
            'id' => '63f6656b94db8693124535d6',
            'email' => 'admin@admin.com',
            'username' => 'admin',
            //'token' => 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6IjYzZjkyOGNhMzJmYmQxYWE5M2I5MzM3YiIsInJvbCI6IkFkbWluaXN0cmF0b3IiLCJjaHVyY2giOiI2M2Y5MjhiNTMyZmJkMWFhOTNiOTMzNzkiLCJpYXQiOjE2NzcyNzMzMTgsImV4cCI6MTY3NzI4NDExOH0.HX3U-hQmbDFC8_hD7TQnE5qWozavoNtySJipuy8pfrc',
        ];

        try {
            $identifier = \json_encode($payload, \JSON_THROW_ON_ERROR);
            $payload['id'] = Crypt::encryptString($identifier);
        } catch (\JsonException $exception) {
            return null;
        } catch (EncryptException $exception) {
            return null;
        }

        return new GenericUser($payload);
       
    }

    public function validateCredentials(Authenticatable $user, array $credentials)
    {
        return true;
    }
}