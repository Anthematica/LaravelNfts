@extends('layouts.main')

@section('main')
<main>
    <div class="hero_SignUp">
        <h1>Create Item</h1>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/">Pages</a></li>
            <li><a href="/">Create Item</a></li> 
        </ul>
    </div>
    <section class="sign_form create_item">
        <div class="preview_create">
            <h2>Preview Item</h2>
            <div class="cards-container">
                <div class="container-image">
                    <img class="nft_img" id="image">
                </div>
                <div class="cards-collection">
                    <h1 class="card-title validate_text"></h1>
                    <button class="BSC">BSC</button>
                </div>
                <div class="cards-info">
                    <div class="cards-owner_img"></div>
                    <div class="title_creator_info_container">
                        <div class="title_creator_info">
                            <p>Creator</p>
                            <p>Current Bid</p>
                        </div>
                        <div class="creator_info">
                            <p>{{auth()->user()->name}}</p>
                            <p class="card-price validate_text"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <form  method="POST" action="{{ route('nfts.store') }}" enctype="multipart/form-data" class="register-form">
            @csrf

            <label class="label">
                Upload file
                <input name="img_src" type="file" placeholder="Upload an image" class="input" id="i_image">
            </label>

            <label  class="label">
                Price
                <input name="price" type="number" placeholder="Insert the price" class="input" id="i_price">
            </label>

            <label  class="label">
                Title
                <input name="title" required type="text" placeholder="Item name" class="input" id="i_title">
            </label>

            <label  class="label">
                Description
                <input name="description" type="text" required  placeholder="Enter description" class="input">
            </label>

            <div class="item-container-R-C">
                <label  class="label">
                    Royalties
                    <input name="royalty" type="number" class="input">
                </label>
                <label  class="label"> 
                    Collection
                    <select name="collection" class="input select">
                        @foreach ($collections as $collection)
                            <option value="{{$collection->id}}">{{$collection->name}}</option> 
                        @endforeach    
                    </select>
                </label>
            </div>
           
            <button type="submit" class="primary_button">Save</button>
        </form>

        <script src="/js/create.js"></script>
    </section>
</main>
@endsection