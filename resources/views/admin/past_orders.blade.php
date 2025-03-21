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
                <h2 class="font-semibold text-xl mb-4">Past Orders</h2>

                @if($pastOrders->isEmpty())
                    <div class="alert alert-info">
                        No past orders found.
                    </div>
                @else
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>Customer Name</th>
                                <th>Product Title</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Deleted At</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pastOrders as $order)
                                <tr>
                                    <td>{{ $order->id }}</td>
                                    <td>{{ $order->name }}</td>
                                    <td>{{ $order->product_title }}</td>
                                    <td>{{ $order->product_quantity }}</td>
                                    <td>£{{ number_format($order->price, 2) }}</td>
                                    <td>{{ $order->deleted_at->format('Y-m-d H:i') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </div>
    @include('admin.script')
</body>
</html> 