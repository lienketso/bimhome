<?php
// Control core classes for avoid errors
if (class_exists('CSF')) {
	//
	// Set a unique slug-like ID
	$prefix = 'my_framework';
	//
	// Create options
	CSF::createOptions($prefix, array(
		'menu_title' => 'Cấu hình chung',
		'menu_slug' => 'my-framework',
	));
	//
	CSF::createSection($prefix, array(
		'title' => 'Slider trang chủ',
		'fields' => array(
			array(
				'id'     => 'slider',
				'type'   => 'repeater',
				'title'  => 'Repeater',
				'fields' => array(
					array(
						'id'    => 'slider_image',
						'type'  => 'media',
						'title' => 'Ảnh Slider',
					),
					array(
						'id'      => 'slider_main_title_1',
						'type'    => 'text',
						'title'   => 'Tiêu đề 1 ( Trắng )',
					),
					array(
						'id'      => 'slider_main_title_2',
						'type'    => 'text',
						'title'   => 'Tiêu đề 1 ( Mầu )',
					),
					array(
						'id'      => 'slider_sub_title_1',
						'type'    => 'text',
						'title'   => 'Tiêu đề 2 ( Trắng )',
					),
					array(
						'id'      => 'slider_sub_title_2',
						'type'    => 'text',
						'title'   => 'Tiêu đề 2 ( Mầu )',
					),
					array(
						'id'      => 'slider_content',
						'type'    => 'textarea',
						'title'   => 'Mô tả',
					),
					array(
						'id'      => 'slider_more_button',
						'type'    => 'text',
						'title'   => 'Nội dung nút xem thêm',
					),
					array(
						'id'      => 'slider_more_link',
						'type'    => 'text',
						'title'   => 'Link xem thêm',
					),
					array(
						'id'      => 'slider_registry_button',
						'type'    => 'text',
						'title'   => 'Nội dung nút đăng ký',
					),
					array(
						'id'      => 'slider_registry_link',
						'type'    => 'text',
						'title'   => 'Link nút đăng ký',
					),
				),
			),
		)
	)
);


	CSF::createSection($prefix, array(
		'title' => 'Đối tác khách hàng',
		'fields' => array(
			array(
						'id'      => 'partner_title_1',
						'type'    => 'text',
						'title'   => 'Tiêu đề trắng',
				),
			array(
						'id'      => 'partner_title_2',
						'type'    => 'text',
						'title'   => 'Tiêu đề mầu',
				),
			array(
				'id'     => 'partner',
				'type'   => 'repeater',
				'title'  => 'Repeater',
				'fields' => array(
					array(
						'id'    => 'partner_image',
						'type'  => 'media',
						'title' => 'Ảnh logo',
					),
					array(
						'id'      => 'partner_desc',
						'type'    => 'textarea',
						'title'   => 'Mô tả',
					),
				
				)
			),
		)
	)
);


	CSF::createSection($prefix, array(
		'title' => 'Banner tư vấn',
		'fields' => array(
			array(
				'id' => 'banner_home',
				'title' => 'Ảnh background',
				'type' => 'media'
			),
			array(
				'id' => 'banner_home_title_1',
				'title' => 'Tiêu đề mầu',
				'type' => 'text'
			),
			array(
				'id' => 'banner_home_title_2',
				'title' => 'Tiêu đề trắng',
				'type' => 'text'
			),
			array(
				'id' => 'banner_home_desc_1',
				'title' => 'Mô tả banner ',
				'type' => 'textarea'
			),

			array(
				'id' => 'banner_home_title_2a_1',
				'title' => 'Tiêu đề 01',
				'type' => 'text'
			),
			array(
				'id' => 'banner_home_title_2a_2',
				'title' => 'Tiêu đề 02',
				'type' => 'text'
			),
			array(
				'id' => 'banner_home_title_2a_3',
				'title' => 'Tiêu đề 03',
				'type' => 'text'
			),

		)
	)
);
		// Create a section
	CSF::createSection($prefix, array(
		'title' => 'Bài giới thiệu',
		'fields' => array(
			array(
				'id' => 'about_title',
				'type' => 'text',
				'title' => 'Tiêu đề trái',
			),
			array(
				'id' => 'about_title_2',
				'type' => 'text',
				'title' => 'Tiêu đề mầu',
			),
			array(
				'id' => 'about_image',
				'type' => 'upload',
				'title' => 'Ảnh đại diện',
			),

			array(
				'id' => 'about_desc',
				'type' => 'textarea',
				'title' => 'Thông tin mô tả'
			),

			array(
				'id' => 'about_content',
				'type' => 'wp_editor',
				'title' => 'Nội dung '
			),

			array(
				'id' => 'about_button',
				'type' => 'text',
				'title' => 'Tên button',
			),
			array(
				'id' => 'about_link',
				'type' => 'text',
				'title' => 'Link bài viết'
			),
		)
	));
			// Create a section
	CSF::createSection($prefix, array(
		'title' => 'Trang liên hệ',
		'fields' => array(
			array(
				'id' => 'contact_title',
				'type' => 'text',
				'title' => 'Tiêu đề ',
			),
			array(
				'id' => 'contact_content',
				'type' => 'wp_editor',
				'title' => 'Nội dung trang liên hệ',
			),
			array(
				'id' => 'contact_phone',
				'type' => 'wp_editor',
				'title' => 'Điện thoại',
			),
			array(
				'id' => 'contact_address',
				'type' => 'wp_editor',
				'title' => 'Địa chỉ',
			),
		)
	));
	// Create a section
	CSF::createSection($prefix, array(
		'title' => 'Cấu hình website',
		'fields' => array(
			array(
				'id' => 'logo_site_head',
				'type' => 'upload',
				'title' => 'Logo header',
			),
			array(
				'id' => 'logo_site_footer',
				'type' => 'upload',
				'title' => 'Logo Chân trang',
			),
			array(
				'id' => 'phone_one',
				'type' => 'text',
				'title' => 'Điện thoại 1'
			),
			array(
				'id' => 'phone_two',
				'type' => 'text',
				'title' => 'Điện thoại 2'
			),
			array(
				'id' => 'hotline_site',
				'type' => 'text',
				'title' => 'Số hotline'
			),
			array(
				'id' => 'email_site',
				'type' => 'text',
				'title' => 'Email liên hệ',
			),
			array(
				'id' => 'address_site',
				'type' => 'text',
				'title' => 'Địa chỉ công ty'
			),
			array(
				'id' => 'fanpage_site',
				'type' => 'text',
				'title' => 'Link fanpage facebook'
			),
			array(
				'id' => 'iframe_site',
				'type' => 'textarea',
				'title' => 'Iframe google map',
			),
			array(
				'id' => 'video_title_site',
				'type' => 'text',
				'title' => 'Tiêu đề video trang chủ'
			),
			array(
				'id' => 'iframe_video_site',
				'type' => 'textarea',
				'title' => 'Iframe video youtube',
			),
			array(
				'id' => 'footer_site',
				'type' => 'wp_editor',
				'title' => 'Thông tin chân trang'
			),
			array(
				'id'     => 'social_site',
				'type'   => 'repeater',
				'title'  => 'Mạng xã hội',
				'fields' => array(
					array(
						'id'    => 'icon_social',
						'type'  => 'text',
						'title' => 'Class icon',
					),
					array(
						'id'      => 'link_social',
						'type'    => 'text',
						'title'   => 'Đường dẫn',
					)
				)
			),
			array(
				'id' => 'copyright_site',
				'type' => 'text',
				'title' => 'Thông tin copy right'
			),
		)
	));
}
// Control core classes for avoid errors
if (class_exists('CSF')) {
	//
	// Set a unique slug-like ID
	$prefix = 'my_category_options';
	//
	// Create taxonomy options
	CSF::createTaxonomyOptions($prefix, array(
		'taxonomy' => 'category',
		'post_type' => 'post',
		'data_type' => 'serialize', // The type of the database save options. `serialize` or `unserialize`
	));
	//
	// Create a section
	CSF::createSection($prefix, array(
		'fields' => array(
			array(
				'id'=>'tax_background',
				'type'=>'media',
				'title'=>'Background danh mục'
			),
			array(
				'id' => 'tax_status',
				'type' => 'select',
				'title' => 'Tùy chọn hiển thị',
				'placeholder' => 'Danh mục tin trang chủ',
				'options' => array(
					'default' => 'Không chọn',
					'display_home' => 'Hiện trang chủ',
					'display_bottom' => 'Hiện chân trang'
				),
				'default' => 'default'
			),
		)
	));
}


