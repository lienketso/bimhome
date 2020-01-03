<?php
// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

	//
	// Set a unique slug-like ID
	$prefix = 'root-variation-product';

	//
	// Create a metabox
	CSF::createMetabox( $prefix, array(
		'title'     => 'Sản phẩm biến thể',
		'post_type' => 'product',
	) );

	//
	// Create a section
	CSF::createSection( $prefix, array(
		'title'  => 'Sản phẩm gốc',
		'fields' => array(
			array(
				'id'      => 'root-id',
				'type'    => 'text',
				'title'   => 'Mã ID sản phẩm gốc',
			),
		)
	) );


}