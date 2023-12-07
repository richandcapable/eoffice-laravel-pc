<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/Banjarbaru.png" type="image/x-icon">
    <title>EOffice Kota Banjarbaru</title>

    <!-- Custom fonts for this template -->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        @include('layouts.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                @include('layouts.navbarsasaran')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="container mt-4">
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table table-bordered w-100" style="background-color: white;">
                                    <tr>
                                        <td colspan="2">
                                            <b>Detail Sasaran</b>
                                            <div class="text-center">
                                    <tr>
                                        <td>
                                            <b>Visi</b>
                                            <p>{{ $visi->first()->visi }}</p>
                                        </td>
                                        <td>
                                            <b>Tujuan</b>
                                            <p>{{ $sasaran->tujuan }}</p>
                                        </td>
                                    </tr>
                            </div>
                            </td>
                            <td>
                                <div id="visiContent">
                                    <b>Misi</b>
                                </div>
                                <div>
                                    <div>
                                        {{ $sasaran->misi }}
                                    </div>
                                </div>
                            </td>
                            <td>
                                <b>Indikator Tujuan</b>
                                <p>
                                    {{ $sasaran->indikator_tujuan }}
                                </p>
                                </tr>
                                </table>
                        </div>
                    </div>
                </div>
                </tr>

            </div>
            <div class="container mt-4">
                <div class="row">
                    <div class="col-sm-12">
                        <table class="table table-bordered" style="background-color: white;">
                            <thead>
                                <tr>
                                    <td colspan="9">
                                        <div class="btn-group">
                                            <button type="button"
                                                class="btn btn-outline-secondary btn-sm dropdown-toggle"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-cog fa-s"></i><!-- Ikon setelan (setting) -->
                                            </button>
                                            <p class="ml-3 text-center"><b>Nama Sasaran :</b>
                                                {{ $sasaran->nama_sasaran }}
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" data-tip="editsasaran" data-toggle="modal"
                                                    data-target="#editSasaran">Edit</a>
                                                <a class="dropdown-item" data-tip="hapusSasaran" data-toggle="modal"
                                                    data-target="#hapusSasaran">Hapus</a>
                                            </div>
                                        </div>
                                    </td>
                                    @include('modals.editsasaran')
                                    @include('modals.hapussasaran')
                                </tr>
                                <tr>
                                    <th>#</th>
                                    <th>Indikator</th>
                                    <th>Target 2021</th>
                                    <th>Target 2022</th>
                                    <th>Target 2023</th>
                                    <th>Target 2024</th>
                                    <th>Target 2025</th>
                                    <th>Satuan</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($indikator_sasaran as $i)
                                    <tr>
                                        <td>
                                            {{ $loop->iteration }}
                                        </td>
                                        <td>
                                            {{ $i->indikator }}
                                        </td>

                                        <td>
                                            {{ $i->target_tahun_2021 }}
                                        </td>
                                        <td>
                                            {{ $i->target_tahun_2023 }}
                                        </td>
                                        <td>
                                            {{ $i->target_tahun_2023 }}
                                        </td>
                                        <td>
                                            {{ $i->target_tahun_2024 }}
                                        </td>
                                        <td>
                                            {{ $i->target_tahun_2025 }}
                                        </td>

                                        <td>
                                            {{ $i->satuan_pengukuran }}
                                        </td>
                                        <td>
                                            <a data-tip="editIndikator"
                                                class="text-warning" data-toggle="modal" data-target="#editIndikator"><i
                                                    class="fas fa-edit"></i></a>
                                            <!-- Modal Edit Indikator -->
                                            @include('modals.editindikatords')
                                            <a data-tip="hapusIndikator" class="text-danger"
                                                data-target="#hapusIndikator" data-toggle="modal"><i
                                                    class="fas fa-trash"></i></a>
                                            <!-- Modal Hapus Indikator -->
                                            @include('modals.hapusindikatords')
                                        </td>
                                    </tr>
                                @endforeach
                                <!-- Tambahkan baris Indikator lainnya sesuai kebutuhan -->
                            </tbody>
                        </table>
                        <div class="text-right">
                            <style>
                                .btn-outline-primary {
                                    background-color: rgb(8, 164, 196);
                                    color: white;
                                }
                            </style>
                            <button type="button" class="btn btn-outline-secondary"
                                onclick="kembaliKeHalamanSasaran()">Kembali</button>
                            <button class="btn btn-outline-primary" data-toggle="modal"
                                data-target="#tambahIndikatorModal"><i class="fas fa-plus"></i> Tambah
                                Indikator</button>
                        </div>

                        <script>
                            function kembaliKeHalamanSasaran() {
                                window.location.href = "sasaran";
                            }
                        </script>
                    </div>
                </div>
            </div>

            <!-- Modal Tambah Indikator -->
            @include('modals.tambahindikatords')

            </td>
            </tr>


            </td>
            </tr>
            <!-- Footer -->
            @include('layouts.footer')
            <!-- End of Footer -->
        </div>
        <!-- End of Content Wrapper -->
    </div>

</body>

</html>
