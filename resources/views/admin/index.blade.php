<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link rel="shortcut icon" type="image/png" href="{{asset('images/logos/favicon.png')}}" />
    <link rel="stylesheet" href= "{{asset('css/styles.min.css')}}" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>
<!--  Body Wrapper -->
<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
     data-sidebar-position="fixed" data-header-position="fixed">
    @include('layout.sidebar')
    <!--  Main wrapper -->
    <div class="body-wrapper">
        <!--  Header Start -->
        <header class="app-header">
            <nav class="navbar navbar-expand-lg navbar-light">
                <ul class="navbar-nav">
                    <li class="nav-item d-block d-xl-none">
                        <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                            <i class="ti ti-menu-2"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                            <i class="ti ti-bell-ringing"></i>
                            <div class="notification bg-primary rounded-circle"></div>
                        </a>
                    </li>
                </ul>
                <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                    <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                        <a href="https://adminmart.com/product/modernize-free-bootstrap-admin-dashboard/" target="_blank" class="btn btn-primary">Download Free</a>
                        <li class="nav-item dropdown">
                            <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                               aria-expanded="false">
                                <img src="../assets/images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                                <div class="message-body">
                                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                                        <i class="ti ti-user fs-6"></i>
                                        <p class="mb-0 fs-3">My Profile</p>
                                    </a>
                                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                                        <i class="ti ti-mail fs-6"></i>
                                        <p class="mb-0 fs-3">My Account</p>
                                    </a>
                                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                                        <i class="ti ti-list-check fs-6"></i>
                                        <p class="mb-0 fs-3">My Task</p>
                                    </a>
                                    <a href="./authentication-login.html" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!--  Header End -->
        <div class="container-fluid">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                        <!-- Table Start -->
                        <div class="container-fluid pt-4 px-4">
                            <div class="row g-4">
                                <div class="col-12">
                                    <div class="bg-light rounded h-100 p-4">
                                        <h6 class="mb-4">Responsive Table</h6>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Full name</th>
                                                    <th scope="col">Username</th>
                                                    <th scope="col">Password</th>
                                                    <th scope="col">Title</th>
                                                    <th scope="col">Operation</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($admins as $admin)
                                                    <tr>
                                                        <th scope="row">{{ $admin -> id }}</th>
                                                        <td>{{ $admin -> Fullname_user }}</td>
                                                        <td>{{ $admin -> Username }}</td>
                                                        <td>{{ $admin -> Pass_user }}</td>
                                                        <td>{{ $admin -> Title }}</td>
                                                        <td style="display: flex">
                                                            <!-- Button Sửa -->
                                                            <a href="{{route('admin.edit', $admin -> id)}}" id="btnUpdate" class="btn btn-primary">
                                                                <i class="fas fa-edit"></i>
                                                            </a>
                                                            <!-- Button Xóa -->
                                                            <form method="post" action="{{route('admin.destroy', $admin -> id)}}"> <button type="submit" class="btn btn-danger" ><i class="fas fa-trash-alt"></i></button>
                                                                @method('DELETE')
                                                                @csrf
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                                <a class="btn btn-success" href="{{route('admin.create')}}" >Add Admin</a>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Table End -->
                    </div>
                    @include('layout.footer')
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{asset('libs/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/sidebarmenu.js')}}"></script>
<script src="{{asset('js/app.min.js')}}"></script>
<script src="{{asset('libs/simplebar/dist/simplebar.js')}}"></script>
</body>

</html>
