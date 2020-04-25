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
    <link rel="icon" type="image/png" sizes="16x16" href="{{url('assets/images/favicon-.png')}}">
    <title>PT. JATIM MUSTIKA SELA</title>
    <!-- Custom CSS -->
    <link href="{{url('dist/css/style.min.css')}}" rel="stylesheet">
    <link href="{{url('dist/css/style.css')}}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="preloader">
    <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
    </div>
</div>

<div id="main-wrapper" data-navbarbg="skin6" data-theme="light" data-layout="vertical" data-sidebartype="full" data-boxed-layout="full">

    @include('navbar.navbar')
    @include('menu.menu')

    <div class="page-wrapper">

        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-5 align-self-center">
                    <h4 class="page-title">Financial draft</h4>
                </div>
                <div class="col-7 align-self-center">
                    <div class="d-flex align-items-center justify-content-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="#">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Financial draft</li>
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
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <p>Show
                                    <select class="mdb-select" searchable="Search here..">
                                        <option value="2" data-icon="https://mdbootstrap.com/img/Photos/Avatars/avatar-1.jpg" class="rounded-circle">1</option>
                                        <option value="3" data-icon="https://mdbootstrap.com/img/Photos/Avatars/avatar-2.jpg" class="rounded-circle">2</option>
                                        <option value="4" data-icon="https://mdbootstrap.com/img/Photos/Avatars/avatar-3.jpg" class="rounded-circle">3</option>
                                    </select>
                                    entry</p>
                            </div>
                            <div class="col-sm-6">
                                <p style="margin-left:20rem;">
                                    <i class="fa fa-search"></i> &nbsp;
                                    <input type="text" placeholder="Search.." name="search">
                                </p>
                            </div>
                        </div>
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                {{--<th scope="col" width="20rem;">--}}
                                    {{--<div class="form-check" style="margin-bottom:1.4rem;">--}}
                                        {{--<input class="form-check-input" type="checkbox" value="" id="defaultCheck1">--}}
                                    {{--</div>--}}
                                {{--</th>--}}
                                <th scope="col"><a href="#" class="sort-by">ID Financial</a></th>
                                <th scope="col"><a href="#" class="sort-by">Nama</a></th>
                                <th scope="col"><a href="#" class="sort-by">Tanggal</a></th>
                                <th scope="col">Opsi</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($datas as $data)
                            <tr>
                                {{--<td scope="row">--}}
                                    {{--<div class="form-check">--}}
                                        {{--<input class="form-check-input" type="checkbox" value="" id="defaultCheck1">--}}
                                    {{--</div>--}}
                                {{--</td>--}}
                                <td scope="row">{{$data->id_financial}}</td>
                                <td>{{$data->project}}</td>
                                <td>{{$data->date}}</td>
                                <td>
                                    <a href="{{url('viewdraft/'.$data->id_financial)}}" class="btn btn-primary" style="width:2.5rem;"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="{{url('draftdelete/'.$data->id_financial)}}" class="btn btn-danger" style="width:2.5rem;"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                            @endforeach

                            </tbody>
                        </table>
                        <div class="col-sm-6"></div>
                        <div class="row">
                            <div class="col-sm-9">
                                <p>Show 10 to 50 entries</p>
                            </div>
                            <div class="col-sm-3">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        @include('footer.footer')
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
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
</body>

</html>
