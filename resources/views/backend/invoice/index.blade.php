@extends('layouts.backend.main')

@push('css')
    <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('backend/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">

    <style>
        table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        }
        th, td {
        padding: 5px;
        text-align: left;
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
                      <h3 class="card-title text-primary"><i class="fa-solid fa-file-lines"></i><span class="pl-1">Invoice's</span></h3>
                      <div class="text-right">
                        <!-- <a href="{{Route('app.prescription.create')}}" class="btn btn-sm btn-primary pull-right">Add New</a> -->
                      </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">


                      <form action="{{route('app.invoice.index')}}" method="POST">
                        @csrf
                    <div class="row pb-3 rb-3">
                      <div class="col-sm-2 offset-1">
                        <!-- <label for="doctor">Doctor</label>   -->
                        <select name="doctor_id" id="doctor" class="form-control">
                          @foreach($doctors as $doc)
                          <option value="{{$doc->id}}" @selected($doc->id==$doctor_id)>{{$doc->name}}</option>
                          @endforeach
                        </select>

                      </div>
                      <div class="col-sm-2">
                        <!-- <label for="type">Type</label> -->
                        <select name="invoice_type" id="doctor" class="form-control">
                          <option value="prescription"  @selected('prescription'==$invoice_type)> Prescription</option>
                          <option value="bed"  @selected('bed'==$invoice_type)>Bed</option>

                        </select>
                      </div>
                      <div class="col-sm-2">
                          <!-- <label for="fromDate">From</label> -->
                          <input type="text" class="form-control" value="{{$fromDate}}" placeholder="from date" name="fromDate" id="fromDate">
                      </div>
                      <div class="col-sm-2">
                          <!-- <label for="toDate">to</label> -->
                          <input type="text" class="form-control"  value="{{$toDate}}" placeholder="to date" name="toDate" id="toDate">
                      </div>
                      <div class="col-sm-2">
                          <button class="btn btn-sm btn-success">Search</button>
                      </div>
                    </div>
                  </form>


                        <table id="example2" class="table table-bordered table-hover ">
                          <thead>
                          <tr>
                            <th style="width: 100px">#</th>
                            <th>Invoice Date</th>
                            <th>Doctor</th>
                            <th>Patient</th>
                            <th>Invoice Type</th>
                            <th>Amount</th>
                            <th>discount</th>
                            <th>Due</th>
                            <th>Net Amount</th>
                            <th class="text-center" style="width: 170px">Action</th>
                          </tr>
                          </thead>
                          <tbody>
                            <?php 
                            $amount=0;
                            $discount=0;
                            $net_amount=0;
                            $due       =0;
                            ?>
                        @foreach ($invoices as $key=>$inv)
                        <?php
                            $amount +=$inv->amount;
                            $discount +=$inv->discount;
                            $net_amount +=$inv->net_amount;
                            $due +=$inv->due;
                        ?>
                        <tr>
                            <td>{{$key+1}}</td>
                            
                            <td>{{$inv->invoice_date}} </td>
                            <td>{{$inv->doctor->name}}</td>
                            <td>{{$inv->patient->name}}</td>
                            <td>{{$inv->invoice_type}}</td>
                            <td>{{number_format($inv->amount,2)}}</td>
                            <td>{{number_format($inv->discount,2)}}</td>
                            <td>{{number_format($inv->due,2)}}</td>
                            <td>{{number_format($inv->net_amount,2)}}</td>
                            
                            <td class="text-center">
                              <a href="{{Route('app.invoice.show',[$inv->id])}}" target="_new" class="btn btn-sm btn-info">View</a>
                              <a href="{{Route('app.invoice.print',[$inv->id])}}" target="_new" class="btn btn-sm btn-info">print</a>
                              
                              
                              
                            </td>
                          </tr>
                        @endforeach                        
                          </tbody>

                          <tfoot>
                            <tr>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th>{{number_format($amount,2)}}</th>
                                <th>{{number_format($discount,2)}}</th>
                                <th>{{number_format($due,2)}}</th>
                                <th>{{number_format($net_amount,2)}}</th>
                                <th></th>
                            </tr>
                          </tfoot>
                          
                        </table>
                      </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
                <!-- /.col -->
              </div>
        </div>
    <section>
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
    <script>
        $(function () {
          $('#fromDate').datepicker();
          $('#toDate').datepicker();
          $("#example1").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
          }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
          $('#example2').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
          });
        });
      </script>

      <script>

        function presDelete(id){

            Swal.fire({
                title: 'Are you sure?',
                text: "You will lost this data!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                    )
                    $.ajax({
                    url      : '/app/prescription/delete/'+id,
                    dataType : 'json',
                    Type     : 'Delete',
                    success  : function(response){
                        setTimeout(function(){
                        window.location.reload();
                        },1000);
                    },
                    });
                }
            });
        }
      </script>
@endpush