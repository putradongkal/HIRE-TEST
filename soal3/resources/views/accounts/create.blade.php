@extends('layouts.app')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Rekening Saya</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{!! route('accounts.index') !!}">Rekening Saya</a></div>
                <div class="breadcrumb-item">Tambah Rekening</div>
                {{--<div class="breadcrumb-item">Advanced Forms</div>--}}
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Tambah Rekening</h4>
                    </div>
                    <div class="card-body">
                        {!! Form::open(['route' => 'accounts.store', 'id' => 'form']) !!}
                            @include('accounts.field')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection