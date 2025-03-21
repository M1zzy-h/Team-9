<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Order;

class AdminController extends Controller
{
    public function view_category()
    {
        try {
            // Read products from data.json
            $jsonPath = public_path('home/js/data.json');
            if (!File::exists($jsonPath)) {
                throw new \Exception('Data file not found');
            }
            $products = json_decode(File::get($jsonPath), true) ?? [];
            
            return view('admin.category', compact('products'));
        } catch (\Exception $e) {
            $products = []; // Initialize empty array if there's an error
            return view('admin.category', compact('products'))->with('error', $e->getMessage());
        }
    }

    public function addProduct(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'artist' => 'required',
            'price' => 'required',
            'category' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        try {
            // Handle image upload
            $image = $request->file('image');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('home/img/product images'), $imageName);

            // Get current products from JSON file
            $jsonPath = public_path('home/js/data.json');
            $products = json_decode(File::get($jsonPath), true) ?? [];

            // Get the next ID
            $maxId = empty($products) ? 0 : max(array_column($products, 'id'));
            $newId = $maxId + 1;

            // Create new product
            $newProduct = [
                'id' => $newId,
                'title' => $request->title,
                'artist' => $request->artist,
                'image' => 'home/img/product images/' . $imageName,
                'price' => '£' . ltrim($request->price, '£'),
                'category' => $request->category,
                'description' => $request->description,
                'details' => [
                    'Product Dimensions' => '31.39 x 31.39 x 0.79 cm; 235.87 g',
                    'Manufacturer' => 'Various',
                    'Original Release Date' => date('Y'),
                    'Label' => 'Various',
                    'Country of origin' => 'United Kingdom',
                    'Number of discs' => '1'
                ]
            ];

            // Add to JSON file
            $products[] = $newProduct;
            File::put($jsonPath, json_encode($products, JSON_PRETTY_PRINT));

            // Redirect to the new product's page
            return redirect("/product/{$newId}")->with('message', 'Product Added Successfully');

        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error adding product: ' . $e->getMessage());
        }
    }

    public function deleteProduct($id)
    {
        try {
            // Update JSON file
            $jsonPath = public_path('home/js/data.json');
            $products = json_decode(File::get($jsonPath), true);
            
            $products = array_filter($products, function($product) use ($id) {
                return $product['id'] != $id;
            });
            
            File::put($jsonPath, json_encode(array_values($products), JSON_PRETTY_PRINT));

            return redirect()->back()->with('message', 'Product Deleted Successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error deleting product: ' . $e->getMessage());
        }
    }

    public function viewOrders()
    {
        try {
            $orders = Order::with('user')->orderBy('created_at', 'desc')->get();
            return view('admin.orders', compact('orders'));
        } catch (\Exception $e) {
            \Log::error('Error viewing orders:', ['error' => $e->getMessage()]);
            return view('admin.orders', ['orders' => collect([])])
                ->with('error', 'Error loading orders: ' . $e->getMessage());
        }
    }

    public function editOrder($order_id)
    {
        $order = Order::findOrFail($order_id);
        return view('admin.edit_order', compact('order'));
    }

    public function updateOrder(Request $request, $order_id)
    {
        $order = Order::findOrFail($order_id);
        
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'product_title' => 'required',
            'product_quantity' => 'required|numeric|min:1',
            'price' => 'required|numeric|min:0'
        ]);

        $order->update([
            'name' => $request->name,
            'email' => $request->email,
            'product_title' => $request->product_title,
            'product_quantity' => $request->product_quantity,
            'price' => $request->price,
            'payment_status' => $request->payment_status,
            'delivery_status' => $request->delivery_status
        ]);

        return redirect()->route('view_orders')->with('success', 'Order updated successfully');
    }

    public function pastOrders()
    {
        $pastOrders = Order::onlyTrashed()->get(); // Get all soft-deleted orders
        return view('admin.past_orders', compact('pastOrders'));
    }

    public function deleteOrder($id)
    {
        try {
            // Find the order by ID and delete it
            $order = Order::findOrFail($id);
            $order->delete(); // This will soft delete the order

            return redirect()->back()->with('success', 'Order deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error deleting order: ' . $e->getMessage());
        }
    }
}
