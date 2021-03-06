<?php 
	$options_footer = get_option( 'my_framework' );
 ?>

<!-- Footer _____________________________ -->
<footer>
	<div class="bao-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">
					<div class="contact-foot">
						<h4>Liên hệ với <span>chúng tôi</span></h4>
						<div class="hotline-footer"> 
							<span><?= $options_footer['hotline_site'] ?></span>
						</div>
						<p><?= $options_footer['phone_one'] ?></p>
						<p><?= $options_footer['phone_two'] ?></p>
						<p><?= $options_footer['email_site'] ?></p>
						<p style="color: #BE8F3D; font-weight: bold;">Địa chỉ </p>
						<p><?= $options_footer['address_site'] ?></p>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="fanpage">
						<h4>Kết nối <span>chúng tôi</span></h4>
						<a href="<?= $options_footer['fanpage_site'] ?>"><img src="<?= get_template_directory_uri() ?>/libs/images/fb.png" class="img-full" alt="fanpage"></a>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="fanpage">
						<h4>Đăng ký<span> tư vấn</span></h4>
						<p style="padding-bottom: 20px">Hãy để chúng tôi hỗ trợ bạn. Mọi thông tin của Khách Hàng đều được bảo mật
						và không Spam</p>
						<form action="" method="POST" role="form">
							<div class="form-group">
								<input type="text" class="txtfoot" id="" placeholder="Họ và tên *">
							</div>
							<div class="form-group">
								<input type="text" class="txtfoot" id="" placeholder="Số điện thoại *">
							</div>
							<div class="form-group">
								<textarea name="content" class="txtfoot" rows="3" placeholder="Tin nhắn"></textarea>
							</div>
							<div class="nutsubmit">
							<a href="#" type="submit" class="btnSubmit">Cần tư vấn</a>
							</div>
						</form>
					</div>
				</div>

			</div>
		</div> <!-- /.container -->
	</div>
</footer>

<!-- Scroll Top Button -->
<button class="scroll-top tran3s p-color-bg">
	<i class="fa fa-angle-up" aria-hidden="true"></i>
</button>

<!-- Js File_________________________________ -->

<!-- j Query -->
<?php wp_footer(); ?>

</div> <!-- /.main-page-wrapper -->
</body>
</html>