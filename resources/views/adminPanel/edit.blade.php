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
<div style="align:center;padding-left:200px;margin-bottom:30px">
{!!Form::open(['action' => ['adminController@update',$users->id],'method' => 'POST','enctype'=>'multipart/form-data'])!!}
<div class="form-group">
     {{Form::label('name','Name')}}
     {!!Form::text('name',$users->name,['required','class'=>'form-control col-sm-6 col-form-label','placeholder'=>'Enter Cook/Deliver Name'])!!}
</div>
<div class="form-group">
     {{Form::label('exampleInputEmail1','Email')}}
     {!!Form::email('email',$users->email,['required','class'=>'form-control col-sm-6 col-form-label','placeholder'=>'Enter Cook/Deliver '])!!}
</div>
<div class="form-group">
     {{Form::label('password','Password')}}
     {!!Form::password('password',['required','class'=>'form-control col-sm-6 col-form-label','placeholder'=>'Password'])!!}
</div>
<div class="form-group">
     {{Form::label('phonenumber','Phone Number')}}
     {!!Form::tel('Phone_Number',$users->Phone_Number,['required','class'=>'form-control col-sm-6 col-form-label','placeholder'=>'Phone Number'])!!}
</div>
<div class="form-group">
     {{Form::label('wechatid','WeChat Id')}}
     {!!Form::tel('Wechat_Id',$users->Wechat_Id,['class'=>'form-control col-sm-6 col-form-label','placeholder'=>'WeChat ID'])!!}
</div>
<div class="form-group">
     {{Form::label('Roleid','Role Id')}}
     {!!Form::number('Role_Id',$users->Role_Id,['required','class'=>'form-control col-sm-6 col-form-label','placeholder'=>'Phone Number'])!!}
</div>
<div class="form-group">
     {{Form::label('location','Location')}}
     {!!Form::text('Location',$users->Location,['required','class'=>'form-control col-sm-6 col-form-label','placeholder'=>'Location'])!!}
</div>
{!!Form::hidden('_method','PUT')!!}
<hr />
{!! Form::submit('Update',['class'=>'btn btn-primary pull-right'])!!}

{!! Form::close() !!}
   
</div> 
</div> 
</div>
</div>
@endsection