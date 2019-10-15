@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Berita') }}</div>

                <div class="card-body">
                	<a href="{!! route('berita.create') !!}" class="btn btn-primary">Tambah Data</a>
				<table border="2">
				<tr>
					<td>ID</td>
					<td>Judul</td>
					<td>Isi</td>
					<td>Users ID</td>
					<td>Created At</td>
					<td>Update At</td>
					<td>Kategori Berita</td>
					<td>Aksi</td>
				</tr>

				@foreach($berita as $item)
				<tr>
				<td>{!! $item->id !!}</td>
				<td>{!! $item->judul !!}</td>
				<td>{!! $item->isi !!}</td>
				<td>{!! $item->users_id !!}</td>
				<td> {!! $item->created_at->format('d/n/Y  H:i:s') !!}</td>
				<td> {!! $item->updated_at->format('d/n/Y  H:i:s') !!}</td>
				<td>{!! $item->kategori_berita_id !!}</td>
				<td>
						<a href="{!! route('berita.show',[$item->id]) !!}" class="btn btn-sm btn-success"> Lihat
						</a>
						<a href="{!! route('berita.edit',[$item->id]) !!}" class="btn btn-sm btn-warning"> Edit
						</a>
						{!! Form::open(['route' => ['berita.destroy', $item->id], 'method'=>'delete']) !!}

						{!! Form::submit('Hapus', ['class'=>'btn btn-sm btn-danger', 'onclick'=>"return confirm('Apakah anda yakin menghapus data ini?')"]); !!}

						 {!! Form::close() !!}
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