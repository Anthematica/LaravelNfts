<?php

namespace App\Providers;

use App\Http\Controllers\NftController;
use App\Models\Collection;
use App\Models\Nft;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{

    public function register()
    {

    }


    public function boot()
    {
        Relation::enforceMorphMap(
            [
                'nft' => Nft::class,
                'collection' => Collection::class,
            ]
        );
    }
}
