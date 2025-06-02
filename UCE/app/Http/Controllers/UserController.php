<?php

namespace App\Http\Controllers;

use App\Http\Requests\Api\userRegistrationRequest as ApiUserRegistrationRequest;
use Illuminate\Http\Request;
use App\Http\Requests\userRegistrationRequest;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::select('id', 'name', 'sobrenome', 'email', 'cpf', 'phone')->get();

        if($users->isEmpty()) {
            return response()->json(['message' => 'Nenhum usuário encontrado.'], 404);
        }

        return response()->json($users, 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json(['message' => 'Usuário não encontrado.'], 404);
        }

        return response()->json($user);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(userRegistrationRequest $request, string $id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json(['message' => 'Usuário não encontrado.'], 404);
        }

        $data = $request->validated();
        if (isset($data['password'])) {
            $data['password'] = bcrypt($data['password']);
        }
        $user->update($data);

        return response()->json([
            'message' => 'Usuário atualizado com sucesso.',
            'user' => $user
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json(['message' => 'Usuário não encontrado.'], 404);
        }

        $user->delete();

        return response()->json(['message' => 'Usuário deletado com sucesso.'], 500);
    }
}
