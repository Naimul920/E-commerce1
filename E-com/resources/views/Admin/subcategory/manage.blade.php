@extends('Admin.master')
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center">Sub-Category Item Table</h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <tr>
                                    <th>#</th>
                                    <th>Category ID</th>
                                    <th>Sub Category Name</th>
                                    <th>Discription</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                @foreach($subcategories as $subcategory)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$subcategory->category->name}}</td>
                                        <td>{{$subcategory->name}}</td>
                                        <td>{{$subcategory->description}}</td>
                                        <td>
                                            <img src="{{$subcategory->image}}" alt="" height="100">
                                        </td>
                                        <td>{{$subcategory->status}}</td>
                                        <td>
                                            <a href="{{route('edit.sub-category',['id'=>$subcategory->id])}}" class="btn btn-success"><i class="fa fa-edit"></i></a>
                                            <a href="{{route('delete.sub-category',['id'=>$subcategory->id])}}" class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i></a>
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
