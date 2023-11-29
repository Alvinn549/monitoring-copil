@extends('dashboard.layouts.main')
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
    }
</style>
<!-- Section -->
@section('content')
    <h1 class="mt-4">Kartu Monitorinng</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('kartu-monitoring.index') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Tambah Kartu Monitorinng</li>
    </ol>

    <form action="" class="custom-border">
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
                                <label for="nama-lengkap" class="col-form-label">NAMA LENGKAP</label>
                            </div>
                            <div class="col-sm">
                                <div class="row">
                                    <div class="col-sm-1 col-form-label">
                                        <p>:</p>
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control" id="nama-lengkap" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="row">
                            <div class="col-sm-2">
                                <label for="hp" class="col-form-label">HP</label>
                            </div>
                            <div class="col-sm">
                                <div class="row">
                                    <div class="col-sm-1 col-form-label">
                                        <p>:</p>
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control" id="nama-lengkap" />
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
                                <label for="nik" class="col-form-label">NIK PEMOHON</label>
                            </div>
                            <div class="col-sm">
                                <div class="row">
                                    <div class="col-sm-1 col-form-label">
                                        <p>:</p>
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control" id="nama-lengkap" />
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
                                <label for="nama-lengkap" class="col-form-label">TEMPAT / TGL. LAHIR
                                </label>
                            </div>
                            <div class="col-sm">
                                <div class="row">
                                    <div class="col-sm-1 col-form-label">
                                        <p>:</p>
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control" id="nama-lengkap" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="row">
                            <div class="col-sm">
                                <input type="date" class="form-control" id="tanggal-lahir" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg">
                <div class="row mt-4">
                    <div class="col-sm-4">
                        <label for="inputTanggal" class="col-form-label">Tanggal</label>
                    </div>
                    <div class="col-sm-8">
                        <div class="row">
                            <div class="col-sm-1 col-form-label">
                                <p>:</p>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" id="nama-lengkap" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <label for="inputNoAntrian" class="col-form-label">No Antrian</label>
                    </div>
                    <div class="col-sm-8">
                        <div class="row">
                            <div class="col-sm-1 col-form-label">
                                <p>:</p>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" id="nama-lengkap" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <label for="inputJadiTanggal" class="col-form-label">Jadi Tanggal</label>
                    </div>
                    <div class="col-sm-8">
                        <div class="row">
                            <div class="col-sm-1 col-form-label">
                                <p>:</p>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" id="nama-lengkap" />
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
                        <label for="nama-lengkap" class="col-form-label">ALAMAT</label>
                    </div>
                    <div class="col col-form-label">
                        <p class="text-end">:</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="row">
                    <div class="col-sm-2">
                        <label for="nama-lengkap" class="col-form-label">RT</label>
                    </div>
                    <div class="col-sm">
                        <div class="row">
                            <div class="col-sm-1 col-form-label">
                                <p>:</p>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" id="nama-lengkap" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="row">
                    <div class="col-sm-2">
                        <label for="nama-lengkap" class="col-form-label">RW</label>
                    </div>
                    <div class="col-sm">
                        <div class="row">
                            <div class="col-sm-1 col-form-label">
                                <p>:</p>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" id="nama-lengkap" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="row">
                    <div class="col-sm-3">
                        <label for="nama-lengkap" class="col-form-label">DESA/KELURAHAN</label>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col-sm-1 col-form-label">
                                <p class="text-end">:</p>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" id="nama-lengkap" />
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
                                <label for="nama-lengkap" class="col-form-label">KECAMATAN</label>
                            </div>
                            <div class="col">
                                <div class="row">
                                    <div class="col-sm-1 col-form-label">
                                        <p>:</p>
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control" id="nama-lengkap" />
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
                <label for="nama-lengkap" class="col-form-label">JUMLAH DOKUMEN YANG DIMINTA
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
            </div>
            <div class="col-sm-2">
                <div class="row">
                    <div class="col-sm-2">
                        <label for="nama-lengkap" class="col-form-label">KK</label>
                    </div>
                    <div class="col-sm">
                        <div class="row">
                            <div class="col-sm-1 col-form-label">
                                <p>:</p>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" id="nama-lengkap" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="row">
                    <div class="col-sm-2">
                        <label for="nama-lengkap" class="col-form-label">KTP</label>
                    </div>
                    <div class="col-sm">
                        <div class="row">
                            <div class="col-sm-1 col-form-label">
                                <p>:</p>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" id="nama-lengkap" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="row">
                    <div class="col-sm-3">
                        <label for="nama-lengkap" class="col-form-label">AKTA</label>
                    </div>
                    <div class="col-sm">
                        <div class="row">
                            <div class="col-sm-1 col-form-label">
                                <p>:</p>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" id="nama-lengkap" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="row">
                    <div class="col-sm-4">
                        <label for="nama-lengkap" class="col-form-label">SKP / SKPD</label>
                    </div>
                    <div class="col-sm">
                        <div class="row">
                            <div class="col-sm-1 col-form-label">
                                <p>:</p>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" id="nama-lengkap" />
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
                                                    <input type="text" class="form-control" id="hp" />
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
                                                    <input type="text" class="form-control" id="hp" />
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
                                                    <input type="text" class="form-control" id="hp" />
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
                                                    <input type="text" class="form-control" id="hp" />
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
                                                    <input type="text" class="form-control" id="hp" />
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
                                                    <input type="text" class="form-control" id="hp" />
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
                                                    <input type="text" class="form-control" id="hp" />
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
                                                    <input type="text" class="form-control" id="hp" />
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
                                                    <input type="text" class="form-control" id="hp" />
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
                                                    <input type="text" class="form-control" id="hp" />
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
                                                    <input type="text" class="form-control" id="hp" />
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
                                                    <input type="text" class="form-control" id="hp" />
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
                                                    <input type="text" class="form-control" id="hp" />
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
                                                    <input type="text" class="form-control" id="hp" />
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
                                                    <input type="text" class="form-control" id="hp" />
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
                                                    <input type="text" class="form-control" id="hp" />
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
                                                    <input type="text" class="form-control" id="hp" />
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
                                                    <input type="text" class="form-control" id="hp" />
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
                                                    <input type="text" class="form-control" id="hp" />
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
                                                    <input type="text" class="form-control" id="hp" />
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
                                                    <input type="text" class="form-control" id="hp" />
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
                                                    <input type="text" class="form-control" id="hp" />
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
                                                    <input type="text" class="form-control" id="hp" />
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
                                                    <input type="text" class="form-control" id="hp" />
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
                                                    <input type="text" class="form-control" id="hp" />
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
                                                    <input type="text" class="form-control" id="hp" />
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
                                                    <input type="text" class="form-control" id="hp" />
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
                                                    <input type="text" class="form-control" id="hp" />
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
                                                    <input type="text" class="form-control" id="hp" />
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
                                                    <input type="text" class="form-control" id="hp" />
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
                                                    <input type="text" class="form-control" id="hp" />
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
                                                    <input type="text" class="form-control" id="hp" />
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
                                                    <input type="text" class="form-control" id="hp" />
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
                                                    <input type="text" class="form-control" id="hp" />
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
                                                    <input type="text" class="form-control" id="hp" />
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
                                                    <input type="text" class="form-control" id="hp" />
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
                                                    <input type="text" class="form-control" id="hp" />
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
                                                    <input type="text" class="form-control" id="hp" />
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
                                                    <input type="text" class="form-control" id="hp" />
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
                                                    <input type="text" class="form-control" id="hp" />
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
                                                    <input type="text" class="form-control" id="hp" />
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
                                                    <input type="text" class="form-control" id="hp" />
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
                                                    <input type="text" class="form-control" id="hp" />
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
                                                    <input type="text" class="form-control" id="hp" />
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
                                                    <input type="text" class="form-control" id="hp" />
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
                                                    <input type="text" class="form-control" id="hp" />
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
                                                    <input type="text" class="form-control" id="hp" />
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
                                                    <input type="text" class="form-control" id="hp" />
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
                                                    <input type="text" class="form-control" id="hp" />
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
                                                    <input type="text" class="form-control" id="hp" />
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
                                                    <input type="text" class="form-control" id="hp" />
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
                                                    <input type="text" class="form-control" id="hp" />
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
                                                    <input type="text" class="form-control" id="hp" />
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
                                                    <input type="text" class="form-control" id="hp" />
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
                                                    <input type="text" class="form-control" id="hp" />
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
                                                    <input type="text" class="form-control" id="hp" />
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
                                                    <input type="text" class="form-control" id="hp" />
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
                                                    <input type="text" class="form-control" id="hp" />
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
                                                    <input type="text" class="form-control" id="hp" />
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
                                                    <input type="text" class="form-control" id="hp" />
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
                                                    <input type="text" class="form-control" id="hp" />
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
                                                    <input type="text" class="form-control" id="hp" />
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
                                                    <input type="text" class="form-control" id="hp" />
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
                                                    <input type="text" class="form-control" id="hp" />
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
