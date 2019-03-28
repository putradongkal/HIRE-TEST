@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{!! asset('vendor/izitoast/css/iziToast.min.css') !!}">
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Laporan Mutasi</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active">Laporan Mutasi</div>
                {{--<div class="breadcrumb-item"><a href="#">Forms</a></div>--}}
                {{--<div class="breadcrumb-item">Advanced Forms</div>--}}
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Semua Mutasi</h4>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive table-invoice">
                            <table class="table table-striped">
                                <tr>
                                    <th>Jenis Mutasi</th>
                                    <th>Nomor Dokumen</th>
                                    <th>Jumlah Mutasi</th>
                                </tr>
                                @foreach($mutations as $mutation)
                                    <tr>
                                        <td>{!! $mutation->type !!}</td>
                                        <td>{!! $mutation->document_number !!}</td>
                                        <td>{!! number_format($mutation->total) !!}</td>
                                    </tr>
                                @endforeach

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script src="{!! asset('vendor/izitoast/js/iziToast.min.js') !!}"></script>
    @if(session('success'))
        <script>
            iziToast.success({
                title: 'Yuhu!',
                message: '{!! session('success') !!}',
                position: 'topRight'
            });
        </script>
    @endif
@endsection