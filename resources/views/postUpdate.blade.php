<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Apply for job by Colorlib</title>

    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Main CSS-->
    <link href="{{asset('css/main.css')}}" rel="stylesheet" media="all">
</head>

<body>
<div class="page-wrapper bg-dark p-t-100 p-b-50">
    <div class="wrapper wrapper--w900">
        <div class="card card-6">
            @foreach($category_post as $posts)
                <div class="card-heading">
                    <h2 class="title">Add Post</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('adminUpdate',$posts->id)}}">
                        @csrf
                        <div class="form-row">
                            <div class="name">Title</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="title" value="{{$posts->title}}">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Category</div>
                            <div class="form-group" style="width: 76%;">
                                <select class="custom-select" name="categories[]" multiple style="width: 100%;">
                                    @foreach($categories as $category)
                                        <option value="{{$category -> id}}">{{$category -> name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Text</div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" name="post_text" placeholder="post content">{{$posts->post_text}}</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Upload Picture</div>
                            <div class="value">
                                <div class="input-group js-input-file">
                                    <input class="input-file" type="file" name="file_cv" id="file">
                                    <label class="label--desc" for="file">Choose file</label>
                                    <span class="input-file__info">No file chosen</span>
                                </div>
                                <div class="label--desc">Upload your post picture. Max file size 50 MB</div>
                            </div>
                        </div>
                </div>

                <div class="card-footer">
                    <button class="btn btn--radius-2 btn--blue-2" type="submit">Update</button>
                </div>

                </form>
            @endforeach
        </div>
    </div>
</div>

<!-- Jquery JS-->
<script src="vendor/jquery/jquery.min.js"></script>

<!-- Main JS-->
<script src="{{asset('js/global.js
