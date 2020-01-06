@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Kategori Artikel</div>

                <div class="card-body">
                    {!! From::open(['route' => 'kategori_artikel.store','method' => 'post']) !!}
                      @include('kategori_artikel.form')
                      {!! From::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>        
@endsection
