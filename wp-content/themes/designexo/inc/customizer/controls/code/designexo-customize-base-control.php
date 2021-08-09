<?php
/**
 * Customize Base control class. 
 *
 * @package designexo
 *
 * @see     WP_Customize_Control
 * @access  public 
 */

/**
 * Class Designexo_Customize_Base_Control
 */
class Designexo_Customize_Base_Control extends WP_Customize_Control {

	/**
	 * Enqueue scripts all controls.
	 */
	public function enqueue() {

		// Color picker alpha.
		wp_enqueue_script( 'wp-color-picker-alpha', DESIGNEXO_PARENT_INC_URI . '/customizer/controls/js/wp-color-picker-alpha.js', array( 'wp-color-picker' ), '2.1.3', true );
		
		$color_picker_strings = array(
			'clear'            => __( 'Clear', 'designexo' ),
			'clearAriaLabel'   => __( 'Clear color', 'designexo' ),
			'defaultString'    => __( 'Default', 'designexo' ),
			'defaultAriaLabel' => __( 'Select default color', 'designexo' ),
			'pick'             => __( 'Select Color', 'designexo' ),
			'defaultLabel'     => __( 'Color value', 'designexo' ),
		);
		wp_localize_script( 'wp-color-picker-alpha', 'wpColorPickerL10n', $color_picker_strings );
		wp_enqueue_script( 'wp-color-picker-alpha' );

		// Scripts for nesting panel/section.
		wp_enqueue_script( 'designexo-extend-customizer', DESIGNEXO_PARENT_INC_URI . '/customizer/assets/js/extend-customizer.js', array( 'jquery' ), false, true );
		wp_enqueue_style( 'designexo-extend-customizer', DESIGNEXO_PARENT_INC_URI . '/customizer/assets/css/extend-customizer.css' );

		// Main scripts.
		wp_enqueue_script(
			'designexo-controls',
			DESIGNEXO_PARENT_INC_URI . '/customizer/controls/js/controls.js',
			array(
				'jquery',
				'customize-base',
				'wp-color-picker-alpha',
			),
			false,
			true
		);

		wp_enqueue_style( 'designexo-controls', DESIGNEXO_PARENT_INC_URI . '/customizer/controls/css/controls.css' );

	}


	/**
	 * Refresh the parameters passed to the JavaScript via JSON.
	 *
	 * @see    WP_Customize_Control::to_json()
	 * @access public
	 * @return void
	 */
	public function to_json() {

		parent::to_json();

		$this->json['default'] = $this->setting->default;
		if ( isset( $this->default ) ) {
			$this->json['default'] = $this->default;
		}

		$this->json['id']      = $this->id;
		$this->json['value']   = $this->value();
		$this->json['choices'] = $this->choices;
		$this->json['link']    = $this->get_link();
		$this->json['l10n']    = $this->l10n();

		$this->json['inputAttrs'] = '';
		foreach ( $this->input_attrs as $attr => $value ) {
			$this->json['inputAttrs'] .= $attr . '="' . esc_attr( $value ) . '" ';
		}

	}

	/**
	 * Render content is still called, so be sure to override it with an empty function in your subclass as well.
	 */
	protected function render_content() {
	}

	/**
	 * Renders the Underscore template for this control.
	 *
	 * @see    WP_Customize_Control::print_template()
	 * @access protected
	 * @return void
	 */
	protected function content_template() {
	}

	/**
	 * Returns an array of translation strings.
	 *
	 * @access protected
	 * @return array
	 */
	protected function l10n() {
		return array();
	}

}
