<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Mockery\Exception;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $users = User::paginate(10);
            return view('users.index', compact('users'));
        } catch (\Exception $e) {
            die($e->getMessage());
        }

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        try {
            return view('users.create');
        } catch (\Exception $e) {
            die($e->getMessage());
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $request['password'] = Hash::make($request['password']);
            User::create($request->all());
            return redirect()->route('users.index');
        } catch (\Exception $e) {

        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $user = User::find($id);
            return view('users.show', compact('user'));
        } catch (\Exception $e) {

        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        try {
            $user = User::find($id);
            return view('users.edit', compact('user'));
        } catch (\Exception $e) {
            die($e->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            User::find($id)->update($request->all());
            return redirect()->route('users.index')->with('success', 'User updated successfully');
        } catch (\Exception $e) {
            die($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            User::find($id)->delete();
            return redirect()->route('users.index')->with('success', 'User Eliminado con exito');
        } catch (\Exception $e) {

        }
    }
}
