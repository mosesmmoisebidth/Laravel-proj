<!-- <!doctype html> -->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
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
                    <h2 class="pagetitle">Reccomendation</h2>
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
                    <li> <a href="{{url('/ready-meal')}}">Ready Meal</a> </li>
                    <li> <a href="{{url('/recipe')}}">Recipe</a> </li>
                    <li> <a href="{{url('/product')}}">Product</a> </li>

                    <li> <a href="{{url('/push-notification')}}">Push notification</a> </li>
                    <li> <a href="{{url('/recommendation')}}" class="active">Reccomendation</a> </li>
                    <li> <a href="{{url('/restaurant-profile')}}">Administration</a> </li>
                    <li> <a href="{{url('/manage-point')}}">Manage point system</a> </li>
                    <li> <a href="{{url('/applicant-list')}}">Applicant list</a> </li>
                    <li> <a href="{{url('/accounting-system')}}">Account setting</a> </li>
                    <li> <a href="{{url('/allergy-list')}}">Allergy list</a> </li>
                    <li> <a href="{{url('/customer-list')}}">Customer list</a> </li>
                </ul>
            </div>


            <div class="contentbox">

                <div class="row">
                    <div class="col-md-1">
                        <!-- <a class="back" href="#">Back</a> -->
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-3 col-sm-6 col-8">
                        <div class="plateform">
                            <select class="form-select form-control" aria-label="Default select example">
                                <option selected>Plateform 1</option>
                                <option value="platform1">Plateform 1</option>
                                <option value="platform2">Plateform 2</option>
                                <option value="platform3">Plateform 3</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6 col-4 offset-md-7 text-end">
                        <a href="{{url('/add-recommend')}}" class="btn btn-black btn-round btn-add-lg">
                            <!-- <img src="img/icon/add-round.png" alt=""> -->
                            <i class="fa fa-plus" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
                <div class="row my-4">
                    <div class="col-md-6 mb-3">
                        <div class="card reccomend">
                            <div class="card-body relative">
                                <h6 class="card-title">Title</h6>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus tenetur porro 
                                    laborum ipsa enim. Suscipit ea maxime consectetur sed dolorem? Lorem ipsum dolor sit amet 
                                    consectetur adipisicing elit.
                                </p>
                                <div class="d-grid col-md-8 offset-md-2 mt-3">
                                    <button type="button" class="btn btn-theme">Enter</button>
                                </div>                        
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="card reccomend">
                            <div class="card-body relative">
                                <h6 class="card-title">Title</h6>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus tenetur porro 
                                    laborum ipsa enim. Suscipit ea maxime consectetur sed dolorem? Lorem ipsum dolor sit amet 
                                    consectetur adipisicing elit. 
                                </p>
                                <div class="d-grid col-md-8 offset-md-2 mt-3">
                                    <button type="button" class="btn btn-theme">Enter</button>
                                </div>                        
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="card reccomend">
                            <div class="card-body relative">
                                <h6 class="card-title">Title</h6>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus tenetur porro 
                                    laborum ipsa enim. Suscipit ea maxime consectetur sed dolorem? Lorem ipsum dolor sit amet 
                                    consectetur adipisicing elit. 
                                </p>
                                <div class="d-grid col-md-8 offset-md-2 mt-3">
                                    <button type="button" class="btn btn-theme">Enter</button>
                                </div>                        
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="card reccomend">
                            <div class="card-body relative">
                                <h6 class="card-title">Title</h6>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus tenetur porro 
                                    laborum ipsa enim. Suscipit ea maxime consectetur sed dolorem? Lorem ipsum dolor sit amet 
                                    consectetur adipisicing elit. 
                                </p>
                                <div class="d-grid col-md-8 offset-md-2 mt-3">
                                    <button type="button" class="btn btn-theme">Enter</button>
                                </div>                        
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="card reccomend">
                            <div class="card-body relative">
                                <h6 class="card-title">Title</h6>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus tenetur porro 
                                    laborum ipsa enim. Suscipit ea maxime consectetur sed dolorem? Lorem ipsum dolor sit amet 
                                    consectetur adipisicing elit.
                                </p>
                                <div class="d-grid col-md-8 offset-md-2 mt-3">
                                    <button type="button" class="btn btn-theme">Enter</button>
                                </div>                        
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="card reccomend">
                            <div class="card-body relative">
                                <h6 class="card-title">Title</h6>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus tenetur porro 
                                    laborum ipsa enim. Suscipit ea maxime consectetur sed dolorem? Lorem ipsum dolor sit amet 
                                    consectetur adipisicing elit. 
                                </p>
                                <div class="d-grid col-md-8 offset-md-2 mt-3">
                                    <button type="button" class="btn btn-theme">Enter</button>
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