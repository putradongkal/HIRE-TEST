@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{!! asset('vendor/izitoast/css/iziToast.min.css') !!}">
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Rekening Saya</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active">Rekening Saya</div>
                {{--<div class="breadcrumb-item"><a href="#">Forms</a></div>--}}
                {{--<div class="breadcrumb-item">Advanced Forms</div>--}}
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <a class="btn btn-primary" href="{!! route('accounts.create') !!}">Tambah Rekening</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Semua Rekening</h4>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive table-invoice">
                            <table class="table table-striped">
                                <tr>
                                    <th>Bank</th>
                                    <th>Nomor Rekening</th>
                                    <th>Pemilik</th>
                                </tr>
                                @foreach($accounts as $account)
                                    <tr>
                                        <td class="font-weight-600">{!! $account->bank !!}</td>
                                        <td>{!! $account->account_number !!}</td>
                                        <td>{!! $account->owner !!}</td>
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