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
                <div class="col-md-2 col-2 text-start order-first order-lg-last order-sm-first">
                    <a href="#" id="togglemenu" class="togglemenubar"><i class="fa fa-bars" aria-hidden="true"></i> </a>
                </div>
                <div class="col-md-8 col-8 text-center">
                    <h2 class="pagetitle">Product</h2>
                </div>
                <div class="col-md-2 col-2 text-start order-last order-lg-first order-sm-last">
                    <a href="userdashboard.html" class="btn btn-dashboard">
                        <!-- <img src="img/icon/menu.png" alt=""> -->
                        <i class="fa fa-th-large" aria-hidden="true"></i>
                    </a>
                </div>                 
            </div>
        </div>
    </header>
    
    <div class="container-fluid mtop order">
        <div class="mainbox">
            <div id="sidemenubox" class="sidebarbox  fixed">
                <ul>
                    <li> <a href="{{url('/video-list')}}">Video</a> </li>
                    <li> <a href="{{url('/food-overview')}}">Food</a> </li>
                    <li> <a href="{{url('/ready-meal')}}">Ready Meal</a> </li>
                    <li> <a href="{{url('/recipe')}}">Recipe</a> </li>
                    <li> <a href="{{url('/recipe')}}" class="active">Product</a> </li>

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
                    <div class="col-md-4 col-2 mb-3 text-start">
                        <a href="#" class="btn btn-theme btn-round btn-add-lg" data-bs-toggle="modal"
                        data-bs-target="#addordercategoyModal">
                            <!-- <img src="img/icon/filter-light.png" alt=""> -->
                            <i class="fa fa-sitemap" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="col-md-4 col-8 mb-3">
                        <div class="input-group ">
                            <input type="text" class="form-control" placeholder="Find product" aria-label="">
                        </div>
                    </div>
                    <div class="col-md-4 col-2 mb-3 text-end">
                        <button type="button" class="btn btn-black btn-round btn-add-lg" data-bs-toggle="modal"
                        data-bs-target="#addorderModal">
                            <!-- <img src="img/icon/add-round.png" alt=""> -->
                            <i class="fa fa-plus" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
                
                <div class="row mt-2">
                    <div class="col-md-4 my-2">
                        <div class="card food-overview">
                            <div class="card-body">
                                <div class="card-inner">
                                    <div class="card-img">
                                        <img src="{{asset('img/product1.jpg')}}" alt="">
                                    </div>
                                    <div class="card-content">
                                        <h5 class="card-title mb-4">Tesla</h5>
                                        <a href="#" class="card-link trash-top red">
                                            <!-- <img src="img/icon/trash-red.png" alt=""> -->
                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                        </a>
                                        <a href="#" class="card-link edit">
                                            <!-- <img src="img/icon/edit.png" alt=""> -->
                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                        </a>
                                        <span class="price">30€</span>
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
                                        <img src="{{asset('img/product1.jpg')}}" alt="">
                                    </div>
                                    <div class="card-content">
                                        <h5 class="card-title mb-4">Tesla</h5>
                                        <a href="#" class="card-link trash-top red">
                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                        </a>
                                        <a href="#" class="card-link edit">
                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                        </a>
                                        <span class="price">30€</span>
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
                                        <img src="{{asset('img/product1.jpg')}}" alt="">
                                    </div>
                                    <div class="card-content">
                                        <h5 class="card-title mb-4">Tesla</h5>
                                        <a href="#" class="card-link trash-top red">
                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                        </a>
                                        <a href="#" class="card-link edit">
                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                        </a>
                                        <span class="price">30€</span>
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
                                        <img src="{{asset('img/product1.jpg')}}" alt="">
                                    </div>
                                    <div class="card-content">
                                        <h5 class="card-title mb-4">Tesla</h5>
                                        <a href="#" class="card-link trash-top red">
                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                        </a>
                                        <a href="#" class="card-link edit">
                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                        </a>
                                        <span class="price">30€</span>
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
                                        <img src="{{asset('img/product1.jpg')}}" alt="">
                                    </div>
                                    <div class="card-content">
                                        <h5 class="card-title mb-4">Tesla</h5>
                                        <a href="#" class="card-link trash-top red">
                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                        </a>
                                        <a href="#" class="card-link edit">
                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                        </a>
                                        <span class="price">30€</span>
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
                                        <img src="{{asset('img/product1.jpg')}}" alt="">
                                    </div>
                                    <div class="card-content">
                                        <h5 class="card-title mb-4">Tesla</h5>
                                        <a href="#" class="card-link trash-top red">
                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                        </a>
                                        <a href="#" class="card-link edit">
                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                        </a>
                                        <span class="price">30€</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        
            </div>
        </div>
    </div>


    

    <!-- Modal add oreder -->
    <div class="modal fade" id="addorderModal" tabindex="-1" aria-labelledby="addorderModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 mb-2">
                            <h1 class="modal-title fs-5 text-center">Upload order</h1>
                        </div>
                        <div class="col-sm-12 mb-3">                              
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
                                    <input type="Text" class="form-control" id="" placeholder="Title">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-12">
                                    <textarea class="form-control" placeholder="Description" id="" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-12">
                                    <!-- <label for="">Select order category</label> -->
                                    <select class="form-select form-control" aria-label="Default select example">
                                        <option selected>order category 1</option>
                                        <option value="category2">order category 2</option>
                                        <option value="category3">order category 3</option>
                                        <option value="category4">order category 4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-12">
                                    <input type="number" class="form-control" id="" placeholder="Price">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-12 d-grid">
                                    <a href="{{url('/product')}}" class="btn btn-login">Upload</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Modal add order end-->


    <!-- Modal add oreder category -->
    <div class="modal fade" id="addordercategoyModal" tabindex="-1" aria-labelledby="addordercategoryModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 mb-2">
                            <h1 class="modal-title fs-5 text-center">Upload category</h1>
                        </div>
                        <div class="col-sm-12 text-center">

                            <div class="row">
                                <div class="col-sm-10 mb-3">
                                    <input type="text" class="form-control" id="" placeholder="Category">
                                </div>
                                <div class="col-md-2 mb-3 text-end">
                                    <button type="button" class="btn btn-theme btn-round btn-add-lg">
                                        <!-- <img src="img/icon/add-round.png" alt=""> -->
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 mb-4">
                                    <div class="subcategorybox">
                                        <!-- <img src="img/icon/trash-red.png" alt=""> -->
                                        <a href="#" class="deletesubcat">
                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                        </a>
                                        <div class="subcat"> 
                                            <input type="text" class="form-control" id="" placeholder="Subcategory"> 
                                        </div>
                                    </div>
                                    <div class="subcategorybox">
                                        <a href="#" class="deletesubcat">
                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                        </a>
                                        <div class="subcat"> 
                                            <input type="text" class="form-control" id="" placeholder="Subcategory"> 
                                        </div>
                                    </div>
                                    <div class="subcategorybox">
                                        <a href="#" class="deletesubcat">
                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                        </a>
                                        <div class="subcat">
                                            <input type="text" class="form-control" id="" placeholder="Subcategory">
                                        </div>
                                    </div>
                                    <div class="text-end">
                                        <button type="button" class="btn btn-theme btn-round btn-add-lg">
                                            <!-- <img src="img/icon/add-round.png" alt=""> -->
                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Modal add oreder category -->

     

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