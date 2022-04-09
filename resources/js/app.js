require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

window.Echo.channel('likes').listen('LikeToggle', (data) => {

    const { nft } = data;

    console.log(nft);
    
    const container = document.querySelector(`#nft_${nft.id}`);
    const count = container.querySelector('.amount_likes');

    count.textContent = nft.likes_count;

})
