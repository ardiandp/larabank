<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users | Kodingin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css" />
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
</head>

<body class="container">
    <h1 class="mt-4 mb-4"> User DataTable Server Side</h2>
        <table id="data_users_side" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>Tanggal</th>
                    <th>Keterangan</th>
                    <th>Cabang</th>
                    <th>Jumlah</th>
                    <th>Status</th>
                    <th>Saldo</th>
                    <th>ID</th>
                </tr>
            </thead>
        </table>
        <script>
            $(function() {
                $('#data_users_side').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "/bank_server_side",
                    columns: [{
                            data: 'tanggal',
                            name: 'tanggal'
                        },
                        {
                            data: 'keterangan',
                            name: 'keterangan'
                        },
                        {
                            data: 'cabang',
                            name: 'cabang'
                        },
                        {
                            data: 'jumlah',
                            name: 'jumlah'
                        },
                        {
                            data: 'status',
                            name: 'status'
                        },
                        {
                            data: 'saldo',
                            name: 'saldo'
                        },
                        {
                            data: 'ID',
                            name: 'ID'
                        }
                    ]
                });
            });
        </script>
</body>
</html>