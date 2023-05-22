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
                    <h2 class="pagetitle">Allergy list</h2>
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
                    <li> <a href="{{url('/accounting-system')}}">Account setting</a> </li>
                    <li> <a href="{{url('/allergy-list')}}" class="active">Allergy list</a> </li>
                    <li> <a href="{{url('/customer-list')}}">Customer list</a> </li>
                </ul>
            </div>


            <div class="contentbox">


                    <div class="row mt-1">
                        <div class="col-md-10 text-center">
                            <h2>Inconsistencies Overview</h2>
                        </div>
                        <div class="col-md-2 text-end">
                            <a href="add-allergies.html" class="btn btn-theme btn-round btn-add-lg">
                                <!-- <img src="img/icon/add-round.png" alt=""> -->
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
            
                    <div class="row mt-3">
                        <div class="col-md-12">                
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="card allergylist my-2">
                                        <div class="card-body">
                                            <div class="card-inner">
                                                <div>
                                                    <h5>Gluten</h5>
                                                </div>
                                                <div class="">
                                                    <a href="{{url('/edit-allergies')}}" class="edit">
                                                        <!-- <img class="width20" src="img/icon/edit.png" alt=""> -->
                                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                                <div>
                                                    <a href="#" class="delete">
                                                        <!-- <img class="width25" src="img/icon/trash-red.png" alt=""> -->
                                                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                    </a>
                                                </div>                                    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="card allergylist my-2">
                                        <div class="card-body">
                                            <div class="card-inner">
                                                <div>
                                                    <h5>Gluten</h5>
                                                </div>
                                                <div class="">
                                                    <a href="{{url('/edit-allergies')}}" class="edit">
                                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                                <div>
                                                    <a href="#" class="delete">
                                                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                    </a>
                                                </div>                                    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="card allergylist my-2">
                                        <div class="card-body">
                                            <div class="card-inner">
                                                <div>
                                                    <h5>Gluten</h5>
                                                </div>
                                                <div class="">
                                                    <a href="{{url('/edit-allergies')}}" class="edit">
                                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                                <div>
                                                    <a href="#" class="delete">
                                                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                    </a>
                                                </div>                                   
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="card allergylist my-2">
                                        <div class="card-body">
                                            <div class="card-inner">
                                                <div>
                                                    <h5>Gluten</h5>
                                                </div>
                                                <div class="">
                                                    <a href="{{url('/edit-allergies')}}" class="edit">
                                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                                <div>
                                                    <a href="#" class="delete">
                                                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                    </a>
                                                </div>                                    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="card allergylist my-2">
                                        <div class="card-body">
                                            <div class="card-inner">
                                                <div>
                                                    <h5>Gluten</h5>
                                                </div>
                                                <div class="">
                                                    <a href="{{url('/edit-allergies')}}" class="edit">
                                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                                <div>
                                                    <a href="#" class="delete">
                                                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                    </a>
                                                </div>                                   
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="card allergylist my-2">
                                        <div class="card-body">
                                            <div class="card-inner">
                                                <div>
                                                    <h5>Gluten</h5>
                                                </div>
                                                <div class="">
                                                    <a href="{{url('/edit-allergies')}}" class="edit">
                                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                                <div>
                                                    <a href="#" class="delete">
                                                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                    </a>
                                                </div>                                    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="card allergylist my-2">
                                        <div class="card-body">
                                            <div class="card-inner">
                                                <div>
                                                    <h5>Gluten</h5>
                                                </div>
                                                <div class="">
                                                    <a href="{{url('/edit-allergies')}}" class="edit">
                                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                                <div>
                                                    <a href="#" class="delete">
                                                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                    </a>
                                                </div>                                    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="card allergylist my-2">
                                        <div class="card-body">
                                            <div class="card-inner">
                                                <div>
                                                    <h5>Gluten</h5>
                                                </div>
                                                <div class="">
                                                    <a href="{{url('/edit-allergies')}}" class="edit">
                                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                                <div>
                                                    <a href="#" class="delete">
                                                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                    </a>
                                                </div>                                   
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="card allergylist my-2">
                                        <div class="card-body">
                                            <div class="card-inner">
                                                <div>
                                                    <h5>Gluten</h5>
                                                </div>
                                                <div class="">
                                                    <a href="{{url('/edit-allergies')}}" class="edit">
                                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                                <div>
                                                    <a href="#" class="delete">
                                                        <i class="fa fa-trash-o" aria-hidden="true"></i>
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