@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{!! asset('vendor/izitoast/css/iziToast.min.css') !!}">
@endsection
@section('content')
    <section class="section">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12">
                <div class="card card-statistic-2">
                    <div class="card-icon shadow-primary bg-primary">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Saldo</h4>
                        </div>
                        <div class="card-body">
                            IDR {!!  number_format($balance) !!}
                        </div>
                    </div>
                </div>
            </div>
            {{--<div class="col-lg-4 col-md-4 col-sm-12">--}}
                {{--<div class="card card-statistic-2">--}}
                    {{--<div class="card-icon shadow-primary bg-primary">--}}
                        {{--<i class="fas fa-archive"></i>--}}
                    {{--</div>--}}
                    {{--<div class="card-wrap">--}}
                        {{--<div class="card-header">--}}
                            {{--<h4>Total Orders</h4>--}}
                        {{--</div>--}}
                        {{--<div class="card-body">--}}
                            {{--59--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-lg-4 col-md-4 col-sm-12">--}}
                {{--<div class="card card-statistic-2">--}}
                    {{--<div class="card-icon shadow-primary bg-primary">--}}
                        {{--<i class="fas fa-shopping-bag"></i>--}}
                    {{--</div>--}}
                    {{--<div class="card-wrap">--}}
                        {{--<div class="card-header">--}}
                            {{--<h4>Sales</h4>--}}
                        {{--</div>--}}
                        {{--<div class="card-body">--}}
                            {{--4,732--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Topup</h4>
                    </div>
                    <div class="card-body">
                        {!! Form::open(['route' => 'dashboard.topup', 'id' => 'form']) !!}
                            <div class="form-group">
                                <label>Jumlah</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            Rp
                                        </div>
                                    </div>
                                    <input type="text" class="form-control currency" name="total">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Sumber Dana</label>
                                <select class="form-control select2" name="payment_method">
                                    <option value="">-PILIH-</option>
                                    <option value="bca">BANK BCA</option>
                                    <option value="bri">BANK BRI</option>
                                    <option value="mandiri">BANK MANDIRI</option>
                                    <option value="alfamart">ALFAMART</option>
                                    <option value="indomaret">INDOMARET</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary fa-pull-right">Topup</button>
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Withdraw</h4>
                    </div>
                    <div class="card-body">
                        {!! Form::open(['route' => 'dashboard.withdraw', 'id' => 'form']) !!}
                            <div class="form-group">
                                <label>Jumlah</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            Rp
                                        </div>
                                    </div>
                                    <input type="text" class="form-control currency" name="total">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Rekening Saya</label>
                                <select class="form-control select2" name="account_id">
                                    <option value="">-PILIH-</option>
                                    @foreach($accounts as $account)
                                        <option value="{!! $account->id !!}">{!! $account->bank !!} - {!! $account->account_number !!} an {!! $account->owner !!}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-danger fa-pull-right">Withdraw</button>
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Mutasi Terakhir</h4>
                        <div class="card-header-action">
                            <a href="{!! route('mutations.index') !!}" class="btn btn-danger">Lihat Semua <i class="fas fa-chevron-right"></i></a>
                        </div>
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
    @if(session('error'))
        <script>
            iziToast.error({
                title: 'Ups!',
                message: '{!! session('error') !!}',
                position: 'topRight'
            });
        </script>
    @endif
@endsection