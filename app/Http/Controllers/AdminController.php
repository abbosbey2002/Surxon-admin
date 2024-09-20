<?php

namespace App\Http\Controllers;

class AdminController extends Controller
{
    public function dashboard()
    {
        $users = [
            ['id' => 1, 'name' => 'John Doe', 'email' => 'john@example.com', 'role' => 'Admin', 'avatar' => 'https://wphtml.com/html/tf/duralux-demo/assets/images/avatar/1.png'],
            ['id' => 2, 'name' => 'Jane Doe', 'email' => 'jane@example.com', 'role' => 'User', 'avatar' => 'https://wphtml.com/html/tf/duralux-demo/assets/images/avatar/1.png'],
            ['id' => 3, 'name' => 'Bob Smith', 'email' => 'bob@example.com', 'role' => 'Editor', 'avatar' => 'https://wphtml.com/html/tf/duralux-demo/assets/images/avatar/1.png'],
        ];

        return view('admin.dashboard', compact('users'));
    }
}
