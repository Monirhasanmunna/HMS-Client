@extends('layouts.backend.main')

@push('css')
 <style>
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
                      <div class="card-header">
                        <h3 class="card-title text-primary"><i class="fa-solid fa-user-group"></i><span class="pl-1">Role's</span></h3>
                        <div class="text-right">
                          <a href="{{Route('app.role.create')}}" id="roleAddBtn" class="btn btn-sm btn-primary pull-right">Add New</a>
                        </div>
                      </div>
                        <div class="table-responsive p-3">
                          <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                            <thead class="thead-dark">
                              <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Slug</th>
                                <th>Permission</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($roles as $key=>$role)
                              <tr>
                                <td>{{$key+1}}</td>
                                <td><span class="text-primary">{{$role->name}}</span></td>
                                <td>{{$role->slug}}</td>
                                <td>
                                  @if($role->permissions->count() > 0)
                                  <span class="badge badge-primary">{{$role->permissions->count()}}</span>
                                  @else
                                  <span class="badge badge-warning">No Permission Found :(</span>
                                  @endif
                                </td>
                                <td>
                                  <a href="{{Route('app.role.edit',$role->id)}}" class="btn btn-sm btn-primary">Edit</a>
                                  <a href="javascript::void(0);" onclick="roledelete({{$role->id}})" class="btn btn-sm btn-danger">Delete</a>
                                </td>
                              </tr>
                              @endforeach
                            </tbody>
                          </table>
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
  function roledelete(id){
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
              url      : '/app/role/delete/'+id,
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
