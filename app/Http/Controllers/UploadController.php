<?php
/*
 * Author: WOLF
 * Name: UploadController.php
 * Modified : mar., 4 juin 2024 08:05
 * Description: ...
 *
 * Copyright 2024 -[MR.WOLF]-[WS]-
 */

namespace App\Http\Controllers;

use App\Models\StoreMedia;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;
use ZipArchive;

class UploadController extends Controller
{
    public function __construct()
    {
        ini_set('max_execution_time', 30000);
        ini_set('upload_max_filesize', '5120M');
        ini_set('post_max_size', '5120M');
        ini_set('max_input_time', 3000000);
    }

    public function index(Request $request)
    {
        $query = $request->get('q');
        if (!empty($query)) {
            $selected = StoreMedia::firstWhere('name', $query);
            if ($selected) {
                return view('welcome', compact('selected'));
            }
        }

        return view('welcome');
    }

    public function upload(Request $request)
    {
        $zipFile = $request->file('file');
        $folderName = 'newZip-' . Carbon::now()->format('F') . "-" . rand(1000, 9999);
        $zipFilePath = $zipFile->path();
        Storage::makeDirectory($folderName);
        $storageDir = storage_path("app/$folderName");
        $zip = new ZipArchive;
        if ($zip->open($zipFilePath) === True) {
            $zip->extractTo($storageDir);
            $zip->close();
        }
        Storage::delete($zipFile->path()); // delete zip file
        // PS : launch store command directly after upload if the command inside a Job
        Artisan::call('store:medias --path=' . $folderName); // call store command
        return back()->with('success', 'File successfully uploaded');
    }
}
