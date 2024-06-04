<?php
/*
 * Author: WOLF
 * Name: StoreMediasCommand.php
 * Modified : lun., 3 juin 2024 21:42
 * Description: ...
 *
 * Copyright 2024 -[MR.WOLF]-[WS]-
 */

namespace App\Console\Commands;

use App\Models\StoreMedia;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileDoesNotExist;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileIsTooBig;
use Symfony\Component\Console\Attribute\AsCommand;

#[AsCommand(name: 'store:medias')]
class StoreMediasCommand extends Command
{
    protected $signature = 'store:medias {--path= : name of extracted file}';

    protected $description = 'Save medias in media-lib from extracted zip file';

    /**
     * @throws FileDoesNotExist
     * @throws FileIsTooBig
     */
    public function handle(): void
    {
        $folderName = $this->option('path');
        if (empty($folderName)) {
            $this->error('path is required !');
        } else {
            $this->info("Storage dir : " . storage_path("app/$folderName"));
            if (Storage::exists($folderName)) {
                $directories = Storage::directories($folderName);
                foreach ($directories as $dir) {
                    $collectionName = trim(str_replace("$folderName/", "", $dir));
                    $media = StoreMedia::where('name', $collectionName)->firstOrCreate(['name' => $collectionName]);
                    $media->clearMediaCollection();
                    $files = Storage::allFiles($dir);
                    $this->line("Working on : $collectionName |> " . count($files) . " Files");
                    foreach ($files as $file) {
                        $media->addMediaFromDisk($file)->toMediaCollection();
                    }
                }
                Storage::deleteDirectory($folderName); // delete extracted folder
            } else {
                $this->error('empty directory or not found !');
            }
        }
    }
}
