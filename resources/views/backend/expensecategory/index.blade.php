@extends('layouts.backend.main')

@push('css')
 <style>
    .select2-container--default .select2-selection--single {
    background-color: #fff;
    border: 1px solid #aaa;
    border-radius: 4px;
    padding-top: 2px;
}


.list-group-item.activate {
    background-color: #007bff;
    border-color: #007bff;
}
</style>
@endpush

@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row pt-3">
                <div class="col-lg-12">
                    <div class="card mb-4">
                        <span class="text-right mb-1">
                            <button class="btn btn-sm btn-primary mt-3 mr-3" id="expcategoryAdd"><i class="fa-solid fa-circle-plus"></i><span class="pl-1">Add New</span></button>
                          </span>
                        <div class="table-responsive p-3">
                          <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                            <thead class="thead-dark">
                              <tr>
                                <th style="width: 100px">#</th>
                                <th style="width: 400px">Name</th>
                                <th style="width: 500px">Description</th>
                                <th class="text-center">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($expenseCategories as $key=>$expcategory)
                              <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$expcategory->name}}</td>
                                <td>{{$expcategory->description??'N/A'}}</td>
                                <td class="text-center">
                                  <a class=" btn-sm btn-primary" onclick = "editexpcategory({{$expcategory->id}})" href="javascript:void(0)"><i class="fa-regular fa-pen-to-square"></i>Edit</a>
                                  <a class=" btn-sm btn-danger"  onclick = 'deleteexpcategory({{$expcategory->id}})' href="javascript:void(0)"><i class="fa-solid fa-trash"></i>Delete</a>
                                </td>
                              </tr>
                              @endforeach
                            </tbody>
                          </table>
                        </div>
                      </div>
                    
                      {{-- add expcategory modal --}}
                    <div class="modal fade bd-example-modal-lg" id="expcategoryAddModel" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-md">
                          <div class="modal-content">
                            <div class="row">
                              <div class="col-lg-12">
                                  <div class="card mb-0">
                                    <div class="modal-header bg-primary text-white">
                                      <h5 class="modal-title" id="exampleModalLabel"><i class="fa-solid fa-building"></i><span class="pl-1">Expense Category Add</span></h5>
                                      <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                      <div class="card-body">
                                          <form action="{{route('app.expcategory.store')}}" method="POST">
                                              @csrf
                                                <div class="form-group">
                                                  <label for="expcategoryName">Name</label>
                                                  <input id="" type="text" class="form-control" name="name" required>
                                                </div>
                      
                                                <div class="form-group">
                                                  <label for="description">Description</label>
                                                  <textarea id="" type="text" class="form-control" name="description"></textarea>
                                                </div>
                                      
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                          </form>
                                        </div>
                                  </div>
                                </div>
                          </div>
                          </div>
                        </div>
                      </div>
                      
                      {{-- edit expcategory modal --}}
                      <div class="modal fade bd-example-modal-lg" id="expcategoryeditModel" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-md">
                          <div class="modal-content">
                            <div class="row">
                              <div class="col-lg-12">
                                  <div class="card mb-4">
                                    <div class="modal-header bg-primary text-white">
                                      <h5 class="modal-title" id="exampleModalLabel"><i class="fa-solid fa-building"></i><span class="pl-1">Expense Category Edit</span></h5>
                                      <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                      <div class="card-body">
                                          <form action="{{route('app.expcategory.update',[1])}}" method="POST">
                                              @csrf
                                                <input type="number" hidden name="expcategory_id" id="expcategory_id">
                                                <div class="form-group">
                                                  <label for="expcategoryName">Name</label>
                                                  <input id="expcategory_name" type="text" class="form-control" name="name" required>
                                                </div>
                      
                                                <div class="form-group">
                                                  <label for="description">Description</label>
                                                  <textarea id="expcategory_description" type="text" class="form-control" name="description"></textarea>
                                                </div>
                                      
                                                <button type="submit" class="btn btn-primary">Update</button>
                                          </form>
                                        </div>
                                  </div>
                                </div>
                          </div>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
        <section>
</div>
@endsection

@push('js')
{{-- <!-- Select2 -->
<script src="{{asset('backend/plugins/select2/js/select2.full.min.js')}}"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"
    integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
  $(".js-example-placeholder-single").select2({
      placeholder: "--Select One--",
      allowClear: true
  });
</script>

<script>
    $("#expcategoryAdd").click(function(){
        $("#expcategoryAddModel").modal('show');
    });
</script>

<script>
  function editexpcategory(id){
    $.ajax({
      url         : '/app/account/expense/category/edit/'+id,
      type        : 'GET',
      dataType    : 'json',
      success     : function(response){
        console.log(response);
        $("#expcategory_id").val(response.id);
        $("#expcategory_name").val(response.name);
        $("#expcategory_description").val(response.description);
        $("#expcategoryeditModel").modal('show');
      }
    });
  }
</script>

<script>
  function deleteexpcategory(id){

      Swal.fire({
          title: 'Are you sure?',
          text: "You will lost this data!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!'
          }).then((result) => {
          if (result.isConfirmed) {
              Swal.fire(
              'Deleted!',
              'Your file has been deleted.',
              'success'
              )
              $.ajax({
              url      : '/app/account/expense/category/delete/'+id,
              dataType : 'json',
              Type     : 'Delete',
              success  : function(response){
                  setTimeout(function(){
                  window.location.reload();
                  },1000);
              },
              });
          }
      });
  }
</script>
@endpush
