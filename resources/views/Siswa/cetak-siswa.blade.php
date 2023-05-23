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
    <title>CETAK DATA SISWA</title>
</head>
<body>
    <div class="form-group">
        <p align="center"><b>Laporan Pemasukan</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%;">
        <tr>
        <th>No</th>
        <th>Tanggal </th>
        <th>Nama</th>
        <th>Jurusan</th>
        <th>Sumbangan</th>
        <th>Pembayaran</th>
        <th>Sisa Sumbangan</th>
        <th>Tanggal </th>
        <th>Pembayaran</th>
        <th>Sisa Sumbangan</th>                                    
        </tr>
            @foreach ($siswa as $item)
            <tr> 
            <td>{{ $loop->iteration }}</td>
            <td>{{ date('d-m-Y', strtotime($item->tanggal)) }}</td>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->jurusan }}</td>
            <td>{{ formatRupiah($item->sumbangan) }}</td>
            <td>{{ formatRupiah($item->pembayaran_satu)  }}</td>
            <td>{{ formatRupiah($item->sisa_sumbangan) }}</td>
            <td>{{ date('d-m-Y', strtotime($item->tanggal)) }}</td>
            <td>{{ formatRupiah($item->pembayaran_dua)  }}</td>
            <td>{{ formatRupiah($item->sisa_sumbanganDua) }}</td>   
            </tr>
            @endforeach
        </table>
    </div>
    <script type="text/javascript">
    window.print();
    </script>
</body>
</html>