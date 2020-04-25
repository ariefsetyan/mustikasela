<?php

namespace App\Http\Controllers;

use App\AddCost;
use App\Agent1;
use App\Agent2;
use App\Barang;
use App\Bunker;
use App\BunkerW;
use App\Ceaning;
use App\Detil;
use App\Expenses;
use App\Financial;
use App\KasKapal;
use App\MediatorFee;
use App\Navigation;
use App\PortCaptainFee;
use App\Profit;
use App\Rate;
use App\RcInvoice;
use App\RcTimeCharter;
use App\Realcost;
use App\Refund;
use App\Revenue;
use App\Spal;
use App\Total;
use App\TugAssist;
use App\Volume;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ControllerMustika extends Controller
{
    public function index(){
        return view('content.financial.dashboard');
    }
    //financial
    public function cretefinancial(){
//        id financian
        $kode = DB::table('financials')->max('id_financial');
        $kdf = substr($kode,2,5);
        $tambah =$kdf+1;
        if($tambah<10){
            $id="JF00".$tambah;
        }else{
            $id="JF00".$tambah;
        }
//        id barang
        $kodeb = DB::table('barangs')->max('id');
        $kdb =substr($kodeb,2,4);
        $tambah =$kdb+1;
        if($tambah<10){
            $idbr="BR00".$tambah;
        }else{
            $idbr="BR00".$tambah;
        }
        return view('content.financial.create.createfinancial',compact('id','idbr'));
    }
    //save finansial
    public function SaveFinancial(Request $request){
//        save financial
        $datasf =new Financial();
        $datasf->id_financial = $request->job_financial;
        $datasf->project = $request->project_kapal;
        $datasf->customer_name = $request->costumer_name;
        $datasf->date = $request->date;
        $datasf->id_kondisi = 1;
//        dd($datasf);
        $datasf->save();
        $datasb = new Barang();
        $datasb->id = $request->id_barang;
        $datasb->nama_barang = $request->nama_barang;
        $datasb->jumlah_muatan = $request->jumlah_muatan;
        $datasb->id_financial = $request->job_financial;
        $datasb->save();
        //volume
        $datasv = new Volume();
        $datasv->invoice = $request->invoice;
        $datasv->banker = $request->banker_volume;
        $datasv->agent = $request->agent_volume;
        $datasv->fresh_water_volume = $request->fresh_volume;
        $datasv->premi_crew = $request->premi_crew;
        $datasv->time_charter = $request->time_charter;
        $datasv->reserved = $request->reserved;
        $datasv->cleaning = $request->cleaning_volume;
        $datasv->fee_marketing = $request->fee_volume;
        $datasv->port_caption = $request->port_captain;
        $datasv->kas_kapal = $request->kas_kapal;
        $datasv->insentive = $request->insentive;
        $datasv->id_barang = $request->id_barang;
        $datasv->save();
//        rate
        $datasr = new Rate();
        $datasr->invoice = $request->invoice_rate;
        $datasr->banker= $request->banker_rate;
        $datasr->agent = $request->agent_rate;
        $datasr->fresh_water_volume = $request->frest_rate;
        $datasr->premi_crew = $request->premi_rate;
        $datasr->time_charter = $request->time_rate;
        $datasr->Reserved = $request->Reserved_rate;
        $datasr->cleaning = $request->cleaning_rate;
        $datasr->fee_marketing = $request->fee_rate;
        $datasr->port_caption = $request->port_rate;
        $datasr->kas_kapal = $request->kas_rate;
        $datasr->insentive = $request->insentive_rate;
        $datasr->id_barang = $request->id_barang;
//        $datasr->save();
//        revenue
        $datasre = new Revenue();
        $datasre->invoice = $request->invoice_revenue;
        $datasre->banker = $request->banker_revenue;
        $datasre->agent = $request->agen_revenue;
        $datasre->fresh_water_volume = $request->fresh_revenue;
        $datasre->premi_crew = $request->premi_revenue;
        $datasre->time_charter = $request->time_revenue;
        $datasre->reserved = $request->res_revenue;
        $datasre->cleaning = $request->cleaning_revenue;
        $datasre->fee_marketing = $request->fee_revenue;
        $datasre->port_caption = $request->port_revenue;
        $datasre->kas_kapal = $request->kas_revenue;
        $datasre->insentive = $request->insen_revenue;
        $datasre->id_barang = $request->id_barang;
        $datasre->save();
//        expenses
        $datase = new Expenses();
        $datase->invoice = $request->invoice_exp;
        $datase->banker = $request->banker_exp;
        $datase->agent = $request->agen_exp;
        $datase->fresh_water_volume = $request->fresh_exp;
        $datase->premi_crew = $request->premi_exp;
        $datase->time_charter = $request->time_exp;
        $datase->Reserved = $request->res_exp;
        $datase->cleaning = $request->cleaning_exp;
        $datase->fee_marketing = $request->fee_exp;
        $datase->port_caption = $request->port_exp;
        $datase->kas_kapal = $request->kas_exp;
        $datase->insentive = $request->insen_exp;
        $datase->id_barang = $request->id_barang;
        $datase->save();
        $datasd = new Detil();
        $datasd->loading_time = $request->loading_time;
        $datasd->discharging = $request->dischargin_time;
        $datasd->port_of_loading = $request->portload;
        $datasd->port_of_descharging = $request->portdischarge;
        $datasd->sailing_time = $request->sailtime;
        $datasd->assist = $request->assist;
        $datasd->add_cost = $request->addcost;
        $datasd->id_barang = $request->id_barang;
        $datasd->save();
//        dd($datasf,$datasb,$datasv,$datasr,$datasre,$datase,$datasd);
        return view('content.financial.progres.inprogres');

    }
    //simpan draft
    public function simpandrarf(Request $request){
        $datasf =new Financial();
        $datasf->id_financial = $request->job_financial;
        $datasf->project = $request->project_kapal;
        $datasf->customer_name = $request->costumer_name;
        $datasf->date = $request->date;
        $datasf->id_kondisi = 2;
//        dd($datasf);
        $datasf->save();
        $datasb = new Barang();
        $datasb->id = $request->id_barang;
        $datasb->nama_barang = $request->nama_barang;
        $datasb->jumlah_muatan = $request->jumlah_muatan;
        $datasb->id_financial = $request->job_financial;
        $datasb->save();
        //volume
        $datasv = new Volume();
        $datasv->invoice = $request->invoice;
        $datasv->banker = $request->banker_volume;
        $datasv->agent = $request->agent_volume;
        $datasv->fresh_water_volume = $request->fresh_volume;
        $datasv->premi_crew = $request->premi_crew;
        $datasv->time_charter = $request->time_charter;
        $datasv->reserved = $request->reserved;
        $datasv->cleaning = $request->cleaning_volume;
        $datasv->fee_marketing = $request->fee_volume;
        $datasv->port_caption = $request->port_captain;
        $datasv->kas_kapal = $request->kas_kapal;
        $datasv->insentive = $request->insentive;
        $datasv->id_barang = $request->id_barang;
        $datasv->save();
//        rate
        $datasr = new Rate();
        $datasr->invoice = $request->invoice_rate;
        $datasr->banker= $request->banker_rate;
        $datasr->agent = $request->agent_rate;
        $datasr->fresh_water_volume = $request->frest_rate;
        $datasr->premi_crew = $request->premi_rate;
        $datasr->time_charter = $request->time_rate;
        $datasr->Reserved = $request->Reserved_rate;
        $datasr->cleaning = $request->cleaning_rate;
        $datasr->fee_marketing = $request->fee_rate;
        $datasr->port_caption = $request->port_rate;
        $datasr->kas_kapal = $request->kas_rate;
        $datasr->insentive = $request->insentive_rate;
        $datasr->id_barang = $request->id_barang;
        $datasr->save();
//        revenue
        $datasre = new Revenue();
        $datasre->invoice = $request->invoice_revenue;
        $datasre->banker = $request->banker_revenue;
        $datasre->agent = $request->agen_revenue;
        $datasre->fresh_water_volume = $request->fresh_revenue;
        $datasre->premi_crew = $request->premi_revenue;
        $datasre->time_charter = $request->time_revenue;
        $datasre->reserved = $request->res_revenue;
        $datasre->cleaning = $request->cleaning_revenue;
        $datasre->fee_marketing = $request->fee_revenue;
        $datasre->port_caption = $request->port_revenue;
        $datasre->kas_kapal = $request->kas_revenue;
        $datasre->insentive = $request->insen_revenue;
        $datasre->id_barang = $request->id_barang;
        $datasre->save();
//        expenses
        $datase = new Expenses();
        $datase->invoice = $request->invoice_exp;
        $datase->banker = $request->banker_exp;
        $datase->agent = $request->agen_exp;
        $datase->fresh_water_volume = $request->fresh_exp;
        $datase->premi_crew = $request->premi_exp;
        $datase->time_charter = $request->time_exp;
        $datase->Reserved = $request->res_exp;
        $datase->cleaning = $request->cleaning_exp;
        $datase->fee_marketing = $request->fee_exp;
        $datase->port_caption = $request->port_exp;
        $datase->kas_kapal = $request->kas_exp;
        $datase->insentive = $request->insen_exp;
        $datase->id_barang = $request->id_barang;
        $datase->save();
        $datasd = new Detil();
        $datasd->loading_time = $request->loading_time;
        $datasd->discharging = $request->dischargin_time;
        $datasd->port_of_loading = $request->portload;
        $datasd->port_of_descharging = $request->portdischarge;
        $datasd->sailing_time = $request->sailtime;
        $datasd->assist = $request->assist;
        $datasd->add_cost = $request->addcost;
        $datasd->id_barang = $request->id_barang;
        $datasd->save();
//        dd($datasf,$datasb,$datasv,$datasr,$datasre,$datase,$datasd);
        return redirect('draft');
    }
    //view draft
    public function draftfinancial(){
        $datas = DB::table('financials')->where('id_kondisi','=','2')->get();
        return view ('content.financial.draft.draft',compact('datas'));
    }
    //view detil draft
    public function viewdraft($id_financial){
        //view financial
        $datas = DB::table('barangs')
            ->join('financials','barangs.id_financial','=','financials.id_financial')
            ->join('volumes','barangs.id','=','volumes.id_barang')
            ->where('financials.id_financial','=',$id_financial)
            ->get();
//dd($datas);
        //ambil id barang
        $idbarang = DB::table('barangs')
            ->select('id_barang')
            ->join('financials','barangs.id_financial','=','financials.id_financial')
            ->join('volumes','barangs.id','=','volumes.id_barang')
            ->where('financials.id_financial','=',$id_financial)
            ->get();
        $decode = json_decode($idbarang,true);
//        dd($decode);

        $datasvume = DB::table('barangs')
            ->join('volumes','barangs.id','=','volumes.id_barang')
            ->where('id_barang','=',$decode)
            ->get();

        $datasrate = DB::table('barangs')
        ->join('rates','barangs.id','=','rates.id_barang')
        ->where('id_barang','=',$decode)
        ->get();

        $datasrevenues = DB::table('barangs')
            ->join('revenues','barangs.id','=','revenues.id_barang')
            ->where('id_barang','=',$decode)
            ->get();

        $datasexpenses = DB::table('barangs')
            ->join('expenses','barangs.id','=','expenses.id_barang')
            ->where('id_barang','=',$decode)
            ->get();
        $datasdetil = DB::table('barangs')
            ->join('detils','barangs.id','=','detils.id_barang')
            ->where('id_barang','=',$decode)
            ->get();

//        dd($datasvume,$datasrate,$datasvume,$datasexpenses,$datasdetil);
        return view('content.financial.draft.draftfinancial',compact('datas','datasvume','datasrate','datasrevenues','datasexpenses','datasdetil'));

    }

    public function updatedraft($id_financialss, Request $request){
        //ambil id barang
        $id_financial = $request->job_financial;
        $idbarang = DB::table('barangs')
            ->select('id')
            ->join('financials','barangs.id_financial','=','financials.id_financial')
            ->where('financials.id_financial','=',$id_financial)
            ->get();
        $decode = json_decode($idbarang,true);
//        dd($decode);
        //update barang
        $datasbarang = DB::table('barangs')
            ->where('id','=',$decode)
            ->update([
                'nama_barang' => $request->nama_barang,
                'jumlah_muatan' => $request->jumlah_muatan,
            ]);

        //ambil id volume
        $idvolume = DB::table('volumes')
            ->select('volumes.id')
            ->join('barangs','volumes.id_barang','=','barangs.id')
            ->where('id_barang','=',$decode)->get();
        $decodevolume = json_decode($idvolume,true);
//        dd($idvolume);

        $datasvoulme = DB::table('volumes')
            ->where('id','=',$decodevolume)
            ->update([
               'invoice' => $request->invoice,
               'banker' => $request->banker_volume,
               'agent' => $request->agent_volume,
               'fresh_water_volume' => $request->fresh_volume,
               'premi_crew' => $request->premi_crew,
               'time_charter' => $request->time_charter,
               'reserved' => $request->reserved,
               'cleaning' => $request->cleaning_volume,
               'cleaning' => $request->cleaning_volume,
               'fee_marketing' => $request->fee_volume,
               'port_caption' => $request->port_captain,
               'kas_kapal' => $request->kas_kapal,
               'insentive' => $request->insentive
            ]);

        $datasrate = DB::table('rates')
            ->where('id','=',$decodevolume)
            ->update([
                'invoice' => $request->invoice_rate,
                'banker' => $request->banker_rate,
                'agent' => $request->agent_rate,
                'fresh_water_volume' => $request->frest_rate,
                'premi_crew' => $request->premi_rate,
                'time_charter' => $request->time_rate,
                'reserved' => $request->Reserved_rate,
                'cleaning' => $request->cleaning_rate,
                'fee_marketing' => $request->fee_rate,
                'port_caption' => $request->port_rate,
                'kas_kapal' => $request->kas_rate,
                'insentive' => $request->insentive_rate
            ]);
        $datasrevenue = DB::table('revenues')
            ->where('id','=',$decodevolume)
            ->update([
                'invoice' => $request->invoice_revenue,
                'banker' => $request->banker_revenue,
                'agent' => $request->agen_revenue,
                'fresh_water_volume' => $request->fresh_revenue,
                'premi_crew' => $request->premi_revenue,
                'time_charter' => $request->time_revenue,
                'reserved' => $request->res_revenue,
                'cleaning' => $request->cleaning_revenue,
                'fee_marketing' => $request->fee_revenue,
                'port_caption' => $request->port_revenue,
                'kas_kapal' => $request->kas_revenue,
                'insentive' => $request->insen_revenue
            ]);
        $datasexpenses = DB::table('expenses')
            ->where('id','=',$decodevolume)
            ->update([
                'invoice' => $request->invoice_exp,
                'banker' => $request->banker_exp,
                'agent' => $request->agen_exp,
                'fresh_water_volume' => $request->fresh_exp,
                'premi_crew' => $request->premi_exp,
                'time_charter' => $request->time_exp,
                'reserved' => $request->res_exp,
                'cleaning' => $request->cleaning_exp,
                'fee_marketing' => $request->fee_exp,
                'port_caption' => $request->port_exp,
                'kas_kapal' => $request->kas_exp,
                'insentive' => $request->insen_exp
            ]);
        $datasdetil = DB::table('detils')
            ->where('id','=',$decodevolume)
            ->update([
                'loading_time' => $request->loading_time,
                'discharging' => $request->dischargin_time,
                'port_of_loading' => $request->portload,
                'port_of_descharging' => $request->portdischarge,
                'sailing_time' => $request->sailtime,
                'assist' => $request->assist,
                'add_cost' => $request->addcost
            ]);
//        $idrate = DB::table('rates')
//            ->select('rates.id')
//            ->join('barangs','rates.id_barang','=','barangs.id')
//            ->where('id_barang','=',$decode)->get();
//        $decoderate = json_decode($idvolume,true);
//        dd($decoderate);
        return redirect('draft');
    }

    public function simpanDrafprogres($id_financialss, Request $request){
        $id_financial = $request->job_financial;
        $progr = DB::table('financials')
            ->where('id_financial','=',$id_financial)
            ->update([
                'id_kondisi' => 1
            ]);

        //ambil id barang
        $idbarang = DB::table('barangs')
            ->select('id')
            ->join('financials','barangs.id_financial','=','financials.id_financial')
            ->where('financials.id_financial','=',$id_financial)
            ->get();
        $decode = json_decode($idbarang,true);
//        dd($decode);
        //update barang
        $datasbarang = DB::table('barangs')
            ->where('id','=',$decode)
            ->update([
                'nama_barang' => $request->nama_barang,
                'jumlah_muatan' => $request->jumlah_muatan,
            ]);

        //ambil id volume
        $idvolume = DB::table('volumes')
            ->select('volumes.id')
            ->join('barangs','volumes.id_barang','=','barangs.id')
            ->where('id_barang','=',$decode)->get();
        $decodevolume = json_decode($idvolume,true);
//        dd($idvolume);

        $datasvoulme = DB::table('volumes')
            ->where('id','=',$decodevolume)
            ->update([
                'invoice' => $request->invoice,
                'banker' => $request->banker_volume,
                'agent' => $request->agent_volume,
                'fresh_water_volume' => $request->fresh_volume,
                'premi_crew' => $request->premi_crew,
                'time_charter' => $request->time_charter,
                'reserved' => $request->reserved,
                'cleaning' => $request->cleaning_volume,
                'cleaning' => $request->cleaning_volume,
                'fee_marketing' => $request->fee_volume,
                'port_caption' => $request->port_captain,
                'kas_kapal' => $request->kas_kapal,
                'insentive' => $request->insentive
            ]);

        $datasrate = DB::table('rates')
            ->where('id','=',$decodevolume)
            ->update([
                'invoice' => $request->invoice_rate,
                'banker' => $request->banker_rate,
                'agent' => $request->agent_rate,
                'fresh_water_volume' => $request->frest_rate,
                'premi_crew' => $request->premi_rate,
                'time_charter' => $request->time_rate,
                'reserved' => $request->Reserved_rate,
                'cleaning' => $request->cleaning_rate,
                'fee_marketing' => $request->fee_rate,
                'port_caption' => $request->port_rate,
                'kas_kapal' => $request->kas_rate,
                'insentive' => $request->insentive_rate
            ]);
        $datasrevenue = DB::table('revenues')
            ->where('id','=',$decodevolume)
            ->update([
                'invoice' => $request->invoice_revenue,
                'banker' => $request->banker_revenue,
                'agent' => $request->agen_revenue,
                'fresh_water_volume' => $request->fresh_revenue,
                'premi_crew' => $request->premi_revenue,
                'time_charter' => $request->time_revenue,
                'reserved' => $request->res_revenue,
                'cleaning' => $request->cleaning_revenue,
                'fee_marketing' => $request->fee_revenue,
                'port_caption' => $request->port_revenue,
                'kas_kapal' => $request->kas_revenue,
                'insentive' => $request->insen_revenue
            ]);
        $datasexpenses = DB::table('expenses')
            ->where('id','=',$decodevolume)
            ->update([
                'invoice' => $request->invoice_exp,
                'banker' => $request->banker_exp,
                'agent' => $request->agen_exp,
                'fresh_water_volume' => $request->fresh_exp,
                'premi_crew' => $request->premi_exp,
                'time_charter' => $request->time_exp,
                'reserved' => $request->res_exp,
                'cleaning' => $request->cleaning_exp,
                'fee_marketing' => $request->fee_exp,
                'port_caption' => $request->port_exp,
                'kas_kapal' => $request->kas_exp,
                'insentive' => $request->insen_exp
            ]);
        $datasdetil = DB::table('detils')
            ->where('id','=',$decodevolume)
            ->update([
                'loading_time' => $request->loading_time,
                'discharging' => $request->dischargin_time,
                'port_of_loading' => $request->portload,
                'port_of_descharging' => $request->portdischarge,
                'sailing_time' => $request->sailtime,
                'assist' => $request->assist,
                'add_cost' => $request->addcost
            ]);
//        $idrate = DB::table('rates')
//            ->select('rates.id')
//            ->join('barangs','rates.id_barang','=','barangs.id')
//            ->where('id_barang','=',$decode)->get();
//        $decoderate = json_decode($idvolume,true);
//        dd($decoderate);
        return redirect('inprogres');
    }

    public function hapusDraft($id_financial){
        DB::table('financial')
            ->where('id_financial', '=', $id_financial)
            ->delete();
        return redirect('draft');
    }
    public function inprogres(){
        $datas = DB::table('financials')->where('id_kondisi','=','1')->get();
//        dd($proses);
        return view ('content.financial.progres.inprogres',compact('datas'));
    }
    public function spal($id_financial){
        $datas = DB::table('financials')
            ->where('id_financial','=',$id_financial)
            ->get();
//        $datasspals = Spal::all();
        return view('content.financial.spal.spal',compact('datas'));
    }
    public function simpanspal(Request $request){
        $datasspal = new Spal();
        $datasspal->id_financial = $request->job_number;
        $datasspal->pemilik_kapal = $request->pemilik;
        $datasspal->keagenan_kapal = $request->agent;
        $datasspal->bendera_kapal = $request->flag;
        $datasspal->posisi_kapal = $request->posisi;
        $datasspal->kodisi_muatan = $request->kondisi;
        $datasspal->uang_sewa = $request->uang;
        $datasspal->kesediaan_kapal = $request->kesediaan;
        $datasspal->pembayaran = $request->cara_bayar;
        $datasspal->tujuan_transfer = $request->tujuan;
        $datasspal->pengiriman_barang = $request->kirim;
        $datasspal->penerima_barang = $request->terima;
        $datasspal->asuransi = $request->asuransi;
        $datasspal->asuransi_barang = $request->asuransi_barang;
        $datasspal->denda_terlambat = $request->denda;
        $datasspal->syarat_tambahan = $request->syarat;
        $datasspal->perselisihan = $request->selisih;
        $datasspal->catatan = $request->catatan;
//        dd($datasspal);
        $datasspal->save();
        return redirect('inprogres');
    }
    public function viewSpal($id_financial){
        $datasfinancial = DB::table('financials')
            ->join('spals','financials.id_financial','=','spals.id_financial')
            ->where('financials.id_financial', '=', $id_financial)
            ->get();
//        $dataspals = DB::table('spals')->where('id_financial','=',$id_financial)->get();
//        dd($datasfinancial);
        return view('content.financial.spal.viewspal', compact('datasfinancial'));
    }
    public function hapusspal($id_financial){
        $spal = DB::table('spals')
            ->where('id_financial','=','id_financial')
            ->delete();
        return redirect('inprogres');
    }
    public function invoice($id_financial){
        $datas = DB::table('financials')
            ->where('id_financial','=',$id_financial)
            ->get();
        return view('content.financial.invoice.invoice');
    }

    public function craterealcost(){
        $kode = DB::table('realcosts')->max('id_realcost');
        $kdf = substr($kode,2,5);
        $tambah =$kdf+1;
        if($tambah<10){
            $id="JR00".$tambah;
        }else{
            $id="JR00".$tambah;
        }
        return view('content.realcost.create.create',compact('id'));
    }
    public function simpanrealcost(Request $request){
        $datas = new Realcost();
        $datas->id_realcost = $request->job_number;
        $datas->nama_kapal = $request->nama_kapal;
        $datas->nama_costomer = $request->customer;
        $datas->date = $request->bday;
        $datas->pelabuhan_asal = $request->portload;
        $datas->pelabuhan_tujuan = $request->portdis;
        $datas->estimasi = $request->time;
        $datas->pemilik = $request->shipper;
        $datas->id_kondisi = 3;
        $datas->save();

        $datasRcIn = new RcInvoice();
        $datasRcIn->i_principal = $request->principali;
        $datasRcIn->i_rate = $request->ratei;
        $datasRcIn->i_volume = $request->volumei;
        $datasRcIn->i_revenue = $request->revenuei;
        $datasRcIn->i_expenses = $request->expensivei;
        $datasRcIn->id_realcost = $request->job_number;
        $datasRcIn->save();

        $datasTC = new RcTimeCharter();
        $datasTC->tc_principal = $request->principaltc;
        $datasTC->tc_rate = $request->ratetc;
        $datasTC->tc_volume = $request->volumetc;
        $datasTC->tc_revenue = $request->revenuetc;
        $datasTC->tc_expenses = $request->expensivetc;
        $datasTC->id_realcost = $request->job_number;
        $datasTC->save();

        $datasagen = new Agent1();
        $datasagen->A1_principal = $request->principalA1;
        $datasagen->A1_rate = $request->rateA1;
        $datasagen->A1_volume = $request->volumeA1;
        $datasagen->A1_revenue = $request->revenueA1;
        $datasagen->A1_expenses = $request->revenueA1;
        $datasagen->id_realcost = $request->job_number;
        $datasagen->save();

        $datasagen2 = new Agent2();
        $datasagen2->A2_principal = $request->principalA2;
        $datasagen2->A2_rate = $request->rateA2;
        $datasagen2->A2_volume = $request->volumeA2;
        $datasagen2->A2_revenue = $request->revenueA2;
        $datasagen2->A2_expenses = $request->revenueA2;
        $datasagen2->id_realcost = $request->job_number;
        $datasagen2->save();

        $datasbunker = new Bunker();
        $datasbunker->b_principal = $request->principald;
        $datasbunker->b_rate = $request->rated;
        $datasbunker->b_volume = $request->volumed;
        $datasbunker->b_revenue = $request->revenued;
        $datasbunker->b_expenses = $request->expensived;
        $datasbunker->id_realcost = $request->job_number;
        $datasbunker->save();

        $datasta = new TugAssist();
        $datasta->ta_principal = $request->principalta;
        $datasta->ta_rate = $request->rateta;
        $datasta->ta_volume = $request->volumeta;
        $datasta->ta_revenue = $request->revenueta;
        $datasta->ta_expenses = $request->expensiveta;
        $datasta->id_realcost = $request->job_number;
        $datasta->save();

        $datasbw = new BunkerW();
        $datasbw->bw_principal = $request->principalbw;
        $datasbw->bw_rate = $request->ratebw;
        $datasbw->bw_volume = $request->volumebw;
        $datasbw->bw_revenue = $request->revenuebw;
        $datasbw->bw_expenses = $request->expensivebw;
        $datasbw->id_realcost = $request->job_number;
        $datasbw->save();

        $datasceaning = new Ceaning();
        $datasceaning->c_principal = $request->principalc;
        $datasceaning->c_rate = $request->ratec;
        $datasceaning->c_volume = $request->volumec;
        $datasceaning->c_revenue = $request->revenuec;
        $datasceaning->c_expenses = $request->expensivec;
        $datasceaning->id_realcost = $request->job_number;
        $datasceaning->save();

        $datasnavigation = new Navigation();
        $datasnavigation->n_principal = $request->principaln;
        $datasnavigation->n_rate = $request->raten;
        $datasnavigation->n_volume = $request->volumen;
        $datasnavigation->n_revenue = $request->revenuen;
        $datasnavigation->n_expenses = $request->expensiven;
        $datasnavigation->id_realcost = $request->job_number;
        $datasnavigation->save();

        $datasrefund = new Refund();
        $datasrefund->r_principal = $request->principalr;
        $datasrefund->r_rate = $request->rater;
        $datasrefund->r_volume = $request->volumer;
        $datasrefund->r_revenue = $request->revenuer;
        $datasrefund->r_expenses = $request->expensiver;
        $datasrefund->id_realcost = $request->job_number;
        $datasrefund->save();

        $datasaddcost = new AddCost();
        $datasaddcost->ac_principal = $request->principalac;
        $datasaddcost->ac_rate = $request->rateac;
        $datasaddcost->ac_volume = $request->volumeac;
        $datasaddcost->ac_revenue = $request->revenueac;
        $datasaddcost->ac_expenses = $request->expensiveac;
        $datasaddcost->id_realcost = $request->job_number;
        $datasaddcost->save();

        $dataskaskapal = new KasKapal();
        $dataskaskapal->kk_principal = $request->principalkk;
        $dataskaskapal->kk_rate = $request->ratekk;
        $dataskaskapal->kk_volume = $request->volumekk;
        $dataskaskapal->kk_revenue = $request->revenuekk;
        $dataskaskapal->kk_expenses = $request->expensivekk;
        $dataskaskapal->id_realcost = $request->job_number;
        $dataskaskapal->save();

        $datasmediatorfee = new MediatorFee();
        $datasmediatorfee->m_principal = $request->principalmf;
        $datasmediatorfee->m_rate = $request->ratemf;
        $datasmediatorfee->m_volume = $request->volumemf;
        $datasmediatorfee->m_revenue = $request->revenuemf;
        $datasmediatorfee->m_expenses = $request->expensivemf;
        $datasmediatorfee->id_realcost = $request->job_number;
        $datasmediatorfee->save();

        $datasPCF = new PortCaptainFee();
        $datasPCF->pc_principal = $request->principalpcf;
        $datasPCF->pc_rate = $request->ratepcf;
        $datasPCF->pc_volume = $request->volumepcf;
        $datasPCF->pc_revenue = $request->revenuepcf;
        $datasPCF->pc_expenses = $request->expensivepcf;
        $datasPCF->id_realcost = $request->job_number;
        $datasPCF->save();

        $datastotal = new Total();
//        $datastotal->total_principal = $request->principaltotal;
//        $datastotal->total_rate = $request->ratetotal;
//        $datastotal->total_volume = $request->volumetotal;
        $datastotal->tot_revenue = $request->revenuetotal;
        $datastotal->tot_expenses = $request->expensivetotal;
        $datastotal->id_realcost = $request->job_number;
        $datastotal->save();

        $dataspro = new Profit();
        $dataspro->pro_expenses = $request->expensiveprovit;
        $dataspro->id_realcost = $request->job_number;
        $dataspro->save();

        dd($datas,$datasRcIn,$datasTC,$datasagen,$datasagen2,$datasbunker,$datasta,$datasbw,$datasceaning,$datasnavigation,
            $datasrefund,$datasaddcost,$dataskaskapal,$datasmediatorfee,$datasmediatorfee,$datasmediatorfee,$datasPCF,$datastotal,$dataspro);
    }

    public function simpanDraft(Request $request){
        $datas = new Realcost();
        $datas->id_realcost = $request->job_number;
        $datas->nama_kapal = $request->nama_kapal;
        $datas->nama_costomer = $request->customer;
        $datas->date = $request->bday;
        $datas->pelabuhan_asal = $request->portload;
        $datas->pelabuhan_tujuan = $request->portdis;
        $datas->estimasi = $request->time;
        $datas->pemilik = $request->shipper;
        $datas->id_kondisi = 2;
        $datas->save();

        $datasRcIn = new RcInvoice();
        $datasRcIn->i_principal = $request->principali;
        $datasRcIn->i_rate = $request->ratei;
        $datasRcIn->i_volume = $request->volumei;
        $datasRcIn->i_revenue = $request->revenuei;
        $datasRcIn->i_expenses = $request->expensivei;
        $datasRcIn->id_realcost = $request->job_number;
        $datasRcIn->save();

        $datasTC = new RcTimeCharter();
        $datasTC->tc_principal = $request->principaltc;
        $datasTC->tc_rate = $request->ratetc;
        $datasTC->tc_volume = $request->volumetc;
        $datasTC->tc_revenue = $request->revenuetc;
        $datasTC->tc_expenses = $request->expensivetc;
        $datasTC->id_realcost = $request->job_number;
        $datasTC->save();

        $datasagen = new Agent1();
        $datasagen->A1_principal = $request->principalA1;
        $datasagen->A1_rate = $request->rateA1;
        $datasagen->A1_volume = $request->volumeA1;
        $datasagen->A1_revenue = $request->revenueA1;
        $datasagen->A1_expenses = $request->revenueA1;
        $datasagen->id_realcost = $request->job_number;
        $datasagen->save();

        $datasagen2 = new Agent2();
        $datasagen2->A2_principal = $request->principalA2;
        $datasagen2->A2_rate = $request->rateA2;
        $datasagen2->A2_volume = $request->volumeA2;
        $datasagen2->A2_revenue = $request->revenueA2;
        $datasagen2->A2_expenses = $request->revenueA2;
        $datasagen2->id_realcost = $request->job_number;
        $datasagen2->save();

        $datasbunker = new Bunker();
        $datasbunker->b_principal = $request->principald;
        $datasbunker->b_rate = $request->rated;
        $datasbunker->b_volume = $request->volumed;
        $datasbunker->b_revenue = $request->revenued;
        $datasbunker->b_expenses = $request->expensived;
        $datasbunker->id_realcost = $request->job_number;
        $datasbunker->save();

        $datasta = new TugAssist();
        $datasta->ta_principal = $request->principalta;
        $datasta->ta_rate = $request->rateta;
        $datasta->ta_volume = $request->volumeta;
        $datasta->ta_revenue = $request->revenueta;
        $datasta->ta_expenses = $request->expensiveta;
        $datasta->id_realcost = $request->job_number;
        $datasta->save();

        $datasbw = new BunkerW();
        $datasbw->bw_principal = $request->principalbw;
        $datasbw->bw_rate = $request->ratebw;
        $datasbw->bw_volume = $request->volumebw;
        $datasbw->bw_revenue = $request->revenuebw;
        $datasbw->bw_expenses = $request->expensivebw;
        $datasbw->id_realcost = $request->job_number;
        $datasbw->save();

        $datasceaning = new Ceaning();
        $datasceaning->c_principal = $request->principalc;
        $datasceaning->c_rate = $request->ratec;
        $datasceaning->c_volume = $request->volumec;
        $datasceaning->c_revenue = $request->revenuec;
        $datasceaning->c_expenses = $request->expensivec;
        $datasceaning->id_realcost = $request->job_number;
        $datasceaning->save();

        $datasnavigation = new Navigation();
        $datasnavigation->n_principal = $request->principaln;
        $datasnavigation->n_rate = $request->raten;
        $datasnavigation->n_volume = $request->volumen;
        $datasnavigation->n_revenue = $request->revenuen;
        $datasnavigation->n_expenses = $request->expensiven;
        $datasnavigation->id_realcost = $request->job_number;
        $datasnavigation->save();

        $datasrefund = new Refund();
        $datasrefund->r_principal = $request->principalr;
        $datasrefund->r_rate = $request->rater;
        $datasrefund->r_volume = $request->volumer;
        $datasrefund->r_revenue = $request->revenuer;
        $datasrefund->r_expenses = $request->expensiver;
        $datasrefund->id_realcost = $request->job_number;
        $datasrefund->save();

        $datasaddcost = new AddCost();
        $datasaddcost->ac_principal = $request->principalac;
        $datasaddcost->ac_rate = $request->rateac;
        $datasaddcost->ac_volume = $request->volumeac;
        $datasaddcost->ac_revenue = $request->revenueac;
        $datasaddcost->ac_expenses = $request->expensiveac;
        $datasaddcost->id_realcost = $request->job_number;
        $datasaddcost->save();

        $dataskaskapal = new KasKapal();
        $dataskaskapal->kk_principal = $request->principalkk;
        $dataskaskapal->kk_rate = $request->ratekk;
        $dataskaskapal->kk_volume = $request->volumekk;
        $dataskaskapal->kk_revenue = $request->revenuekk;
        $dataskaskapal->kk_expenses = $request->expensivekk;
        $dataskaskapal->id_realcost = $request->job_number;
        $dataskaskapal->save();

        $datasmediatorfee = new MediatorFee();
        $datasmediatorfee->m_principal = $request->principalmf;
        $datasmediatorfee->m_rate = $request->ratemf;
        $datasmediatorfee->m_volume = $request->volumemf;
        $datasmediatorfee->m_revenue = $request->revenuemf;
        $datasmediatorfee->m_expenses = $request->expensivemf;
        $datasmediatorfee->id_realcost = $request->job_number;
        $datasmediatorfee->save();

        $datasPCF = new PortCaptainFee();
        $datasPCF->pc_principal = $request->principalpcf;
        $datasPCF->pc_rate = $request->ratepcf;
        $datasPCF->pc_volume = $request->volumepcf;
        $datasPCF->pc_revenue = $request->revenuepcf;
        $datasPCF->pc_expenses = $request->expensivepcf;
        $datasPCF->id_realcost = $request->job_number;
        $datasPCF->save();

        $datastotal = new Total();
        $datastotal->tot_revenue = $request->revenuetotal;
        $datastotal->tot_expenses = $request->expensivetotal;
        $datastotal->id_realcost = $request->job_number;
        $datastotal->save();

        $dataspro = new Profit();
        $dataspro->pro_expenses = $request->expensiveprovit;
        $dataspro->id_realcost = $request->job_number;
        $dataspro->save();
    }
    public function draftrealcost(){
        $datas = DB::table('realcosts')->where('id_kondisi','=','2')->get();
//        dd($datas);
        return view('content.realcost.draft.draft', compact('datas'));
    }
    public function viewRealCost($id_realcost){
        $datas = DB::table('realcosts')->where('id_realcost','=',$id_realcost)->get();
        $datasinvoice = DB::table('rc_invoices')->where('id_realcost','=',$id_realcost)->get();
        $datastc = DB::table('rc_time_charters')->where('id_realcost','=',$id_realcost)->get();
        $datasagent1 = DB::table('agent1s')->where('id_realcost','=',$id_realcost)->get();
        $datasagent2 = DB::table('agent2s')->where('id_realcost','=',$id_realcost)->get();
        $datasbunkers = DB::table('bunkers')->where('id_realcost','=',$id_realcost)->get();
        $datasta = DB::table('tug_assists')->where('id_realcost','=',$id_realcost)->get();
        $datasbunkersw = DB::table('bunker_ws')->where('id_realcost','=',$id_realcost)->get();
        $datasceaning = DB::table('ceanings')->where('id_realcost','=',$id_realcost)->get();
        $datasnavigation = DB::table('navigations')->where('id_realcost','=',$id_realcost)->get();
        $datasrefund = DB::table('refunds')->where('id_realcost','=',$id_realcost)->get();
        $datasac = DB::table('add_costs')->where('id_realcost','=',$id_realcost)->get();
        $dataskk = DB::table('kas_kapals')->where('id_realcost','=',$id_realcost)->get();
        $datasmf = DB::table('mediator_fees')->where('id_realcost','=',$id_realcost)->get();
        $dataspcf = DB::table('port_captain_fees')->where('id_realcost','=',$id_realcost)->get();
        $datastotal = DB::table('totals')->where('id_realcost','=',$id_realcost)->get();
        $datasprofit = DB::table('profits')->where('id_realcost','=',$id_realcost)->get();
//        dd($datas);
        return view('content.realcost.draft.edit',compact('datas','datasinvoice','datastc','datasagent1','datasagent2',
            'datasbunkers','datasta','datasbunkersw','datasceaning','datasnavigation','datasrefund','datasac','dataskk','datasmf',
            'dataspcf','datastotal','datasprofit'));
    }
    public function simpandraftRealcost(Request $request){
        $id = $request->job_number;

        $datasrealcost = DB::table('realcosts')
            ->where('id_realcost','=',$id)
            ->update([
                'nama_kapal' => $request->nama_kapal,
                'nama_costomer' => $request->customer,
                'date' => $request->bday,
                'pelabuhan_asal' => $request->portload,
                'pelabuhan_tujuan' => $request->portdis,
                'estimasi' => $request->time,
                'pemilik' => $request->shipper,
                'id_kondisi' => 3
            ]);
        $idinvo=DB::table('rc_invoices')
            ->select('id')
            ->where('id_realcost','=',$id)
            ->get();
        $decodeinvo = json_decode($idinvo,true);
//        dd($decode);
        $datasRcIn = DB::table('rc_invoices')
            ->where('id','=',$decodeinvo)
            ->update([
                'i_principal' => $request->principali,
                'i_rate' => $request->ratei,
                'i_volume' => $request->volumei,
                'i_revenue' => $request->revenuei,
                'i_expenses' => $request->expensivei
            ]);
        $idtc = DB::table('rc_time_charters')
            ->select('id')
            ->where('id_realcost','=',$id)
            ->get();
        $decodtc = json_decode($idtc,true);
        $datastc = DB::table('rc_time_charters')
            ->where('id','=',$decodtc)
            ->update([
                'tc_principal' =>  $request->principaltc,
                'tc_rate' => $request->ratetc,
                'tc_volume' => $request->volumetc,
                'tc_revenue' => $request->revenuetc,
                'tc_expenses' => $request->expensivetc
            ]);
        $idagen1 = DB::table('agent1s')
            ->select('id')
            ->where('id_realcost','=',$id)
            ->get();
        $decoda1 = json_decode($idagen1,true);
        $datasa1 = DB::table('agent1s')
            ->where('id','=',$decoda1)
            ->update([
                'A1_principal' =>  $request->principalA1,
                'A1_rate' => $request->rateA1,
                'A1_volume' => $request->volumeA1,
                'A1_revenue' => $request->revenueA1,
                'A1_expenses' => $request->revenueA1
            ]);
        $idagen2 = DB::table('agent2s')
            ->select('id')
            ->where('id_realcost','=',$id)
            ->get();
        $decoda2 = json_decode($idagen2,true);
        $datasa2 = DB::table('agent2s')
            ->where('id','=',$decoda2)
            ->update([
                'a2_principal' =>  $request->principalA2,
                'a2_rate' => $request->rateA2,
                'a2_volume' => $request->volumeA2,
                'a2_revenue' => $request->revenueA2,
                'a2_expenses' => $request->revenueA2
            ]);
        $idbunker = DB::table('bunkers')
            ->select('id')
            ->where('id_realcost','=',$id)
            ->get();
        $decodbunker = json_decode($idbunker,true);
        $datasbunker = DB::table('bunkers')
            ->where('id','=',$decodbunker)
            ->update([
                'b_principal' => $request->principald,
                'b_rate' => $request->rated,
                'b_volume' => $request->volumed,
                'b_revenue' => $request->revenued,
                'b_expenses' => $request->expensived
            ]);
        $idta = DB::table('tug_assists')
            ->select('id')
            ->where('id_realcost','=',$id)
            ->get();
        $decodta = json_decode($idta,true);
        $datasta = DB::table('tug_assists')
            ->where('id','=',$decodta)
            ->update([
                'ta_principal' => $request->principalta,
                'ta_rate' => $request->rateta,
                'ta_volume' => $request->volumeta,
                'ta_revenue' => $request->revenueta,
                'ta_expenses' => $request->expensiveta
            ]);
        $idbunker2 = DB::table('bunker_ws')
            ->select('id')
            ->where('id_realcost','=',$id)
            ->get();
        $decodbunker2 = json_decode($idbunker2,true);
        $datasbunker2 = DB::table('bunker_ws')
            ->where('id','=',$decodbunker2)
            ->update([
                'bw_principal' => $request->principalbw,
                'bw_rate' => $request->ratebw,
                'bw_volume' => $request->volumebw,
                'bw_revenue' => $request->revenuebw,
                'bw_expenses' => $request->expensivebw
            ]);
        $idcleaning = DB::table('ceanings')
            ->select('id')
            ->where('id_realcost','=',$id)
            ->get();
        $decodcleaning = json_decode($idcleaning,true);
        $datascleaning = DB::table('ceanings')
            ->where('id','=',$decodcleaning)
            ->update([
                'c_principal' => $request->principalc,
                'c_rate' => $request->ratec,
                'c_volume' => $request->volumec,
                'c_revenue' => $request->revenuec,
                'c_expenses' => $request->expensivec
            ]);
        $idnav = DB::table('navigations')
            ->select('id')
            ->where('id_realcost','=',$id)
            ->get();
        $decodnav = json_decode($idnav,true);
        $datasnav = DB::table('navigations')
            ->where('id','=',$decodnav)
            ->update([
                'n_principal' => $request->principaln,
                'n_rate' => $request->raten,
                'n_volume' => $request->volumen,
                'n_revenue' => $request->revenuen,
                'n_expenses' => $request->expensiven
            ]);
        $idrefund = DB::table('refunds')
            ->select('id')
            ->where('id_realcost','=',$id)
            ->get();
        $decodrevund = json_decode($idrefund,true);
        $datasrevund = DB::table('refunds')
            ->where('id','=',$decodrevund)
            ->update([
                'r_principal' => $request->principalr,
                'r_rate' => $request->rater,
                'r_volume' => $request->volumer,
                'r_revenue' => $request->revenuer,
                'r_expenses' => $request->expensiver
            ]);

        $idac = DB::table('add_costs')
            ->select('id')
            ->where('id_realcost','=',$id)
            ->get();
        $decodac = json_decode($idac,true);
        $datasac = DB::table('add_costs')
            ->where('id','=',$decodac)
            ->update([
                'ac_principal' => $request->principalac,
                'ac_rate' => $request->rateac,
                'ac_volume' => $request->volumeac,
                'ac_revenue' => $request->revenueac,
                'ac_expenses' => $request->expensiveac
            ]);
        $idkk = DB::table('kas_kapals')
            ->select('id')
            ->where('id_realcost','=',$id)
            ->get();
        $decodkk = json_decode($idkk,true);
        $dataskk = DB::table('kas_kapals')
            ->where('id','=',$decodkk)
            ->update([
                'kk_principal' => $request->principalkk,
                'kk_rate' => $request->ratkkr,
                'kk_volume' => $request->volumekk,
                'kk_revenue' => $request->revenuekk,
                'kk_expenses' => $request->expensivekk
            ]);
        $idmf = DB::table('mediator_fees')
            ->select('id')
            ->where('id_realcost','=',$id)
            ->get();
        $decodmf = json_decode($idmf,true);
        $datasmf = DB::table('mediator_fees')
            ->where('id','=',$decodmf)
            ->update([
                'm_principal' => $request->principalmf,
                'm_rate' => $request->ratemf,
                'm_volume' => $request->volumemf,
                'm_revenue' => $request->revenuemf,
                'm_expenses' => $request->expensivemf
            ]);
        $idpcf = DB::table('port_captain_fees')
            ->select('id')
            ->where('id_realcost','=',$id)
            ->get();
        $decodpcf = json_decode($idpcf,true);
        $dataspcf = DB::table('port_captain_fees')
            ->where('id','=',$decodpcf)
            ->update([
                'pc_principal' => $request->principalpcf,
                'pc_rate' => $request->ratepcf,
                'pc_volume' => $request->volumepcf,
                'pc_revenue' => $request->revenuepcf,
                'pc_expenses' => $request->expensivepcf
            ]);
        $idtotal = DB::table('totals')
            ->select('id')
            ->where('id_realcost','=',$id)
            ->get();
        $decodtotal = json_decode($idtotal,true);
        $datastotal = DB::table('totals')
            ->where('id','=',$decodtotal)
            ->update([
                'tot_revenue' => $request->revenuetotal,
                'tot_expenses' => $request->expensivetotal
            ]);

        $idprofit = DB::table('profits')
            ->select('id')
            ->where('id_realcost','=',$id)
            ->get();
        $decodprofit = json_decode($idprofit,true);
        $datasprofit = DB::table('profits')
            ->where('id','=',$decodprofit)
            ->update([
                'pro_expenses' => $request->expensiveprovit
            ]);
    }
    public function updaterealcostdraft(Request $request){
        $id = $request->job_number;

        $datasrealcost = DB::table('realcosts')
            ->where('id_realcost','=',$id)
            ->update([
                'nama_kapal' => $request->nama_kapal,
                'nama_costomer' => $request->customer,
                'date' => $request->bday,
                'pelabuhan_asal' => $request->portload,
                'pelabuhan_tujuan' => $request->portdis,
                'estimasi' => $request->time,
                'pemilik' => $request->shipper,
                'id_kondisi' => 2
            ]);
        $idinvo=DB::table('rc_invoices')
            ->select('id')
            ->where('id_realcost','=',$id)
            ->get();
        $decodeinvo = json_decode($idinvo,true);
//        dd($decode);
        $datasRcIn = DB::table('rc_invoices')
            ->where('id','=',$decodeinvo)
            ->update([
                'i_principal' => $request->principali,
                'i_rate' => $request->ratei,
                'i_volume' => $request->volumei,
                'i_revenue' => $request->revenuei,
                'i_expenses' => $request->expensivei
            ]);
        $idtc = DB::table('rc_time_charters')
            ->select('id')
            ->where('id_realcost','=',$id)
            ->get();
        $decodtc = json_decode($idtc,true);
        $datastc = DB::table('rc_time_charters')
            ->where('id','=',$decodtc)
            ->update([
                'tc_principal' =>  $request->principaltc,
                'tc_rate' => $request->ratetc,
                'tc_volume' => $request->volumetc,
                'tc_revenue' => $request->revenuetc,
                'tc_expenses' => $request->expensivetc
            ]);
        $idagen1 = DB::table('agent1s')
            ->select('id')
            ->where('id_realcost','=',$id)
            ->get();
        $decoda1 = json_decode($idagen1,true);
        $datasa1 = DB::table('agent1s')
            ->where('id','=',$decoda1)
            ->update([
                'A1_principal' =>  $request->principalA1,
                'A1_rate' => $request->rateA1,
                'A1_volume' => $request->volumeA1,
                'A1_revenue' => $request->revenueA1,
                'A1_expenses' => $request->revenueA1
            ]);
        $idagen2 = DB::table('agent2s')
            ->select('id')
            ->where('id_realcost','=',$id)
            ->get();
        $decoda2 = json_decode($idagen2,true);
        $datasa2 = DB::table('agent2s')
            ->where('id','=',$decoda2)
            ->update([
                'a2_principal' =>  $request->principalA2,
                'a2_rate' => $request->rateA2,
                'a2_volume' => $request->volumeA2,
                'a2_revenue' => $request->revenueA2,
                'a2_expenses' => $request->revenueA2
            ]);
        $idbunker = DB::table('bunkers')
            ->select('id')
            ->where('id_realcost','=',$id)
            ->get();
        $decodbunker = json_decode($idbunker,true);
        $datasbunker = DB::table('bunkers')
            ->where('id','=',$decodbunker)
            ->update([
                'b_principal' => $request->principald,
                'b_rate' => $request->rated,
                'b_volume' => $request->volumed,
                'b_revenue' => $request->revenued,
                'b_expenses' => $request->expensived
            ]);
        $idta = DB::table('tug_assists')
            ->select('id')
            ->where('id_realcost','=',$id)
            ->get();
        $decodta = json_decode($idta,true);
        $datasta = DB::table('tug_assists')
            ->where('id','=',$decodta)
            ->update([
                'ta_principal' => $request->principalta,
                'ta_rate' => $request->rateta,
                'ta_volume' => $request->volumeta,
                'ta_revenue' => $request->revenueta,
                'ta_expenses' => $request->expensiveta
            ]);
        $idbunker2 = DB::table('bunker_ws')
            ->select('id')
            ->where('id_realcost','=',$id)
            ->get();
        $decodbunker2 = json_decode($idbunker2,true);
        $datasbunker2 = DB::table('bunker_ws')
            ->where('id','=',$decodbunker2)
            ->update([
                'bw_principal' => $request->principalbw,
                'bw_rate' => $request->ratebw,
                'bw_volume' => $request->volumebw,
                'bw_revenue' => $request->revenuebw,
                'bw_expenses' => $request->expensivebw
            ]);
        $idcleaning = DB::table('ceanings')
            ->select('id')
            ->where('id_realcost','=',$id)
            ->get();
        $decodcleaning = json_decode($idcleaning,true);
        $datascleaning = DB::table('ceanings')
            ->where('id','=',$decodcleaning)
            ->update([
                'c_principal' => $request->principalc,
                'c_rate' => $request->ratec,
                'c_volume' => $request->volumec,
                'c_revenue' => $request->revenuec,
                'c_expenses' => $request->expensivec
            ]);
        $idnav = DB::table('navigations')
            ->select('id')
            ->where('id_realcost','=',$id)
            ->get();
        $decodnav = json_decode($idnav,true);
        $datasnav = DB::table('navigations')
            ->where('id','=',$decodnav)
            ->update([
                'n_principal' => $request->principaln,
                'n_rate' => $request->raten,
                'n_volume' => $request->volumen,
                'n_revenue' => $request->revenuen,
                'n_expenses' => $request->expensiven
            ]);
        $idrefund = DB::table('refunds')
            ->select('id')
            ->where('id_realcost','=',$id)
            ->get();
        $decodrevund = json_decode($idrefund,true);
        $datasrevund = DB::table('refunds')
            ->where('id','=',$decodrevund)
            ->update([
                'r_principal' => $request->principalr,
                'r_rate' => $request->rater,
                'r_volume' => $request->volumer,
                'r_revenue' => $request->revenuer,
                'r_expenses' => $request->expensiver
            ]);

        $idac = DB::table('add_costs')
            ->select('id')
            ->where('id_realcost','=',$id)
            ->get();
        $decodac = json_decode($idac,true);
        $datasac = DB::table('add_costs')
            ->where('id','=',$decodac)
            ->update([
                'ac_principal' => $request->principalac,
                'ac_rate' => $request->rateac,
                'ac_volume' => $request->volumeac,
                'ac_revenue' => $request->revenueac,
                'ac_expenses' => $request->expensiveac
            ]);
        $idkk = DB::table('kas_kapals')
            ->select('id')
            ->where('id_realcost','=',$id)
            ->get();
        $decodkk = json_decode($idkk,true);
        $dataskk = DB::table('kas_kapals')
            ->where('id','=',$decodkk)
            ->update([
                'kk_principal' => $request->principalkk,
                'kk_rate' => $request->ratkkr,
                'kk_volume' => $request->volumekk,
                'kk_revenue' => $request->revenuekk,
                'kk_expenses' => $request->expensivekk
            ]);
        $idmf = DB::table('mediator_fees')
            ->select('id')
            ->where('id_realcost','=',$id)
            ->get();
        $decodmf = json_decode($idmf,true);
        $datasmf = DB::table('mediator_fees')
            ->where('id','=',$decodmf)
            ->update([
                'm_principal' => $request->principalmf,
                'm_rate' => $request->ratemf,
                'm_volume' => $request->volumemf,
                'm_revenue' => $request->revenuemf,
                'm_expenses' => $request->expensivemf
            ]);
        $idpcf = DB::table('port_captain_fees')
            ->select('id')
            ->where('id_realcost','=',$id)
            ->get();
        $decodpcf = json_decode($idpcf,true);
        $dataspcf = DB::table('port_captain_fees')
            ->where('id','=',$decodpcf)
            ->update([
                'pc_principal' => $request->principalpcf,
                'pc_rate' => $request->ratepcf,
                'pc_volume' => $request->volumepcf,
                'pc_revenue' => $request->revenuepcf,
                'pc_expenses' => $request->expensivepcf
            ]);
        $idtotal = DB::table('totals')
            ->select('id')
            ->where('id_realcost','=',$id)
            ->get();
        $decodtotal = json_decode($idtotal,true);
        $datastotal = DB::table('totals')
            ->where('id','=',$decodtotal)
            ->update([
                'tot_revenue' => $request->revenuetotal,
                'tot_expenses' => $request->expensivetotal
            ]);

        $idprofit = DB::table('profits')
            ->select('id')
            ->where('id_realcost','=',$id)
            ->get();
        $decodprofit = json_decode($idprofit,true);
        $datasprofit = DB::table('profits')
            ->where('id','=',$decodprofit)
            ->update([
                'pro_expenses' => $request->expensiveprovit
            ]);
    }
    public function deleterealcost($id_realcost){
        DB::table('profits')->where('id_realcost','=',$id_realcost)->delete();
        DB::table('totals')->where('id_realcost','=',$id_realcost)->delete();
        DB::table('port_captain_fees')->where('id_realcost','=',$id_realcost)->delete();
        DB::table('mediator_fees')->where('id_realcost','=',$id_realcost)->delete();
        DB::table('kas_kapals')->where('id_realcost','=',$id_realcost)->delete();
        DB::table('add_costs')->where('id_realcost','=',$id_realcost)->delete();
        DB::table('refunds')->where('id_realcost','=',$id_realcost)->delete();
        DB::table('navigations')->where('id_realcost','=',$id_realcost)->delete();
        DB::table('ceanings')->where('id_realcost','=',$id_realcost)->delete();
        DB::table('bunker_ws')->where('id_realcost','=',$id_realcost)->delete();
        DB::table('tug_assists')->where('id_realcost','=',$id_realcost)->delete();
        DB::table('agent1s')->where('id_realcost','=',$id_realcost)->delete();
        DB::table('agent2s')->where('id_realcost','=',$id_realcost)->delete();
        DB::table('rc_time_charters')->where('id_realcost','=',$id_realcost)->delete();
        DB::table('bunkers')->where('id_realcost','=',$id_realcost)->delete();
        DB::table('rc_invoices')->where('id_realcost','=',$id_realcost)->delete();
        DB::table('realcosts')->where('id_realcost','=',$id_realcost)->delete();
        return redirect('dtartrealcost');
    }
    public function histori(){
        return view('content.realcost.histori.histori');
    }
}
