<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'sobrenome' => 'required|string|max:255',
            'birth' => 'required|date',
            'cpf' => 'required|string|max:14|unique:users,cpf',
            'phone' => 'required|string|max:15',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'password_confirmation' => 'required|same:password',
        ]);
        $validated['password'] = bcrypt($validated['password']);
        $user = User::create($validated); 
        $user->assignRole('user');
        return redirect()->route('login')->with('success', 'Cadastro realizado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function auth(request $request)
    {
        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials)) {
            return redirect()->route('home')->with('success', 'Login realizado com sucesso!');
        }

        return redirect()->back()->withErrors(['email' => 'Credenciais inválidas.']);   
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
