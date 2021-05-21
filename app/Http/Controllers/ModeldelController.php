<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\modeldel;

class ModeldelController extends Controller
{
    public function index(){
        return modeldel::all();
    }

    public function create(request $request){
        $user = $request->user();
        if($user->tokenCan('auth:edit')){
            $modeldel = new modeldel;
            $modeldel->nama = $request->nama;
            $modeldel->bupatiwalkot = $request->bupatiwalkot;
            $modeldel->luas = $request->luas;
            $modeldel->penduduk = $request->penduduk;
            $modeldel->kepadatan = $request->kepadatan;
            $modeldel->kecamatan = $request->kecamatan;
            $modeldel->kelurahan = $request->kelurahan;
            $modeldel->desa = $request->desa;
            $modeldel->lambang = $request->lambang;
            $modeldel->petalokasi = $request->petalokasi;
            $modeldel->save();

            return response()->json([
                'message' => "Data Berhasil Masuk",
            ]);
        }
        else{
            return response()->json([
                'message' => "Anda Tidak Berhak",
            ]);
        }
    }

    public function update(request $request, $id){
        $user = $request->user();
        if($user->tokenCan('auth:edit')){
            $nama = $request->nama;
            $bupatiwalkot = $request->bupatiwalkot;
            $luas = $request->luas;
            $penduduk = $request->penduduk;
            $kepadatan = $request->kepadatan;
            $kecamatan = $request->kecamatan;
            $kelurahan = $request->kelurahan;
            $desa = $request->desa;
            $lambang = $request->lambang;
            $petalokasi = $request->petalokasi;

            $modeldel = modeldel::find($id);
            $modeldel->nama = $nama;
            $modeldel->bupatiwalkot = $bupatiwalkot;
            $modeldel->luas = $luas;
            $modeldel->penduduk = $penduduk;
            $modeldel->kepadatan = $kepadatan;
            $modeldel->kecamatan = $kecamatan;
            $modeldel->kelurahan = $kelurahan;
            $modeldel->desa = $desa;
            $modeldel->lambang = $lambang;
            $modeldel->petalokasi = $petalokasi;
            $modeldel->save();

            return response()->json([
                'message' => "Data Berhasil Diperbarui",
            ]);
        }
        else{
            return response()->json([
                'message' => "Anda Tidak Berhak",
            ]);
        }
    }

    public function delete(request $request, $id){
        $user = $request->user();
        if($user->tokenCan('auth:edit')){
            $modeldel = modeldel::find($id);
            $modeldel->delete();

            return response()->json([
                'message' => "Data Berhasil Dihapus",
            ]);
        }
        else{
            return response()->json([
                'message' => "Anda Tidak Berhak",
            ]);
        }
    }
}
