<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use App\Models\User;


class LoginController extends Controller
{
    // Fungsi untuk proses login
    public function loginaksi(Request $request)
    {
        // Validasi inputan pengguna
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Cari pengguna berdasarkan email
        $user = User::where('email', $request->email)->first();

        // Periksa apakah pengguna ada dan kata sandi cocok
        if ($user && Hash::check($request->password, $user->password)) {
            // Periksa apakah pengguna sudah memiliki api_token
            if (is_null($user->api_token)) {
                // Jika belum, buat api_token baru dan simpan ke dalam database
                $user->api_token = hash('sha256', Str::random(60));
                $user->save();
            }

            // Simpan api_token ke dalam session
            Session::put('api_token', $user->api_token);

            // Login pengguna
            Auth::login($user);

            // Redirect pengguna ke halaman dashboard
            return redirect()->route('dashboard');
        } else {
            // Jika login gagal, kembalikan pengguna ke halaman login dengan pesan kesalahan
            return redirect()->route('login')->withErrors(['login' => 'Email atau password salah']);
        }
    }

    // Menampilkan halaman login
    public function loginview()
    {
        return view('login');
    }

    // Fungsi untuk logout
    public function logout(Request $request)
    {
        // Lakukan proses logout
        Auth::logout();

        // Hapus semua data sesi
        Session::flush();

        // Redirect ke halaman login setelah logout
        return redirect()->route('login');
    }

    // Fungsi untuk regenerasi token
    public function regenerateToken()
    {
        // Periksa apakah pengguna sudah terautentikasi
        if (Auth::check()) {
            // Ambil pengguna yang sedang login
            $user = Auth::user();

            // Regenerasi token
            $user->api_token = hash('sha256', Str::random(60));
            $user->save();

            // Simpan token baru ke dalam session
            Session::put('api_token', $user->api_token);

            // Redirect kembali ke halaman dashboard
            return redirect()->route('dashboard')->with('success', 'API Token berhasil diperbarui!');
        } else {
            // Jika pengguna tidak terautentikasi, redirect ke halaman login
            return redirect()->route('login')->withErrors(['login' => 'Anda harus login terlebih dahulu']);
        }
    }
}
