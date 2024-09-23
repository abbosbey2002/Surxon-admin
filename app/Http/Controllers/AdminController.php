<?php

namespace App\Http\Controllers;

use App\Models\User;

class AdminController extends Controller
{
    public function dashboard()
    {
        $users = User::all()->toArray();
        return view('admin.dashboard', compact('users'));
    }

    // show datas

    public function show($id = 1)
    {
        // Here you would typically fetch the row data from the database based on the ID.
        // Assuming we have some dummy data for now:
        $users = [
            ['id' => 1, 'name' => 'John Doe', 'email' => 'john@example.com', 'role' => 'Admin', 'avatar' => 'https://wphtml.com/html/tf/duralux-demo/assets/images/avatar/1.png'],
            ['id' => 2, 'name' => 'Jane Doe', 'email' => 'jane@example.com', 'role' => 'User', 'avatar' => 'https://wphtml.com/html/tf/duralux-demo/assets/images/avatar/1.png'],
            ['id' => 3, 'name' => 'Bob Smith', 'email' => 'bob@example.com', 'role' => 'Editor', 'avatar' => 'https://wphtml.com/html/tf/duralux-demo/assets/images/avatar/1.png'],
        ];

        // Find the row by ID
        $row = collect($users)->firstWhere('id', $id);

        // Return the view with the row data
        return view('admin.show', ['row' => $row]);
    }
}