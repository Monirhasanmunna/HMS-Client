@extends('layouts.backend.main')

@push('css')
<style>
  .card1-border {
    border: 1px solid blue;
  }

  .card1-header-border {
    border-bottom: 1px solid blue;

  }

  .card2-border {
    border: 1px solid green;
  }

  .card2-header-border {
    border-bottom: 1px solid green;

  }
</style>
@endpush

@section('content')
<div class="content-wrapper">
  <section class="content">
    <div class="container-fluid">
      <div class="row pt-3 px-2">
        <div class="col-12 bg-primary pt-1" style="border-radius: 3px">
          <div class="dashboard_header">
            <h6 class="text-center">Welcome To Prescription Management Dashboard</h6>
          </div>
        </div>
      </div>


      <div class="row pt-3">
        <div class="col-3 offset-3">
          <div class="small-box bg-info">
            <div class="inner">
              <h3>{{$totalPatient}}</h3>
              <p>Total Patient</p>
            </div>
            <div class="icon">
              <i class="fa-solid fa-person-pregnant"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-3">
          <div class="small-box bg-info">
            <div class="inner">
              <h3>{{$totalPrescription}}</h3>
              <p>Total Prescription</p>
            </div>
            <div class="icon">
              <i class="fa-solid fa-person"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>


      <div class="row pt-3">
        <div class="col-3">
          <div class="small-box bg-info">
            <div class="inner">
              <h3>50</h3>

              <p>Invoice</p>
            </div>
            <div class="icon">
              <i class="fa-solid fa-receipt"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-3">
          <div class="small-box bg-success">
            <div class="inner">
              <h3>15000</h3>

              <p>Discount</p>
            </div>
            <div class="icon">
              <i class="fa-solid fa-percent"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-3">
          <div class="small-box bg-warning">
            <div class="inner">
              <h3>2000</h3>

              <p>Due</p>
            </div>
            <div class="icon">
              <i class="fa-solid fa-hand-holding-dollar"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-3">
          <div class="small-box bg-primary">
            <div class="inner">
              <h3>20000</h3>

              <p>Cash In</p>
            </div>
            <div class="icon">
              <i class="fa-solid fa-cash-register"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>



    </div>

    <div class="row pt-3">
      <div class="col-md-4 offset-1">
        <div class="card card2-border">
          <div class="card-header py-1 card2-header-border">
            <h5 class="card-title text-danger">New Prescription</h5>
          </div>
          <div class="card-body p-0">
            <table class="table tborder">
              <thead>
                <tr>
                  <th>Patient</th>
                  <th>Date</th>
                  <th style="width: 40px">Status</th>
                </tr>
              </thead>
              <tbody>
                @foreach($newPrescription as $npr)
                <tr>
                  <td>{{$npr->patient->name}}</td>
                  <td>{{date('d-m-Y', strtotime($npr->created_at))}}</td>
                  <td><span class="badge badge-warning text-capitalize">{{$npr->status}}</span></td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>


      <div class="col-4 offset-1">
        <div class="card card2-border">
          <div class="card-header py-1 card2-header-border">
            <h5 class="card-title text-danger">New Patient's</h5>
          </div>
          <!-- /.card-header -->
          <div class="card-body p-0">
            <table class="table tborder">
              <thead>
                <tr>
                  <th>Patient</th>
                  <th>Date</th>
                  <th style="width: 40px">Status</th>
                </tr>
              </thead>
              <tbody>
                @foreach($newPatient as $np)
                <tr>
                  <td>{{$np->name}}</td>
                  <td>{{date('d-m-Y', strtotime($np->created_at))}}</td>
                  <td class="text-right"></td>
                </tr>
                @endforeach

              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
      </div>
    </div>
</div>
<section>
  </div>
  @endsection

  @push('js')

  @endpush