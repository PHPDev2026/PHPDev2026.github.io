<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::post('/add-user', function(Request $request) {
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
    ]);

    DB::table('users')->insert([
        'name' => $validated['name'],
        'email' => $validated['email'],
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    return response()->json(['message' => 'User added successfully.']);
});
