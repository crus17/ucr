<!-- Stored in resources/views/child.blade.php -->

<!-- Sidebar -->
<div class="sidebar sidebar-style-2" data-background-color="<?php echo e(Auth('admin')->User()->dashboard_style); ?>">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            <?php echo e(Auth('admin')->User()->firstName); ?> <?php echo e(Auth('admin')->User()->lastName); ?>

                            <span class="user-level"> Admin</span>
                            
                        </span>
                    </a>
                </div>
            </div>
           
            <ul class="nav nav-primary">
                <li class="nav-item active">
                    <a href="<?php echo e(url('/admin/dashboard')); ?>">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                  
                <li class="nav-item">
                    <a href="<?php echo e(url('/admin/dashboard/plans')); ?>">
                        <i class="fas fa-cubes " aria-hidden="true"></i>
                        <p>Investment Plans</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo e(url('/admin/dashboard/manageusers')); ?>">
                        <i class="fa fa-user-circle" aria-hidden="true"></i>
                        <p>Manage Users</p>
                    </a>
                </li>
                <!--<li class="nav-item">
                    <a href="<?php echo e(url('/admin/dashboard/mloanrequests')); ?>">
                        <i class="fa fa-money-bill" aria-hidden="true"></i>
                        <p>Manage Loan Request</p>
                    </a>
                </li>-->
                <li class="nav-item">
                    <a data-toggle="collapse" href="#mdw">
                        <i class="fas fa-credit-card"></i>
                        <p>Manage D/W</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="mdw">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="<?php echo e(url('/admin/dashboard/mdeposits')); ?>">
                                    <span class="sub-item">Manage Deposit</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo e(url('/admin/dashboard/mwithdrawals')); ?>">
                                    <span class="sub-item">Manage Withdrawal</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                 
                <li class="nav-item">
                    <a href="<?php echo e(url('/admin/dashboard/agents')); ?>">
                        <i class="fas fa-users " aria-hidden="true"></i>
                        <p>View Agents</p>
                    </a>
                </li>
                
                <!--<li class="nav-item">
                    <a href="<?php echo e(url('/admin/dashboard/msubtrade')); ?>">
                        <i class="fa fa-sync-alt" aria-hidden="true"></i>
                        <p>Manage Subscription</p>
                    </a>
                </li>-->

                <li class="nav-item">
                    <a href="<?php echo e(url('/admin/dashboard/adduser')); ?>">
                        <i class="fa fa-recycle " aria-hidden="true"></i>
                        <p>Add Users</p>
                    </a>
                </li>
                
                <?php if(Auth('admin')->User()->type == "Super Admin"): ?>
                   <li class="nav-item">
                    <a data-toggle="collapse" href="#adm">
                        <i class="fa fa-user"></i>
                        <p>Administrator(s)</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="adm">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="<?php echo e(url('/admin/dashboard/addmanager')); ?>">
                                    <span class="sub-item">Add Manager</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo e(url('/admin/dashboard/madmin')); ?>">
                                    <span class="sub-item">Manage Administrator(s)</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li> 
                
                <li class="nav-item">
                    <a href="<?php echo e(url('/admin/dashboard/frontpage')); ?>">
                        <i class="fa fa-sitemap" aria-hidden="true"></i>
                        <p>Front-end control</p>
                    </a>
                </li>
                <?php endif; ?>
                <li class="nav-item">
                    <a href="<?php echo e(url('/admin/dashboard/settings')); ?>">
                        <i class=" fa fa-cog" aria-hidden="true"></i>
                        <p>Settings</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->
