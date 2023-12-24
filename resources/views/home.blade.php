@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    {{ __('Digital GuestBook') }}
                
                </div>
                
                <div class="card-body">
                    <div class="container mt-12">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card border-0 shadow-sm rounded">
                                    <div class="card-body">
                                        @if(auth()->user()->roles == 'admin')
                                            <a href="{{ route('mahasiswa.create') }}" class="btn btn-md btn-success mb-3">Tambah Data</a>
                                        @endif
                        
                                        <table class="table table-bordered">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">Nama Lengkap</th>
                                                    <th scope="col">Alamat</th>
                                                    <th scope="col">Tanggal Lahir</th>
                                                    @if(auth()->user()->roles == 'admin')
                                                        <th scope="col">Aksi</th>
                                                    @endif
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php $no = 1 @endphp
                                                @foreach ($posts as $p)
                                                    <tr>
                                                        <td>{{ $no++ }}</td>
                                                        <td>{{ $p->nama }}</td>
                                                        <td>{{ $p->alamat }}</td>
                                                        <td>{{ $p->tanggal_lahir }}</td>
                                                        @if(auth()->user()->roles == 'admin')
                                                            <td>
                                                                <!-- Tombol Edit -->
                                                                <a href="{{ route('mahasiswa.edit', ['mahasiswa' => $p->id]) }}" class="btn btn-sm btn-warning">Edit</a>
                                                                
                                                                <!-- Tombol Hapus -->
                                                                <form action="{{ route('mahasiswa.destroy', ['mahasiswa' => $p->id]) }}" method="POST" style="display: inline;">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                                                                </form>
                                                            </td>
                                                        @endif
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                        
                                        @if (session('success'))
                                            <div class="alert alert-success mt-3">{{ session('success') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
