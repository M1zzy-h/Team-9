<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.css')
</head>
<body>
    <div class="container-scroller">
        @include('admin.sidebar')
        @include('admin.header')
        
        <div class="main-panel">
            <div class="content-wrapper">
                <h2 class="font-semibold text-xl mb-4">Edit Order #{{ $order->id }}</h2>

                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin.orders.update', $order->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            
                            <div class="mb-3">
                                <label for="name" class="form-label">Customer Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $order->name }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Customer Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ $order->email }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="product_title" class="form-label">Product Title</label>
                                <input type="text" class="form-control" id="product_title" name="product_title" value="{{ $order->product_title }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="product_quantity" class="form-label">Quantity</label>
                                <input type="number" class="form-control" id="product_quantity" name="product_quantity" value="{{ $order->product_quantity }}" required min="1">
                            </div>

                            <div class="mb-3">
                                <label for="price" class="form-label">Price</label>
                                <input type="number" class="form-control" id="price" name="price" value="{{ $order->price }}" required step="0.01">
                            </div>

                            <div class="mb-3">
                                <label for="payment_status" class="form-label">Payment Status</label>
                                <select class="form-select" id="payment_status" name="payment_status" required>
                                    <option value="pending" {{ $order->payment_status == 'pending' ? 'selected' : '' }}>Pending</option>
                                    <option value="paid" {{ $order->payment_status == 'paid' ? 'selected' : '' }}>Paid</option>
                                    <option value="failed" {{ $order->payment_status == 'failed' ? 'selected' : '' }}>Failed</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="delivery_status" class="form-label">Delivery Status</label>
                                <select class="form-select" id="delivery_status" name="delivery_status" required>
                                    <option value="processing" {{ $order->delivery_status == 'processing' ? 'selected' : '' }}>Processing</option>
                                    <option value="shipped" {{ $order->delivery_status == 'shipped' ? 'selected' : '' }}>Shipped</option>
                                    <option value="delivered" {{ $order->delivery_status == 'delivered' ? 'selected' : '' }}>Delivered</option>
                                </select>
                            </div>

                            <div class="mt-4">
                                <button type="submit" class="btn btn-primary">Update Order</button>
                                <a href="{{ route('view_orders') }}" class="btn btn-secondary">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.script')
</body>
</html> 