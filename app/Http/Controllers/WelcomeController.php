<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class WelcomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
       { 
        // $email = 'joaquim@yahoo.com.br';
        // $user = User::query()->where('email', $email)->first();
        // if ($user) {
        //     // Lançar uma exceção ou retornar uma mensagem de erro
        //     throw new Exception('O email já está em uso.');
        // }
        // $user = User::query()->create([
        //     'name' => 'Jeremias',
        //     'email' => 'joaquim@yahoo.com.br',
        //     'password' => 'jeremias'
        //     ]);
        // $user = User::find(1);
        // $user->email_verified_at = now();
        // $user->save();
        // dd($user->email_verified_at);
        // Auth::login($user);
        // Auth::logout();
       }    
        return view('welcome');

    }
}
