<?php

namespace App\Http\Controllers;

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
        // dd($request->all());
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

        // dd($validate);
        // dd($validate['no_hp']);

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
