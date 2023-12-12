<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 style="color:red;" class="modal-title" id="exampleModalLabel">delete Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-body">

                    <form  action="{{route('category.destroy',$category->id)}}" class="forms-sample" method="POST"  enctype="multipart/form-data">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" value="{{$category->id}}" name="id">
                        <h4 style="color: red">    Are You Sure to Delete {{$category->name }} ?</h4>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
