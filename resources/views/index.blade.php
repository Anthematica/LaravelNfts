@extends('layouts.main')

@section('main')
    <main>
        <!-- HERO START -->
    <section class="hero">
        <div class="hero_info">
            <p class="hero_title">Discover, Find, <br>
                <span class="hero_title_fancy">Sell extraordinary</span>
                Monster NFTs
            </p>
            
            <p class="hero-title__down">Marketplace for monster character cllections non fungible token NFTs</p>

            <div class="hero_buttons">
                <a href="/">
                    <svg width="16" height="21" viewBox="0 0 16 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.5018 14.208L12.7719 12.0081C15.6056 7.09999 15.241 2.93672 14.9644 1.41039C14.9351 1.24485 14.8342 1.10183 14.6899 1.01705C14.5447 0.932506 14.3707 0.916005 14.2117 0.971336C12.7383 1.48437 8.90813 3.22727 6.07185 8.13984L4.80142 10.3403L4.23711 10.3794C3.14896 10.4556 2.16906 11.0678 1.6233 12.0131L0.107343 14.6388C0.0175629 14.7943 0.0203742 14.9876 0.114687 15.1409C0.209878 15.294 0.381355 15.3818 0.560862 15.3695L2.38816 15.2526C2.90103 15.2202 3.41204 15.3391 3.85737 15.5962L4.82773 16.1565L4.09308 17.4289C3.95793 17.663 4.03802 17.9619 4.27155 18.0968L5.04851 18.5454C5.28205 18.6802 5.58096 18.6001 5.71611 18.366L6.45076 17.0935L7.42057 17.6535C7.8659 17.9106 8.22557 18.2929 8.45358 18.7552L9.26515 20.395C9.34425 20.5566 9.50608 20.6612 9.68622 20.6671C9.86613 20.6721 10.035 20.5779 10.1248 20.4223L11.6407 17.7966C12.1858 16.8525 12.2255 15.6974 11.7486 14.7162L11.5018 14.208ZM10.142 8.82732C9.33605 8.36201 9.05917 7.33044 9.52448 6.5245C9.99011 5.718 11.0216 5.44256 11.8275 5.90787C12.6329 6.37286 12.9101 7.40387 12.4445 8.21037C11.9792 9.01631 10.9474 9.29231 10.142 8.82732Z" fill="white"/>
                    </svg>
                    Explore 
                </a>
                @if (auth()->check())
                    <a class="hero_buttons-create" href="{{route('nfts.create')}}">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.00889133 14.3331C-0.0180618 14.4861 0.016821 14.6436 0.105962 14.7709C0.195063 14.8982 0.331157 14.9849 0.484204 15.0118L3.08487 15.4704L1.44663 6.17929L0.00889133 14.3331Z" fill="#5142FC"/>
                            <path d="M3.13295 0.00947145C2.97955 -0.0183801 2.82127 0.0159949 2.69326 0.105057C2.56529 0.194159 2.47807 0.330604 2.451 0.484198L1.82959 4.00842L13.6528 1.92365L3.13295 0.00947145Z" fill="#5142FC"/>
                            <path d="M19.9912 16.8704L17.5493 3.02157C17.4931 2.7029 17.1893 2.49024 16.8705 2.5463L3.02166 4.98821C2.70299 5.04438 2.49017 5.34829 2.54635 5.66696L4.98826 19.5158C5.01525 19.6689 5.10193 19.8049 5.22923 19.8941C5.32841 19.9635 5.44587 20 5.56533 20C5.59919 20 5.63326 19.9971 5.66704 19.9911L19.5159 17.5492C19.6689 17.5223 19.805 17.4356 19.8941 17.3083C19.9833 17.181 20.0182 17.0235 19.9912 16.8704ZM5.66845 9.8763C5.61228 9.55763 5.82509 9.25372 6.14376 9.19755L15.3764 7.56958C15.6953 7.51341 15.999 7.72618 16.0552 8.04485C16.1113 8.36352 15.8985 8.66743 15.5798 8.7236L6.34724 10.3516C6.31282 10.3577 6.27857 10.3606 6.24482 10.3606C5.96579 10.3606 5.71857 10.1606 5.66845 9.8763ZM13.3163 13.8826L7.16122 14.9679C7.12681 14.974 7.09255 14.9769 7.0588 14.9769C6.77978 14.9769 6.53255 14.7769 6.48243 14.4926C6.42626 14.1739 6.63907 13.87 6.95775 13.8138L13.1128 12.7285C13.4317 12.6723 13.7354 12.8851 13.7916 13.2038C13.8477 13.5225 13.6349 13.8264 13.3163 13.8826ZM15.9868 11.0318L6.75419 12.6597C6.71978 12.6658 6.68552 12.6687 6.65177 12.6687C6.37275 12.6687 6.12552 12.4687 6.0754 12.1844C6.01923 11.8658 6.23204 11.5618 6.55071 11.5057L15.7833 9.8777C16.1022 9.82153 16.4059 10.0343 16.4621 10.353C16.5183 10.6717 16.3055 10.9756 15.9868 11.0318Z" fill="#5142FC"/>
                        </svg>
                        Create 
                    </a>
                    <a class="hero_buttons-create" href="{{route('collections.create')}}">Collection</a>
                @endif
               
            </div>
        </div>

        <div class="hero_draws">
            <svg width="620" height="449" viewBox="0 0 620 449" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M228.87 444.519C225.199 443.268 221.639 441.708 218.228 439.854C186.918 422.839 176.801 388.235 166.085 351.601C158.552 325.858 150.766 299.233 134.951 279.161C119.766 259.887 97.8477 247.655 76.6555 235.799C65.1078 229.357 53.1693 222.693 42.3305 214.933C9.60492 191.501 -12.4289 146.586 9.03551 114.897C25.5165 90.5673 58.6007 87.4796 76.8515 87.8035C84.1347 87.9322 91.55 88.463 98.7259 88.9774C115.948 90.2104 133.756 91.4882 150.699 87.2182C174.908 81.1058 194.999 64.386 214.421 48.218C225.465 38.9793 236.897 29.5069 249.081 21.89C285.392 -0.807499 333.222 -5.46884 377.039 9.42313C413.841 21.931 443.399 46.3091 460.277 78.0702C467.633 91.9384 473.086 107.312 478.358 122.193C488.36 150.416 497.803 177.076 519.261 195.266C530.654 204.928 544.64 211.127 558.156 217.125C564.769 220.063 571.611 223.095 578.108 226.513C592.667 234.165 617.338 251.019 619.069 277.925C621.188 310.923 585.171 336.383 550.194 339.461C535.855 340.719 521.255 339.678 507.138 338.632C488.759 337.314 469.746 335.952 451.431 339.747C417.58 346.789 389.706 370.34 362.741 393.12C355.655 399.108 348.334 405.276 341.021 411.073C321.97 426.173 272.985 459.512 228.87 444.519ZM376.231 11.6822C333.059 -2.99059 285.947 1.58182 250.218 23.9167C238.172 31.4508 226.807 40.9134 215.819 50.0574C196.198 66.3932 175.912 83.2904 151.173 89.5229C133.885 93.8785 115.896 92.5963 98.4889 91.3491C91.3439 90.8371 83.9594 90.3087 76.7519 90.1896C58.9637 89.8767 26.7663 92.8435 10.908 116.248C-9.73303 146.747 11.846 190.232 43.6243 213.01C54.3547 220.717 66.2464 227.333 77.7424 233.741C99.1351 245.681 121.26 258.024 136.728 277.653C152.822 298.089 160.677 324.932 168.268 350.898C178.846 387.054 188.827 421.222 219.309 437.769C222.615 439.567 226.067 441.08 229.628 442.291C272.686 456.926 320.867 424.093 339.586 409.294C346.859 403.548 354.177 397.363 361.251 391.387C388.437 368.422 416.547 344.667 450.973 337.513C469.574 333.644 488.741 335.018 507.281 336.35C521.318 337.353 535.831 338.396 549.991 337.151C583.859 334.175 618.753 309.762 616.719 278.166C615.004 251.444 588.354 234.648 576.982 228.664C570.551 225.284 563.745 222.265 557.164 219.346C543.497 213.28 529.37 207.009 517.723 197.139C495.787 178.543 485.798 150.349 476.139 123.071C470.887 108.294 465.473 92.9665 458.196 79.263C441.604 47.9886 412.485 24.012 376.229 11.6895L376.231 11.6822Z" fill="#6A1AB7"/>
            </svg>
            <div class="hero_circles"></div>
            <div class="hero_circles"></div>
            <div class="hero_circles"></div>
            <div class="hero_circles"></div>
            <div class="hero_circles"></div>
        </div>

    </section>
     <!-- /HERO END -->

     <section class="carrusel-cards_container">
        <div class="carrusel-cards_title">
            <h1>Live Auctions</h1>
            <a href="/">Explore more</a>
        </div>
        <div class="carrusel-nfts__container">
             @foreach ($nfts as $nft )
            <div class="cards-container" id="nft_{{$nft->id}}">
                <div class="container-image">
                    <img src="{{'storage/' . $nft->img_src}}" alt="nft image" class="nft_img">
                    @php
                        $likes = $nft->likes->firstWhere('user_id', Auth::id());

                        $action = $likes 
                            ? route('nfts.likes.destroy', ['like' => $likes, 'nft' => $nft->id])
                            : route('nfts.likes.store', ['nft'=>$nft->id]);
                    @endphp
                    <form action="{{$action}}" method="POST">
                        @csrf

                        @if ($likes)
                            @method('DELETE')

                            <button class="image-likes" type="submit" id="like">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                    <path d="M0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84.02L256 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 .0003 232.4 .0003 190.9L0 190.9z"/>
                                </svg>
                                <span class="amount_likes"> {{$nft->likes->count()}}</span>   
                            </button>
                        @else
                            <button class="image-likes" type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                    <path d="M0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84.02L256 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 .0003 232.4 .0003 190.9L0 190.9z"/>
                                </svg>
                                <span class="amount_likes"> {{$nft->likes->count()}}</span>
                            </button>
                        @endif 
                    </form>
                </div>
                <div class="cards-collection">
                    <h1>{{$nft->title}}</h1>
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
                            <p>{{$nft->author->name}}</p>
                            <p>{{$nft->price}} FTH</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
     </section>
     @include('_partials.topSeller')

     {{-- Collections --}}
     <section class="collections">
        <div class="collection_title carrusel-cards_title">
            <h1>Popular Collection</h1>
            <a href="/">Explore more </a>
        </div>

        <div class="collection_containers">
            <div class="collection_card">
                <button class="image-likes collection_likes" type="submit" id="like">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                        <path d="M0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84.02L256 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 .0003 232.4 .0003 190.9L0 190.9z"/>
                    </svg>
                    <span class="amount_likes"> 100</span>   
                </button>
                <div class="seller_container_images collection_sellers">
                    <div class="sellers seller_collection">
                        <div class="seller-image seller_image_collection">
                            <div class="check">
                                <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.28014 11.3408C6.13989 11.4818 5.94864 11.5605 5.74989 11.5605C5.55114 11.5605 5.35989 11.4818 5.21964 11.3408L0.985143 7.10553C0.545643 6.66603 0.545643 5.95353 0.985143 5.51478L1.51539 4.98453C1.95489 4.54503 2.66664 4.54503 3.10614 4.98453L5.74989 7.62828L12.8936 0.484532C13.3331 0.0450322 14.0456 0.0450322 14.4844 0.484532L15.0146 1.01478C15.4541 1.45428 15.4541 2.16678 15.0146 2.60553L6.28014 11.3408Z" fill="white"/>
                                </svg>    
                            </div>
                        </div>
                        <div class="collection_info">
                            <h2>Creative Art Collection</h2>
                            <div class="collection_author">
                                <p class="created_by">Created by</p>
                                <p class="author_name">Anthony</p>
                            </div>
                        </div>  
                    </div>
                </div>
                <div class="collection_images_container">
                    <div class="collection_image_first"></div>
                    <div class="collection_image_second"></div>
                    <div class="collection_image_third"></div>
                    <div class="collection_image_fourth"></div>
                </div>
            </div>
     </section>
    </main>
@endsection