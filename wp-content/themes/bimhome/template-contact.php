<?php /* Template Name: Contact us */
get_header();
$options_contact = get_option( 'my_framework' );
?>

<div class="inner-banner">
	<div class="opacity">
		<div class="container">
			<h4><?= $options_contact['contact_title'] ?></h4>
		</div>
	</div> <!-- /.opacity -->
</div>


			<!-- Blog Details V1 ___________________________ -->
			<div class="container">
				
				<div class="row">
					<div class="col-lg-6">
						<div class="contact-left">
							<h2 class="theme-main-title"><span>Liên hệ <strong> với chúng tôi</strong></span></h2>
							<div class="content-contact">
							<?= $options_contact['contact_content'] ?>
							<div class="row">
								<div class="col-lg-6">
									<h4 class="title-lh">Thông tin liên hệ</h4>
									<?= $options_contact['contact_phone'] ?>
								</div>
								<div class="col-lg-6">
									<h4 class="title-lh">Địa chỉ</h4>
									<?= $options_contact['contact_address'] ?>
								</div>
							</div>
						</div>
						</div>
					</div>

					<div class="col-lg-6">
						<div class="form-contact-page">
							<h4 class="title-lh">Đăng ký thông tin</h4>
							<form action="" method="POST" role="form">
								<div class="form-group">
									<input type="text" class="txtcontact" id="" placeholder="Họ và tên *">
								</div>
								<div class="form-group">
									<input type="text" class="txtcontact" id="" placeholder="Số điện thoại *">
								</div>
								<div class="form-group">
									<textarea class="txtcontact" rows="4" placeholder="Tin nhắn"></textarea>
								</div>
								<div class="nutsubmit">
								<a href="#" class="btnSubmit">Gửi tin nhắn</a>
								</div>
							</form>
						</div>
					</div>

				</div>
			</div>

			<?php get_footer(); ?>