
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
                @include('template.navbarrrr')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="conten">
                    <div class="card shadow mb-4">
                    <div class="card card-info card-outline">
                        <div class="card-header py-3">
                        <h3 class="m-0 font-weight-bold text-primary">PEMASUKAN</h3>
                        </div>
                            </div>
                            <br>
                            <div class="card-body">
                            <div class="row">
                        <div class="input-group mb-2 col-md-3">
                         <label for="label">Tanggal Awal</label>
                         <input type="date" name="tglawal" id="tglawal" class="form-control" />
                         
                        </div>

                        <div class="input-group mb-2 col-md-3">
                         <label for="label">Tanggal Sampai</label>
                         <input type="date" name="tglakhir" id="tglakhir" class="form-control" />
                         </div>
                        </div>
                        
                        <br>
                            
                            <div class="card-tools col-md-8">
                            <a href="{{route('create-pemasukan')}}" class="btn btn-success">Tambah Data <i class="fas fa-plus square"></i></a>
                            <a href="{{route('cetak-pemasukan')}}" target="_blank" class="btn btn-primary">Download PDF <i class="fa-solid fa-download"></i></a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal </th>
                                            <th>Nominal</th>
                                            <th>Sumber</th>
                                            <th>Aksi</th>
                                        </tr>
                                        @foreach ($pem as $item)
                                        <tbody>
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ date('d-m-Y', strtotime($item->tanggal)) }}</td>
                                            <td>{{ $item->nominal }}</td>
                                            <td>{{ $item->sumber }}</td>
                                            <td>
                                            <a href="{{ url('edit-pemasukan', $item->id) }}" class="btn btn-info rounded-pill d-inline">Edit <i class="fa-solid fa-pen-to-square"></i></a> 
                                            <a href="{{ url('delete-pemasukan', $item->id) }}" class="btn btn-danger rounded-pill d-inline">Delete <i class="fa-solid fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        </tbody>
                                        @endforeach
                                    </thead>
                                </table>
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

   @include('sweetalert::alert')

</body>

</html>