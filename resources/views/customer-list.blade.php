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
                    <h2 class="pagetitle">Customer list</h2>
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
                    <li> <a href="{{url('/allergy-list')}}">Allergy list</a> </li>
                    <li> <a href="{{url('/customer-list')}}" class="active">Customer list</a> </li>
                </ul>
            </div>


            <div class="contentbox">

                <div class="row">
                    <div class="col-sm-6 col-4 text-start">
                        <button type="button" class="btn btn-black btn-round btn-cross-lg">
                            <!-- <img src="img/icon/Close-light.png" alt=""> -->
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </button>
                    </div>
                    <div class="col-sm-6 col-8 text-end">
                        <a href="{{url('/request-coach')}}"><h4>Reuest a coach</h4></a>
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-md-6 offset-md-3">
                        <input type="text" class="form-control" id="" placeholder="Enter a name">
                    </div>
                </div>

                <hr class="my-4">
        
                <div class="row mt-4">
                    <div class="col-md-4 col-sm-6 mb-3">
                        <div class="card allergylist" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <div class="card-body">
                                <div class="card-inner">
                                    <div>
                                        <h5>Firstname Lastname</h5>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-3">
                        <div class="card allergylist" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <div class="card-body">
                                <div class="card-inner">
                                    <div>
                                        <h5>Firstname Lastname</h5>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-3">
                        <div class="card allergylist" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <div class="card-body">
                                <div class="card-inner">
                                    <div>
                                        <h5>Firstname Lastname</h5>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-3">
                        <div class="card allergylist" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <div class="card-body">
                                <div class="card-inner">
                                    <div>
                                        <h5>Firstname Lastname</h5>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-3">
                        <div class="card allergylist" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <div class="card-body">
                                <div class="card-inner">
                                    <div>
                                        <h5>Firstname Lastname</h5>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-3">
                        <div class="card allergylist" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <div class="card-body">
                                <div class="card-inner">
                                    <div>
                                        <h5>Firstname Lastname</h5>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-3">
                        <div class="card allergylist">
                            <div class="card-body">
                                <div class="card-inner">
                                    <div>
                                        <h5>Firstname Lastname</h5>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-3">
                        <div class="card allergylist">
                            <div class="card-body">
                                <div class="card-inner">
                                    <div>
                                        <h5>Firstname Lastname</h5>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-3">
                        <div class="card allergylist">
                            <div class="card-body">
                                <div class="card-inner">
                                    <div>
                                        <h5>Firstname Lastname</h5>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-3">
                        <div class="card allergylist">
                            <div class="card-body">
                                <div class="card-inner">
                                    <div>
                                        <h5>Firstname Lastname</h5>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-3">
                        <div class="card allergylist">
                            <div class="card-body">
                                <div class="card-inner">
                                    <div>
                                        <h5>Firstname Lastname</h5>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-3">
                        <div class="card allergylist">
                            <div class="card-body">
                                <div class="card-inner">
                                    <div>
                                        <h5>Firstname Lastname</h5>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-3">
                        <div class="card allergylist">
                            <div class="card-body">
                                <div class="card-inner">
                                    <div>
                                        <h5>Firstname Lastname</h5>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-3">
                        <div class="card allergylist">
                            <div class="card-body">
                                <div class="card-inner">
                                    <div>
                                        <h5>Firstname Lastname</h5>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-3">
                        <div class="card allergylist">
                            <div class="card-body">
                                <div class="card-inner">
                                    <div>
                                        <h5>Firstname Lastname</h5>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-3">
                        <div class="card allergylist">
                            <div class="card-body">
                                <div class="card-inner">
                                    <div>
                                        <h5>Firstname Lastname</h5>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-3">
                        <div class="card allergylist">
                            <div class="card-body">
                                <div class="card-inner">
                                    <div>
                                        <h5>Firstname Lastname</h5>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-3">
                        <div class="card allergylist">
                            <div class="card-body">
                                <div class="card-inner">
                                    <div>
                                        <h5>Firstname Lastname</h5>
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
          <!-- <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1> -->
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <h4 class="text-center">Firstname Lastname</h4>
          <div class="customerviewrow">
            <div class="col1">
                Address
            </div>
            <div class="col2">
                Biceps in mm<br>
                Triceps in mm
            </div>
            <div class="col3">
                5 <br>
                5
            </div>
          </div>
          <div class="customerviewrow">
            <div class="col1">
                Mobilenumber
            </div>
            <div class="col2">
                Jerks in mm <br> 
                bout in mm
            </div>
            <div class="col3">
                5 <br>
                5
            </div>
          </div>
          <div class="customerviewrow">
            <div class="col1">
                Date of birth
            </div>
            <div class="col2">
                Weight in kg
            </div>
            <div class="col3">
                60
            </div>
          </div>
          <div class="customerviewrow">
            <div class="col1">
                Start date of the program
            </div>
            <div class="col2">
                Fat Content in %
            </div>
            <div class="col3">
                10
            </div>
          </div>
          <div class="customerviewrow">
            <div class="col1">
                Oxydation type
            </div>
            <div class="col2">
                Fat Content in kg
            </div>
            <div class="col3">
                6
            </div>
          </div>
          <div class="customerviewrow">
            <div class="col1">
                Starting weight
            </div>
            <div class="col2">
                major mass in kg
            </div>
            <div class="col3">
                4
            </div>
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