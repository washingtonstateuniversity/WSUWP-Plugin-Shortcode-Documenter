# WSU Shortcode Documenter

![Build Status](https://travis-ci.org/washingtonstateuniversity/WSUWP-Plugin-Shortcode-Documenter.svg?branch=master) [![Code Climate](https://codeclimate.com/github/washingtonstateuniversity/WSUWP-Plugin-Shortcode-Documenter/badges/gpa.svg)](https://codeclimate.com/github/washingtonstateuniversity/WSUWP-Plugin-Shortcode-Documenter)

Provides a shortcode to help when writing documentation for shortcodes.

## Shortcode usage

WSU Shortcode Documenter provides the `[shortcode_doc]` shortcode, which can help to document other shortcodes in the WordPress editor.

* `[shortcode_doc shortcode="my_shortcode"]`
	* Outputs: `[my_shortcode]`
* `[shortcode_doc shortcode="my_shortcode" atts="one" values="1"]`
	* Outputs: `[my_shortcode one="1"]`
* `[shortcode_doc shortcode="my_shortcode" atts="one,two,three" values="1,2,3"]`
	* Outputs: `[my_shortcode one="1" two="2" three="3"]`
* `[shortcode_doc shortcode="my_shortcode" atts="one" values="1"]<div>HTML content</div>[/shortcode_doc]`
	* Outputs: `[my_shortcode one="1"]<div>HTML content</div>[/my_shortcode]`

Output is wrapped inside `<code>` for each use of the shortcode. This allows for formatting while continuing to allow copy/paste of the documented shortcode into another instance of the WordPress editor.
