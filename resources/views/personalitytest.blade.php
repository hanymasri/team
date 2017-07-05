@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
               

                <div class="panel -body">
                {{Form::open(['route' => 'student_info.store','class' => 'form-horizontal'])}}
                    <legend>Personality</legend>
                     <div class="panel-heading">Please take your personality test <a href="https://www.truity.com/test/big-five-personality-test">here</a> and then fill up your score below.</div>

                    <div class="form-group">
                      <label class="col-md-4 control-label" for="textinput">Openness</label>  
                      <div class="col-md-4">
                        {{Form::number('Openness', Null, ['class'=>'form-control'])}}
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="textinput">Conscientiousness</label>  
                      <div class="col-md-4">
                        {{Form::number('Conscientiousness', Null, ['class'=>'form-control'])}}
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="textinput">Extraverted</label>  
                      <div class="col-md-4">
                        {{Form::number('Extraverted', Null, ['class'=>'form-control'])}}
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="textinput">Agreeableness</label>  
                      <div class="col-md-4">
                        {{Form::number('Agreeableness', Null, ['class'=>'form-control'])}}
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="textinput">Neuroticism</label>  
                      <div class="col-md-4">
                        {{Form::number('Neuroticism', Null, ['class'=>'form-control'])}}
                      </div>
                    </div>
                    <div class="container">
                    <legend>Skills</legend>
                    <div class="panel-heading">Please rate your skill standing. (1-Strongly Disagree 2-Disagree 3-Agree 4-Strongly Agree)</div>
                      <div class="col-md-10">                                              
                        @foreach($skill_questions as $key => $skill_question)
                        <div class="row">
                          <label for="radios">{{$skill_question->question}}</label>
                        </div>
                          @for ($i = 1; $i < 5; $i++)
                            {{ Form::radio('skill['.$key.']', $i, False, ['class' => 'field']) }}
                            {{ Form::label('skill', $i) }}
                          @endfor
                        @endforeach
                      </div>                    
                    </div>
                    <br>
                    <legend>Academic Standing</legend>
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="textinput">CGPA</label>  
                      <div class="col-md-4">
                        {{Form::number('cgpa', Null, ['class'=>'form-control'])}}
                      </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            {{ Form::submit('Submit', ['class'=>'btn btn-primary btn-block']) }}
                        </div>
                    </div>
                {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
