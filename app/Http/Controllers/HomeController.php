<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use App\Models\Nft;
use Illuminate\Http\Request;

class HomeController extends Controller
{
 
    public function index()
    {
        $verification = auth()->id();
    
        $nfts = Nft::with('author')->get();
        
        $nftCollections = Collection::with('nfts')->has('nfts')->take(4)->get();

        // dd($nftCollections);
    
        return view('index',
            [
                'verification' => $verification,
                'nfts' => $nfts,
                'nftCollections' => $nftCollections,
            ]
        );
    }

    
  







}
