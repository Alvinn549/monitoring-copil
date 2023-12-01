<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;

use App\Models\KartuMonitoring;
use Illuminate\Http\Request;

class KartuMonitoringController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kartuMonitorings = KartuMonitoring::all();

        return view('dashboard.kartu-monitoring.index', compact('kartuMonitorings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.kartu-monitoring.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->catatan_penting);
        if (
            collect($request->input('petugas_pelayanan'))
                ->filter()
                ->isNotEmpty()
        ) {
            return 'ada petugas_pelayanan';
        } elseif (
            collect($request->input('opk_ktp'))
                ->filter()
                ->isNotEmpty()
        ) {
            return 'ada opk_ktp';
        } elseif (
            collect($request->input('opk_akta'))
                ->filter()
                ->isNotEmpty()
        ) {
            return 'ada opk_akta';
        } elseif (
            collect($request->input('kasir'))
                ->filter()
                ->isNotEmpty()
        ) {
            return 'ada kasir';
        } elseif (
            collect($request->input('opk_skp_skpd'))
                ->filter()
                ->isNotEmpty()
        ) {
            return 'ada opk_skp_skpd';
        } elseif (
            collect($request->input('pencatat_buku_regester'))
                ->filter()
                ->isNotEmpty()
        ) {
            return 'ada pencatat_buku_regester';
        } elseif (
            collect($request->input('spv_dokumen_kasi'))
                ->filter()
                ->isNotEmpty()
        ) {
            return 'ada spv_dokumen_kasi';
        } elseif (
            collect($request->input('spv_berkas_kasi'))
                ->filter()
                ->isNotEmpty()
        ) {
            return 'ada spv_berkas_kasi';
        } elseif (
            collect($request->input('petugas_distribusi'))
                ->filter()
                ->isNotEmpty()
        ) {
            return 'ada petugas_distribusi';
        } elseif (
            collect($request->input('opk_kk'))
                ->filter()
                ->isNotEmpty()
        ) {
            return 'ada opk_kk';
        } elseif (
            collect($request->input('pemohon'))
                ->filter()
                ->isNotEmpty()
        ) {
            return 'ada pemohon';
        } elseif (
            collect($request->input('catatan_penting'))
                ->filter()
                ->isNotEmpty()
        ) {
            return 'ada catatan_penting';
        } elseif (
            collect($request->input('petugas_arsip'))
                ->filter()
                ->isNotEmpty()
        ) {
            return 'ada petugas_arsip';
        } else {
            return 'kosong';
        }

        $validate = $request->validate([
            'nama_lengkap' => 'required',
            'no_hp' => 'required',
            'nik_pemohon' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'tanggal' => 'required',
            'no_antrian' => 'required',
            'jadi_tanggal' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'desa' => 'required',
            'kecamatan' => 'required',
            'kk' => 'required',
            'ktp' => 'required',
            'akta' => 'required',
            'skp_skpd' => 'required',
        ]);

        $alamat = [
            'rt' => $validate['rt'],
            'rw' => $validate['rw'],
            'desa' => $validate['desa'],
            'kecamatan' => $validate['kecamatan'],
        ];

        $tempatTanggalLahir = [
            'tempat_lahir' => $validate['tempat_lahir'],
            'tanggal_lahir' => $validate['tanggal_lahir'],
        ];

        $alamatString = implode(', ', $alamat);
        $tempatTanggalLahirString = implode(', ', $tempatTanggalLahir);

        KartuMonitoring::create([
            'nama_lengkap' => $validate['nama_lengkap'],
            'no_hp' => $validate['no_hp'],
            'nik_pemohon' => $validate['nik_pemohon'],
            'ttl' => $tempatTanggalLahirString,
            'tanggal' => $validate['tanggal'],
            'no_antrian' => $validate['no_antrian'],
            'jadi_tanggal' => $validate['jadi_tanggal'],
            'alamat' => $alamatString,
            'kecamatan' => $validate['kecamatan'],
            'kk' => $validate['kk'],
            'ktp' => $validate['ktp'],
            'akta' => $validate['akta'],
            'skp_skpd' => $validate['skp_skpd'],
        ]);

        Alert::toast(
            '<p style="color: white; margin-top: 10px;">' . $validate['nama_lengkap'] . ' berhasil disimpan</p>',
            'success'
        )
            ->toHtml()
            ->background('#212529')
            ->position($position = 'bottom-right');

        return redirect()->route('kartu-monitoring.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KartuMonitoring  $kartuMonitoring
     * @return \Illuminate\Http\Response
     */
    public function show(KartuMonitoring $kartuMonitoring)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KartuMonitoring  $kartuMonitoring
     * @return \Illuminate\Http\Response
     */
    public function edit(KartuMonitoring $kartuMonitoring)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KartuMonitoring  $kartuMonitoring
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KartuMonitoring $kartuMonitoring)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KartuMonitoring  $kartuMonitoring
     * @return \Illuminate\Http\Response
     */
    public function destroy(KartuMonitoring $kartuMonitoring)
    {
        //
    }
}
