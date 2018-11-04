<?php 
	include "header.php";
 ?>
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
					<select class="rounded col-md-8 " data-taggle="dropdown" id="lNameTopPosition">
						<option>محمدحسین گلستانی</option>
						<option>علی بیک دولتی</option>
					</select>
				</div>
				<div class="row">
					<label class="label col-md-4" for="lNameTopPosition">نام خانوادگی مافوق</label>
					<select class="rounded col-md-8" data-taggle="dropdown" id="lNameTopPosition">
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