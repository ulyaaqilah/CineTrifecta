<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Symfony\Component\HttpKernel\Event\ResponseEvent;
use App\Models\Movie;

class MovieController extends Controller
{

    public function searchByTitle(Request $request)
    {
        $title = $request->input('title');

        $data = [];

        // Mengecek apakah parameter judul ('title') disertakan
        if ($title !== null) {
            $matched_films = Movie::where('title', 'like', "%$title%")->get();

            // Mengecek apakah ada hasil
            if ($matched_films->isNotEmpty()) {
                $data['status']['code'] = 200;
                $data['status']['description'] = 'Data ditemukan';
                $data['result'] = $matched_films;
            } else {
                // Jika tidak ada film dengan judul yang cocok
                $data['status']['code'] = 404;
                $data['status']['description'] = 'Data tidak ditemukan untuk judul tersebut';
            }
        } else {
            // Jika parameter judul ('title') tidak disertakan
            $data['status']['code'] = 400;
            $data['status']['description'] = 'Parameter judul ("title") harus disertakan';
        }

        // Mengirimkan respons dalam format JSON
        return response()->json($data);
    }

    public function searchByLanguage(Request $request)
    {
        $language = $request->input('language');

        $data = [];

        // Mengecek apakah parameter bahasa ('language') disertakan
        if ($language !== null) {
            $matched_films = DB::table('movies')
                ->where('Language', 'like', "%$language%")
                ->get();

            // Mengecek apakah ada hasil
            if ($matched_films->isNotEmpty()) {
                $data['status']['code'] = 200;
                $data['status']['description'] = 'Data ditemukan';
                $data['result'] = $matched_films;
            } else {
                // Jika tidak ada film dengan bahasa yang cocok
                $data['status']['code'] = 404;
                $data['status']['description'] = 'Data tidak ditemukan untuk bahasa tersebut';
            }
        } else {
            // Jika parameter bahasa ('language') tidak disertakan
            $data['status']['code'] = 400;
            $data['status']['description'] = 'Parameter bahasa ("language") harus disertakan';
        }

        // Mengirimkan respons dalam format JSON
        return response()->json($data);
    }

    public function searchByGenre(Request $request)
    {
        $genre = $request->input('genre');

        $data = [];

        // Mengecek apakah parameter genre disertakan
        if ($genre !== null) {
            $matched_films = DB::table('movies')
                ->where('genre', 'like', "%$genre%")
                ->get();

            // Mengecek apakah ada hasil
            if ($matched_films->isNotEmpty()) {
                $data['status']['code'] = 200;
                $data['status']['description'] = 'Data ditemukan';
                $data['result'] = $matched_films;
            } else {
                // Jika tidak ada film dengan genre yang cocok
                $data['status']['code'] = 404;
                $data['status']['description'] = 'Data tidak ditemukan untuk genre tersebut';
            }
        } else {
            // Jika parameter genre tidak disertakan
            $data['status']['code'] = 400;
            $data['status']['description'] = 'Parameter genre harus disertakan';
        }

        // Mengirimkan respons dalam format JSON
        return response()->json($data);
    }


    public function cariFilm(Request $request)
    {
        // Ambil nilai judul dari parameter 'Title'
        $judul = $request->input('title');

        // Inisialisasi array untuk menyimpan respons
        $data = array();

        // Mengecek apakah parameter judul disertakan
        if ($judul !== null) {
            // Melakukan pencarian film berdasarkan judul dengan pencocokan parsial
            $hasil = DB::table('movies')->where('title', 'like', '%' . $judul . '%')->get();

            // Mengecek apakah ada hasil yang ditemukan
            if ($hasil->count() > 0) {
                $data['status']['code'] = 200;
                $data['status']['description'] = 'Data ditemukan';
                $data['result'] = $hasil;
            } else {
                $data['status']['code'] = 404;
                $data['status']['description'] = 'Data tidak ditemukan';
            }
        } else {
            $data['status']['code'] = 400;
            $data['status']['description'] = 'Parameter judul ("Title") harus disertakan';
        }

        // Mengirimkan respons dalam format JSON
        return response()->json($data);
    }

    public function viewFilm()
    {
        $titles = Movie::all(); // Mengambil semua judul film dari model Movie
        // return response()->json($titles);
        return view('film', compact('titles')); // Mengirim data ke view 'film'
    }


    public function byGenre($genre)
    {
        $data = Movie::find($genre);
        return response($data);
    }




    // public function filmByGenre(Request $request)
    // {
    //     // Ambil nilai genre dari parameter 'genre'
    //     $genre = $request->input('genre');

    //     // Mengecek apakah parameter genre disertakan
    //     if ($genre !== null) {
    //         // Melakukan pencarian film berdasarkan genre
    //         $movies = Movie::where('genre', $genre)->get();

    //         // Mengecek apakah ada film yang ditemukan
    //         if ($movies->count() > 0) {
    //             return response()->json([
    //                 'status' => [
    //                     'code' => 200,
    //                     'description' => 'Data ditemukan'
    //                 ],
    //                 'result' => $movies
    //             ]);
    //         } else {
    //             return response()->json([
    //                 'status' => [
    //                     'code' => 404,
    //                     'description' => 'Data tidak ditemukan'
    //                 ]
    //             ]);
    //         }
    //     } else {
    //         return response()->json([
    //             'status' => [
    //                 'code' => 400,
    //                 'description' => 'Parameter genre harus disertakan'
    //             ]
    //         ], 400);
    //     }
    // }

    // public function show (string $genre)
    // {
    //     $data = Movie::find($genre);
    //     if ($data) {
    //         return response()->json([
    //             'status' => true,
    //             'message' => 'Data ditemukan',
    //             'data' => $data
    //         ], 200);
    //     } else {
    //         return response()->json([
    //             'status' => false,
    //             'message' => 'Data tidak ditemukan',
    //         ]);
    //     }
    // }

    // public function filmByGenre()
    // {
    //     $films = Movie::all()->pluck('genre')->unique();
    //     return response()->json($films);
    // }

    //

    // public function filmByGenre() {
    //     $movies = Movie::where('genre'::all())->get();

    //     if ($movies->isEmpty()) {
    //         return response()->json(['message' => 'Data gagal ditampilkan'], 404);
    //     } else {;
    //         return response()->json(['message' => 'Data berhasil ditampilkan', 'data' => $movies]);
    //     }
    // }


}
