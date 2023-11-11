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
                      <h3 class="card-title text-primary"><i class="fa-solid fa-user-doctor"></i><span class="pl-1">Assistant's</span></h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover ">
                          <thead>
                          <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Assistant Of</th>
                            <th>Degrees</th>
                            <th>Mobile</th>
                            <th class="text-center">Action</th>
                          </tr>
                          </thead>
                          <tbody>
                        @foreach ($assistants as $key=>$assistant)
                          <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$assistant->name}}</td>
                            <td>{{$assistant->email}}</td>
                            <td>{{$assistant->doctor->name}}</td>
                            <td>{{$assistant->degrees}}</td>
                            <td>{{$assistant->mobile}}</td>
                            <td class="text-center">
                                <div class="dropdown show dropleft ">
                                    <a class="btn btn-sm btn-primary" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa-solid fa-ellipsis-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a href="javascript:void(0)" onclick="assistantShow({{$assistant->id}})" class="btn-sm btn-info dropdown-item">Show</a>
                                        <a href="{{Route('app.assistant.edit',[$assistant->id])}}" class="btn-sm btn-primary dropdown-item">Edit</a>
                                        <a href="javascript:void(0)" onclick="assistantDelete({{$assistant->id}})" class="btn-sm btn-danger dropdown-item">Delete</a>
                                    </div>
                                  </div>
                            </td>
                          </tr>
                        @endforeach
                          </tbody>
                          <tfoot>
                            <tr>
                              <th>#</th>
                              <th>Name</th>
                              <th>Email</th>
                              <th>Assistant Of</th>
                              <th>Degrees</th>
                              <th>Mobile</th>
                              <th class="text-center">Action</th>
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


<!-- Large modal -->
<div id="assistantModal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fa-solid fa-user-doctor"></i><span class="pl-1">Assistant Details</span></h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <div class="modal-content" style="border: none">
      <div class="row">
        <div class="col-12">
            <div class="card mb-0">
                {{-- <div class="card-header">
                  <h3 class="card-title text-primary"><i class="fa-solid fa-user-doctor"></i><span class="pl-1">Doctor</span></h3>
                </div> --}}
                <div class="card-body">
                    <table style="width:100%">
                        <tr>
                        <th>Name:</th>
                        <td id="name"></td>
                        </tr>
                        <tr>
                        <th>Email:</th>
                        <td id="email"></td>
                        </tr>
                        <tr>
                        <th>Assistant Of:</th>
                        <td id="assistant_of"></td>
                        </tr>
                        <tr>
                        <th>Degrees:</th>
                        <td id="degrees"></td>
                        </tr>
                        <tr>
                        <th>Mobile:</th>
                        <td id="mobile"></td>
                        </tr>
                    </table>
                </div>
            </div>
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
        function assistantDelete(id){

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
                    url      : '/app/assistant/delete/'+id,
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

      <script>
        function assistantShow(id){
            $.ajax({
                url         : '/app/assistant/show/'+id,
                Type        : 'GET',
                dataType    : 'json',
                success     : function(response){
                    $("#name").html(response.name);
                    $("#email").html(response.email);
                    $("#assistant_of").html(response.doctor.name);
                    $("#degrees").html(response.degrees);
                    $("#mobile").html(response.mobile);
                    $("#assistantModal").modal('show');
                }
            });
        }
      </script>
@endpush