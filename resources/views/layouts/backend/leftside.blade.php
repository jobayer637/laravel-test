<aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    @include('layouts.backend.userinfo')
    <!-- #User Info -->

    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            <li class="header">MAIN NAVIGATION</li>
            <li class="{{ Request::is('home') ? 'active' : ''}}">
                <a href="{{route('home')}}">
                    <i class="material-icons">home</i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="{{ Request::is('product') || Request::is('product/*')? 'active': 'deactive' }}">
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-icons">widgets</i>
                    <span>Manage Product</span>
                </a>
                <ul class="ml-menu">
                    <li class="{{ Request::is('product') ? 'active' : ''}}">
                        <a href="{{route('product.index')}}">
                            <span>Products</span>
                        </a>
                    </li>
                    <li class="{{ Request::is('product/create') ? 'active' : ''}}">
                        <a href="{{route('product.create')}}">
                            <span>Add Product</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <span>Pending List</span>
                        </a>
                    </li>
                </ul>
            </li>


            <li class="header">LABELS</li>
            <li>
                <a href="javascript:void(0);">
                    <i class="material-icons col-red">donut_large</i>
                    <span>Important</span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0);">
                    <i class="material-icons col-amber">donut_large</i>
                    <span>Warning</span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0);">
                    <i class="material-icons col-light-blue">donut_large</i>
                    <span>Information</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- #Menu -->
    <!-- Footer -->
    @include('layouts.backend.footer')
    <!-- #Footer -->
</aside>