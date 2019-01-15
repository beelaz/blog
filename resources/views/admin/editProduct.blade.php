@extends('layouts.admin')
@section('title')Edit Product
@endsection

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-light">
                        Edit Product
                    </div>
                    @if(Session::has('success'))
                        <div class="alert alert-success">{{Session::get('success')}}</div>
                    @endif

                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{route('adminEditProduct',$product->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                    <div class="card-body">
                       
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="normal-input" class="form-control-label">Thumbnail</label>
                                    <input type="file" id="normal-input" name="thumbnail" class="form-control">
                                </div>
                                <img src="{{asset($product->thumbnail)}}" width ="100"> 
                            </div>                     
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="normal-input" class="form-control-label">Title</label>
                                    <input  id="normal-input" value="{{$product->title}}" name="title" class="form-control" placeholder="title">
                                </div>
                            </div>                       
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="placeholder-input" class="form-control-label">Description</label>
                                    <textarea name="description" class="form-control" placeholder="Description" id="" cols="30" rows="10">{{$product->description}}</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="normal-input" class="form-control-label">Price</label>
                                    <input  id="normal-input" value="{{$product->price}}" name="price" class="form-control" placeholder="10.00">
                                </div>
                            </div>                       
                        </div>

                        <button type="submit" class="btn btn-success">Update product</button>
                                    
                    </div>
                    </form>
                </div>
            </div>
        </div>
</div>

@endsection
