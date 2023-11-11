@extends('layouts.backend.main')

@push('css')

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
                            
                            <i class="fa-solid fa-spinner"></i>
                          

                            <span class="pl-1">
                           
                            Generate Invoice
                           
                            </span></h3>
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                        </div>
                        <div class="card-body">
                            <form action="{{Route('app.invoice.store')}}" method="POST">
                                
                                @csrf
                                <input type="hidden" name="type" value="{{$type}}">
                                <input type="hidden" name="doctor_id" value="{{isset($pres) ? $pres->doctor_id : $admission->patients->doctor->id}}">
                                <input type="hidden" name="patient_id" value="{{isset($pres) ? $pres->patient_id : $admission->patient_id}}">
                                <input type="hidden" name="ref_id" value="{{$ref_id}}">
                                <input type="hidden" name="addmission_date" value="{{isset($admission) ? $admission->created_at : ''}}">
                                
                                @if($type==1) 
                                    <div class="form-group">
                                        <label>
                                                Presciption
                                        </label>
                                        <?php 
                                        $amount=0;
                                        if($pres->visit_type=='first'){
                                            $amount=$pres->doctor->firstVisit;
                                        }elseif($pres->visit_type=='repeat'){
                                            $amount=$pres->doctor->nextVisit;
                                        }elseif($pres->visit_type=='reportonly'){
                                            $amount=$pres->doctor->reportOnly;
                                        }
                                        ?>
                                        <input name="amount" type="number" class="form-control" value="{{$amount}}">
                                        <input type="hidden" name="invoice_type" value="prescription">
                                        
                                        @error('amount')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="name">Discount</label>
                                        <input type="number" name="discount" value="0" class="form-control @error('name') is-invalid @enderror" id="name">
                                        @error('discount')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="name">remark</label>
                                        
                                        <textarea name="remark" id="" cols="30" rows="3" class="form-control">{{@old('remark')}}</textarea>
                                        @error('remark')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                @endif

                                @if($type == 2) 
                                <div class="form-group">
                                   
                                    <label>
                                            Admission
                                    </label>
                                    <input name="amount" type="number" class="form-control" value="{{isset($admission) ? $admission->bedgroup->price : ''}}" readonly>
                                    <input type="hidden" name="invoice_type" value="bed">
                                    @error('amount')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="name">Paid</label>
                                    <input type="number" name="paid" class="form-control @error('name') is-invalid @enderror" id="paid" value="{{isset($admission) ? $admission->paid : ''}}" readonly>
                                    @error('paid')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="name">Due</label>
                                    <input type="number" name="due" class="form-control @error('name') is-invalid @enderror" id="name" value="{{isset($admission) ? $admission->due : ''}}" readonly>
                                    @error('due')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="name">remark</label>
                                    
                                    <textarea name="remark" id="" cols="30" rows="3" class="form-control">{{@old('remark')}}</textarea>
                                    @error('remark')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>

                                @endif
                            
                                @if(!isset($medicine))
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

@endpush