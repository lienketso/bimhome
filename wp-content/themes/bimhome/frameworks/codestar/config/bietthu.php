<?php
// Control core classes for avoid errors
if (class_exists('CSF')) {
	//
	// Set a unique slug-like ID
	$prefix = 'setting_bietthu';
	//
	// Create options
	CSF::createOptions($prefix, array(
		'menu_title' => 'Temp biệt thự',
		'menu_slug' => 'setting-biethu',
	));

				// Create a section
	CSF::createSection($prefix, array(
		'title' => 'Cấu hình thông tin',
		'fields' => array(
			array(
				'id' => 'bietthu_banner',
				'type' => 'media',
				'title' => 'Ảnh banner',
			),
			array(
				'id' => 'bietthu_title_1',
				'type' => 'text',
				'title' => 'Tiêu đề banner 1',
			),
			array(
				'id' => 'bietthu_title_2',
				'type' => 'text',
				'title' => 'Tiêu đề banner 2',
			),
			array(
				'id' => 'bietthu_desc',
				'type' => 'textarea',
				'title' => 'Mô tả banner',
			),
		)
	));

	//quy trình làm việc
		CSF::createSection($prefix, array(
		'title' => 'Quy trình làm việc',
		'fields' => array(
			array(
						'id'      => 'bt_quytrinh_title_1',
						'type'    => 'text',
						'title'   => 'Tiêu đề quy trình 1',
				),
			array(
						'id'      => 'bt_quytrinh_title_2',
						'type'    => 'text',
						'title'   => 'Tiêu đề quy trình 2',
				),
			array(
						'id'      => 'bt_quytrinh_desc',
						'type'    => 'textarea',
						'title'   => 'Mô tả quy trình',
				),
			array(
				'id'     => 'list_quytrinh',
				'type'   => 'repeater',
				'title'  => 'Danh sách quy trình',
				'fields' => array(
					array(
						'id'    => 'bt_quytrinh_image',
						'type'  => 'media',
						'title' => 'Ảnh icon',
					),
					array(
						'id'      => 'quytrinh_list_title',
						'type'    => 'text',
						'title'   => 'Tiêu đề quy trình',
					),
					array(
						'id'      => 'quytrinh_list_desc',
						'type'    => 'textarea',
						'title'   => 'Mô tả quy trình',
					),
				
				)
			),
		)
	)
);

		//các gói dịch vụ
				CSF::createSection($prefix, array(
		'title' => 'Các gói dịch vụ',
		'fields' => array(
			array(
						'id'      => 'bt_banggia_title_1',
						'type'    => 'text',
						'title'   => 'Tiêu đề chính 1',
				),
			array(
						'id'      => 'bt_banggia_title_2',
						'type'    => 'text',
						'title'   => 'Tiêu chính giá 2',
				),
			array(
				'id'     => 'list_banggia',
				'type'   => 'repeater',
				'title'  => 'Danh sách bảng giá',
				'fields' => array(
					array(
						'id'    => 'list_bg_title',
						'type'  => 'text',
						'title' => 'Tiêu đề bảng giá',
					),
					array(
						'id'    => 'list_bg_check',
						'type'  => 'wp_editor',
						'title' => 'Nội dung bảng giá',
					),

				)
			),
		)
	)
);

						//các gói dịch vụ
				CSF::createSection($prefix, array(
		'title' => 'Triết lý làm việc',
		'fields' => array(
			array(
						'id'      => 'bt_trietly_title_1',
						'type'    => 'text',
						'title'   => 'Tiêu đề chính 1',
				),
			array(
						'id'      => 'bt_trietly_title_2',
						'type'    => 'text',
						'title'   => 'Tiêu đề chính 2',
				),
			array(
						'id'      => 'bt_trietly_title_3',
						'type'    => 'text',
						'title'   => 'Tiêu đề chính 3',
				),
			array(
						'id'      => 'bt_trietly_desc',
						'type'    => 'textarea',
						'title'   => 'Mô tả triết lý',
				),
			array(
						'id'      => 'bt_trietly_tuvan',
						'type'    => 'text',
						'title'   => 'Tiêu đề tư vấn',
				),
			
		)
	)
);



}//end if