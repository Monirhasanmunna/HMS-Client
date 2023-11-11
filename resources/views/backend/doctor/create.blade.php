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
                            @if(!isset($doctor))
                            <i class="fa-solid fa-circle-plus"></i>
                            @else
                            <i class="fa-solid fa-spinner"></i>
                            @endif

                            <span class="pl-1">
                            @if(!isset($doctor))
                            Doctor Add
                            @else
                            Doctor Update
                            @endif
                            </span></h3>

                        </div>
                        <div class="card-body">
                            <form action="{{isset($doctor)? Route('app.doctor.update',[$doctor->id]): Route('app.doctor.store')}}" method="POST">
                                @if(isset($doctor))
                                    @method('PUT')
                                @endif

                                @csrf
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Enter Name" value="{{ $doctor->name ?? old('name') }}">
                                            @error('name')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" name="email" class="form-control  @error('email') is-invalid @enderror" id="email" placeholder="Enter Email" value="{{ $doctor->email ?? old('email') }}">
                                            @error('email')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="degrees">Degrees</label>
                                            <input type="text" name="degrees" class="form-control  @error('degrees') is-invalid @enderror" id="degrees" placeholder="Enter Degrees" value="{{ $doctor->degrees ?? old('degrees') }}">
                                            @error('degrees')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="specialist">Specialist</label>
                                            <input type="text" name="specialist" class="form-control  @error('specialist') is-invalid @enderror" id="specialist" placeholder="Enter Specialist" value="{{ $doctor->specialist ?? old('specialist') }}">
                                            @error('specialist')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="designation">Designation</label>
                                            <input type="text" name="designation" class="form-control  @error('designation') is-invalid @enderror" id="designation" placeholder="Enter Designation" value="{{ $doctor->designation ?? old('designation') }}">
                                            @error('designation')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="coc">Consultant Of College</label>
                                            <input type="text" name="consultant_of_college" class="form-control  @error('consultant_of_college') is-invalid @enderror" id="coc" placeholder="Enter College Name" value="{{ $doctor->consultant_of_college ?? old('consultant_of_college') }}">
                                            @error('consultant_of_college')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="mobile">Mobile</label>
                                            <input type="number" name="mobile" class="form-control  @error('mobile') is-invalid @enderror" id="mobile" placeholder="Enter Phone Number" value="{{ $doctor->mobile ?? old('mobile') }}">
                                            @error('mobile')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="firstVisit">First Visit</label>
                                            <input type="text" name="firstVisit" class="form-control  @error('firstVisit') is-invalid @enderror" id="firstVisit" placeholder="First Visit Amount" value="{{ $doctor->firstVisit ?? old('firstVisit') }}">
                                            @error('firstVisit')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="nextVisit">Next Visit</label>
                                            <input type="text" name="nextVisit" class="form-control  @error('nextVisit') is-invalid @enderror" id="nextVisit" placeholder="Next Visit Amount" value="{{ $doctor->nextVisit ?? old('nextVisit') }}">
                                            @error('nextVisit')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="reportOnly">Report Only</label>
                                            <input type="text" name="reportOnly" class="form-control  @error('reportOnly') is-invalid @enderror" id="reportOnly" placeholder="Report Only Amount" value="{{ $doctor->reportOnly ?? old('reportOnly') }}">
                                            @error('reportOnly')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="name">নাম</label>
                                            <input type="text" name="b_name" class="form-control @error('নাম') is-invalid @enderror" id="name" placeholder="নাম লিখুন" value="{{ $doctor->b_name ?? old('b_name') }}">
                                            @error('নাম')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="degrees">ডিগ্রী</label>
                                            <input type="text" name="b_degrees" class="form-control  @error('ডিগ্রী') is-invalid @enderror" id="degrees" placeholder="ডিগ্রীর নাম লিখুন" value="{{ $doctor->b_degrees ?? old('b_degrees') }}">
                                            @error('ডিগ্রী')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="specialist">স্পেশালিস্ট</label>
                                            <input type="text" name="b_specialist" class="form-control  @error('স্পেশালিস্ট') is-invalid @enderror" id="specialist" value="{{ $doctor->b_specialist ?? old('b_specialist') }}">
                                            @error('স্পেশালিস্ট')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="designation">পদবি</label>
                                            <input type="text" name="b_designation" class="form-control  @error('পদবি') is-invalid @enderror" id="designation" placeholder="পদবি লিখুন" value="{{ $doctor->b_designation ?? old('b_designation') }}">
                                            @error('পদবি')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="coc">কন্সাল্টেন্ট অফ কলেজ</label>
                                            <input type="text" name="b_consultant_of_college" class="form-control  @error('কন্সাল্টেন্ট অফ কলেজ') is-invalid @enderror" id="coc" placeholder="কন্সাল্টেন্ট অফ কলেজ এর নাম" value="{{ $doctor->b_consultant_of_college ?? old('b_consultant_of_college') }}">
                                            @error('কন্সাল্টেন্ট অফ কলেজ')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Room No.</label>
                                            <select name="room_no" class="js-example-placeholder-single js-states form-control @error('room_no') is-invalid @enderror" style="width: 100%">
                                                <option></option>
                                                @foreach ($rooms as $room)
                                                   <option value="{{$room->id}}"
                                                    @if(isset($doctor))
                                                    {{($doctor->room_id == $room->id)?'selected':''}}
                                                    @endif
                                                    >{{$room->name}}</option> 
                                                @endforeach
                                            </select>
                                            @error('room_no')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label>Follow Up Days</label>
                                            <select name="follow_up" class="js-example-placeholder-single js-states form-control @error('follow_up') is-invalid @enderror" style="width: 100%">
                                                <option></option>
                                                @foreach ($followups as $followup)
                                                   <option value="{{$followup->id}}"
                                                    @if(isset($doctor))
                                                    {{($doctor->followup_id == $followup->id)?'selected':''}}
                                                    @endif
                                                    >{{$followup->name}}</option> 
                                                @endforeach
                                            </select>
                                            @error('follow_up')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label>Holidays</label>
                                            <select name="holiday" class="js-example-placeholder-single js-states form-control @error('holiday') is-invalid @enderror" style="width: 100%">
                                                <option></option>
                                                @foreach ($holidays as $holiday)
                                                   <option value="{{$holiday->id}}"
                                                    @if(isset($doctor))
                                                    {{($doctor->holiday_id == $holiday->id)?'selected':''}}
                                                    @endif
                                                    >{{$holiday->name}}</option> 
                                                @endforeach
                                            </select>
                                            @error('holiday')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                               
                                @if(!isset($doctor))
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
