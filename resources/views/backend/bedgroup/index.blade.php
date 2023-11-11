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
                <div class="col-lg-2">
                    <div class="card">
                        <div class="list-group">
                          <a href="{{Route('app.bed.index')}}" class="list-group-item list-group-item-action text-primary {{Request::is('app/bed/index')?'activate text-white':''}}">Bed</a>
                          <a href="{{Route('app.bedtype.index')}}" class="list-group-item list-group-item-action text-primary {{Request::is('app/bed/type/index')?'activate text-white':''}}">Bed Type</a>
                          <a href="{{Route('app.bedgroup.index')}}" class="list-group-item list-group-item-action text-primary {{Request::is('app/bed/group/index')?'activate text-white':''}}">Bed Group</a>
                          <a href="{{Route('app.floor.index')}}" class="list-group-item list-group-item-action text-primary {{Request::is('app/floor/index')?'activate text-white':''}}">Floor</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="card mb-4">
                        <span class="text-right mb-1">
                            <button class="btn btn-sm btn-primary mt-3 mr-3" id="bedGroupAddBtn"><i class="fa-solid fa-circle-plus"></i><span class="pl-1">Add New</span></button>
                          </span>
                        <div class="table-responsive p-3">
                          <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                            <thead class="thead-dark">
                              <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Floor</th>
                                <th>Description</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($bedgroups as $key=>$bedgroup)
                              <tr>
                                <td>{{$key+1}}</td>
                                <td><span class="text-primary">{{$bedgroup->name}}</span></td>
                                <td><span class="badge badge-warning">{{$bedgroup->price}}</span></td>
                                <td>{{$bedgroup->floor->name}}</td>
                                <td>{{$bedgroup->description}}</td>
                                <td>
                                  <div class="dropdown">
                                    <button class="btn btn-sm btn-primary" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      <i class="fa-solid fa-ellipsis-vertical"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                      <a class=" btn-sm btn-primary dropdown-item" onclick = "editBedGroup({{$bedgroup->id}})" href="javascript:void(0)"><i class="fa-regular fa-pen-to-square"></i>Edit</a>
                                      <a class=" btn-sm btn-danger dropdown-item"  onclick = 'deleteBedGroup({{$bedgroup->id}})' href="javascript:void(0)"><i class="fa-solid fa-trash"></i>Delete</a>
                                    </div>
                                  </div>
                                </td>
                              </tr>
                              @endforeach
                            </tbody>
                          </table>
                        </div>
                      </div>
                    
                      {{-- add bedgroup modal --}}
                    <div class="modal fade bd-example-modal-lg" id="bedGroupAddModel" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-md">
                          <div class="modal-content">
                            <div class="row">
                              <div class="col-lg-12">
                                  <div class="card mb-0">
                                    <div class="modal-header bg-primary text-white">
                                      <h5 class="modal-title" id="exampleModalLabel"><i class="fa-solid fa-sitemap"></i><span class="pl-1">Bed Group Add</span></h5>
                                      <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                      <div class="card-body">
                                          <form action="{{route('app.bedgroup.store')}}" method="POST">
                                              @csrf
                                              <div class="form-group">
                                                  <label>Floor</label>
                                                  <select name="floor_id" class="form-control @error('floor') is-invalid @enderror">
                                                      <option selected hidden>--Select One--</option>
                                                      @foreach ($floors as $floor)
                                                        <option value="{{$floor->id}}">{{$floor->name}}</option> 
                                                      @endforeach
                                                  </select>
                                                  @error('floor')
                                                  <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                                  @enderror
                                              </div>

                                                <div class="form-group">
                                                  <label for="floorName">Name</label>
                                                  <input id="" type="text" class="form-control" name="name" required>
                                                </div>

                                                <div class="form-group">
                                                  <label for="floorPrice">Price</label>
                                                  <input id="floorPrice" type="number" class="form-control" name="price" required>
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
                      
                      {{-- edit bedgroup modal --}}
                      <div class="modal fade bd-example-modal-lg" id="bedGroupEditModel" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-md">
                          <div class="modal-content">
                            <div class="row">
                              <div class="col-lg-12">
                                  <div class="card mb-4">
                                    <div class="modal-header bg-primary text-white">
                                      <h5 class="modal-title" id="exampleModalLabel"><i class="fa-solid fa-building"></i><span class="pl-1">Floor Edit</span></h5>
                                      <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                      <div class="card-body">
                                          <form action="{{route('app.bedgroup.update',[1])}}" method="POST">
                                              @csrf
                                                <input type="number" hidden name="bedgroup_id" id="bedgroup_id"> 
                                                <div class="form-group">
                                                  <label>Floor</label>
                                                  <select name="floor_id" id="floor_option" class="form-control @error('floor') is-invalid @enderror">
                                                      <option selected hidden>--Select One--</option>
                                                      @foreach ($floors as $floor)
                                                        <option value="{{$floor->id}}">{{$floor->name}}</option> 
                                                      @endforeach
                                                  </select>
                                                  @error('floor')
                                                  <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                                  @enderror
                                              </div> 
                                                <div class="form-group">
                                                  <label for="bedgroup_name">Name</label>
                                                  <input id="bedgroup_name" type="text" class="form-control" name="name" required>
                                                </div>

                                                <div class="form-group">
                                                  <label for="BedGroupPrice">Price</label>
                                                  <input id="bedGroupPrice" type="number" class="form-control" name="price" required>
                                                </div>
                      
                                                <div class="form-group">
                                                  <label for="bedgroup_description">Description</label>
                                                  <textarea id="bedgroup_description" type="text" class="form-control" name="description"></textarea>
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
    $("#bedGroupAddBtn").click(function(){
        $("#bedGroupAddModel").modal('show');
    });
</script>

<script>
  function editBedGroup(id){
    $.ajax({
      url         : '/app/bed/group/edit/'+id,
      type        : 'GET',
      dataType    : 'json',
      success     : function(response){
        console.log(response);
        $("#bedgroup_id").val(response.id);
        var data = `
          <option selected hidden value="${response.floor.id}">${response.floor.name}</option>
        `;
        $("#floor_option").append(data);
        $("#bedgroup_name").val(response.name);
        $("#bedgroup_description").val(response.description);
        $("#bedGroupPrice").val(response.price);
        $("#bedGroupEditModel").modal('show');
      }
    });
  }
</script>

<script>
  function deleteBedGroup(id){

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
              url      : '/app/bed/group/delete/'+id,
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
