<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
    <style>
      .product-form {
        padding: 20px;
        background: #fff;
        color: #000;
        margin: 20px;
        border-radius: 8px;
      }
      .product-form input, .product-form textarea, .product-form select {
        width: 100%;
        padding: 8px;
        margin: 8px 0;
        border: 1px solid #ddd;
        border-radius: 4px;
      }
      .product-table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
      }
      .product-table th, .product-table td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
      }
      .product-table th {
        background-color: #f4f4f4;
      }
      .btn-delete {
        background: #ff4444;
        color: white;
        padding: 5px 10px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
      }
      .btn-submit {
        background: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
      }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      @include('admin.sidebar')
      @include('admin.header')
      
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="product-form">
            <h2>Add New Product</h2>
            <form action="{{ route('admin.product.add') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <input type="text" name="title" placeholder="Title" required>
              <input type="text" name="artist" placeholder="Artist" required>
              <input type="text" name="price" placeholder="Price (e.g. £24.99)" required>
              <select name="category" required>
                <option value="pop">Pop</option>
                <option value="rock">Rock</option>
                <option value="indie">Indie</option>
                <option value="hiphop">Hip Hop</option>
                <option value="r&b">R&B</option>
                <option value="jazz">Jazz</option>
              </select>
              <textarea name="description" placeholder="Description" required></textarea>
              <input type="file" name="image" accept="image/*" required>
              <button type="submit" class="btn-submit">Add Product</button>
            </form>
          </div>

          @if(isset($products) && count($products) > 0)
            <div class="product-list">
              <h2>Current Products</h2>
              <table class="product-table">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Artist</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($products as $product)
                  <tr>
                    <td>{{ $product['id'] }}</td>
                    <td>{{ $product['title'] }}</td>
                    <td>{{ $product['artist'] }}</td>
                    <td>{{ $product['category'] }}</td>
                    <td>{{ $product['price'] }}</td>
                    <td>
                      <form action="{{ route('admin.product.delete', $product['id']) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-delete">Delete</button>
                      </form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          @else
            <p>No products found.</p>
          @endif
        </div>
      </div>
    </div>
    @include('admin.script')
  </body>
</html>