@extends('dashboard.layouts.main')

@section('css')
    <style>
        @media print {
            body {
                width: 210mm;
                height: 297mm;
                margin: 0;
            }
        }

        table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            border: 1px solid black;
        }

        table,
        th,
        td {
            border: 1px solid black;
            vertical-align: top;
        }

        .custom-border {
            border: 2px solid black;
            padding: 15px;
            border-radius: 8px;
        }
    </style>
@endsection

@section('content')
    <h1 class="mt-4">Kartu Monitorinng</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('kartu-monitoring.index') }}">Kartu Monitoring<Main></Main></a></li>
        <li class="breadcrumb-item active">Tambah</li>
    </ol>

    <form id="kartuMonitoringForm" action="{{ route('kartu-monitoring.store') }}" method="post" class="custom-border mb-4"
        onsubmit="return confirmSubmission()">
        @csrf
        <div class="position-relative">
            <div class="position-absolute top-0 start-0">
                <button class="btn btn-danger" type="reset" onclick="confirmReset()">Reset Form</button>
            </div>
            <div class="position-absolute top-0 end-0">
                <button class="btn btn-success ms-auto" type="submit">Simpan</button>
            </div>

        </div>

        <!-- Kop -->
        <div class="row mt-3">
            <div class="col">
                <h3 class="text-center">KARTU MONITORING</h3>
                <h3 class="text-center">
                    PELAYANAN PENERBITAN DOKUMEN KEPENDUDUKAN
                </h3>
            </div>
        </div>
        <!-- End Kop -->

        <!-- Biodata Pemohon -->
        <div class="row mt-5">
            <div class="col-lg-8">
                <div class="row">
                    <p>
                        Bidodata pemohon
                        <strong>(diisi oleh petugas pelayanan)</strong>
                    </p>
                    <div class="col-sm-8">
                        <div class="row">
                            <div class="col-sm-4">
                                <label for="nama_lengkap" class="col-form-label">NAMA LENGKAP</label>
                            </div>
                            <div class="col-sm">
                                <div class="row">
                                    <div class="col-sm-1 col-form-label">
                                        <p>:</p>
                                    </div>
                                    <div class="col">
                                        <input type="text" id="nama_lengkap" name="nama_lengkap"
                                            class="form-control @error('nama_lengkap') is-invalid @enderror" value="{{ old('nama_lengkap') }}"/>
                                        @error('no_hp')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="row">
                            <div class="col-sm-2">
                                <label for="no_hp" class="col-form-label">HP</label>
                            </div>
                            <div class="col-sm">
                                <div class="row">
                                    <div class="col-sm-1 col-form-label">
                                        <p>:</p>
                                    </div>
                                    <div class="col">
                                        <input type="number" name="no_hp"
                                            class="form-control @error('no_hp') is-invalid @enderror" id="no_hp" value="{{ old('no_hp') }}"/>
                                        @error('no_hp')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-8">
                        <div class="row">
                            <div class="col-sm-4">
                                <label for="nik_pemohon" class="col-form-label">NIK PEMOHON</label>
                            </div>
                            <div class="col-sm">
                                <div class="row">
                                    <div class="col-sm-1 col-form-label">
                                        <p>:</p>
                                    </div>
                                    <div class="col">
                                        <input type="number" name="nik_pemohon"
                                            class="form-control @error('nik_pemohon') is-invalid @enderror"
                                            id="nik_pemohon" value="{{ old('nik_pemohon') }}"/>
                                        @error('nik_pemohon')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-8">
                        <div class="row">
                            <div class="col-sm-4">
                                <label for="tanggal_lahir" class="col-form-label">TEMPAT / TGL. LAHIR
                                </label>
                            </div>
                            <div class="col-sm">
                                <div class="row">
                                    <div class="col-sm-1 col-form-label">
                                        <p>:</p>
                                    </div>
                                    <div class="col">
                                        <input type="text" name="tempat_lahir" class="form-control @error('tempat_lahir') is-invalid @enderror"
                                            id="tempat_lahir" value="{{ old('tempat_lahir') }}"/>
                                        @error('tempat_lahir')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="row">
                            <div class="col-sm">
                                <input type="date" name="tanggal_lahir" class="form-control @error('tanggal_lahir') is-invalid @enderror"
                                    id="tanggal_lahir" value="{{ old('tanggal_lahir') }}"/>
                                @error('tanggal_lahir')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg">
                <div class="row mt-4">
                    <div class="col-sm-4">
                        <label for="tanggal" class="col-form-label">Tanggal</label>
                    </div>
                    <div class="col-sm-8">
                        <div class="row">
                            <div class="col-sm-1 col-form-label">
                                <p>:</p>
                            </div>
                            <div class="col">
                                <input type="date" name="tanggal" class="form-control @error('tanggal') is-invalid @enderror"
                                    id="tanggal" value="{{ old('tanggal') }}"/>
                                @error('tanggal')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <label for="no_antrian" class="col-form-label">No Antrian</label>
                    </div>
                    <div class="col-sm-8">
                        <div class="row">
                            <div class="col-sm-1 col-form-label">
                                <p>:</p>
                            </div>
                            <div class="col">
                                <input type="number" name="no_antrian" class="form-control @error('no_antrian') is-invalid @enderror"
                                    id="no_antrian" value="{{ old('no_antrian') }}"/>
                                @error('no_antrian')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <label for="jadi_tanggal" class="col-form-label">Jadi Tanggal</label>
                    </div>
                    <div class="col-sm-8">
                        <div class="row">
                            <div class="col-sm-1 col-form-label">
                                <p>:</p>
                            </div>
                            <div class="col">
                                <input type="date" name="jadi_tanggal" class="form-control @error('jadi_tanggal') is-invalid @enderror"
                                    id="jadi_tanggal" value="{{ old('jadi_tanggal') }}"/>
                                @error('jadi_tanggal')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-2">
                <div class="row">
                    <div class="col">
                        <label for="alamat" class="col-form-label">ALAMAT</label>
                    </div>
                    <div class="col col-form-label">
                        <p class="text-end">:</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="row">
                    <div class="col-sm-2">
                        <label for="rt" class="col-form-label">RT</label>
                    </div>
                    <div class="col-sm">
                        <div class="row">
                            <div class="col-sm-1 col-form-label">
                                <p>:</p>
                            </div>
                            <div class="col">
                                <input type="text" name="rt" class="form-control @error('rt') is-invalid @enderror"
                                    id="rt" value="{{ old('rt') }}"/>
                                @error('rt')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="row">
                    <div class="col-sm-2">
                        <label for="rw" class="col-form-label">RW</label>
                    </div>
                    <div class="col-sm">
                        <div class="row">
                            <div class="col-sm-1 col-form-label">
                                <p>:</p>
                            </div>
                            <div class="col">
                                <input type="text" name="rw" class="form-control @error('rw') is-invalid @enderror"
                                    id="rw" value="{{ old('rw') }}"/>
                                @error('rw')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="row">
                    <div class="col-sm-3">
                        <label for="desa" class="col-form-label">DESA/KELURAHAN</label>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col-sm-1 col-form-label">
                                <p class="text-end">:</p>
                            </div>
                            <div class="col">
                                <input type="text" name="desa" class="form-control @error('desa') is-invalid @enderror"
                                    id="desa" value="{{ old('desa') }}"/>
                                @error('desa')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-4">
                        <!-- <label for="nama-lengkap" class="col-form-label">ALAMAT</label> -->
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col-sm-3">
                                <label for="kecamatan" class="col-form-label">KECAMATAN</label>
                            </div>
                            <div class="col">
                                <div class="row">
                                    <div class="col-sm-1 col-form-label">
                                        <p>:</p>
                                    </div>
                                    <div class="col">
                                        <input type="text" name="kecamatan" class="form-control @error('kecamatan') is-invalid @enderror"
                                            id="kecamatan" value="{{ old('kecamatan') }}"/>
                                        @error('kecamatan')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-3">
                <label for="jumlah_dokumen" class="col-form-label">JUMLAH DOKUMEN YANG DIMINTA
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
            </div>
            <div class="col-sm-2">
                <div class="row">
                    <div class="col-sm-2">
                        <label for="kk" class="col-form-label">KK</label>
                    </div>
                    <div class="col-sm">
                        <div class="row">
                            <div class="col-sm-1 col-form-label">
                                <p>:</p>
                            </div>
                            <div class="col">
                                <input type="number" name="kk" class="form-control @error('kk') is-invalid @enderror"
                                    id="kk" value="{{ old('kk') }}"/>
                                @error('kk')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="row">
                    <div class="col-sm-2">
                        <label for="ktp" class="col-form-label">KTP</label>
                    </div>
                    <div class="col-sm">
                        <div class="row">
                            <div class="col-sm-1 col-form-label">
                                <p>:</p>
                            </div>
                            <div class="col">
                                <input type="number" name="ktp" class="form-control @error('ktp') is-invalid @enderror"
                                    id="ktp" value="{{ old('ktp') }}"/>
                                @error('ktp')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="row">
                    <div class="col-sm-3">
                        <label for="akta" class="col-form-label">AKTA</label>
                    </div>
                    <div class="col-sm">
                        <div class="row">
                            <div class="col-sm-1 col-form-label">
                                <p>:</p>
                            </div>
                            <div class="col">
                                <input type="number" name="akta" class="form-control @error('akta') is-invalid @enderror"
                                    id="akta" value="{{ old('akta') }}"/>
                                @error('akta')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="row">
                    <div class="col-sm-4">
                        <label for="skp_skpd" class="col-form-label">SKP / SKPD</label>
                    </div>
                    <div class="col-sm">
                        <div class="row">
                            <div class="col-sm-1 col-form-label">
                                <p>:</p>
                            </div>
                            <div class="col">
                                <input type="number" name="skp_skpd" class="form-control @error('skp_skpd') is-invalid @enderror"
                                    id="skp_skpd" value="{{ old('skp_skpd') }}"/>
                                @error('skp_skpd')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- <hr style="border: 2px solid black" /> -->

        <table class="table" style="width: 100%" border="1">
            <tbody>
                <tr>
                    <td rowspan="2">
                        <div class="container mt-3">
                            <div class="row">
                                <div class="col">
                                    <strong>1. PETUGAS PELAYANAN</strong>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckDefault" />
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Default checkbox
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckDefault" />
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Default checkbox
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckDefault" />
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Default checkbox
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckDefault" />
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Default checkbox
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckDefault" />
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Default checkbox
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckDefault" />
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Default checkbox
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckChecked" checked />
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Checked checkbox
                                        </label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckDefault" />
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Default checkbox
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckDefault" />
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Default checkbox
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckDefault" />
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Default checkbox
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckDefault" />
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Default checkbox
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckDefault" />
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Default checkbox
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckDefault" />
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Default checkbox
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckChecked" checked />
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Checked checkbox
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <label for="hp" class="col-form-label">
                                                SKP/SKPD</label>
                                        </div>
                                        <div class="col-sm">
                                            <div class="row">
                                                <div class="col-sm-1 col-form-label">
                                                    <p>:</p>
                                                </div>
                                                <div class="col">
                                                    <input type="text"
                                                        class="form-control @error('') is-invalid @enderror"
                                                        id="hp" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <label for="hp" class="col-form-label">
                                                SKP/SKPD</label>
                                        </div>
                                        <div class="col-sm">
                                            <div class="row d-flex">
                                                <div class="col-sm-1 col-form-label">
                                                    <p>:</p>
                                                </div>
                                                <div class="col">
                                                    <input type="text"
                                                        class="form-control @error('') is-invalid @enderror"
                                                        id="hp" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <label for="hp" class="col-form-label">
                                                SKP/SKPD</label>
                                        </div>
                                        <div class="col-sm">
                                            <div class="row">
                                                <div class="col-sm-1 col-form-label">
                                                    <p>:</p>
                                                </div>
                                                <div class="col">
                                                    <input type="text"
                                                        class="form-control @error('') is-invalid @enderror"
                                                        id="hp" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <label for="hp" class="col-form-label">
                                                SKP/SKPD</label>
                                        </div>
                                        <div class="col-sm">
                                            <div class="row">
                                                <div class="col-sm-1 col-form-label">
                                                    <p>:</p>
                                                </div>
                                                <div class="col">
                                                    <input type="text"
                                                        class="form-control @error('') is-invalid @enderror"
                                                        id="hp" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="container mt-3">
                            <div class="row">
                                <div class="col">
                                    <strong>6. OPERATOR KOMPUTER : SKP / SKPD</strong>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <label for="hp" class="col-form-label">
                                                SKP/SKPD</label>
                                        </div>
                                        <div class="col-sm">
                                            <div class="row">
                                                <div class="col-sm-1 col-form-label">
                                                    <p>:</p>
                                                </div>
                                                <div class="col">
                                                    <input type="text"
                                                        class="form-control @error('') is-invalid @enderror"
                                                        id="hp" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <label for="hp" class="col-form-label">
                                                SKP/SKPD</label>
                                        </div>
                                        <div class="col-sm">
                                            <div class="row">
                                                <div class="col-sm-1 col-form-label">
                                                    <p>:</p>
                                                </div>
                                                <div class="col">
                                                    <input type="text"
                                                        class="form-control @error('') is-invalid @enderror"
                                                        id="hp" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <label for="hp" class="col-form-label">
                                                SKP/SKPD</label>
                                        </div>
                                        <div class="col-sm">
                                            <div class="row">
                                                <div class="col-sm-1 col-form-label">
                                                    <p>:</p>
                                                </div>
                                                <div class="col">
                                                    <input type="text"
                                                        class="form-control @error('') is-invalid @enderror"
                                                        id="hp" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <label for="hp" class="col-form-label">
                                                SKP/SKPD</label>
                                        </div>
                                        <div class="col-sm">
                                            <div class="row">
                                                <div class="col-sm-1 col-form-label">
                                                    <p>:</p>
                                                </div>
                                                <div class="col">
                                                    <input type="text"
                                                        class="form-control @error('') is-invalid @enderror"
                                                        id="hp" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="container mt-3">
                            <div class="row">
                                <div class="col">
                                    <strong>6. OPERATOR KOMPUTER : SKP / SKPD</strong>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <label for="hp" class="col-form-label">
                                                SKP/SKPD</label>
                                        </div>
                                        <div class="col-sm">
                                            <div class="row">
                                                <div class="col-sm-1 col-form-label">
                                                    <p>:</p>
                                                </div>
                                                <div class="col">
                                                    <input type="text"
                                                        class="form-control @error('') is-invalid @enderror"
                                                        id="hp" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <label for="hp" class="col-form-label">
                                                SKP/SKPD</label>
                                        </div>
                                        <div class="col-sm">
                                            <div class="row">
                                                <div class="col-sm-1 col-form-label">
                                                    <p>:</p>
                                                </div>
                                                <div class="col">
                                                    <input type="text"
                                                        class="form-control @error('') is-invalid @enderror"
                                                        id="hp" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <label for="hp" class="col-form-label">
                                                SKP/SKPD</label>
                                        </div>
                                        <div class="col-sm">
                                            <div class="row">
                                                <div class="col-sm-1 col-form-label">
                                                    <p>:</p>
                                                </div>
                                                <div class="col">
                                                    <input type="text"
                                                        class="form-control @error('') is-invalid @enderror"
                                                        id="hp" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <label for="hp" class="col-form-label">
                                                SKP/SKPD</label>
                                        </div>
                                        <div class="col-sm">
                                            <div class="row">
                                                <div class="col-sm-1 col-form-label">
                                                    <p>:</p>
                                                </div>
                                                <div class="col">
                                                    <input type="text"
                                                        class="form-control @error('') is-invalid @enderror"
                                                        id="hp" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="container mt-3">
                            <div class="row">
                                <div class="col">
                                    <strong>6. OPERATOR KOMPUTER : SKP / SKPD</strong>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <label for="hp" class="col-form-label">
                                                SKP/SKPD</label>
                                        </div>
                                        <div class="col-sm">
                                            <div class="row">
                                                <div class="col-sm-1 col-form-label">
                                                    <p>:</p>
                                                </div>
                                                <div class="col">
                                                    <input type="text"
                                                        class="form-control @error('') is-invalid @enderror"
                                                        id="hp" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <label for="hp" class="col-form-label">
                                                SKP/SKPD</label>
                                        </div>
                                        <div class="col-sm">
                                            <div class="row">
                                                <div class="col-sm-1 col-form-label">
                                                    <p>:</p>
                                                </div>
                                                <div class="col">
                                                    <input type="text"
                                                        class="form-control @error('') is-invalid @enderror"
                                                        id="hp" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <label for="hp" class="col-form-label">
                                                SKP/SKPD</label>
                                        </div>
                                        <div class="col-sm">
                                            <div class="row">
                                                <div class="col-sm-1 col-form-label">
                                                    <p>:</p>
                                                </div>
                                                <div class="col">
                                                    <input type="text"
                                                        class="form-control @error('') is-invalid @enderror"
                                                        id="hp" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <label for="hp" class="col-form-label">
                                                SKP/SKPD</label>
                                        </div>
                                        <div class="col-sm">
                                            <div class="row">
                                                <div class="col-sm-1 col-form-label">
                                                    <p>:</p>
                                                </div>
                                                <div class="col">
                                                    <input type="text"
                                                        class="form-control @error('') is-invalid @enderror"
                                                        id="hp" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="container mt-3">
                            <div class="row">
                                <div class="col">
                                    <strong>6. OPERATOR KOMPUTER : SKP / SKPD</strong>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <label for="hp" class="col-form-label">
                                                SKP/SKPD</label>
                                        </div>
                                        <div class="col-sm">
                                            <div class="row">
                                                <div class="col-sm-1 col-form-label">
                                                    <p>:</p>
                                                </div>
                                                <div class="col">
                                                    <input type="text"
                                                        class="form-control @error('') is-invalid @enderror"
                                                        id="hp" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <label for="hp" class="col-form-label">
                                                SKP/SKPD</label>
                                        </div>
                                        <div class="col-sm">
                                            <div class="row">
                                                <div class="col-sm-1 col-form-label">
                                                    <p>:</p>
                                                </div>
                                                <div class="col">
                                                    <input type="text"
                                                        class="form-control @error('') is-invalid @enderror"
                                                        id="hp" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <label for="hp" class="col-form-label">
                                                SKP/SKPD</label>
                                        </div>
                                        <div class="col-sm">
                                            <div class="row">
                                                <div class="col-sm-1 col-form-label">
                                                    <p>:</p>
                                                </div>
                                                <div class="col">
                                                    <input type="text"
                                                        class="form-control @error('') is-invalid @enderror"
                                                        id="hp" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <label for="hp" class="col-form-label">
                                                SKP/SKPD</label>
                                        </div>
                                        <div class="col-sm">
                                            <div class="row">
                                                <div class="col-sm-1 col-form-label">
                                                    <p>:</p>
                                                </div>
                                                <div class="col">
                                                    <input type="text"
                                                        class="form-control @error('') is-invalid @enderror"
                                                        id="hp" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="container mt-3">
                            <div class="row">
                                <div class="col">
                                    <strong>6. OPERATOR KOMPUTER : SKP / SKPD</strong>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <label for="hp" class="col-form-label">
                                                SKP/SKPD</label>
                                        </div>
                                        <div class="col-sm">
                                            <div class="row">
                                                <div class="col-sm-1 col-form-label">
                                                    <p>:</p>
                                                </div>
                                                <div class="col">
                                                    <input type="text"
                                                        class="form-control @error('') is-invalid @enderror"
                                                        id="hp" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <label for="hp" class="col-form-label">
                                                SKP/SKPD</label>
                                        </div>
                                        <div class="col-sm">
                                            <div class="row">
                                                <div class="col-sm-1 col-form-label">
                                                    <p>:</p>
                                                </div>
                                                <div class="col">
                                                    <input type="text"
                                                        class="form-control @error('') is-invalid @enderror"
                                                        id="hp" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <label for="hp" class="col-form-label">
                                                SKP/SKPD</label>
                                        </div>
                                        <div class="col-sm">
                                            <div class="row">
                                                <div class="col-sm-1 col-form-label">
                                                    <p>:</p>
                                                </div>
                                                <div class="col">
                                                    <input type="text"
                                                        class="form-control @error('') is-invalid @enderror"
                                                        id="hp" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <label for="hp" class="col-form-label">
                                                SKP/SKPD</label>
                                        </div>
                                        <div class="col-sm">
                                            <div class="row">
                                                <div class="col-sm-1 col-form-label">
                                                    <p>:</p>
                                                </div>
                                                <div class="col">
                                                    <input type="text"
                                                        class="form-control @error('') is-invalid @enderror"
                                                        id="hp" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="container mt-3">
                            <div class="row">
                                <div class="col">
                                    <strong>6. OPERATOR KOMPUTER : SKP / SKPD</strong>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <label for="hp" class="col-form-label">
                                                SKP/SKPD</label>
                                        </div>
                                        <div class="col-sm">
                                            <div class="row">
                                                <div class="col-sm-1 col-form-label">
                                                    <p>:</p>
                                                </div>
                                                <div class="col">
                                                    <input type="text"
                                                        class="form-control @error('') is-invalid @enderror"
                                                        id="hp" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <label for="hp" class="col-form-label">
                                                SKP/SKPD</label>
                                        </div>
                                        <div class="col-sm">
                                            <div class="row">
                                                <div class="col-sm-1 col-form-label">
                                                    <p>:</p>
                                                </div>
                                                <div class="col">
                                                    <input type="text"
                                                        class="form-control @error('') is-invalid @enderror"
                                                        id="hp" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <label for="hp" class="col-form-label">
                                                SKP/SKPD</label>
                                        </div>
                                        <div class="col-sm">
                                            <div class="row">
                                                <div class="col-sm-1 col-form-label">
                                                    <p>:</p>
                                                </div>
                                                <div class="col">
                                                    <input type="text"
                                                        class="form-control @error('') is-invalid @enderror"
                                                        id="hp" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <label for="hp" class="col-form-label">
                                                SKP/SKPD</label>
                                        </div>
                                        <div class="col-sm">
                                            <div class="row">
                                                <div class="col-sm-1 col-form-label">
                                                    <p>:</p>
                                                </div>
                                                <div class="col">
                                                    <input type="text"
                                                        class="form-control @error('') is-invalid @enderror"
                                                        id="hp" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="container mt-3">
                            <div class="row">
                                <div class="col">
                                    <strong>6. OPERATOR KOMPUTER : SKP / SKPD</strong>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <label for="hp" class="col-form-label">
                                                SKP/SKPD</label>
                                        </div>
                                        <div class="col-sm">
                                            <div class="row">
                                                <div class="col-sm-1 col-form-label">
                                                    <p>:</p>
                                                </div>
                                                <div class="col">
                                                    <input type="text"
                                                        class="form-control @error('') is-invalid @enderror"
                                                        id="hp" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <label for="hp" class="col-form-label">
                                                SKP/SKPD</label>
                                        </div>
                                        <div class="col-sm">
                                            <div class="row">
                                                <div class="col-sm-1 col-form-label">
                                                    <p>:</p>
                                                </div>
                                                <div class="col">
                                                    <input type="text"
                                                        class="form-control @error('') is-invalid @enderror"
                                                        id="hp" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <label for="hp" class="col-form-label">
                                                SKP/SKPD</label>
                                        </div>
                                        <div class="col-sm">
                                            <div class="row">
                                                <div class="col-sm-1 col-form-label">
                                                    <p>:</p>
                                                </div>
                                                <div class="col">
                                                    <input type="text"
                                                        class="form-control @error('') is-invalid @enderror"
                                                        id="hp" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <label for="hp" class="col-form-label">
                                                SKP/SKPD</label>
                                        </div>
                                        <div class="col-sm">
                                            <div class="row">
                                                <div class="col-sm-1 col-form-label">
                                                    <p>:</p>
                                                </div>
                                                <div class="col">
                                                    <input type="text"
                                                        class="form-control @error('') is-invalid @enderror"
                                                        id="hp" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="container mt-3">
                            <div class="row">
                                <div class="col">
                                    <strong>6. OPERATOR KOMPUTER : SKP / SKPD</strong>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <label for="hp" class="col-form-label">
                                                SKP/SKPD</label>
                                        </div>
                                        <div class="col-sm">
                                            <div class="row">
                                                <div class="col-sm-1 col-form-label">
                                                    <p>:</p>
                                                </div>
                                                <div class="col">
                                                    <input type="text"
                                                        class="form-control @error('') is-invalid @enderror"
                                                        id="hp" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <label for="hp" class="col-form-label">
                                                SKP/SKPD</label>
                                        </div>
                                        <div class="col-sm">
                                            <div class="row">
                                                <div class="col-sm-1 col-form-label">
                                                    <p>:</p>
                                                </div>
                                                <div class="col">
                                                    <input type="text"
                                                        class="form-control @error('') is-invalid @enderror"
                                                        id="hp" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <label for="hp" class="col-form-label">
                                                SKP/SKPD</label>
                                        </div>
                                        <div class="col-sm">
                                            <div class="row">
                                                <div class="col-sm-1 col-form-label">
                                                    <p>:</p>
                                                </div>
                                                <div class="col">
                                                    <input type="text"
                                                        class="form-control @error('') is-invalid @enderror"
                                                        id="hp" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <label for="hp" class="col-form-label">
                                                SKP/SKPD</label>
                                        </div>
                                        <div class="col-sm">
                                            <div class="row">
                                                <div class="col-sm-1 col-form-label">
                                                    <p>:</p>
                                                </div>
                                                <div class="col">
                                                    <input type="text"
                                                        class="form-control @error('') is-invalid @enderror"
                                                        id="hp" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="container mt-3">
                            <div class="row">
                                <div class="col">
                                    <strong>6. OPERATOR KOMPUTER : SKP / SKPD</strong>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <label for="hp" class="col-form-label">
                                                SKP/SKPD</label>
                                        </div>
                                        <div class="col-sm">
                                            <div class="row">
                                                <div class="col-sm-1 col-form-label">
                                                    <p>:</p>
                                                </div>
                                                <div class="col">
                                                    <input type="text"
                                                        class="form-control @error('') is-invalid @enderror"
                                                        id="hp" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <label for="hp" class="col-form-label">
                                                SKP/SKPD</label>
                                        </div>
                                        <div class="col-sm">
                                            <div class="row">
                                                <div class="col-sm-1 col-form-label">
                                                    <p>:</p>
                                                </div>
                                                <div class="col">
                                                    <input type="text"
                                                        class="form-control @error('') is-invalid @enderror"
                                                        id="hp" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <label for="hp" class="col-form-label">
                                                SKP/SKPD</label>
                                        </div>
                                        <div class="col-sm">
                                            <div class="row">
                                                <div class="col-sm-1 col-form-label">
                                                    <p>:</p>
                                                </div>
                                                <div class="col">
                                                    <input type="text"
                                                        class="form-control @error('') is-invalid @enderror"
                                                        id="hp" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <label for="hp" class="col-form-label">
                                                SKP/SKPD</label>
                                        </div>
                                        <div class="col-sm">
                                            <div class="row">
                                                <div class="col-sm-1 col-form-label">
                                                    <p>:</p>
                                                </div>
                                                <div class="col">
                                                    <input type="text"
                                                        class="form-control @error('') is-invalid @enderror"
                                                        id="hp" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="container mt-3">
                            <div class="row">
                                <div class="col">
                                    <strong>6. OPERATOR KOMPUTER : SKP / SKPD</strong>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <label for="hp" class="col-form-label">
                                                SKP/SKPD</label>
                                        </div>
                                        <div class="col-sm">
                                            <div class="row">
                                                <div class="col-sm-1 col-form-label">
                                                    <p>:</p>
                                                </div>
                                                <div class="col">
                                                    <input type="text"
                                                        class="form-control @error('') is-invalid @enderror"
                                                        id="hp" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <label for="hp" class="col-form-label">
                                                SKP/SKPD</label>
                                        </div>
                                        <div class="col-sm">
                                            <div class="row">
                                                <div class="col-sm-1 col-form-label">
                                                    <p>:</p>
                                                </div>
                                                <div class="col">
                                                    <input type="text"
                                                        class="form-control @error('') is-invalid @enderror"
                                                        id="hp" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <label for="hp" class="col-form-label">
                                                SKP/SKPD</label>
                                        </div>
                                        <div class="col-sm">
                                            <div class="row">
                                                <div class="col-sm-1 col-form-label">
                                                    <p>:</p>
                                                </div>
                                                <div class="col">
                                                    <input type="text"
                                                        class="form-control @error('') is-invalid @enderror"
                                                        id="hp" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <label for="hp" class="col-form-label">
                                                SKP/SKPD</label>
                                        </div>
                                        <div class="col-sm">
                                            <div class="row">
                                                <div class="col-sm-1 col-form-label">
                                                    <p>:</p>
                                                </div>
                                                <div class="col">
                                                    <input type="text"
                                                        class="form-control @error('') is-invalid @enderror"
                                                        id="hp" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="container mt-3">
                            <div class="row">
                                <div class="col">
                                    <strong>6. OPERATOR KOMPUTER : SKP / SKPD</strong>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <label for="hp" class="col-form-label">
                                                SKP/SKPD</label>
                                        </div>
                                        <div class="col-sm">
                                            <div class="row">
                                                <div class="col-sm-1 col-form-label">
                                                    <p>:</p>
                                                </div>
                                                <div class="col">
                                                    <input type="text"
                                                        class="form-control @error('') is-invalid @enderror"
                                                        id="hp" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <label for="hp" class="col-form-label">
                                                SKP/SKPD</label>
                                        </div>
                                        <div class="col-sm">
                                            <div class="row">
                                                <div class="col-sm-1 col-form-label">
                                                    <p>:</p>
                                                </div>
                                                <div class="col">
                                                    <input type="text"
                                                        class="form-control @error('') is-invalid @enderror"
                                                        id="hp" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <label for="hp" class="col-form-label">
                                                SKP/SKPD</label>
                                        </div>
                                        <div class="col-sm">
                                            <div class="row">
                                                <div class="col-sm-1 col-form-label">
                                                    <p>:</p>
                                                </div>
                                                <div class="col">
                                                    <input type="text"
                                                        class="form-control @error('') is-invalid @enderror"
                                                        id="hp" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <label for="hp" class="col-form-label">
                                                SKP/SKPD</label>
                                        </div>
                                        <div class="col-sm">
                                            <div class="row">
                                                <div class="col-sm-1 col-form-label">
                                                    <p>:</p>
                                                </div>
                                                <div class="col">
                                                    <input type="text"
                                                        class="form-control @error('') is-invalid @enderror"
                                                        id="hp" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="container mt-3">
                            <div class="row">
                                <div class="col">
                                    <strong>6. OPERATOR KOMPUTER : SKP / SKPD</strong>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <label for="hp" class="col-form-label">
                                                SKP/SKPD</label>
                                        </div>
                                        <div class="col-sm">
                                            <div class="row">
                                                <div class="col-sm-1 col-form-label">
                                                    <p>:</p>
                                                </div>
                                                <div class="col">
                                                    <input type="text"
                                                        class="form-control @error('') is-invalid @enderror"
                                                        id="hp" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <label for="hp" class="col-form-label">
                                                SKP/SKPD</label>
                                        </div>
                                        <div class="col-sm">
                                            <div class="row">
                                                <div class="col-sm-1 col-form-label">
                                                    <p>:</p>
                                                </div>
                                                <div class="col">
                                                    <input type="text"
                                                        class="form-control @error('') is-invalid @enderror"
                                                        id="hp" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <label for="hp" class="col-form-label">
                                                SKP/SKPD</label>
                                        </div>
                                        <div class="col-sm">
                                            <div class="row">
                                                <div class="col-sm-1 col-form-label">
                                                    <p>:</p>
                                                </div>
                                                <div class="col">
                                                    <input type="text"
                                                        class="form-control @error('') is-invalid @enderror"
                                                        id="hp" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <label for="hp" class="col-form-label">
                                                SKP/SKPD</label>
                                        </div>
                                        <div class="col-sm">
                                            <div class="row">
                                                <div class="col-sm-1 col-form-label">
                                                    <p>:</p>
                                                </div>
                                                <div class="col">
                                                    <input type="text"
                                                        class="form-control @error('') is-invalid @enderror"
                                                        id="hp" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="container mt-3">
                            <div class="row">
                                <div class="col">
                                    <strong>6. OPERATOR KOMPUTER : SKP / SKPD</strong>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <label for="hp" class="col-form-label">
                                                SKP/SKPD</label>
                                        </div>
                                        <div class="col-sm">
                                            <div class="row">
                                                <div class="col-sm-1 col-form-label">
                                                    <p>:</p>
                                                </div>
                                                <div class="col">
                                                    <input type="text"
                                                        class="form-control @error('') is-invalid @enderror"
                                                        id="hp" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <label for="hp" class="col-form-label">
                                                SKP/SKPD</label>
                                        </div>
                                        <div class="col-sm">
                                            <div class="row">
                                                <div class="col-sm-1 col-form-label">
                                                    <p>:</p>
                                                </div>
                                                <div class="col">
                                                    <input type="text"
                                                        class="form-control @error('') is-invalid @enderror"
                                                        id="hp" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <label for="hp" class="col-form-label">
                                                SKP/SKPD</label>
                                        </div>
                                        <div class="col-sm">
                                            <div class="row">
                                                <div class="col-sm-1 col-form-label">
                                                    <p>:</p>
                                                </div>
                                                <div class="col">
                                                    <input type="text"
                                                        class="form-control @error('') is-invalid @enderror"
                                                        id="hp" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <label for="hp" class="col-form-label">
                                                SKP/SKPD</label>
                                        </div>
                                        <div class="col-sm">
                                            <div class="row">
                                                <div class="col-sm-1 col-form-label">
                                                    <p>:</p>
                                                </div>
                                                <div class="col">
                                                    <input type="text"
                                                        class="form-control @error('') is-invalid @enderror"
                                                        id="hp" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="container mt-3">
                            <div class="row">
                                <div class="col">
                                    <strong>6. OPERATOR KOMPUTER : SKP / SKPD</strong>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <label for="hp" class="col-form-label">
                                                SKP/SKPD</label>
                                        </div>
                                        <div class="col-sm">
                                            <div class="row">
                                                <div class="col-sm-1 col-form-label">
                                                    <p>:</p>
                                                </div>
                                                <div class="col">
                                                    <input type="text"
                                                        class="form-control @error('') is-invalid @enderror"
                                                        id="hp" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <label for="hp" class="col-form-label">
                                                SKP/SKPD</label>
                                        </div>
                                        <div class="col-sm">
                                            <div class="row">
                                                <div class="col-sm-1 col-form-label">
                                                    <p>:</p>
                                                </div>
                                                <div class="col">
                                                    <input type="text"
                                                        class="form-control @error('') is-invalid @enderror"
                                                        id="hp" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <label for="hp" class="col-form-label">
                                                SKP/SKPD</label>
                                        </div>
                                        <div class="col-sm">
                                            <div class="row">
                                                <div class="col-sm-1 col-form-label">
                                                    <p>:</p>
                                                </div>
                                                <div class="col">
                                                    <input type="text"
                                                        class="form-control @error('') is-invalid @enderror"
                                                        id="hp" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <label for="hp" class="col-form-label">
                                                SKP/SKPD</label>
                                        </div>
                                        <div class="col-sm">
                                            <div class="row">
                                                <div class="col-sm-1 col-form-label">
                                                    <p>:</p>
                                                </div>
                                                <div class="col">
                                                    <input type="text"
                                                        class="form-control @error('') is-invalid @enderror"
                                                        id="hp" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="container">
                            <div class="row mt-3">
                                <div class="col">
                                    <strong>CATATAN PENTING</strong>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="container mt-3">
                            <div class="row">
                                <div class="col">
                                    <strong>6. OPERATOR KOMPUTER : SKP / SKPD</strong>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <label for="hp" class="col-form-label">
                                                SKP/SKPD</label>
                                        </div>
                                        <div class="col-sm">
                                            <div class="row">
                                                <div class="col-sm-1 col-form-label">
                                                    <p>:</p>
                                                </div>
                                                <div class="col">
                                                    <input type="text"
                                                        class="form-control @error('') is-invalid @enderror"
                                                        id="hp" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <label for="hp" class="col-form-label">
                                                SKP/SKPD</label>
                                        </div>
                                        <div class="col-sm">
                                            <div class="row">
                                                <div class="col-sm-1 col-form-label">
                                                    <p>:</p>
                                                </div>
                                                <div class="col">
                                                    <input type="text"
                                                        class="form-control @error('') is-invalid @enderror"
                                                        id="hp" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <label for="hp" class="col-form-label">
                                                SKP/SKPD</label>
                                        </div>
                                        <div class="col-sm">
                                            <div class="row">
                                                <div class="col-sm-1 col-form-label">
                                                    <p>:</p>
                                                </div>
                                                <div class="col">
                                                    <input type="text"
                                                        class="form-control @error('') is-invalid @enderror"
                                                        id="hp" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <label for="hp" class="col-form-label">
                                                SKP/SKPD</label>
                                        </div>
                                        <div class="col-sm">
                                            <div class="row">
                                                <div class="col-sm-1 col-form-label">
                                                    <p>:</p>
                                                </div>
                                                <div class="col">
                                                    <input type="text"
                                                        class="form-control @error('') is-invalid @enderror"
                                                        id="hp" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
@endsection

@section('js')
    <script>
        function confirmSubmission() {
            return confirm("Are you sure you want to submit the form?");
        }

        function confirmReset() {
            if (confirm("Are you sure you want to reset the form?")) {
                document.getElementById("kartuMonitoringForm").reset();
            }
        }
    </script>
@endsection
