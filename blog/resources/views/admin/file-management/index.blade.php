@extends('admin.layouts.master')
@section('content')
    <div class="content-header" xmlns="http://www.w3.org/1999/html">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{$title}}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">{{$title}}</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="content-header" >
        <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            @if(session('success'))
                            <div class="alert alert-success">
                                {{session()->get('success')}}
                            </div>
                            @endif
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">product List</h3>

                                        <div class="card-tools">
                                            <div class="input-group input-group-sm" style="width: 150px;">
                                                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                                <div class="input-group-append">
                                                    <button type="submit" class="btn btn-default">
                                                        <i class="fas fa-search"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <!-- /.card-header -->
                                <div class="card-body table-responsive p-0">
                                    <table class="table table-hover text-nowrap">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Files</th>
                                            <th>Download</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($files as $key=>$file )
                                        <tr>
                                            <td>{{$files->firstItem() + $key}}</td>
                                            <td>{{$file->title}}</td>
                                            <td><textarea class="form-control">{{$file->description}}</textarea></td>
                                            <td>
                                                {{$file->files}}
                                            </td>
                                            <td> <a class="btn btn-primary btn-xs" href="{{$file->files}}" download="{{$file->files}}"><i class="fa fa-download"></i></a> </td>
                                            <td>
                                                <form action="{{route('file-management.destroy', $file->id)}}" method="post" >
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-danger btn-xs" onclick="return confirm('Are You Confirm To Delete')" >Delete</button>
                                                </form>
                                            </td>

                                        </tr>
                                        @endforeach

                                        </tbody>
                                    </table>
                                </div>
                                {{$files->render()}}
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                    <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


@endsection
