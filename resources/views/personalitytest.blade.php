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

<!-- Multiple Radios (inline) -->
                    <div class="panel-heading">Please rate your skill standing. (1-Strongly Disagree 2-Disagree 3-Agree 4-Strongly Agree)</div>
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="radios">You are able to talk and present a topic in front of the class very well</label>
                      <div class="col-md-4"> 
                        <label class="radio-inline" for="radios-0">
                          <input type="radio" name="radios" id="radios-0" value="1" checked="checked">
                          1
                        </label> 
                        <label class="radio-inline" for="radios-1">
                          <input type="radio" name="radios" id="radios-1" value="2">
                          2
                        </label> 
                        <label class="radio-inline" for="radios-2">
                          <input type="radio" name="radios" id="radios-2" value="3">
                          3
                        </label> 
                        <label class="radio-inline" for="radios-3">
                          <input type="radio" name="radios" id="radios-3" value="4">
                          4
                        </label>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-md-4 control-label" for="radios">You are able to apply theorethical knowledge you learned in class into group work very well</label>
                      <div class="col-md-4"> 
                        <label class="radio-inline" for="radios-0">
                          <input type="radio" name="radios" id="radios-0" value="1" checked="checked">
                          1
                        </label> 
                        <label class="radio-inline" for="radios-1">
                          <input type="radio" name="radios" id="radios-1" value="2">
                          2
                        </label> 
                        <label class="radio-inline" for="radios-2">
                          <input type="radio" name="radios" id="radios-2" value="3">
                          3
                        </label> 
                        <label class="radio-inline" for="radios-3">
                          <input type="radio" name="radios" id="radios-3" value="4">
                          4
                        </label>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-md-4 control-label" for="radios">You are able to perform techniques in acquiring knowledge</label>
                      <div class="col-md-4"> 
                        <label class="radio-inline" for="radios-0">
                          <input type="radio" name="radios" id="radios-0" value="1" checked="checked">
                          1
                        </label> 
                        <label class="radio-inline" for="radios-1">
                          <input type="radio" name="radios" id="radios-1" value="2">
                          2
                        </label> 
                        <label class="radio-inline" for="radios-2">
                          <input type="radio" name="radios" id="radios-2" value="3">
                          3
                        </label> 
                        <label class="radio-inline" for="radios-3">
                          <input type="radio" name="radios" id="radios-3" value="4">
                          4
                        </label>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-md-4 control-label" for="radios">You are able to discuss and cooperate seamlessly</label>
                      <div class="col-md-4"> 
                        <label class="radio-inline" for="radios-0">
                          <input type="radio" name="radios" id="radios-0" value="1" checked="checked">
                          1
                        </label> 
                        <label class="radio-inline" for="radios-1">
                          <input type="radio" name="radios" id="radios-1" value="2">
                          2
                        </label> 
                        <label class="radio-inline" for="radios-2">
                          <input type="radio" name="radios" id="radios-2" value="3">
                          3
                        </label> 
                        <label class="radio-inline" for="radios-3">
                          <input type="radio" name="radios" id="radios-3" value="4">
                          4
                        </label>
                      </div>
                    </div>

                    </div>
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
