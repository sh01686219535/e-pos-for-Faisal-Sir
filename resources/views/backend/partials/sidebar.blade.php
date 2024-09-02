<div id="sidebar" class="app-sidebar">

    <div class="app-sidebar-content" data-scrollbar="true" data-height="100%">

        <div class="menu">
            <div class="menu-header">APP INTERFACE</div>
            <div class="menu-item active">
                <a href="{{route('dashboard')}}" class="menu-link">
                    <span class="menu-icon">
                        <iconify-icon icon="ph:rocket-duotone"></iconify-icon>
                    </span>
                    <span class="menu-text">DASHBOARD</span>
                </a>
            </div>
            <div class="menu-item ">
                <a href="analytics.html" class="menu-link">
                    <span class="menu-icon">
                        <iconify-icon icon="ph:chart-bar-duotone"></iconify-icon>
                    </span>
                    <span class="menu-text">ANALYTICS</span>
                </a>
            </div>
            <div class="menu-item has-sub ">
                <a href="#" class="menu-link">
                    <span class="menu-icon">
                        <iconify-icon icon="ph:envelope-duotone"></iconify-icon>
                    </span>
                    <span class="menu-text">Role Management</span>
                    <span class="menu-caret"><b class="caret"></b></span>
                </a>
                <div class="menu-submenu">
                    <div class="menu-item ">
                        <a href="{{route('module.index')}}" class="menu-link">
                            <span class="menu-text">Module</span>
                        </a>
                    </div>
                    <div class="menu-item ">
                        <a href="{{route('subModule.index')}}" class="menu-link">
                            <span class="menu-text">Sub Module</span>
                        </a>
                    </div>
                    <div class="menu-item ">
                        <a href="{{route('permission.index')}}" class="menu-link">
                            <span class="menu-text">Permission</span>
                        </a>
                    </div>
                    <div class="menu-item ">
                        <a href="{{route('role.index')}}" class="menu-link">
                            <span class="menu-text">Role</span>
                        </a>
                    </div>
                    <div class="menu-item ">
                        <a href="{{route('assignPermission.index')}}" class="menu-link">
                            <span class="menu-text">Assign Permission</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>