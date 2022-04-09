<?php

namespace App\Http\Controllers;

use App\Events\LikeToggle;
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

        broadcast(new LikeToggle($nft));

        return  redirect()->intended(RouteServiceProvider::HOME);
    }

    public function destroy(Nft $nft, Like $like) { 

        broadcast(new LikeToggle($nft));
        
        $like->delete();

        return back();
    }
}
