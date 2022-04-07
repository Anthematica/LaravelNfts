<?php

namespace App\Http\Controllers;

use App\Models\Nft;
use Illuminate\Http\Request;

class HomeController extends Controller
{
 
    public function index()
    {
        $verification = auth()->id();
    
        $nfts = Nft::with('author')->get();
    
        return view('index',
            [
                'verification' => $verification,
                'nfts' => $nfts,
            ]
        );
    }

    
  







}
