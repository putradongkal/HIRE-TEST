<div class="form-group">
    {!! Form::label('bank', 'Bank') !!}
    {!! Form::select('bank', ['bca' => 'BCA', 'bri' => 'BRI', 'mandiri' => 'MANDIRI'], null, ['class' => 'form-control', 'id' => 'bank', 'placeholder' => '-Pilih Bank-']) !!}
</div>
<div class="form-group">
    {!! Form::label('account_number', 'Nomor Rekening') !!}
    {!! Form::text('account_number', null, ['class' => 'form-control', 'id' => 'account-number', 'autocomplete' => 'off']) !!}
</div>
<div class="form-group">
    {!! Form::label('owner', 'Pemilik') !!}
    {!! Form::text('owner', null, ['class' => 'form-control', 'id' => 'owner', 'autocomplete' => 'off']) !!}
</div>
<div class="form-group">
    <button class="btn btn-primary fa-pull-right">Simpan</button>
</div>