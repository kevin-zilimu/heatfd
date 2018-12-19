
@extends("layouts.app")
@section('content')
   
<a class="btn btn-outline-primary" href="/main" style="margin-bottom: 15px;">Home</a>
<hr/>
<a class="btn btn-outline-primary" href="/cookPosts/create" style="margin-bottom: 15px;">Create New Post</a>
<div class="alert-custom">
    @include('inc.messages')   

</div>
<table class="table table-borderd table-striped">
    <thead class="thead-dark">
        <tr>
            <th>Image</th>
            <th>Title</th>
            <th>Description</th>
            <th>Price</th>
            <th>Quantity</th>
            <th width="110px;">Action</th>
            <th></th>
            <th>Confirm</th>
        </tr>
    </thead>
   <tbody>

    @if(count($foodposts)>0)
    @foreach($foodposts as $foodpost)
    @if(Auth::id()==$foodpost->User_Id)
    <tr>
           
        <td>
    <img style="width:50px;height:50px" src="/storage/cover_images/{!! $foodpost->Image1 !!}"> 
        </td> 
            <td>{!!$foodpost->Title !!}</td>
            <td>{!! $foodpost->Description !!}</td>
            <td>${!! $foodpost->Price !!}</td>
            <td>{!! $foodpost->Quantity !!}</td>
            <td>
                <a class="btn btn-outline-success btn-sm" href="/cookPosts/{!!$foodpost->id!!}/edit">Edit</a></td>
                <td>
                {!!Form::open(['action'=>['foodPostsController@destroy',$foodpost->id],'method'=>'POST'])!!}
                {{Form::hidden('_method','DELETE')}}
                {{Form::submit('Delete',['class'=>'btn btn-outline-danger btn-sm'])}}
                {!!Form::close()!!}
            </td>
            <td>
                    {!! Form::open(['action' => 'OrderdisplayController@store','method' => 'POST','enctype'=>'multipart/form-data']) !!}
                   
   
                            {{Form::hidden('food_Id',$foodpost->id,['class'=>'form-control','placeholder'=>'food_Id'])}}
                      
                            {{Form::submit('POST',['class'=>'btn btn-outline-primary'])}}
                         {!! Form::close() !!} 
            </td>
         </tr>
    @endif  
    @endforeach
    @else 
        <p>No Post Found </p>
    @endif
    
       
   </tbody>
</table>
    
@endsection