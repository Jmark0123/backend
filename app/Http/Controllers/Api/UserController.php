<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return User:: all();

    }

    
    public function store(UserRequest $request)
    {
        $validated = $request -> validated();
        $validated['password'] = Hash::make($validated['password']); 
        $user = User::create($validated);
        return $user;

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return User::findOrFail($id); 

    }

    

    /**
     * Update name the specified resource in storage.
     */
    public function update(UserRequest $request, string $id)
    {
        $user = User::findOrFAil($id);
        $validated = $request -> validated();
        $user->name = $validated['name'];
        $user->save();
        return $user;
    }
    /**
     * Update email the specified resource in storage.
     */
    public function email(UserRequest $request, string $id)
    {
        $user = User::findOrFAil($id);
        $validated = $request -> validated();
        $user->email = $validated['email'];
        $user->save();
        return $user;
    }
    /**
     * Update email the specified resource in storage.
     */
    public function password(UserRequest $request, string $id)
    {
        $user = User::findOrFAil($id);
        $validated = $request -> validated();
        $user->password = Hash::make($validated['password']); 
        $user->save();
        return $user;
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $User = User::findOrFail($id);
        $User -> delete();
        return $User;
    }
}
