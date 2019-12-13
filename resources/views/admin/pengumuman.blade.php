@extends('layouts.layouts')

@section('konten')
    <div id="page-content">
        <div class="container">
            <div id="page-title">
                <h2>{{__('Dashboard Pengumuman')}}</h2>
                <p>{{__('Tampilan menu Pengumuman')}}</p>
            </div>
        </div>
        <table id="datatable1" class="table table-striped table-bordered responsive no-wrap" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th>No</th>
                <th>Tahun</th>
                <th>Jenis Kegiatan</th>
                <th>Jumlah Perusahaan</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            </tbody>
        </table>

        <script>
            $("#datatable1").dataTable();
        </script>

    </div>
    </div>
    </div>
@endsection
