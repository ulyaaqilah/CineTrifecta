<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    // public function regenerateToken()
    // {
    //     $user = Auth::user();
    //     $newToken = $user->regenerateToken();

    //     // Simpan token baru ke dalam session
    //     session(['api_token' => $newToken]);

    //     return redirect()->route('dashboard')->with('success', 'API Token berhasil diperbarui!');
    // }
    
    public function introduction()
    {
        return view('introduction');
    }
    public function select()
    {
        return view('select');
    }
    public function InsertFilm()
    {
        return view('InsertFilm');
    }
    public function InsertRating()
    {
        return view('InsertRating');
    }
}
