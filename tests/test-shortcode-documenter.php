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
			array( '[shortcode_doc shortcode=""]', '' ),
			array( '[shortcode_doc shortcode="wsuwp_json"]', '<pre><code>[wsuwp_json]</code></pre>'),
			array(
				'[shortcode_doc shortcode="wsuwp_json"]Text content[/shortcode_doc]',
				'<code>[wsuwp_json]Text content[/wsuwp_json]</code>',
			),
			array(
				'[shortcode_doc shortcode="wsuwp_json"]<div>HTML content</div>[/shortcode_doc]',
				'<code>[wsuwp_json]&lt;div&gt;HTML content&lt;/div&gt;[/wsuwp_json]</code>',
			),
		);

		return $data;
	}
}
