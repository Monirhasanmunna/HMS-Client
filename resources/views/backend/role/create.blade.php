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
            {{-- <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <h4 class="text-primary"><i class="fa-solid fa-circle-check"></i>
                    @if (isset($role))
                        Roles Update
                    @else
                        Roles Create
                    @endif
                </h4>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <a class="btn btn-primary" href="{{route('app.role.index')}}"><i class="fa-solid fa-circle-arrow-left"></i><span>Go Back</span></a>
                </div>
            </div> --}}
    
    
            <div class="row mt-3">
                <div class="col-md-12">
                    <div class="main-card mb-3 card">
                        <div class="card-header">
                            <h3 class="card-title text-primary">
                                @if(isset($role))
                                <i class="fa-solid fa-square-pen"></i>
                                <span class="pl-1">Update Role</span>
                                @else
                                <i class="fa-solid fa-circle-plus"></i>
                                <span class="pl-1">Add Role</span>
                                @endif
                            </h3>
                            <div class="text-right">
                              <a href="{{Route('app.role.index')}}" id="roleAddBtn" class="btn btn-sm btn-primary pull-right">Back</a>
                            </div>
                          </div>
                        <form action="{{!isset($role) ? route('app.role.store') : route('app.role.update',[$role->id])}}" method="POST">
                            @csrf
                            @if (isset($role))
                                @method('PUT')
                            @endif
                            <div class="card-body">
                                <div class="form-group">
                                    <label style="color: #626262;" for="roles">Role Name :</label>
                                    <input class="form-control" id="roles" name="name" value="{{isset($role) ? $role->name : old('name')}}" type="text">
                                </div>
    
                                <div class="text-center mb-4"><strong>Manage Role Permission</strong></div>
    
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox"  id="select-all">
                                    <label class="form-check-label" for="select-all" >Select All</label>
                                </div>
    
                                @forelse ($modules->chunk(2) as $key => $chunk)
                                    <div class="row">
                                        @foreach ($chunk as $module)
                                            <div class="col">
                                                <h5>Module : {{$module->name}}</h5>
                                                @foreach ($module->permissions as $permission)
                                                    <div class="mb-3 ml-4">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="flexCheckDefault" name="permission[]" value="{{$permission->id}}"
                                                            @if(isset($role))
                                                            @foreach ($role->permissions as $rolePermissions)
                                                                {{$rolePermissions->id == $permission->id ? 'checked' : ''}}
                                                            @endforeach
                                                            @endif
                                                            >
                                                            <label class="form-check-label" for="flexCheckDefault" >{{$permission->name}}</label>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        @endforeach
                                    </div>
                                    
                                @empty
                                    <div class="row">
                                        <div class="col">
                                            <strong>No Module Found.</strong>
                                        </div>
                                    </div>
                                @endforelse
                            </div>
    
                            <div class="mt-3 ml-4 mb-3">
                                @if (isset($role))
                                    <button type="submit" class="btn btn-primary">Update</button> 
                                @else
                                   <button type="submit" class="btn btn-primary">Create</button> 
                                @endif
                                
                            </div>
                        </form>
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

    $('#select-all').click(function(event){

        if(this.checked) {
            $(':checkbox').each(function() {
                this.checked = true;
            });
        }else{
            $(':checkbox').each(function() {
                this.checked = false;
            });
        }

    });

</script>
    
@endpush

