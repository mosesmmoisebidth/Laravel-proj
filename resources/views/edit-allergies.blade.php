<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Web</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/stylesheet.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>

<body>

    <header>
        <div class="container ">
            <div class="row">
                <div class="col-md-2 text-start">
                    <!-- <button type="button" class="btn btn-black btn-circle btn-menu-lg">
                        <img src="img/icon/menu.png" alt="">
                    </button> -->
                </div>
                <div class="col-md-8">
                </div>
                <div class="col-md-2 text-end">
                    <a href="{{url('/allergy-list')}}" class="btn btn-black btn-round btn-cross-lg">
                        <!-- <img src="img/icon/Close-light.png" alt=""> -->
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <div class="container allergy">

        <div class="row mt-5">
            <div class="col-md-12 text-center">
                <h2>Intolerances</h2>
            </div>
            <!-- <div class="col-md-2 text-end">
                <button type="button" class="btn btn-theme btn-round btn-add-lg">
                    <img src="img/icon/add-round.png" alt="">
                </button>
            </div> -->
        </div>
   
        <div class="row">
            <div class="col-sm-4 offset-sm-4 mt-4">
                <input type="text" class="form-control" id="" placeholder="gluten">
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-sm-4">                
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                    <label class="form-check-label" for="flexCheckIndeterminate">
                        Checkbox ingredient
                    </label>
                  </div>
            </div>
            <div class="col-sm-4 mb-3">                
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                    <label class="form-check-label" for="flexCheckIndeterminate">
                        Checkbox ingredient
                    </label>
                  </div>
            </div>
            <div class="col-sm-4 mb-3">                
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                    <label class="form-check-label" for="flexCheckIndeterminate">
                        Checkbox ingredient
                    </label>
                  </div>
            </div>
            <div class="col-sm-4">                
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                    <label class="form-check-label" for="flexCheckIndeterminate">
                        Checkbox ingredient
                    </label>
                  </div>
            </div>
            <div class="col-sm-4">                
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                    <label class="form-check-label" for="flexCheckIndeterminate">
                        Checkbox ingredient
                    </label>
                  </div>
            </div>
            <div class="col-sm-4 mb-3">                
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                    <label class="form-check-label" for="flexCheckIndeterminate">
                        Checkbox ingredient
                    </label>
                  </div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-sm-4 col-12 offset-sm-4 d-grid mt-4">
                <a href="{{url('/allergy-list')}}" class="btn btn-login">Save</a>
            </div>
        </div>





    </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>

</html>