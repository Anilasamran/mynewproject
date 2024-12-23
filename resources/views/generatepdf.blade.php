

<!DOCTYPE html>
<html>
<head>
    <title>{{ $title }}</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>{{ $title }}</h1>
    
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Product ID</th>
                <th>User ID</th>
                <th>Purchase Quantity</th>
                <th>Sale Quantity</th>
                <th>Remaining Quantity</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($order as $odd)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $odd->product_id }}</td>
                    <td>{{ $odd->user_id }}</td>
                    <td>{{ $odd->purchasequantity }}</td>
                    <td>{{ $odd->sale_qty }}</td>
                    <td>{{ $odd->remain_qty }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <p>Date: {{ $date }}</p>
</body>
</html>
