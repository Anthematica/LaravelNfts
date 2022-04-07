<?php

namespace App\Models;

use App\Http\Controllers\CollectionController;
use App\Http\Controllers\NftController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function user(){
        return $this->belongsTo(User::class);
    }

    public function likeable() {
        return $this->morphTo();
    }

}