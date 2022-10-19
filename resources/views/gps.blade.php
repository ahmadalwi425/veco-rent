@extends('layout.template')

@section('content')
    <iframe src="http://140.238.201.233:1880/{{session()->get('webpath')}}/" height="688px" width="100%" title="Iframe Example"></iframe>
@endsection