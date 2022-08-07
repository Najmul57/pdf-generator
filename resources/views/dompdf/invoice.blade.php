@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Invoice
                        </button>
                        <ul class="dropdown-menu">
                            <a href="{{ route('invoice.pdf',['type'=>'stream']) }}"  target="_blank" class="dropdown-item">View</a>
                            <a href="{{ route('invoice.pdf',['type'=>'download']) }}" target="_blank"  class="dropdown-item">Download</a>
                        </ul>
                    </div>

                </div>

                <div class="card-body" style="height: 100vh">
                    <style>
                        .w-100 {
                            width: 100%;
                        }

                        .text-center {
                            text-align: center;
                        }

                        .text-left {
                            text-align: left
                        }

                        .text-right {
                            text-align: right
                        }

                        .pdf-footer {
                            position: absolute;
                            bottom: 0;
                            left: 0;
                            background: red;
                            font-size: 15px;
                            margin: 0;
                            padding: 10px 0;
                            color: white;

                        }

                        .m-0 {
                            margin: 0;
                        }
                    </style>
                    <main>
                        <div>
                            <table class="w-100">
                                <tr>
                                    <td class="text-left"><img src="" alt=""></td>
                                    <td class="text-right">Invoice</td>
                                </tr>
                            </table>
                        </div>
                        <div>
                            <table class="w-100">
                                <tr>
                                    <td width="70%" class="text-left">
                                        <b>To</b>
                                        Md Najmul Hasan <br>
                                        najmul@gmail.com <br>
                                        01937563157 <br>
                                        Jessore
                                    </td>
                                    <td width="30%" class="text-right">
                                        <b>Invoice No</b> 100 <br>
                                        <b>Payment Status</b> Paid <br>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div>
                            <table class="w-100 product_table">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>Description</th>
                                        <th class="text-center">Qty</th>
                                        <th>Price</th>
                                        <th>Subject</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>Item One</td>
                                        <td class="text-center">5</td>
                                        <td>100</td>
                                        <td>200</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="4">Total</td>
                                        <td>300</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </main>
                    <footer class="pdf-footer w-100 text-center">
                        Corresponding Address <br>
                        Email:najmul@gmail.com | 01937563157 | Jessore
                    </footer>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection