<!-- <!doctype html> -->
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
                <div class="col-sm-10 col-10">
                </div>
                <div class="col-sm-2 col-2 text-end">
                    <a href="{{url('/ready-meal')}}" class="btn btn-black btn-round btn-cross-lg">
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
                        <h2 class="profile-title">Create ready meals</h2>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-12">
                        <div class="upload-btn-wrapper d-grid">
                            <button class="btn btn-round"><img src="{{asset('img/upload-image.png')}}" alt=""></button>
                            <input type="file" name="myfile" />
                          </div>
                    </div>
                </div>                
                <div class="row mb-3">
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="" placeholder="Title">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-12">
                        <textarea class="form-control" name="" id=""  rows="3" placeholder="Description"></textarea>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-sm-12 col-12 d-grid mt-2">
                        <a href="{{url('/add-ready-ingredient')}}" class="btn btn-login">Add ingredient</a>
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