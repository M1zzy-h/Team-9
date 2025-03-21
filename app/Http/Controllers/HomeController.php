<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Session;
use Stripe;
use App\Models\Order;

class HomeController extends Controller
{
    private function getAllProducts()
    {
        $jsonPath = public_path('home/js/data.json');
        $products = json_decode(File::get($jsonPath), true);
        
        // Convert to associative array with ID as key
        $productsArray = [];
        foreach ($products as $product) {
            $productsArray[$product['id']] = $product;
        }
        
        return $productsArray;
    }

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
            'allProducts' => $this->getAllProducts()
        ]);
    }

    public function indie()
    {
        $products = $this->getAllProducts();
        $indieProducts = array_filter($products, function($product) {
            return isset($product['category']) && $product['category'] === 'indie';
        });
        
        return view('home.indie', ['indieProducts' => $indieProducts]);
    }
    
    public function hiphop()
    {
        $products = $this->getAllProducts();
        $hiphopProducts = array_filter($products, function($product) {
            return isset($product['category']) && strtolower($product['category']) === 'hiphop';
        });
        
        return view('home.hiphop', ['hiphopProducts' => $hiphopProducts]);
    }
    public function jazz()
    {
        $products = $this->getAllProducts();
        $jazzProducts = array_filter($products, function($product) {
            return isset($product['category']) && strtolower($product['category']) === 'jazz';
        });
        return view('home.jazz', compact('jazzProducts'));
    }
    public function pop()
    {
        $products = $this->getAllProducts();
        $popProducts = array_filter($products, function($product) {
            return isset($product['category']) && strtolower($product['category']) === 'pop';
        });
        return view('home.pop', compact('popProducts'));
    }
    public function randb()
    {
        $products = $this->getAllProducts();
        $rbProducts = array_filter($products, function($product) {
            return isset($product['category']) && strtolower($product['category']) === 'r&b';
        });
        return view('home.r&b', compact('rbProducts'));
    }
    
    public function rock()
    {
        $products = $this->getAllProducts();
        $rockProducts = array_filter($products, function($product) {
            return isset($product['category']) && strtolower($product['category']) === 'rock';
        });
        return view('home.rock', compact('rockProducts'));
    }

    public function showProduct($id)
    {
        $products = $this->getAllProducts();
        
        if (!isset($products[$id])) {
            abort(404); // Return 404 if product doesn't exist
        }
        
        return view('home.product', [
            'product' => (object)$products[$id] // Convert array to object for blade template
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
                return view('home.userpage');
            }
    }
    
    public function search(Request $request)
    {
        $searchResults = [];
        $searchTerm = strtolower($request->query('q', ''));
        $products = $this->getAllProducts();

        if (!empty($searchTerm)) {
            foreach ($products as $id => $product) {
                if (
                    str_contains(strtolower($product['title']), $searchTerm) ||
                    str_contains(strtolower($product['artist']), $searchTerm)
                ) {
                    $searchResults[] = [
                        'id' => $id,
                        'title' => $product['title'],
                        'artist' => $product['artist'],
                        'image' => asset($product['image']),
                        'price' => $product['price'],
                        'description' => $product['description']
                    ];
                }
            }
        }

        return response()->json($searchResults);
    }

    public function checkout()
        {
            return view('home.checkout');
        }


    public function stripePost(Request $request)
    {
        try {
            \Log::info('Starting payment process');
            
            $cartItems = json_decode($request->input('cart_items'), true);
            if (!$cartItems) {
                throw new \Exception('No items in cart');
            }

            Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
            
            $charge = Stripe\Charge::create([
                "amount" => (int)($request->total_amount * 100),
                "currency" => "gbp",
                "source" => $request->stripeToken,
                "description" => "Thanks for shopping at Emerald Vinyl."
            ]);

            $user = Auth::user();

            // Create orders for each cart item
            foreach ($cartItems as $item) {
                $order = new Order();
                $order->name = $user ? $user->name : null;
                $order->email = $user ? $user->email : null;
                $order->phone = $user ? $user->phone : null;
                $order->address = $user ? $user->address : null;
                $order->user_id = $user ? $user->id : null;
                $order->product_title = $item['name'];
                $order->product_quantity = $item['quantity'];
                $order->price = $item['price'];
                $order->image = $item['image'];
                $order->product_id = $item['id'];
                $order->payment_status = 'Paid';
                $order->delivery_status = 'Pending';
                $order->save();
            }

            // Clear the cart after successful payment
            return response()->json([
                'success' => true,
                'message' => 'Payment successful! Your order has been placed.'
            ]);

        } catch (\Exception $e) {
            \Log::error('Payment error:', ['error' => $e->getMessage()]);
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong: ' . $e->getMessage()
            ], 500);
        }
    }

}



