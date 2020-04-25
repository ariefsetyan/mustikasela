<!DOCTYPE html>
<html dir="ltr" lang="en" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">

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
    <link href="{{url('dist/css/coklah.css')}}" rel="stylesheet">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

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
                    <h4 class="page-title">Create Financial</h4>
                </div>
                <div class="col-7 align-self-center">
                    <div class="d-flex align-items-center justify-content-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">

                                <li class="breadcrumb-item">
                                    <a href="#">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Create Financial</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="card card-body">
            <form method="post">
                {{csrf_field()}}
                <!--finainsial-->
                <div class="card-body" style="background:#C5EEF8;box-shadow: 0 -1px 0 #e5e5e5,0 0 2px rgba(0,0,0,.12),0 2px 4px rgba(0,0,0,.24);padding-bottom: 1rem;" >

                    <div class="form-row">
                        <div class="col">
                            <label> <b>Job Number</b> </label>
                            <input type="text" name="job_financial" id="job_financial" class="form-control" value="{{$id}}" readonly/>
                        </div>
                        <div class="col">
                            <label> <b>Project</b> </label>
                            <input type="text" name="project_kapal" class="form-control" placeholder="Nama Kapal">
                        </div>
                        <div class="col">
                            <label> <b>Customer Name</b> </label>
                            <input type="text" name="costumer_name" class="form-control" placeholder="Nama Customer">
                        </div>
                        <div class="col">
                            <label> <b>Date</b> </label>
                            <div class="form-group">
                                <input type="date" name="date" max="3000-12-31" min="1000-01-01" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                    <!--end financial-->

                    <!--barang-->
                {{--<nav class="accordion arrows after-add-more" style="width:1115px;" name="addmore[]">--}}
                <nav class="accordion arrows" style="width:1115px;" >
                    <header class="box">
                        <label for="acc-close" class="box-title">Barang 1</label>
                    </header>
                    <input type="radio" name="accordion" id="cb1"/>
                    <section class="box">
                        <label class="box-title" for="cb1"> Barang </label>
                        <label class="box-close" for="acc-close"></label>
                        <div class="box-content">

                            <label class="box-title" for="cb1">ID Barang</label>
                            <label class="box-close" for="acc-close"></label>

                            <div class="col-sm-4">
                                <input class="form-control" id="id_barang" name="id_barang" type="text" placeholder="Id Barang" style="display:flex;width:54rem;margin-left: 1rem;" value="{{$idbr}}" readonly>
                            </div>

                            <label class="box-title" for="cb1">Nama Barang</label>
                            <label class="box-close" for="acc-close"></label>

                            <div class="col-sm-4">
                                <input class="form-control" name="nama_barang" type="text" placeholder="Barang Angkut" style="display:flex;width:54rem;margin-left: 1rem;">
                            </div>
                            <label class="box-title" for="cb1">Jumlah Muatan</label>
                            <label class="box-close" for="acc-close"></label>

                            <div class="col-sm-4">
                                <input class="form-control" name="jumlah_muatan" type="text" placeholder="jumlah muatan" style="display:flex;width:54rem;margin-left: 1rem;">
                            </div>

                            <div class="row" style="margin-left:1.5rem;">
                                <div class="col-sm-3">
                                    <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample1"
                                       role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Volume</a>
                                </div>
                                <div class="col-sm-3">
                                    <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample2"
                                       role="button" aria-expanded="false" aria-controls="multiCollapseExample2">Rate</a>
                                </div>
                                <div class="col-sm-3">
                                    <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample3"
                                       role="button" aria-expanded="false" aria-controls="multiCollapseExample3">Revenue</a>
                                </div>
                                <div class="col-sm-3">
                                    <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample4"
                                       role="button" aria-expanded="false" aria-controls="multiCollapseExample4">expenses</a>
                                </div>
                            </div>

                            <div class="row" style="margin-left:1.5rem;">
                                {{--volume--}}
                                <div class="col-sm-3">
                                    <div class="collapse multi-collapse" id="multiCollapseExample1">

                                        <div class="card card-body" style="border:1px solid #ccc;">
                                            <div class="col-sm-12">
                                                {{--<label>ID Invoice</label>--}}
                                                {{--<input type="text" class="form-control" name="id_volume" id="id_volume" placeholder="id_volume" style="display:flex;">--}}
                                            </div>
                                            <div class="col-sm-12">
                                                <label>Invoice</label>
                                                <input type="text" class="form-control" name="invoice" id="invoice_volume" placeholder="Invoice" style="display:flex;">
                                            </div>
                                            <div class="col-sm-12">
                                                <label>Banker</label>
                                                <input type="text" class="form-control" name="banker_volume"  id="banker_volume" placeholder="Banker volume" style="display:flex;">
                                            </div>
                                            <div class="col-sm-12">
                                                <label>Agent</label>
                                                <input type="text" class="form-control" name="agent_volume" id="agen_volume" placeholder="Agent volume" style="display:flex;">
                                            </div>
                                            <div class="col-sm-12">
                                                <label>Fresh water volume</label>
                                                <input type="text" class="form-control" name="fresh_volume" id="fresh_volume" placeholder="Fresh water volume" style="display:flex;">
                                            </div>
                                            <div class="col-sm-12">
                                                <label>Premi crew</label>
                                                <input type="text" class="form-control" name="premi_crew" id="premi_volume" placeholder="Premi crew" style="display:flex;">
                                            </div>
                                            <div class="col-sm-12">
                                                <label>Time charter</label>
                                                <input type="text" class="form-control" name="time_charter" id="time_volume" placeholder="Time charter" style="display:flex;">
                                            </div>
                                            <div class="col-sm-12">
                                                <label>Reserved</label>
                                                <input type="text" class="form-control" name="reserved" id="res_volume" placeholder="Reserved volume" style="display:flex;">
                                            </div>
                                            <div class="col-sm-12">
                                                <label>Cleaning</label>
                                                <input type="text" class="form-control" name="cleaning_volume" id="cleaning_volume" placeholder="Cleaning volume" style="display:flex;">
                                            </div>
                                            <div class="col-sm-12">
                                                <label>Fee marketing</label>
                                                <input type="text" class="form-control" name="fee_volume"  id="fee_volume" placeholder="Fee marketing" style="display:flex;">
                                            </div>
                                            <div class="col-sm-12">
                                                <label>Port captain</label>
                                                <input type="text" class="form-control" name="port_captain" id="port_volume"   placeholder="Port captain" style="display:flex;">
                                            </div>
                                            <div class="col-sm-12">
                                                <label>Kas kapal</label>
                                                <input type="text" class="form-control" name="kas_kapal" id="kas_volume"  placeholder="Kas kapal" style="display:flex;">
                                            </div>
                                            <div class="col-sm-12">
                                                <label>insentive</label>
                                                <input type="text" class="form-control" name="insentive" id="insen_volume" placeholder="insentive" style="display:flex;">
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <!--  rate-->
                                <div class="col-sm-3">
                                    <div class="collapse multi-collapse" id="multiCollapseExample2">

                                        <div class="card card-body" style="border:1px solid #ccc;">
                                            <div class="col-sm-12">
                                                {{--<label>ID Rate</label>--}}
                                                {{--<input type="text" name="id_rate" id="id_rate" class="form-control" placeholder="Id Rate" style="display:flex;">--}}
                                            </div>
                                            <div class="col-sm-12">
                                                <label>Invoice</label>
                                                <input type="text" name="invoice_rate" id="invoice_rate" class="form-control" placeholder="Invoice" style="display:flex;">
                                            </div>
                                            <div class="col-sm-12">
                                                <label>Banker</label>
                                                <input type="text" name="banker_rate" id="banker_rate" onkeyup="jumlah2()" class="form-control" placeholder="Banker volume" style="display:flex;">
                                            </div>
                                            <div class="col-sm-12">
                                                <label>Agent</label>
                                                <input type="text" name="agent_rate" id="agen_rate" onkeyup="jumlah3()" class="form-control" placeholder="Agent volume" style="display:flex;">
                                            </div>
                                            <div class="col-sm-12">
                                                <label>Fresh water volume</label>
                                                <input type="text" name="frest_rate" id="fresh_rate" class="form-control" onkeyup="jumlah4()" placeholder="Fresh water volume" style="display:flex;">
                                            </div>
                                            <div class="col-sm-12">
                                                <label>Premi crew</label>
                                                <input type="text" name="premi_rate" id="premi_rate" class="form-control" placeholder="Premi crew" onkeyup="jumlah5()" style="display:flex;">
                                            </div>
                                            <div class="col-sm-12">
                                                <label>Time charter</label>
                                                <input type="text" name="time_rate" id="time_rate" class="form-control" onkeyup="jumlah6()" placeholder="Time charter" style="display:flex;">
                                            </div>
                                            <div class="col-sm-12">
                                                <label>Reserved</label>
                                                <input type="text" name="Reserved_rate" id="res_rate" class="form-control" onkeyup="jumlah7()" placeholder="Reserved volume" style="display:flex;">
                                            </div>
                                            <div class="col-sm-12">
                                                <label>Cleaning</label>
                                                <input type="text" name="cleaning_rate" id="cleaning_rate" class="form-control" onkeyup="jumlah8()" placeholder="Cleaning volume" style="display:flex;">
                                            </div>
                                            <div class="col-sm-12">
                                                <label>Fee marketing</label>
                                                <input type="text"  name="fee_rate" id="fee_rate" class="form-control" placeholder="Fee marketing" onkeyup="jumlah9()" style="display:flex;">
                                            </div>
                                            <div class="col-sm-12">
                                                <label>Port captain</label>
                                                <input type="text"  name="port_rate" id="port_rate" class="form-control" onkeyup="jumlah10()" placeholder="Port captain" style="display:flex;">
                                            </div>
                                            <div class="col-sm-12">
                                                <label>Kas kapal</label>
                                                <input type="text"  name="kas_rate" onkeyup="jumlah11()" id="kas_rate" class="form-control" placeholder="Kas kapal" style="display:flex;">
                                            </div>
                                            <div class="col-sm-12">
                                                <label>insentive</label>
                                                <input type="text"  name="insentive_rate" id="insen_rate" onkeyup="jumlah12()" class="form-control" placeholder="insentive" style="display:flex;">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                {{--revenue--}}
                                <div class="col-sm-3">
                                    <div class="collapse multi-collapse" id="multiCollapseExample3">

                                        <div class="card card-body" style="border:1px solid #ccc;">
                                                <div class="col-sm-12">
                                                    {{--<label>Id Revenue</label>--}}
                                                    {{--<input type="text" name="id_revenue" id="id_revenue" class="form-control" placeholder="" style="display:flex;">--}}
                                                </div>
                                                <div class="col-sm-12">
                                                    <label>invoice Revenue</label>
                                                    <input type="text" name="invoice_revenue" id="invoice_revenue"   class="form-control" placeholder="" style="display:flex;">
                                                </div>
                                                <div class="col-sm-12">
                                                    <label>Banker</label>
                                                    <input type="text" name="banker_revenue" id="banker_revenue" class="form-control" placeholder="" style="display:flex;">
                                                </div>
                                                <div class="col-sm-12">
                                                    <label>Agen revenue</label>
                                                    <input type="text" name="agen_revenue" id="agen_revenue" class="form-control" placeholder="" style="display:flex;">
                                                </div>
                                                <div class="col-sm-12">
                                                    <label>Freesh water </label>
                                                    <input type="text" name="fresh_revenue" id="fresh_revenue" class="form-control" placeholder="" style="display:flex;">
                                                </div>
                                                <div class="col-sm-12">
                                                    <label>premi crew </label>
                                                    <input type="text" name="premi_revenue" id="premi_revenue" class="form-control" placeholder="" style="display:flex;">
                                                </div>
                                                <div class="col-sm-12">
                                                    <label>time char </label>
                                                    <input type="text" name="time_revenue" id="time_revenue" class="form-control" placeholder="" style="display:flex;">
                                                </div>
                                                <div class="col-sm-12">
                                                    <label>reserve Revenue</label>
                                                    <input type="text" name="res_revenue" id="res_revenue" class="form-control" placeholder="" style="display:flex;">
                                                </div>
                                                <div class="col-sm-12">
                                                    <label>cleaning Revenue</label>
                                                    <input type="text" name="cleaning_revenue" id="cleaning_revenue" class="form-control" placeholder="" style="display:flex;">
                                                </div>
                                                <div class="col-sm-12">
                                                    <label>fee marketing </label>
                                                    <input type="text"  name="fee_revenue" id="fee_revenue" class="form-control" placeholder="" style="display:flex;">
                                                </div>
                                                <div class="col-sm-12">
                                                    <label>port catain </label>
                                                    <input type="text"  name="port_revenue" id="port_revenue" class="form-control" placeholder="" style="display:flex;">
                                                </div>
                                                <div class="col-sm-12">
                                                    <label>kas kapal Revenue</label>
                                                    <input type="text"  name="kas_revenue" id="kas_revenue" class="form-control" placeholder="" style="display:flex;">
                                                </div>
                                                <div class="col-sm-12">
                                                    <label>insentive</label>
                                                    <input type="text"  name="insen_revenue" id="insen_revenue" class="form-control" placeholder="" style="display:flex;">
                                                </div>
                                            </div>

                                    </div>
                                </div>
                                <!-- expenses -->
                                <div class="col-sm-3">
                                    <div class="collapse multi-collapse" id="multiCollapseExample4">

                                        <div class="card card-body" style="border:1px solid #ccc;">
                                            <div class="col-sm-12">
                                                {{--<label>Id exp</label>--}}
                                                {{--<input type="text" name="id_exp" id="id_exp" class="form-control" placeholder="" style="display:flex;">--}}
                                            </div>
                                            <div class="col-sm-12">
                                                <label>invoice exp</label>
                                                <input type="text" name="invoice_exp" id="invoice_exp" class="form-control" placeholder="" style="display:flex;">
                                            </div>
                                            <div class="col-sm-12">
                                                <label>banker exp</label>
                                                <input type="text" name="banker_exp" id="banker_exp" class="form-control" placeholder="" style="display:flex;">
                                            </div>
                                            <div class="col-sm-12">
                                                <label>agent exp</label>
                                                <input type="text" name="agen_exp" id="agen_exp" class="form-control" placeholder="" style="display:flex;">
                                            </div>
                                            <div class="col-sm-12">
                                                <label>fresh water exp</label>
                                                <input type="text" name="fresh_exp" id="fresh_exp" class="form-control" placeholder="" style="display:flex;">
                                            </div>
                                            <div class="col-sm-12">
                                                <label>crew prmei exp</label>
                                                <input type="text" name="premi_exp" id="premi_exp" class="form-control" placeholder="" style="display:flex;">
                                            </div>
                                            <div class="col-sm-12">
                                                <label>Time chart exp</label>
                                                <input type="text" name="time_exp" id="time_exp" class="form-control" placeholder="" style="display:flex;">
                                            </div>
                                            <div class="col-sm-12">
                                                <label>reserve exp</label>
                                                <input type="text" name="res_exp" id="res_exp" class="form-control" placeholder="" style="display:flex;">
                                            </div>
                                            <div class="col-sm-12">
                                                <label>cleaning exp</label>
                                                <input type="text" name="cleaning_exp" id="cleaning_exp" class="form-control" placeholder="" style="display:flex;">
                                            </div>
                                            <div class="col-sm-12">
                                                <label>fee market exp</label>
                                                <input type="text"  name="fee_exp" id="fee_exp" class="form-control" placeholder="" style="display:flex;">
                                            </div>
                                            <div class="col-sm-12">
                                                <label>port captain exp</label>
                                                <input type="text"  name="port_exp" id="port_exp" class="form-control" placeholder="" style="display:flex;">
                                            </div>
                                            <div class="col-sm-12">
                                                <label>kas kapal</label>
                                                <input type="text"  name="kas_exp" id="kas_exp" class="form-control" placeholder="" style="display:flex;">
                                            </div>
                                            <div class="col-sm-12">
                                                <label>insentive exp</label>
                                                <input type="text"  name="insen_exp" id="insen_exp" class="form-control"  placeholder="" style="display:flex;">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label>TOTAL REVENUE</label>
                                                <input type="text" name="total_rev" id="total_revenue" class="form-control" placeholder="TOTAL REVENUE" style="display:flex;">
                                            </div>

                                            <div class="col-sm-6">
                                                <label>TOTAL EXPENSES</label>
                                                <input type="text" name="total_exp" id="total_ex" class="form-control" placeholder="TOTAL EXPENSES" style="display:flex;">
                                            </div>
                                            <div class="col-sm-6">
                                                <label>TOTAL SELISIH</label>
                                                <input type="text" name="selisih" id="selsih" class="form-control" placeholder="SELISIH" style="display:flex;">
                                            </div>
                                        </div>
                                        </br>
                                        <div class="col-sm-12">
                                            <label type="text" name="garis_lol" id="garis_lol" class="form-control"  placeholder="" ></label>
                                        </div>
                                        </br>

                                    </div>
                                </div>
                                {{--detil--}}
                                <div class="col-sm-12" style="padding-top:1rem;">
                                    <div class="row">
                                        <div class="card card-body">

                                            </br>

                                            <div class="row">

                                                {{--<div class="col-sm-4">--}}
                                                    {{--<label>ID Detail</label>--}}
                                                    {{--<input type="text" name="id_detail" id="id_detail" class="form-control" placeholder="Id Detail" style="display:flex;">--}}
                                                {{--</div>--}}
                                                <div class="col-sm-4">
                                                    <label>Loading Time</label>
                                                    <input type="text" name="loading_time" class="form-control" placeholder="Waktu angkut muatan" style="display:flex;">
                                                </div>
                                                <div class="col-sm-4">
                                                    <label>Discharging Time</label>
                                                    <input type="text" name="dischargin_time" class="form-control" placeholder="Waktu bongkar muatan" style="display:flex;">
                                                </div>
                                                <div class="col-sm-4">
                                                    <label>Port of loading</label>
                                                    <input type="text" name="portload" class="form-control" placeholder="Pelabuhan asal" style="display:flex;">
                                                </div>
                                                <div class="col-sm-4">
                                                    <label>Port of discharging</label>
                                                    <input type="text" name="portdischarge" class="form-control" placeholder="Pelabuhan tujuan" style="display:flex;">
                                                </div>
                                                <div class="col-sm-4">
                                                    <label>Sailing Time</label>
                                                    <input type="text" name="sailtime" class="form-control" placeholder="Lama kapal berlayar" style="display:flex;">
                                                </div>
                                                <div class="col-sm-4">
                                                    <label>Assist</label>
                                                    <input type="text"name="assist" class="form-control" placeholder="Assist" style="display:flex;">
                                                </div>
                                                <div class="col-sm-4">
                                                    <label>Add cost</label>
                                                    <input type="text" name="addcost" class="form-control" placeholder="Add cost" style="display:flex;">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <input type="radio" name="accordion" id="cb2" />
                    <input type="radio" name="accordion" id="cb3" />
                    <input type="radio" name="accordion" id="acc-close" />

                </nav>

                {{--<nav class="accordion arrows copy hide" style="width:1115px;" name="addmore[]">--}}
                    {{--<header class="box">--}}
                        {{--<label for="acc-close" class="box-title">Barang 1</label>--}}
                    {{--</header>--}}
                    {{--<input type="radio" name="accordion" id="cb1"/>--}}
                    {{--<section class="box">--}}
                        {{--<label class="box-title" for="cb1"> Barang </label>--}}
                        {{--<label class="box-close" for="acc-close"></label>--}}
                        {{--<div class="box-content">--}}

                            {{--<label class="box-title" for="cb1">ID Barang</label>--}}
                            {{--<label class="box-close" for="acc-close"></label>--}}

                            {{--<div class="col-sm-4">--}}
                                {{--<input class="form-control" id="id_barang" name="id_barang" type="text" placeholder="Id Barang" style="display:flex;width:54rem;margin-left: 1rem;" value="{{$idbr}}" readonly>--}}
                            {{--</div>--}}

                            {{--<label class="box-title" for="cb1">Nama Barang</label>--}}
                            {{--<label class="box-close" for="acc-close"></label>--}}

                            {{--<div class="col-sm-4">--}}
                                {{--<input class="form-control" name="nama_barang" type="text" placeholder="Barang Angkut" style="display:flex;width:54rem;margin-left: 1rem;">--}}
                            {{--</div>--}}
                            {{--<label class="box-title" for="cb1">Jumlah Muatan</label>--}}
                            {{--<label class="box-close" for="acc-close"></label>--}}

                            {{--<div class="col-sm-4">--}}
                                {{--<input class="form-control" name="jumlah_muatan" type="text" placeholder="jumlah muatan" style="display:flex;width:54rem;margin-left: 1rem;">--}}
                            {{--</div>--}}

                            {{--<div class="row" style="margin-left:1.5rem;">--}}
                                {{--<div class="col-sm-3">--}}
                                    {{--<a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample1"--}}
                                       {{--role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Volume</a>--}}
                                {{--</div>--}}
                                {{--<div class="col-sm-3">--}}
                                    {{--<a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample2"--}}
                                       {{--role="button" aria-expanded="false" aria-controls="multiCollapseExample2">Rate</a>--}}
                                {{--</div>--}}
                                {{--<div class="col-sm-3">--}}
                                    {{--<a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample3"--}}
                                       {{--role="button" aria-expanded="false" aria-controls="multiCollapseExample3">Revenue</a>--}}
                                {{--</div>--}}
                                {{--<div class="col-sm-3">--}}
                                    {{--<a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample4"--}}
                                       {{--role="button" aria-expanded="false" aria-controls="multiCollapseExample4">expenses</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="row" style="margin-left:1.5rem;">--}}
                                {{--volume--}}
                                {{--<div class="col-sm-3">--}}
                                    {{--<div class="collapse multi-collapse" id="multiCollapseExample1">--}}

                                        {{--<div class="card card-body" style="border:1px solid #ccc;">--}}
                                            {{--<div class="col-sm-12">--}}
                                                {{--<label>ID Invoice</label>--}}
                                                {{--<input type="text" class="form-control" name="id_volume" id="id_volume" placeholder="id_volume" style="display:flex;">--}}
                                            {{--</div>--}}
                                            {{--<div class="col-sm-12">--}}
                                                {{--<label>Invoice</label>--}}
                                                {{--<input type="text" class="form-control" name="invoice" id="invoice_volume" placeholder="Invoice" style="display:flex;">--}}
                                            {{--</div>--}}
                                            {{--<div class="col-sm-12">--}}
                                                {{--<label>Banker</label>--}}
                                                {{--<input type="text" class="form-control" name="banker_volume"  id="banker_volume" placeholder="Banker volume" style="display:flex;">--}}
                                            {{--</div>--}}
                                            {{--<div class="col-sm-12">--}}
                                                {{--<label>Agent</label>--}}
                                                {{--<input type="text" class="form-control" name="agent_volume" id="agen_volume" placeholder="Agent volume" style="display:flex;">--}}
                                            {{--</div>--}}
                                            {{--<div class="col-sm-12">--}}
                                                {{--<label>Fresh water volume</label>--}}
                                                {{--<input type="text" class="form-control" name="fresh_volume" id="fresh_volume" placeholder="Fresh water volume" style="display:flex;">--}}
                                            {{--</div>--}}
                                            {{--<div class="col-sm-12">--}}
                                                {{--<label>Premi crew</label>--}}
                                                {{--<input type="text" class="form-control" name="premi_crew" id="premi_volume" placeholder="Premi crew" style="display:flex;">--}}
                                            {{--</div>--}}
                                            {{--<div class="col-sm-12">--}}
                                                {{--<label>Time charter</label>--}}
                                                {{--<input type="text" class="form-control" name="time_charter" id="time_volume" placeholder="Time charter" style="display:flex;">--}}
                                            {{--</div>--}}
                                            {{--<div class="col-sm-12">--}}
                                                {{--<label>Reserved</label>--}}
                                                {{--<input type="text" class="form-control" name="reserved" id="res_volume" placeholder="Reserved volume" style="display:flex;">--}}
                                            {{--</div>--}}
                                            {{--<div class="col-sm-12">--}}
                                                {{--<label>Cleaning</label>--}}
                                                {{--<input type="text" class="form-control" name="cleaning_volume" id="cleaning_volume" placeholder="Cleaning volume" style="display:flex;">--}}
                                            {{--</div>--}}
                                            {{--<div class="col-sm-12">--}}
                                                {{--<label>Fee marketing</label>--}}
                                                {{--<input type="text" class="form-control" name="fee_volume"  id="fee_volume" placeholder="Fee marketing" style="display:flex;">--}}
                                            {{--</div>--}}
                                            {{--<div class="col-sm-12">--}}
                                                {{--<label>Port captain</label>--}}
                                                {{--<input type="text" class="form-control" name="port_captain" id="port_volume"   placeholder="Port captain" style="display:flex;">--}}
                                            {{--</div>--}}
                                            {{--<div class="col-sm-12">--}}
                                                {{--<label>Kas kapal</label>--}}
                                                {{--<input type="text" class="form-control" name="kas_kapal" id="kas_volume"  placeholder="Kas kapal" style="display:flex;">--}}
                                            {{--</div>--}}
                                            {{--<div class="col-sm-12">--}}
                                                {{--<label>insentive</label>--}}
                                                {{--<input type="text" class="form-control" name="insentive" id="insen_volume" placeholder="insentive" style="display:flex;">--}}
                                            {{--</div>--}}
                                        {{--</div>--}}

                                    {{--</div>--}}
                                {{--</div>--}}

                                {{--<!--  rate-->--}}
                                {{--<div class="col-sm-3">--}}
                                    {{--<div class="collapse multi-collapse" id="multiCollapseExample2">--}}

                                        {{--<div class="card card-body" style="border:1px solid #ccc;">--}}
                                            {{--<div class="col-sm-12">--}}
                                                {{--<label>ID Rate</label>--}}
                                                {{--<input type="text" name="id_rate" id="id_rate" class="form-control" placeholder="Id Rate" style="display:flex;">--}}
                                            {{--</div>--}}
                                            {{--<div class="col-sm-12">--}}
                                                {{--<label>Invoice</label>--}}
                                                {{--<input type="text" name="invoice_rate" id="invoice_rate" class="form-control" placeholder="Invoice" style="display:flex;">--}}
                                            {{--</div>--}}
                                            {{--<div class="col-sm-12">--}}
                                                {{--<label>Banker</label>--}}
                                                {{--<input type="text" name="banker_rate" id="banker_rate" onkeyup="jumlah2()" class="form-control" placeholder="Banker volume" style="display:flex;">--}}
                                            {{--</div>--}}
                                            {{--<div class="col-sm-12">--}}
                                                {{--<label>Agent</label>--}}
                                                {{--<input type="text" name="agent_rate" id="agen_rate" onkeyup="jumlah3()" class="form-control" placeholder="Agent volume" style="display:flex;">--}}
                                            {{--</div>--}}
                                            {{--<div class="col-sm-12">--}}
                                                {{--<label>Fresh water volume</label>--}}
                                                {{--<input type="text" name="frest_rate" id="fresh_rate" class="form-control" onkeyup="jumlah4()" placeholder="Fresh water volume" style="display:flex;">--}}
                                            {{--</div>--}}
                                            {{--<div class="col-sm-12">--}}
                                                {{--<label>Premi crew</label>--}}
                                                {{--<input type="text" name="premi_rate" id="premi_rate" class="form-control" placeholder="Premi crew" onkeyup="jumlah5()" style="display:flex;">--}}
                                            {{--</div>--}}
                                            {{--<div class="col-sm-12">--}}
                                                {{--<label>Time charter</label>--}}
                                                {{--<input type="text" name="time_rate" id="time_rate" class="form-control" onkeyup="jumlah6()" placeholder="Time charter" style="display:flex;">--}}
                                            {{--</div>--}}
                                            {{--<div class="col-sm-12">--}}
                                                {{--<label>Reserved</label>--}}
                                                {{--<input type="text" name="Reserved_rate" id="res_rate" class="form-control" onkeyup="jumlah7()" placeholder="Reserved volume" style="display:flex;">--}}
                                            {{--</div>--}}
                                            {{--<div class="col-sm-12">--}}
                                                {{--<label>Cleaning</label>--}}
                                                {{--<input type="text" name="cleaning_rate" id="cleaning_rate" class="form-control" onkeyup="jumlah8()" placeholder="Cleaning volume" style="display:flex;">--}}
                                            {{--</div>--}}
                                            {{--<div class="col-sm-12">--}}
                                                {{--<label>Fee marketing</label>--}}
                                                {{--<input type="text"  name="fee_rate" id="fee_rate" class="form-control" placeholder="Fee marketing" onkeyup="jumlah9()" style="display:flex;">--}}
                                            {{--</div>--}}
                                            {{--<div class="col-sm-12">--}}
                                                {{--<label>Port captain</label>--}}
                                                {{--<input type="text"  name="port_rate" id="port_rate" class="form-control" onkeyup="jumlah10()" placeholder="Port captain" style="display:flex;">--}}
                                            {{--</div>--}}
                                            {{--<div class="col-sm-12">--}}
                                                {{--<label>Kas kapal</label>--}}
                                                {{--<input type="text"  name="kas_rate" onkeyup="jumlah11()" id="kas_rate" class="form-control" placeholder="Kas kapal" style="display:flex;">--}}
                                            {{--</div>--}}
                                            {{--<div class="col-sm-12">--}}
                                                {{--<label>insentive</label>--}}
                                                {{--<input type="text"  name="insentive_rate" id="insen_rate" onkeyup="jumlah12()" class="form-control" placeholder="insentive" style="display:flex;">--}}
                                            {{--</div>--}}
                                        {{--</div>--}}

                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--revenue--}}
                                {{--<div class="col-sm-3">--}}
                                    {{--<div class="collapse multi-collapse" id="multiCollapseExample3">--}}

                                        {{--<div class="card card-body" style="border:1px solid #ccc;">--}}
                                            {{--<div class="col-sm-12">--}}
                                                {{--<label>Id Revenue</label>--}}
                                                {{--<input type="text" name="id_revenue" id="id_revenue" class="form-control" placeholder="" style="display:flex;">--}}
                                            {{--</div>--}}
                                            {{--<div class="col-sm-12">--}}
                                                {{--<label>invoice Revenue</label>--}}
                                                {{--<input type="text" name="invoice_revenue" id="invoice_revenue"   class="form-control" placeholder="" style="display:flex;">--}}
                                            {{--</div>--}}
                                            {{--<div class="col-sm-12">--}}
                                                {{--<label>Banker</label>--}}
                                                {{--<input type="text" name="banker_revenue" id="banker_revenue" class="form-control" placeholder="" style="display:flex;">--}}
                                            {{--</div>--}}
                                            {{--<div class="col-sm-12">--}}
                                                {{--<label>Agen revenue</label>--}}
                                                {{--<input type="text" name="agen_revenue" id="agen_revenue" class="form-control" placeholder="" style="display:flex;">--}}
                                            {{--</div>--}}
                                            {{--<div class="col-sm-12">--}}
                                                {{--<label>Freesh water </label>--}}
                                                {{--<input type="text" name="fresh_revenue" id="fresh_revenue" class="form-control" placeholder="" style="display:flex;">--}}
                                            {{--</div>--}}
                                            {{--<div class="col-sm-12">--}}
                                                {{--<label>premi crew </label>--}}
                                                {{--<input type="text" name="premi_revenue" id="premi_revenue" class="form-control" placeholder="" style="display:flex;">--}}
                                            {{--</div>--}}
                                            {{--<div class="col-sm-12">--}}
                                                {{--<label>time char </label>--}}
                                                {{--<input type="text" name="time_revenue" id="time_revenue" class="form-control" placeholder="" style="display:flex;">--}}
                                            {{--</div>--}}
                                            {{--<div class="col-sm-12">--}}
                                                {{--<label>reserve Revenue</label>--}}
                                                {{--<input type="text" name="res_revenue" id="res_revenue" class="form-control" placeholder="" style="display:flex;">--}}
                                            {{--</div>--}}
                                            {{--<div class="col-sm-12">--}}
                                                {{--<label>cleaning Revenue</label>--}}
                                                {{--<input type="text" name="cleaning_revenue" id="cleaning_revenue" class="form-control" placeholder="" style="display:flex;">--}}
                                            {{--</div>--}}
                                            {{--<div class="col-sm-12">--}}
                                                {{--<label>fee marketing </label>--}}
                                                {{--<input type="text"  name="fee_revenue" id="fee_revenue" class="form-control" placeholder="" style="display:flex;">--}}
                                            {{--</div>--}}
                                            {{--<div class="col-sm-12">--}}
                                                {{--<label>port catain </label>--}}
                                                {{--<input type="text"  name="port_revenue" id="port_revenue" class="form-control" placeholder="" style="display:flex;">--}}
                                            {{--</div>--}}
                                            {{--<div class="col-sm-12">--}}
                                                {{--<label>kas kapal Revenue</label>--}}
                                                {{--<input type="text"  name="kas_revenue" id="kas_revenue" class="form-control" placeholder="" style="display:flex;">--}}
                                            {{--</div>--}}
                                            {{--<div class="col-sm-12">--}}
                                                {{--<label>insentive</label>--}}
                                                {{--<input type="text"  name="insen_revenue" id="insen_revenue" class="form-control" placeholder="" style="display:flex;">--}}
                                            {{--</div>--}}
                                        {{--</div>--}}

                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<!-- expenses -->--}}
                                {{--<div class="col-sm-3">--}}
                                    {{--<div class="collapse multi-collapse" id="multiCollapseExample4">--}}

                                        {{--<div class="card card-body" style="border:1px solid #ccc;">--}}
                                            {{--<div class="col-sm-12">--}}
                                                {{--<label>Id exp</label>--}}
                                                {{--<input type="text" name="id_exp" id="id_exp" class="form-control" placeholder="" style="display:flex;">--}}
                                            {{--</div>--}}
                                            {{--<div class="col-sm-12">--}}
                                                {{--<label>invoice exp</label>--}}
                                                {{--<input type="text" name="invoice_exp" id="invoice_exp" class="form-control" placeholder="" style="display:flex;">--}}
                                            {{--</div>--}}
                                            {{--<div class="col-sm-12">--}}
                                                {{--<label>banker exp</label>--}}
                                                {{--<input type="text" name="banker_exp" id="banker_exp" class="form-control" placeholder="" style="display:flex;">--}}
                                            {{--</div>--}}
                                            {{--<div class="col-sm-12">--}}
                                                {{--<label>agent exp</label>--}}
                                                {{--<input type="text" name="agen_exp" id="agen_exp" class="form-control" placeholder="" style="display:flex;">--}}
                                            {{--</div>--}}
                                            {{--<div class="col-sm-12">--}}
                                                {{--<label>fresh water exp</label>--}}
                                                {{--<input type="text" name="fresh_exp" id="fresh_exp" class="form-control" placeholder="" style="display:flex;">--}}
                                            {{--</div>--}}
                                            {{--<div class="col-sm-12">--}}
                                                {{--<label>crew prmei exp</label>--}}
                                                {{--<input type="text" name="premi_exp" id="premi_exp" class="form-control" placeholder="" style="display:flex;">--}}
                                            {{--</div>--}}
                                            {{--<div class="col-sm-12">--}}
                                                {{--<label>Time chart exp</label>--}}
                                                {{--<input type="text" name="time_exp" id="time_exp" class="form-control" placeholder="" style="display:flex;">--}}
                                            {{--</div>--}}
                                            {{--<div class="col-sm-12">--}}
                                                {{--<label>reserve exp</label>--}}
                                                {{--<input type="text" name="res_exp" id="res_exp" class="form-control" placeholder="" style="display:flex;">--}}
                                            {{--</div>--}}
                                            {{--<div class="col-sm-12">--}}
                                                {{--<label>cleaning exp</label>--}}
                                                {{--<input type="text" name="cleaning_exp" id="cleaning_exp" class="form-control" placeholder="" style="display:flex;">--}}
                                            {{--</div>--}}
                                            {{--<div class="col-sm-12">--}}
                                                {{--<label>fee market exp</label>--}}
                                                {{--<input type="text"  name="fee_exp" id="fee_exp" class="form-control" placeholder="" style="display:flex;">--}}
                                            {{--</div>--}}
                                            {{--<div class="col-sm-12">--}}
                                                {{--<label>port captain exp</label>--}}
                                                {{--<input type="text"  name="port_exp" id="port_exp" class="form-control" placeholder="" style="display:flex;">--}}
                                            {{--</div>--}}
                                            {{--<div class="col-sm-12">--}}
                                                {{--<label>kas kapal</label>--}}
                                                {{--<input type="text"  name="kas_exp" id="kas_exp" class="form-control" placeholder="" style="display:flex;">--}}
                                            {{--</div>--}}
                                            {{--<div class="col-sm-12">--}}
                                                {{--<label>insentive exp</label>--}}
                                                {{--<input type="text"  name="insen_exp" id="insen_exp" class="form-control"  placeholder="" style="display:flex;">--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="row">--}}
                                            {{--<div class="col-sm-6">--}}
                                                {{--<label>TOTAL REVENUE</label>--}}
                                                {{--<input type="text" name="total_rev" id="total_revenue" class="form-control" placeholder="TOTAL REVENUE" style="display:flex;">--}}
                                            {{--</div>--}}

                                            {{--<div class="col-sm-6">--}}
                                                {{--<label>TOTAL EXPENSES</label>--}}
                                                {{--<input type="text" name="total_exp" id="total_ex" class="form-control" placeholder="TOTAL EXPENSES" style="display:flex;">--}}
                                            {{--</div>--}}
                                            {{--<div class="col-sm-6">--}}
                                                {{--<label>TOTAL SELISIH</label>--}}
                                                {{--<input type="text" name="selisih" id="selsih" class="form-control" placeholder="SELISIH" style="display:flex;">--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--</br>--}}
                                        {{--<div class="col-sm-12">--}}
                                            {{--<label type="text" name="garis_lol" id="garis_lol" class="form-control"  placeholder="" ></label>--}}
                                        {{--</div>--}}
                                        {{--</br>--}}

                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--detil--}}
                                {{--<div class="col-sm-12" style="padding-top:1rem;">--}}
                                    {{--<div class="row">--}}
                                        {{--<div class="card card-body">--}}

                                            {{--</br>--}}

                                            {{--<div class="row">--}}

                                                {{--<div class="col-sm-4">--}}
                                                {{--<label>ID Detail</label>--}}
                                                {{--<input type="text" name="id_detail" id="id_detail" class="form-control" placeholder="Id Detail" style="display:flex;">--}}
                                                {{--</div>--}}
                                                {{--<div class="col-sm-4">--}}
                                                    {{--<label>Loading Time</label>--}}
                                                    {{--<input type="text" name="loading_time" class="form-control" placeholder="Waktu angkut muatan" style="display:flex;">--}}
                                                {{--</div>--}}
                                                {{--<div class="col-sm-4">--}}
                                                    {{--<label>Discharging Time</label>--}}
                                                    {{--<input type="text" name="dischargin_time" class="form-control" placeholder="Waktu bongkar muatan" style="display:flex;">--}}
                                                {{--</div>--}}
                                                {{--<div class="col-sm-4">--}}
                                                    {{--<label>Port of loading</label>--}}
                                                    {{--<input type="text" name="portload" class="form-control" placeholder="Pelabuhan asal" style="display:flex;">--}}
                                                {{--</div>--}}
                                                {{--<div class="col-sm-4">--}}
                                                    {{--<label>Port of discharging</label>--}}
                                                    {{--<input type="text" name="portdischarge" class="form-control" placeholder="Pelabuhan tujuan" style="display:flex;">--}}
                                                {{--</div>--}}
                                                {{--<div class="col-sm-4">--}}
                                                    {{--<label>Sailing Time</label>--}}
                                                    {{--<input type="text" name="sailtime" class="form-control" placeholder="Lama kapal berlayar" style="display:flex;">--}}
                                                {{--</div>--}}
                                                {{--<div class="col-sm-4">--}}
                                                    {{--<label>Assist</label>--}}
                                                    {{--<input type="text"name="assist" class="form-control" placeholder="Assist" style="display:flex;">--}}
                                                {{--</div>--}}
                                                {{--<div class="col-sm-4">--}}
                                                    {{--<label>Add cost</label>--}}
                                                    {{--<input type="text" name="addcost" class="form-control" placeholder="Add cost" style="display:flex;">--}}
                                                {{--</div>--}}
                                            {{--</div>--}}

                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</section>--}}
                    {{--<input type="radio" name="accordion" id="cb2" />--}}
                    {{--<input type="radio" name="accordion" id="cb3" />--}}
                    {{--<input type="radio" name="accordion" id="acc-close" />--}}

                {{--</nav>--}}
                <!--end barang-->

                <div class="row" style="margin-top:1rem;">
                    {{--<div class="input-group-btn">--}}
                        {{--<button class="btn btn-success add-more" type="button"><i class="glyphicon glyphicon-plus"></i> Add</button>--}}
                    {{--</div>--}}
                    <div class="col-sm-2">
                        <button type="button" class="btn btn-dark">Tambah Barang&nbsp;<i class="fas fa-plus"></i></button>
                    </div>
                    <div class="col-sm-2">
                        <button type="reset" class="btn btn-outline-secondary" >Clear all data &nbsp;<i class="fas fa-redo-alt"></i></button>
                    </div>
                    <div class="col-sm-2">
                        <button type="submit" class="btn btn-link" formaction="{{url('simpanfinancialdraft')}}">Simpan Draft&nbsp;<i class="fas fa-redo-alt"></i></button>
                    </div>
                    <div class="col-sm-2">
                        <button type="submit" class="btn btn-primary" formaction="{{url('simpanfinancial')}}">Proses &nbsp; <i class="far fa-save"></i></button>
                    </div>

                </div>

            </form>

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
<script src="{{url('assets/libs/jquery/dist/jquery.min.js')}}"></script>
<script type="text/javascript" src="jquery-1.12.3.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{url('assets/libs/popper.js/dist/umd/popper.min.js')}}"></script>
<script src="{{url('assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- slimscrollbar scrollb
ar JavaScript -->
<script src="{{url('assets/extra-libs/sparkline/sparkline.js')}}"></script>
<!--Wave Effects -->
<script src="{{url('dist/js/waves.js')}}"></script>
<!--Menu sidebar -->
<script src="{{url('dist/js/sidebarmenu.js')}}"></script>
<!--Custom JavaScript -->
<script src="{{url('dist/js/custom.min.js')}}"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $(".add-more").click(function(){
            var html = $(".copy").html();
            $(".after-add-more").after(html);
        });
        $("body").on("click",".remove",function(){
            $(this).parents(".control-group").remove();
        });
    });
