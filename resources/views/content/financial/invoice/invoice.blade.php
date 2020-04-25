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
    <link href="{{url('dist/css/avatar.css')}}" rel="stylesheet">
    <link href="{{url('dist/css/upload.css')}}" rel="stylesheet">

</head>

<script>
    function simpan() {
        $.ajax({
            url: "../../../controller/prosesinvoice.php?aksi=detil",
            type: "POST",
            data: $('#form').serialize(),
            dataType: "TEXT",
            success: function (data) {
                alert(data);
            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert("Error json " + errorThrown);
            }
        });
    }
</script>
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
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
@include('navbar.navbar')
<!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
@include('menu.menu')
<!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-5 align-self-center">
                    <h4 class="page-title">Invoice</h4>
                </div>
                <div class="col-7 align-self-center">
                    <div class="d-flex align-items-center justify-content-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="#">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Invoice</li>
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
                        <div class="container">
                            <div class="row">
                                <!-- ===nav=== -->
                                <div class="col-sm-12">
                                    <div class="row" style="margin-left:2rem;">
                                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Edit</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="pills-profile-tab"  href="invoice0.php?id=" role="tab" aria-controls="pills-home" aria-selected="false">Preview</a>
                                            </li>

                                        </ul>
                                        <div class="col-sm-10">

                                            <div class="btn-group dropleft">
                                                <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background:#042936;margin-left: 45.8rem;">
                                                    Export &nbsp;<i class="fas fa-file"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="invoice-db-pdf.php">PDF</a>
                                                    <a class="dropdown-item" href="#">Email</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-content" id="pills-tabContent" style="width:67rem;">
                                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                        <div class="container">
                                            <form id="form">
                                                <div class="col-sm-12">
                                                    <div class="row">
                                                        <div class="form-group" style="margin-left:2rem;">
                                                            <label for="exampleFormControlTextarea1">Bill To</label>
                                                            <textarea class="form-control" name="bilto" id="exampleFormControlTextarea1" placeholder="Nama Perusahaan tujuan" rows="3" style="width:15rem;"></textarea>
                                                        </div>
                                                        <div class="form-group" style="margin-left:0.3rem;">
                                                            <label>Job Number</label>
                                                            <input type="text" name="job_number" value="" class="form-control" placeholder="001"  style="width:15rem;">
                                                        </div>
                                                        <div class="form-group" style="margin-left:0.3rem;">
                                                            <label>Tanggal</label>
                                                            <input type="date" name="tanggal" max="3000-12-31"
                                                                   min="1000-01-01" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="col-sm-12" style="margin-right:20rem;">
                                                    <div class="row">
                                                        <div class="card card-body">
                                                            <table class="table table-bordered">
                                                                <thead>
                                                                <tr>
                                                                    <th scope="col">Description</th>
                                                                    <th scope="col">Currency</th>
                                                                    <th scope="col">Ammount</th>

                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <tr>
                                                                    <th scope="row"><div class="col-sm-12">
                                                                            <textarea name="deskripsi" class="form-control" rows="1" placeholder="Description"></textarea>
                                                                        </div></th>
                                                                    <td><div class="col-sm-12">
                                                                            <select  name="curency" class="form-control" rows="9">
                                                                                <option>IDR</option>
                                                                                <option>USD</option>
                                                                                <option>EUR</option>
                                                                                <option></option>
                                                                                <option></option>
                                                                            </select>
                                                                        </div></td>
                                                                    <td><div class="col-sm-12">
                                                                            <input type="text" name="amount" class="form-control" placeholder="">
                                                                        </div></td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="card card-body">
                                                        <h4 style="margin-left:0rem;">REMARK</h4> <br>
                                                        <div class="form-group">
                                                            <label for="formGroupExampleInput">Word Say in Rupiah</label>
                                                            <input type="text" name="wsr" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="formGroupExampleInput2">Word Say in Vallas</label>
                                                            <input type="text" name="wsv" class="form-control" id="formGroupExampleInput2" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="card-body">
                                                        <h4 style="margin-left:0rem;">PAYMENT PAID TROUGH</h4> <br>
                                                        <div class="row">
                                                            <div class="col-sm-3">
                                                                <label>Nama Rekening</label>
                                                                <input type="text" name="nama_rekening" class="form-control" placeholder="PT. Jatim Mustika Sela">
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <label>Bank</label>
                                                                <input type="text" name="bank" class="form-control" placeholder="Mandiri">
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <label>No. Rekening</label>
                                                                <input type="text" name="norek" class="form-control" placeholder="14-01-891982-92">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <div class="col-sm-12">
                                                <div class="card-body">
                                                    <h4 style="margin-left:0rem;">JAMS OFFICE</h4> <br>
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                                <button type="button" onclick="simpan()" class="btn btn-primary">SIMPAN</button>
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
            @include('footer.footer')
            <!-- ============================================================== -->
                <!-- End footer -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Page wrapper  -->
            <!-- ============================================================== -->
        </div>
    </div>
</div>

        <script src="{{url('assets/libs/jquery/dist/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{url('jquery-1.12.3.js')}}"></script>
        <!-- Bootstrap tether Core JavaScript -->
        <script src="{{url('assets/libs/popper.js/dist/umd/popper.min.js')}}"></script>
        <script src="{{url('assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
        <!-- slimscrollbar scrollbar JavaScript -->
        <script src="{{url('assets/extra-libs/sparkline/sparkline.js')}}"></script>
        <!--Wave Effects -->
        <script src="{{url('dist/js/waves.js')}}"></script>
        <script src="{{url('dist/js/avatar.js')}}"></script>
        <script src="{{url('dist/js/upload.js')}}"></script>
        <!--Menu sidebar -->
        <script src="{{url('dist/js/sidebarmenu.js')}}"></script>
        <!--Custom JavaScript -->
        <script src="{{url('dist/js/custom.min.js')}}"></script>
</body>
</html>
