<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Input - Vuexy - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="{{  url  ( 'app-assets/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{  url  ( 'app-assets/images/ico/favicon.ico')}}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{  url  ( 'app-assets/vendors/css/vendors.min.css')}}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{  url  ( 'app-assets/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{  url  ( 'app-assets/css/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{  url  ( 'app-assets/css/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{  url  ( 'app-assets/css/components.css')}}">
    <link rel="stylesheet" type="text/css" href="{{  url  ( 'app-assets/css/themes/dark-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{  url  ( 'app-assets/css/themes/semi-dark-layout.css')}}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{  url  ( 'app-assets/css/core/menu/menu-types/horizontal-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{  url  ( 'app-assets/css/core/colors/palette-gradient.css')}}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{  url  ( 'assets/css/style.css')}}">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="horizontal-layout horizontal-menu 2-columns  navbar-floating footer-static  " data-open="hover" data-menu="horizontal-menu" data-col="2-columns">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu navbar-fixed navbar-shadow navbar-brand-center">
        <div class="navbar-header d-xl-block d-none">
            <
        </div>
        <div class="navbar-wrapper">
            <div class="navbar-container content">
                <div class="navbar-collapse" id="navbar-mobile">
                    <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </nav>
   
   
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="horizontal-menu-wrapper">
        <div class="header-navbar navbar-expand-sm navbar navbar-horizontal floating-nav navbar-light navbar-without-dd-arrow navbar-shadow menu-border" role="navigation" data-menu="menu-wrapper">
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mr-auto"><a class="navbar-brand" href="{{  url  ( 'html/ltr/horizontal-menu-template/index.html')}}">
                            <div class="brand-logo"></div>
                            <h2 class="brand-text mb-0">Vuexy</h2>
                        </a></li>
                    <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
                </ul>
            </div>
            <!-- Horizontal menu content-->
            <div class="navbar-container main-menu-content" data-menu="menu-container">
               
               
            </div>
        </div>
    </div>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            {{-- <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Input</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Form Elements</a>
                                    </li>
                                    <li class="breadcrumb-item active">Input
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div> --}}
            <div class="content-body">
               {{-- <section id="welcome">
                  <div class="row">
                      <div class="col-md-12">
                        
                              
                             <h1 center>Selamat datang</h1>   
                             
                              
                          
                      </div>
                  </div>
              </section> --}}
                <!-- Basic Inputs start -->
                <section id="basic-input">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                @if(session()->has('success'))
                                    <div class="alert alert-success">
                                    <p clas="text-success">{{session()->get('success')}}</p>
                                    </div>
                                    
                                @endif
                                <div class="card-header" style="background-color: rgb(223, 223, 248); margin-bottom: 5px">
                                  <p class="text-center"><h2>Untuk Melanjutkan Menggunakan Internet mohon masukan Email</h2> </p> 
                                </div>
                                <div class="card-body">
                                 <form class="form form-horizontal" action="{{route('kuisioner.store')}}" method="post">
                                    @csrf
                                     <div class="form-body">
                                         <div class="row">
                                             <div class="col-12">
                                                 <div class="form-group row">
                                                     <div class="col-md-4">
                                                         <span>Name</span>
                                                     </div>
                                                     <div class="col-md-8">
                                                         <div class="position-relative has-icon-left">
                                                             <input type="text" id="fname-icon" class="form-control" name="nama" placeholder="First Name">
                                                             <div class="form-control-position">
                                                                 <i class="feather icon-user"></i>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                             <div class="col-12">
                                                 <div class="form-group row">
                                                     <div class="col-md-4">
                                                         <span>Email</span>
                                                     </div>
                                                     <div class="col-md-8">
                                                         <div class="position-relative has-icon-left">
                                                             <input type="email" id="email-icon" class="form-control" name="email" placeholder="Email">
                                                             <div class="form-control-position">
                                                                 <i class="feather icon-mail"></i>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                             <div class="col-12">
                                                 <div class="form-group row">
                                                     <div class="col-md-4">
                                                         <span>Mobile</span>
                                                     </div>
                                                     <div class="col-md-8">
                                                         <div class="position-relative has-icon-left">
                                                             <input type="number" id="contact-icon" class="form-control" name="no_tlp" placeholder="Mobile">
                                                             <div class="form-control-position">
                                                                 <i class="feather icon-smartphone"></i>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                             
                                             
                                             <div class="col-md-8 offset-md-4">
                                                 <button type="submit" class="btn btn-primary mr-1 mb-1">Simpan</button>
                                                 <button type="reset" class="btn btn-outline-warning mr-1 mb-1">Reset</button>
                                             </div>
                                         </div>
                                     </div>
                                 </form>
                             </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Basic Inputs end -->

               
            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light navbar-shadow">
        <p class="clearfix blue-grey lighten-2 mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2021<a class="text-bold-800 grey darken-2" href="https://www.grandmercure.com/destination/indonesia/" target="_blank">grandmercure,</a>All rights Reserved</span><span class="float-md-right d-none d-md-block">Hand-crafted & Made with<i class="feather icon-heart pink"></i></span>
            <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="feather icon-arrow-up"></i></button>
        </p>
    </footer>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{  url  ( 'app-assets/vendors/js/vendors.min.js')}}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{  url  ( 'app-assets/vendors/js/ui/jquery.sticky.js')}}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{  url  ( 'app-assets/js/core/app-menu.js')}}"></script>
    <script src="{{  url  ( 'app-assets/js/core/app.js')}}"></script>
    <script src="{{  url  ( 'app-assets/js/scripts/components.js')}}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>

    <script src="{{  url  ( 'app-assets/js/scripts/forms/form-tooltip-valid.js')}}"></script>
    <!-- END: Page JS-->
    {{-- <script>
        $(Document).ready(function(){
            $('datatable').DataTable();
        });
    </script> --}}

</body>
<!-- END: Body-->

</html>