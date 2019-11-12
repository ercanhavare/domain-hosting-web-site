<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="{{'home'}}" class="site_title"><i class="fa fa-paw"></i> <span>Paşa Network</span></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
                <img src="{{asset('/images/img.jpg')}}" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Merhaba,</span>
                <h2>Sercan Paşa</h2>
            </div>
        </div>
        <!-- /menu profile quick info -->

        <br/>

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <ul class="nav side-menu">
                    <li><a href="{{url('/home')}}"><i class="fa fa-home"></i> Home </a></li>
                    <li><a href="{{url('/admin/web-packet')}}"><i class="fa fa-code"></i> Web Packet </a></li>
                    <li><a href="{{url('/admin/about')}}"><i class="fa fa-desktop"></i> Kurumsal </a></li>
                    <li><a href="{{url('/admin/domain-name')}}"><i class="fa fa-table"></i> Alan Adı </a></li>
                    <li><a href="{{url('/admin/web-hosting')}}"><i class="fa fa-adjust"></i> Web Hosting </a></li>
                    <li><a href="{{url('/admin/server-packet')}}"><i class="fa fa-server"></i> Server Packet</a></li>
                    <li><a href="{{url('/admin/contact')}}"><i class="fa fa-bookmark"></i> İletişim </a></li>
                </ul>
            </div>

        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>
