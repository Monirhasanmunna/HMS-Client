@extends('layouts.backend.main')

@push('css')
<style>
    .select2-container--default .select2-selection--single {
        background-color: #fff;
        border: 1px solid #aaa;
        border-radius: 4px;
        padding-top: 2px;
    }


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
                <div class="col-lg-12">
                    <div class="card mb-4">
                        <div class="p-3">
                            <h3 class="text-secondary">Transanction Histories</h3>
                        </div>
                        {{-- <span class="text-right mb-1">
                            <button class="btn btn-sm btn-primary mt-3 mr-3" id="expenseAdd"><i
                                    class="fa-solid fa-circle-plus"></i><span class="pl-1">Add New</span></button>
                        </span> --}}
                        <div class="table-responsive p-3">
                            {{-- <form action="{{route('app.expense.report')}}" method="POST">
                                @csrf
                                <div class="row pb-3 rb-3">
                                    <div class="col-sm-2 offset-">
                                    </div>
                                    <div class="col-sm-2">

                                        <select name="invoice_type" id="doctor" class="form-control">
                                            <option value="#" selected hidden>--Select Once--</option>
                                            @foreach ($expenseCategories as $cat)
                                            <option value="{{$cat->id}}">{{$cat->name}}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                    <div class="col-sm-2">
                                        
                                        <input type="date" class="form-control" value="<?php echo date("Y-m-d"); ?>"
                                            placeholder="from date" name="fromDate" id="fromDate">
                                    </div>
                                    <div class="col-sm-2">
                                        
                                        <input type="date" class="form-control" value="<?php echo date("Y-m-d"); ?>"
                                            placeholder="to date" name="toDate" id="toDate">
                                    </div>
                                    <div class="col-sm-2">
                                        <button class="btn btn-sm btn-success">Search</button>
                                    </div>
                                </div>
                            </form> --}}

                            <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                                <thead class="thead-dark">
                                    <tr>
                                        <th style="width: 150px">#</th>
                                        <th style="width: 350px">Reason</th>
                                        <th>Ammount</th>
                                        <th>Type</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($histories as $key=>$history)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$history->reason}}</td>
                                        <td>{{$history->ammount}}</td>
                                        <td>
                                            @if($history->type == 'debit')
                                            <span class="badge badge-danger">Debit</span>
                                            @else
                                            <span class="badge badge-primary">Credit</span>
                                            @endif
                                        </td>
                                        <td>{{$history->date}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
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
