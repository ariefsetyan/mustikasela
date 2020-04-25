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

<div id="main-wrapper" data-navbarbg="skin6" data-theme="light" data-layout="vertical" data-sidebartype="full" data-boxed-layout="full">

    @include('navbar.navbar')

    @include('menu.menu')

    <div class="page-wrapper">

        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-5 align-self-center">
                    <h4 class="page-title">Surat Perjanjian Angkatan Laut (SPAL)</h4>
                </div>
                <div class="col-7 align-self-center">
                    <div class="d-flex align-items-center justify-content-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="#">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">SPAL</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">

            <!-- Row -->
            <div class="container-fluid">
                <form id="form" method="post">
                    {{csrf_field()}}
                    @foreach($datasfinancial as $data)
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body" style="background:#C5EEF8;">
                                        <div class="form-row">
                                            <div class="col-sm-4">
                                                <label>Job Number</label>
                                                <input type="text" name="job_number" class="form-control" placeholder="Nomor Job" value="{{$data->id_financial}}" readonly>
                                            </div>
                                            <div class="col-sm-4">
                                                <label>Project</label>
                                                <input type="text" name="nama_kapal" class="form-control" placeholder="Nama Kapal" value="{{$data->project}}" readonly>
                                            </div>
                                            <div class="col-sm-4">
                                                <label>Date</label>
                                                <div class="form-group">
                                                    <input type="date" name="bday" max="3000-12-31" min="1000-01-01" class="form-control" value="{{$data->date}}" readonly>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                {{--@foreach($datasspals as $dataspal)--}}
                                <div class="card card-body">
                                    <div class="col-sm-12">

                                        <div class="form-row">
                                            <div class="col-sm-4">
                                                <label>Pemilik Operator Kapal </label>
                                                <input type="text" name="pemilik" class="form-control" value="{{$data->pemilik_kapal}}" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-sm-4">
                                                <label>Keagenan Kapal</label>
                                                <input type="text" name="agent" class="form-control" value="{{$data->keagenan_kapal}}" required>
                                            </div>
                                            <div class="col-sm-4">
                                                <label>Bendera</label>
                                                <input type="text" name="flag" class="form-control" value="{{$data->bendera_kapal}}" required>
                                            </div>
                                            <div class="col-sm-4">
                                                <label>Posisi Kapal</label>
                                                <input type="text" name="posisi" class="form-control" value="{{$data->posisi_kapal}}" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-sm-4">
                                                <label>Kondisi Kontrak Muatan</label>
                                                <input type="text" name="kondisi" class="form-control" value="{{$data->kodisi_muatan}}" required>
                                            </div>
                                            <div class="col-sm-4">
                                                <label>Uang Tambang / Sewa</label>
                                                <input type="number" name="uang" class="form-control" value="{{$data->uang_sewa}}" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-sm-4">
                                                <label>Kesediaan Kapal</label>
                                                <input type="text" name="kesediaan" class="form-control" value="{{$data->kesediaan_kapal}}" required>
                                            </div>
                                            <div class="col-sm-4">
                                                <label>Cara Pembayaran</label>
                                                <input type="text" name="cara_bayar" class="form-control" value="{{$data->pembayaran}}" required>
                                            </div>
                                            <div class="col-sm-4">
                                                <label>Tujuan Transfer Pembayaran</label>
                                                <input type="text" name="tujuan" class="form-control" value="{{$data->tujuan_transfer}}" required>
                                            </div>
                                        </div>
                                        <div class="form-row">

                                        </div>
                                        <div class="form-row">
                                            <div class="col-sm-4">
                                                <label>Pengiriman Barang</label>
                                                <input type="text" name="kirim" class="form-control" value="{{$data->pengiriman_barang}}" required>
                                            </div>
                                            <div class="col-sm-4">
                                                <label>Penerima Barang</label>
                                                <input type="text" name="terima" class="form-control" value="{{$data->penerima_barang}}" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-sm-4">
                                                <label>Asuransi</label>
                                                <input type="text" name="asuransi" class="form-control" value="{{$data->asuransi}}" required>
                                            </div>
                                            <div class="col-sm-4">
                                                <label>Asuransi Barang</label>
                                                <input type="text" name="asuransi_barang" class="form-control" value="{{$data->asuransi_barang}}" required>
                                            </div>
                                            <div class="col-sm-4">
                                                <label>Denda Keterlambatan</label>
                                                <input type="number" name="denda" class="form-control" value="{{$data->denda_terlambat}}" required>
                                            </div>
                                        </div>
                                        <div class="form-group" style="margin-top:1rem;">
                                            <label for="exampleFormControlTextarea1">Syarat Tambahan Yang Disetujui Bersama</label>
                                            <textarea class="form-control" name="syarat" id="exampleFormControlTextarea1" rows="3" required>{{$data->syarat_tambahan}}</textarea>
                                        </div>
                                        <div class="form-group" style="margin-top:1rem;">
                                            <label for="exampleFormControlTextarea1">Perselihan</label>
                                            <textarea class="form-control" name="selisih" id="exampleFormControlTextarea1" rows="3" required>{{$data->perselisihan}}</textarea>
                                        </div>
                                        <div class="form-group" style="margin-top:1rem;">
                                            <label for="exampleFormControlTextarea1">Catatan</label>
                                            <textarea class="form-control" name="catatan" id="exampleFormControlTextarea1" rows="3" required>{{$data->catatan}}</textarea>
                                        </div>

                                    </div>
                                </div>
                                {{--@endforeach--}}
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="row">

                        <div class="col-sm-2">
                            <button type="reset" class="btn btn-outline-secondary">Clear all data</button>
                        </div>

                        <div class="col-sm-2">
                            {{--<button type="submit" formaction="{{url('simpanspaldraft')}}" class="btn btn-link">Simpan Draft</button>--}}
                        </div>
                        <div class="col-sm-2">
                            <button type="submit" formaction="{{url('simpanspal')}}" class="btn btn-primary">Proses</button>
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
<script src="{{url('assets/libs/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{url('assets/libs/popper.js/dist/umd/popper.min.js')}}"></script>
<script src="{{url('assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="jquery-1.12.3.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{url('assets/extra-libs/sparkline/sparkline.js')}}"></script>
<!--Wave Effects -->
<script src="{{url('dist/js/waves.js')}}"></script>
<!--Menu sidebar -->
<script src="{{url('dist/js/sidebarmenu.js')}}"></script>
<!--Custom JavaScript -->
<script src="{{url('dist/js/custom.min.js')}}"></script>
</body>
<script>
    function simpan() {
        $.ajax({
            url: "../../../controller/prosesinvoice.php?aksi=detil2",
            type: "POST",
            data: $('#form').serialize(),
            dataType: "TEXT",
            success: function (data) {
                alert (data);
            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert("Error json " + errorThrown);
            }
        });
    }
</script>
</html>
