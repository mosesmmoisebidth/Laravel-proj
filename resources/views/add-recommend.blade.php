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
                    <!-- <a class="back" href="#">Back</a> -->
                </div>
                <div class="col-sm-8 col-8 text-center">
                    <h2 class="pagetitle">Upload a channel recommendation</h2>
                </div>
                <div class="col-sm-2 col-2 text-end">
                    <a href="{{url('/recommendation')}}" class="btn btn-black btn-round btn-cross-lg">
                        <!-- <img src="img/icon/Close-light.png" alt=""> -->
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <div class="container profile">

        
        <div class="row mt-5">
            <div class="col-lg-6 col-md-8 offset-lg-3 offset-md-2">

                <div class="row ">
                    <div class="col-sm-8 mb-3">
                        <input type="text" class="form-control" id="" placeholder="Title">
                    </div>
                    <div class="col-sm-4 mb-3">
                        <select class="form-select form-control" aria-label="Default select example">
                            <option selected>Plateform 1</option>
                            <option value="platform1">Plateform 1</option>
                            <option value="platform2">Plateform 2</option>
                            <option value="platform3">Plateform 3</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="" placeholder="Link">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-12">
                        <textarea name="" id="" class="form-control" placeholder="description" rows="4"></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-12 col-12 d-grid">
                        <a href="{{url('/recommendation')}" class="btn btn-login">Upload recommendation</a>
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