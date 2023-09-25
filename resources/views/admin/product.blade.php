{{-- <x-app-layout>

</x-app-layout> --}}

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')

    <style>

        .text_color
        {
            color:black;
            width: 100%;
            padding-bottom: 20px;
        }
        .font_size
        {
            font-size: 40px;
            padding-bottom: 40px;
        }
        .div_design
        {
            padding-bottom: 15px;
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

        <!-- Main Body Part -->

        <div class="main-panel">
            <div class="content-wrapper">

                @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif

                <div class="div_center">
                    <h1 class="font_size">Add Product</h1>

                    <form action="{{ url('/add_product') }}" method="POST" enctype="multipart/form-data">

                    @csrf

                    <div>
                        <label for="">Product Title: </label>
                        <input class="text_color" type="text" name="title" placeholder="Write a Title" required="">
                    </div>
                    <div class="div_design">
                        <label for="">Product Description: </label>
                        <input class="text_color" type="text" name="description" placeholder="Write a Description" required="">
                    </div>
                    <div class="div_design">
                        <label for="">Product Price: </label>
                        <input class="text_color" type="number" name="price" placeholder="Write a Price" required="">
                    </div>
                    <div class="div_design">
                        <label for="">Discount Price: </label>
                        <input class="text_color" type="number" name="discount" placeholder="Write the discount price">
                    </div>
                    <div class="div_design">
                        <label for="">Product Quantity: </label>
                        <input class="text_color" type="number" min="0" name="quantity" placeholder="Write the quantity" required="">
                    </div>
                    <div class="div_design">
                        <label for="">Product Category: </label>
                        <select name="category_id" id="" class="text_color" required>
                            <option value="">--Select Category--</option>

                            @foreach ($category as $category)

                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>

                            @endforeach

                        </select>
                    </div>
                    <div class="div_design">
                        <label for="">Product Image Here: </label>
                        <input type="file" name="image">
                    </div>
                    <div class="div_design">
                        <input class="btn btn-primary" type="submit" name="submit" value="Add Product">
                    </div>
                </div>
            </form>
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
