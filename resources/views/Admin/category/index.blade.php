<!DOCTYPE html>
<html lang="en">
<head>
    @include('Admin.Layout.head')
</head>
<body>
@if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<div class="container-scroller">
    @include('Admin.Layout.sider')
    <div class="container-fluid page-body-wrapper">
        @include('Admin.Layout.navbar')
        <div class="main-panel">
            <div class="content-wrapper">

                <div class="card-body">
                    <a href="{{route('category.create')}}" class="btn btn-light">Add Category</a>
                    <hr>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th> # </th>
                                <th>name</th>
                                <th> description </th>
                                <th> image </th>
                                <th> actions </th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $i=0;
                            $i++;
                            ?>
                 @foreach($categories as $category)

                            <tr>
                                <td>{{$i}}</td>
                                <td> {{$category->name}} </td>
                                <td> {{$category->description}} </td>
                                <td> <img src="{{asset('categoriesImage/'.$category->image)}}"> </td>
                                <td>
                                    <a href="{{route('category.edit',$category->id)}}" class="btn btn-primary">Edit</a>
{{--                                    <a href="{{route('category.destroy',$category->id)}}" class="btn btn-danger">X</a>--}}
                                    <a  class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">X</a>
                                </td>


                            </tr>
                     @include('Admin.category.delete')
                 @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@include('Admin.Layout.js')
</body>
</html>
