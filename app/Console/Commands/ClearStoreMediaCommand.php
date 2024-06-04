<?php
/*
 * Author: WOLF
 * Name: ClearStoreMediaCommand.php
 * Modified : mar., 4 juin 2024 07:59
 * Description: ...
 *
 * Copyright 2024 -[MR.WOLF]-[WS]-
 */

namespace App\Console\Commands;

use App\Models\StoreMedia;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\Console\Attribute\AsCommand;

#[AsCommand(name: 'clear:store-media')]
class ClearStoreMediaCommand extends Command
{
    protected $signature = 'clear:store-media {--collection=}';

    protected $description = 'Clear store media collection';

    public function handle(): void
    {
        $collection = $this->option('collection');
        try {
            if (empty($collection)) {
                StoreMedia::each(function (StoreMedia $media) {
                    $media->forceDelete();
                    $this->info("{$media->name} deleted successfully");
                });
                Storage::disk('public')->deleteDirectory("store-media");
            } else {
                $storeMedia = StoreMedia::firstWhere('name', $collection);
                $storeMedia->forceDelete();
                $this->info("$collection deleted successfully");
            }
        } catch (\Exception $th) {
            $this->error($th->getMessage());
            Log::error($th->getMessage());
        }
    }
}
