<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                <polyline points="9 22 9 12 15 12 15 22"></polyline>
                            </svg>
                            Dashboard <span class="sr-only">(current)</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                <polyline points="9 22 9 12 15 12 15 22"></polyline>
                            </svg>
                            Bảng điều khiển<span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ (strpos(Route::currentRouteName(), 'admin.loai.index') === 0 ) ? 'active' : ''}}" href="{{ route('admin.loai.index') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers">
                                <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                                <polyline points="2 17 12 22 22 17"></polyline>
                                <polyline points="2 12 12 17 22 12"></polyline>
                            </svg>
                            Danh mục
                        </a>
                    </li>
                    </li>
                    <ul style="list-style-type:none;">
                        <li class="nav-item">
                            <a class="nav-link {{ (strpos(Route::currentRouteName(), 'admin.loai.create') === 0 ) ? 'active' : ''}}" href="{{ route('admin.loai.create') }}">
                                Thêm mới
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ (strpos(Route::currentRouteName(), 'admin.loai.pdf') === 0 ) ? 'active' : ''}}" href="{{ route('admin.loai.pdf') }}">
                                Xuất PDF
                            </a>
                        </li>
                    </ul>

                </ul>
                <ul class="nav flex-column mb-2">
                    <li class="nav-item">
                        <a class="nav-link {{ (strpos(Route::currentRouteName(), 'admin.sanpham.index') === 0 ) ? 'active' : ''}}" href="{{ route('admin.sanpham.index') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text">
                                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                <polyline points="14 2 14 8 20 8"></polyline>
                                <line x1="16" y1="13" x2="8" y2="13"></line>
                                <line x1="16" y1="17" x2="8" y2="17"></line>
                                <polyline points="10 9 9 9 8 9"></polyline>
                            </svg>
                            Sản phẩm
                        </a>
                    </li>
                    <ul style="list-style-type:none;">
                        <li class="nav-item">
                            <a class="nav-link {{ (strpos(Route::currentRouteName(), 'admin.sanpham.create') === 0 ) ? 'active' : ''}}" href="{{ route('admin.sanpham.create') }}">
                                Thêm mới
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ (strpos(Route::currentRouteName(), 'admin.sanpham.insp') === 0 ) ? 'active' : ''}}" href="">
                                In danh sách
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ (strpos(Route::currentRouteName(), 'admin.sanpham.pdf') === 0 ) ? 'active' : ''}}" href="">
                                Xuất PDF
                            </a>
                        </li>
                    </ul>
                </ul>
            </div>
        </nav>
    </div>
</div>