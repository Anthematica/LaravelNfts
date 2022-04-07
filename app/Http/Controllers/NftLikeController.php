<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Nft;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NftLikeController extends Controller
{
    public function store (Nft $nft) {  
        
        
        $nft->likes()->create(
            [
                'user_id' => Auth::id(),
            ]
            
        );

        return  redirect()->intended(RouteServiceProvider::HOME);
    }

    public function destroy(Nft $nft, Like $like) { 

        $like->delete();

        return back();
    }
}
