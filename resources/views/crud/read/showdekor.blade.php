@extends('layouts.crud.index')
@include('layouts.app')
@section('content')
<div class="section">
	@foreach($datas as $data)

	<div class="row">
		<div class="col s12">
            <h5>{{ $data->nama }}</h5>
            
            <div class="divider"></div>
            <p>Rp. {!!substr($data->harga,0,200)!!}...</p>

            <img src="{{ asset('images/'.$data->gambar)  }}" style="max-height:200px;max-width:200px;margin-top:10px;">

            
            <a href="{{url('readdekor', $data->slug_dekor)}}" class="btn btn-flat pink accent-3 waves-effect waves-light white-text">Readmore <i class="material-icons right">send</i></a>
			<a href="{{url('editdekor', $data->id) }}" class="btn btn-flat purple darken-4 waves-effect waves-light white-text">Edit <i class="material-icons right">mode_edit</i></a>
            <a href="{{url('deletedekor', $data->id) }}" onclick="return confirm('Yakin mau hapus data ini sob?')" class="btn btn-flat red darken-4 waves-effect waves-light white-text">Delete <i class="material-icons right">delete</i></a>
            <!-- <button><a href="{{url('read', $data->id)}}">Readmore</a> -->
            <!-- <button>Edit 
            <button>Delete  -->
		</div>
	</div>
	@endforeach

</div>
@endsection