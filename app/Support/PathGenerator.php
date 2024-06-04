<?php
/*
 * Author: WOLF
 * Name: PathGenerator.php
 * Modified : lun., 3 juin 2024 21:36
 * Description: ...
 *
 * Copyright 2024 -[MR.WOLF]-[WS]-
 */

namespace App\Support;

use Spatie\MediaLibrary\MediaCollections\Models\Media;

class PathGenerator implements \Spatie\MediaLibrary\Support\PathGenerator\PathGenerator
{
    public function getPathForConversions(Media $media): string
    {
        return $this->getPath($media) . 'conversions/';
    }

    public function getPath(Media $media): string
    {
        if ($media->model_type == \App\Models\StoreMedia::class) {
            return "store-media/{$media->model_id}/";
        } else {
            return "others/{$media->model_id}/{$media->collection_name}/{$media->id}/";
        }
    }

    public function getPathForResponsiveImages(Media $media): string
    {
        return $this->getPath($media) . 'responsive/';
    }
}
