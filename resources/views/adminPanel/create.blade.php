@extends('layouts.app')

@section('content')
   <hr />
   <div class="card" style="align:center" >
                <a class="btn btn-primary btn-sm" href="/adminPanel" style="width:100px">View Data</a>
                <hr />
                <div class="card-header">
                Add Cook/Deliver Information
                 </div>
   
   <div class="card-body">
           @if(count($errors)>0)
                <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                <p>{{$error}}</p>  
                        @endforeach
                </div>

           @endif
   <div style="align:center;padding-left:200px;margin-bottom:50px">
{!!Form::open(['id'=>'dataForm','url' => 'adminPanel'])!!}
<div class="form-group">
        {{Form::label('name','Name')}}
        {!!Form::text('name','',['required','class'=>'form-control col-sm-6 col-form-label','placeholder'=>'Enter Cook/Deliver Name'])!!}
</div>
<div class="form-group">
        {{Form::label('exampleInputEmail1','Email')}}
        {!!Form::email('email','eg. zilimu@heatfos.com',['required','class'=>'form-control col-sm-6 col-form-label','placeholder'=>'Enter Cook/Deliver '])!!}
</div>
<div class="form-group">
        {{Form::label('password','Password')}}
        {!!Form::password('password',['required','class'=>'form-control col-sm-6 col-form-label','placeholder'=>'Password'])!!}
</div>
<div class="form-group">
        {{Form::label('phonenumber','Phone Number')}}
        {!!Form::tel('Phone_Number','',['required','class'=>'form-control col-sm-6 col-form-label','placeholder'=>'Phone Number'])!!}
</div>
<div class="form-group">
        {{Form::label('wechatid','WeChat Id')}}
        {!!Form::tel('Wechat_Id','',['class'=>'form-control col-sm-6 col-form-label','placeholder'=>'WeChat ID'])!!}
</div>
<div class="form-group">
        {{Form::label('Roleid','Role Id')}}
        {!!Form::number('Role_Id','',['required','class'=>'form-control col-sm-6 col-form-label','placeholder'=>'Phone Number'])!!}
</div>
<div class="form-group">
        {{Form::label('location','Location')}}
        {!!Form::text('Location','',['required','class'=>'form-control col-sm-6 col-form-label','placeholder'=>'Location'])!!}
</div>
<hr />
 {!! Form::submit('Add',['class'=>'btn btn-primary pull-right'])!!}

{!! Form::close() !!}
      
   </div> 
   </div> 
   </div>
   </div>
@endsection