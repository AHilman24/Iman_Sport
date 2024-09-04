@extends('template.pasang')
@section('content')

    <body class="hold-transition dark-skin sidebar-mini theme-primary fixed">
        <div class="content-wrapper">
            <div class="container-full">

                <!-- Main content -->
                <section class="content">
                    <div class="row">

                        <div class="col-12">

                            <div class="box">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Data Kategori</h3>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <div class="table-responsive">
                                        <table id="example" class="table table-bordered table-striped" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Tanggal Pesanan</th>
                                                    <th>Total Belanja</th>
                                                    <th>Opsi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($pesanan as $key => $item)
                                                    <tr>
                                                        <td>{{ $key + 1 }}</td>
                                                        <td>{{ $item->created_at->format('d F Y ') }}</td>
                                                        <td>{{ $item->total_bayar }}</td>
                                                        <td>
                                                            
                                                            <a href="/detail-pesanan/{{ $item->id }}"
                                                                class="btn btn-outline-info text-white" >Detail Pesanan</a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </body>
@endsection
