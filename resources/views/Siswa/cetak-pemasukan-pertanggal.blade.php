<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        table.static { 
            position: relative;
            /* left:3%; */
            border: 1px solid #543535;
        }

    </style>
    <title>CETAK DATA PEMASUKAN</title>
</head>
<body>
    <div class="form-group">
        <p align="center"><b>Cetak Laporan Pemasukan Pertanggal</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%;">
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Nominal</th>
            <th>Sumber</th>
        </tr>
            @foreach ($cetakPertanggal as $item)
            <tr> 
            <td>{{ $loop->iteration }}</td>
            <td>{{ date('d-m-Y', strtotime($item->tanggal)) }}</td>
            <td>{{ $item->nominal }}</td>
            <td>{{ $item->sumber }}</td>
            </tr>
            @endforeach
        </table>
    </div>
    
   <script type="text/javascript">
    window.print();
    </script>
</body>
</html>