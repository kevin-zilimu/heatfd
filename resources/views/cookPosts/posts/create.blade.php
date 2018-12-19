@extends('layouts.app')

@section('content')

<hr />
<a class="btn btn-outline-info" href="/cookPosts" style="margin-bottom: 15px;">Go Back</a>
   <div class="card" style="align:center" >
                <div class="card-header">
                    <h1>Create Post</h1>
                </div>
<div class="card-body">
<div style="align:center;padding-left:100px;margin-bottom:50px;background-color:snow">
  {!! Form::open(['action' => 'foodPostsController@store','method' => 'POST','enctype'=>'multipart/form-data']) !!}
  <div class="form-group">
      {{Form::label('Title','Title')}}
      {{Form::text('Title','',['required','class'=>'form-control','placeholder'=>'Title'])}}
  </div>
  <div class="form-group">
    {{Form::label('Description','Description')}}
    {{Form::textarea('Description','',['required','id'=>'article-ckeditor','class'=>'form-control','placeholder'=>''])}}
</div>
<div class="form-group">
    {{Form::label('Quantity','Quantity')}}
    {{Form::number('Quantity','',['required','class'=>'form-control','placeholder'=>'Quantity'])}}
</div>
<div class="form-group">
    {{Form::label('Price','Price[$]')}}
    {{Form::number('Price','',['required','class'=>'form-control','placeholder'=>'Price'])}}
</div>
<div class="form-group">
    {{Form::file('Image1')}}
</div>
  <div class="form-group">
    {{Form::file('Image2')}}
</div>
<div class="form-group">
    {{Form::file('Image3')}}
</div>
<div class="form-group">
    {{Form::file('Image4')}}
</div>
<div class="form-group">
   
    {{Form::hidden('User_Id',Auth::id(),['class'=>'form-control','placeholder'=>'User_Id'])}}
</div>
    {{Form::submit('submit',['class'=>'btn btn-outline-primary'])}}
 {!! Form::close() !!}  
 <hr /> 
   </div>
</div>
   </div>
@endsection