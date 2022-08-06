	<div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
	<div class="nano">
	<div class="nano-content">
	<ul>
	<div class="logo"><a href="index.php">
			<img src="assets/images/logo.png" alt="" /></a></div>
			<li><a href="index.php"><i class="ti-home"></i>سەرەکی</a></li>
			<li><a href="sale.php"><i class="ti-shopping-cart"></i>فڕؤشتن</a></li>
	<li><a class="sidebar-sub-toggle"><i class="fa fa-users" aria-hidden="true"></i> بەکارهێنەرەکان <span
				class="sidebar-collapse-icon ti-angle-down"></span></a>
		<ul>
			<li><a href="users.php">بینینی بەکارهێنەرەکان</a></li>
			<li><a href="cashiers.php">بینینی کاشێرەکان</a></li>
			<li><a href="admins.php">بینینی بەڕێوبەرەکان</a></li>
			<li><a href="add_user.php">زیادکردنی بەکارهێنەر</a></li>
			<li><a href="user_recycle.php">بەکارهێنەرە سڕاوەکان</a></li>
		</ul>
	</li>
	<li><a class="sidebar-sub-toggle"><i class="ti-package"></i> بەرهەمەکان 
	<?php
	$product =Product::count_expire_product();
	if($product>0){
		echo '<span class="badge badge-danger">'.$product.'</span>';
	}else{
		echo '';
	}
?>
	<span class="sidebar-collapse-icon ti-angle-down"></span>
	</a>
		<ul>
			<li><a href="products.php">بینینی بەرهەمەکان</a></li>
			<li><a href="add_product.php">زیادکردنی بەرهەم</a></li>
			<li><a href="product_recycle.php">بەرهەمە سڕاوەکان</a></li>
		</ul>
	</li>
	<li><a class="sidebar-sub-toggle"><i class="fa fa-cubes" aria-hidden="true"></i> جۆرەکان <span
				class="sidebar-collapse-icon ti-angle-down"></span></a>
		<ul>
			<li><a href="categories.php">بینینی جۆرەکان</a></li>
			<li><a href="add_category.php">زیادکردنی جۆر</a></li>
			<li><a href="category_recycle.php">جۆرە سڕاوەکان</a></li>
		</ul>
	</li>
	<li><a class="sidebar-sub-toggle"><i class="fa fa-building" aria-hidden="true"></i> کۆمپانیاکان <span
				class="sidebar-collapse-icon ti-angle-down"></span></a>
		<ul>
			<li><a href="companys.php">بینینی کۆمپانیاکان</a></li>
			<li><a href="add_company.php">زیادکردنی کۆمپانیا</a></li>
			<li><a href="company_recycle.php">کۆمپانیایە سڕاوەکان</a></li>
		</ul>
	</li>
	<li><a class="sidebar-sub-toggle"><i class="ti-shopping-cart-full" aria-hidden="true"></i> لیستی فرۆشراوەکان <span
				class="sidebar-collapse-icon ti-angle-down"></span></a>
		<ul>
			<li><a href="order_customer.php">بینینی فرۆشراوەکان</a></li>
			<li><a href="order_recycle.php">فرۆشراوە سڕاوەکان</a></li>
		</ul>
	</li>
	<li><a class="sidebar-sub-toggle"><i class="ti-files" aria-hidden="true"></i> وەصڵەکان <span
				class="sidebar-collapse-icon ti-angle-down"></span></a>
		<ul>
			<li><a href="small_invoice.php">وەصڵی بچووک</a></li>
			<li><a href="larg_invoice.php">وەصڵی گەورە</a></li>
		</ul>
	</li>
	</ul>
	</div>
	</div>
</div>
<!-- /# sidebar -->
