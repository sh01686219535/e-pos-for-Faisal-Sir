<div id="sidebar" class="app-sidebar">
    <div class="app-sidebar-content" data-scrollbar="true" data-height="100%">
        <div class="menu">
            <div class="menu-header">APP INTERFACE</div>
            <ul class="menu-list">
                <!-- Dashboard -->
                <li class="menu-item {{ $data['active_menu'] == 'dashboard' ? 'active' : '' }}">
                    <a href="{{ route('dashboard') }}" class="menu-link">
                        <span class="menu-icon">
                            <iconify-icon icon="ph:rocket-duotone"></iconify-icon>
                        </span>
                        <span class="menu-text">DASHBOARD</span>
                    </a>
                </li>

                <!-- Analytics -->
                <li class="menu-item">
                    <a href="analytics.html" class="menu-link">
                        <span class="menu-icon">
                            <iconify-icon icon="ph:chart-bar-duotone"></iconify-icon>
                        </span>
                        <span class="menu-text">ANALYTICS</span>
                    </a>
                </li>
                <!--Start Item info Management -->
                <li
                    class="menu-item has-sub {{ in_array($data['active_menu'], ['itemManagement','item_info','item_cost_info','item_price']) ? 'active open' : '' }}">
                    <a href="#" class="menu-link">
                        <span class="menu-icon">
                            <iconify-icon icon="ph:envelope-duotone"></iconify-icon>
                        </span>
                        <span class="menu-text">Item Management</span>
                        <span class="menu-caret"><b class="caret"></b></span>
                    </a>
                    <ul class="menu-submenu">
                        <!--Start Item Info -->
                        <li class="menu-item {{ $data['active_menu'] == 'item_info' ? 'active' : '' }}">
                            <a href="{{ route('item_info.index') }}" class="menu-link">
                                <span class="menu-text">Item Info</span>
                            </a>
                        </li>
                        <!--End Item Info -->
                        <!--Start Item Cost Info -->
                        <li class="menu-item {{ $data['active_menu'] == 'item_cost_info' ? 'active' : '' }}">
                            <a href="{{ route('item_cost_info.index') }}" class="menu-link">
                                <span class="menu-text">Item Cost Info</span>
                            </a>
                        </li>
                        <!--End Item Cost Info -->
                        <!--Start Item Price -->
                        <li class="menu-item {{ $data['active_menu'] == 'item_price' ? 'active' : '' }}">
                            <a href="{{ route('item_price.index') }}" class="menu-link">
                                <span class="menu-text">Item Price</span>
                            </a>
                        </li>
                        <!--End Item Price -->
                    </ul>
                </li>
                <!--End Item info Management -->
                <!--Start Role Management -->
                <li
                    class="menu-item has-sub {{ in_array($data['active_menu'], ['RoleManagement', 'module', 'subModule', 'permission', 'role', 'assignPermission']) ? 'active open' : '' }}">
                    <a href="#" class="menu-link">
                        <span class="menu-icon">
                            <iconify-icon icon="ph:envelope-duotone"></iconify-icon>
                        </span>
                        <span class="menu-text">Role Management</span>
                        <span class="menu-caret"><b class="caret"></b></span>
                    </a>
                    <ul class="menu-submenu">
                        <!--Start Module -->
                        <li class="menu-item {{ $data['active_menu'] == 'module' ? 'active' : '' }}">
                            <a href="{{ route('module.index') }}" class="menu-link">
                                <span class="menu-text">Module</span>
                            </a>
                        </li>
                        <!--End Module -->
                        <!--Start Sub Module -->
                        <li class="menu-item {{ $data['active_menu'] == 'subModule' ? 'active' : '' }}">
                            <a href="{{ route('sub_module.index') }}" class="menu-link">
                                <span class="menu-text">Sub Module</span>
                            </a>
                        </li>
                        <!--End Sub Module -->
                        <!--Start Permission -->
                        <li class="menu-item {{ $data['active_menu'] == 'permission' ? 'active' : '' }}">
                            <a href="{{ route('permission.index') }}" class="menu-link">
                                <span class="menu-text">Permission</span>
                            </a>
                        </li>
                        <!--End Permission -->
                        <!--Start Role -->
                        <li class="menu-item {{ $data['active_menu'] == 'role' ? 'active' : '' }}">
                            <a href="{{ route('role.index') }}" class="menu-link">
                                <span class="menu-text">Role</span>
                            </a>
                        </li>
                        <!--End Role -->
                        <!-- Start Assign Permission -->
                        <li class="menu-item {{ $data['active_menu'] == 'assignPermission' ? 'active' : '' }}">
                            <a href="{{ route('assignPermission.index') }}" class="menu-link">
                                <span class="menu-text">Assign Permission</span>
                            </a>
                        </li>
                        <!--End Assign Permission -->
                    </ul>
                </li>
                <!--End Role Management -->
                <!-- Start Setting -->
                <li
                    class="menu-item has-sub {{ in_array($data['active_menu'], ['setting', 'category','brand','color','size','supplier']) ? 'active open' : '' }}">
                    <a href="#" class="menu-link">
                        <span class="menu-icon">
                            <iconify-icon icon="ph:envelope-duotone"></iconify-icon>
                        </span>
                        <span class="menu-text">Setting</span>
                        <span class="menu-caret"><b class="caret"></b></span>
                    </a>
                    <ul class="menu-submenu">
                        <!--Start Category -->
                        <li class="menu-item {{ $data['active_menu'] == 'category' ? 'active' : '' }}">
                            <a href="{{ route('category.index') }}" class="menu-link">
                                <span class="menu-text">Category</span>
                            </a>
                        </li>
                        <!--End Category -->
                        <!--Start Brand -->
                        <li class="menu-item {{ $data['active_menu'] == 'brand' ? 'active' : '' }}">
                            <a href="{{ route('brand.index') }}" class="menu-link">
                                <span class="menu-text">Brand</span>
                            </a>
                        </li>
                        <!--End Brand -->
                        <!--Start Color -->
                        <li class="menu-item {{ $data['active_menu'] == 'color' ? 'active' : '' }}">
                            <a href="{{ route('color.index') }}" class="menu-link">
                                <span class="menu-text">Color</span>
                            </a>
                        </li>
                        <!--End Color -->
                        <!--Start Size -->
                        <li class="menu-item {{ $data['active_menu'] == 'size' ? 'active' : '' }}">
                            <a href="{{ route('size.index') }}" class="menu-link">
                                <span class="menu-text">Size</span>
                            </a>
                        </li>
                        <!--End Size -->
                        <!--Start supplier -->
                        <li class="menu-item {{ $data['active_menu'] == 'supplier' ? 'active' : '' }}">
                            <a href="{{ route('supplier.index') }}" class="menu-link">
                                <span class="menu-text">Supplier</span>
                            </a>
                        </li>
                        <!--End supplier -->
                    </ul>
                </li>
                <!-- End Setting -->
            </ul>
        </div>
    </div>
</div>