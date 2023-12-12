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
                    <h4 class="card-title">Add Category Form</h4>

                    <form  action="{{route('category.store')}}" class="forms-sample" method="POST"  enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Category name">
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" name="description" id="description"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="image">image</label>
                            <input class="form-control" type="file" name="image" id="description">
                        </div>

                        <div class="mt-3">
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <button class="btn btn-dark">Cancel</button>
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
