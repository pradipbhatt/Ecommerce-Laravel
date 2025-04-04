<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
    <style>
        .title {
            color: white;
            padding-top: 25px;
            font-size: 25px;
        }

        .form-container {
            margin-top: 20px;
            background-color: #2c2f33;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        label {
            color: white;
        }

        .btn-submit {
            background-color: #4CAF50;
            color: white;
            border: none;
        }

        .btn-submit:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    @include('admin.sidebar')
    @include('admin.navbar')

   <div class="container-fluid page-body-wrapper">
    <div class="container d-flex justify-content-center">
        <div class="form-container">
            <h1 class="title text-center">Add Product</h1>

            <!-- Success Message -->
            @if(session()->has('message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('message') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            <form action="{{ route('uploadproduct') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="productTitle" class="form-label">Product Title</label>
                    <input type="text" id="productTitle" name="title" class="form-control" placeholder="Write a title" required>
                </div>

                <div class="mb-3">
                    <label for="productPrice" class="form-label">Price</label>
                    <input type="number" id="productPrice" name="price" class="form-control" placeholder="Give a product price" required>
                </div>

                <div class="mb-3">
                    <label for="productDescription" class="form-label">Description</label>
                    <textarea id="productDescription" name="description" class="form-control" placeholder="Write a description" rows="3" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="productQuantity" class="form-label">Product Quantity</label>
                    <input type="number" id="productQuantity" name="quantity" class="form-control" placeholder="Write the quantity amount" required>
                </div>

                <div class="mb-3">
                    <label for="productImage" class="form-label">Product Image</label>
                    <input type="file" id="productImage" name="file" class="form-control">
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>


    <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">
                Copyright © bootstrapdash.com 2021
            </span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">
                Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin template</a>
                from Bootstrapdash.com
            </span>
        </div>
    </footer>

    @include('admin.script')
</body>

</html>
