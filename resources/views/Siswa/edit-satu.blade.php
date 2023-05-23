
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bendahara</title>
   @include('template.head')

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
       @include('template.left-sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('template.navbar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-body">

                        <h3>Edit Data Siswa</h3>
                            <form action="{{ url('update-satu', $sis->id)}}" method="post">
                            @csrf
                            <p>TANGGAL</p>
                            <div class="form-group">
                                <input type="date" id="tanggal" name="tanggal" class="form-control" placeholder="Tanggal" value="{{ $sis->tanggal }}">
                            </div>
                            <p>SUMBANGAN</p>
                            <div class="form-group">
                                <input type="number" id="sumbangan" onkeyup="sum();" name="sumbangan" class="form-control" placeholder="Sumbangan" value="{{ $sis->sumbangan }}">
                            </div>
                            <P>PEMBAYARAN PERTAMA</P>
                            <div class="form-group">
                                <input type="number" id="pembayaran_satu" onkeyup="sum();" name="pembayaran_satu" class="form-control" placeholder="Pembayaran Satu" value="{{ $sis->pembayaran_satu }}">
                            </div>
                            <p>SISA SUMBANGAN</p>
                            <div class="form-group">
                                <input type="number" id="sisa_sumbangan" onkeyup="sum();" name="sisa_sumbangan" class="form-control" placeholder="Sisa Sumbangan" value="{{ $sis->sisa_sumbangan }}" readonly>
                            </div>
                            <p>TANGGAL</p>
                            <div class="form-group">
                                <input type="date" id="tanggall" name="tanggall" class="form-control" placeholder="Tanggal" value="{{ $sis->tanggall }}">
                            </div>
                            <p>PEMBAYARAN KEDUA</p>
                            <div class="form-group">
                                <input type="number" id="pembayaran_dua" onkeyup="sum();" name="pembayaran_dua" class="form-control" placeholder="Pembayaran Dua" value="{{ $sis->pembayaran_dua }}" >
                            </div>
                            <p>SISA SUMBANGAN</p>
                            <div class="form-group">
                                <input type="number" id="sisa_sumbanganDua" onkeyup="sum();" name="sisa_sumbanganDua" class="form-control" placeholder="Sisa Sumbangan" value="{{ $sis->sisa_sumbanganDua }}" readonly>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Simpan Data</button>
                            </div>
                        </div>          
                        </div>
                    </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
          @include('template.footer')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <!-- <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div> -->

   @include('template.script')

   <script>
    function sum() {
        var txtFirstNumberValue = document.getElementById('sumbangan').value;
        var txtSecondNumberValue = document.getElementById('pembayaran_satu').value;
        var result = parseInt(txtFirstNumberValue) - parseInt(txtSecondNumberValue);
        if (!isNaN(result)) {
            document.getElementById('sisa_sumbangan').value=result;
        }

        var txtFirstNumberValue = document.getElementById('sisa_sumbangan').value;
        var txtSecondNumberValue = document.getElementById('pembayaran_dua').value;
        var result = parseInt(txtFirstNumberValue) - parseInt(txtSecondNumberValue);
        if (!isNaN(result)) {
            document.getElementById('sisa_sumbanganDua').value=result;
        }
    }
   </script>
    
</body>

</html>