<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
          integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!-- Favicon icon -->
    {{--<link rel="icon" type="image/png" sizes="16x16" href="">--}}
    <title>PT. JATIM MUSTIKA SELA</title>
    <!-- Custom CSS -->
    <link href="{{url('assets/libs/chartist/dist/chartist.min.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{url('dist/css/style.min.css')}}" rel="stylesheet">
    <link href="{{url('dist/css/style.css')}}" rel="stylesheet">
    <link href="{{url('dist/css/box.css')}}" rel="stylesheet">

</head>

<body>
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
    </div>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper" data-navbarbg="skin6" data-theme="light" data-layout="vertical" data-sidebartype="full" data-boxed-layout="full">

    @include('navbar.navbar')
    @include('menu.menu')

    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-5 align-self-center">
                    <h4 class="page-title">Dashboard</h4>
                </div>
                <div class="col-7 align-self-center">
                    <div class="d-flex align-items-center justify-content-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="#">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- .row -->
            <div class="col-sm-12" style="margin-left:3rem">
                <div class="row">
                    <div class="row">
                        <div class="col-sm-1">
                            <div class="card card-body" style="min-width: 15rem;padding: 1rem;">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h5 class="box-title"><i class="far fa-file-alt fa-3x" style="color: #FF717C;"></i></h5>
                                        <p style="font-size:12px;">Financial Draft</p>
                                    </div>
                                    <div class="col-sm-6">
                                        <h2 style="font-size:3rem;margin-left:2rem;color:#FF717C;">12</h2>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-1">
                            <div class="card card-body" style="min-width: 15rem;padding: 1rem;margin-left: 1.7rem;">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h5 class="box-title"><i class="fas fa-check fa-3x" style="color: #9171FF;"></i></h5>
                                        <p style="font-size:12px;">Financial In Progress</p>
                                    </div>
                                    <div class="col-sm-3">
                                        <h2 style="font-size:3rem;margin-left:1.7rem;color:#9171FF;">4</h2>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-1">
                            <div class="card card-body" style="min-width: 15rem;padding: 1rem;margin-left: 1.7rem;">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h5 class="box-title"><i class="fas fa-clipboard-list fa-3x" style="color:#7FB1FF;"></i></h5>
                                        <p style="font-size:12px;">Real Cost Draft</p>
                                    </div>
                                    <div class="col-sm-3">
                                        <h2 style="font-size:3rem;margin-left:2rem;color:#7FB1FF;">9</h2>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-1">
                            <div class="card card-body" style="min-width: 15rem;padding: 1rem;margin-left: 1.7rem;">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h5 class="box-title"><i class="fas fa-users fa-3x" style="color:#CC69FF;"></i> </h5>
                                        <p style="font-size:12px;">Total Member</p>
                                    </div>
                                    <div class="col-sm-3">
                                        <h2 style="font-size:3rem;margin-left:2rem;color:#CC69FF;">1</h2>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>


                    <div class="col-sm-12">
                        <div class="row">
                            <div class="card">
                                <h5 class="card-header">Monthly Bandwith Transfer</h5>
                                <div class="card-body">
                                    <div class="progress" style="height: 20px;width: 27rem;">
                                        <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">75%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card" style="margin-left:1.8rem;">
                                <h5 class="card-header">Diskpace Usage</h5>
                                <div class="card-body">
                                    <div class="progress" style="height: 20px;width: 27rem;">
                                        <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">75%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!--/.row -->
        </div>

    </div>

    @include('footer.footer')

    </div>

</div>

<script src="{{url('assets/libs/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{url('assets/libs/popper.js/dist/umd/popper.min.js')}}"></script>
<script src="{{url('assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{url('assets/extra-libs/sparkline/sparkline.js')}}"></script>
<!--Wave Effects -->
<script src="{{url('dist/js/waves.js')}}"></script>
<!--Menu sidebar -->
<script src="{{url('dist/js/sidebarmenu.js')}}"></script>
<!--Custom JavaScript -->
<script src="{{url('dist/js/custom.min.js')}}"></script>
<!--This page JavaScript -->
<!--chartis chart-->
<script src="{{url('assets/libs/chartist/dist/chartist.min.js')}}"></script>
<script src="{{url('assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js')}}"></script>
<script src="{{url('dist/js/pages/dashboards/dashboard1.js')}}"></script>
</body>

</html>