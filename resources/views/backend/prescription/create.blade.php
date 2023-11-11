@extends('layouts.backend.main')

@push('css')
{{-- <!-- Select2 -->
 <link rel="stylesheet" href="{{asset('backend/plugins/select2/css/select2.min.css')}}">
<link rel="stylesheet" href="{{asset('backend/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}"> --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="{{asset('backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
<style>
    .select2-container--default .select2-selection--single {
        background-color: #fff;
        border: 1px solid #aaa;
        border-radius: 4px;
        padding-top: 2px;
    }

    .select2-container--default .select2-selection--multiple .select2-selection__choice {
        background-color: #777 !important;
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
                                @if(!isset($prescription))
                                <i class="fa-solid fa-circle-plus"></i>
                                @else
                                <i class="fa-solid fa-spinner"></i>
                                @endif

                                <span class="pl-1">
                                    @if(!isset($prescription))
                                    Prescription Add
                                    @else
                                    Prescription Update
                                    @endif
                                </span>
                            </h3>
                        </div>
                        <div class="card-body">
                            @if(Auth::user()->role->slug == 'doctor')
                            <div class="row p-2 pb-0">
                                <div class="col">
                                  <h2 class="m-0">{{$doctor_info->name ?? ''}}</h2>
                                  <p class="m-0"><b>{{$doctor_info->degrees ?? ''}}</b></p>
                                  <p class="text-danger m-0">{{$doctor_info->specialist ?? ''}}</p>
                                  
                                  <p class="m-0">{{$doctor_info->designation ?? ''}}</p>
                                  <b>
                                    <p class="text-primary m-0">{{$doctor_info->consultant_of_college ?? ''}}</p>
                                  </b>
                                </div>
                        
                                <div class="col text-center">
                                  <img style="width: 100px;height:100px;border-radius:50%" src="{{asset('photos/qblogo.png')}}" alt="">
                                  <p class="m-0"><span style="font-size: 25px;font-family: 'Roboto', sans-serif;color:#2C9540;">{{isset($setup)?$setup->company_name : ''}}</span></p>
                                </div>
                        
                        
                                <div class="col text-right pt-2">
                                  <h3 class="m-0">{{$doctor_info->b_name ?? ''}}</h3>
                                  <p class="m-0"><b>{{$doctor_info->b_degrees ?? ''}}</b></p>
                                  <p class="text-danger m-0">{{$doctor_info->b_specialist ?? ''}}</p>
                                  
                                  <p class="m-0">{{$doctor_info->b_designation ?? ''}}</p>
                                  <b>
                                    <p class="text-primary m-0">{{$doctor_info->b_consultant_of_college ?? ''}}</p>
                                  </b>
                                </div>
                              </div>
                              <hr>
                              @endif
                            <div class="form-row">
                                <div class="form-group col-12">
                                    <label>Doctor</label>
                                    <select id="doctor" name="doctor_id" class=" form-control @error('doctor_id') is-invalid @enderror">
                                        <option></option>
                                        @foreach ($doctors as $doctor)
                                        <option value="{{$doctor->id}}" {{($prescription->doctor_id ?? old('doctor_id') == $doctor->id) ? 'selected': ''}}>{{$doctor->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('doctor_id')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="form-group col-8">
                                    <label>Patient</label>
                                    <select id="patient" class="js-example-placeholder-single js-states form-control @error('patient_id') is-invalid @enderror" style="width: 100%">
                                        <option></option>
                                        @foreach ($patients as $patient)
                                        <option value="{{$patient->id}}" {{($prescription->patient_id ?? old('patient_id') == $patient->id) ? 'selected': ''}}>{{$patient->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('patient_id')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                                <div class="form-group col-4">
                                    <label for="name">Name: <span id="name"></span></label><br/>
                                    <label for="age">Age: <span id="age"></span></label><br/>
                                    <label for="address">Address: <span id="address"></span></label><br/>
                                    <label for="mobile">Mobile: <span id="mobile"></span></label><br/>

                                </div>
                
                            </div>

                            <form action="{{isset($prescription)? Route('app.prescription.update',[$prescription->id]): Route('app.prescription.store')}}" method="POST">
                                @if(isset($prescription))
                                @method('PUT')
                                @endif
                                @csrf
                                <div class="row">
                                    <div class=" col-md-3">
                                        <div class="form-group">
                                            <label for="visit_type">Visit Type</label>
                                            <select name="visit_type" id="visit_type" class="form-control @error('visit_type') is-invalid @enderror">
                                                <option @selected(($prescription->visit_type ?? @old('visit_type'))=='first') value="first">First Visit</option>
                                                <option @selected(($prescription->visit_type ?? @old('visit_type'))=='repeat') value="repeat">Repeat Visit</option>
                                                <option @selected(($prescription->visit_type ?? @old('visit_type'))=='reportonly') value="reportonly">Report Only</option>
                                            </select>
                                            @error('visit_type')
                                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-sm-12 col-md-12">
                                                <p ><strong>Chief Complaints:</strong></p>
                                                <?php

                                                use App\Helper\Helper;
                                                // $complainIds=[];
                                                if ($prescription->complaint ?? Null) {

                                                    $complainIds = Helper::arrayCovert($prescription->complaint, 'complaint_id');
                                                } else {
                                                    $complainIds = [];
                                                }
                                                ?>
                                                <!-- <textarea class="form-control col-md-12 col-sm-12  @error('cc') is-invalid @enderror" name="cc" placeholder="Chief Complaints">{{ $prescription->cc ?? old('cc') }}</textarea> -->
                                                <select name="cc[]" multiple id="cc" class="js-example-placeholder-single js-states form-control @error('cc') is-invalid @enderror" style="width: 100%">
                                                    <option></option>
                                                    @foreach ($complaints as $complaint)
                                                    <option value="{{$complaint->id}}" @selected(in_array($complaint->id, $complainIds))>{{$complaint->name}}</option>
                                                    @endforeach
                                                </select>
                                                @error('cc')
                                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                                @enderror


                                            </div>
                                        </div>
                                        <div class="card card-success collapsed-card">
                                            <div class="card-header">
                                              <h3 class="card-title">Diagnosis:</h3>
                              
                                              <div class="card-tools">
                                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                                                </button>
                                              </div>
                                              <!-- /.card-tools -->
                                            </div>
                                            <!-- /.card-header -->
                                            <div class="card-body">
                                                <table>
                                                    <tbody>
                                                        <tr>
                                                            <td width="40%">Pt. Type</td>
                                                            <td>
                                                                <select class="form-control" name="mem_type">
                                                                    <option selected="false" disabled="">Select One</option>
                                                                    <option value="OPD" {{(($prescription->mem_type ?? old('mem_type')) == 'OPD') ? 'selected': ''}}>OPD</option>
                                                                    <option value="HCU" {{(($prescription->mem_type ?? old('mem_type')) == 'HCU') ? 'selected': ''}}>HCU</option>
                                                                    <option value="ANC" {{(($prescription->mem_type ?? old('mem_type')) == 'ANC') ? 'selected': ''}}>ANC</option>
                                                                    <option value="CVD" {{(($prescription->mem_type ?? old('mem_type')) == 'CVD') ? 'selected': ''}}>CVD</option>
                                                                    <option value="RHD" {{(($prescription->mem_type ?? old('mem_type')) == 'RHD') ? 'selected': ''}}>RHD</option>
                                                                    <option value="SUR" {{(($prescription->mem_type ?? old('mem_type')) == 'SUR') ? 'selected': ''}}>SUR</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Edu. Year</td>
                                                            <td> <input type="text" name="education" class="form-control" value="{{ $prescription->education ?? old('education') }}"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>SBP (mm of Hg)</td>
                                                            <td> <input type="text" name="sbp" class="form-control" value="{{ $prescription->sbp ?? old('sbp') }}"> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>DBP (mm of Hg)</td>
                                                            <td> <input type="text" name="dbp" class="form-control" value="{{ $prescription->dbp ?? old('dbp') }}"> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>O<sub>2</sub> Satu. (%)</td>
                                                            <td> <input type="text" name="oxygen" class="form-control" value="{{ $prescription->oxygen ?? old('oxygen') }}"> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Pulse (/min)</td>
                                                            <td> <input type="text" name="pulse" class="form-control" value="{{ $prescription->pulse ?? old('pulse') }}"> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Temp. (°F)</td>
                                                            <td> <input type="text" name="temp" class="form-control" value="{{ $prescription->temp ?? old('temp') }}"> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Edema</td>
                                                            <td>
                                                                <input type="radio" name="edima" value="Y" {{(($prescription->edima ?? old('edima')) == 'Y') ? 'checked': ''}}> Y
                                                                <input type="radio" name="edima" value="N" {{(($prescription->edima ?? old('edima')) == 'N') ? 'checked': ''}}> N
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Anemia</td>
                                                            <td>
                                                                <input type="radio" name="anemia" value="Y" {{(($prescription->anemia ?? old('anemia')) == 'Y') ? 'checked': ''}}> Y
                                                                <input type="radio" name="anemia" value="N" {{(($prescription->anemia ?? old('anemia')) == 'N') ? 'checked': ''}}> N
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jaundice </td>
                                                            <td>
                                                                <input type="radio" name="jaundice" value="Y" {{(($prescription->jaundice ?? old('jaundice')) == 'Y') ? 'checked': ''}}> Yes
                                                                <input type="radio" name="jaundice" value="N" {{(($prescription->jaundice ?? old('jaundice')) == 'N') ? 'checked': ''}}> No
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Weight (Kg)</td>
                                                            <td> <input type="text" name="weight" id="weight" class="form-control" value="{{ $prescription->weight ?? old('weight') }}"> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Height (cm)</td>
                                                            <td> <input type="text" name="height" id="height" class="form-control" value="{{ $prescription->height ?? old('height') }}"> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>BMI </td>
                                                            <td>
                                                                <span id="bmi"></span>
                                                                <input type="text" name="bmi" class="form-control" value="{{ $prescription->bmi ?? old('bmi') }}">
        
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Bl. Gr. </td>
                                                            <td>
                                                                <input type="text" name="blgr" class="form-control" value="{{ $prescription->blgr ?? old('blgr') }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Heart </td>
                                                            <td> <input type="text" name="heart" class="form-control " value="{{ $prescription->heart ?? old('heart') }}"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Lungs </td>
                                                            <td> <input type="text" name="lungs" class="form-control " value="{{ $prescription->lungs ?? old('lungs') }}"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- /.card-body -->
                                          </div>
                                        

                                          <div class="card card-success collapsed-card">
                                            <div class="card-header">
                                              <h3 class="card-title">Disease History:</h3>
                              
                                              <div class="card-tools">
                                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                                                </button>
                                              </div>
                                              <!-- /.card-tools -->
                                            </div>
                                            <!-- /.card-header -->
                                            <div class="card-body">
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <td width="40%">Diabetes </td>
                                                            <td>
                                                                <input type="radio" name="diabeties" value="Y" {{(($prescription->diabeties ?? old('diabeties')) == 'Y') ? 'checked': ''}}> Y
                                                                <input type="radio" name="diabeties" value="N" {{(($prescription->diabeties ?? old('diabeties')) == 'N') ? 'checked': ''}}> N
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td> HTN </td>
                                                            <td>
                                                                <input type="radio" name="hp" value="Y" {{(($prescription->hp ?? old('hp')) == 'Y') ? 'checked': ''}}> Y
                                                                <input type="radio" name="hp" value="N" {{(($prescription->hp ?? old('hp')) == 'N') ? 'checked': ''}}> N
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>IHD</td>
                                                            <td>
                                                                <input type="radio" name="ihd" value="Y" {{(($prescription->ihd ?? old('ihd')) == 'Y') ? 'checked': ''}}> Y
                                                                <input type="radio" name="ihd" value="N" {{(($prescription->ihd ?? old('ihd')) == 'N') ? 'checked': ''}}> N
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Stroke</td>
                                                            <td>
                                                                <input type="radio" name="strk" value="Y" {{(($prescription->strk ?? old('strk')) == 'Y') ? 'checked': ''}}> Y
                                                                <input type="radio" name="strk" value="N" {{(($prescription->strk ?? old('strk')) == 'N') ? 'checked': ''}}> N
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>COPD</td>
                                                            <td>
                                                                <input type="radio" name="copd" value="Y" {{(($prescription->copd ?? old('copd')) == 'Y') ? 'checked': ''}}> Y
                                                                <input type="radio" name="copd" value="N" {{(($prescription->copd ?? old('copd')) == 'N') ? 'checked': ''}}> N
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Cancer </td>
                                                            <td>
                                                                <input type="radio" name="cancer" value="Y" {{(($prescription->cancer ?? old('cancer')) == 'Y') ? 'checked': ''}}> Y
                                                                <input type="radio" name="cancer" value="N" {{(($prescription->cancer ?? old('cancer')) == 'N') ? 'checked': ''}}> N
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>CKD </td>
                                                            <td>
                                                                <input type="radio" name="ckd" value="Y" {{(($prescription->ckd ?? old('ckd')) == 'Y') ? 'checked': ''}}> Y
                                                                <input type="radio" name="ckd" value="N" {{(($prescription->ckd ?? old('ckd')) == 'N') ? 'checked': ''}}> N
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- /.card-body -->
                                          </div>
                                        

                                          <div class="card card-success collapsed-card">
                                            <div class="card-header">
                                              <h3 class="card-title">Behavioural History:</h3>
                              
                                              <div class="card-tools">
                                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                                                </button>
                                              </div>
                                              <!-- /.card-tools -->
                                            </div>
                                            <!-- /.card-header -->
                                            <div class="card-body">
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Salt </td>
                                                            <td>
                                                                <input type="radio" name="salt" value="Y" {{(($prescription->salt ?? old('salt')) == 'Y') ? 'checked': ''}}> Y
                                                                <input type="radio" name="salt" value="N" {{(($prescription->salt ?? old('salt')) == 'N') ? 'checked': ''}}> N
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td> SLT </td>
                                                            <td>
                                                                <input type="radio" name="smoke" value="Y" {{(($prescription->smoke ?? old('smoke')) == 'Y') ? 'checked': ''}}> Y
                                                                <input type="radio" name="smoke" value="N" {{(($prescription->smoke ?? old('smoke')) == 'N') ? 'checked': ''}}> No
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Smoking </td>
                                                            <td>
                                                                <input type="radio" name="smoking" value="Y" {{(($prescription->smoking ?? old('smoking')) == 'Y') ? 'checked': ''}}> Y
                                                                <input type="radio" name="smoking" value="N" {{(($prescription->smoking ?? old('smoking')) == 'N') ? 'checked': ''}}> N
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- /.card-body -->
                                          </div>
                                        
                                        <div class="row mb-2">
                                            <div class="col-sm-12 col-md-12">
                                                <label for="" class="font-weight-bold">Inv. Finding(s):</label>


                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-sm-12 col-md-12">
                                                <textarea class="form-control col-md-12 col-sm-12" name="diagnosis" id="pri_others" placeholder="Primary Diagnosis">{{ $prescription->diagnosis ?? old('diagnosis') }}</textarea>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-sm-12 col-md-12">
                                                <textarea class="form-control col-md-12 col-sm-12" name="sec_diagnosis" id="sec_others" placeholder="Secondary Diagnosis">{{ $prescription->sec_diagnosis ?? old('sec_diagnosis') }}</textarea>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-sm-12 col-md-12">
                                                <textarea class="form-control col-md-12 col-sm-12" name="sec_dx2" id="sec_dx2" placeholder="Secondary Diagnosis 2">{{ $prescription->sec_dx2 ?? old('sec_dx2') }}</textarea>
                                            </div>
                                        </div>
                                        <br>
                                        <br>
                                        <br>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="form-row">
                                            <div class="form-group col-12">
                                                <label>Medicine</label>
                                                <select id="medicine_id" name="med" class="js-example-placeholder-single js-states form-control @error('med') is-invalid @enderror" style="width: 100%">
                                                    <option></option>
                                                    @foreach ($medicines as $medicine)
                                                    <option value="{{$medicine->id}}">{{$medicine->name}}</option>
                                                    @endforeach
                                                </select>
                                                @error('medicine')
                                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                                @enderror
                                            </div>
                                        </div>
                                        <input hidden type="number[]" id="medicines_id" multiple="multiple" name="medicine_id" value="{{$prescription->name ?? old('name') }}" />

                                        <table class="table mb-5">
                                            <thead class="thead-dark d-none">
                                                <tr>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Mg</th>
                                                    <th scope="col">Frequency</th>
                                                    <th scope="col">Qty</th>
                                                    <th scope="col">Qty Type</th>
                                                    <th scope="col" style="width: 140px;">Eating Time</th>
                                                    <th scope="col">Duration</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody id="t_body">
                                                @if($prescription->medicines?? null)
                                                @foreach($prescription->medicines as $med)
                                                <tr>
                                                    <td>{{$med->medicines}}
                                                        <input type="hidden" name="medicine[]" value="{{$med->medicine_id}}" />
                                                    </td>
                                                    <td>{{$med->mg}}</td>
                                                    <td>
                                                        <select class="form-control" name="frequency[]">
                                                            @foreach($frequencies as $freq)
                                                            <option value="{{$freq->id}}" @selected($freq->id ==$med->frequency_id )>{{$freq->name}}</option>

                                                            @endforeach
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select class="form-control" name="qty[]">
                                                            @foreach($quantities as $qty)
                                                            <option value="{{$qty->id}}" @selected($qty->id ==$med->qty_id )>{{$qty->name}}</option>

                                                            @endforeach
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select class="form-control" name="qtyType[]">
                                                            @foreach($qtytypies as $qtype)
                                                            <option value="{{$qtype->id}}" @selected($qtype->id ==$med->qtyType_id )>{{$qtype->name}}</option>

                                                            @endforeach
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select class="form-control" name="eatingType[]">
                                                            @foreach($eatingTimes as $qtype)
                                                            <option value="{{$qtype->id}}" @selected($qtype->id ==$med->eatingType_id )>{{$qtype->name}}</option>

                                                            @endforeach
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select name="eatDuration[]" class="form-control ">
                                                            <option selected="false" disabled="">Select</option>
                                                            <option value="0" @selected($med->eatDuration==0)>0</option>
                                                            <option value="1" @selected($med->eatDuration==1)>১</option>
                                                            <option value="2" @selected($med->eatDuration==2)>২</option>
                                                            <option value="3" @selected($med->eatDuration==3)>৩</option>
                                                            <option value="4" @selected($med->eatDuration==4)>৪</option>
                                                            <option value="5" @selected($med->eatDuration==5)>৫</option>
                                                            <option value="6" @selected($med->eatDuration==6)>৬</option>
                                                            <option value="7" @selected($med->eatDuration==7)>৭</option>
                                                            <option value="8" @selected($med->eatDuration==8)>৮</option>
                                                            <option value="9" @selected($med->eatDuration==9)>৯</option>
                                                            <option value="10" @selected($med->eatDuration==10)>১০</option>
                                                            <option value="11" @selected($med->eatDuration==11)>১১</option>
                                                            <option value="12" @selected($med->eatDuration==12)>১২</option>
                                                            <option value="13" @selected($med->eatDuration==13)>১৩</option>
                                                            <option value="14" @selected($med->eatDuration==14)>১৪</option>
                                                            <option value="15" @selected($med->eatDuration==15)>১৫</option>
                                                            <option value="16" @selected($med->eatDuration==16)>১৬</option>
                                                            <option value="17" @selected($med->eatDuration==17)>১৭</option>
                                                            <option value="18" @selected($med->eatDuration==18)>১৮</option>
                                                            <option value="19" @selected($med->eatDuration==19)>১৯</option>
                                                            <option value="20" @selected($med->eatDuration==20)>২০</option>
                                                            <option value="21" @selected($med->eatDuration==21)>২১</option>
                                                        </select>
                                                    </td>

                                                    <td>
                                                        <a href="" class=" btn-danger btn-sm delete-tr"><i class="fa fa-trash"></i></a>
                                                    </td>

                                                </tr>
                                                @endforeach
                                                @endif
                                            </tbody>
                                        </table>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h6 class="font-weight-bold">উপদেশঃ</h6>
                                                <div style="overflow-y: scroll;	max-height: 300px;">
                                                    <?php
                                                    if ($prescription->advice ?? Null) {
                                                        $advIds = Helper::arrayCovert($prescription->advice, 'advice_id');
                                                    } else {
                                                        $advIds = [];
                                                    }
                                                    ?>
                                                    @foreach($advice as $key => $ad)
                                                    <input id="{{$key}}" type="checkbox" name="advice[]" @checked(in_array($ad->id, $advIds)) value="{{$ad->id}}">
                                                    <label for="{{$key}}">{{$ad->name}}</label><br>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>

                                        <hr>
                                        <div class="col-sm-12 col-md-12 mb-3 mt-2 pt-2">
                                        <p class=""><strong>Follow-up Investigation(s) :</strong></p>
                                        
                                        <?php $testIds = []; ?>
                                        @if(isset($prescription))
                                        <?php
                                        if ($prescription->test ?? old('suggest_test')) {
                                            $testIds = Helper::arrayCovert($prescription->test, 'medical_test_id');
                                        } else {
                                            $testIds = [];
                                        }
                                        ?>
                                        @endif
                                        <select id="testFollowup" class="js-example-placeholder-single js-states form-control @error('suggest_test') is-invalid @enderror" name="suggest_test[]" multiple >
                                            @foreach($medicalTest as $test)
                                            <option value="{{$test->id}}" @selected(in_array($test->id, $testIds))>{{$test->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="row text-center" style=" text-align: center !important;">
                                        <div class="col-sm-12 col-print text-center">
                                            <select name="next_meet" class="@error('next_meet') is-invalid @enderror">
                                                <option selected="false" disabled="">Select</option>
                                                <option value="০" @selected(($prescription->next_meet ?? old('next_meet')) =='০') >0</option>
                                                <option value="১" @selected(($prescription->next_meet ?? old('next_meet')) =='১') >১</option>
                                                <option value="২" @selected(($prescription->next_meet ?? old('next_meet')) =='২') >২</option>
                                                <option value="৩" @selected(($prescription->next_meet ?? old('next_meet')) =='৩') >৩</option>
                                                <option value="৪" @selected(($prescription->next_meet ?? old('next_meet')) =='৪') >৪</option>
                                                <option value="৫" @selected(($prescription->next_meet ?? old('next_meet')) =='৫') >৫</option>
                                                <option value="৬" @selected(($prescription->next_meet ?? old('next_meet')) =='৬') >৬</option>
                                                <option value="৭" @selected(($prescription->next_meet ?? old('next_meet')) =='৭') >৭</option>
                                                <option value="৮" @selected(($prescription->next_meet ?? old('next_meet')) =='৮') >৮</option>
                                                <option value="৯" @selected(($prescription->next_meet ?? old('next_meet')) =='৯') >৯</option>
                                                <option value="১০" @selected(($prescription->next_meet ?? old('next_meet')) =='১০') >১০</option>
                                                <option value="১১" @selected(($prescription->next_meet ?? old('next_meet')) =='১১') >১১</option>
                                                <option value="১২" @selected(($prescription->next_meet ?? old('next_meet')) =='১২') >১২</option>
                                                <option value="১৩" @selected(($prescription->next_meet ?? old('next_meet')) =='১৩') >১৩</option>
                                                <option value="১৪" @selected(($prescription->next_meet ?? old('next_meet')) =='১৪') >১৪</option>
                                                <option value="১৫" @selected(($prescription->next_meet ?? old('next_meet')) =='১৫') >১৫</option>
                                                <option value="১৬" @selected(($prescription->next_meet ?? old('next_meet')) =='১৬') >১৬</option>
                                                <option value="১৭" @selected(($prescription->next_meet ?? old('next_meet')) =='১৭') >১৭</option>
                                                <option value="১৮" @selected(($prescription->next_meet ?? old('next_meet')) =='১৮') >১৮</option>
                                                <option value="১৯" @selected(($prescription->next_meet ?? old('next_meet')) =='১৯') >১৯</option>
                                                <option value="২০" @selected(($prescription->next_meet ?? old('next_meet')) =='২০') >২০</option>
                                                <option value="২১" @selected(($prescription->next_meet ?? old('next_meet')) =='২১') >২১</option>
                                                <option value="২২" @selected(($prescription->next_meet ?? old('next_meet')) =='২২') >২১</option>
                                                <option value="২৩" @selected(($prescription->next_meet ?? old('next_meet')) =='২৩') >২১</option>
                                                <option value="২৪" @selected(($prescription->next_meet ?? old('next_meet')) =='২৪') >২১</option>
                                                <option value="২৫" @selected(($prescription->next_meet ?? old('next_meet')) =='২৫') >২১</option>
                                                <option value="২৬" @selected(($prescription->next_meet ?? old('next_meet')) =='২৬') >২১</option>
                                                <option value="২৭" @selected(($prescription->next_meet ?? old('next_meet')) =='২৭') >২১</option>
                                                <option value="২৮" @selected(($prescription->next_meet ?? old('next_meet')) =='২৮') >২১</option>
                                                <option value="২৯" @selected(($prescription->next_meet ?? old('next_meet')) =='২৯') >২১</option>
                                                <option value="৩০" @selected(($prescription->next_meet ?? old('next_meet')) =='৩০') >২১</option>
                                                <option value="৩১" @selected(($prescription->next_meet ?? old('next_meet')) =='৩১') >২১</option>
                                            </select>
                                            @error('next_meet')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                            <input type="radio" id="day" name="meet_day" value="দিন" @checked(($prescription->meet_day ?? old('meet_day')) =='দিন')> <label for="day">দিন</label>
                                            <input type="radio" id="week" name="meet_day" value="সপ্তাহ" @checked(($prescription->meet_day ?? old('meet_day')) =='সপ্তাহ')> <label for="week">সপ্তাহ</label>
                                            <input type="radio" id="month" name="meet_day" value="মাস" @checked(($prescription->meet_day ?? old('meet_day')) =='মাস')> <label for="month">মাস</label>
                                            পর আসবেন। পরবর্তী ভিজিটের সময় অবশ্যই ব্যবস্থাপত্র সাথে আনবেন। ধন্যবাদ।
                                        </div>
                                    </div>
                                    </div>
                                    
                                </div>
                                <input type="hidden" name="doctor_id" id="doctor_id" value="{{ $prescription->doctor_id ?? old('doctor_id') }}">
                                <input type="hidden" name="patient_id" id="patient_id" value="{{ $prescription->patient_id ?? old('patient_id') }}">
                                @if(!isset($prescription))

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
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(".js-example-placeholder-single").select2({
        placeholder: "--Select One--",
        allowClear: true
    });
</script>

<script>
    $("#doctor").on('change', function() {
        var doctor_id = $(this).val();
        $("#doctor_id").val(doctor_id);
    });

    $("#patient").on('change', function() {
        var patient_id = $(this).val();
        $("#patient_id").val(patient_id);

        loadPtient(patient_id)
    });

    function loadPtient(patient_id) {
        $.ajax({
            url: '/app/prescription/patient/info/' + patient_id,
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                console.log(response);
                $("#name").text(response.name);
                $("#age").text(response.age);
                $("#address").text(response.address);
                $("#mobile").text(response.mobile);

            }
        });
    }
    var medicine_id = [];
    
    $("#medicine_id").on('change', function() {
        var id = $(this).val();

        medicine_id.push(id);
        $("#medicines_id").val(medicine_id);

        $.ajax({
            url: '/app/prescription/medicine/info/' + id,
            type: 'GET',
            dataType: 'json',
            success: function(response) {

                // Loop
                var frequencies = '';
                response.frequencies.map((item) => {
                    frequencies += `<option value="${item.id}">${item.name}</option>`
                });


                var quantities = '';
                response.quantities.map((item) => {
                    quantities += `<option value="${item.id}">${item.name}</option>`
                });


                var qtytypies = '';
                response.qtytypies.map((item) => {
                    qtytypies += `<option value="${item.id}">${item.name}</option>`
                });


                var eatingTimes = '';
                response.eatingTimes.map((item) => {
                    eatingTimes += `<option value="${item.id}">${item.name}</option>`
                });
                // Loop

                var data = `
                    <tr>
                        <td>${response.medicine.name}
                        <input type="hidden" name="medicine[]" value="${id}"/>
                        </td>
                        <td>${response.medicine.mg}</td>
                      <td>
                        <select class="form-control"  name="frequency[]">
                            ${frequencies}
                        </select>
                      </td>
                       <td>
                        <select class="form-control"  name="qty[]">
                            ${quantities}
                        </select>
                      </td>
                      <td>
                        <select class="form-control"  name="qtyType[]">
                            ${qtytypies}
                        </select>
                      </td>
                      <td>
                        <select class="form-control"  name="eatingType[]">
                            ${eatingTimes}
                        </select>
                        </td>
                        <td>
                        <select name="eatDuration[]" class="form-control " >
			                          <option selected="false" disabled="">Select</option>
			                            <option value="0">0</option>
			                            <option value="1">১</option>
			                            <option value="2">২</option>
			                            <option value="3">৩</option>
			                            <option value="4">৪</option>
			                            <option value="5">৫</option>
			                            <option value="6">৬</option>
			                            <option value="7" selected="">৭</option>
			                            <option value="8">৮</option>
			                            <option value="9">৯</option>
			                            <option value="10">১০</option>
			                            <option value="11">১১</option>
			                            <option value="12">১২</option>
			                            <option value="13">১৩</option>
			                            <option value="14">১৪</option>
			                            <option value="15">১৫</option>
			                            <option value="16">১৬</option>
			                            <option value="17">১৭</option>
			                            <option value="18">১৮</option>
			                            <option value="19">১৯</option>
			                            <option value="20">২০</option>
			                            <option value="21">২১</option>
			                        </select>
                      </td>

                      <td>
                        <a href="" class=" btn-danger btn-sm delete-tr"><i class="fa fa-trash"></i></a>
                      </td>

                    </tr>`;
                
                $("#t_body").append(data);
                $(".thead-dark").removeClass("d-none");
            }
        });
    });

    //Delete Tr
    $(document).on('click', '.delete-tr', function(e) {
        e.preventDefault();
        $(this).closest('tr').remove();
    });

    //   $("#testFollowup").select2({
    //       placeholder: "--Select One--",
    //       allowClear: true
    //   });


    $(document).ready(function() {
        @if($prescription->patient_id ?? old('patient_id'))
        let patient_id = {{$prescription->patient_id ?? old('patient_id')}}
            
        loadPtient(patient_id)
        @endif
    })
</script>
@endpush