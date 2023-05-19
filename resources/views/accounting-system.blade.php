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
                    <h2 class="pagetitle">Account setting</h2>
                </div>
            </div>
        </div>
    </header>



    <div class="container-fluid mtop order">
        <div class="mainbox">
            <div id="sidemenubox" class="sidebarbox fixed">
                <ul>
                    <li> <a href="{{url('/video-list')}}">Video</a> </li>
                    <li> <a href="{{url('/food-overview')}}">Food</a> </li>
                    <li> <a href="{{url('/ready-meal')}}">Ready Meal</a> </li>
                    <li> <a href="{{url('/recipe')}}">Recipe</a> </li>
                    <li> <a href="{{url('/product')}}">Product</a> </li>

                    <li> <a href="{{url('/push-notification')}}">Push notification</a> </li>
                    <li> <a href="{{url('/recommendation')}}">Reccomendation</a> </li>
                    <li> <a href="{{url('/restaurant-profile')}}">Administration</a> </li>
                    <li> <a href="{{url('/manage-point')}}">Manage point system</a> </li>
                    <li> <a href="{{url('/applicant-list')}}">Applicant list</a> </li>
                    <li> <a href="{{url('/accounting-system')}}" class="active">Account setting</a> </li>
                    <li> <a href="{{url('/allergy-list')}}">Allergy list</a> </li>
                    <li> <a href="{{url('/customer-list')}}">Customer list</a> </li>
                </ul>
            </div>


            <div class="contentbox">

                <div class="row">
                    <div class="col-sm-6 col-6 text-start">
                        <!-- <a class="back" href="#">Back</a> -->
                    </div>
                    <div class="col-sm-6 col-6 text-end">
                        <button type="button" class="btn btn-theme btn-round btn-cross-lg" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            <!-- <img src="img/icon/plus-light.png" alt=""> -->
                            <i class="fa fa-plus" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-md-6 offset-md-3 col-sm-8 offset-sm-2 text-center accountsetting">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="coach-tab" data-bs-toggle="tab"
                                    data-bs-target="#coach-tab-pane" type="button" role="tab" aria-controls="coach-tab-pane"
                                    aria-selected="true">Coaches</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="restaurant-tab" data-bs-toggle="tab"
                                    data-bs-target="#restaurant-tab-pane" type="button" role="tab"
                                    aria-controls="restaurant-tab-pane" aria-selected="false">Restaurant</button>
                            </li>
                        </ul>
                    </div>
                </div>


                <div class="row mt-2">
                    <div class="col-lg-10 offset-lg-1">

                        <div class="tab-content" id="myTabContent">

                            <div class="tab-pane fade show active" id="coach-tab-pane" role="tabpanel"
                                aria-labelledby="coach-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="card accountsetting my-2">
                                            <div class="card-body">
                                                <div class="card-inner">
                                                    <div class="card-img">
                                                        <img src="{{asset('img/food1.jpg')}}" alt="">
                                                    </div>
                                                    <div class="card-content">
                                                        <h5 class="card-title mb-2">Coache name</h5>
                                                        <p>23</p>
                                                        <p class="address"><img class="width20" src="{{asset('img/icon/Wallet.png')}}"
                                                                alt=""> 23,05 €</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="card accountsetting my-2">
                                            <div class="card-body">
                                                <div class="card-inner">
                                                    <div class="card-img">
                                                        <img src="{{asset('img/food1.jpg')}}" alt="">
                                                    </div>
                                                    <div class="card-content">
                                                        <h5 class="card-title mb-2">Coache name</h5>
                                                        <p>23</p>
                                                        <p class="address"><img class="width20" src="{{asset('img/icon/location.png')}}"
                                                                alt=""> 23,05 €</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="card accountsetting my-2">
                                            <div class="card-body">
                                                <div class="card-inner">
                                                    <div class="card-img">
                                                        <img src="{{asset('img/food1.jpg')}}" alt="">
                                                    </div>
                                                    <div class="card-content">
                                                        <h5 class="card-title mb-2">Coache name</h5>
                                                        <p>23</p>
                                                        <p class="address"><img class="width20" src="{{asset('img/icon/Wallet.png')}}"
                                                                alt=""> 23,05 €</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="card accountsetting my-2">
                                            <div class="card-body">
                                                <div class="card-inner">
                                                    <div class="card-img">
                                                        <img src="{{asset('img/food1.jpg')}}" alt="">
                                                    </div>
                                                    <div class="card-content">
                                                        <h5 class="card-title mb-2">Coache name</h5>
                                                        <p>23</p>
                                                        <p class="address"><img class="width20" src="{{asset('img/icon/Wallet.png')}}"
                                                                alt=""> 23,05 €</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="restaurant-tab-pane" role="tabpanel" aria-labelledby="restaurant-tab"
                                tabindex="0">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="card accountsetting my-2">
                                            <div class="card-body">
                                                <div class="card-inner">
                                                    <div class="card-img">
                                                        <img src="{{asset('img/food1.jpg')}}" alt="">
                                                    </div>
                                                    <div class="card-content">
                                                        <h5 class="card-title mb-2">Restaurant name</h5>
                                                        <p>23</p>
                                                        <p class="address"><img class="width20" src="{{asset('img/icon/Wallet.png')}}"
                                                                alt=""> 23,05 €</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="card accountsetting my-2">
                                            <div class="card-body">
                                                <div class="card-inner">
                                                    <div class="card-img">
                                                        <img src="{{asset('img/food1.jpg')}}" alt="">
                                                    </div>
                                                    <div class="card-content">
                                                        <h5 class="card-title mb-2">Restaurant name</h5>
                                                        <p>23</p>
                                                        <p class="address"><img class="width20" src="{{asset('img/icon/Wallet.png')}}"
                                                                alt=""> 23,05 €</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="card accountsetting my-2">
                                            <div class="card-body">
                                                <div class="card-inner">
                                                    <div class="card-img">
                                                        <img src="{{asset('img/food1.jpg')}}" alt="">
                                                    </div>
                                                    <div class="card-content">
                                                        <h5 class="card-title mb-2">Restaurant name</h5>
                                                        <p>553</p>
                                                        <p class="address"><img class="width20" src="{{asset('img/icon/Wallet.png')}}"
                                                                alt=""> 23,05 €</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="card accountsetting my-2">
                                            <div class="card-body">
                                                <div class="card-inner">
                                                    <div class="card-img">
                                                        <img src="{{asset('img/food1.jpg')}}" alt="">
                                                    </div>
                                                    <div class="card-content">
                                                        <h5 class="card-title mb-2">Restaurant name</h5>
                                                        <p>553</p>
                                                        <p class="address"><img class="width20" src="{{asset('img/icon/Wallet.png')}}"
                                                                alt=""> 23,05 €</p>
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

            </div>



        </div>
    </div>




    <!-- Button trigger modal -->
    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
  </button> -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 mb-2">
                            <h2 class="modal-title fs-5 text-center">
                                Invite Restaurant
                            </h2>
                        </div>
                    </div>
                    <div class="mt-3">
                        <input type="text" class="form-control" id="" placeholder="Email">
                    </div>
                    <div class="d-grid my-3">
                        <button type="button" class="btn btn-login" data-bs-dismiss="modal">Upload</button>
                    </div>
                </div>
                <!-- <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div> -->
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