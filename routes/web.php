<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::post('/redirect', function (\Illuminate\Http\Request $request) {
    $university = $request->input('university');
    $program = $request->input('program');

    // Buat slug dari input untuk mengarahkan ke halaman yang sesuai
    $slug = strtolower(str_replace(' ', '-', $university)) . '-' . strtolower(str_replace(' ', '-', $program));

    return redirect()->route('files.view', ['slug' => $slug]);
})->name('redirect');

Route::get('/files/{slug}', function ($slug) {
    // Cek apakah ada view yang sesuai dengan slug
    if (view()->exists('files.' . $slug)) {
        return view('files.' . $slug);
    } else {
        abort(404, 'Page not found');
    }
})->name('files.view');