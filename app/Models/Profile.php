<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Profile extends Model
{

    protected $guarded = [];
    public function user(): BelongsTo
    {
        return $this -> belongsTo(User::class);
    }

    public function profileImage()
    {
//        dd($this -> image);
        $imagePath = ($this->image) ? : 'profile/tbe4kKfl1umDrWlF36cYxDMqGM3M3mThiKVhXDxG.png';
        return '/storage/' . $imagePath;
    }
    public function followers()
    {
        return $this->belongsToMany(User::class);
    }
}
