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
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
<div class="page-wrapper bg-dark p-t-100 p-b-50">
    <div class="wrapper wrapper--w900">
        <div class="card card-6">
            <div class="card-heading">
                <h2 class="title">Add Post</h2>
            </div>
            <div class="card-body">
                <form method="GET" action="{{route('home1')}}">
                    <div class="form-row">
                        <div class="name">Title</div>
                        <div class="value">
                            <input class="input--style-6" type="text" name="title">
                        </div>
                    </div>



{{--                    <div class="form-group">--}}
{{--                        <label for="exampleFormControlSelect1">Example select</label>--}}
{{--                        <input class="text" type="email" name="email" placeholder="example@email.com" >--}}
{{--                        <select class="form-control" id="exampleFormControlSelect1">--}}
{{--                            <option>1</option>--}}
{{--                            <option>2</option>--}}
{{--                            <option>3</option>--}}
{{--                            <option>4</option>--}}
{{--                            <option>5</option>--}}
{{--                        </select>--}}
{{--                    </div>--}}



{{--                    <div class="form-row">--}}
{{--                        <div class="name">Category</div>--}}
{{--                        <div class="value">--}}
{{--                            <div class="input-group">--}}
{{--                                <input class="input--style-6" type="email" name="category" placeholder="example@email.com" >--}}
{{--                             </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}



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
                                <textarea class="textarea--style-6" name="post_text" placeholder="post content"></textarea>
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
                        <button class="btn btn--radius-2 btn--blue-2" type="submit">Send Application</button>

                    </div>
                </form>
            </div>
            <div class="card-footer">
                <button class="btn btn--radius-2 btn--blue-2" type="submit">Send Application</button>
            </div>
        </div>
    </div>
</div>

<!-- Jquery JS-->
<script src="vendor/jquery/jquery.min.js"></script>


<!-- Main JS-->
<script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
