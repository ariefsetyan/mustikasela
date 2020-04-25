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

</head>

<body>

<div class="preloader">
    <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
    </div>
</div>

<div id="main-wrapper" data-navbarbg="skin6" data-theme="light" data-layout="vertical" data-sidebartype="full"
     data-boxed-layout="full">

    @include('navbar.navbar')

    @include('menu.menu')

    <div class="page-wrapper">

        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-5 align-self-center">
                    <div class="col-sm-4">
                        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#tabel1">
                            lihat tabel
                        </button>
                    </div>
                    <h4 class="page-title">Create Real Cost</h4>

                </div>
                <div class="col-7 align-self-center">
                    <div class="d-flex align-items-center justify-content-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="#">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Create Real Cost</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">

            <!-- Row -->
            <div class="container-fluid">
                <form id="rate-cost">
                    {{csrf_field()}}
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body"
                                 style="background:#C5EEF8;box-shadow: 0 -1px 0 #e5e5e5,0 0 2px rgba(0,0,0,.12),0 2px 4px rgba(0,0,0,.24);">
                                {{--<form id="rate-cost">--}}
{{--                                    {{csrf_field()}}--}}
                                    <div class="form-row">
                                        <div class="col-sm-3">
                                            <label>Job Number</label>
                                            <input type="text" name="job_number" class="form-control"
                                                   placeholder="Nomor Job" value="{{$id}}" readonly>
                                        </div>
                                        <div class="col-sm-3">
                                            <label>Project</label>
                                            <input type="text" name="nama_kapal" class="form-control"
                                                   placeholder="Nama Kapal">
                                        </div>
                                        <div class="col-sm-3">
                                            <label>Nama Costumer</label>
                                            <input type="text" name="customer" class="form-control"
                                                   placeholder="Nama Customer">
                                        </div>
                                        <div class="col-sm-3">
                                            <label>Date</label>
                                            <div class="form-group">
                                                <input type="date" name="bday" max="3000-12-31"
                                                       min="1000-01-01" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-sm-3">
                                            <label>Port of loading</label>
                                            <input type="text" name="portload" class="form-control"
                                                   placeholder="Pelabuhan asal">
                                        </div>
                                        <div class="col-sm-3">
                                            <label>Port of discharging</label>
                                            <input type="text" name="portdis" class="form-control"
                                                   placeholder="Pelabuhan tujuan">
                                        </div>
                                        <div class="col-sm-3">
                                            <label>Time estimation</label>
                                            <input type="text" name="time" class="form-control"
                                                   placeholder="Estimasi Waktu">
                                        </div>

                                        <div class="col-sm-3">
                                            <label>Shipper Account</label>
                                            <input type="text" name="shipper" class="form-control"
                                                   placeholder="Pemilik Kapal">
                                        </div>
                                    </div>
                                {{--</form>--}}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card text-white  mb-3" style="max-width: 75rem;box-shadow: 0 -1px 0 #e5e5e5,0 0 2px rgba(0,0,0,.12),0 2px 4px rgba(0,0,0,.24);">
                    <div class="card-header bg-cyan"> &nbsp;&nbsp; Barang 1 <br>
                        <div class="col-sm-2">
                            <input type="text" name="id" class="form-control" onkeyup="jumlah16()" id="idini" >
                        </div>
                    </div>

                    <table class="table table-hover">
                        <thead>
                        <tr>
                            {{--<th scope="col">No</th>--}}
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Principal</th>
                            <th scope="col">Rate (Rupiah)</th>
                            <th scope="col">Volume</th>
                            <th scope="col">Revenue</th>
                            <th scope="col">Expenses</th>
                        </tr>
                        </thead>
                        <tbody>
                        {{--invoice--}}
                        <tr>

                                <td scope="row">Invoice</td>
                                <td scope="row">
                                    <div class="col">
                                        <input type="text" name="principali" class="form-control">
                                    </div>
                                </td>
                                <td>
                                    <div class="col">
                                        <input type="text" id="rate1" name="ratei" class="form-control">
                                    </div>
                                </td>
                                <td>
                                    <div class="col">
                                        <input type="text" id="volume1" onkeyup="jumlah()" name="volumei" class="form-control">
                                    </div>
                                </td>
                                <td scope="row">
                                    <input type="text" id="revenue1"  name="revenuei" class="form-control">
                                </td>
                                <td scope="row">
                                    <input type="text" name="expensivei" class="form-control">
                                </td>
                        </tr>
                        {{--Time Charter--}}
                        <tr>

                                <td scope="row">Time Charter</td>
                                <td scope="row">
                                    <div class="col">
                                        <input type="text" name="principaltc" class="form-control">
                                    </div>
                                </td>
                                <td>
                                    <div class="col">
                                        <input type="text"id="rate2" name="ratetc" class="form-control">
                                    </div>
                                </td>
                                <td>
                                    <div class="col">
                                        <input type="text" id="volume2" onkeyup="jumlah2()" name="volumetc" class="form-control">
                                    </div>
                                </td>
                                <td scope="row"><input type="text" name="revenuetc" class="form-control"></td>
                                <td scope="row"><input type="text" id="expensive2" name="expensivetc" class="form-control"></td>
                        </tr>
                        {{--agen1--}}
                        <tr>
                                <td scope="row">Agent 1</td>
                                <td scope="row">
                                    <div class="col">
                                        <input type="text" name="principalA1" class="form-control">
                                    </div>
                                </td>
                                <td>
                                    <div class="col">
                                        <input type="text" id="rate3" name="rateA1" class="form-control">
                                    </div>
                                </td>
                                <td>
                                    <div class="col">
                                        <input type="text" id="volume3" onkeyup="jumlah3()" name="volumeA1" class="form-control">
                                    </div>
                                </td>
                                <td scope="row"><input type="text" name="revenueA1" class="form-control"></td>
                                <td scope="row"><input type="text"  id="expensive3" name="expensiveA1" class="form-control"></td>
                            {{--</form>--}}
                        </tr>
                        <tr>

                                <td scope="row">Agent 2</td>
                                <td scope="row">
                                    <div class="col">
                                        <input type="text" name="principalA2" class="form-control">
                                    </div>
                                </td>
                                <td>
                                    <div class="col">
                                        <input type="text" id="rate4" name="rateA2" class="form-control">
                                    </div>
                                </td>
                                <td>
                                    <div class="col">
                                        <input type="text" id="volume4"  onkeyup="jumlah4()" name="volumeA2" class="form-control">
                                    </div>
                                </td>
                                <td scope="row"><input type="text" name="revenueA2" class="form-control"></td>
                                <td scope="row"><input type="text"  id="expensive4" name="expensiveA2" class="form-control"></td>

                        </tr>
                        {{--Bunker F/E--}}
                        <tr>

                                <td scope="row">Bunker F/E</td>
                                <td scope="row">
                                    <div class="col">
                                        <input type="text" name="principald" class="form-control">
                                    </div>
                                </td>
                                <td>
                                    <div class="col">
                                        <input type="text" id="rate5" name="rated" class="form-control">
                                    </div>
                                </td>
                                <td>
                                    <div class="col">
                                        <input type="text" id="volume5" onkeyup="jumlah5()" name="volumed" class="form-control">
                                    </div>
                                </td>
                                <td scope="row"><input type="text" name="revenued" class="form-control"></td>
                                <td scope="row"><input type="text"   id="expensive5" name="expensived" class="form-control"></td>
                            {{--</form>--}}
                        </tr>
                        <tr>

                                <td scope="row">Tug Assist</td>
                                <td scope="row">
                                    <div class="col">
                                        <input type="text" name="principalta" class="form-control">
                                    </div>
                                </td>
                                <td>
                                    <div class="col">
                                        <input type="text" id="rate6" name="rateta" class="form-control">
                                    </div>
                                </td>
                                <td>
                                    <div class="col">
                                        <input type="text" id="volume6" onkeyup="jumlah6()" name="volumeta" class="form-control">
                                    </div>
                                </td>
                                <td scope="row"><input type="text" name="revenueta" class="form-control"></td>
                                <td scope="row"><input type="text"  id="expensive6" name="expensiveta" class="form-control"></td>

                        </tr>
                        {{--Bunker F/W--}}
                        <tr>

                                <td scope="row">Bunker F/W</td>
                                <td scope="row">
                                    <div class="col">
                                        <input type="text" name="principalbw" class="form-control">
                                    </div>
                                </td>
                                <td>
                                    <div class="col">
                                        <input type="text" id="rate7"  name="ratebw" class="form-control">
                                    </div>
                                </td>
                                <td>
                                    <div class="col">
                                        <input type="text" id="volume7" onkeyup="jumlah7()" name="volumebw" class="form-control">
                                    </div>
                                </td>
                                <td scope="row"><input type="text" name="revenuebw" class="form-control"></td>
                                <td scope="row"><input type="text"  id="expensive7"  name="expensivebw" class="form-control"></td>

                        </tr>
                        {{--Cleaning--}}
                        <tr>

                                <td scope="row">Cleaning</td>
                                <td scope="row">
                                    <div class="col">
                                        <input type="text" name="principalc" class="form-control">
                                    </div>
                                </td>
                                <td>
                                    <div class="col">
                                        <input type="text" id="rate8" name="ratec" class="form-control">
                                    </div>
                                </td>
                                <td>
                                    <div class="col">
                                        <input type="text" onkeyup="jumlah8()" id="volume8" name="volumec" class="form-control">
                                    </div>
                                </td>
                                <td scope="row"><input type="text"  name="revenuec" class="form-control"></td>
                                <td scope="row"><input type="text"  id="expensive8" name="expensivec" class="form-control"></td>

                        </tr>
                        {{--Navigation--}}
                        <tr>

                                <td scope="row">Navigation</td>
                                <td scope="row">
                                    <div class="col">
                                        <input type="text" name="principaln" class="form-control">
                                    </div>
                                </td>
                                <td>
                                    <div class="col">
                                        <input type="text" id="rate9" name="raten" class="form-control">
                                    </div>
                                </td>
                                <td>
                                    <div class="col">
                                        <input type="text" id="volume9" onkeyup="jumlah9()" name="volumen" class="form-control">
                                    </div>
                                </td>
                                <td scope="row"><input type="text" name="revenuen" class="form-control"></td>
                                <td scope="row"><input type="text"  id="expensive9" name="expensiven" class="form-control"></td>

                        </tr>
                        {{--Refund--}}
                        <tr>

                                <td scope="row">Refund</td>
                                <td scope="row">
                                    <div class="col">
                                        <input type="text" name="principalr" class="form-control">
                                    </div>
                                </td>
                                <td>
                                    <div class="col">
                                        <input type="text" id="rate10" name="rater" class="form-control">
                                    </div>
                                </td>
                                <td>
                                    <div class="col">
                                        <input type="text" id="volume10" onkeyup="jumlah10()" name="volumer" class="form-control">
                                    </div>
                                </td>
                                <td scope="row"><input type="text" name="revenuer" class="form-control"></td>
                                <td scope="row"><input type="text"  id="expensive10" name="expensiver" class="form-control"></td>

                        </tr>
                        {{--Add cost--}}
                        <tr>

                                <td scope="row">Add cost</td>
                                <td scope="row">
                                    <div class="col">
                                        <input type="text" name="principalac" class="form-control">
                                    </div>
                                </td>
                                <td>
                                    <div class="col">
                                        <input type="text" id="rate11" name="rateac" class="form-control">
                                    </div>
                                </td>
                                <td>
                                    <div class="col">
                                        <input type="text"  id="volume11" onkeyup="jumlah11()" name="volumeac" class="form-control">
                                    </div>
                                </td>
                                <td scope="row"><input type="text" name="revenueac" class="form-control"></td>
                                <td scope="row"><input type="text"  id="expensive11" name="expensiveac" class="form-control"></td>

                        </tr>

                        <tr>

                                <td scope="row">Kas Kapal</td>
                                <td scope="row">
                                    <div class="col">
                                        <input type="text" name="principalkk" class="form-control">
                                    </div>
                                </td>
                                <td>
                                    <div class="col">
                                        <input type="text" id="rate12" name="ratekk" class="form-control">
                                    </div>
                                </td>
                                <td>
                                    <div class="col">
                                        <input type="text" id="volume12" onkeyup="jumlah12()" name="volumekk" class="form-control">
                                    </div>
                                </td>
                                <td scope="row"><input type="text" name="revenuekk" class="form-control"></td>
                                <td scope="row"><input type="text"  id="expensive12" name="expensivekk" class="form-control"></td>

                        </tr>

                        <tr>
                                <td scope="row">Mediator Fee</td>
                                <td scope="row">
                                    <div class="col">
                                        <input type="text" name="principalmf" class="form-control">
                                    </div>
                                </td>
                                <td>
                                    <div class="col">
                                        <input type="text" id="rate13" name="ratemf" class="form-control">
                                    </div>
                                </td>
                                <td>
                                    <div class="col">
                                        <input type="text" id="volume13" onkeyup="jumlah13()" name="volumemf" class="form-control">
                                    </div>
                                </td>
                                <td scope="row"><input type="text" name="revenuemf" class="form-control"></td>
                                <td scope="row"><input type="text"  id="expensive13" name="expensivemf" class="form-control"></td>
                        </tr>

                        <tr>
                                <td scope="row">Port Captain Fee</td>
                                <td scope="row">
                                    <div class="col">
                                        <input type="text" name="principalpcf" class="form-control">
                                    </div>
                                </td>
                                <td>
                                    <div class="col">
                                        <input type="text" id="rate14" name="ratepcf" class="form-control">
                                    </div>
                                </td>
                                <td>
                                    <div class="col">
                                        <input type="text" id="volume14" onkeyup="jumlah14()" name="volumepcf" class="form-control">
                                    </div>
                                </td>
                                <td scope="row"><input type="text" name="revenuepcf" class="form-control " onkeyup="jumlah15()" ></td>
                                <td scope="row"><input type="text" id="expensive14" name="expensivepcf"  onkeyup="jumlah15()" class="form-control"></td>

                        </tr>
                        {{--Total--}}
                        <tr>

                            <td scope="row">Total</td>
                            <td scope="row">
                                <div class="col">
                                    <label type="text" name="principaltotal" />
                                </div>
                            </td>
                            <td>
                                <div class="col">
                                    <label type="text" id="volume15"  name="ratetotal" />
                                </div>
                            </td>
                            <td>
                                <div class="col">
                                    <label type="text" id="rate15" name="volumetotal" />
                                </div>
                            </td>
                                <td scope="row"><input type="text" id="revenue15" name="revenuetotal" class="form-control"></td>
                            <td scope="row"><input type="text" id="expensive15" name="expensivetotal" class="form-control" onkeyup="jumlah17()"></td>

                        </tr>
                        {{--PROFIT / LOSS--}}
                        <tr>

                            <td scope="row">PROFIT / LOSS</td>
                            <td scope="row">
                                <div class="col">
                                    <label type="text" name="principal" />
                                </div>
                            </td>
                            <td>
                                <div class="col">
                                    <label type="text" id="volume16"  name="rate" />
                                </div>
                            </td>
                            <td>
                                <div class="col">
                                    <label type="text" id="rate16" name="volume" />
                                </div>
                            </td>
                            <td scope="row">
                                <label type="text" id="revenue16" name="revenue" />
                            </td>
                            <td scope="row">
                                <input type="text" id="expensive16" name="expensiveprovit" class="form-control">
                            </td>

                        </tr>
                        </tbody>
                    </table>

                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <button type="reset" class="btn btn-outline-secondary" >Clear all data &nbsp;<i class="fas fa-redo-alt"></i></button>
                    </div>
                    <div class="col-sm-2">
                        <button type="submit" class="btn btn-link" formaction="{{url('simpanrealcostdraft')}}">Simpan Draft&nbsp;<i class="far fa-save"></i></button>
                    </div>
                    <div class="col-sm-2">
                        <button type="submit" class="btn btn-primary" formaction="{{url('simpanrealcost')}}">Proses&nbsp;<i
                                    class="far fa-save"></i></button>
                    </div>


                </div>

                </form>
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
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="../../assets/libs/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="jquery-1.12.3.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="../../assets/libs/popper.js/dist/umd/popper.min.js"></script>
<script src="../../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="../../assets/extra-libs/sparkline/sparkline.js"></script>
<!--Wave Effects -->
<script src="../../dist/js/waves.js"></script>
<!--Menu sidebar -->
<script src="../../dist/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="../../dist/js/custom.min.js"></script>
</body>
<script>
    function simpan() {
        $.ajax({
            url: "../../../controller/proses.php?aksi=rate_cost",
            type: "POST",
            data: $('#rate-cost').serialize(),
            dataType: "TEXT",
            success: function (data) {
                alert(data);

            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert("Error json " + errorThrown);
            }
        });
        $.ajax({
            url: "../../../controller/proses_real_cost.php?aksi=detail_rate_cost1",
            type: "POST",
            data: $('#detail-1').serialize(),
            dataType: "TEXT",
            success: function (data) {

            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert("Error json " + errorThrown);
            }
        });
        $.ajax({
            url: "../../../controller/proses_real_cost.php?aksi=detail_rate_cost2",
            type: "POST",
            data: $('#detail-2').serialize(),
            dataType: "TEXT",
            success: function (data) {
            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert("Error json " + errorThrown);
            }
        });
        $.ajax({
            url: "../../../controller/proses_real_cost.php?aksi=detail_rate_cost3",
            type: "POST",
            data: $('#detail-3').serialize(),
            dataType: "TEXT",
            success: function (data) {

            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert("Error json " + errorThrown);
            }
        });
        $.ajax({
            url: "../../../controller/proses_real_cost.php?aksi=detail_rate_cost4",
            type: "POST",
            data: $('#detail-4').serialize(),
            dataType: "TEXT",
            success: function (data) {

            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert("Error json " + errorThrown);
            }
        });
        $.ajax({
            url: "../../../controller/proses_real_cost.php?aksi=detail_rate_cost5",
            type: "POST",
            data: $('#detail-5').serialize(),
            dataType: "TEXT",
            success: function (data) {

            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert("Error json " + errorThrown);
            }
        });
        $.ajax({
            url: "../../../controller/proses_real_cost.php?aksi=detail_rate_cost6",
            type: "POST",
            data: $('#detail-6').serialize(),
            dataType: "TEXT",
            success: function (data) {
            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert("Error json " + errorThrown);
            }
        });
        $.ajax({
            url: "../../../controller/proses_real_cost.php?aksi=detail_rate_cost7",
            type: "POST",
            data: $('#detail-7').serialize(),
            dataType: "TEXT",
            success: function (data) {
                alert(data);
            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert("Error json " + errorThrown);
            }
        });
        $.ajax({
            url: "../../../controller/proses_real_cost.php?aksi=detail_rate_cost8",
            type: "POST",
            data: $('#detail-8').serialize(),
            dataType: "TEXT",
            success: function (data) {

            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert("Error json " + errorThrown);
            }
        });
        $.ajax({
            url: "../../../controller/proses_real_cost.php?aksi=detail_rate_cost9",
            type: "POST",
            data: $('#detail-9').serialize(),
            dataType: "TEXT",
            success: function (data) {

            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert("Error json " + errorThrown);
            }
        });
        $.ajax({
            url: "../../../controller/proses_real_cost.php?aksi=detail_rate_cost10",
            type: "POST",
            data: $('#detail-10').serialize(),
            dataType: "TEXT",
            success: function (data) {
            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert("Error json " + errorThrown);
            }
        });
        $.ajax({
            url: "../../../controller/proses_real_cost.php?aksi=detail_rate_cost11",
            type: "POST",
            data: $('#detail-11').serialize(),
            dataType: "TEXT",
            success: function (data) {

            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert("Error json " + errorThrown);
            }
        });
        $.ajax({
            url: "../../../controller/proses_real_cost.php?aksi=detail_rate_cost12",
            type: "POST",
            data: $('#detail-12').serialize(),
            dataType: "TEXT",
            success: function (data) {

            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert("Error json " + errorThrown);
            }
        });
        $.ajax({
            url: "../../../controller/proses_real_cost.php?aksi=detail_rate_cost13",
            type: "POST",
            data: $('#detail-13').serialize(),
            dataType: "TEXT",
            success: function (data) {

            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert("Error json " + errorThrown);
            }
        });
        $.ajax({
            url: "../../../controller/proses_real_cost.php?aksi=detail_rate_cost14",
            type: "POST",
            data: $('#detail-14').serialize(),
            dataType: "TEXT",
            success: function (data) {

            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert("Error json " + errorThrown);
            }
        });

        $.ajax({
            url: "../../../controller/proses_real_cost.php?aksi=detail_rate_cost15",
            type: "POST",
            data: $('#detail-15').serialize(),
            dataType: "TEXT",
            success: function (data) {

            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert("Error json " + errorThrown);
            }
        });
        $.ajax({
            url: "../../../controller/proses_real_cost.php?aksi=detail_rate_cost16",
            type: "POST",
            data: $('#detail-16').serialize(),
            dataType: "TEXT",
            success: function (data) {

            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert("Error json " + errorThrown);
            }
        });


    }

    function jumlah() {
        var angka1 = parseInt(document.getElementById("volume1").value);
        var angka2 = parseInt(document.getElementById("rate1").value);
        var result = angka1 * angka2;
        document.getElementById("revenue1").value= result;
    }
    function jumlah2() {
        var angka1 = parseInt(document.getElementById("volume2").value);
        var angka2 = parseInt(document.getElementById("rate2").value);
        var result = angka1 * angka2;
        document.getElementById("expensive2").value= result;
    }
    function jumlah3() {
        var angka1 = parseInt(document.getElementById("volume3").value);
        var angka2 = parseInt(document.getElementById("rate3").value);
        var result = angka1 * angka2;
        document.getElementById("expensive3").value= result;
    }
    function jumlah4() {
        var angka1 = parseInt(document.getElementById("volume4").value);
        var angka2 = parseInt(document.getElementById("rate4").value);
        var result = angka1 * angka2;
        document.getElementById("expensive4").value= result;
    }
    function jumlah5() {
        var angka1 = parseInt(document.getElementById("volume5").value);
        var angka2 = parseInt(document.getElementById("rate5").value);
        var result = angka1 * angka2;
        document.getElementById("expensive5").value= result;
    }
    function jumlah6() {
        var angka1 = parseInt(document.getElementById("volume6").value);
        var angka2 = parseInt(document.getElementById("rate6").value);
        var result = angka1 * angka2;
        document.getElementById("expensive6").value= result;
    }
    function jumlah7() {
        var angka1 = parseInt(document.getElementById("volume7").value);
        var angka2 = parseInt(document.getElementById("rate7").value);
        var result = angka1 * angka2;
        document.getElementById("expensive7").value= result;
    }
    function jumlah8() {
        var angka1 = parseInt(document.getElementById("volume8").value);
        var angka2 = parseInt(document.getElementById("rate8").value);
        var result = angka1 * angka2;
        document.getElementById("expensive8").value= result;
    }
    function jumlah9() {
        var angka1 = parseInt(document.getElementById("volume9").value);
        var angka2 = parseInt(document.getElementById("rate9").value);
        var result = angka1 * angka2;
        document.getElementById("expensive9").value= result;
    }
    function jumlah10() {
        var angka1 = parseInt(document.getElementById("volume10").value);
        var angka2 = parseInt(document.getElementById("rate10").value);
        var result = angka1 * angka2;
        document.getElementById("expensive10").value= result;
    }
    function jumlah11() {
        var angka1 = parseInt(document.getElementById("volume11").value);
        var angka2 = parseInt(document.getElementById("rate11").value);
        var result = angka1 * angka2;
        document.getElementById("expensive11").value= result;
    }
    function jumlah12() {
        var angka1 = parseInt(document.getElementById("volume12").value);
        var angka2 = parseInt(document.getElementById("rate12").value);
        var result = angka1 * angka2;
        document.getElementById("expensive12").value= result;
    }
    function jumlah13() {
        var angka1 = parseInt(document.getElementById("volume13").value);
        var angka2 = parseInt(document.getElementById("rate13").value);
        var result = angka1 * angka2;
        document.getElementById("expensive13").value= result;
    }
    function jumlah14() {
        var angka1 = parseInt(document.getElementById("volume14").value);
        var angka2 = parseInt(document.getElementById("rate14").value);
        var result = angka1 * angka2;
        document.getElementById("expensive14").value= result;
    }
    function jumlah15() {
        var angka1 = parseInt(document.getElementById("revenue1").value);


        var angka3 = parseInt(document.getElementById("expensive2").value);
        var angka4 = parseInt(document.getElementById("expensive3").value);
        var angka5 = parseInt(document.getElementById("expensive4").value);
        var angka6 = parseInt(document.getElementById("expensive5").value);
        var angka7 = parseInt(document.getElementById("expensive6").value);
        var angka8 = parseInt(document.getElementById("expensive7").value);
        var angka9 = parseInt(document.getElementById("expensive8").value);
        var angka10 = parseInt(document.getElementById("expensive9").value);
        var angka11 = parseInt(document.getElementById("expensive10").value);
        var angka12 = parseInt(document.getElementById("expensive11").value);
        var angka13 = parseInt(document.getElementById("expensive12").value);
        var angka14 = parseInt(document.getElementById("expensive13").value);
        var angka15 = parseInt(document.getElementById("expensive14").value);

        var result1 = angka1;
        var result =  angka3 + angka4 + angka5 + angka6 + angka7 + angka8 + angka9 + angka10 + angka11 + angka12 + angka13 + angka14 + angka15;
        document.getElementById("revenue15").value= result1;
        document.getElementById("expensive15").value= result;
    }
    function jumlah16() {
        var angka1 = parseInt(document.getElementById("idini").value);
        var result = angka1;

        document.getElementById("idini1").value= result;
        document.getElementById("idini2").value= result;
        document.getElementById("idini3").value= result;
        document.getElementById("idini4").value= result;
        document.getElementById("idini5").value= result;
        document.getElementById("idini6").value= result;
        document.getElementById("idini7").value= result;
        document.getElementById("idini8").value= result;
        document.getElementById("idini9").value= result;
        document.getElementById("idini10").value= result;
        document.getElementById("idini11").value= result;
        document.getElementById("idini12").value= result;
        document.getElementById("idini13").value= result;
        document.getElementById("idini14").value= result;
        document.getElementById("idini15").value= result;
        document.getElementById("idini16").value= result;
    }
    function jumlah17() {
        var angka1 = parseInt(document.getElementById("revenue15").value);
        var angka2 = parseInt(document.getElementById("expensive15").value);
        var result = angka1 - angka2;
        document.getElementById("expensive16").value= result;
    }


</script>

<div class="modal fade" id="tabel1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">TabelFinancial</h4>
            </div>
            <div class="modal-body">
                <
                <div class="container">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>JOB NUMBER</th>
                            <th>NAMA KAPAL</th>
                            <th>CUSTOMER</th>
                            <th>TANGGAL</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>s</td>
                            <td>d</td>
                            <td>a</td>
                            <td>c</td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

</html>
