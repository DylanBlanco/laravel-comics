<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $menuLinks = [
        [
            'name' => 'Charaters',
            'current' => false,
        ],
        [
            'name' => 'Comics',
            'current' => true,
        ],
        [
            'name' => 'Movies',
            'current' => false,
        ],
        [
            'name' => 'TV',
            'current' => false,
        ],
        [
            'name' => 'Games',
            'current' => false,
        ],
        [
            'name' => 'Collectibles',
            'current' => false,
        ],
        [
            'name' => 'Videos',
            'current' => false,
        ],
        [
            'name' => 'Fans',
            'current' => false,
        ],
        [
            'name' => 'News',
            'current' => false,
        ],
        [
            'name' => 'Shop',
            'current' => false,
        ],
    ];

    $itemsMenu = [
        [
            'name' => "Digital Comics",
            'image' => "buy-comics-digital-comics.png",
        ],
        [
            'name' => "DC MERCHANDISE",
            'image' => "buy-comics-merchandise.png",
        ],
        [
            'name' => "SUBSCRICTION",
            'image' => "buy-comics-subscriptions.png",
        ],
        [
            'name' => "COMIC SHOP LOCATOR",
            'image' => "buy-comics-shop-locator.png",
        ],
        [
            'name' => "DC POWER VISA",
            'image' => "buy-dc-power-visa.svg",
        ],
    ];

    $footerLinksDcComics = [
        [
            'name' => 'Charaters',
            'link' => '#',
        ],
        [
            'name' => 'Comics',
            'link' => '#',
        ],
        [
            'name' => 'Movies',
            'link' => '#',
        ],
        [
            'name' => 'TV',
            'link' => '#',
        ],
        [
            'name' => 'Games',
            'link' => '#',
        ],
        [
            'name' => 'Videos',
            'link' => '#',
        ],
        [
            'name' => 'News',
            'link' => '#',
        ],
    ];

    $footerLinksDc = [
        [
            'name' => 'Terms Of Use',
            'link' => '#',
        ],
        [
            'name' => 'Privacy Policy(New)',
            'link' => '#',
        ],
        [
            'name' => 'Ad Choice',
            'link' => '#',
        ],
        [
            'name' => 'Advertising',
            'link' => '#',
        ],
        [
            'name' => 'Jobs',
            'link' => '#',
        ],
        [
            'name' => 'Subscription',
            'link' => '#',
        ],
        [
            'name' => 'Talent Workshops',
            'link' => '#',
        ],
        [
            'name' => 'CPSC Certificates',
            'link' => '#',
        ],
        [
            'name' => 'Ratings',
            'link' => '#',
        ],
        [
            'name' => 'Shop Help',
            'link' => '#',
        ],
        [
            'name' => 'Contact Us',
            'link' => '#',
        ],
    ];

    $footerLinksSites = [
        [
            'name' => 'DC',
            'link' => '#',
        ],
        [
            'name' => 'Mad Magazines',
            'link' => '#',
        ],
        [
            'name' => 'DC Kids',
            'link' => '#',
        ],
        [
            'name' => 'DC Universe',
            'link' => '#',
        ],
        [
            'name' => 'DC Power Visa',
            'link' => '#',
        ],
    ];

    $footerLinksShop = [
        [
            'name' => 'Shop DC',
            'link' => '#',
        ],
        [
            'name' => 'Shop DC Collectibles',
            'link' => '#',
        ],
    ];

    $comics = config('comics');
    /*
        compact: crea un array associativo le cui chiavi sono le stringhe
                 che mettiamo tra le parentesi, mentre i valori di tali
                 chiavi sono i valori delle variabili con i nomi corrispondenti
                 alle stringhe inserite

        compact('firstName', 'lastName')
         |                                     |
         V                                     V

         [
            'firstName' => $firstName,
            'lastName' => $lastName,
         ]
    */

    /*
        dd: vuol dire dump and die, cioè fai il var_dump (più carino però)
            e poi stoppa l'esecuzione
    */
    // dd(compact('firstName', 'lastName'));

    // return view('welcome', [
    //     'firstName' => $firstName,
    //     'lastName' => $lastName,
    // ]);
    return view('pages.welcome', compact('comics', 'menuLinks', 'itemsMenu', 'footerLinksDcComics', 'footerLinksDc', 'footerLinksSites', 'footerLinksShop'));

    // return view('welcome', compact('firstName', 'lastName'));
})->name('homePage');

Route::get('/chi-siamo', function () {
    return view('subpages.about');
});

// Route::get(PERCORSO CON CUI ARRIVARE ALLA PAGINA, FUNZIONE DI CALLBACK CHE MI CREA LA RISPOSTA DA DARE ALL UTENTE)
