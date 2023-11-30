@extends('dashboard.layouts.main')

@section('content')
    <h1 class="mt-4">Kartu Monitorinng</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
        <li class="breadcrumb-item active">Kartu Monitorinng</li>
    </ol>

    <a href="{{ route('kartu-monitoring.create') }}" class="btn btn-primary mb-4">Tambah Data</a>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Data Kartu Monitoring
        </div>
        <div class="card-body">
            <table id="kartuMonitoringTable">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Lengkap</th>
                        <th>Nik Pemohon</th>
                        <th>No Hp</th>
                        <th>Alamat</th>
                        <th>Tanggal</th>
                        <th>No Antrian</th>
                        <th>aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Nama Lengkap</th>
                        <th>Nik Pemohon</th>
                        <th>No Hp</th>
                        <th>Alamat</th>
                        <th>Tanggal</th>
                        <th>No Antrian</th>
                    </tr>
                </tfoot>
                <tbody>
                    @forelse ($kartuMonitorings as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nama_lengkap }}</td>
                            <td>{{ $item->nik_pemohon }}</td>
                            <td>{{ $item->no_hp }}</td>
                            <td>{{ $item->alamat }}</td>
                            <td>{{ $item->tanggal }}</td>
                            <td>{{ $item->no_antrian }}</td>
                            <td>
                                <a href="{{ route('kartu-monitoring.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            </td>
                        </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="text-center">Tidak ada data</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
        crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/kartu-monitoring-data-table.js') }}"></script>
@endsection
