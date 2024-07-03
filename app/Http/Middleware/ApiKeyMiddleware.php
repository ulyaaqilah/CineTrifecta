<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiKeyMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // Mendapatkan API Key dari header request
        $apiKey = $request->header('api_token');

        // Jika API Key tidak ada, kembalikan respon error
        if (!$apiKey) {
            return response()->json(['error' => 'API Key is missing'], 401);
        }

        // Mencari user berdasarkan API Key menggunakan query builder
        $user = DB::table('users')->where('api_token', $apiKey)->first();

        // Jika user tidak ditemukan atau API Key tidak valid, kembalikan respon error
        if (!$user) {
            return response()->json(['error' => 'Invalid API Key'], 401);
        }

        // Menambahkan user ke dalam request untuk digunakan selanjutnya
        $request->merge(['user' => $user]);

        // Melanjutkan ke middleware berikutnya
        return $next($request);
    }
}
