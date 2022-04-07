<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use App\Models\Nft;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;


class NftController extends Controller
{
   
    public function index()
    {


        return view('nfts.index');
    }

    public function create()
    {
        $collections = Collection::all();
        $nfts = Nft::with('author')->get();

        $verification = auth() -> id();
        return view ('nfts.create', 
            [
                'verification' => $verification,
                'collections' => $collections,
                'nfts' => $nfts,
            ]
        );
    }

    public function store(Request $request)
    {
        $nft = new Nft();
        $nft -> author_id = auth()->id();
        $nft -> owner_id = auth()->id();
        $nft -> collection_id = $request->collection;
        $image = $request->file('img_src');
        $path = $image->store('image', 'public');
        $nft->img_src = $path;
        $nft->price = $request->price;
        $nft->title = $request->title;
        $nft->description = $request->description;
        $nft->royalty = $request->royalty;

        // dd($nft);

        $nft->save();

        return redirect()->intended(RouteServiceProvider::HOME);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Nft  $nft
     * @return \Illuminate\Http\Response
     */
    public function show(Nft $nft)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nft  $nft
     * @return \Illuminate\Http\Response
     */
    public function edit(Nft $nft)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Nft  $nft
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nft $nft)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nft  $nft
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nft $nft)
    {
        //
    }
}
