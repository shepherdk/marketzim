@extends('layouts.app')

@section('content')
<!-- Start Bradcaump area -->
<div class="ht__bradcaump__area bg-image--6">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="bradcaump__inner text-center">
                    <h2 class="bradcaump-title">Create Article</h2>
                    <nav class="bradcaump-content">
                        <a class="breadcrumb_item" href="/">Home</a>
                        <span class="brd-separetor">/</span>
                        <span class="breadcrumb_item active">New Article</span>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- End Bradcaump area -->
    <!-- Start My Account Area -->
    <section class="my_account_area pt--80 pb--55 bg--white">
        <div class="container">
            <div class="row justify-content-center">

            <!--Grid column-->
            <div class="col-md-8">
                    <h2 class="h2 text-center mb-4">Create a new entry</h2>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

        <!--Card content-->
        <div class="card">
        <form action="{{ route('articles.store') }}" method="POST" class="card-body" enctype="multipart/form-data">
            @csrf
            <!--title-->
            <div class="col-md-6 mb-3">
                <label for="cc-number">Title</label>
                <input type="text" class="form-control" name="title" id="cc-number" placeholder="" required>
                <div class="invalid-feedback">
                    Title is required
                </div>
            </div>

            <!--file-->
            <div class="col-md-6 mb-3">
                <label for="file">Upload article picture</label>
                <input name="main_image" id="input-id" type="file" class="file" data-preview-file-type="text" >

            </div>

            <!--Grid column-->
            <div class="col-lg-6 col-md-12 mb-4">

                <label for="type">Type</label>
                <select name="type" class="custom-select d-block w-100" id="type" required>
                    <option value="">Choose...</option>
                    <option value="stock">Unique</option>
                    <option value="unique">Stock</option>
                </select>
                <div class="invalid-feedback">
                Please select a valid option.
                </div>

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-6 col-md-12 mb-4">

                <label for="category">Category</label>
                <select name="category" class="custom-select d-block w-100" id="category" required>
                    <option value="">Choose...</option>
                    <option value="politics">Politics</option>
                    <option value="religion">Religion</option>
                    <option value="history">History</option>
                </select>
                <div class="invalid-feedback">
                Please select a valid option.
                </div>

            </div>
            <!--Grid column-->

            <div class="col-md-6 mb-3">
                <label for="price">Article price</label>
                <input type="text" class="form-control" name="price" id="price" placeholder="" required>
                <div class="invalid-feedback">
                    Price is required
                </div>
            </div>

                <label for="">Description</label>
                <textarea class="form-control mb-2" name="description" id="article-ckeditor" rows="3" placeholder="Article description" required></textarea>

                <hr class="mb-4">
                <button class="btn btn-primary btn-lg btn-block" name="submit" type="submit">Create article</button>

        </form>

        </div>
            <!--/.Card-->


        </div>
        <!--Grid column-->

    </div>
    <!--Grid row-->

</div>
<!--Container-->
</section>

@endsection


