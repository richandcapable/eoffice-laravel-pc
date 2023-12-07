<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\IndikatorSasaran;
use Illuminate\Http\Request;

class IndikatorSasaranController extends Controller
{
    public function store(Request $request, $id){
        // validate form
        // $this->validate($request, [
        //     'indikator'         => 
        //     'satuan_pengukuran' => 'required|min:1',
        //     'target_kondisi_awal' => 'required|min:1',
        //     'target_tahun_2021' => 'required|min:1',
        //     'target_tahun_2022' => 'required|min:1',D
        //     'target_tahun_2023' => 'required|min:1',
        //     'target_tahun_2024' => 'required|min:1',
        //     'target_tahun_2025' => 'required|min:1',
        //     'target_kondisi_akhir' => 'required|min:1'
        // ]);

        //create indikator

        IndikatorSasaran::create([
            'sasaran_id'           => $id,
            'indikator'            => $request->indikator,
            'satuan_pengukuran'    => $request->satuan_pengukuran,
            'target_kondisi_awal'  => $request->target_kondisi_awal,
            'target_tahun_2021'    => $request->target_tahun_2021,
            'target_tahun_2022'    => $request->target_tahun_2022,
            'target_tahun_2023'    => $request->target_tahun_2023,
            'target_tahun_2024'    => $request->target_tahun_2024,
            'target_tahun_2025'    => $request->target_tahun_2025,
            'target_kondisi_akhir' => $request->target_kondisi_akhir,
            
        ]);

        //redirect to index
        return redirect('detailsasaran/1')->with(['success' => 'Indikator Berhasil Disimpan!']);
    }

    public function update(Request $request,$id){
        $i = IndikatorSasaran::findorfail($id);

        $i->update($request->all());
        return redirect('detailsasaran/1')->with(['success' => 'Indikator Berhasil Diubah!']);
    }

    public function destroy($id){
        $indikator = IndikatorSasaran::findorfail($id);
        $indikator->delete();
        return redirect('detailsasaran/1')->with(['info' => 'Indikator Berhasil Dihapus!']);
    }
}
