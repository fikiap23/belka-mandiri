@extends('layouts.admin_app')

@section('title', 'Sesi Tes Keahlian | Admin BLKM Jabar')

@section('content')
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center loadPage"
                href="{{ route('admin.dashboard') }}">
                <div class="sidebar-brand-text mx-3">Admin SIPPEKA</div>
            </a>

            <!-- Heading -->
            <div class="sidebar-heading">
                Admin
            </div>

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link loadPage" href="{{ route('admin.dashboard') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <li class="nav-item">
                <a class="nav-link loadPage" href="{{ route('admin.kelola_data') }}">
                    <i class="fas fa-fw fa-list"></i>
                    <span>Kelola Data Peserta</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link loadPage" href="{{ route('admin.peserta') }}">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Peserta</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link loadPage" href="{{ route('admin.info_user') }}">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Info User</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <li class="nav-item ">
                <a class="nav-link" href="" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
                    aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-list"></i>
                    <span>Kelola Keahlian</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item loadPage" href="{{ route('admin.mata_soal') }}">Mata Soal Keahlian</a>
                        <a class="collapse-item loadPage" href="{{ route('admin.kelas_keahlian') }}">Kelas Keahlian</a>
                        <a class="collapse-item loadPage" href="{{ route('admin.tes_keahlian') }}">Tes Keahlian</a>
                        <a class="collapse-item active loadPage" href="{{ route('admin.sesi_tes_keahlian') }}">Sesi Tes
                            Keahlian</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <li class="nav-item">
                <a class="nav-link" href="{{ route('auth.logout') }}" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span>Keluar</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Administrator</span>
                                <img class="img-profile rounded-circle"
                                    src="{{ asset('assets/admin/img/undraw_profile.svg') }}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="{{ route('auth.logout') }}" data-toggle="modal"
                                    data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Keluar
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-3 text-gray-800 ">Sesi Tes Keahlian</h1>

                    <!-- Button Add Data -->
                    <div class="d-flex justify-content-left">
                        <div></div>
                        <form action="" class="form-inline my-2 my-lg-0">
                            <a href="{{ route('admin.sesi_tes_keahlian.create') }}"
                                class="btn btn-primary btn-sm mr-sm-4 mb-4 loadPage">
                                <i class="bi bi-plus-square"></i>
                                Tambah
                            </a>
                        </form>
                    </div>

                    @if ($sesiTesKeahlian->isNotEmpty())
                        <!-- Search Bar -->
                        <div class="d-flex justify-content-between">
                            <div></div>
                            <form class="form-inline my-2 my-lg-0">
                                <input class="form-control mr-sm-2 mb-4" type="search" placeholder="Search"
                                    aria-label="Search">
                            </form>
                        </div>

                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @elseif (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif

                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-bordered table-hover">
                                    <thead class="thead-dark">
                                        <tr style="text-align: center; vertical-align: middle;">
                                            <th>No</th>
                                            <th>Tes</th>
                                            <th>Sesi</th>
                                            <th>Mulai</th>
                                            <th>Selesai</th>
                                            <th>Jenis Sesi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($sesiTesKeahlian as $index => $item)
                                            <tr style="text-align: center; vertical-align: middle;">
                                                <td>{{ $index + 1 + ($sesiTesKeahlian->currentPage() - 1) * $sesiTesKeahlian->perPage() }}
                                                </td>
                                                <td style="text-align: left; vertical-align: middle;">
                                                    Tes - {{ $item->nama_tes }}
                                                    <ul type="disc">
                                                        <li>Sesi: {{ $item->nama_sesi }}</li>
                                                    </ul>
                                                </td>
                                                <td>{{ $item->nama_sesi }}</td>

                                                <td>{{ $item->waktu_mulai }}</td>
                                                <td>{{ $item->waktu_selesai }}</td>

                                                <td>{{ $item->jenis_sesi }}</td>
                                                <td>
                                                    <form
                                                        action="{{ route('admin.sesi_tes_keahlian.delete', ['id' => $item->id]) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <a href="{{ route('admin.sesi_tes_keahlian.detail', ['id' => $item->id]) }}"
                                                            class="btn btn-secondary btn-sm loadPage">
                                                            <i class="bi bi-eye"></i>
                                                        </a>
                                                        <a href="{{ route('admin.sesi_tes_keahlian.edit', ['id' => $item->id]) }}"
                                                            class="btn btn-primary btn-sm loadPage">
                                                            <i class="bi bi-pencil"></i>
                                                        </a>
                                                        <button type="button" class="btn btn-danger btn-sm btn-hapus"
                                                            data-id="{{ $item->id }}"
                                                            data-nama="{{ $item->nama_sesi }}"><i
                                                                class="bi bi-trash"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                <br>
                                <!-- Pagination -->
                                {{ $sesiTesKeahlian->links('vendor.pagination.pagination_custom') }}
                            </div>
                        </div>
                    @else
                        <h3 class="text-center mt-2">Tidak ada sesi yang tersedia</h3>
                    @endif
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->
@endsection
