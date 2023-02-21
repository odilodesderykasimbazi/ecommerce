<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                    <a class="nav-link {{Request::is('admin-page') ? 'active':'';}}" href="{{url('/admin-page')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                    </a>
                        <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Category
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{url('/add-category')}}">Add category</a>
                                </nav>
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{url('/admin-page')}}">View category</a>
                                </nav>
                        </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Products
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                    <div class="collapse" id="collapsePages" aria-labelledby="headingTwo">
                        <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{url('/product')}}">Add Product</a>
                           </nav>
                       <nav class="sb-sidenav-menu-nested nav">
                             <a class="nav-link" href="{{url('/view-product')}}">View Product</a>
                       </nav>
                    </div>
                    <a class="nav-link {{Request::is('orders')?'active':'';}}" href="{{url('orders')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Orders
                    </a>
                    <a class="nav-link {{Request::is('users')?'active':'';}}" href="{{url('users')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-person"></i></div>
                                Users
                    </a>
                         
               </div> 
        </div>      
    </nav>
</div>