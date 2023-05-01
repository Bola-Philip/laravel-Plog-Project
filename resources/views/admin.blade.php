@extends('layouts.app')

@section('content')
    <!-- Page header with logo and tagline-->
    <header class="py-5 bg-light border-bottom mb-4">
        <div class="container">
            <div class="text-center my-5">
                <h1 class="fw-bolder">Welcome to Blog Home!</h1>
                <p class="lead mb-0">A Bootstrap 5 starter layout for your next blog homepage</p>
            </div>
        </div>
    </header>
    <!-- Page content-->
    <div class="container">
        <div class="row">
            <!-- Blog entries-->
            <div class="col-lg-8">
                <!-- Featured blog post-->
                <!-- Nested row for non-featured blog posts-->

                <div class="row">
                    @foreach($category_post as $categories_posts)
                        @foreach($categories_posts->posts as $posts)
                            <div class="col-lg-6">
                                <!-- Blog post-->
                                <div class="card mb-4">
                                    <a href="{{route('post.show', $posts->id)}}"><img class="card-img-top" src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg" alt="..." /></a>
                                    <div class="card-body">
                                        <div class="small text-muted">{{$posts -> created_at}}</div>
                                        <h2 class="card-title h4">{{$posts -> title}}</h2>
                                        <p class="card-text">{{$posts -> post_text}}</p>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <a class="btn btn-primary" href="{{route('post.show', $posts->id)}}">Read more →</a>
                                            </div>
                                            <div class="col-sm-6 d-flex justify-content-end">
                                                <a class="btn btn-success float-right mr-2" href="{{route('adminEdit',$posts->id)}}">Edit</a>
                                                <form action="{{route('adminDelete', $posts->id)}}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger float-right ml-2" style="margin-left: 10px;">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endforeach
                </div>

                <!-- Pagination-->
                <nav aria-label="Pagination">
                    <hr class="my-0" />
                    <ul class="pagination justify-content-center my-4">
                        <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Newer</a></li>
                        <li class="page-item active" aria-current="page"><a class="page-link" href="#!">1</a></li>
                        <li class="page-item"><a class="page-link" href="#!">2</a></li>
                        <li class="page-item"><a class="page-link" href="#!">3</a></li>
                        <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>
                        <li class="page-item"><a class="page-link" href="#!">15</a></li>
                        <li class="page-item"><a class="page-link" href="#!">Older</a></li>
                    </ul>
                </nav>
            </div>
            <!-- Side widgets-->
            <div class="col-lg-4">
                <!-- Search widget-->
                <div class="card mb-4">
                    <div class="card-header">Search</div>
                    <div class="card-body">
                        <div class="input-group">
                            <input class="form-control" type="text" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search" />
                            <button class="btn btn-primary" id="button-search" type="button">Go!</button>
                        </div>
                    </div>
                </div>
                <!-- Categories widget-->
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span>Categories</span>
                        <a href="" class="btn btn-sm btn-primary">Edit</a>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <ul class="list-unstyled mb-0">
                                    @foreach($categories as $category)
                                        <li class="mb-2">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <a href="{{ route('admin')}}?category_id={{$category->id}}">{{ $category->name }}</a>
                                                </div>
                                                <div>
                                                    <form action="" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger">delete<i class="fas fa-trash"></i></button>
                                                    </form>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Side widget-->
                <div class="card mb-4">
                    <div class="card-header">Side Widget</div>
                    <div class="card-body">You can put anything you want inside of these side widgets. They are easy to use, and feature the Bootstrap 5 card component!</div>
                </div>
            </div>
        </div>
    </div>
@endsection

