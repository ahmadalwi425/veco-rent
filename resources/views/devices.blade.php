@extends('layout.template')

@section('content')
    <script>
        function openlog(element) {
            alert("value is "+element.value);
        }
    </script>
    <div class="container row" style="padding: 50px;">
        @foreach($data as $row)
        @if($loop->iteration%4 == 0)
        <br>
        @endif
        <div class="col-md-3" style="margin:10px 20px; padding:0px;">
            <div class="card">
                <div class="card-header">
                    {{$row->label}}
                </div>
                <div class="card-body">
                    <form action="editdevice/{{$row->id}}" method="POST">
                        @csrf
                        @method('PUT')
                        <label for="input1">Label Device</label>
                        <input type="text" class="form-control" name="label" id="input1" value="{{$row->label}}" placeholder="Name your device">
                        <input type="submit" class="btn btn-primary" style="margin-top: 15px;" value="Save Changes">
                        <button onclick="openlog(this)" value="{{$row->device->id}}">{{$row->device->id}}</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection