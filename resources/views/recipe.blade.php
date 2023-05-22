<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Web</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/stylesheet.css')}}">
    <link rel="stylesheet" href="{{asset('css/lionbars.css')}}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>

    <header class="fixed">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2 col-2">
                    <a href="#" id="togglemenu" class="togglemenubar"><i class="fa fa-bars" aria-hidden="true"></i> </a>
                </div>                
                <div class="col-md-8 col-8 text-center">
                    <h2 class="pagetitle">Recipe</h2>
                </div>
                <div class="col-md-2 col-2 text-start">
                    <!-- <button type="button" class="btn btn-black btn-circle btn-menu-lg">
                        <img src="img/icon/menu.png" alt="">
                    </button> -->
                </div>
            </div>
        </div>
    </header>

    <div class="container-fluid mtop recipe">
        <div class="mainbox">
            <div id="sidemenubox" class="sidebarbox fixed">
                <ul>
                    <li><a href="{{url('/video-list')}}">Video</a> </li>
                    <li> <a href="{{url('/food-overview')}}">Food</a> </li>
                    <li> <a href="{{url('/ready-meal')}}" class="active">Ready Meal</a> </li>
                    <li> <a href="{{url('/recipe')}}">Recipe</a> </li>
                    <li> <a href="{{url('/product')}}">Product</a> </li>

                    <li> <a href="{{url('/push-notification')}}">Push notification</a> </li>
                    <li> <a href="{{url('/recommendation')}}">Reccomendation</a> </li>
                    <li> <a href="{{url('/restaurant-profile')}}">Administration</a> </li>
                    <li> <a href="{{url('/manage-point')}}">Manage point system</a> </li>
                    <li> <a href="{{url('/applicant-list')}}">Applicant list</a> </li>
                    <li> <a href="{{url('/accounting-system')}}">Account setting</a> </li>
                    <li> <a href="{{url('/allergy-list')}}">Allergy list</a> </li>
                    <li> <a href="{{url('/customer-list')}}">Customer list</a> </li>
                </ul>
            </div>
            <div class="contentbox">


                <div class="row mt-1">
                    <div class="col-md-4 col-sm-6 col-7 offset-md-4">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Find your recipe" aria-label="">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-5 text-end">                
                        <a href="{{url('/create-recipe')}}" class="btn btn-theme btn-round btn-add-lg mx-2">
                            <!-- <img src="img/icon/add-round.png"> -->
                            <i class="fa fa-plus" aria-hidden="true"></i>
                        </a>
                        <a href="add-recipe-ingredient.html" class="btn btn-black btn-round btn-add-lg">
                            <!-- <img src="img/icon/filter1-light.png"> -->
                            <!-- <i class="fa fa-exchange" aria-hidden="true"></i> -->
                            <i class="fa fa-asterisk" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-4 my-2">
                        <div class="card food-overview">
                            <div class="card-body">
                                <div class="card-inner">
                                    <div class="card-img">
                                        <img src="{{asset('img/food1.jpg')}}" alt="">
                                    </div>
                                    <div class="card-content">
                                        <h5 class="card-title mb-4">Tesla</h5>
                                        <span class=""> <strong>30€</strong> </span>
                                        <div>
                                            <a href="#" class="card-link red">
                                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                                            </a>
                                            <a href="#" class="card-link">
                                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                            </a>
                                            <a href="#" class="card-link">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 my-2">
                        <div class="card food-overview">
                            <div class="card-body">
                                <div class="card-inner">
                                    <div class="card-img">
                                        <img src="{{asset('img/food1.jpg')}}" alt="">
                                    </div>
                                    <div class="card-content">
                                        <h5 class="card-title mb-4">Tesla</h5>
                                        <span class=""> <strong>30€</strong> </span>
                                        <div>
                                            <a href="#" class="card-link red">
                                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                                            </a>
                                            <a href="#" class="card-link">
                                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                            </a>
                                            <a href="#" class="card-link">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 my-2">
                        <div class="card food-overview">
                            <div class="card-body">
                                <div class="card-inner">
                                    <div class="card-img">
                                        <img src="{{asset('img/food1.jpg')}}" alt="">
                                    </div>
                                    <div class="card-content">
                                        <h5 class="card-title mb-4">Tesla</h5>
                                        <span class=""> <strong>30€</strong> </span>
                                        <div>
                                            <a href="#" class="card-link red">
                                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                                            </a>
                                            <a href="#" class="card-link">
                                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                            </a>
                                            <a href="#" class="card-link">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 my-2">
                        <div class="card food-overview">
                            <div class="card-body">
                                <div class="card-inner">
                                    <div class="card-img">
                                        <img src="{{asset('img/food1.jpg')}}" alt="">
                                    </div>
                                    <div class="card-content">
                                        <h5 class="card-title mb-4">Tesla</h5>
                                        <span class=""> <strong>30€</strong> </span>
                                        <div>
                                            <a href="#" class="card-link red">
                                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                                            </a>
                                            <a href="#" class="card-link">
                                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                            </a>
                                            <a href="#" class="card-link">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 my-2">
                        <div class="card food-overview">
                            <div class="card-body">
                                <div class="card-inner">
                                    <div class="card-img">
                                        <img src="{{asset('img/food1.jpg')}}" alt="">
                                    </div>
                                    <div class="card-content">
                                        <h5 class="card-title mb-4">Tesla</h5>
                                        <span class=""> <strong>30€</strong> </span>
                                        <div>
                                            <a href="#" class="card-link red">
                                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                                            </a>
                                            <a href="#" class="card-link">
                                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                            </a>
                                            <a href="#" class="card-link">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 my-2">
                        <div class="card food-overview">
                            <div class="card-body">
                                <div class="card-inner">
                                    <div class="card-img">
                                        <img src="{{asset('img/food1.jpg')}}" alt="">
                                    </div>
                                    <div class="card-content">
                                        <h5 class="card-title mb-4">Tesla</h5>
                                        <span class=""> <strong>30€</strong> </span>
                                        <div>
                                            <a href="#" class="card-link red">
                                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                                            </a>
                                            <a href="#" class="card-link">
                                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                            </a>
                                            <a href="#" class="card-link">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 my-2">
                        <div class="card food-overview">
                            <div class="card-body">
                                <div class="card-inner">
                                    <div class="card-img">
                                        <img src="{{asset('img/food1.jpg')}}" alt="">
                                    </div>
                                    <div class="card-content">
                                        <h5 class="card-title mb-4">Tesla</h5>
                                        <span class=""> <strong>30€</strong> </span>
                                        <div>
                                            <a href="#" class="card-link red">
                                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                                            </a>
                                            <a href="#" class="card-link">
                                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                            </a>
                                            <a href="#" class="card-link">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 my-2">
                        <div class="card food-overview">
                            <div class="card-body">
                                <div class="card-inner">
                                    <div class="card-img">
                                        <img src="{{asset('img/food1.jpg')}}" alt="">
                                    </div>
                                    <div class="card-content">
                                        <h5 class="card-title mb-4">Tesla</h5>
                                        <span class=""> <strong>30€</strong> </span>
                                        <div>
                                            <a href="#" class="card-link red">
                                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                                            </a>
                                            <a href="#" class="card-link">
                                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                            </a>
                                            <a href="#" class="card-link">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 my-2">
                        <div class="card food-overview">
                            <div class="card-body">
                                <div class="card-inner">
                                    <div class="card-img">
                                        <img src="{{asset('img/food1.jpg')}}" alt="">
                                    </div>
                                    <div class="card-content">
                                        <h5 class="card-title mb-4">Tesla</h5>
                                        <span class=""> <strong>30€</strong> </span>
                                        <div>
                                            <a href="#" class="card-link red">
                                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                                            </a>
                                            <a href="#" class="card-link">
                                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                            </a>
                                            <a href="#" class="card-link">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    <script src="{{asset('js/lionbars.js')}}"></script>

    <script type="text/javascript">

        $("#togglemenu").click(function() {
            $("#sidemenubox").toggle(300);
        });

        // $(document).ready(function() {
        //     $('#accordionSidebar').lionbars();       
        // });  
    </script>


</body>

</html>