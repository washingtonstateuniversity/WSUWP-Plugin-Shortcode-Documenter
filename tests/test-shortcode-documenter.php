<?php

class MyTestClass extends WP_UnitTestCase {

	public function test_shortcode_documenter_default_response() {
		$content = '[shortcode_doc]';
		$content = do_shortcode( $content );

		$this->assertEquals( 'Shortcode documentation', $content );
	}
}
