
<!-- header -->
<?php include 'includes/header.php'; ?>




<!-- sidebar -->
<?php include 'includes/sidebar.php'; ?>
<!-- header -->
<?php include 'includes/top_header.php'; ?>
<!-- content -->
<div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
            <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>سەرەکی</h1>
                            </div>
                        </div>
                    </div>
                </div>

				<section id="main-content">

                    <div class="row">
                        <div class="col-lg-3">
                        <a href="products.php">
                            <div class="card">
                                <div class="stat-widget-four">
                                <div class="stat-icon">
                                    <i class="ti-package"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="text-left dib">
                                    <div class="stat-heading">کاڵاکان</div>
                                    <div class="stat-text">کۆی گشتی : <?php  echo number_format(Product::count_all()); ?></div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </a>
                        </div>
                        <div class="col-lg-3">
                        <a href="users.php">
                            <div class="card">
                                <div class="stat-widget-four">
                                <div class="stat-icon">
                                    <i class="ti-user"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="text-left dib">
                                    <div class="stat-heading">بەکارهێنەرەکان</div>
                                    <div class="stat-text">کۆی گشتی : <?php echo number_format(User::count_all()); ?></div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </a>
                        </div>
                        <div class="col-lg-3">
                        <a href="companys.php">
                        <div class="card">
                                <div class="stat-widget-four">
                                <div class="stat-icon">
                                    <i class="fa fa-building"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="text-left dib">
                                    <div class="stat-heading">کۆمپانیاکان</div>
                                    <div class="stat-text">کۆی گشتی : <?php echo number_format(Company::count_all()); ?></div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </a>
                        </div>
                        <div class="col-lg-3">
                            <a href="categories.php">
                        <div class="card">
                                <div class="stat-widget-four">
                                <div class="stat-icon">
                                    <i class="ti-layout-grid2"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="text-left dib">
                                    <div class="stat-heading">جۆری کاڵاکان</div>
                                    <div class="stat-text">کۆی گشتی : <?php echo number_format(Category::count_all()); ?></div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </a>
                        </div>
                        <div class="col-lg-3">
                        <div class="card">
                                <div class="stat-widget-four">
                                <div class="stat-icon">
                                    <i class="ti-money"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="text-left dib">
                                    <div class="stat-heading">داهاتی فرۆشتن</div>
                                    <div class="stat-text">کۆی گشتی : <?php echo Orders::TotalPrice()>0?Orders::TotalPrice():'0.00'; ?> دینار</div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
			</div>
			<!-- /# row -->
        </div>
    </div>



<!-- footer -->
<?php include 'includes/footer.php'; ?>
