@extends('layouts.backend.main')

@push('css')
<!-- DataTables -->
<link rel="stylesheet" href="{{asset('backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('backend/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">

<style>
  table,
  th,
  td {
    border: 1px solid black;
    border-collapse: collapse;
  }

  th,
  td {
    padding: 5px;
    text-align: left;
  }



  @media print {
    body * {
      visibility: hidden;
    }

    .page * {
      visibility: visible;
      padding-top: 0%;
      margin-top: 0%;
    }

    #printBtn {
      visibility: hidden !important;
    }
  }
</style>
@endpush

@section('content')

<div class="content-wrapper">

  <div class="page d-flex flex-column justify-content-between" style="min-height: 50vh; ">
    <button id="printBtn" onclick="window.print()" class="btn btn-primary float-right m-4">Print</button>
    <div>
      
      <div class="row p-5 pb-0">
        <div class="col">
          <h2 class="m-0">{{$prescription->doctor->name}}</h2>
          <p class="m-0"><b>{{$prescription->doctor->degrees}}</b></p>
          <p class="text-danger m-0">{{$prescription->doctor->specialist}}</p>
          
          <p class="m-0">{{$prescription->doctor->designation}}</p>
          <b>
            <p class="text-primary m-0">{{$prescription->doctor->consultant_of_college}}</p>
          </b>
        </div>

        <div class="col text-center">
          <img style="width: 100px;height:100px;border-radius:50%" src="{{asset('photos/qblogo.png')}}" alt="">
          <p class="m-0"><span style="font-size: 25px;font-family: 'Roboto', sans-serif;color:#2C9540;">{{isset($setup)?$setup->company_name : ''}}</span></p>
        </div>


        <div class="col text-right pt-2">
          <h3 class="m-0">{{$prescription->doctor->b_name}}</h3>
          <p class="m-0"><b>{{$prescription->doctor->b_degrees}}</b></p>
          <p class="text-danger m-0">{{$prescription->doctor->b_specialist}}</p>
          
          <p class="m-0">{{$prescription->doctor->b_designation}}</p>
          <b>
            <p class="text-primary m-0">{{$prescription->doctor->b_consultant_of_college}}</p>
          </b>
        </div>
      </div>

      <div class="row px-5 pb-2">
        <div class="col-4">
          <img style="height: 30px; width: 250px" src="https://static.vecteezy.com/system/resources/previews/001/199/360/non_2x/barcode-png.png" alt="" />
          <p class="m-0"><b>Prescription ID</b> : {{$prescription->id}}</p>
        </div>
        <div class="col-4 text-center">
          <p><b>Total Visit</b> -01</p>
        </div>
        <div class="col-4 text-right pt-3">
          <span class="inline-block bg-light rounded-5 border border-2 border-gray p-2">
            <b>UHID : 102-2022</b>
          </span>
        </div>
      </div>

      <div class="row border px-5 border-start-0 border-end-0 border-1 border-dark">
        <div class="col-5">
          <p class="m-0"><b>Name</b>: {{$prescription->patient->name}}</p>
          <p class="m-0"><b>Address</b>: {{$prescription->patient->address}}</p>
        </div>
        <div class="col-4">
          <p class="m-0"><b>Age</b>: {{$prescription->patient->age}} years</p>
          <p class="m-0"><b>Mobile</b>: {{$prescription->patient->mobile}}</p>
        </div>
        <div class="col-3">
          <p class="m-0"><b>Sex</b>: {{$prescription->patient->sex}}</p>
          <p class="m-0"><b>Date</b>: {{ date("Y-m-d")}}</p>
        </div>
      </div>

      <div class="d-flex">
        <div class="col-4 ml-4 pt-3 pl-5 border border-top-0 border-bottom-0 border-left-0 border-right-1">
          <div class="mt-2">
            <p class="border-bottom mb-0 border-gray">
              <b>Patient Details</b>
            </p>
            <div>
              @if($prescription->patient->blood_group)<div>• <small>Blood Group: <span class="text-danger">{{$prescription->patient->blood_group}}</span></small></div>@endif
              @if($prescription->patient->maritial_status)<div>• <small>Marital Status: {{$prescription->patient->maritial_status}}</small></div>@endif
              @if($prescription->patient->ocupation)<div>• <small>Occupation {{$prescription->patient->ocupation}}</small></div>@endif
              @if($prescription->patient->religion)<div>• <small>Religion - {{$prescription->patient->religion}}</small></div>@endif

            </div>
          </div>
          @if($prescription->cc)
          <div class="mt-2">
            <p class="border-bottom mb-0 border-gray">
              <b>Chief Complaints</b>
            </p>
            <p>{{$prescription->cc}}</p>
          </div>
          @endif
          @if($prescription->diagnosis)
          <div class="mt-2">
            <p class="border-bottom mb-0 border-gray">
              <b> Diagnosis</b>
            </p>
            <p>{{$prescription->diagnosis}}</p>
          </div>
          @endif
          @if($prescription->sec_diagnosis)
          <div class="mt-2">
            <p class="border-bottom mb-0 border-gray">
              <b>Secondary Diagnosis</b>
            </p>
            <p>{{$prescription->sec_diagnosis}}</p>
          </div>
          @endif
          @if($prescription->sec_dx2)
          <div class="mt-2">
            <p class="border-bottom mb-0 border-gray">
              <b>Secondary Diagnosis 2</b>
            </p>
            <p>{{$prescription->sec_dx2}}</p>
          </div>
          @endif

          <div class="mt-2">
            <p class="border-bottom mb-0 border-gray">
              <b>Investigations</b>
            </p>
            <ul>
              @if($prescription->mem_type)<li>Pt. Type: {{$prescription->mem_type}}</li>@endif
              @if($prescription->education)<li>Edu Year: {{$prescription->education}}</li>@endif
              @if($prescription->sbp)<li>SBP (mm of Hg): {{$prescription->sbp}}</li>@endif
              @if($prescription->dbp)<li>DBP (mm of Hg): {{$prescription->dbp}}</li>@endif
              @if($prescription->oxygen)<li>Satu. (%): {{$prescription->oxygen}}</li>@endif
              @if($prescription->pulse)<li>Pulse (/min): {{$prescription->pulse}}</li>@endif
              @if($prescription->temp)<li>Temp. (°F): {{$prescription->temp}}</li>@endif
              @if($prescription->edima)<li>Edema: {{$prescription->edima}}</li>@endif
              @if($prescription->anemia)<li>Anemia: {{$prescription->anemia}}</li>@endif
              @if($prescription->jaundice)<li>Jaundice: {{$prescription->jaundice}}</li>@endif
              @if($prescription->weight)<li>Weight (Kg): {{$prescription->weight}}</li>@endif
              @if($prescription->height)<li>Height (cm): {{$prescription->height}}</li>@endif
              @if($prescription->bmi)<li>BMI: {{$prescription->bmi}}</li>@endif
              @if($prescription->blgr)<li>Bl. Gr.: {{$prescription->blgr}}</li>@endif
              @if($prescription->heart)<li>Heart: {{$prescription->heart}}</li>@endif
              @if($prescription->lungs)<li>Lungs: {{$prescription->lungs}}</li>@endif
              @if($prescription->stron)<li><strong>Disease History:</strong></li>@endif
              @if($prescription->diabeties)<li>Diabetes: {{$prescription->diabeties}}</li>@endif
              @if($prescription->hp)<li>HTN: {{$prescription->hp}}</li>@endif
              @if($prescription->ihd)<li>IHD: {{$prescription->ihd}}</li>@endif
              @if($prescription->strk)<li>Stroke: {{$prescription->strk}}</li>@endif
              @if($prescription->copd)<li>COPD: {{$prescription->copd}}</li>@endif
              @if($prescription->cancer)<li>Cancer: {{$prescription->cancer}}</li>@endif
              @if($prescription->ckd)<li>CKD: {{$prescription->ckd}}</li>@endif
              @if($prescription->stron)<li><strong>Behavioural History::</strong></li>@endif
              @if($prescription->salt)<li>Salt: {{$prescription->salt}}</li>@endif
              @if($prescription->smoke)<li>smoke: {{$prescription->smoke}}</li>@endif
              @if($prescription->smoking)<li>Smoking: {{$prescription->smoking}}</li>@endif


            </ul>
          </div>
        </div>

        <div class="col-8 d-flex flex-column justify-content-between ms-4  pb-4">
          <div class="mt-2">
            <h1>R<span class="fs-4">x</span></h1>
            <ol class="pe-5 me-4">
              @foreach($prescription->medicines as $med)
              <li>
                <h5 class="p-0 m-0">{{$med->medicines}}</h5>
                <div class="d-flex justify-content-between">
                  <p class="fs-6">{{$med->frequencies}} {{$med->quantities}} {{$med->quantity_types}} {{$med->eatingtimes}} </p>
                  <div class="d-flex justify-content-end">
                    <p class="mx-2">---------------------</p>
                    <p>{{$med->eatDuration}} month/Day</p>
                  </div>
                </div>
              </li>
              @endforeach

            </ol>
          </div>

          <div class="justify-content-between">


            @if(count($prescription->advice)>0)
            <div>
              <h4 class="pl-4">Advice</h4>

              <ol>
                @foreach($prescription->advice as $adv)
                <li>{{$adv->name}}</li>
                @endforeach

              </ol>
            </div>
            @endif
            @if(count($prescription->test)>0)
            <div>
              <h4 class="pl-4">Test</h4>

              <ol>
                @foreach($prescription->test as $test)
                <li>{{$test->name}}</li>
                @endforeach

              </ol>
            </div>
            @endif
            @if($prescription->next_meet)
            <div>
              <h4 class="pl-4">Next Visit</h4>

              <p class="pl-4 m-0 text-danger fw-bold">
                {{$prescription->next_meet}} {{$prescription->meet_day}} পর রিপোর্টসহ দেখাতে আসবেন
              </p>
            </div>
            @endif
          </div>
        </div>

      </div>
    </div>

    <div class="footer px-5 pt-3 pb-3" style="background-color:rgb(225, 225, 225) ">
            <!-- chamber details  -->
            <div class="row align-iteml-center">
              <div class="col-5">
                {{-- <p class="mb-0">প্রতি শুক্রবার বিকাল ৩ টা থেকে রাত ৮ টা</p>
                <p class="mb-0">শামসুল আলম চৌধুরী মার্কেট,</p>
                <p class="mb-0">চৌহমুহনী, পেকুয়া কক্সবাজার</p>
                <p class="mb-0 text-primary">সিরিয়ালের জন্য:</p>
                <p class="mb-0 text-danger fw-bold">
                  ০১৮৮-৮৮৮-২২১, ০১৮৮-৮৮৮-২২১
                </p> --}}
              </div>
              <div class="col-2">
                {{-- <img class="img-fluid mt-2"  src="{{isset($setup)? asset('storage/logo/'.$setup->logo): ''}}" alt=""> --}}
              </div>
              <div class="col-5 text-right">
                <p class="mb-0">প্রতিদিন <strong class="text-info">{{$prescription->doctor->followup->name}}</strong></p>
                <p class="mb-0"><strong class="text-danger">({{$prescription->doctor->holiday->name}})</strong>বন্ধ</p>
                <p class="mb-0">রুম নং- <strong class="text-primary">{{$prescription->doctor->room->name}}</strong></p>
              </div>
            </div>
          </div>
  </div>

</div>


@endsection

@push('js')
<!-- DataTables  & Plugins -->
<script src="{{asset('backend/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('backend/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('backend/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('backend/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('backend/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('backend/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('backend/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('backend/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('backend/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('backend/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>


{{-- <script>
  window.print();
</script> --}}
@endpush