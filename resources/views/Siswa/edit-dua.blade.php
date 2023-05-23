
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
                            <form action="{{ url('update-dua', $sis->id)}}" method="post">
                            @csrf
                            <div class="form-group">
                                <input type="date" id="tanggal" name="tanggal" class="form-control" placeholder="Tanggal" value="{{ $sis->tanggal }}">
                            </div>
                            <div class="form-group">
                                <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Siswa" value="{{ $sis->nama }}">
                            </div>
                            <div class="form-group">
                                <input type="text" id="jurusan" name="jurusan" class="form-control" placeholder="Jurusan" value="{{ $sis->jurusan }}">
                            </div>
                            <div class="form-group">
                                <input type="text" id="tunggakan" onkeyup="sum();" name="tunggakan" class="form-control" placeholder="Tunggakan" value="{{ $sis->tunggakan }}">
                            </div>
                            <div class="form-group">
                                <input type="text" id="pembayaran" onkeyup="sum();" name="pembayaran" class="form-control" placeholder="Pembayaran" value="{{ $sis->pembayaran }}">
                            </div>
                            <div class="form-group">
                                <input type="text" id="sisa_tunggakan"onkeyup="sum();" name="sisa_tunggakan" class="form-control" placeholder="Sisa Tunggakan" value="{{ $sis->sisa_tunggakan }}"readonly>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Ubah Data</button>
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
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
    </div>

   @include('template.script')

   <script>
    function sum() {
        var txtFirstNumberValue = document.getElementById('tunggakan').value;
        var txtSecondNumberValue = document.getElementById('pembayaran').value;
        var result = parseInt(txtFirstNumberValue) - parseInt(txtSecondNumberValue);
        if (!isNaN(result)) {
            document.getElementById('sisa_tunggakan').value=result;
        }
    }
   </script>
   
</body>

</html><!--[if !IE]><!--><!--<![endif]-->