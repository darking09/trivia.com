@extends('layouts.app')

@section('content')
<div class="container" data-token="{{ csrf_token() }}">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Test</div>

                <div class="panel-body">
                    <ul>
                        @foreach($question as $key => $value)
                        <li data-id="{{$value->id}}" class="question">{{$key + 1}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
