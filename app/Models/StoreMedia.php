<?php
/*
 * Author: WOLF
 * Name: StoreMedia.php
 * Modified : lun., 3 juin 2024 17:52
 * Description: ...
 *
 * Copyright 2024 -[MR.WOLF]-[WS]-
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class StoreMedia extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $fillable = ['name'];
}
