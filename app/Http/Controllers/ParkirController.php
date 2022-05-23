<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Parkir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ParkirController extends Controller
{
    public function index()
    {
        // $data_parkir = Parkir::all();
        $data_parkir = DB::table('parkirs')
            ->join('tipe_kendaraan', 'tipe_kendaraan.id', '=', 'parkirs.id_tipe_kendaraan')
            ->join('tarif', 'tarif.id_tipe_kendaraan', '=', 'tipe_kendaraan.id')
            ->select('parkirs.*', 'tipe_kendaraan.tipe_kendaraan', 'tarif.tarif')
            ->where('status', "=", 0)
            ->get();
        // dd($data_parkir);
        return view('Parkirs.index', compact('data_parkir'));
    }

    public function laporan()
    {
        // $data_parkir = Parkir::all();
        $data_parkir = DB::table('parkirs')
            ->join('tipe_kendaraan', 'tipe_kendaraan.id', '=', 'parkirs.id_tipe_kendaraan')
            ->join('tarif', 'tarif.id_tipe_kendaraan', '=', 'tipe_kendaraan.id')
            ->select('parkirs.*', 'tipe_kendaraan.tipe_kendaraan', 'tarif.tarif')
            ->where('status', "=", 1)
            ->get();

        $data_parkir = [];
        // dd($data_parkir);
        return view('Parkirs.Laporan.index', compact('data_parkir'));
    }

    public function laporan_cari(Request $req)
    {
        $data_parkir = DB::table('parkirs')
            ->join('tipe_kendaraan', 'tipe_kendaraan.id', '=', 'parkirs.id_tipe_kendaraan')
            ->join('tarif', 'tarif.id_tipe_kendaraan', '=', 'tipe_kendaraan.id')
            ->select('parkirs.*', 'tipe_kendaraan.tipe_kendaraan', 'tarif.tarif')
            ->where('status', "=", 1)
            ->where('jam_masuk', ">=", $req->tgl_awal)
            ->where('jam_masuk', "<=", $req->tgl_akhir)
            ->get();
        return view('Parkirs.Laporan.index', compact('data_parkir'));
    }

    public function masuk()
    {
        return view('Parkirs.Create.index');
    }

    public function post_masuk(Request $req)
    {
        DB::beginTransaction();
        try {
            $save = Parkir::create($req->all());
            DB::commit();
            $status = true;
        } catch (Exception $error) {
            DB::rollback();
            $status = false;
        }

        return response()->json($status);
    }

    public function keluar()
    {
        return view('Parkirs.Edit.index');
    }

    public function post_keluar(Request $req)
    {
        // $data = Parkir::where('kode_unik', $req->kode_unik)->where('status', 0)->first();
        $data_parkir = DB::table('parkirs')
            ->join('tipe_kendaraan', 'tipe_kendaraan.id', '=', 'parkirs.id_tipe_kendaraan')
            ->join('tarif', 'tarif.id_tipe_kendaraan', '=', 'tipe_kendaraan.id')
            ->select('parkirs.*', 'tipe_kendaraan.tipe_kendaraan', 'tarif.tarif')
            ->where('kode_unik', $req->kode_unik)
            ->where('status', 0)
            ->first();

        return response()->json([
            'status' => !empty($data_parkir) ? true : false,
            'data' => $data_parkir
        ]);
    }

    public function post_keluar2(Request $req, $id)
    {
        DB::beginTransaction();
        try {
            $save = Parkir::find($id);
            $save->update($req->all());
            DB::commit();
            $status = true;
        } catch (Exception $error) {
            DB::rollback();
            $status = false;
        }

        return response()->json($status);
    }
}
