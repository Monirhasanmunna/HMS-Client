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
                            <button class="btn btn-sm btn-primary mt-3 mr-3" id="bedAddBtn"><i class="fa-solid fa-circle-plus"></i><span class="pl-1">Add New</span></button>
                          </span>
                        <div class="table-responsive p-3">
                          <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                            <thead class="thead-dark">
                              <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Bed Type</th>
                                <th>Bed Group</th>
                                <th>Floor</th>
                                <th>Status</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($beds as $key=>$bed)
                              <tr>
                                <td>{{$key+1}}</td>
                                <td><span class="text-primary">{{$bed->name}}</span></td>
                                <td>{{$bed->bedtype->name}}</td>
                                <td>{{$bed->bedgroup->name}}</td>
                                <td>{{$bed->bedgroup->floor->name}}</td>
                                <td>
                                  @if($bed->status == true)
                                  <span class="badge badge-danger">Used</span>
                                  @else
                                  <span class="badge badge-primary">Not Used</span>
                                  @endif
                                </td>
                                <td>
                                  <div class="dropdown">
                                    <button class="btn btn-sm btn-primary" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      <i class="fa-solid fa-ellipsis-vertical"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                      <a class=" btn-sm btn-primary dropdown-item" onclick = "editbed({{$bed->id}})" href="javascript:void(0)"><i class="fa-regular fa-pen-to-square"></i>Edit</a>
                                      <a class=" btn-sm btn-danger dropdown-item"  onclick = 'deletebed({{$bed->id}})' href="javascript:void(0)"><i class="fa-solid fa-trash"></i>Delete</a>
                                    </div>
                                  </div>
                                </td>
                              </tr>
                              @endforeach
                            </tbody>
                          </table>
                        </div>
                      </div>
                    
                      {{-- add bed modal --}}
                    <div class="modal fade bd-example-modal-lg" id="bedAddModel" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-md">
                          <div class="modal-content">
                            <div class="row">
                              <div class="col-lg-12">
                                  <div class="card mb-0">
                                    <div class="modal-header bg-primary text-white">
                                      <h5 class="modal-title" id="exampleModalLabel"><i class="fa-solid fa-sitemap"></i><span class="pl-1">Bed Add</span></h5>
                                      <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                      <div class="card-body">
                                          <form action="{{route('app.bed.store')}}" method="POST">
                                              @csrf
                                              
                                                <div class="form-group">
                                                  <label for="floorName">Name</label>
                                                  <input id="" type="text" class="form-control" name="name" required>
                                                </div>

                                                <div class="form-group">
                                                  <label>Bed Type</label>
                                                  <select name="bedtype" class="form-control @error('bedtype') is-invalid @enderror">
                                                      <option selected hidden>--Select One--</option>
                                                      @foreach ($bedtypes as $bedtype)
                                                        <option value="{{$bedtype->id}}">{{$bedtype->name}}</option> 
                                                      @endforeach
                                                  </select>
                                                  @error('bedtype')
                                                  <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                                  @enderror
                                              </div>

                                                <div class="form-group">
                                                  <label>Bed Group</label>
                                                  <select name="bedgroup" class="form-control @error('bedgroup') is-invalid @enderror">
                                                      <option selected hidden>--Select One--</option>
                                                      @foreach ($bedgroups as $bedgroup)
                                                        <option value="{{$bedgroup->id}}">{{$bedgroup->name}}</option> 
                                                      @endforeach
                                                  </select>
                                                  @error('bedgroup')
                                                  <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                                  @enderror
                                              </div>
                      
                                              <div class="form-group">
                                                  <div class="icheck-primary d-inline">
                                                    <input type="checkbox" id="status" value="1" name="status">
                                                    <label for="status">
                                                      Status
                                                    </label>
                                                  </div>
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
                      
                      {{-- edit bed modal --}}
                      <div class="modal fade bd-example-modal-lg" id="bedEditModel" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-md">
                          <div class="modal-content">
                            <div class="row">
                              <div class="col-lg-12">
                                  <div class="card mb-4">
                                    <div class="modal-header bg-primary text-white">
                                      <h5 class="modal-title" id="exampleModalLabel"><i class="fa-solid fa-sitemap"></i><span class="pl-1">Bed Edit</span></h5>
                                      <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                      <div class="card-body">
                                          <form action="{{route('app.bed.update',[1])}}" method="POST">
                                              @csrf
                                                <input type="number" hidden name="bed_id" id="bed_id">

                                                <div class="form-group">
                                                  <label for="bedname">Name</label>
                                                  <input id="name" type="text" class="form-control" name="name" required>
                                                </div>

                                                <div class="form-group">
                                                  <label>Bed Type</label>
                                                  <select name="bedtype" id="bedtype" class="form-control @error('bedtype') is-invalid @enderror">
                                                      @foreach ($bedtypes as $bedtype)
                                                        <option value="{{$bedtype->id}}">{{$bedtype->name}}</option> 
                                                      @endforeach
                                                  </select>
                                                  @error('bedtype')
                                                  <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                                  @enderror
                                              </div>

                                                <div class="form-group">
                                                  <label>Bed Group</label>
                                                  <select name="bedgroup" id="bedgroup" class="form-control @error('bedgroup') is-invalid @enderror">
                                                      @foreach ($bedgroups as $bedgroup)
                                                        <option value="{{$bedgroup->id}}">{{$bedgroup->name}}</option> 
                                                      @endforeach
                                                  </select>
                                                  @error('bedgroup')
                                                  <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                                  @enderror
                                              </div>
                      
                                              <div class="form-group">
                                                  <div class="icheck-primary d-inline">
                                                    <input type="checkbox" id="bedstatus" value="1" name="status">
                                                    <label for="bedstatus">
                                                      Status
                                                    </label>
                                                  </div>
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
    $("#bedAddBtn").click(function(){
        $("#bedAddModel").modal('show');
    });
</script>

<script>
  function editbed(id){
    $.ajax({
      url         : '/app/bed/edit/'+id,
      type        : 'GET',
      dataType    : 'json',
      success     : function(response){
        console.log(response);
        $("#bed_id").val(response.id);
        var bedtype = `
          <option selected hidden value="${response.bedtype.id}">${response.bedtype.name}</option>
        `;
        var bedgroup = `
          <option selected hidden value="${response.bedgroup.id}">${response.bedgroup.name}</option>
        `;
        $("#bedtype").append(bedtype);
        $("#bedgroup").append(bedgroup);
        $("#name").val(response.name);
        if(response.status == 1){
              $("#bedstatus").attr("checked",true);
              $("#bedstatus").val(response.status);
          }
        $("#bedEditModel").modal('show');
      }
    });
  }
</script>

<script>
  function deletebed(id){

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
              url      : '/app/bed/delete/'+id,
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
