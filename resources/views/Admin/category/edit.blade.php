<!DOCTYPE html>
<html lang="en">
<head>
    @include('Admin.Layout.head')
</head>
<body>
<div class="container-scroller">
    @include('Admin.Layout.sider')
    <div class="container-fluid page-body-wrapper">
        @include('Admin.Layout.navbar')
        <div class="main-panel">
            <div class="content-wrapper">

                <div class="card-body">
                    <h4 class="card-title">Edit Category Form</h4>

                    <form  action="{{route('category.update',$category->id)}}" class="forms-sample" method="POST"  enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <input type="hidden" value="{{$category->id}}" name="id">

                        <div class="form-group">
                            <label for="name">Update name</label>
                            <input type="text" class="form-control" value="{{$category->name}}" name="name" id="name" placeholder="Category name">
                        </div>

                        <div class="form-group">
                            <label for="description">Update Description</label>
                            <textarea class="form-control"  name="description" id="description">{{$category->description}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="image">Old image</label>
                            <img width="50" height="50" src="{{asset('categoriesImage/'.$category->image)}}">
                        </div>

                        <div class="form-group">
                            <label for="image">Update image</label>
                            <input class="form-control" type="file" name="image" id="description">
                        </div>

                        <div class="mt-3">
                            <button type="submit" class="btn btn-primary mr-2">Update</button>
                            <a href="{{route('category.index')}}" class="btn btn-dark">Cancel</a>
                        </div>
                    </form>
                </div>

            </div>
        </div>

    </div>
</div>
@include('Admin.Layout.js')
</body>
</html>
