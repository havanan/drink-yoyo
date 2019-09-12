<div class="sidebar-container">
    <div class="sidemenu-container navbar-collapse collapse fixed-menu">
        <div id="remove-scroll" class="left-sidemenu">
            <ul class="sidemenu  page-header-fixed slimscroll-style" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px" >
                <li class="sidebar-toggler-wrapper hide">
                    <div class="sidebar-toggler">
                        <span></span>
                    </div>
                </li>
                <li class="sidebar-user-panel">
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="{{asset('admin')}}/img/dp.jpg" class="img-circle user-img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p> {{Auth::user()->name}}</p>
                            <a href="#"><i class="fa fa-circle user-online"></i><span class="txtOnline"> Online</span></a>
                        </div>
                    </div>
                </li>
                <li class="nav-item  ">
                    <a href="{{route('admin.index')}}" class="nav-link nav-toggle"> <i class="material-icons">dashboard</i>
                        <span class="title">Bảng Điều Khiển</span>
                    </a>
                </li>
                {{--<li class="nav-item  ">--}}
                    {{--<a href="{{route('admin.card.billCreate')}}" class="nav-link nav-toggle"> <i class="material-icons">add_shopping_cart</i>--}}
                        {{--<span class="title">Bán Hàng</span>--}}
                    {{--</a>--}}
                {{--</li>--}}
                <li class="nav-item">
                    <a href="#" class="nav-link nav-toggle">
                        <i class="material-icons">redeem</i>
                        <span class="title">Sản Phẩm</span>
                        <span class="arrow"></span>
{{--                        <span class="label label-rouded label-menu deepPink-bgcolor">3</span>--}}
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item  ">
                            <a href="{{route('admin.product.create')}}" class="nav-link ">
                                <span class="title">Tạo Mới</span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a href="{{route('admin.product.index')}}" class="nav-link ">
                                <span class="title">Danh Sách</span>
                            </a>
                        </li>
                        {{--<li class="nav-item  ">--}}
                            {{--<a href="email_compose.html" class="nav-link ">--}}
                                {{--<span class="title">Compose Mail</span>--}}
                            {{--</a>--}}
                        {{--</li>--}}
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link nav-toggle">
                        <i class="material-icons">assignment_turned_in</i>
                        <span class="title">Hóa đơn</span>
                        <span class="arrow"></span>
                        {{--                        <span class="label label-rouded label-menu deepPink-bgcolor">3</span>--}}
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item ">
                            <a href="{{route('admin.bill.index')}}" class="nav-link ">
                                <span class="title">Danh Sách</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="{{route('admin.bill.deleted')}}" class="nav-link ">
                                <span class="title">Đã xóa</span>
                            </a>
                        </li>
                    </ul>
                </li>
{{--                <li class="nav-item  ">--}}
{{--                    <a href="#" class="nav-link nav-toggle">--}}
{{--                        <i class="material-icons">dvr</i>--}}
{{--                        <span class="title">Role</span>--}}
{{--                        <span class="arrow"></span>--}}
{{--                    </a>--}}
{{--                    <ul class="sub-menu">--}}
{{--                        <li class="nav-item  ">--}}
{{--                            <a href="{{route('admin.role.list')}}" class="nav-link ">--}}
{{--                                <span class="title">Role</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item  ">--}}
{{--                            <a href="{{route('admin.role.permission')}}" class="nav-link ">--}}
{{--                                <span class="title">Permission</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
            </ul>
        </div>
    </div>
</div>