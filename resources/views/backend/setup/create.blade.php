@extends('layouts.backend.main')

@push('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css" integrity="sha512-In/+MILhf6UMDJU4ZhDL0R0fEpsp4D3Le23m6+ujDWXwl3whwpucJG1PEmI3B07nyJx+875ccs+yX2CqQJUxUw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 <style>
  .list-group-item.activate {
      background-color: #007bff;
      border-color: #007bff;
  }
</style>
<style>
    .material-symbols-outlined {
      font-variation-settings:
      'FILL' 0,
      'wght' 800,
      'GRAD' 0,
      'opsz' 425
    }

</style>
@endpush

@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row pt-3">
                <div class="col-md-12">
                    <div class="main-card mb-3 card">
                        <div class="card-header">
                            <h3 class="card-title text-primary">
                                <i class="fa-solid fa-square-pen"></i>
                                <span class="pl-1">Update Setup</span>
                            </h3>
                          </div>
                          <form action="{{route('app.setup.update',[$setup->id])}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="row">
                                <div class="col-7">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label style="color: #626262;" for="companyname"><strong>Company Name :</strong></label>
                                            <input class="form-control" id="companyname" name="company_name" value="{{$setup->company_name}}" type="text"
                                            class="@error('company_name') is-invalid @enderror">
    
                                            @error('company_name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
    
                                        <div class="form-group">
                                            <label style="color: #626262;" for="email"><strong>Email :</strong></label>
                                            <input class="form-control" id="email" name="email" value="{{$setup->email}}" type="email"
                                            class="@error('email') is-invalid @enderror">
    
                                            @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
    
                                        <div class="form-group">
                                            <label style="color: #626262;" for="phone"><strong>Phone :</strong></label>
                                            <input class="form-control" id="phone" name="phone" value="{{$setup->phone}}" type="number"
                                            class="@error('phone') is-invalid @enderror">
    
                                            @error('phone')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mt-3 ml-4 mb-3">
                                        <button type="submit" class="btn btn-primary">Update</button> 
                                    </div>
                                </div>
    
                                <div class="col-5">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label style="color: #626262;" for="address"><strong>Address :</strong></label>
                                            <input class="form-control" id="address" name="address" type="text" value="{{$setup->address}}"
                                            class="@error('address') is-invalid @enderror">
    
                                            @error('address')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label style="color: #626262;" for="copyright_text"><strong>Copyright Text :</strong></label>
                                            <input class="form-control" id="copyright_text" name="copyright_text" type="text" value="{{$setup->copyright_text}}"
                                            class="@error('copyright_text') is-invalid @enderror">
    
                                            @error('copyright_text')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="customFile">Custom File</label>
                                            <div class="custom-file">
                                              <input type="file" name="logo" class="custom-file-input" id="customFile" onchange="document.getElementById('logo').src = window.URL.createObjectURL(this.files[0])"
                                              class="@error('logo') is-invalid @enderror">
                                              <label class="custom-file-label" for="customFile">Choose Logo</label>
                                              @error('logo')
                                              <span class="text-danger">{{ $message }}</span>
                                              @enderror
                                            </div>
                                            <img class="mt-2" id="logo" src="{{isset($setup)?asset('storage/logo/'.$setup->logo): ''}}" alt="logo" width="100" height="100" style="border-radius: 50%"/>
                                          </div>

                                    </div>
                                </div>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js" integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
    // In your Javascript (external .js resource or <script> tag)
    $(document).ready(function() {
        $('.dropify').dropify();
    });
</script>
    
@endpush

