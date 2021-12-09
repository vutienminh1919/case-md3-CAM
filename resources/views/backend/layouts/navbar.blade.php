<nav class="pcoded-navbar">
    <div class="nav-list">
        <div class="pcoded-inner-navbar main-menu">
            <ul class="pcoded-item pcoded-left-item">
                <li class="pcoded-hasmenu active pcoded-trigger">
                    <a href="#" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                        <span class="pcoded-mtext">Trang chủ</span>
                    </a>
                </li>
                <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                        <span class="pcoded-mtext">Mục lục</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class=" pcoded-hasmenu">
                            <a href="{{ route('books.index') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Danh sách sách</span>
                            </a>

                        </li>
                        <li class=" pcoded-hasmenu">
                            <a href="{{route('categories.index')}}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Thể loại sách</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="{{route('students.index')}}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Danh sách người mượn</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="">
                    <a href="{{ route('users.index') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="feather icon-menu"></i>
                        </span>
                        <span class="pcoded-mtext">Danh sách người dùng</span>
                    </a>
                </li>
                <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="feather icon-layers"></i>
                        </span>
                        <span class="pcoded-mtext">Phiếu mượn sách</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="">
                            <a href="{{route('borrows.index')}}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Danh sách phiếu mượn</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="{{route('borrows.create')}}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Thêm mới phiếu mượn</span>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="">
                    <a href="#" >
                        <span class="pcoded-micon">
                            <i  class="bi bi-trash"></i>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                              </svg>

                        </span>
                        <span class="pcoded-mtext">Thùng rác</span>
                    </a>
                </li>
            </ul>

        </div>
    </div>
</nav>
