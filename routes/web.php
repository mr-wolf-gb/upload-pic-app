<?php
/*
 * Author: WOLF
 * Name: web.php
 * Modified : mar., 4 juin 2024 07:59
 * Description: ...
 *
 * Copyright 2024 -[MR.WOLF]-[WS]-
 */

use App\Http\Controllers\UploadController;
use App\Models\StoreMedia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

Route::controller(UploadController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::post('/', 'upload')->name('upload');
});

Route::get('/media/{collection}/{name}', function (Request $request, $collection, $name) {
    $media = StoreMedia::firstWhere('name', $collection)->getFirstMedia('default', fn($media) => $media->name == $name);
    return response()->file($media->getPath());
})->name('get-file');

Route::get('/media-clear/{p1}', function (Request $request, $p1) {
    StoreMedia::firstWhere('name', $p1)->forceDelete();
    dd("$p1 deleted successfully");
});

Route::get('/media-clear-all', function (Request $request) {
    StoreMedia::each(fn(StoreMedia $media) => $media->forceDelete());
    Storage::disk('public')->deleteDirectory("store-media");
    dd("done");
});
