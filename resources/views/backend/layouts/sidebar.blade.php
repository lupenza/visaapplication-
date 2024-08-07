<div id="sidebar-menu">
    <!-- Left Menu Start -->
    <ul class="metismenu list-unstyled" id="side-menu">
        <li class="menu-title" key="t-menu">Menu</li>
        <li>
            <a href="{{ url('dashboard')}}" class="waves-effect">
                <i class="bx bx-home-circle"></i>
                <span key="t-dashboards">Home</span>
            </a>
        </li>
        <li class="menu-title" key="t-apps">Customer</li>
        <li>
            <a href="{{ route('application.list')}}" class="waves-effect">
                <i class="bx bx-purchase-tag-alt"></i>
                <span key="t-chat">Application</span>
            </a>
        </li>
        <li class="menu-title" key="t-apps">Website</li>
        <li>
            <a href="{{ route('website.menu')}}" class="waves-effect">
                <i class="bx bx-purchase-tag-alt"></i>
                <span key="t-chat">Website Manage</span>
            </a>
        </li>
    </ul>
</div>