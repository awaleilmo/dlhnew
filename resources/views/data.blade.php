@extends('layouts.tampilan')

@section('content')
    <div class="hero-box bg-white hero-box-smaller ">
        <div class="container">
            <h2 class="hero-heading wow fadeInDown animated animated" data-wow-duration="0.6s" style="visibility: visible; animation-duration: 0.6s;">DATA</h2>
            <table id="datatable1" class="table table-striped table-bordered responsive no-wrap" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>{{__("No")}}</th>
                    <th>{{__("Nama")}}</th>
                    <th>{{__("Files")}}</th>
                </tr>
                </thead>

            </table>
            <script>
                var table = $("#datatable1").dataTable({
                    processing: true,
                    serverSide: true,
                    ajax: {
                        url: "{{url('tdata')}}",
                        type: 'GET',
                    },
                    columns: [
                        { data: 'DT_RowIndex', name: 'DT_RowIndex', },
                        { data: 'nama', name: 'nama', },
                        { data: 'files', name: 'files', },
                    ],
                    order: [[0, 'asc']],
                });
            </script>
        </div>
    </div>
@endsection
