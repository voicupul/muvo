@extends('layouts.master')
@section('content')
    <ul class="list-group">
        @foreach($linez as $k=>$v)
            <li class="list-group-item list-group-item-primary">{{$k}}</li>
            @foreach($v as $l)
                <li class="list-group-item list-group-item-light">{{$l}}</li>
            @endforeach
        @endforeach
    </ul>
@endsection

