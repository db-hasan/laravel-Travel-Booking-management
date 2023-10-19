<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('bootstrap/bootstrap.min.css') }} ">
    <title>Invoice</title>
    <style>
        .invoice{
            display: flex !important;
            justify-content: space-between;
        }
        .bdr{
            border-right: 5px solid rgb(226, 166, 55);
        }
        #invoice td:last-child {
            text-align: end;
        }

        #invoice th:last-child {
            text-align: end;
        }
    </style>
</head>
<body>
    <div class="container p-5" id="invoice">
        <div class="px-5 invoice">
            <h2>Invoice</h2>
            <h2>Order # 12345</h2>
        </div>
        <hr>
        <div class="px-5 mx-3 invoice">
            <address class="">
    			<strong>Our Agency:</strong><br>
    			HelpsX Tourist<br>
                +8801723629080<br>
    			5810 Bogura, Floor B <br>
    			Springfield, ST 54321
    			
    		</address>
            <address class="text-end">
    			<strong>Client info:</strong><br>
    			Ali Hasan<br>
                Male<br>
    			10/10/1996<br>
                2425 256 215<br>
                +8801718513591<br>
    			1234 Main, Floor B <br>
    			Springfield, ST 54321
    		</address>
        </div>
        <div class="px-5 mx-3 invoice">
            <address class="">
    			<strong>Billed Info:</strong><br>
    			Visa ending **** 4242<br>
    			jsmith@email.com
    		</address>
            <address class="text-end">
    			<strong>Schedule Info:</strong><br>
    			From Date: 10/11/2023<br>
    			To Date: 10/11/2023<br>
    			Arrival Time: 12:00 PM
    		</address>
        </div>
        <div class="d-flex">
            <div class="ps-3 flex-grow-1"><h3 class=""><strong>Order summary</strong></h3></div>
            <div class="d-flex flex-row bg-primary-subtle me-5">
                <div class="p-3 bdr flex-fill">From Date: 10/11/2023</div>
                <div class="p-3 bdr flex-fill">To Date: 10/11/2023</div>
                <div class="p-3 flex-fill">Arrival Time: 12:00 PM</div>
            </div>
        </div>
        <div class="pe-5">
            <table class="table">
            <thead>
                <tr>
                    <th scope="col">Package</th>
                    <th scope="col">Room Type</th>
                    <th scope="col">Person QTY</th>
                    <th scope="col">Price</th>
                    <th scope="col">Totals</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Regular</td>
                    <td>Deluxe Single Room</td>
                    <td>2</td>
                    <td>$10.99</td>
                    <td>$22.00</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <th></th>
                    <th>Totals: $22.00</th>
                </tr>
            </tbody>
        </table>
        </div>
    </div>

</div>
</body>
</html>