<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice</title>
    <style>
        @page{
            margin: 0;
        }
        body{
            margin: 0.5cm 0.5cm 1.5cm 0.5cm;
            font-size: 10px;
            font-family: Arial, Helvetica, sans-serif;
        }
        *{
            box-sizing: border-box;
        }
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
            position: fixed;
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
</head>
<body>
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
</body>
</html>