</script>

{{--<script>--}}
    {{--function simpan(){--}}
        {{--$.ajax({--}}
            {{--url : "../../../controller/proses.php?aksi=financial",--}}
            {{--type: "POST",--}}
            {{--data: $('#financial').serialize(),--}}
            {{--dataType: "TEXT",--}}
            {{--success: function(data)--}}
            {{--{--}}
                {{--alert(data);--}}
            {{--},--}}
            {{--error: function (jqXHR, textStatus, errorThrown){--}}
                {{--alert("Error json " + errorThrown);--}}
            {{--}--}}
        {{--});--}}

        {{--$.ajax({--}}
            {{--url : "../../../controller/proses.php?aksi=barang",--}}
            {{--type: "POST",--}}
            {{--data: $('#barang').serialize(),--}}
            {{--dataType: "TEXT",--}}
            {{--success: function(data)--}}
            {{--{--}}
                {{--alert(data);--}}
            {{--},--}}
            {{--error: function (jqXHR, textStatus, errorThrown){--}}
                {{--alert("Error json " + errorThrown);--}}
            {{--}--}}
        {{--});--}}

        {{--$.ajax({--}}
            {{--url : "../../../controller/proses.php?aksi=volume",--}}
            {{--type: "POST",--}}
            {{--data: $('#volume').serialize(),--}}
            {{--dataType: "TEXT",--}}
            {{--success: function(data)--}}
            {{--{--}}
                {{--alert("succes");--}}
            {{--},--}}
            {{--error: function (jqXHR, textStatus, errorThrown){--}}
                {{--alert("Error json " + errorThrown);--}}
            {{--}--}}
        {{--});--}}


        {{--$.ajax({--}}
            {{--url : "../../../controller/proses.php?aksi=detail",--}}
            {{--type: "POST",--}}
            {{--data: $('#detail').serialize(),--}}
            {{--dataType: "TEXT",--}}
            {{--success: function(data)--}}
            {{--{--}}
                {{--alert(data);--}}
            {{--},--}}
            {{--error: function (jqXHR, textStatus, errorThrown){--}}
                {{--alert("Error json " + errorThrown);--}}
            {{--}--}}
        {{--});--}}

        {{--$.ajax({--}}
            {{--url : "../../../controller/proses.php?aksi=rate",--}}
            {{--type: "POST",--}}
            {{--data: $('#rate').serialize(),--}}
            {{--dataType: "TEXT",--}}
            {{--success: function(data)--}}
            {{--{--}}
                {{--alert(data);--}}
                {{--location.reload();--}}
            {{--},--}}
            {{--error: function (jqXHR, textStatus, errorThrown){--}}
                {{--alert("Error json " + errorThrown);--}}
            {{--}--}}
        {{--});--}}

        {{--$.ajax({--}}
            {{--url : "../../../controller/proses.php?aksi=revenue",--}}
            {{--type: "POST",--}}
            {{--data: $('#revenue').serialize(),--}}
            {{--dataType: "TEXT",--}}
            {{--success: function(data)--}}
            {{--{--}}
                {{--alert(data);--}}
            {{--},--}}
            {{--error: function (jqXHR, textStatus, errorThrown){--}}
                {{--alert("Error json " + errorThrown);--}}
            {{--}--}}
        {{--});--}}

        {{--$.ajax({--}}
            {{--url : "../../../controller/proses.php?aksi=exp",--}}
            {{--type: "POST",--}}
            {{--data: $('#exp').serialize(),--}}
            {{--dataType: "TEXT",--}}
            {{--success: function(data)--}}
            {{--{--}}
                {{--alert(data);--}}
            {{--},--}}
            {{--error: function (jqXHR, textStatus, errorThrown){--}}
                {{--alert("Error json " + errorThrown);--}}
            {{--}--}}
        {{--});--}}

    {{--}--}}

    {{--function jumlah() {--}}
        {{--var angka1 = parseInt(document.getElementById("job_financial").value);--}}
        {{--var result = angka1;--}}

        {{--document.getElementById("id_rate").value= result;--}}
        {{--document.getElementById("id_volume").value= result;--}}
        {{--document.getElementById("id_barang").value= result;--}}
        {{--document.getElementById("id_exp").value= result;--}}
        {{--document.getElementById("id_revenue").value= result;--}}
        {{--document.getElementById("id_detail").value= result;--}}
    {{--}--}}
    {{--function jumlah1() {--}}
        {{--var angka1 = parseInt(document.getElementById("invoice_volume").value);--}}
        {{--var angka2 = parseInt(document.getElementById("invoice_rate").value);--}}
        {{--var result = angka1 * angka2;--}}
        {{--document.getElementById("invoice_revenue").value= result;--}}
    {{--}--}}
    {{--function jumlah2() {--}}
        {{--var angka1 = parseInt(document.getElementById("banker_volume").value);--}}
        {{--var angka2 = parseInt(document.getElementById("banker_rate").value);--}}
        {{--var result = angka1 * angka2;--}}
        {{--document.getElementById("banker_exp").value= result;--}}
    {{--}--}}
    {{--function jumlah3() {--}}
        {{--var angka1 = parseInt(document.getElementById("agen_volume").value);--}}
        {{--var angka2 = parseInt(document.getElementById("agen_rate").value);--}}
        {{--var result = angka1 * angka2;--}}
        {{--document.getElementById("agen_exp").value= result;--}}
    {{--}--}}
    {{--function jumlah4() {--}}
        {{--var angka1 = parseInt(document.getElementById("fresh_volume").value);--}}
        {{--var angka2 = parseInt(document.getElementById("fresh_rate").value);--}}
        {{--var result = angka1 * angka2;--}}
        {{--document.getElementById("fresh_exp").value= result;--}}
    {{--}--}}
    {{--function jumlah5() {--}}
        {{--var angka1 = parseInt(document.getElementById("premi_volume").value);--}}
        {{--var angka2 = parseInt(document.getElementById("premi_rate").value);--}}
        {{--var result = angka1 * angka2;--}}
        {{--document.getElementById("premi_exp").value= result;--}}
    {{--}--}}
    {{--function jumlah6() {--}}
        {{--var angka1 = parseInt(document.getElementById("time_volume").value);--}}
        {{--var angka2 = parseInt(document.getElementById("time_rate").value);--}}
        {{--var result = angka1 * angka2;--}}
        {{--document.getElementById("time_exp").value= result;--}}
    {{--}--}}
    {{--function jumlah7() {--}}
        {{--var angka1 = parseInt(document.getElementById("res_volume").value);--}}
        {{--var angka2 = parseInt(document.getElementById("res_rate").value);--}}
        {{--var result = angka1 * angka2;--}}
        {{--document.getElementById("res_exp").value= result;--}}
    {{--}--}}
    {{--function jumlah8() {--}}
        {{--var angka1 = parseInt(document.getElementById("cleaning_volume").value);--}}
        {{--var angka2 = parseInt(document.getElementById("cleaning_rate").value);--}}
        {{--var result = angka1 * angka2;--}}
        {{--document.getElementById("cleaning_exp").value= result;--}}
    {{--}--}}
    {{--function jumlah9() {--}}
        {{--var angka1 = parseInt(document.getElementById("fee_volume").value);--}}
        {{--var angka2 = parseInt(document.getElementById("fee_rate").value);--}}
        {{--var result = angka1 * angka2;--}}
        {{--document.getElementById("fee_exp").value= result;--}}
    {{--}--}}
    {{--function jumlah10() {--}}
        {{--var angka1 = parseInt(document.getElementById("port_volume").value);--}}
        {{--var angka2 = parseInt(document.getElementById("port_rate").value);--}}
        {{--var result = angka1 * angka2;--}}
        {{--document.getElementById("port_exp").value= result;--}}
    {{--}--}}
    {{--function jumlah11() {--}}
        {{--var angka1 = parseInt(document.getElementById("kas_volume").value);--}}
        {{--var angka2 = parseInt(document.getElementById("kas_rate").value);--}}
        {{--var result = angka1 * angka2;--}}
        {{--document.getElementById("kas_exp").value= result;--}}
    {{--}--}}
    {{--function jumlah12() {--}}
        {{--var angkao = parseInt(document.getElementById("insen_volume").value);--}}
        {{--var angkap = parseInt(document.getElementById("insen_rate").value);--}}
        {{--var resultt = angkao * angkap;--}}
        {{--document.getElementById("insen_exp").value= resultt;--}}

        {{--var angka3 = parseInt(document.getElementById("banker_exp").value);--}}
        {{--var angka4 = parseInt(document.getElementById("agen_exp").value);--}}
        {{--var angka5 = parseInt(document.getElementById("fresh_exp").value);--}}
        {{--var angka6 = parseInt(document.getElementById("premi_exp").value);--}}
        {{--var angka7 = parseInt(document.getElementById("time_exp").value);--}}
        {{--var angka8 = parseInt(document.getElementById("res_exp").value);--}}
        {{--var angka9 = parseInt(document.getElementById("cleaning_exp").value);--}}
        {{--var angka10 = parseInt(document.getElementById("fee_exp").value);--}}
        {{--var angka11 = parseInt(document.getElementById("port_exp").value);--}}
        {{--var angka12 = parseInt(document.getElementById("kas_exp").value);--}}
        {{--var angka13 = parseInt(document.getElementById("insen_exp").value);--}}

        {{--var result =  angka3 + angka4 + angka5 + angka6 + angka7 + angka8 + angka9 + angka10 + angka11 + angka12 + angka13;--}}
        {{--document.getElementById("total_ex").value= result;--}}

        {{--var angkax = parseInt(document.getElementById("invoice_revenue").value);--}}
        {{--var resultx = angkax;--}}
        {{--document.getElementById("total_revenue").value= resultx;--}}


        {{--var resultz = resultx - result;--}}
        {{--document.getElementById("selsih").value= resultz;--}}

    {{--}--}}
    {{--function jumlah13() {--}}



    {{--}--}}

    {{--function jumlah14(){--}}


    {{--}--}}
    {{--function jumlah15(){--}}

    {{--}--}}


{{--</script>--}}


<!-- Modal -->
<div class="modal fade" id="tabel1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">TabelFinancial</h4>
            </div>
            <div class="modal-body">
                <<div class="container">
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

                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</body>

</html>
