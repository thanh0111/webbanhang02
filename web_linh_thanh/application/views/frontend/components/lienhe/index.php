<?php echo form_open( base_url()."lien-he"); ?>
<section>
	<div class="container">
	<div class="row wraper">
		
	</div>
		<div class="col-md-7 col-12">
			<div class="section-article contactpage" style="  padding-left: 20px;">
				<?php 
				echo validation_errors();
				
				?>
				<form accept-charset="UTF-8" action="<?php echo base_url() ?>lien-he" id="contact" method="post">
					<input name="FormType" type="hidden" value="contact">
					<input name="utf8" type="hidden" value="true">
					<h1 style="color: red">Liên hệ</h1>				
					
					<div class="form-comment">
						<div class="row" style="padding-left: 14px;">
							<div class="col-md-4 col-12">
								<div class="form-group" style="width: 200px;">
									<label for="name"> Họ tên<span class="required"></span></label>
									<input id="name" name="fullname" type="text" value="" class="form-control">
								</div>
							</div>
							<div class="col-md-4 col-12">
								<div class="form-group" style="width: 200px;">
									<label for="email"> Email<span class="required"></span></label>
									<input id="email" name="email" class="form-control" type="email" value="">
								</div>
							</div>
							<div class="col-md-4 col-12">
								<div class="form-group" style="width: 200px;">
									<label for="phone"> Số điện thoại<span class="required"></span></label>
									<input type="number" id="phone" class="form-control" name="phone">

								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="message"> Tiêu đề<span class="required"></span></label>
							<textarea id="message" name="title" class="form-control custom-control" rows="2"></textarea>
						</div>
						<div class="form-group">
							<label for="message"> Lời nhắn<span class="required"></span></label>
							<textarea id="message" name="content" class="form-control custom-control" rows="5"></textarea>
						</div>
						<button type="submit" class="btn-update-order" >Gửi liên hệ</button>

					</div>
				</form>
			</div>
		</div>
		<div class="col-md-4 col-12">
			<div class="f-contact" style="
			padding-left: 32px;
			">
			<h1 style="color: black">Thông tin liên hệ</h1>
			<ul class="list-unstyled">
				<li class="clearfix">
					<i class="fa fa-map-marker fa-1x" style="color:#f46969ab; padding: 20px; "></i>
					<span style="color: black"> 62A Triều Khúc, Thanh Xuân, TP.HN</span><br>
				</li>
				<li class="clearfix">
					<i class="fa fa-phone fa-1x" style="color:#f46969ab;padding: 20px;  "></i>
					<span style="color: black">099999999 - 088888888</span>
				</li>
				<li class="clearfix">
					<i class="fa fa-envelope fa-1x " style="color:#f46969ab; padding: 20px; "></i>
					<span style="color: black"><a href="#">linhthanh@gmail.com</a></span>
				</li>
			</ul>
		</div>

	</div>
</div>

</section>