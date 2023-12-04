<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Visi;
use App\Models\Misi;
use App\Models\Sasaran;
use App\Models\Indikator;
use App\Models\IndikatorSasaran;
use App\Models\Tujuan;
use Illuminate\Http\Request;

class DetailSasaranController extends Controller
{
    public function detail($id){
        //get visis
        $sasaran = Sasaran::find($id);
        $misi = Misi::where('sasaran_id', $id)->get();
        $visi = Visi::where('sasaran_id', $id)->get();
        $indikator = Indikator::where('sasaran_id', $id)->get(); 
        $indikator_sasaran = IndikatorSasaran::where('sasaran_id', $id)->get(); 
        $tujuan = Tujuan::where('sasaran_id', $id)->get();
        return view('halaman/sasaran', compact('sasaran', 'visi', 'misi', 'indikator', 'indikator_sasaran','tujuan'));
    }
}

    

