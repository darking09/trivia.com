@extends('layouts.app')

@section('content')
<div class="container" data-token="{{ csrf_token() }}">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Test</div>

                <div class="panel-body">
                    <form action="http://localhost/english_quiz/public/question/edit/{{$question->id}}" method="post">
                        <textarea name="question" rows="10" cols="50">
                            {{$question->question}}
                        </textarea><br/>
                        <input type="text" name="answer" value="{{$question->answer}}" /><br/>                        
                        <input type="submit" value="Editar"/>                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
