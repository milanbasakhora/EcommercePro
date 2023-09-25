{{-- <x-app-layout>

</x-app-layout> --}}

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')

    <style>
        .table
        {
            width: 100%;
        }
        .h2
        {
            font-size: 20px;
            text-align: center;
        }
    </style>

  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('admin.navbar')
        <!-- partial -->

        <div class="main-panel">
            <div class="content-wrapper">

                <table class="table">

                    <h2 class="h2">Product Details</h2>

                    <tr>
                        <td>Title</td>
                        <td>Description</td>
                        <td>Category</td>
                        <td>Quantity</td>
                        <td>Price</td>
                        <td>Discount Price</td>
                        <td>Product Image</td>
                        <td>Edit</td>
                        <td>Delete</td>
                    </tr>
                    @foreach($product as $product)
                    <tr>
                        <td>{{ $product->title }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->category->category_name }}</td>
                        <td>{{ $product->quantity }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->discount_price }}</td>
                        <td>
                            <img class="img_size" src="/product/{{ $product->image }}" alt="">
                        </td>
                        <td>
                            <a class="btn btn-success" href="{{ url('update_product',$product->id) }}">Edit</a>
                        </td>
                        <td>
                            <a class="btn btn-danger" onclick="return confirm('Are you sure to DELETE this?')" href="{{ url('delete_product',$product->id) }}">Delete</a>
                        </td>
                    </tr>
                    @endforeach

                </table>

            </div>
        </div>

        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
   @include('admin.script')
  </body>
</html>
