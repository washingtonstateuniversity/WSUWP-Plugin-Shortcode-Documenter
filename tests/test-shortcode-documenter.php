<?php

class Test_Shortcode_Documenter extends WP_UnitTestCase {

	/**
	 * @dataProvider data_shortcode_response
	 */
	public function test_shortcode_documenter_response( $content, $response ) {
		$content = do_shortcode( $content );

		$this->assertEquals( $response, $content );
	}

	/**
	 * List of content blocks and expected responses.
	 */
	public function data_shortcode_response() {
		$data = array(
			array( '[shortcode_doc]', '' ),
		);

		return $data;
	}
}
