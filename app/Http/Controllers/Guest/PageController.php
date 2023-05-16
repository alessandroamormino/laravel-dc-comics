<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $comics = config('comics');

        $links = [
            'characters',
            'comics',
            'movies',
            'tv',
            'games',
            'collectibles',
            'videos',
            'fans',
            'news',
            'shop'
        ];

        $lists = [
            [
                [
                    "title" => 'Dc Comics',
                    "links" => [
                        'Characters',
                        'Comics',
                        'Movies',
                        'TV',
                        'Games',
                        'Videos',
                        'News',
                    ],
                ],
                [
                    "title" => 'Shop',
                    "links" => [
                        'Shop DC',
                        'Shop DC Collectibles',
                    ],
                ],
            ],
            [
                [
                    "title" => 'DC',
                    "links" => [
                        'Terms Of Use',
                        'Privacy policy (New)',
                        'Ad Choices',
                        'Advertising',
                        'Jobs',
                        'Subscriptions',
                        'Talent Workshops',
                        'CPSC Certificates',
                        'Ratings',
                        'Shop Help',
                        'Contact Us',
                    ],
                ],
                [
                    "title" => 'Sites',
                    "links" => [
                        'DC',
                        'MAD Magazine',
                        'DC Kids',
                        'DC Universe',
                        'DC Power Visa',
                    ],
                ],
            ],
          ];

          $buy = [
            [
              "path" => "resources/images/buy-comics-digital-comics.png",
              "text" => "Digital Comics",
            ],
            [
              "path" => "resources/images/buy-comics-merchandise.png",
              "text" => "DC Merchandise",
            ],
            [
              "path" => "resources/images/buy-comics-subscriptions.png",
              "text" => "Subscription",
            ],
            [
              "path" => "resources/images/buy-comics-shop-locator.png",
              "text" => "Comics Shop Locator",
            ],
            [
              "path" => "resources/images/buy-dc-power-visa.svg",
              "text" => "DC Power Visa",
            ],
          ];

        return view('home', compact('comics', 'links', 'lists', 'buy'));
    }
}
