@extends('Admin.master')
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center">Category Item Table</h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Discription</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                @foreach($categories as $category)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$category->name}}</td>
                                    <td>{{$category->description}}</td>
                                    <td>
                                        <img src="{{$category->image}}" alt="" height="100">
                                    </td>
                                    <td>{{$category->status}}</td>
                                    <td>
                                        <a href="{{route('category.edit',['id'=>$category->id])}}" class="btn btn-success"><i class="fa fa-edit"></i></a>
                                        <a href="{{route('category.delete',['id'=>$category->id])}}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
