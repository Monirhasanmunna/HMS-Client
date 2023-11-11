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
                        <div class="table-responsive p-3">
                          <form action="{{route('app.income.report')}}" method="POST">
                            @csrf
                        <div class="row pb-3 rb-3 mb-3">
                          <div class="col-sm-2 offset-">
                          </div>
                          <div class="col-sm-2">
                            <!-- <label for="type">Type</label> -->
                            <select name="perticular" id="" class="form-control">
                              <option value="#" selected hidden>--Select Once--</option>
                              @foreach ($incomes as $inc)
                                  <option value="{{$inc->particular}}">{{$inc->particular}}</option>
                              @endforeach
                            </select>
                            
                          </div>
                          <div class="col-sm-2">
                              {{-- <label for="fromDate">From</label> --}}
                              <input type="date" class="form-control" value="<?php echo date("Y-m-d"); ?>" placeholder="from date" name="fromDate" id="fromDate">
                          </div>
                          <div class="col-sm-2">
                              <!-- <label for="toDate">to</label> -->
                              <input type="date" class="form-control"  value="<?php echo date("Y-m-d"); ?>" placeholder="to date" name="toDate" id="toDate">
                          </div>
                          <div class="col-sm-2">
                              <button class="btn btn-sm btn-success">Search</button>
                          </div>
                        </div>
                      </form>

                          <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                            <thead class="thead-dark">
                              <tr>
                                <th style="width: 150px">#</th>
                                <th style="width: 350px">Particular</th>
                                <th style="width: 150px">Credit</th>
                                <th>Debit</th>
                                <th>Net</th>
                                <th>Last Cash In</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($incomes as $key=>$income)
                              <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$income->particular}}</td>
                                <td>{{$income->credit}}</td>
                                <td>{{$income->debit}}</td>
                                <td>{{$income->net}}</td>
                                <td>{{$income->updated_at}}</td>
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

