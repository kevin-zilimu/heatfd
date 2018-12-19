
@extends('layouts.app')
@section('content')

<h2>Data Read</h2>
<hr/>
<a class="btn btn-primary" href="/adminPanel/create" style="margin-bottom: 15px;">ADD COOK/DELIVER</a>
<div class="alert-custom">
    @include('inc.messages')  

</div>
<table class="table table-borderd table-striped">
    <thead class="thead-dark">
        <tr>
            <th style="padding-left:15px;" >#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>WeChat ID</th>
            <th>Role ID</th>
            <th width="110px;">Action</th>
            <th></th>
        </tr>
    </thead>
   <tbody>

    @if(count($users)>0)
    @foreach($users as $user)
    
    <tr>
            <td style="padding-left:15px">{!! $user->id !!}</td>
            <td>{!! $user->name !!}</td> 
            <td>{!! $user->email !!}</td>
            <td>+{!! $user->Phone_Number !!}</td>
            <td>{!! $user->Wechat_Id !!}</td>
            <td>{!! $user->Role_Id !!}</td>
            <td>
                <a class="btn btn-success btn-sm" href="/adminPanel/{!!$user->id!!}/edit">Edit</a></td>
                <td>
                {!!Form::open(['action'=>['adminController@destroy',$user->id],'method'=>'POST'])!!}
                {{Form::hidden('_method','DELETE')}}
                {{Form::submit('Del',['class'=>'btn btn-danger btn-sm'])}}
                {!!Form::close()!!}
            </td>
         </tr>  
    @endforeach
    @else 
        <p>No Post Found </p>
    @endif
    
       
   </tbody>
</table>
    
@endsection