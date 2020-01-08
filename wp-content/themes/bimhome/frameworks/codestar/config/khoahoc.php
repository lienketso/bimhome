<?php
// Control core classes for avoid errors
if (class_exists('CSF')) {
	//
	// Set a unique slug-like ID
	$prefix = 'setting_khoahoc';
	//
	// Create options
	CSF::createOptions($prefix, array(
		'menu_title' => 'Temp khóa học',
		'menu_slug' => 'setting-khoahoc',
	));

				// Create a section
	CSF::createSection($prefix, array(
		'title' => 'Cấu hình thông tin',
		'fields' => array(
			array(
				'id' => 'khoahoc_banner',
				'type' => 'media',
				'title' => 'Ảnh banner',
			),
			array(
				'id' => 'khoahoc_banner_title',
				'type' => 'text',
				'title' => 'Tiêu đề banner',
			),
			array(
				'id' => 'khoahoc_banner_desc',
				'type' => 'textarea',
				'title' => 'Mô tả banner',
			),
			array(
				'id' => 'khoahoc_video_image',
				'type' => 'media',
				'title' => 'Ảnh đại diện video',
			),

			array(
				'id' => 'khoahoc_banner_video',
				'type' => 'textarea',
				'title' => 'Iframe video',
			),
		)
	));

		//Thông tin giới thiệu 1
	CSF::createSection($prefix, array(
		'title' => 'Thông tin giới thiệu',
		'fields' => array(
			array(
				'id'      => 'khss1_main_title',
				'type'    => 'text',
				'title'   => 'Tiêu đề section 1',
			),
			array(
				'id'      => 'khss1_main_desc',
				'type'    => 'textarea',
				'title'   => 'Mô tả section 1',
			),
			array(
				'id'      => 'khss1_image_1',
				'type'    => 'media',
				'title'   => 'Ảnh đại diện 1',
			),
			array(
				'id'      => 'khss1_title_1',
				'type'    => 'text',
				'title'   => 'Tiêu đề 1',
			),
			array(
				'id'      => 'khss1_content',
				'type'    => 'wp_editor',
				'title'   => 'Nội dung 1',
			),
			array(
				'id'      => 'khss1_image_2',
				'type'    => 'media',
				'title'   => 'Ảnh đại diện 2',
			),
			array(
				'id'      => 'khss1_title_2',
				'type'    => 'text',
				'title'   => 'Tiêu đề 2',
			),
			array(
				'id'      => 'khss1_content_2',
				'type'    => 'wp_editor',
				'title'   => 'Nội dung 2',
			),
		)
	)
);

		//các gói dịch vụ
	CSF::createSection($prefix, array(
		'title' => 'Giảng viên',
		'fields' => array(
			array(
				'id'      => 'kh_giangvien_title_1',
				'type'    => 'text',
				'title'   => 'Tiêu đề nhỏ',
			),
			array(
				'id'      => 'kh_giangvien_title_2',
				'type'    => 'text',
				'title'   => 'Tiêu đề chính',
			),
			array(
				'id'      => 'kh_giangvien_content',
				'type'    => 'wp_editor',
				'title'   => 'Nội dung giới thiệu',
			),
			array(
				'id'      => 'kh_giangvien_banner',
				'type'    => 'media',
				'title'   => 'Ảnh background',
			),
			
		)
	)
);

						//video khóa học
	CSF::createSection($prefix, array(
		'title' => 'Video khóa học',
		'fields' => array(
			array(
				'id'      => 'kh_video_main_title_1',
				'type'    => 'text',
				'title'   => 'Tiêu đề nhỏ',
			),
			array(
				'id'      => 'kh_video_main_title_2',
				'type'    => 'text',
				'title'   => 'Tiêu đề lớn',
			),
			array(
				'id'      => 'kh_video_hot_image',
				'type'    => 'media',
				'title'   => 'Ảnh đại diện',
			),
			array(
				'id'     => 'list_kh_video',
				'type'   => 'repeater',
				'title'  => 'Danh sách video',
				'fields' => array(
					array(
						'id'    => 'kh_video_title',
						'type'  => 'text',
						'title' => 'Tiêu đề video',
					),
					array(
						'id'      => 'kh_video_iframe',
						'type'    => 'textarea',
						'title'   => 'Iframe video',
					),
				)

			),
			
		)
	)
);


						//Cảm nhận học viên
	CSF::createSection($prefix, array(
		'title' => 'Cảm nhận học viên',
		'fields' => array(
			array(
				'id'      => 'kh_comment_main_title_1',
				'type'    => 'text',
				'title'   => 'Tiêu đề nhỏ',
			),
			array(
				'id'      => 'kh_comment_main_title_2',
				'type'    => 'text',
				'title'   => 'Tiêu đề lớn',
			),
			array(
				'id'     => 'list_kh_comment',
				'type'   => 'repeater',
				'title'  => 'Danh sách comment',
				'fields' => array(
					array(
						'id'    => 'kh_comment_title',
						'type'  => 'text',
						'title' => 'Tiêu đề comment',
					),
					array(
						'id'    => 'kh_comment_image',
						'type'  => 'media',
						'title' => 'Ảnh đại diện',
					),
					array(
						'id'      => 'kh_comment_content',
						'type'    => 'textarea',
						'title'   => 'Nội dung comment',
					),
				)

			),
			
		)
	)
);

CSF::createSection($prefix, array(
		'title' => 'Thông tin tư vấn',
		'fields' => array(
			array(
				'id'      => 'kh_tuvan_main_title_1',
				'type'    => 'text',
				'title'   => 'Tiêu đề nhỏ',
			),
			array(
				'id'      => 'kh_tuvan_main_title_2',
				'type'    => 'text',
				'title'   => 'Tiêu đề lớn',
			),
			array(
				'id'      => 'kh_tuvan_desc',
				'type'    => 'textarea',
				'title'   => 'Thông tin mô tả',
			),
			array(
				'id'      => 'kh_tuvan_phone',
				'type'    => 'text',
				'title'   => 'Số điện thoại',
			),
		)
	)
);




}//end if

