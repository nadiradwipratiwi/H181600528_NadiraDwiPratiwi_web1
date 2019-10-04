@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Artikel</div>

                <div class="card-body">
                    <a href="{!! route ('artikel.create') !!}" class="btn btn-success">Tambah Artikel</a>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table border="1">
		<tr>
			<td>ID</td>

			<td>Judul</td>

            <td>Isi</td>

            <td>Kategori Id</td>

			<td>User ID</td>

			<td>Create</td>

            <td>Aksi</td>
		</tr>

		@foreach($listArtikel as $item)

        <tr>
			<td>{!! $item->id !!}</td>

			<td>{!! $item->judul !!}</td>

            <td>{!! $item->isi !!}</td>

            <td>{!! $item->kategori_id !!}</td>

            

			<td>{!! $item->users_id !!}</td>

			<td>{!! $item->created_at->format('d/m/Y H:i:s') !!}</td>

            <td>
                <a href="{!! route('artikel.show',[$item->id])!!}"class="btn btn-sm btn-success" >Lihat</a>
            </td>



		</tr>

		@endforeach

	</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
