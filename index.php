
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
                            <div class="card">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><i class="ti-package color-success border-success"></i>
                                    </div>
                                    <div class="stat-content dib">
                                        <div class="stat-text">بەرهەمەکان</div>
                                        <div class="stat-digit"><?php echo number_format(Product::count_all()); ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><i class="ti-user color-primary border-primary"></i>
                                    </div>
                                    <div class="stat-content dib">
                                        <div class="stat-text">بەکارهێنەرەکان</div>
                                        <div class="stat-digit"><?php echo number_format(User::count_all()); ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><i class="fa fa-building color-pink border-pink"></i>
                                    </div>
                                    <div class="stat-content dib">
                                        <div class="stat-text">کۆمپانیاکان</div>
                                        <div class="stat-digit"><?php echo number_format(Company::count_all()); ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><i class="fa fa-cubes color-danger border-danger"></i></div>
                                    <div class="stat-content dib">
                                        <div class="stat-text">جۆرەکان</div>
                                        <div class="stat-digit"><?php echo number_format(Category::count_all()); ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					<div class="row">
                        <!-- /# column -->
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-title pr">
                                    <h4>All Exam Result</h4>

                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table student-data-table m-t-20">
                                            <thead>
                                                <tr>
                                                    <th><label><input type="checkbox" value=""></label>Exam Name</th>
                                                    <th>Subject</th>
                                                    <th>Grade Point</th>
                                                    <th>Percent Form</th>
                                                    <th>Percent Upto</th>
                                                    <th>Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Class Test</td>
                                                    <td>Mathmatics</td>
                                                    <td>
                                                        4.00
                                                    </td>
                                                    <td>
                                                        95.00
                                                    </td>
                                                    <td>
                                                        100
                                                    </td>
                                                    <td>20/04/2017</td>
                                                </tr>
                                                <tr>
                                                    <td>Class Test</td>
                                                    <td>Mathmatics</td>
                                                    <td>
                                                        4.00
                                                    </td>
                                                    <td>
                                                        95.00
                                                    </td>
                                                    <td>
                                                        100
                                                    </td>
                                                    <td>20/04/2017</td>
                                                </tr>
                                                <tr>
                                                    <td>Class Test</td>
                                                    <td>English</td>
                                                    <td>
                                                        4.00
                                                    </td>
                                                    <td>
                                                        95.00
                                                    </td>
                                                    <td>
                                                        100
                                                    </td>
                                                    <td>20/04/2017</td>
                                                </tr>
                                                <tr>
                                                    <td>Class Test</td>
                                                    <td>Bangla</td>
                                                    <td>
                                                        4.00
                                                    </td>
                                                    <td>
                                                        95.00
                                                    </td>
                                                    <td>
                                                        100
                                                    </td>
                                                    <td>20/04/2017</td>
                                                </tr>
                                                <tr>
                                                    <td>Class Test</td>
                                                    <td>Mathmatics</td>
                                                    <td>
                                                        4.00
                                                    </td>
                                                    <td>
                                                        95.00
                                                    </td>
                                                    <td>
                                                        100
                                                    </td>
                                                    <td>20/04/2017</td>
                                                </tr>
                                                <tr>
                                                    <td>Class Test</td>
                                                    <td>English</td>
                                                    <td>
                                                        4.00
                                                    </td>
                                                    <td>
                                                        95.00
                                                    </td>
                                                    <td>
                                                        100
                                                    </td>
                                                    <td>20/04/2017</td>
                                                </tr>
                                                <tr>
                                                    <td>Class Test</td>
                                                    <td>Mathmatics</td>
                                                    <td>
                                                        4.00
                                                    </td>
                                                    <td>
                                                        95.00
                                                    </td>
                                                    <td>
                                                        100
                                                    </td>
                                                    <td>20/04/2017</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /# column -->
                    </div>
					
                </section>
			</div>
			<!-- /# row -->
        </div>
    </div>



<!-- footer -->
<?php include 'includes/footer.php'; ?>
