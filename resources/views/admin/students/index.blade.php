<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Danh sách sinh viên</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">

    <!-- App css -->
    <link href="{{ asset('css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/app-modern.min.css') }}" rel="stylesheet" type="text/css" id="light-style" />
    <link href="{{ asset('css/app-modern-dark.min.css') }}" rel="stylesheet" type="text/css" id="dark-style" />

</head>

<body class="loading" data-layout="detached"
    data-layout-config='{"leftSidebarCondensed":false,"darkMode":false, "showRightSidebarOnStart": true}'>

    <!-- Topbar Start -->
    @include('layout.topbar')
    <!-- end Topbar -->

    <!-- Start Content-->
    <div class="container-fluid">

        <!-- Begin page -->
        <div class="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            @include('layout/sidebar')
            <!-- Left Sidebar End -->

            <div class="content-page">
                <div class="content">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item active">Trang chủ</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Trang chủ</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <table class="table table-striped table-centered mb-0">
                        <thead>
                            <tr>
                                <th>User</th>
                                <th>Account No.</th>
                                <th>Balance</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="table-user">
                                    <img src="assets/images/users/avatar-2.jpg" alt="table-user"
                                        class="mr-2 rounded-circle" />
                                    Risa D. Pearson
                                </td>
                                <td>AC336 508 2157</td>
                                <td>July 24, 1950</td>
                                <td class="table-action">
                                    <a href="javascript: void(0);" class="action-icon"> <i
                                            class="mdi mdi-pencil"></i></a>
                                    <a href="javascript: void(0);" class="action-icon"> <i
                                            class="mdi mdi-delete"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-user">
                                    <img src="assets/images/users/avatar-3.jpg" alt="table-user"
                                        class="mr-2 rounded-circle" />
                                    Ann C. Thompson
                                </td>
                                <td>SB646 473 2057</td>
                                <td>January 25, 1959</td>
                                <td class="table-action">
                                    <a href="javascript: void(0);" class="action-icon"> <i
                                            class="mdi mdi-pencil"></i></a>
                                    <a href="javascript: void(0);" class="action-icon"> <i
                                            class="mdi mdi-delete"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-user">
                                    <img src="assets/images/users/avatar-4.jpg" alt="table-user"
                                        class="mr-2 rounded-circle" />
                                    Paul J. Friend
                                </td>
                                <td>DL281 308 0793</td>
                                <td>September 1, 1939</td>
                                <td class="table-action">
                                    <a href="javascript: void(0);" class="action-icon"> <i
                                            class="mdi mdi-pencil"></i></a>
                                    <a href="javascript: void(0);" class="action-icon"> <i
                                            class="mdi mdi-delete"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-user">
                                    <img src="assets/images/users/avatar-5.jpg" alt="table-user"
                                        class="mr-2 rounded-circle" />
                                    Sean C. Nguyen
                                </td>
                                <td>CA269 714 6825</td>
                                <td>February 5, 1994</td>
                                <td class="table-action">
                                    <a href="javascript: void(0);" class="action-icon"> <i
                                            class="mdi mdi-pencil"></i></a>
                                    <a href="javascript: void(0);" class="action-icon"> <i
                                            class="mdi mdi-delete"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- end row-->

            </div> <!-- End Content -->

            <!-- Footer Start -->
            @include('layout/footer')
            <!-- end Footer -->

        </div>
        <!-- content-page -->

    </div> <!-- end wrapper-->
    </div>
    <!-- END Container -->


    <!-- Right Sidebar -->
    @include('layout.right_sidebar')
    <!-- /Right-bar -->


    <!-- bundle -->
    <script src="{{ asset('js/vendor.min.js') }}"></script>
    <script src="{{ asset('js/app.min.js') }}"></script>

    <!-- third party js -->
    <script src="{{ asset('js/vendor/Chart.bundle.min.js') }}"></script>
    <!-- third party js ends -->
</body>

</html>
