@extends('layouts.mobile')

@section('content')

    <div class="hero-box bg-white hero-box-smaller ">
        <script type="text/javascript" src="../../assets/widgets/datatable/datatable.js"></script>
        <script type="text/javascript" src="../../assets/widgets/datatable/datatable-bootstrap.js"></script>
        <script type="text/javascript" src="../../assets/widgets/datatable/datatable-tabletools.js"></script>
        <div class="container">
            <h2 class="hero-heading">Data TPS 3R</h2><br>
            <div style="overflow-x: scroll">
            <table id="datatable1" class="table table-striped table-bordered responsive no-wrap" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th valign="top">{{__("No")}}</th>
                    <th valign="top">{{__("Nama")}}</th>
                    <th valign="top">{{__("Nama Pengurus")}}</th>
                    <th valign="top">{{__("Alamat")}}</th>
                    <th valign="top">{{__("Status")}}</th>
                    <th valign="top">{{__("Alat")}}</th>
                    <th valign="top">{{__("Kendala")}}</th>
                    <th valign="top">{{__("Keterangan")}}</th>
                    <th valign="top">{{__("Foto")}}</th>
                </tr>
                </thead>
            </table>
            <script>
                var table = $("#datatable1").dataTable({
                    processing: true,
                    serverSide: true,
                    ajax: {
                        url: "{{url('mobile/ttps3r')}}",
                        type: 'GET',
                    },
                    columns: [
                        { data: 'DT_RowIndex', name: 'DT_RowIndex', },
                        { data: 'nama', name: 'nama', },
                        { data: 'namapengurus', name: 'namapengurus', },
                        { data: 'alamat', name: 'alamat', },
                        { data: 'status', name: 'status'},
                        { data: 'alat', name: 'alat'},
                        { data: 'kendala', name: 'kendala'},
                        { data: 'keterangan', name: 'keterangan', },
                        { data: 'foto', name: 'foto'},
                    ],
                    order: [[0, 'asc']],
                });
            </script>
            </div>
        </div>
    </div>

@endsection
