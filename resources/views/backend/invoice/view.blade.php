@extends('layouts.backend.main')

@push('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css" />
<style>
    /* body {
        background-color: azure;
      } */

    .page {
        width: 248mm;
        min-height: 180mm;
        margin: 0 auto;
        border: 1px black solid;
        border-radius: 5px;
        background: white;
        overflow: hidden;
    }

    @media print {
        body * {
            visibility: hidden;
        }

        .page * {
            visibility: visible;
        }

        #printBtn {
            visibility: hidden !important;
        }

    }

</style>
@endpush

@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row pt-3">
                <div class="col-sm-12">
                    <button id="printBtn" onclick="window.print()" class="btn btn-primary float-right">Print</button>
                </div>

                @if (isset($prescription))
                <div class="col-12">
                    <div class="pt-4">
                        <div class="page pb-3 d-flex flex-column justify-content-between mb-5">
                            <div>
                                <div class="row mb-4 bg-light py-3 border-bottom">
                                    <div class="col-12 text-center d-flex justify-content-center">
                                        <div>
                                            <img class="mr-2" style="height: 60px; width: 60px"
                                                src="{{isset($setup) ? asset('storage/logo/'.$setup->logo) : ''}}"
                                                alt="">
                                        </div>
                                        <div>
                                            <h3 class="p-0 m-0 text-info"><b>{{isset($setup) ? $setup->company_name : ''}}</b></h3>
                                            <p class="p-0 m-0">
                                                <small class="border-bottom border-top bg-white border-info">
                                                    <span class="text-info">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                            style="width: 12px">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z">
                                                            </path>
                                                        </svg>
                                                        <i class="text-info">+880 {{isset($setup) ? $setup->phone : ''}}</i>,
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                            style="width: 15px">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75">
                                                            </path>
                                                        </svg>
                                                        <i class="text-info">{{isset($setup) ? $setup->email : ''}}</i>
                                                    </span></small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row px-4 justify-content-between">
                                    <div class="col-4 text-left">
                                        <img style="height: 30px; width: 150px"
                                            src="https://static.vecteezy.com/system/resources/previews/001/199/360/non_2x/barcode-png.png"
                                            alt="">
                                    </div>
                                    <div class="col-4 text-center">
                                        <span
                                            class="bg-light text-dark p-2 border border-secondary rounded-pill rounded-pill"><b>MONEY
                                                RECEIPT</b></span>
                                    </div>
                                    <div class="col-4 text-right">
                                        <img style="height: 30px; width: 150px"
                                            src="https://static.vecteezy.com/system/resources/previews/001/199/360/non_2x/barcode-png.png"
                                            alt="">
                                    </div>
                                </div>
                                <div class="row px-4 mt-2">
                                    <div class="col-6">
                                        <p class="mb-0">
                                            <b>{{isset($prescription) ? $prescription->patient->name : ''}}</b></p>
                                    </div>
                                    <div class="col-6">
                                        <p class="mb-0 text-right"><b>Cabin NO : 101</b></p>
                                    </div>
                                </div>
                                <div class="row px-4 justify-content-between mb-3">
                                    <div class="col-5">
                                        <p class="m-0 p-0 text-gray">
                                            <small>UHID</small>: <b class="bg-light">001</b>
                                        </p>
                                        <small>
                                            <p class="m-0 p-0 text-gray">Age/Sex:
                                                <b>{{isset($prescription) ? $prescription->patient->age : $admission->patients->age}}Y/{{isset($prescription) ? $prescription->patient->sex : ''}}</b>
                                            </p>
                                            <p class="m-0 p-0 text-gray">Contact: <b>Husband</b></p>
                                            <p class="m-0 p-0 text-gray">
                                                Contact No: <b>+880 1798691956</b>
                                            </p>
                                            <p class="m-0 p-0 text-gray">
                                                Address: <b>Kawkhali, Rangamati.</b>
                                            </p>
                                        </small>
                                    </div>
                                    <div class="col-7 text-right">
                                        <small>
                                            <p class="m-0 p-0 text-gray">
                                                Supervise BT:
                                                <b>{{isset($prescription) ? $prescription->doctor->name : ''}}</b>
                                                <br>
                                                <b>({{isset($prescription) ? $prescription->doctor->degrees : ''}})</b>
                                            </p>
                                            <p class="m-0 p-0 text-gray">Invoice Date: <b>{{$invoice->invoice_date}}
                                                </b></p>
                                            <p class="m-0 p-0 text-gray">
                                                Receipt Time: <b>30-10-2018 01:57PM </b>
                                            </p>
                                        </small>
                                    </div>
                                </div>
                                <div class="px-4">
                                    <small>
                                        <table class="table border">
                                            <thead class="bg-light my-0 border-top-0">
                                                <tr class="text-gray">
                                                    <th scope="col" class="p-1 text-center">SN</th>
                                                    <th scope="col" class="p-1">Particulars</th>
                                                    <th scope="col" class="p-1">Description</th>
                                                    <th scope="col" class="text-center p-1">QYT</th>
                                                    <th scope="col" class="text-center p-1">AMOUNT</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($invoice->invoiceDetail as $key => $item)
                                                <tr>
                                                    <td class="p-1 text-center" scope="row">{{$key +1}}</td>
                                                    <td class="p-1">{{$item->detail}}</td>
                                                    <td class="p-1"></td>
                                                    <td class="p-1 text-center">1</td>
                                                    <td class="p-1 text-center">{{$item->unit_amount}}/-</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </small>
                                </div>
                            </div>
                            <div>
                                <div class="row px-4 border-top pt-2">
                                    <div class="col-7">
                                        <small>
                                            <b>
                                                <p class="m-0"><u>Remarks:</u></p>
                                            </b>
                                            <p class="text-gray">{{$invoice->remark}}</p>
                                        </small>
                                        <small>
                                            <b>
                                                <p class="m-0"><u>Paid Amount(In Words)</u></p>
                                            </b>
                                            <p class="m-0 text-gray text-uppercase">
                                                {{Terbilang::make($invoice->net_amount)}} BDT Only</p>
                                        </small>
                                    </div>
                                    <div class="col-5">
                                        <small>
                                            <p class="d-flex m-0 justify-content-between">
                                                <span class="text-right col-7">Sub Total :</span>
                                                <span class="">{{number_format($invoice->amount,2)}}</span>
                                            </p>
                                            <p class="d-flex m-0 justify-content-between">
                                                <span class="text-right col-7">Discount :</span>
                                                <span class="">(-) {{number_format($invoice->discount,2)}}</span>
                                            </p>
                                            <p class="d-flex m-0 justify-content-between">
                                                <span class="text-right col-7">Net Payable :</span>
                                                <span class="">{{number_format($invoice->net_amount,2)}}</span>
                                            </p>
                                            <p class="d-flex m-0 justify-content-between">
                                                <span class="text-right col-7">Pay Amount :</span>
                                                <span class="">{{number_format($invoice->net_amount,2)}}</span>
                                            </p>
                                            <p class="d-flex m-0 justify-content-between">
                                                <span class="text-right col-7">Due : </span>
                                                <span class="">{{number_format($invoice->due,2)}}</span>
                                            </p>
                                            <p class="mb-5 mt-4 text-right">
                                                <span class="text-right d-block"><b><u>Recevied By:</u></b>
                                                </span>
                                                <span class="text-gray">{{Auth::user()->name}}</span>
                                            </p>
                                        </small>
                                    </div>
                                </div>
                                <div class="text-center px-4 d-flex justify-content-between">
                                    <small>
                                        <p class="text-gray mb-1">SoftWare Developed By QBSOFT</p>
                                    </small>
                                    <small>
                                        <p class="text-gray mb-1">Printed Date: 01/11/2002</p>
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                @else


                <div class="col-12">
                    <div class="page pb-0 d-flex flex-column justify-content-between">
                        <div>
                            <!-- pad header  -->
                            <div class="row mb-4 bg-light py-3 border-bottom">
                                <div class="col-12 text-center d-flex justify-content-center">
                                    <div>
                                        <img class="mr-2" style="height: 60px; width: 60px"
                                            src={{isset($setup) ? asset('storage/logo/'.$setup->logo) : ''}}
                                            alt="" />
                                    </div>
                                    <div>
                                        <h3 class="p-0 m-0 text-info"><b>{{isset($setup) ? $setup->company_name : ''}}</b></h3>
                                        <p class="p-0 m-0">
                                            <small class="border-bottom border-top bg-white border-info">
                                                <span class="text-info">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        style="width: 12px">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                                                    </svg>
                                                    <i class="text-info">+880 {{isset($setup) ? $setup->phone : ''}}</i>,
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        style="width: 15px">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                                                    </svg>

                                                    <i class="text-info">{{isset($setup) ? $setup->email : ''}}</i>
                                                </span></small>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- barcode and title  -->
                            <div class="row px-4 justify-content-between">
                                <div class="col-4 text-left">
                                    <img style="height: 30px; width: 150px"
                                        src="https://static.vecteezy.com/system/resources/previews/001/199/360/non_2x/barcode-png.png"
                                        alt="" />
                                </div>
                                <div class="col-4 text-center">
                                    <span
                                        class="bg-light text-dark p-2 border border-secondary rounded-pill rounded-pill"><b>MONEY
                                            RECEIPT</b></span>
                                </div>
                                <div class="col-4 text-right">
                                    <img style="height: 30px; width: 150px"
                                        src="https://static.vecteezy.com/system/resources/previews/001/199/360/non_2x/barcode-png.png"
                                        alt="" />
                                </div>
                            </div>
                            <div class="row px-4 mt-2">
                                <div class="col-6">
                                    <p class="mb-0"><b>{{$admission->patients->name}}</b></p>
                                </div>
                                <div class="col-6">
                                    <p class="mb-0 text-right"><b>Cabin NO : 101</b></p>
                                </div>
                            </div>
                            <!-- invoice top information  -->
                            <div class="row px-4 justify-content-between mb-3">
                                <div class="col-5">
                                    <p class="m-0 p-0 text-gray">
                                        <small>UHID</small>: <b class="bg-light">101</b>
                                    </p>
                                    <small>
                                        <p class="m-0 p-0 text-gray">Age/Sex: <b>{{$admission->patients->age}} Year's/
                                                {{$admission->patients->sex}}</b></p>
                                        {{-- <p class="m-0 p-0 text-gray">Contact: <b>Husband</b></p> --}}
                                        <p class="m-0 p-0 text-gray">
                                            Contact No: <b>+880 {{$admission->patients->mobile}}</b>
                                        </p>
                                        <p class="m-0 p-0 text-gray">
                                            Address: <b>{{$admission->patients->address}}.</b>
                                        </p>
                                    </small>
                                </div>
                                <div class="col-7 text-right">
                                    <small>
                                        <p class="m-0 p-0 text-gray">
                                            Supervise BT: <b>{{$admission->patients->doctor->name}}
                                                ({{$admission->patients->doctor->degrees}})</b>
                                        </p>
                                        <?php 
                                            $date = strtotime($invoice->admission_date);
                                            $newformat = date('d-m-Y',$date);
                                        ?>
                                        <p class="m-0 p-0 text-gray">Admission : <b>{{$newformat}}</b></p>
                                        <p class="m-0 p-0 text-gray">Receipt NO: <b>{{$invoice->id}}</b></p>
                                        <p class="m-0 p-0 text-gray">Invoice Date: <b>{{$invoice->created_at}} </b></p>
                                        <p class="m-0 p-0 text-gray">
                                            Receipt Time: <b>{{$invoice->created_at}} </b>
                                        </p>
                                    </small>
                                </div>
                            </div>
                            <!-- product details -->
                            <div class="px-4">
                                <small>
                                    <table class="table border">
                                        <thead class="bg-light my-0 border-top-0">
                                            <tr class="text-gray ">
                                                <th scope="col" style="width: 380px;" class="p-1 px-2">Bed No|Bed
                                                    Type|Floor</th>
                                                <th scope="col" class="text-right p-1 pr-2">AMOUNT</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="p-1 px-2">
                                                    {{$admission->bed->name}}|{{$admission->bed->bedtype->name}}|{{$admission->bed->bedgroup->floor->name}}
                                                </td>
                                                <td class="p-1 pr-2 text-right">{{$admission->bed->bedgroup->price}}/-</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </small>
                            </div>
                        </div>
                        <!-- footer  -->
                        <div>
                            <div class="row px-4 border-top pt-2">
                                <div class="col-7 px-2">
                                    <small>
                                        <b>
                                            <p class="m-0"><u>Remarks:</u></p>
                                        </b>

                                        <p class="text-gray">Some Comment Will be hare</p>
                                    </small>
                                    <small>
                                        <b>
                                            <p class="m-0"><u>Paid Amount(In Words)</u></p>
                                        </b>

                                        <p class="m-0 text-gray text-uppercase">{{Terbilang::make($invoice->net_amount)}} BDT Only</p>
                                    </small>
                                </div>
                                <div class="col-5 px-3">
                                    <small>
                                        <p class="d-flex m-0 justify-content-between">
                                            <span class="text-right col-7">Sub Total :</span>
                                            <span class=""><strong>{{$admission->bed->bedgroup->price}}</strong></span>
                                        </p>
                                        <p class="d-flex m-0 justify-content-between">
                                            <span class="text-right col-7">Vat (0%):</span>
                                            <span class="">(+)0.00</span>
                                        </p>
                                        <p class="d-flex m-0 justify-content-between">
                                            <span class="text-right col-7">Discount :</span>
                                            <span class="">(-) 0.00</span>
                                        </p>
                                        <p class="d-flex m-0 justify-content-between">
                                            <span class="text-right col-7">Net Payable :</span>
                                            <span class=""><strong>{{$admission->bed->bedgroup->price}}</strong></span>
                                        </p>
                                        <p class="d-flex m-0 justify-content-between">
                                            <span class="text-right col-7">Pay Amount :</span>
                                            <span class=""><strong>{{$admission->paid}}</strong></span>
                                        </p>

                                        <p class="d-flex m-0 justify-content-between">
                                            <span class="text-right col-7">Due : </span>
                                            <span class="">{{isset($admission->due) ? $admission->due : 0 }}</span>
                                        </p>
                                        <p class="mb-5 mt-4 text-right">
                                            <span class="text-right d-block"><b><u>Recevied By:</u></b>
                                            </span>
                                            <span class="text-gray">{{Auth::user()->name}}</span>
                                        </p>
                                    </small>
                                </div>
                            </div>
                            <div class="text-center px-4 d-flex justify-content-between">
                                <small>
                                    <p class="text-gray mb-1">SoftWare Developed By QBSOFT</p>
                                </small>
                                <small>
                                    <p class="text-gray mb-1">Printed Date: 01/11/2002</p>
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
                @endif

            </div>
        </div>
    </section>
</div>
@endsection

@push('js')

@endpush
