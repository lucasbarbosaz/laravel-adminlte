<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {

        $users = User::orderByDesc('id')->get();

        return view('users.index', compact('users'));
    }

    public function create() {

        return view('users.create');
    }

    public function store(Request $request) {
        $input = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        User::create($input);

        return redirect()
            ->route('users.index')->with('status', 'Usuário criado com sucesso!');
    }

    public function edit (User $user) {

        $user->load(['profile', 'interests']); // carrega o relacionamento profile
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, User $user) {
        $input = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'exclude_if:password,null|min:6'
        ]);

        $user->fill($input);
        $user->save();

        return redirect()
            ->route('users.index')
            ->with('status', 'Usuário atualizado com sucesso!');
        
    }

    public function updateProfile(Request $request, User $user) {
        $input = $request->validate([
            'type' => 'required',
            'address' => 'nullable',
        ]);

        $user->profile()->updateOrCreate([
            'user_id' => $user->id
        ], $input);

        return back()
            ->with('status', 'Perfil atualizado com sucesso!');
    }

    public function updateInterests(Request $request, User $user) {
        $input = $request->validate([
            'interests' => 'nullable|array',
        ]);

        $user->interests()->delete();

        if (!empty($input['interests'])) {
            $user->interests()->createMany($input['interests']); //createMany é um método do relacionamento manyToMany que cria vários registros ao mesmo tempo
        }
    
        return back()
            ->with('status', 'Perfil atualizado com sucesso!');
    }

    public function destroy(User $user) {
        $user->delete();

        return back()
            ->with('status', 'Usuário excluído com sucesso!');
    }
}
