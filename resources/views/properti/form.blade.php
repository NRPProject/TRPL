<div class="form-group {{ $errors->has('judul_penjualan') ? 'has-error' : ''}}">
    <label for="judul_penjualan" class="col-md-4 control-label">{{ 'Judul Penjualan' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="judul_penjualan" type="text" id="judul_penjualan" value="{{ $properti->judul_penjualan or ''}}" >
        {!! $errors->first('judul_penjualan', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('deskripsi') ? 'has-error' : ''}}">
    <label for="deskripsi" class="col-md-4 control-label">{{ 'Fasilitas' }}</label>
    <div class="col-md-6">
        <textarea class="form-control" rows="5" name="deskripsi" type="textarea" id="deskripsi" >{{ $properti->deskripsi or ''}}</textarea>
        {!! $errors->first('deskripsi', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('kecamatan') ? 'has-error' : ''}}">
    <label for="kecamatan" class="col-md-4 control-label">{{ 'Kecamatan' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="kecamatan" type="text" id="kecamatan" value="{{ $properti->kecamatan or ''}}" >
        {!! $errors->first('kecamatan', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('alamat') ? 'has-error' : ''}}">
    <label for="alamat" class="col-md-4 control-label">{{ 'Alamat' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="alamat" type="text" id="alamat" value="{{ $properti->alamat or ''}}" >
        {!! $errors->first('alamat', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('luas_bangunan') ? 'has-error' : ''}}">
    <label for="luas_bangunan" class="col-md-4 control-label">{{ 'Luas Bangunan' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="luas_bangunan" type="text" id="luas_bangunan" value="{{ $properti->luas_bangunan or ''}}" >
        {!! $errors->first('luas_bangunan', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('harga_permintaan') ? 'has-error' : ''}}">
    <label for="harga_permintaan" class="col-md-4 control-label">{{ 'Harga Permintaan' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="harga_permintaan" type="number" id="harga_permintaan" value="{{ $properti->harga_permintaan or ''}}" >
        {!! $errors->first('harga_permintaan', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('gambar') ? 'has-error' : ''}}">
    <label for="gambar" class="col-md-4 control-label">{{ 'Gambar' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="gambar" type="file" id="gambar" value="{{ $properti->gambar or ''}}" >
        {!! $errors->first('gambar', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
