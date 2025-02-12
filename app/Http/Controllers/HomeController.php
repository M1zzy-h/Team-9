<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class HomeController extends Controller
{
    private $allProducts = [
        1 => [
            'image' => 'home/img/product images/1999.jpg',
            'artist' => 'Prince',
            'title' => '1999',
            'price' => '£24.99',
            'category' => 'pop',
            'description' => 'Originally released in 1982, 1999 is Prince breakthrough album, a five-time platinum-certified record that established him as one of the most singular talents of his generation.',
            'details' => [
                'Product Dimensions' => '31.39 x 31.39 x 0.79 cm; 235.87 g',
                'Manufacturer' => 'Warner Records',
                'Item model number' => '517786',
                'Original Release Date' => '1982',
                'Label' => 'Warner Records',
                'Country of origin' => 'United Kingdom',
                'Number of discs' => '1'
            ]
        ],
        2 => [
            'image' => 'home/img/product images/rumours.jpg',
            'artist' => 'Fleetwood Mac',
            'title' => 'Rumours',
            'price' => '£24.99',
            'category' => 'pop',
            'description' => 'On February 4th 1977, after a year of recording through hedonism, scandal and relationship break-ups the British-American rock band Fleetwood Mac released their eleventh studio album, Rumours.',
            'details' => [
                'Product Dimensions' => '31.39 x 31.39 x 0.79 cm; 235.87 g',
                'Manufacturer' => 'Warner Records',
                'Item model number' => '517786',
                'Original Release Date' => '1977',
                'Label' => 'Warner Records',
                'Country of origin' => 'United Kingdom',
                'Number of discs' => '1'
            ]
        ],
        3 => [
            'image' => 'home/img/product images/borntodie.jpg',
            'artist' => 'Lana Del Rey',
            'title' => 'Born To Die',
            'price' => '£24.99',
            'category' => 'pop',
            'description' => 'Highly anticipated 2012 debut album from the New York-based singer, songwriter and performer. She has described herself as a "gangsta Nancy Sinatra" and cites Britney Spears, Thomas Newman and Bruce Springsteen as her musical influences.',
            'details' => [
                'Product Dimensions' => '31.39 x 31.39 x 0.79 cm; 235.87 g',
                'Manufacturer' => 'Polydor',
                'Item model number' => '28930756',
                'Original Release Date' => '2012',
                'Label' => 'Polydor',
                'Country of origin' => 'United Kingdom',
                'Number of discs' => '1'
            ]
        ],
        4 => [
            'image' => 'home/img/product images/callmeifyougetlost.jpg',
            'artist' => 'Tyler, The Creator',
            'title' => 'Call Me If You Get Lost',
            'price' => '£29.99',
            'category' => 'rock',
            'description' => 'Sixth studio album by the American rapper, featuring Pharrell Williams, Brent Faiyaz and Lil Wayne. The album includes the previously-released songs \'Lumberjack\' and \'Wusyaname\' as well as \'Juggernaut\'.',
            'details' => [
                'Product Dimensions' => '31.24 x 0.76 x 30.73 cm; 498.95 g',
                'Manufacturer' => 'Columbia',
                'Item model number' => '2022-04-15',
                'Original Release Date' => '2021',
                'Label' => 'Columbia',
                'Country of origin' => 'United States',
                'Number of discs' => '2'
            ]
        ],
        5 => [
            'image' => 'home/img/product images/igor.jpg',
            'artist' => 'Tyler, The Creator',
            'title' => 'IGOR',
            'price' => '£24.99',
            'category' => 'rock',
            'description' => 'IGOR is the fifth studio album by American rapper and producer Tyler, The Creator. It was released on May 17, 2019, through Columbia Records.',
            'details' => [
                'Product Dimensions' => '31.39 x 31.39 x 0.79 cm; 235.87 g',
                'Manufacturer' => 'Columbia',
                'Item model number' => '19075904831',
                'Original Release Date' => '2019',
                'Label' => 'Columbia',
                'Country of origin' => 'United States',
                'Number of discs' => '1'
            ]
        ],
        6 => [
            'image' => 'home/img/product images/1989.jpg',
            'artist' => 'Taylor Swift',
            'title' => '1989 (Taylor\'s Version)',
            'price' => '£29.99',
            'category' => 'pop',
            'description' => 'The re-recorded version of Taylor Swift\'s fifth studio album, featuring all songs from the deluxe edition of 1989 plus previously unreleased songs from The Vault.',
            'details' => [
                'Product Dimensions' => '31.39 x 31.39 x 0.79 cm; 235.87 g',
                'Manufacturer' => 'Republic Records',
                'Original Release Date' => '2023',
                'Label' => 'Republic Records',
                'Country of origin' => 'United States',
                'Number of discs' => '1'
            ]
        ],
        7 => [
            'image' => 'home/img/product images/currents.jpg',
            'artist' => 'Tame Impala',
            'title' => 'Currents',
            'price' => '£24.99',
            'category' => 'indie',
            'description' => 'Third studio album by Australian musical project Tame Impala, released on 17 July 2015. It was recorded, produced, and mixed by Kevin Parker.',
            'details' => [
                'Product Dimensions' => '31.39 x 31.39 x 0.79 cm; 235.87 g',
                'Manufacturer' => 'Interscope Records',
                'Original Release Date' => '2015',
                'Label' => 'Interscope Records',
                'Country of origin' => 'Australia',
                'Number of discs' => '2'
            ]
        ],
        8 => [
            'image' => 'home/img/product images/innerspeaker.jpg',
            'artist' => 'Tame Impala',
            'title' => 'Innerspeaker',
            'price' => '£24.99',
            'category' => 'indie',
            'description' => 'Debut studio album by Australian musical project Tame Impala. It was released on 21 May 2010.',
            'details' => [
                'Product Dimensions' => '31.39 x 31.39 x 0.79 cm; 235.87 g',
                'Manufacturer' => 'Modular Recordings',
                'Original Release Date' => '2010',
                'Label' => 'Modular Recordings',
                'Country of origin' => 'Australia',
                'Number of discs' => '2'
            ]
        ],
        9 => [
            'image' => 'home/img/product images/lonerism.jpg',
            'artist' => 'Tame Impala',
            'title' => 'Lonerism',
            'price' => '£24.99',
            'category' => 'indie',
            'description' => 'Second studio album by the Australian musical project Tame Impala, released on 5 October 2012.',
            'details' => [
                'Product Dimensions' => '31.39 x 31.39 x 0.79 cm; 235.87 g',
                'Manufacturer' => 'Modular Recordings',
                'Original Release Date' => '2012',
                'Label' => 'Modular Recordings',
                'Country of origin' => 'Australia',
                'Number of discs' => '2'
            ]
        ],
        10 => [
            'image' => 'home/img/product images/darktwistedfantasy.jpg',
            'artist' => 'Kanye West',
            'title' => 'My Beautiful Dark Twisted Fantasy',
            'price' => '£34.99',
            'category' => 'hiphop',
            'description' => 'Fifth studio album by American rapper and producer Kanye West. It was released on November 22, 2010, by Def Jam Recordings and Roc-A-Fella Records.',
            'details' => [
                'Product Dimensions' => '31.39 x 31.39 x 0.79 cm; 235.87 g',
                'Manufacturer' => 'Def Jam',
                'Original Release Date' => '2010',
                'Label' => 'Def Jam',
                'Country of origin' => 'United States',
                'Number of discs' => '3'
            ]
        ],
        11 => [
            'image' => 'home/img/product images/2014foresthill.jpg',
            'artist' => 'J Cole',
            'title' => '2014 Forest Hills Drive',
            'price' => '£24.99',
            'category' => 'hiphop',
            'description' => 'Third studio album by American rapper J. Cole. It was released on December 9, 2014, by ByStorm Entertainment, Columbia Records, Dreamville Records and Roc Nation.',
            'details' => [
                'Product Dimensions' => '31.39 x 31.39 x 0.79 cm; 235.87 g',
                'Manufacturer' => 'Columbia',
                'Original Release Date' => '2014',
                'Label' => 'Columbia',
                'Country of origin' => 'United States',
                'Number of discs' => '1'
            ]
        ],
        12 => [
            'image' => 'home/img/product images/mmlp.jpg',
            'artist' => 'Eminem',
            'title' => 'The Marshall Mathers LP',
            'price' => '£24.99',
            'category' => 'hiphop',
            'description' => 'Second major-label studio album by American rapper Eminem, released on May 23, 2000, by Aftermath Entertainment and Interscope Records.',
            'details' => [
                'Product Dimensions' => '31.39 x 31.39 x 0.79 cm; 235.87 g',
                'Manufacturer' => 'Interscope',
                'Original Release Date' => '2000',
                'Label' => 'Interscope',
                'Country of origin' => 'United States',
                'Number of discs' => '2'
            ]
        ],
        13 => [
            'image' => 'home/img/product images/graduation.jpg',
            'artist' => 'Kanye West',
            'title' => 'Graduation',
            'price' => '£24.99',
            'category' => 'hiphop',
            'description' => 'Third studio album by American rapper Kanye West, released on September 11, 2007, through Def Jam Recordings and Roc-A-Fella Records.',
            'details' => [
                'Product Dimensions' => '31.39 x 31.39 x 0.79 cm; 235.87 g',
                'Manufacturer' => 'Def Jam',
                'Original Release Date' => '2007',
                'Label' => 'Def Jam',
                'Country of origin' => 'United States',
                'Number of discs' => '1'
            ]
        ],
        14 => [
            'image' => 'home/img/product images/illmatic.jpg',
            'artist' => 'Nas',
            'title' => 'Illmatic',
            'price' => '£24.99',
            'category' => 'hiphop',
            'description' => 'Debut studio album by American rapper Nas. It was released on April 19, 1994, by Columbia Records.',
            'details' => [
                'Product Dimensions' => '31.39 x 31.39 x 0.79 cm; 235.87 g',
                'Manufacturer' => 'Columbia',
                'Original Release Date' => '1994',
                'Label' => 'Columbia',
                'Country of origin' => 'United States',
                'Number of discs' => '1'
            ]
        ],
        15 => [
            'image' => 'home/img/product images/blonde.jpg',
            'artist' => 'Frank Ocean',
            'title' => 'Blonde',
            'price' => '£24.99',
            'category' => 'r&b',
            'description' => 'Second studio album by American singer Frank Ocean. It was released on August 20, 2016.',
            'details' => [
                'Product Dimensions' => '31.39 x 31.39 x 0.79 cm; 235.87 g',
                'Manufacturer' => 'Boys Don\'t Cry',
                'Original Release Date' => '2016',
                'Label' => 'Boys Don\'t Cry',
                'Country of origin' => 'United States',
                'Number of discs' => '2'
            ]
        ],
        16 => [
            'image' => 'home/img/product images/channel orange.jpg',
            'artist' => 'Frank Ocean',
            'title' => 'Channel Orange',
            'price' => '£24.99',
            'category' => 'r&b',
            'description' => 'Debut studio album by American singer Frank Ocean. It was released on July 10, 2012, by Def Jam Recordings.',
            'details' => [
                'Product Dimensions' => '31.39 x 31.39 x 0.79 cm; 235.87 g',
                'Manufacturer' => 'Def Jam',
                'Original Release Date' => '2012',
                'Label' => 'Def Jam',
                'Country of origin' => 'United States',
                'Number of discs' => '2'
            ]
        ],
        17 => [
            'image' => 'home/img/product images/amsp.jpg',
            'artist' => 'Radiohead',
            'title' => 'A Moon Shaped Pool',
            'price' => '£24.99',
            'category' => 'rock',
            'description' => 'Ninth studio album by the English rock band Radiohead. It was released digitally on 8 May 2016.',
            'details' => [
                'Product Dimensions' => '31.39 x 31.39 x 0.79 cm; 235.87 g',
                'Manufacturer' => 'XL Recordings',
                'Original Release Date' => '2016',
                'Label' => 'XL Recordings',
                'Country of origin' => 'United Kingdom',
                'Number of discs' => '2'
            ]
        ],
        18 => [
            'image' => 'home/img/product images/dogrel.jpg',
            'artist' => 'Fontaines D.C.',
            'title' => 'Dogrel',
            'price' => '£24.99',
            'category' => 'indie',
            'description' => 'Debut studio album by Irish post-punk band Fontaines D.C., released on 12 April 2019 through Partisan Records.',
            'details' => [
                'Product Dimensions' => '31.39 x 31.39 x 0.79 cm; 235.87 g',
                'Manufacturer' => 'Partisan Records',
                'Original Release Date' => '2019',
                'Label' => 'Partisan Records',
                'Country of origin' => 'Ireland',
                'Number of discs' => '1'
            ]
        ],
        19 => [
            'image' => 'home/img/product images/geminirights.jpg',
            'artist' => 'Steve Lacy',
            'title' => 'Gemini Rights',
            'price' => '£24.99',
            'category' => 'r&b',
            'description' => 'Second studio album by American singer Steve Lacy, released through RCA Records on July 15, 2022.',
            'details' => [
                'Product Dimensions' => '31.39 x 31.39 x 0.79 cm; 235.87 g',
                'Manufacturer' => 'RCA Records',
                'Original Release Date' => '2022',
                'Label' => 'RCA Records',
                'Country of origin' => 'United States',
                'Number of discs' => '1'
            ]
        ],
        20 => [
            'image' => 'home/img/product images/yesigned.jpg',
            'artist' => 'Kanye West',
            'title' => 'YE [SIGNED]',
            'price' => '£24.99',
            'category' => 'rock',
            'description' => 'Eighth studio album by American rapper Kanye West. It was released on June 1, 2018, through GOOD Music and Def Jam Recordings.',
            'details' => [
                'Product Dimensions' => '31.39 x 31.39 x 0.79 cm; 235.87 g',
                'Manufacturer' => 'Def Jam',
                'Original Release Date' => '2018',
                'Label' => 'Def Jam',
                'Country of origin' => 'United States',
                'Number of discs' => '1'
            ]
        ],
        21 => [
            'image' => 'home/img/product images/wipedout.jpg',
            'artist' => 'The Neighbourhood',
            'title' => 'Wiped Out!',
            'price' => '£29.99',
            'category' => 'rock',
            'description' => 'Second studio album by American rock band The Neighbourhood, released on October 30, 2015, through Columbia Records.',
            'details' => [
                'Product Dimensions' => '31.39 x 31.39 x 0.79 cm; 235.87 g',
                'Manufacturer' => 'Columbia',
                'Original Release Date' => '2015',
                'Label' => 'Columbia',
                'Country of origin' => 'United States',
                'Number of discs' => '2'
            ]
        ]
    ];

    public function index()
    {
        return view('home.userpage');
    }

    public function account()
    {
        return view('home.account');
    }
    public function cart()
    {
        return view('home.cart');
    }
    public function contact()
    {
        return view('home.contact');
    }
    public function about()
    {
        return view('home.about');
    }
    public function shop()
    {
        return view('home.shop', [
            'allProducts' => $this->allProducts
        ]);
    }

    public function indie()
    {
        $indieProducts = [];
        foreach ($this->allProducts as $id => $product) {
            if (isset($product['category']) && strtolower($product['category']) === 'indie') {
                $indieProducts[$id] = $product;
            }
        }
        return view('home.indie', compact('indieProducts'));
    }
    public function hiphop()
    {
        $hiphopProducts = [];
        foreach ($this->allProducts as $id => $product) {
            if (isset($product['category']) && strtolower($product['category']) === 'hiphop') {
                $hiphopProducts[$id] = $product;
            }
        }
        return view('home.hiphop', [
             'hiphopProducts' => $hiphopProducts
        ]);
    }
    public function jazz()
    {
        $jazzProducts = [];
        foreach ($this->allProducts as $id => $product) {
            if (isset($product['category']) && strtolower($product['category']) === 'jazz') {
                $jazzProducts[$id] = $product;
            }
        }
        return view('home.jazz', compact('jazzProducts'));
    }
    public function pop()
    {
        $popProducts = [];
        foreach ($this->allProducts as $id => $product) {
            if (isset($product['category']) && strtolower($product['category']) === 'pop') {
                $popProducts[$id] = $product;
            }
        }
        return view('home.pop', compact('popProducts'));
    }
    public function randb()
    {
        $rbProducts = [];
        foreach ($this->allProducts as $id => $product) {
            if (isset($product['category']) && strtolower($product['category']) === 'r&b') {
                $rbProducts[$id] = $product;
            }
        }
        return view('home.r&b', compact('rbProducts'));
    }
    
    public function rock()
    {
        $rockProducts = [];
        foreach ($this->allProducts as $id => $product) {
            if (isset($product['category']) && strtolower($product['category']) === 'rock') {
                $rockProducts[$id] = $product;
            }
        }
        return view('home.rock', compact('rockProducts'));
    }

    public function showProduct($id)
    {
        if (!isset($this->allProducts[$id])) {
            abort(404); // Return 404 if product doesn't exist
        }
        
        return view('home.product', [
            'product' => (object)$this->allProducts[$id] // Convert array to object for blade template
        ]);
    }
    
    public function redirect()
    {

        $usertype=Auth::user()->usertype;

        if($usertype=='1')
        {

            return view('admin.home');
        }

        else 
            {   
                return view('home.');
            }
    }
}
