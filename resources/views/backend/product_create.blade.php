@extends('backend.layouts.app')

@section('content')
<main role="main" class="main-content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="row">
                    <!-- Recent orders -->
                    <div class="col-md-12">
                        @if (Session::has('success'))
                        <div class="alert alert-success">
                            <strong class="text-success">{{ Session::get('success') }}</strong>
                        </div>
                        @endif
                        <h6 class="mb-3">Create Product</h6>
                        <div class="row">
                            <div class="col-md-6">
                                <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group mb-3">
                                        <label for="slug">Category</label>
                                        <select name="category_id" class="custom-select" id="custom-select">
                                            @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ ucfirst($category->name) }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" id="name" class="form-control" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="price">Price</label>
                                        <input type="number" name="price" id="price" class="form-control" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="qty">Quantity</label>
                                        <input type="number" name="qty" id="qty" class="form-control" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="image">Image</label>
                                        <input type="file" name="image" id="image" class="form-control" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div> <!-- / .col-md-3 -->
                </div> <!-- end section -->
            </div>
        </div>
    </div>
</main>
@endsection
