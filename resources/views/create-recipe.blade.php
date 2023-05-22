<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/stylesheet.css')}}">
</head>

<body>

    <header>
        <div class="container">
            <div class="row">
                <div class="col-sm-2 col-2">
                    <a class="back" href="{{url('/recipe')}}">Back</a>
                </div>
                <div class="col-sm-8 col-8">
                </div>
                <div class="col-sm-2 col-2 text-end">
                    <a href="{{url('/recipe')}}" class="btn btn-black btn-round btn-cross-lg">
                        <!-- <img src="img/icon/Close-light.png" alt=""> -->
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <div class="container recipe">
        
        <div class="row my-4">
            <div class="col-lg-6 col-md-8 offset-lg-3 offset-md-2">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="recipe-title">Create Recipes</h2>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-sm-6 mb-3">
                        <div class="upload-btn-wrapper d-grid" style="height: 200px;">
                            <button class="btn btn-round"><img src="{{asset('img/upload-image.png')}}" alt=""></button>
                            <input type="file" name="myfile" />
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-12 mb-3">
                                <input type="text" class="form-control" id="" placeholder="Ttile">
                            </div>
                            <div class="col-sm-12 mb-3">
                                <input type="text" class="form-control" id="" placeholder="Tag">
                            </div>
                            <div class="col-sm-12 mb-3">
                                <input type="text" class="form-control" id="" placeholder="Oxydation type">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 mb-3">
                        <textarea class="form-control" placeholder="Description" id="" rows="3"></textarea> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-12 d-grid">
                        <a href="{{url('/recipe')}" type="button" class="btn btn-login">Add Recipe</a>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>

</html>