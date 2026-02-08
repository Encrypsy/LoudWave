<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user(Request $request)
    {
        $user = User::all();
        return view('user', compact('user'));
    }

    public function editRole($id)
    {
        $user = User::findOrFail($id);
        return view('edit_role', compact('user'));
    }

    public function updateRole(Request $request, $id)
    {
        $request->validate([
            'role' => 'required|in:editor,admin' // sesuaikan dengan role yang kamu punya
        ]);

        $user = User::findOrFail($id);
        $user->role = $request->role;
        $user->save();

        return redirect()->route('user')->with('success', 'Role berhasil diperbarui!');
    }

    public function store(Request $request)
    {
        // Logic to store a new user
        return redirect()->route('user')->with('success', 'User berhasil ditambahkan!');
    }

    public function delete($id)
    {
        // Logic to delete a user by ID
        return redirect()->route('user')->with('success', 'User berhasil dihapus!');
    }
}
