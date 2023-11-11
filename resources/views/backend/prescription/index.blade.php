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
                      <h3 class="card-title text-primary"><i class="fa-solid fa-file-lines"></i><span class="pl-1">Prescription's</span></h3>
                      <div class="text-right">
                        <a href="{{Route('app.prescription.create')}}" class="btn btn-sm btn-primary pull-right">Add New</a>
                      </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover ">
                          <thead>
                          <tr>
                            <th style="width: 100px">#</th>
                            <th>Patient</th>
                            <th>Test Given</th>
                            <th>Next Visit</th>
                            <th class="text-center" style="width: 170px">Action</th>
                          </tr>
                          </thead>
                          <tbody>
                        @foreach ($prescriptions as $key=>$pres)
                          <tr>
                            <td>{{$key+1}}</td>
                            
                            <td>{{$pres->patient->name}}</td>
                            <td>{{$pres->test->count()}}</td>
                            <td>{{$pres->created_at->format('d-m-Y')}} + {{$pres->next_meet}} {{$pres->meet_day}} </td>

                            <td class="text-center">
                              <a href="{{Route('app.prescription.view',[$pres->id])}}" class="btn btn-sm btn-info">View</a>
                              
                              @if(($pres->status=='new') || ($pres->status=='fillup'))
                              <a href="{{Route('app.prescription.edit',[$pres->id])}}" class="btn btn-sm btn-dark">Edit</a>
                              <a href="{{route('app.invoice.generate',['1',$pres->id])}}" class="btn btn-sm btn-success" >Generate Invoice</a>
                              <a href="javascript:void(0)" onclick="presDelete({{$pres->id}})" class="btn btn-sm btn-danger">Delete</a>
                              @elseif(($pres->status=='complete') || ($pres->status=='paid') || ($pres->status=='pending'))
                              <a href="{{route('app.invoice.show', $pres->id)}}" class="btn btn-sm btn-success" >Invoice</a>
                              @endif
                              
                            </td>
                          </tr>
                        @endforeach
                          </tbody>
                          
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