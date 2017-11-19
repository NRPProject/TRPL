@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">properti {{ $properti->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('/properti') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/properti/' . $properti->id . '/edit') }}" title="Edit properti"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('properti' . '/' . $properti->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-xs" title="Delete properti" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $properti->id }}</td>
                                    </tr>
                                    <tr><th> Judul Penjualan </th><td> {{ $properti->judul_penjualan }} </td></tr>
                                    <tr><th> Deskripsi </th><td> {{ $properti->deskripsi }} </td></tr>
                                    <tr><th> Kecamatan </th><td> {{ $properti->kecamatan }} </td></tr>
                                    <tr><th> Alamat </th><td> {{ $properti->alamat }} </td></tr>
                                    <tr><th> Luas Bangunan </th><td> {{ $properti->luas_bangunan }} </td></tr>
                                    <tr><th> Harga Permintaan </th><td> {{ $properti->harga_permintaan }} </td></tr>
                                    <tr><th> Gambar </th><td> {{ $properti->gambar }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
