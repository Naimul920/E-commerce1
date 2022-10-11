@extends('Admin.master')
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="text-center ">Edit Category</h2>
                        </div>
                        <div class="card-body">
                            <form action="{{route('category.update',['id'=>$category->id])}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <label for="" class="col-md-3 text-right">Category Name:</label>
                                    <div class="col-md-9">
                                        <input type="text" name="name" class="form-control" value="{{$category->name}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-3 text-right">Category Description:</label>
                                    <div class="col-md-9">
                                        <textarea type="text" name="description" class="form-control">{{$category->description}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-3 text-right">Category Image:</label>
                                    <div class="col-md-9">
                                        <input type="file" name="image" class="form-control-file">
                                        <img src="{{$category->image}}" height="50" alt="image">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-3 text-right">Category Status:</label>
                                    <div class="col-md-9">
                                        <label for=""><input type="radio" name="status" {{$category->status==1 ? 'checked' : ''}} value="1"> Published</label>
                                        <label for=""><input type="radio" name="status" {{$category->status==0 ? 'checked' : ''}} value="0"> Unpublished</label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-3 text-right"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-success" value="Update Category">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
