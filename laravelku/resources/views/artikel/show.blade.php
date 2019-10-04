@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Artikel</div>

                <div class="card-body">

                <div class="form-group row"> 
                   <label class="col-md-4 col-form-label text-md-right">ID</label>
                   <label class="col-md-8 col-form-label text-md-left">{!! $kategoriArtikel->id !!}</label>
                </div>

                <div class="form-group row"> 
                   <label class="col-md-4 col-form-label text-md-right">Nama</label>
                   <label class="col-md-8 col-form-label text-md-left">{!! $kategoriArtikel->judul !!}</label>
                </div>

                <div class="form-group row"> 
                   <label class="col-md-4 col-form-label text-md-right">Users Id</label>
                   <label class="col-md-8 col-form-label text-md-left">{!! $kategoriArtikel->users_id !!}</label>
                </div>

                <div class="form-group row"> 
                   <label class="col-md-4 col-form-label text-md-right">Create</label>
                   <label class="col-md-8 col-form-label text-md-left">{!! $kategoriArtikel->created_at !!}</label>
                </div>


                <div class="form-group row"> 
                   <label class="col-md-4 col-form-label text-md-right">Update </label>
                   <label class="col-md-8 col-form-label text-md-left">{!! $kategoriArtikel->updated_at !!}</label>
                </div>
                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <a class="btn btn-primary" href="{!! route('artikel.index') !!}"> Back</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
