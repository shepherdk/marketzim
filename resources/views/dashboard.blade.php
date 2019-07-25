@extends('layouts.app')

@section('content')
<!-- Start Bradcaump area -->
<div class="ht__bradcaump__area bg-image--6">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="bradcaump__inner text-center">
                    <h2 class="bradcaump-title">Dashboard</h2>
                    <nav class="bradcaump-content">
                        <a class="breadcrumb_item" href="/">Home</a>
                        <span class="brd-separetor">/</span>
                        <span class="breadcrumb_item active">Dashboard</span>
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
        <div class="col-md-8">

            @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
                </div><br />
            @endif

            <div class="card">
                <div class="card-header">
                    Dashboard | {{ Auth::user()->name}}
                    <a href="{{ route('articles.create') }}" class="card-link btn btn-outline-dark btn-sm pull-right">Create New <i class="fa fa-plus-circle" aria-hidden="true"></i></a>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div>
                        @if(Count($articles) > 0)
                        <table class="table table-borderless table-hover">
                                <thead class="table-info">
                                    <tr>
                                    {{-- <th>Main image</th> --}}
                                    <th>Title</th>
                                    <th>Created when</th>
                                    <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($articles as $article)
                                    <tr>
                                    {{-- <td><img src="storage/main_images/{{ $article->main_image }}" style="width:30%;" class="img-thumbnail mr-0"></td> --}}
                                    <td><a href="/articles/{{ $article->id}}">{{ $article->title }}</a></td>
                                    <td>{{ date("D M d - h:i", strtotime($article->created_at)) }}</td>
                                    <td>
                                        <form action="{{ route('articles.destroy', $article->id) }}" method="POST">
                                            <a href="/articles/{{ $article->id }}/edit" class="btn btn-sm btn-outline-info mr-4"><i class="fa fa-edit"></i></a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @else
                                <p class="card-text">You have not added any articles yet.</p>
                            @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

@endsection

