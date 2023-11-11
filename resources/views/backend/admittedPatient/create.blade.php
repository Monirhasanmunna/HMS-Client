@extends('layouts.backend.main')

@push('css')
 {{-- <!-- Select2 -->
 <link rel="stylesheet" href="{{asset('backend/plugins/select2/css/select2.min.css')}}">
 <link rel="stylesheet" href="{{asset('backend/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}"> --}}
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
                            @if(!isset($admission))
                            <i class="fa-solid fa-circle-plus"></i>
                            @else
                            <i class="fa-solid fa-spinner"></i>
                            @endif

                            <span class="pl-1">
                            @if(!isset($admission))
                            New Admittion
                            @else
                            Admittion Update
                            @endif
                            </span></h3>
                        </div>
                        <div class="card-body">
                            <form action="{{isset($admission)? Route('app.admition.update',[$admission->id]): Route('app.admition.store')}}" method="POST">
                                @if(isset($admission))
                                    @method('PUT')
                                @endif
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-4">
                                        <label>Patient</label>
                                        <select name="patient_id" class="js-example-placeholder-single js-states form-control @error('patient') is-invalid @enderror" style="width: 100%">
                                            <option></option>
                                            @foreach ($patients as $patient)
                                               <option value="{{$patient->id}}"
                                                @if(isset($admission))
                                                {{($admission->patient_id == $patient->id)?'selected':''}}
                                                @endif
                                                >{{$patient->name}}</option> 
                                            @endforeach
                                        </select>
                                        @error('patient')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>

                                    <div class="form-group col-4">
                                        <label>Bed Group</label>
                                        <select name="bedgroup_id" id="bed_group" class="js-example-placeholder-single js-states form-control @error('bedgroup') is-invalid @enderror" style="width: 100%">
                                            <option></option>
                                            @foreach ($bedgroups as $bedgroup)
                                               <option value="{{$bedgroup->id}}"
                                                @if(isset($admission))
                                                {{($admission->bedgroup_id == $bedgroup->id)?'selected':''}}
                                                @endif
                                                >{{$bedgroup->name}}</option> 
                                            @endforeach
                                        </select>
                                        @error('bedgroup')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>

                                    <div class="form-group col-4">
                                        <label>Bed</label>
                                        <select name="bed_id" id="bed" class="js-example-placeholder-single js-states form-control @error('bed') is-invalid @enderror" style="width: 100%">
                                            <option></option>
                                            @foreach ($beds as $bed)
                                               <option value="{{$bed->id}}"
                                                @if(isset($admission))
                                                {{($admission->bed_id == $bed->id)?'selected':''}}
                                                @endif
                                                >{{$bed->name}}</option> 
                                            @endforeach
                                        </select>
                                        @error('bed')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-4">
                                        <label for="price">Price</label>
                                        <input type="number" name="price" id="price" class="form-control form-control-sm" id="price" value="{{ $admission->bedgroup->price ?? old('price') }}" readonly>
                                    </div>

                                    <div class="form-group col-4">
                                        <label for="paid">Paid</label>
                                        <input type="number" name="paid" class="form-control form-control-sm @error('paid') is-invalid @enderror" id="paid" placeholder="Enter Amount" value="{{ $admission->paid ?? old('paid') }}">
                                        @error('paid')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>

                                    <div class="form-group col-4">
                                        <label for="due">Due</label>
                                        <input type="number" name="due" class="form-control form-control-sm" id="due" value="{{ $admission->due ?? old('due')}}" readonly>
                                    </div>
                                </div>
                    
                                @if(!isset($admission))
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

<script>
    $("#bed_group").on('change',function(){
        $("#price").val(0);
        var id = $(this).val();
        $.ajax({
            url         : '/app/admition/bedgroup/info/'+id,
            type        : 'GET',
            success     : function(response){

                $("#price").val(response.bedgroup.price);
                $("#due").val(0);

                $("#bed").empty();
                $(response.bed).each(function(index, element){
                    var bed = `
                        <option value='${element.id}'>${element.name}</option>
                    `;
                    $("#bed").append(bed);
                });
            }
        });
    });

    $("#paid").on('change, keyup',function(){
        
       var price = parseInt($("#price").val());
       var paid_amount = parseInt($(this).val());

       var due_cal = price-paid_amount;
       $("#due").val(due_cal);
       
    });
</script>
@endpush
