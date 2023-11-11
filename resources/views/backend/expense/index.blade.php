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
                        <span class="text-right mb-1">
                            <button class="btn btn-sm btn-primary mt-3 mr-3" id="expenseAdd"><i class="fa-solid fa-circle-plus"></i><span class="pl-1">Add New</span></button>
                          </span>
                        <div class="table-responsive p-3">
                          <form action="{{route('app.expense.report')}}" method="POST">
                            @csrf
                        <div class="row pb-3 rb-3">
                          <div class="col-sm-2 offset-">
                          </div>
                          <div class="col-sm-2">
                            <!-- <label for="type">Type</label> -->
                            <select name="invoice_type" id="doctor" class="form-control">
                              <option value="#" selected hidden>--Select Once--</option>
                              @foreach ($expenseCategories as $cat)
                                  <option value="{{$cat->id}}">{{$cat->name}}</option>
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
                                <th style="width: 350px">Name</th>
                                <th style="width: 150px">Category</th>
                                <th>Amount</th>
                                <th>Date</th>
                                <th class="text-center">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($expenses as $key=>$expense)
                              <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$expense->name}}</td>
                                <td>{{$expense->expenseCategory->name}}</td>
                                <td>{{$expense->amount}}</td>
                                <td>{{$expense->created_at}}</td>
                                <td class="text-center">
                                  <a class=" btn-sm btn-primary" onclick = "editexpense({{$expense->id}})" href="javascript:void(0)"><i class="fa-regular fa-pen-to-square"></i>Edit</a>
                                  <a class=" btn-sm btn-danger"  onclick = 'deleteexpense({{$expense->id}})' href="javascript:void(0)"><i class="fa-solid fa-trash"></i>Delete</a>
                                </td>
                              </tr>
                              @endforeach
                            </tbody>
                          </table>
                        </div>
                      </div>
                    
                      {{-- add expense modal --}}
                    <div class="modal fade bd-example-modal-lg" id="expenseAddModel" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-md">
                          <div class="modal-content">
                            <div class="row">
                              <div class="col-lg-12">
                                  <div class="card mb-0">
                                    <div class="modal-header bg-primary text-white">
                                      <h5 class="modal-title" id="exampleModalLabel"><i class="fa-solid fa-building"></i><span class="pl-1">Expense Add</span></h5>
                                      <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                      <div class="card-body">
                                          <form action="{{route('app.expense.store')}}" method="POST">
                                              @csrf
                                                <div class="form-group">
                                                  <label for="expenseName">Name</label>
                                                  <input id="" type="text" class="form-control" name="name" required>
                                                </div>

                                                <div class="form-group">
                                                  <label>Select</label>
                                                  <select class="form-control" name="expenseCategory_id">
                                                    @foreach ($expenseCategories as $cat)
                                                    <option value="{{$cat->id}}">{{$cat->name}}</option>
                                                    @endforeach
                                                  </select>
                                                </div>

                                                <div class="form-group">
                                                  <label for="amountName">Amount</label>
                                                  <input id="" type="number" class="form-control" name="amount" required>
                                                </div>
                                                
                                                <div class="form-group">
                                                  <label for="description">Description</label>
                                                  <textarea id="" type="text" class="form-control" name="description"></textarea>
                                                </div>
                                      
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                          </form>
                                        </div>
                                  </div>
                                </div>
                          </div>
                          </div>
                        </div>
                      </div>
                      
                      {{-- edit expense modal --}}
                      <div class="modal fade bd-example-modal-lg" id="expenseeditModel" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-md">
                          <div class="modal-content">
                            <div class="row">
                              <div class="col-lg-12">
                                  <div class="card mb-4">
                                    <div class="modal-header bg-primary text-white">
                                      <h5 class="modal-title" id="exampleModalLabel"><i class="fa-solid fa-building"></i><span class="pl-1">Expense Edit</span></h5>
                                      <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                      <div class="card-body">
                                          <form action="{{route('app.expense.update',[1])}}" method="POST">
                                              @csrf
                                                <input type="number" hidden name="expense_id" id="expense_id">
                                                <div class="form-group">
                                                  <label for="expenseName">Name</label>
                                                  <input id="expense_name" type="text" class="form-control" name="name" required>
                                                </div>

                                                <div class="form-group">
                                                  <label>Select</label>
                                                  <select class="form-control" id="expcat" name="expenseCategory_id">
                                                    @foreach ($expenseCategories as $cat)
                                                    <option value="{{$cat->id}}">{{$cat->name}}</option>
                                                    @endforeach
                                                  </select>
                                                </div>

                                                <div class="form-group">
                                                  <label for="amountName">Amount</label>
                                                  <input id="amount" type="number" class="form-control" name="amount" required>
                                                </div>

                                                <div class="form-group">
                                                  <label for="description">Description</label>
                                                  <textarea id="expense_description" type="text" class="form-control" name="description"></textarea>
                                                </div>
                                      
                                                <button type="submit" class="btn btn-primary">Update</button>
                                          </form>
                                        </div>
                                  </div>
                                </div>
                          </div>
                          </div>
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
    $("#expenseAdd").click(function(){
        $("#expenseAddModel").modal('show');
    });
</script>

<script>
  function editexpense(id){
    $.ajax({
      url         : '/app/account/expense/edit/'+id,
      type        : 'GET',
      dataType    : 'json',
      success     : function(response){
        console.log(response);
        $("#expense_id").val(response.id);
        $("#expense_name").val(response.name);
        $("#amount").val(response.amount);
        $("#expense_description").val(response.description);
        $("#expcat").append(`<option value="${response.expense_category.id}" selected hidden>${response.expense_category.name}</option>`);
        $("#expenseeditModel").modal('show');
      }
    });
  }
</script>

<script>
  function deleteexpense(id){

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
              url      : '/app/account/expense/delete/'+id,
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
