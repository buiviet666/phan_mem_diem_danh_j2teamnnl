<div class="left-side-menu left-side-menu-detached">

    <div class="leftbar-user">
        <a href="javascript: void(0);">
            <img src="{{ asset('images/users/avatar-1.jpg') }}" alt="user-image" height="42"
                class="rounded-circle shadow-sm">
            <span class="leftbar-user-name">Dominic Keller</span>
        </a>
    </div>

    <!--- Sidemenu -->
    <ul class="metismenu side-nav">

        @if (checkAdmin())
            <li class="side-nav-item">
                <a href="javascript: void(0);" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span>Trang chủ</span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{{ route('admin_students') }}" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span>Quản lí sinh viên</span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="javascript: void(0);" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span>Quản lí giảng viên</span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="javascript: void(0);" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span>Quản lí lớp học</span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="javascript: void(0);" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span>Quản lí môn học</span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="javascript: void(0);" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span>Phân công thời khóa biểu </span>
                </a>
            </li>
        @endif





    </ul>
    <!-- End Sidebar -->

    <div class="clearfix"></div>
    <!-- Sidebar -left -->

</div>
