import './bootstrap';

// Import our custom CSS
import '~resources/scss/app.scss';
import '~bootstrap/js/index.esm.js';


import.meta.glob([
    '../img/**'
]);

import * as bootstrap from 'bootstrap';


const { createApp } =  Vue

  createApp({
    data() {
        return {
            navLinks : [
                "Characters","Comics", "movies", "tv", "Games", "Collectibles", "videos", "Fans", "news", "Shop" 
            ],

            footerLinks:[
                {
                    title:"DC COMICS",
                    links:[
                        "Characters",
                        "Comics",
                        "Movies",
                        "TV",
                        "Games",
                        "Videos",
                        "News"
                    ] ,
                },
                {
                    title:" DC",
                    links:[
                        "Terms Of Use",
                        "Privacy policy (New)",
                        "Ad Choices",
                        "Advertising",
                        "Jobs",
                        "Subscriptions",
                        "Talent Wprkshops",
                        "CPSC Certificates",
                        "Ratings",
                        "Shop Help",
                        "Contact Us",
                    ] ,
                },
                {
                    title:"SITES",
                    links:[
                        "DC",
                        "MAD Magazine",
                        "DC Kids",
                        "DC Universe",
                        "DC Power Visa",
                    ] ,
                },
                {
                    title:"SHOP",
                    links:[
                        "Shop DC",
                        "Shop DC Collectibles"
                    ] ,
                },
                
            ],
    
            icons:[
                "../resources/img/footer-facebook.png",
                "../resources/img/footer-periscope.png",
                "../resources/img/footer-pinterest.png",
                "../resources/img/footer-twitter.png",
                "../resources/img/footer-youtube.png",
            ],
        }
    },
  }).mount('#app');

