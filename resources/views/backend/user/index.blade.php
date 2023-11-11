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
                      <h3 class="card-title text-primary"><i class="fa-solid fa-users"></i><span class="pl-1">User's</span></h3>
                      <div class="text-right">
                        <a href="{{Route('app.user.create')}}" id="roleAddBtn" class="btn btn-sm btn-primary pull-right">Add New</a>
                      </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover ">
                          <thead>
                          <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Join At</th>                           
                            <th class="text-center">Action</th>
                          </tr>
                          </thead>
                          <tbody>
                        @foreach ($users as $key=>$user)
                          <tr>
                            <td>{{$key+1}}</td>
                            <td><img style="width:50px;height:50px;border-radius:50%" src="{{asset('storage/users/'.$user->avatar)}}" alt=""></td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>
                                @if($user->status == 1)
                                <span class="badge badge-primary">Active</span>
                                @else
                                <span class="badge badge-warning">Inactive</span>
                                @endif
                            </td>
                            <td>{{$user->created_at->diffForHumans()}}</td>
                            <td class="text-center">
                                <a class="btn btn-sm btn-primary" href="{{Route('app.user.edit',[$user->id])}}" class="btn-sm btn-primary dropdown-item">Edit</a>
                                <a class="btn btn-sm btn-danger" href="javascript:void(0)" onclick="userdelete({{$user->id}})" class="btn-sm btn-danger dropdown-item">Delete</a>
                            </td>
                          </tr>
                        @endforeach
                          </tbody>
                          <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Join At</th>                           
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
        function userdelete(id){

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
                    url      : '/app/user/delete/'+id,
                    dataType : 'json',
                    Type     : 'Delete',
                    success  : function(response){
                      console.log(response)
                      if(response.true){
                        setTimeout(function(){
                        window.location.reload();
                        },1000);
                      }  
                    },
                    });
                }
            });
        }
      </script>

      {{-- <script>
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
      </script> --}}
@endpush