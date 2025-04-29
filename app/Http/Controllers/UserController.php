<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function alterarSenha(){
        return view('user.alterarSenha');
    }

    public function updateSenha(Request $request){
        //dd($request->all());

        //password_old
        //password_new
        //password_new2

        $messages = [
            'nome.required' => 'O nome é um campo obrigatório!',
            'password_old.required' => 'O senha antiga é um campo obrigatório!',
            'password_new.required' => 'O senha nova é um campo obrigatório!',
            'password_new2.required' => 'O senha nova (repetir) é um campo obrigatório!',
        ];

        $validated = $request->validate([
            'password_old' => 'required|min:5',
            'password_new' => 'required|min:5|same:password_new2',
            'password_new2' => 'required|min:5',
        ], $messages);

        //dd(auth()->user()->password);

        if (Hash::check($request->password_old, auth()->user()->password)) {
            //dd('É igual!');

            $user = auth()->user();
            $user->password = Hash::make($request->password_new);
            $user->save();

            return redirect()->back()->with('message', 'A senha alterada com sucesso!');

        } else {

            return redirect()->back()->with('message', 'A senha antiga não confere!');

        }

    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