//metabox page
if (class_exists('CSF')) {
	//
	// Set a unique slug-like ID
	$prefix = 'my_product_options';
	//
	// Create a metabox
	CSF::createMetabox($prefix, array(
		'title' => 'Tùy chọn hiển thị',
		'post_type' => 'product',
	));
	//
	// Create a section
	CSF::createSection($prefix, array(
		'fields' => array(
			
				array(
				'id'     => 'thongso_sanpham',
				'type'   => 'repeater',
				'title'  => 'Thông số khác',
				'fields' => array(
					array(
						'id'    => 'title_thongso',
						'type'  => 'text',
						'title' => 'Tiêu đề',
					),
					array(
						'id'      => 'desc_thongso',
						'type'    => 'text',
						'title'   => 'Thông số',
					)
				)
			),
		)
	));

}

//metabox page
if (class_exists('CSF')) {
	//
	// Set a unique slug-like ID
	$prefix = 'my_member_post';
	//
	// Create a metabox
	CSF::createMetabox($prefix, array(
		'title' => 'Thông tin khác',
		'post_type' => 'kien-truc-su',
	));
	//
	// Create a section
	CSF::createSection($prefix, array(
		'fields' => array(
			// A text field
			array(
				'id' => 'member_fb',
				'type' => 'text',
				'title' => 'Faceboox',
			),
			array(
				'id' => 'member_google',
				'type' => 'text',
				'title' => 'Google +',
			),
			array(
				'id' => 'member_twitter',
				'type' => 'text',
				'title' => 'Twitter',
			),
		)
	));

}

//metabox post
if (class_exists('CSF')) {
	//
	// Set a unique slug-like ID
	$prefix = 'my_post_options';
	//
	// Create a metabox
	CSF::createMetabox($prefix, array(
		'title' => 'Tùy chọn hiển thị',
		'post_type' => 'post',
	));
	//
	// Create a section
	CSF::createSection($prefix, array(
		'fields' => array(
			// A text field
			array(
				'id' => 'post_status',
				'type' => 'select',
				'title' => 'Tùy chọn hiển thị',
				'placeholder' => 'Lựa chọn hiển thị',
				'options' => array(
					'post_none' => 'Không chọn',
					'post_hot' => 'Bài viết nổi bật',
					'post_home' => 'Bài viết trang chủ',
				),
				'default' => 'post_home'
			),
		)
	));

}