@extends('layouts.admin')
@section('title','All Posts')

@section('content')



<div id="page-wrapper">

    <div class="container-fluid">

                                <!-- Page Heading -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h1 class="page-header">
                                            All <small> Posts </small>
                                        </h1>
                                        <ol class="breadcrumb">
                                            <li class="active">
                                                <i class="fa fa-dashboard"></i> Below
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                                <!-- /.row -->

                                @include('errors.form_errors')

 
         <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Title</th>
                                                <th>Owner</th>
                                                <th>Category ID</th>
                                                <th>Photo ID</th>
                                                <th>Created</th>
                                                <th>Updated</th>
                                            </tr>
                                        </thead>

                                        @if($posts)
                                          @foreach($posts as $post)
                                        <tbody>
                                            <tr>
                                              <td>{{$post->id}}</td>
                                              <td><a href="/admin/posts/{{$post->id}}/edit">{{$post->title}}</a></td>
                                              <td>{{$post->user->name}}</td> 
                                              <td>{{$post->category?$post->category->name:"Uncategorized"}}</td>
                                              <td><img src="{{$post->photo?$post->photo->file:'http://placehold.it/350x150'}}"></td>      
                                              <td>{{$post->created_at->diffForHumans()}}</td>
                                              <td>{{$post->updated_at->diffForHumans()}}</td>

                                            </tr>
                                            @endforeach
                                          @endif
                                        </tbody>
                                    </table>
                                </div>
                             





  </div>
  <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

@stop