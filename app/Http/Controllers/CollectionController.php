<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class CollectionController extends Controller
{

    public function index()
    {
    
    }

    public function create()
    {
        return view('collections.create');
    }

    public function store(Request $request)
    {
        $collection = new Collection();
        $collection->author_id = auth()->id();
        $collection->name = $request->name;
        $collection->description = $request->description;

        $collection->save();


        // $data = $request->validate([
        //     'user_id' => ['required'],
        //     'name' => ['required'],
        //     'description' => ['required']
        // ]);

        // $user = auth()->id();
        // Arr::forget($data, 'user_id');
        // $user->collections()->create($data);

        return redirect()->intended(RouteServiceProvider::HOME);
    }

    public function show(Collection $collection)
    {
        //
    }

    public function edit(Collection $collection)
    {
        //
    }

    public function update(Request $request, Collection $collection)
    {
        //
    }

   
    public function destroy(Collection $collection)
    {
        //
    }
}
