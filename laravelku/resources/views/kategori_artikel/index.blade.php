@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table border="1">
		<tr>
			<td>ID</td>

			<td>Nama</td>

			<td>User ID</td>

			<td>Create</td>
		</tr>

		@foreach($listKategoriArtikel as $item)

        <tr>
			<td>{!! $item->id !!}</td>

			<td>{!! $item->nama !!}</td>

			<td>{!! $item->users_id !!}</td>

			<td>{!! $item->created_at->format('d/m/Y H:i:s') !!}</td>
		</tr>

		@endforeach

	</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
