@extends('layout.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                  @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif 

                   <a href="/posts/create" class="btn btn-primary">Create Post</a> 
                  @if(count($posts)>0)  
                   <table class="table table-striped">
                       <tr>
                           <th>Title</th>
                           <th></th>
                           <th></th>
                       </tr>

                       <tr>
                        @foreach($posts as $post)
                            <td>{{$post->title}}</td>
                       <td><a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a></td>
                            <td>

                                {!!Form::open(['action'=>['postController@destroy',$post->id],'method'=>'POST','class'=>'pull-right'])!!}
                                {{Form::hidden('_method','DELETE')}}
                                {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
                                {!!Form::close()!!}
                            </td>
                        </tr>
                    @endforeach
                   </table>
                   @else
                    <p>No post for You</p>
                   @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
