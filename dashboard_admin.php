<?php 
	include "header.php";
 ?>
<!-- 
<div class="container">
	<h3 class="text-right text-success">اختصاص مسئولیت</h3>
	<form class="text-center">
		<span class="label">نام و نام خانوادگی</span>
		<button type="button" class="btn btn-success dropdown-toggle" data-tagele="dropdown">
			محمدحسین گلستانی
		</button>
		<br>
]		<label class="label" for="sel">نام خانوادگی مافوق</label>
		<select class="btn classic" data-taggle="dropdown" id="sel">
			<option>محمدحسین گلستانی</option>
			<option>علی بیک دولتی</option>
		</select>
		<br>
		<button type="submit" class="btn btn-success">تایید</button>
	</form>
</div>

<div>
	<h3 class="container text-right text-danger">لیست اعضا تحت نظر</h3>
	<table class="table container text-center">
		<tr>
			<th>ردیف</th>
			<th>نام و نام خانوادگی</th>
			<th>مسئولیت</th>
			<th>وضعیت</th>
		</tr>
		<tr>
			<td>1</td>
			<td>سجاد زواری</td>
			<td>رسانه پایگاه شهید مطهری</td>
			<td>فعال</td>
		</tr>
		<tr>
			<td>2</td>
			<td>نفر ثالث</td>
			<td>رسانه پایگاه شهید باقری</td>
			<td>غیر فعال</td>
		</tr>
		<tr>
			<td>3</td>
			<td>محمدحسین گلستانی</td>
			<td>رسانه پایگاه شهید چمران</td>
			<td>فعال</td>
		</tr>
	</table>
</div>

 -->

<div id="main">
	<div class="logo">
		<!-- <div class="col logo">
			<img src="assets/img/logo.png" class="col-2">
		</div> -->
	</div>
	<div class="container">
		<div class="selectForm">
			<p class="h4">اختصاص مسئولیت</p>
			<form action="" class="col-lg-6 col-md-8">
				<div class="row">
					<label class="label col-md-4" for="lNameTopPosition">نام و نام خانوادگی</label>
					<select class="btn classic col-md-8 " data-taggle="dropdown" id="lNameTopPosition">
						<option>محمدحسین گلستانی</option>
						<option>علی بیک دولتی</option>
					</select>
				</div>
				<div class="row">
					<label class="label col-md-4" for="lNameTopPosition">نام خانوادگی مافوق</label>
					<select class="btn classic col-md-8" data-taggle="dropdown" id="lNameTopPosition">
						<option>محمدحسین گلستانی</option>
						<option>علی بیک دولتی</option>
					</select>
				</div>
				<div class="row">
					<input type="submit" class="btn col-md-3" value="تایید">
				</div>
			</form>
		</div>
		<div class="listForm">
			<p class="h4 text-danger">لیست اعضا تحت نظر</p>
			<table class="table col-lg-8 col-md-10">
				<tr>
					<th>ردیف</th>
					<th>نام و نام خانوادگی</th>
					<th>مسئولیت</th>
					<th>وضعیت</th>
				</tr>
				<tr>
					<td>1</td>
					<td>سجاد زواری</td>
					<td>رسانه پایگاه شهید مطهری</td>
					<td>فعال</td>
				</tr>
				<tr class="text-danger">
					<td>2</td>
					<td>نفر ثالث</td>
					<td>رسانه پایگاه شهید باقری</td>
					<td>غیر فعال</td>
				</tr>
				<tr>
					<td>3</td>
					<td>محمدحسین گلستانی</td>
					<td>رسانه پایگاه شهید چمران</td>
					<td>فعال</td>
				</tr>
			</table>
		</div>
	</div>
</div>


 <?php 
	include "footer.php";
 ?>