<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Ro'yxatdan o'tish formasini ko'rsatish
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    // Ro'yxatdan o'tish funksiyasi
    public function register(Request $request)
    {
        // Ma'lumotlarni validatsiya qilish
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Foydalanuvchini yaratish
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $user->assignRole('user');
        

        // Foydalanuvchini tizimga kiritish
        Auth::login($user);

        // Bosh sahifaga yo'naltirish
        return redirect()->route('home');
    }

    // login

    public function showLoginForm()
    {
        return view('auth.login'); // resources/views/auth/login.blade.php fayliga murojaat qiladi
    }

    public function login(Request $request)
    {
        // Ma'lumotlarni validatsiya qilish
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:8',
        ]);

        // Auth::attempt orqali foydalanuvchini tizimga kiritish
        if (Auth::attempt($credentials)) {
            // Login muvaffaqiyatli bo'lsa, foydalanuvchini admin dashboard'ga yo'naltirish
            return redirect()->intended('/admin');
        }

        // Agar login muvaffaqiyatsiz bo'lsa, foydalanuvchini qayta login sahifasiga yo'naltirish
        return back()->withErrors([
            'email' => 'Login ma\'lumotlari noto\'g\'ri.',
        ]);
    }


     // Logout funksiyasi
     public function logout(Request $request)
     {
         Auth::logout(); // Foydalanuvchini tizimdan chiqarish
         return redirect('/login'); // Login sahifasiga yo'naltirish
     }
}