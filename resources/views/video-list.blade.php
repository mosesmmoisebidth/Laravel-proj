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
                    <h2 class="pagetitle">Videos </h2>
                </div>
            </div>
        </div>
    </header>

    <div class="container-fluid mtop">
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
                    <!-- <div class="col-md-3 col-sm-12 col-12 searchbar">
                        <input type="text" name="search" id="searchText" value="" class="form-control" placeholder="Video">
                    </div> -->
                    <div class="col-md-3 col-sm-6 col-6">
                        <div class="custom-select">
                            <select class="form-select " aria-label="Default select example">
                                <option selected>Category</option>
                                <option value="physically">Physically</option>
                                <option value="mently">Mentaly</option>
                                <option value="social">Social</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-6 col-6 text-end">
                        <a href="#" class="btn btn-theme btn-round btn-add-lg mx-2" data-bs-toggle="modal"
                            data-bs-target="#addcategoryModal">
                            <!-- <img src="img/icon/filter-light.png"> -->
                            <i class="fa fa-sitemap" aria-hidden="true"></i>
                            <!-- <i class="fa fa-sort" aria-hidden="true"></i> -->
                        </a>
                        <a href="#" class="btn btn-theme btn-round btn-add-lg" data-bs-toggle="modal"
                            data-bs-target="#addvideoModal">
                            <!-- <img src="img/icon/add-round.png"> -->
                            <i class="fa fa-plus" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>  
                <div class="row mt-3">
                    <div class="col-lg-6 my-2">
                        <div class="card video-overview">
                            <div class="card-body">
                                <div class="card-inner align-items-center">

                                    <div class="dragimg">
                                        <!-- <img src="img/icon/dragdrop.png"> -->
                                        <i class="fa fa-th" aria-hidden="true"></i>
                                    </div>
                                    <div class="card-video">
                                        <img src="{{asset('img/video1.png')}}" alt="">
                                    </div>

                                    <div class="card-content">
                                        <h4 class="card-title mb-2" title="Tset new 27 edit">Video name</h4>
                                        <p>Date update</p>
                                    </div>
                                    <div class="buttonbox">
                                        <div class="text-end">
                                            <a class="videoview" href="#">
                                                <!-- <img src="img/icon/no-view.png">                                             -->
                                                <i class="fa fa-eye-slash" aria-hidden="true"></i>
                                            </a>

                                            <a href="#" class="videoedit">
                                                <!-- <img src="img/icon/edit.png"> -->
                                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                            </a>

                                        </div>
                                        <div class="text-end mt-2">
                                            <a href="#" class="videodelete">
                                                <!-- <img src="img/icon/trash-red.png"> -->
                                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                                            </a>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 my-2">
                        <div class="card video-overview">
                            <div class="card-body">
                                <div class="card-inner align-items-center">

                                    <div class="dragimg">
                                        <!-- <img src="img/icon/dragdrop.png"> -->
                                        <i class="fa fa-th" aria-hidden="true"></i>
                                    </div>
                                    <div class="card-video">
                                        <img src="{{asset('img/video1.png')}}" alt="">
                                    </div>

                                    <div class="card-content">
                                        <h4 class="card-title mb-2" title="Tset new 27 edit">Video name</h4>
                                        <p>Date update</p>
                                    </div>
                                    <div class="buttonbox">
                                        <div class="text-end">
                                            <a class="videoview" href="#">
                                                <!-- <img src="img/icon/no-view.png"> -->
                                                <i class="fa fa-eye-slash" aria-hidden="true"></i>
                                            </a>

                                            <a href="#" class="videoedit">
                                                <!-- <img src="img/icon/edit.png"> -->
                                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                            </a>

                                        </div>
                                        <div class="text-end mt-2">
                                            <a href="#" class="videodelete">
                                                <!-- <img src="img/icon/trash-red.png"> -->
                                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                                            </a>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 my-2">
                        <div class="card video-overview">
                            <div class="card-body">
                                <div class="card-inner align-items-center">

                                    <div class="dragimg">
                                        <!-- <img src="img/icon/dragdrop.png"> -->
                                        <i class="fa fa-th" aria-hidden="true"></i>
                                    </div>
                                    <div class="card-video">
                                        <img src="{{asset('img/video1.png')}}" alt="">
                                    </div>

                                    <div class="card-content">
                                        <h4 class="card-title mb-2" title="Tset new 27 edit">Video name</h4>
                                        <p>Date update</p>
                                    </div>
                                    <div class="buttonbox">
                                        <div class="text-end">
                                            <a class="videoview" href="#">
                                                <!-- <img src="img/icon/no-view.png"> -->
                                                <i class="fa fa-eye-slash" aria-hidden="true"></i>
                                            </a>

                                            <a href="#" class="videoedit">
                                                <!-- <img src="img/icon/edit.png"> -->
                                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                            </a>

                                        </div>
                                        <div class="text-end mt-2">
                                            <a href="#" class="videodelete">
                                                <!-- <img src="img/icon/trash-red.png"> -->
                                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                                            </a>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 my-2">
                        <div class="card video-overview">
                            <div class="card-body">
                                <div class="card-inner align-items-center">

                                    <div class="dragimg">
                                        <!-- <img src="img/icon/dragdrop.png"> -->
                                        <i class="fa fa-th" aria-hidden="true"></i>
                                    </div>
                                    <div class="card-video">
                                        <img src="{{asset('img/video1.png')}}" alt="">
                                    </div>

                                    <div class="card-content">
                                        <h4 class="card-title mb-2" title="Tset new 27 edit">Video name</h4>
                                        <p>Date update</p>
                                    </div>
                                    <div class="buttonbox">
                                        <div class="text-end">
                                            <a class="videoview" href="#">
                                                <!-- <img src="img/icon/no-view.png"> -->
                                                <i class="fa fa-eye-slash" aria-hidden="true"></i>
                                            </a>

                                            <a href="#" class="videoedit">
                                                <!-- <img src="img/icon/edit.png"> -->
                                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                            </a>

                                        </div>
                                        <div class="text-end mt-2">
                                            <a href="#" class="videodelete">
                                                <!-- <img src="img/icon/trash-red.png"> -->
                                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                                            </a>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 my-2">
                        <div class="card video-overview">
                            <div class="card-body">
                                <div class="card-inner align-items-center">

                                    <div class="dragimg">
                                        <!-- <img src="img/icon/dragdrop.png"> -->
                                        <i class="fa fa-th" aria-hidden="true"></i>
                                    </div>
                                    <div class="card-video">
                                        <img src="{{asset('img/video1.png')}}" alt="">
                                    </div>

                                    <div class="card-content">
                                        <h4 class="card-title mb-2" title="Tset new 27 edit">Video name</h4>
                                        <p>Date update</p>
                                    </div>
                                    <div class="buttonbox">
                                        <div class="text-end">
                                            <a class="videoview" href="#">
                                                <!-- <img src="img/icon/no-view.png"> -->
                                                <i class="fa fa-eye-slash" aria-hidden="true"></i>
                                            </a>

                                            <a href="#" class="videoedit">
                                                <!-- <img src="img/icon/edit.png"> -->
                                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                            </a>

                                        </div>
                                        <div class="text-end mt-2">
                                            <a href="#" class="videodelete">
                                                <!-- <img src="img/icon/trash-red.png"> -->
                                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                                            </a>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 my-2">
                        <div class="card video-overview">
                            <div class="card-body">
                                <div class="card-inner align-items-center">

                                    <div class="dragimg">
                                        <!-- <img src="img/icon/dragdrop.png"> -->
                                        <i class="fa fa-th" aria-hidden="true"></i>
                                    </div>
                                    <div class="card-video">
                                        <img src="{{asset('img/video1.png')}}" alt="">
                                    </div>

                                    <div class="card-content">
                                        <h4 class="card-title mb-2" title="Tset new 27 edit">Video name</h4>
                                        <p>Date update</p>
                                    </div>
                                    <div class="buttonbox">
                                        <div class="text-end">
                                            <a class="videoview" href="#">
                                                <!-- <img src="img/icon/no-view.png"> -->
                                                <i class="fa fa-eye-slash" aria-hidden="true"></i>
                                            </a>

                                            <a href="#" class="videoedit">
                                                <!-- <img src="img/icon/edit.png"> -->
                                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                            </a>

                                        </div>
                                        <div class="text-end mt-2">
                                            <a href="#" class="videodelete">
                                                <!-- <img src="img/icon/trash-red.png"> -->
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





    <!-- Modal add category -->
    <div class="modal fade" id="addcategoryModal" tabindex="-1" aria-labelledby="addcategoryModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 mb-4">
                            <h1 class="modal-title fs-5 text-center">Category List 
                                <a href="#" class="addcategory" data-bs-toggle="modal" id="uploadCategoyrId">
                                    <!-- <img src="img/icon/plus-light.png" alt=""> -->
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                </a>
                            </h1>
                        </div>
                        <div class="col-sm-12 mb-3">
                            <div class="add-cat-list">
                                <div class="dragdrop mx-2">
                                    <!-- <img style="width: 20px;" src="img/icon/dragdrop.png" alt=""> -->
                                    <i class="fa fa-th" aria-hidden="true"></i>
                                </div>
                                <div class="draginput mx-1">
                                    <input type="Text" class="form-control" id="" placeholder="Category name">
                                </div>
                                <div>
                                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" id="editcategoryId">
                                        <!-- <img style="width: 18px;" src="img/icon/edit-light.png" alt="">  -->
                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                    </a>
                                    <a href="#" class="btn btn-danger">
                                        <!-- <img style="width: 20px;" src="img/icon/trash-light.png" alt="">  -->
                                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                                    </a>
                                    <a href="#" class="btn btn-default">
                                        <!-- <img style="width: 20px;" src="img/icon/viewround.png" alt="">  -->
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="add-cat-list">
                                <div class="dragdrop mx-2">
                                    <i class="fa fa-th" aria-hidden="true"></i>
                                </div>
                                <div class="draginput mx-1">
                                    <input type="Text" class="form-control" id="" placeholder="Category name">
                                </div>
                                <div>
                                    <a href="#" class="btn btn-primary">
                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                    </a>
                                    <a href="#" class="btn btn-danger">
                                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                                    </a>
                                    <a href="#" class="btn btn-default">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="add-cat-list">
                                <div class="dragdrop mx-2">
                                    <i class="fa fa-th" aria-hidden="true"></i>
                                </div>
                                <div class="draginput mx-1">
                                    <input type="Text" class="form-control" id="" placeholder="Category name">
                                </div>
                                <div>
                                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" id="editcategoryId">
                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                    </a>
                                    <a href="#" class="btn btn-danger">
                                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                                    </a>
                                    <a href="#" class="btn btn-default">
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
    <!-- Modal add category end-->


    <!-- Modal upload category -->
    <div class="modal fade" id="uploadcategoryModal" tabindex="-1" aria-labelledby="uploadcategoryModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header">
                    <!-- <h1 class="modal-title fs-5" id="">Upload Category</h1> -->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 mb-4">
                            <h1 class="modal-title fs-5 text-center">Upload Category</h1>
                        </div>
                        <div class="col-sm-12 mb-3">
                            <div class="upload-btn-wrapper d-grid">
                                <button class="btn btn-round"><img src="{{asset('img/upload-image.png')}}" alt=""></button>
                                <input type="file" name="myfile" />
                            </div>
                        </div>
                        <div class="col-sm-12 mb-3">
                            <input type="Text" class="form-control" id="" placeholder="Categoryname">
                        </div>
                        <div class="col-sm-12 mb-3">
                            <textarea class="form-control" placeholder="Description" id="" rows="3"></textarea>
                        </div>
                        <div class="col-sm-12 mb-3">
                            <div class="upload-btn-wrapper d-grid">
                                <button class="btn btn-round"><img src="{{asset('img/video.png')}}" alt=""></button>
                                <input type="file" name="myfile" />
                            </div>
                        </div>
                        <div class="col-sm-12 mb-2 d-grid">
                            <button type="button" class="btn btn-login" data-bs-dismiss="modal" aria-label="Close">Upload</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Modal upload category end -->


    <!-- Modal edit category -->
    <div class="modal fade" id="editcategoryModal" tabindex="-1" aria-labelledby="editcategoryModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header">
                    <!-- <h1 class="modal-title fs-5" id="exampleModalLabel">Upload Category</h1> -->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 mb-4">
                            <h1 class="modal-title fs-5 text-center">Edit Category</h1>
                        </div>
                        <div class="col-sm-12 mb-3 relative">
                            <div class="upload-btn-wrapper d-grid">
                                <button class="btn btn-round"><img src="{{asset('img/upload-image.png')}}" alt=""></button>
                                <input type="file" name="myfile" />
                            </div>
                            <a href="#" class="edit-category">
                                <!-- <img src="img/icon/edit.png" alt=""> -->
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="col-sm-12 mb-3 relative">
                            <input type="Text" class="form-control" id="" placeholder="Title">
                            <a href="#" class="edit-category">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="col-sm-12 mb-3 relative">
                            <textarea class="form-control" placeholder="Description" id="" rows="3"></textarea>
                            <a href="#" class="edit-category">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="col-sm-12 mb-3 relative">
                            <div class="upload-btn-wrapper d-grid">
                                <button class="btn btn-round"><img src="{{asset('img/video.png')}}" alt=""></button>
                                <input type="file" name="myfile" />
                            </div>
                            <a href="#" class="edit-category">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="col-sm-12 mb-2 d-grid">
                            <button type="button" class="btn btn-login" data-bs-dismiss="modal" aria-label="Close">Edit</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Modal edit category end -->


    <!-- Modal add video -->
    <div class="modal fade" id="addvideoModal" tabindex="-1" aria-labelledby="addvideoModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 mb-4">
                            <h1 class="modal-title fs-5 text-center">Video Upload</h1>
                        </div>
                        <div class="col-sm-12 mb-3">
                            <div class="upload-btn-wrapper d-grid">
                                <button class="btn btn-round"><img src="{{asset('img/upload-image.png')}}" alt=""></button>
                                <input type="file" name="myfile" />
                            </div>
                        </div>
                        <div class="col-sm-12 mb-3">
                            <input type="Text" class="form-control" id="" placeholder="Title">
                        </div>
                        <div class="col-sm-12 mb-3">
                            <textarea class="form-control" placeholder="Description" id="" rows="3"></textarea>
                        </div>

                       <div class="col-sm-12 mb-3">
                            <select class="form-select form-control aria-label="Default select example">
                                <option selected>Category</option>
                                <option value="1">Category1</option>
                                <option value="2">Category2</option>
                                <option value="3">Category3</option>
                            </select>
                       </div>

                        <div class="col-sm-12 text-center">
                            <div class="form-check form-switch mb-3" style="display: inline-block;">    
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">                            
                                <label class="form-check-label" for="flexSwitchCheckDefault">Multiple choice</label>
                            </div>



                            <!-- <div class="multichoicebox">
                                <div class="multiquestionlist">
                                    <div class="questionbox">
                                        <div class="questionlist">Question 1</div>
                                        <a href="#" class="add"><img src="img/icon/plus.png" alt=""></a>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckIndeterminate">
                                        <label class="form-check-label" for="flexCheckIndeterminate">
                                            Answer 1.1
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckIndeterminate">
                                        <label class="form-check-label" for="flexCheckIndeterminate">
                                            Answer 1.2
                                        </label>
                                    </div>
                                </div>
                                <div class="multiquestionlist">
                                    <div class="questionbox">
                                        <div class="questionlist">Question 2</div>
                                        <a href="#" class="add"><img src="img/icon/plus.png" alt=""></a>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckIndeterminate">
                                        <label class="form-check-label" for="flexCheckIndeterminate">
                                            Answer 2.1
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckIndeterminate">
                                        <label class="form-check-label" for="flexCheckIndeterminate">
                                            Answer 2.2
                                        </label>
                                    </div>
                                </div>
                            </div> -->
    
                            <!-- <div class="multichoicebox mb-3">
                                <div class="multiquestionlist">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckIndeterminate">
                                        <label class="form-check-label" for="flexCheckIndeterminate">
                                            Question 1
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckIndeterminate">
                                        <label class="form-check-label" for="flexCheckIndeterminate">
                                            Question 2
                                        </label>
                                    </div>
                                </div>
                            </div> -->

                        </div>
                        <div class="col-sm-12 mb-2 d-grid">
                            <button type="button" class="btn btn-login" data-bs-toggle="modal"  id="multiplechoiceId">Continue</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Modal add video end -->


    <!-- Modal add video next -->
    <div class="modal fade" id="multiplechoiceModal" tabindex="-1" aria-labelledby="multiplechoiceModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 mb-4">
                            <h1 class="modal-title fs-5 text-center">Multiple choice</h1>
                        </div>
                        
                        <div class="col-sm-12 text-center">
                            <!-- <div class="form-check form-switch mb-3" style="display: inline-block;">    
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">                            
                                <label class="form-check-label" for="flexSwitchCheckDefault">Multiple choice</label>
                            </div> -->

                            <div class="multichoicebox mb-4">
                                <div class="multiquestionlist">
                                    <div class="questionbox">
                                        <div class="questionlist">Question 1</div>
                                        <a href="#" class="add">
                                            <!-- <img src="img/icon/plus.png" alt=""> -->
                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckIndeterminate">
                                        <label class="form-check-label" for="flexCheckIndeterminate">
                                            Answer 1.1
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckIndeterminate">
                                        <label class="form-check-label" for="flexCheckIndeterminate">
                                            Answer 1.2
                                        </label>
                                    </div>
                                </div>
                                <div class="multiquestionlist mt-2">
                                    <div class="questionbox">
                                        <div class="questionlist">Question 2</div>
                                        <a href="#" class="add">
                                            <!-- <img src="img/icon/plus.png" alt=""> -->
                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckIndeterminate">
                                        <label class="form-check-label" for="flexCheckIndeterminate">
                                            Answer 2.1
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckIndeterminate">
                                        <label class="form-check-label" for="flexCheckIndeterminate">
                                            Answer 2.2
                                        </label>
                                    </div>
                                </div>
                            </div>
    
                            <!-- <div class="multichoicebox mb-3">
                                <div class="multiquestionlist">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckIndeterminate">
                                        <label class="form-check-label" for="flexCheckIndeterminate">
                                            Question 1
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckIndeterminate">
                                        <label class="form-check-label" for="flexCheckIndeterminate">
                                            Question 2
                                        </label>
                                    </div>
                                </div>
                            </div> -->

                        </div>
                        <div class="col-sm-12 mb-2 d-grid">
                            <button type="button" class="btn btn-login" data-bs-dismiss="modal" aria-label="Close">Upload</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Modal add video next end-->



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    <script src="{{asset('js/lionbars.js')}}"></script>

    


    <script>
        $("#uploadCategoyrId").on("click",function(){
            $('#uploadcategoryModal').modal('show');
            $('#addcategoryModal').modal('hide');
        });

        $("#editcategoryId").on("click",function(){
            $('#editcategoryModal').modal('show');
            $('#addcategoryModal').modal('hide');
        });

        $("#multiplechoiceId").on("click",function(){
            $('#multiplechoiceModal').modal('show');
            $('#addvideoModal').modal('hide');
        });
    </script>

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