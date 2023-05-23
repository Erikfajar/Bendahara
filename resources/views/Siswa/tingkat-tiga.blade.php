
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
                @include('template.navbarrr')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="conten">
                    <div class="card shadow mb-4">
                    <div class="card card-info card-outline">
                        <div class="card-header py-3">
                        <h3 class="m-0 font-weight-bold text-dark">TINGKAT XII</h3>
                        </div>
                            </div>
                        <br>
                            <div class="card-tools col-md-3">
                            <a href="{{route('create-tiga')}}" class="btn btn-primary">Tambah Data Siswa<i class="fas fa-plus square"></i></a>
                            <br>
                            <br>
                            <form action="{{route ('tingkat-tiga')}}" method="GET">
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">

                            <input type="text" name="search" id="search"class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </form>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal </th>
                                            <th>Nama</th>
                                            <th>Jurusan</th>
                                            <th>Tunggakan</th>
                                            <th>Pembayaran</th>
                                            <th>Sisa Tunggakan</th>
                                            <th>Aksi</th>
                                        </tr>
                                        @foreach ($tingkat3 as $item)
                                        <tbody>
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ date('d-m-Y', strtotime($item->tanggal)) }}</td>
                                            <td>{{ $item->nama }}</td>
                                            <td>{{ $item->jurusan }}</td>
                                            <td>{{ formatRupiah($item->tunggakan) }}</td>
                                            <td>{{ formatRupiah($item->pembayaran)  }}</td>
                                            <td>{{ formatRupiah($item->sisa_tunggakan) }}</td>
                                            <td>
                                                <a href="{{ url('edit-tiga', $item->id) }}" class="btn btn-info rounded-pill d-inline">Edit <i class="fa-solid fa-pen-to-square"></i></a>
                                                <a href="{{ url('delete-tiga', $item->id) }}" class="btn btn-danger rounded-pill d-inline">Delete <i class="fa-solid fa-trash"></i></a>
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

   @include('sweetalert::alert')

</body>

</html>