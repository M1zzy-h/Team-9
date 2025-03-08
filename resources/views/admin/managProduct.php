@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Manage Products</h2>
    
    <input type="text" id="productName" placeholder="Enter product name">
    <button onclick="addProduct()">Add Product</button>
    
    <div id="productList">
        @foreach($products as $product)
            <div class='product'>
                <span>{{ $product->name }}</span>
                <button onclick='deleteProduct({{ $product->id }})'>Delete</button>
            </div>
        @endforeach
    </div>
</div>

<script>
    function addProduct() {
        let name = document.getElementById("productName").value;
        
        fetch("{{ route('admin.products.store') }}", {
            method: "POST",
            headers: { "Content-Type": "application/json", "X-CSRF-TOKEN": "{{ csrf_token() }}" },
            body: JSON.stringify({ name })
        })
        .then(response => response.json())
        .then(data => location.reload());
    }
    
    function deleteProduct(id) {
        fetch(`/admin/products/${id}`, {
            method: "DELETE",
            headers: { "X-CSRF-TOKEN": "{{ csrf_token() }}" }
        })
        .then(response => response.json())
        .then(data => location.reload());
    }
</script>
@endsection
