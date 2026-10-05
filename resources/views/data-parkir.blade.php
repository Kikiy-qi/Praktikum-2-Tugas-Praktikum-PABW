@extends('layouts.app')

@section('title', 'Data Kendaraan Parkir')

@section('content')
<div class="card shadow-sm">
    <div class="card-header bg-primary text-white">
        <h5 class="mb-0">Daftar Kendaraan Terparkir</h5>
    </div>
    <div class="card-body">
        
        @if(empty($data_kendaraan))
            <div class="alert alert-warning">
                Saat ini tidak ada kendaraan yang sedang parkir.
            </div>
        @else
            <div class="alert alert-success">
                Terdapat {{ count($data_kendaraan) }} kendaraan yang sedang parkir.
            </div>

            <table class="table table-bordered table-striped mt-3">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Plat Nomor</th>
                        <th>Jenis Kendaraan</th>
                        <th>Status Member</th>
                    </tr>
                </thead>
                <tbody>
                    
                    @forelse($data_kendaraan as $index => $kendaraan)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $kendaraan['plat_nomor'] }}</td>
                            
                            <td>
                                @if($kendaraan['jenis'] == 'Mobil')
                                    <span class="badge bg-primary">Mobil</span>
                                @elseif($kendaraan['jenis'] == 'Motor')
                                    <span class="badge bg-success">Motor</span>
                                @else
                                    <span class="badge bg-secondary">Lainnya</span>
                                @endif
                            </td>

                            <td>
                                @if($kendaraan['is_member'])
                                    <span class="text-success fw-bold">Member</span>
                                @else
                                    <span class="text-secondary">Reguler</span>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center">Data tidak ditemukan.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        @endif

    </div>
</div>
@endsection
