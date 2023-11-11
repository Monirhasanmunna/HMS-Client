@extends('layouts.backend.main')

@push('css')
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css"integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw=="crossorigin="anonymous" referrerpolicy="no-referrer" />
 <link rel="stylesheet" href="{{asset('backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
 <style>
    .select2-container--default .select2-selection--single {
    background-color: #fff;
    border: 1px solid #aaa;
    border-radius: 4px;
    padding-top: 2px;
}
 </style>
@endpush

@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row pt-3">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title text-primary ">
                            @if(!isset($patient))
                            <i class="fa-solid fa-circle-plus"></i>
                            @else
                            <i class="fa-solid fa-spinner"></i>
                            @endif

                            <span class="pl-1">
                            @if(!isset($patient))
                            Patinet Add
                            @else
                            Patinet Update
                            @endif
                            </span></h3>
                        </div>
                        <div class="card-body">
                            <form action="{{isset($patient)? Route('app.patient.update',[$patient->id]): Route('app.patient.store')}}" method="POST">
                                @if(isset($patient))
                                    @method('PUT')
                                @endif
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-4">
                                        <label>Doctor</label>
                                        <select name="doctor_id" class="js-example-placeholder-single js-states form-control @error('doctor') is-invalid @enderror" style="width: 100%">
                                            <option></option>
                                            @foreach ($doctors as $doctor)
                                               <option value="{{$doctor->id}}"
                                                @if(isset($patient))
                                                {{($patient->doctor_id == $doctor->id)?'selected':''}}
                                                @endif
                                                >{{$doctor->name}}</option> 
                                            @endforeach
                                        </select>
                                        @error('doctor')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>

                                    <div class="form-group col-4">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" class="form-control form-control-sm @error('name') is-invalid @enderror" id="name" placeholder="Enter Name" value="{{ $patient->name ?? old('name') }}">
                                        @error('name')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>

                                    <div class="form-group col-4">
                                        <label for="age">Age</label>
                                        <input type="number" name="age" class="form-control form-control-sm @error('age') is-invalid @enderror" id="age" placeholder="Enter Age" value="{{ $patient->age ?? old('age') }}">
                                        @error('name')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-4">
                                        <label for="address">Address</label>
                                        <input type="text" name="address" class="form-control form-control-sm @error('address') is-invalid @enderror" id="address" placeholder="Enter Address" value="{{ $patient->address ?? old('address') }}">
                                        @error('address')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>

                                    <div class="form-group col-4">
                                        <label for="mobile">Mobile</label>
                                        <input type="number" name="mobile" class="form-control form-control-sm @error('mobile') is-invalid @enderror" id="mobile" placeholder="Enter Mobile" value="{{ $patient->mobile ?? old('mobile') }}">
                                        @error('mobile')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>

                                    <div class="form-group col-4">
                                        <label for="weight">Weight</label>
                                        <input type="number" name="weight" class="form-control form-control-sm @error('weight') is-invalid @enderror" id="weight" placeholder="Enter Weight" value="{{ $patient->weight ?? old('weight') }}">
                                        @error('weight')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-row">
                                    
                                


                                    
                                </div>

                                <div class="form-row">
                                    <div class="form-group clearfix col-4 pt-4">
                                        <label for="pulse" class="pr-3">Sex:</label>
                                        <div class="icheck-primary d-inline">
                                          <input type="checkbox" id="checkboxPrimary1" value="male" name="sex" @if(isset($patient)){{($patient->sex == 'male')? 'checked' : ''}}@endif>
                                          <label for="checkboxPrimary1">
                                            Male
                                          </label>
                                        </div>
                                        <div class="icheck-primary d-inline">
                                          <input type="checkbox" id="checkboxPrimary2" value="female" name="sex" @if(isset($patient)){{($patient->sex == 'female')? 'checked' : ''}}@endif>
                                          <label for="checkboxPrimary2">
                                            Female
                                          </label>
                                        </div>
                                        <div class="icheck-primary d-inline">
                                          <input type="checkbox" id="checkboxPrimary3" value="others" name="sex" @if(isset($patient)){{($patient->sex == 'others')? 'checked' : ''}}@endif>
                                          <label for="checkboxPrimary3">
                                            Others
                                          </label>
                                        </div>
                                      </div>

                                      <div class="form-group clearfix col-4 pt-4">
                                        <label for="married" class="pr-3">Maritial Status:</label>
                                        <div class="icheck-primary d-inline">
                                          <input type="checkbox" id="married" value="married" name="maritial_status" @if(isset($patient)){{($patient->maritial_status == 'married')? 'checked' : ''}}@endif>
                                          <label for="married">
                                            Married
                                          </label>
                                        </div>
                                        <div class="icheck-primary d-inline">
                                          <input type="checkbox" id="single" value="single" name="maritial_status" @if(isset($patient)){{($patient->maritial_status == 'single')? 'checked' : ''}}@endif>
                                          <label for="single">
                                            Single
                                          </label>
                                        </div>
                                      </div>

                                      <div class="form-group col-4">
                                        <label>Blood Group</label>
                                        <select name="blood_group" class="js-example-placeholder-single js-states form-control @error('blood_group') is-invalid @enderror" style="width: 100%">
                                            <option></option>
                                            @foreach ($bloods as $blood)
                                               <option value="{{$blood->name}}"
                                                @if(isset($patient))
                                                {{($patient->blood_group == $blood->name)?'selected':''}}
                                                @endif
                                                >{{$blood->name}}</option> 
                                            @endforeach
                                        </select>
                                        @error('blood')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-4">
                                        <label for="ocupation">Ocupation</label>
                                        <input type="text" name="ocupation" class="form-control form-control-sm @error('ocupation') is-invalid @enderror" id="temp" placeholder="Enter Ocupation" value="{{ $patient->ocupation ?? old('ocupation') }}">
                                        @error('ocupation')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-4">
                                        <label for="religion">Religion</label>
                                        <input type="text" name="religion" class="form-control form-control-sm @error('religion') is-invalid @enderror" id="temp" placeholder="Enter religion" value="{{ $patient->religion ?? old('religion') }}">
                                        @error('religion')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                
                    
                                @if(!isset($patient))
                                <button type="submit" class="btn btn-primary"><i class="fa-solid fa-circle-plus"></i><span class="pl-1">Submit</span></button>
                                @else
                                <button type="submit" class="btn btn-primary"><i class="fa-solid fa-spinner"></i><span class="pl-1">Update</span></button>
                                @endif
                            </form>
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

@endpush
