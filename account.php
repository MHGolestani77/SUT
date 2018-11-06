<?php 
	include "header.php";
 ?>
<div id="main">
	<div class="logo">
		<!-- <div class="col logo">
			<img src="assets/img/logo.png" class="col-2">
		</div> -->
	</div>
	<div id="account">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<ul>
						<li>
							<a href="">
								<i class="fas fa-user"></i>
								<p>اطلاعات شناسایی</p>
							</a>
						</li>
						<li>
							<a href="">
								<i class="fas fa-key"></i>
								<p>اطلاعات کاربری</p>
							</a>
						</li>
						<li>
							<a href="">
								<i class="fas fa-phone"></i>
								<p>اطلاعات تماس</p>
							</a>
						</li>
					</ul>
				</div>
				<div class="col-md-8">
					<div class="selectForm">
						<p class="h4">اطلاعات شناسایی</p>
						<form action="" class="col-lg-6 col-md-8">
							<div class="row">
								<label class="label col-md-4" for="accountName">نام</label>
								<input type="text" class="rounded col-md-8" id="accountName" name="accountName">
							</div>
							<div class="row">
								<label class="label col-md-4" for="accountLastName">نام خانوادگی</label>
								<input type="text" class="rounded col-md-8" id="accountLastName" name="accountLastName">
							</div>
							<div class="row">
								<label class="label col-md-4" for="accountFatherName">نام پدر</label>
								<input type="text" class="rounded col-md-8" id="accountFatherName" name="accountFatherName">
							</div>
							<div class="row">
								<label class="label col-md-4" for="accountNationalCode">کد ملی</label>
								<input type="text" class="rounded col-md-8" id="accountNationalCode" name="accountNationalCode">
							</div>
							<div class="row">
								<label class="label col-md-4" for="accountBirthDate">تاریخ تولد</label>
								<input type="text" class="rounded col-md-8" id="accountBirthDate" name="accountBirthDate">
							</div>
							<div class="row">
								<input type="submit" class="btn col-md-3" value="تایید" name="submitPersonData">
							</div>
						</form>
					</div><!-- 
					<div class="selectForm">
						<p class="h4">اطلاعات کاربری</p>
						<form action="" class="col-lg-6 col-md-8">
							<div class="row">
								<label class="label col-md-4" for="accountUserName" disabled>نام کاربری</label>
								<input type="text" class="rounded col-md-8" id="accountUserName" name="accountUserName">
							</div>
							<div class="row">
								<label class="label col-md-4" for="accountNewPassWord">رمز عبور جدید</label>
								<input type="password" class="rounded col-md-8" id="accountNewPassWord" name="accountNewPassWord">
							</div>
							<div class="row">
								<label class="label col-md-4" for="accountConfigurePassWord">تکرار رمز عبور جدید</label>
								<input type="password" class="rounded col-md-8" id="accountConfigurePassWord" name="accountConfigurePassWord">
							</div>
							<div class="row">
								<input type="submit" class="btn col-md-3" value="تایید" name="submitAccountData">
							</div>
						</form>
					</div>
					<div class="selectForm">
						<p class="h4">اطلاعات تماس</p>
						<form action="" class="col-lg-6 col-md-8">
							<div class="row">
								<label class="label col-md-4" for="accountPhoneNumber" disabled>نام کاربری</label>
								<input type="text" class="rounded col-md-8" id="accountPhoneNumber" name="accountPhoneNumber">
							</div>
							<div class="row">
								<label class="label col-md-4" for="accountAddress">رمز عبور جدید</label>
								<input type="password" class="rounded col-md-8" id="accountAddress" name="accountAddress">
							</div>
							<div class="row">
								<input type="submit" class="btn col-md-3" value="تایید" name="submitCallData">
							</div>
						</form>
					</div> -->
				</div>
			</div>
		</div>
	</div>
</div>
 <?php 
	include "footer.php";
 ?>