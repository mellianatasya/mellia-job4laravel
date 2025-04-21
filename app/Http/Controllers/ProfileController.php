<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index ()
    {
        $profile = [
            'name' => 'Mellia Natasya',
            'email' => 'mellianatasya731@gmail.com',
            'bio' => 'Pelajar SMK Negeri 1 Sayung',
            'profile_picture' => 'profile.png',
            'skills' => ['Scroll', 'Membuat Mie', 'Membuat Teh'],
        ];
        return view('profile', compact('profile'));
    }
}
