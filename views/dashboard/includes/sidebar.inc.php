
        <style>
            .nav-treeview .nav-item .nav-link {
                margin-bottom: -5px !important;
                font-size: 14px;
            }
        </style>
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="https://i.gifer.com/ZZ5H.gif" alt="Mizizi" height="60" width="60">
        </div>

        <nav class="main-header navbar navbar-expand navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
                </li>
                
            </ul>
            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <div class="theme-switch-wrapper nav-link">
                        <label class="theme-switchx" for="checkboxx">
                            <button type='' onclick='location.reload()'><i class='fa fa-refresh'></i> Refresh</button>
                        </label>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="theme-switch-wrapper nav-link">
                        <label class="theme-switch" for="checkbox">
                            <input type="checkbox" id="checkbox" />
                            <span class="slider round"></span>
                        </label>
                    </div>
                </li>

            </ul>


        </nav>


<aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href='/'  class="brand-link logo-switch">
                <img src="/public/assets/uploads/<?= $this->_company['c_logo'] ?>" alt="" class="brand-image-xl logo-xs">
                <img src="/public/assets/uploads/<?= $this->_company['c_logo'] ?>" alt="" class="brand-image-xs logo-xl" style="left: 12px">
            </a>
            <div class="sidebar">
                <div class="form-inline mt-2">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar nav-child-indent flex-column" data-widget="treeview" role="menu">
                        <li class="nav-item">
                            <a href="/dashboard" class="nav-link  <?= $pageid=='home'?'active':'' ?> " >
                                <i class="nav-icon fas fa-home"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li> 
                        <li class="nav-item ">
                            <a href="products" class="nav-link  <?= ($pageid=='products'||$pageid=='bids')?'active':'' ?> " >
                                <i class="nav-icon fas fa-wallet"></i>
                                <p>
                                    Products & Categories 
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                 
                                <li class="nav-item">
                                    <a href="/dashboard/products/create" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Create</p>
                                    </a>
                                </li> 
                                <li class="nav-item">
                                    <a href="/dashboard/products/view" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Manage</p>
                                    </a>
                                </li> 
                                <hr>                                
                                <li class="nav-item">
                                    <a href="/dashboard/categories" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Categories</p>
                                    </a>
                                </li> 
                          
                            </ul>
                        </li> 

                     
                              
                        <li class="nav-item ">
                            <a href="products" class="nav-link  <?php echo $pageid=='content'?'active':'' ?> " >
                                <i class="nav-icon fas fa-video"></i>
                                <p>
                                    Content
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                 
                                <li class="nav-item">
                                    <a href="/dashboard/content/new" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Upload Video </p>
                                    </a>
                                </li> 
                                <li class="nav-item">
                                    <a href="/dashboard/content/live" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Go Live</p>
                                    </a>
                                </li> 
                                <li class="nav-item">
                                    <a href="/dashboard/content/videos" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>My Videos</p>
                                    </a>
                                </li> 
                                <li class="nav-item">
                                    <a href="/dashboard/content/blog" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>My Blog</p>
                                    </a>
                                    <a href="/dashboard/content/blog/new" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>New Blog</p>
                                    </a>
                                </li> 
                          
                            </ul>
                        </li> 
                        <li class="nav-item ">
                            <a href="products" class="nav-link  <?= ($pageid=='orders'||$pageid=='purchases')?'active':'' ?> " >
                                <i class="nav-icon fas fa-dollar"></i>
                                <p>
                                    Orders & Purchases
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                 
                                <li class="nav-item">
                                    <a href="/dashboard/orders/new" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>New Orders</p>
                                    </a>
                                </li> 
                                <li class="nav-item">
                                    <a href="/dashboard/orders/completed" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Past Orders</p>
                                    </a>
                                </li>
                                
                                <li class="nav-item">
                                    <a href="/dashboard/purchases/pending" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Pending Purchases </p>
                                    </a>
                                </li> 
                                <li class="nav-item">
                                    <a href="/dashboard/purchases/completed" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Completed Purchases</p>
                                    </a>
                                </li>  
                          
                            </ul>
                        </li>  
                       
                          <li class="nav-item ">
                            <a href="products" class="nav-link  <?= $pageid=='salo'?'active':'' ?> " >
                                 <i class="nav-icon fas fa-briefcase"></i>
                                <p>
                                    Salo Management
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                 
                            
                                <li class="nav-item">
                                    <a href="/dashboard/salo/" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Manage</p>
                                    </a>
                                </li> 
                          
                            </ul>
                        </li> 
                        
                         <li class="nav-item">
                            <a href="/checkout/chat" class="nav-link  <?= $pageid=='changepasss'?'active':'' ?> " >
                                <i class="nav-icon fas fa-comment"></i>
                                <p>
                                    Chats
                                </p>
                            </a>
                        </li> 

                         <li class="nav-item ">
                            <a href="products" class="nav-link  <?php echo $pageid=='settings'?'active':'' ?> " >
                                <i class="nav-icon fas fa-cog"></i>
                                <p>
                                    Account
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                 
                                <li class="nav-item">
                                    <a href="/dashboard/profile" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Profile </p>
                                    </a>
                                </li> 
                                <li class="nav-item">
                                    <a href="/dashboard/change-pass" class="nav-link"> <i class="far fa-circle nav-icon"></i> <p>Change Password</p> </a>
                                </li> 
                                <li class="nav-item">
                                    <a href="/dashboard/change-pin" class="nav-link"> <i class="far fa-circle nav-icon"></i> <p>Change Pin</p> </a>
                                </li> 
                                <li class="nav-item">
                                    <a href="/dashboard/logout" class="nav-link"> <i class="far fa-circle nav-icon"></i> <p>Logout</p> </a>
                                </li> 
                          
                            </ul>
                        </li> 

              
                       
                        
                        
                    </ul>
                </nav>
            </div>
        </aside>