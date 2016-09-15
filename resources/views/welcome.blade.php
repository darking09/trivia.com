@extends('layouts.app')

@section('content')
<div class="container" data-token="{{ csrf_token() }}">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span class="red">T</span>
                    <span class="yellow">R</span>
                    <span class="green">I</span>
                    <span class="blue">V</span>
                    <span class="violet">E</span>
                    <span class="red">N</span>
                    <span class="yellow">G</span>
                    <span class="green">L</span>
                    <span class="blue">?</span>
                    <span class="violet">S</span>
                    <span class="red">H</span>
                </div>

                <div class="panel-body">
                    <ul>
                        @foreach($question as $key => $value)
                        <li data-id="{{$value['id']}}" class="question" data-title="{{ $key + 1 }}">
                            <img src="img/star.png">
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
