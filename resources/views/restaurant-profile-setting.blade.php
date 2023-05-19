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
                    <h2 class="pagetitle">Administration</h2>
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
                    <!-- <div class="col-md-1">
                        <a class="back" href="#">Back</a>
                    </div> -->
                </div>
                <div class="row mt-3">
                    <!-- <div class="col-md-2 text-start">
                        <button type="button" class="btn btn-black btn-round btn-add-lg">
                            <img src="img/icon/add-round.png" alt="">
                        </button>
                    </div> -->
                    <div class="col-md-6 offset-md-3 text-center prosetting">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="coach-tab" data-bs-toggle="tab"
                                    data-bs-target="#coach-tab-pane" type="button" role="tab" aria-controls="coach-tab-pane"
                                    aria-selected="true">Coaches</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="restaurant-tab" data-bs-toggle="tab" data-bs-target="#restaurant-tab-pane"
                                    type="button" role="tab" aria-controls="restaurant-tab-pane"
                                    aria-selected="false">Restaurant</button>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-content mt-2" id="myTabContent">

                    <div class="tab-pane fade show active" id="coach-tab-pane" role="tabpanel" aria-labelledby="coach-tab"
                        tabindex="0">
                        <div class="row">
                            <div class="col-lg-10 offset-lg-1">
                                <div class="card prosetting my-3">
                                    <div class="card-body">
                                        <div class="card-inner">
                                            <div class="card-img">
                                                <img src="{{asset('img/food1.jpg')}}" alt="">
                                            </div>
                                            <div class="card-content">
                                                <h5 class="card-title mb-4">Coache name</h5>
                                                <p>23</p>
                                                <p class="address">
                                                    <!-- <img class="width18" src="img/icon/location.png" alt="">  -->
                                                    <i class="fa fa-street-view" aria-hidden="true"></i>
                                                    Bruchhausenerstrabe 36, 59759 Arnsberg</p>
                                            </div>
                                            <div class="card-content text-end">
                                                <p class="text-end">DE94 4404 0037 0170 5979 00</p>
                                                <p class="text-end">David Thiben Kuman</p>
                                                <p class="text-end">+49 176 41474 606</p>
                                                <p class="text-end">De340799102</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card prosetting my-3">
                                    <div class="card-body">
                                        <div class="card-inner">
                                            <div class="card-img">
                                                <img src="{{asset('img/food1.jpg')}}" alt="">
                                            </div>
                                            <div class="card-content">
                                                <h5 class="card-title mb-4">Coache name</h5>
                                                <p>23</p>
                                                <p class="address"><i class="fa fa-street-view" aria-hidden="true"></i> Bruchhausenerstrabe 36, 59759 Arnsberg</p>
                                            </div>
                                            <div class="card-content text-end">
                                                <p class="text-end">DE94 4404 0037 0170 5979 00</p>
                                                <p class="text-end">David Thiben Kuman</p>
                                                <p class="text-end">+49 176 41474 606</p>
                                                <p class="text-end">De340799102</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card prosetting my-3">
                                    <div class="card-body">
                                        <div class="card-inner">
                                            <div class="card-img">
                                                <img src="{{asset('img/food1.jpg')}}" alt="">
                                            </div>
                                            <div class="card-content">
                                                <h5 class="card-title mb-4">Coache name</h5>
                                                <p>23</p>
                                                <p class="address"><i class="fa fa-street-view" aria-hidden="true"></i> Bruchhausenerstrabe 36, 59759 Arnsberg</p>
                                            </div>
                                            <div class="card-content text-end">
                                                <p class="text-end">DE94 4404 0037 0170 5979 00</p>
                                                <p class="text-end">David Thiben Kuman</p>
                                                <p class="text-end">+49 176 41474 606</p>
                                                <p class="text-end">De340799102</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>                    
                        </div>
                    </div>

                    <div class="tab-pane fade" id="restaurant-tab-pane" role="tabpanel" aria-labelledby="restaurant-tab" tabindex="0">
                        <div class="row">
                            <div class="col-lg-10 offset-lg-1">
                                <div class="card prosetting my-3">
                                    <div class="card-body">
                                        <div class="card-inner">
                                            <div class="card-img">
                                                <img src="{{asset('img/food1.jpg')}}" alt="">
                                            </div>
                                            <div class="card-content">
                                                <h5 class="card-title mb-4">Restaurant name</h5>
                                                <p>23</p>
                                                <p class="address"><i class="fa fa-street-view" aria-hidden="true"></i> Bruchhausenerstrabe 36, 59759 Arnsberg</p>
                                            </div>
                                            <div class="card-content text-end">
                                                <p class="text-end">DE94 4404 0037 0170 5979 00</p>
                                                <p class="text-end">David Thiben Kuman</p>
                                                <p class="text-end">+49 176 41474 606</p>
                                                <p class="text-end">De340799102</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card prosetting my-3">
                                    <div class="card-body">
                                        <div class="card-inner">
                                            <div class="card-img">
                                                <img src="{{asset('img/food1.jpg')}}" alt="">
                                            </div>
                                            <div class="card-content">
                                                <h5 class="card-title mb-4">Restaurant name</h5>
                                                <p>23</p>
                                                <p class="address"><i class="fa fa-street-view" aria-hidden="true"></i> Bruchhausenerstrabe 36, 59759 Arnsberg</p>
                                            </div>
                                            <div class="card-content text-end">
                                                <p class="text-end">DE94 4404 0037 0170 5979 00</p>
                                                <p class="text-end">David Thiben Kuman</p>
                                                <p class="text-end">+49 176 41474 606</p>
                                                <p class="text-end">De340799102</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card prosetting my-3">
                                    <div class="card-body">
                                        <div class="card-inner">
                                            <div class="card-img">
                                                <img src="{{asset('img/food1.jpg')}}" alt="">
                                            </div>
                                            <div class="card-content">
                                                <h5 class="card-title mb-4">Restaurant name</h5>
                                                <p>23</p>
                                                <p class="address"><i class="fa fa-street-view" aria-hidden="true"></i> Bruchhausenerstrabe 36, 59759 Arnsberg</p>
                                            </div>
                                            <div class="card-content text-end">
                                                <p class="text-end">DE94 4404 0037 0170 5979 00</p>
                                                <p class="text-end">David Thiben Kuman</p>
                                                <p class="text-end">+49 176 41474 606</p>
                                                <p class="text-end">De340799102</p>
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