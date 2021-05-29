<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!--Regular Datatables CSS-->
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
    <!--Responsive Extension Datatables CSS-->
    <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">

    <title>MPO INIT TEST - Task One</title>

    <!-- Styles -->
    <style>

    </style>
</head>

<body class="bg-gray-100 text-gray-900 tracking-wider leading-normal">
    <div class="container w-full mx-auto px-2">
    <!--Title-->
    <h1 class="flex items-center font-sans font-bold break-normal text-green-500 px-2 py-8 text-xl md:text-2xl">
        Orders Data
    </h1>
        <!--Card-->
        <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
            <table id="table_order" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                <thead>
                    <tr>
                        <th data-priority="1">No</th>
                        <th data-priority="2">Barcode</th>
                        <th data-priority="3">Quantity</th>
                        <th data-priority="4">Total Price</th>
                        <th data-priority="5">Ready</th>
                        <th data-priority="6">On Hold</th>
                        <th data-priority="7">Delivered</th>
                        <th data-priority="8">Packing</th>
                        <th data-priority="9">Sent</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>1111</td>
                        <td>7</td>
                        <td>180</td>
                        <td>sample</td>
                        <td>sample</td>
                        <td>Sample</td>
                        <td>Sample</td>
                        <td>Sample</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>1122</td>
                        <td>4</td>
                        <td>40</td>
                        <td>sample</td>
                        <td>sample</td>
                        <td>Sample</td>
                        <td>Sample</td>
                        <td>Sample</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!--/Card-->
    </div>
    <!--/container-->
</body>

</html>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<!--Datatables -->
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script>
    $(document).ready(function() {
        $('#table_order').DataTable({
            responsive: true
        })
        .columns.adjust()
        .responsive.recalc()
    })
</script>