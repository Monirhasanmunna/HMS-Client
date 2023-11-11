<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <style>
        body { margin: 0; font-size: 16px; font-family: "Arrial Narrow";}
        @media print {
            *{
                font-family: "Times New Roman" !important;
            }
            .header, .header-space,
            .footer, .footer-space {
            }
            .wrapper{
                margin-top: 50px;
            }
            .header {
                position: fixed;
                top: 14px;
            }
            .footer {
                position: fixed;

                bottom: 7px;
            }
            .footer p{
                margin: 0px 0px !important;
            }
            p{
                margin: 1px 0px;
                font-size: 15px;
                font-weight: 700;
                font-family: Khaled;
            }
            .wrapper p{

                font-size: 18px;
                font-weight: 700;
                font-family: Khaled;
            }
            .single p{
                font-size: 15px !important;
                margin: 0px 0px !important;
            }
            .single {
                min-height:20px;
                overflow: hidden;
            }
            .row{
                overflow: hidden;
            }
            .margin-t{
                height: 273px;
                width: 100%;
            }
        }

        table, td {
          border: 1px solid black;
        }
        th {
            border: none;
        }

        table {
          width: 100%;
          border-collapse: collapse;
        }
    </style>
</head>
<body>




    <section class="content">


    <table style="border:0px solid">
        <tr style="border:0px solid">
            <td colspan="3" align="center" style="border:0px solid">
                <img style="height: 60px; width: 80px" src="https://logos-world.net/wp-content/uploads/2020/12/Lays-Logo.png" alt="">
                <h3 class="p-0 m-0 text-info"><b>{{config('app.name')}}</b></h3>
                <i class="text-info">+880 1798691956</i>,
                <i class="text-info">abcedfg@gmail.com</i>
            </td>
        </tr>
        <tr style="border:0px solid">
            <td style="border:0px solid">
                <img style="height: 30px; width: 150px" src="https://static.vecteezy.com/system/resources/previews/001/199/360/non_2x/barcode-png.png" alt="">
                <br><br><br>
                
            </td>
            <td style="border:0px solid">
            <h2><b>MONEY RECEIPT</b></h2>
            </td>
            <td style="border:0px solid">
                <img style="height: 30px; width: 150px" src="https://static.vecteezy.com/system/resources/previews/001/199/360/non_2x/barcode-png.png" alt="">

            </td>

        </tr>
        <tr style="border:0px solid">
            <td style="border:0px solid">
            <p><b>{{isset($prescription) ? $prescription->patient->name : $admission->patients->name}}</b></p>
            <p class="m-0 p-0 text-gray">
              <small>UHID</small>: <b class="bg-light">001</b>
            </p>
            <p class="m-0 p-0 text-gray">Age/Sex: <b>{{isset($prescription) ? $prescription->patient->age : $admission->patients->age}}Y/{{isset($prescription) ? $prescription->patient->sex : $admission->patients->sex}}</b></p>
            <p class="m-0 p-0 text-gray">Contact: <b>Husband</b></p>
            <p class="m-0 p-0 text-gray">
              Contact No: <b>+880 1798691956</b>
            </p>
            <p class="m-0 p-0 text-gray">
              Address: <b>Kawkhali, Rangamati.</b>
            </p>
            </td>
            <td style="border:0px solid"></td>
            <td style="border:0px solid">
                <p><b>Cabin NO : 101</b></p>
                <p class="m-0 p-0 text-gray">
                  Supervise BT: <b>{{isset($prescription) ? $prescription->doctor->name : $admission->patients->doctor->name}}({{isset($prescription) ? $prescription->patient->doctor->degrees : $admission->patients->doctor->degrees}})</b>
                </p>
                <p class="m-0 p-0 text-gray">Invoice Date: <b>{{$invoice->invoice_date}} </b></p>
                <p class="m-0 p-0 text-gray">
                  Receipt Time: <b>30-10-2018 01:57PM </b>
                </p>
                
            </td>
        </tr>
    </table>

<br/>
<br/>
<br/>
<br/>
                      <table class="table border">
                        <thead class="bg-light my-0 border-top-0">
                          <tr class="text-gray">
                            <th scope="col" class="p-1 text-center">SN</th>
                            <th scope="col" class="p-1">Particulars</th>
                            <th scope="col" class="text-center p-1">AMOUNT</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($invoice->invoiceDetail as $key => $item)
                          <tr>
                            <td class="p-1 text-center" scope="row">{{$key +1}}</td>
                            <td class="p-1">{{$item->detail}}</td>
                            <td class="p-1 text-center">{{$item->unit_amount}}/-</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>



                    <br/>
                    <br/>
                    <br/>
                    <table style="border:0px solid">
                        <tr style="border:0px solid">
                            <td style="border:0px solid">
                                <p class="m-0"><u>Remarks:</u></p></b>
                              <p class="text-gray">{{$invoice->remark}}</p>
                                <br><br>
                              <p class="m-0"><u>Paid Amount(In Words)</u></p></b>
                            <p class="m-0 text-gray text-uppercase">{{Terbilang::make($invoice->net_amount)}} BDT Only</p>
                            </td>
                            <td style="border:0px solid"></td>
                            <td style="border:0px solid">

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
                                  <span class="text-gray">MD RIAJ</span>
                                </p>
                                <br>
                                <br>
                                <br>
                            </td>
                        </tr>
                        <tr style="border:0px solid">
                            <td style="border:0px solid">
                                <p class="text-gray mb-1">SoftWare Developed By QBSOFT</p>

                            </td>
                            <td style="border:0px solid" width="15%">

                            </td>
                            <td style="border:0px solid">
                                <p class="text-gray mb-1">Printed Date: 01/11/2002</p>

                            </td>
                        </tr>
                    </table>
                   
    </section>


</body>
</html>