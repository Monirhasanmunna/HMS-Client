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
                      <h3 class="card-title text-primary"><i class="fa-solid fa-file-lines"></i><span class="pl-1">User Log's</span></h3>
                      <div class="text-right">
                        <form action="{{Route('app.userlog.delete',1)}}" method="post" id="userlogform" style="display: none">
                          @csrf
                        </form>
                        {{-- <a href="" class="btn btn-sm btn-danger pull-right">Delete All</a>  --}}
                        <button type="submit" onclick="$('#userlogform').submit();" class="btn btn-sm btn-danger pull-right">Delete All</button>
                      </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">


                      <form action="{{route('app.userlog.index')}}" method="POST">
                        @csrf
                        <div class="row pb-3 rb-3">
                          <div class="col-2"></div>
                          <div class="col-sm-3">
                              <!-- <label for="fromDate">From</label> -->
                              <input type="text" class="form-control" value="{{$fromDate}}" placeholder="from date" name="fromDate" id="fromDate">
                          </div>
                          <div class="col-sm-3">
                              <!-- <label for="toDate">to</label> -->
                              <input type="text" class="form-control"  value="{{$toDate}}" placeholder="to date" name="toDate" id="toDate">
                          </div>
                          <div class="col-sm-2">
                              <button class="btn btn-sm btn-success">Search</button>
                          </div>
                          <div class="col-2"></div>
                        </div>
                      </form>


                        <table id="example2" class="table table-bordered table-hover ">
                          <thead>
                          <tr>
                            <th style="width: 100px">#</th>
                            <th>User Name</th>
                            <th>Role</th>
                            <th>Email</th>
                            <th>Login Time</th>
                          </tr>
                          </thead>
                          <tbody>
                        @foreach ($userlogs as $key=>$log)
                        <?php
                            $currentDateTime = $log->created_at;
                            $newDateTime = date('d/m/y : h:i A', strtotime($currentDateTime));
                        ?>
                          <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$log->user_name}} </td>
                            <td>{{$log->role}}</td>
                            <td>{{$log->email}}</td>
                            <td>{{$newDateTime}}</td>
                          </tr>
                        @endforeach                        
                          </tbody>

                          <tfoot>
                            <tr>
                              <th style="width: 100px">#</th>
                              <th>User Name</th>
                              <th>Role</th>
                              <th>Email</th>
                              <th>Login Time</th>
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
@endpush