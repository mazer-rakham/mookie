<?php
/**
 * Internationalization helper.
 *
 * @package     Kirki
 * @category    Core
 * @author      Aristeides Stathopoulos
 * @copyright   Copyright (c) 2016, Aristeides Stathopoulos
 * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
 * @since       1.0
 */

if ( ! class_exists( 'Kirki_l10n' ) ) {

	/**
	 * Handles translations
	 */
	class Kirki_l10n {

		/**
		 * The plugin textdomain
		 *
		 * @access protected
		 * @var string
		 */
		protected $textdomain = 'shop-and-commerce';

		/**
		 * The class constructor.
		 * Adds actions & filters to handle the rest of the methods.
		 *
		 * @access public
		 */
		public function __construct() {

			add_action( 'plugins_loaded', array( $this, 'load_textdomain' ) );

		}

		/**
		 * Load the plugin textdomain
		 *
		 * @access public
		 */
		public function load_textdomain() {

			if ( null !== $this->get_path() ) {
				load_textdomain( $this->textdomain, $this->get_path() );
			}
			load_plugin_textdomain( $this->textdomain, false, Kirki::$path . '/languages' );

		}

		/**
		 * Gets the path to a translation file.
		 *
		 * @access protected
		 * @return string Absolute path to the translation file.
		 */
		protected function get_path() {
			$path_found = false;
			$found_path = null;
			foreach ( $this->get_paths() as $path ) {
				if ( $path_found ) {
					continue;
				}
				$path = wp_normalize_path( $path );
				if ( file_exists( $path ) ) {
					$path_found = true;
					$found_path = $path;
				}
			}

			return $found_path;

		}

		/**
		 * Returns an array of paths where translation files may be located.
		 *
		 * @access protected
		 * @return array
		 */
		protected function get_paths() {

			return array(
				WP_LANG_DIR . '/' . $this->textdomain . '-' . get_locale() . '.mo',
				Kirki::$path . '/languages/' . $this->textdomain . '-' . get_locale() . '.mo',
			);

		}

		/**
		 * Shortcut method to get the translation strings
		 *
		 * @static
		 * @access public
		 * @param string $config_id The config ID. See Kirki_Config.
		 * @return array
		 */
		public static function get_strings( $config_id = 'global' ) {

			$translation_strings = array(
				'background-color'      => esc_attr__( 'Background Color', 'shop-and-commerce' ),
				'background-image'      => esc_attr__( 'Background Image', 'shop-and-commerce' ),
				'no-repeat'             => esc_attr__( 'No Repeat', 'shop-and-commerce' ),
				'repeat-all'            => esc_attr__( 'Repeat All', 'shop-and-commerce' ),
				'repeat-x'              => esc_attr__( 'Repeat Horizontally', 'shop-and-commerce' ),
				'repeat-y'              => esc_attr__( 'Repeat Vertically', 'shop-and-commerce' ),
				'inherit'               => esc_attr__( 'Inherit', 'shop-and-commerce' ),
				'background-repeat'     => esc_attr__( 'Background Repeat', 'shop-and-commerce' ),
				'cover'                 => esc_attr__( 'Cover', 'shop-and-commerce' ),
				'contain'               => esc_attr__( 'Contain', 'shop-and-commerce' ),
				'background-size'       => esc_attr__( 'Background Size', 'shop-and-commerce' ),
				'fixed'                 => esc_attr__( 'Fixed', 'shop-and-commerce' ),
				'scroll'                => esc_attr__( 'Scroll', 'shop-and-commerce' ),
				'background-attachment' => esc_attr__( 'Background Attachment', 'shop-and-commerce' ),
				'left-top'              => esc_attr__( 'Left Top', 'shop-and-commerce' ),
				'left-center'           => esc_attr__( 'Left Center', 'shop-and-commerce' ),
				'left-bottom'           => esc_attr__( 'Left Bottom', 'shop-and-commerce' ),
				'right-top'             => esc_attr__( 'Right Top', 'shop-and-commerce' ),
				'right-center'          => esc_attr__( 'Right Center', 'shop-and-commerce' ),
				'right-bottom'          => esc_attr__( 'Right Bottom', 'shop-and-commerce' ),
				'center-top'            => esc_attr__( 'Center Top', 'shop-and-commerce' ),
				'center-center'         => esc_attr__( 'Center Center', 'shop-and-commerce' ),
				'center-bottom'         => esc_attr__( 'Center Bottom', 'shop-and-commerce' ),
				'background-position'   => esc_attr__( 'Background Position', 'shop-and-commerce' ),
				'background-opacity'    => esc_attr__( 'Background Opacity', 'shop-and-commerce' ),
				'on'                    => esc_attr__( 'ON', 'shop-and-commerce' ),
				'off'                   => esc_attr__( 'OFF', 'shop-and-commerce' ),
				'all'                   => esc_attr__( 'All', 'shop-and-commerce' ),
				'cyrillic'              => esc_attr__( 'Cyrillic', 'shop-and-commerce' ),
				'cyrillic-ext'          => esc_attr__( 'Cyrillic Extended', 'shop-and-commerce' ),
				'devanagari'            => esc_attr__( 'Devanagari', 'shop-and-commerce' ),
				'greek'                 => esc_attr__( 'Greek', 'shop-and-commerce' ),
				'greek-ext'             => esc_attr__( 'Greek Extended', 'shop-and-commerce' ),
				'khmer'                 => esc_attr__( 'Khmer', 'shop-and-commerce' ),
				'latin'                 => esc_attr__( 'Latin', 'shop-and-commerce' ),
				'latin-ext'             => esc_attr__( 'Latin Extended', 'shop-and-commerce' ),
				'vietnamese'            => esc_attr__( 'Vietnamese', 'shop-and-commerce' ),
				'hebrew'                => esc_attr__( 'Hebrew', 'shop-and-commerce' ),
				'arabic'                => esc_attr__( 'Arabic', 'shop-and-commerce' ),
				'bengali'               => esc_attr__( 'Bengali', 'shop-and-commerce' ),
				'gujarati'              => esc_attr__( 'Gujarati', 'shop-and-commerce' ),
				'tamil'                 => esc_attr__( 'Tamil', 'shop-and-commerce' ),
				'telugu'                => esc_attr__( 'Telugu', 'shop-and-commerce' ),
				'thai'                  => esc_attr__( 'Thai', 'shop-and-commerce' ),
				'serif'                 => _x( 'Serif', 'font style', 'shop-and-commerce' ),
				'sans-serif'            => _x( 'Sans Serif', 'font style', 'shop-and-commerce' ),
				'monospace'             => _x( 'Monospace', 'font style', 'shop-and-commerce' ),
				'font-family'           => esc_attr__( 'Font Family', 'shop-and-commerce' ),
				'font-size'             => esc_attr__( 'Font Size', 'shop-and-commerce' ),
				'font-weight'           => esc_attr__( 'Font Weight', 'shop-and-commerce' ),
				'line-height'           => esc_attr__( 'Line Height', 'shop-and-commerce' ),
				'font-style'            => esc_attr__( 'Font Style', 'shop-and-commerce' ),
				'letter-spacing'        => esc_attr__( 'Letter Spacing', 'shop-and-commerce' ),
				'top'                   => esc_attr__( 'Top', 'shop-and-commerce' ),
				'bottom'                => esc_attr__( 'Bottom', 'shop-and-commerce' ),
				'left'                  => esc_attr__( 'Left', 'shop-and-commerce' ),
				'right'                 => esc_attr__( 'Right', 'shop-and-commerce' ),
				'center'                => esc_attr__( 'Center', 'shop-and-commerce' ),
				'justify'               => esc_attr__( 'Justify', 'shop-and-commerce' ),
				'color'                 => esc_attr__( 'Color', 'shop-and-commerce' ),
				'add-image'             => esc_attr__( 'Add Image', 'shop-and-commerce' ),
				'change-image'          => esc_attr__( 'Change Image', 'shop-and-commerce' ),
				'no-image-selected'     => esc_attr__( 'No Image Selected', 'shop-and-commerce' ),
				'add-file'              => esc_attr__( 'Add File', 'shop-and-commerce' ),
				'change-file'           => esc_attr__( 'Change File', 'shop-and-commerce' ),
				'no-file-selected'      => esc_attr__( 'No File Selected', 'shop-and-commerce' ),
				'remove'                => esc_attr__( 'Remove', 'shop-and-commerce' ),
				'select-font-family'    => esc_attr__( 'Select a font-family', 'shop-and-commerce' ),
				'variant'               => esc_attr__( 'Variant', 'shop-and-commerce' ),
				'subsets'               => esc_attr__( 'Subset', 'shop-and-commerce' ),
				'size'                  => esc_attr__( 'Size', 'shop-and-commerce' ),
				'height'                => esc_attr__( 'Height', 'shop-and-commerce' ),
				'spacing'               => esc_attr__( 'Spacing', 'shop-and-commerce' ),
				'ultra-light'           => esc_attr__( 'Ultra-Light 100', 'shop-and-commerce' ),
				'ultra-light-italic'    => esc_attr__( 'Ultra-Light 100 Italic', 'shop-and-commerce' ),
				'light'                 => esc_attr__( 'Light 200', 'shop-and-commerce' ),
				'light-italic'          => esc_attr__( 'Light 200 Italic', 'shop-and-commerce' ),
				'book'                  => esc_attr__( 'Book 300', 'shop-and-commerce' ),
				'book-italic'           => esc_attr__( 'Book 300 Italic', 'shop-and-commerce' ),
				'regular'               => esc_attr__( 'Normal 400', 'shop-and-commerce' ),
				'italic'                => esc_attr__( 'Normal 400 Italic', 'shop-and-commerce' ),
				'medium'                => esc_attr__( 'Medium 500', 'shop-and-commerce' ),
				'medium-italic'         => esc_attr__( 'Medium 500 Italic', 'shop-and-commerce' ),
				'semi-bold'             => esc_attr__( 'Semi-Bold 600', 'shop-and-commerce' ),
				'semi-bold-italic'      => esc_attr__( 'Semi-Bold 600 Italic', 'shop-and-commerce' ),
				'bold'                  => esc_attr__( 'Bold 700', 'shop-and-commerce' ),
				'bold-italic'           => esc_attr__( 'Bold 700 Italic', 'shop-and-commerce' ),
				'extra-bold'            => esc_attr__( 'Extra-Bold 800', 'shop-and-commerce' ),
				'extra-bold-italic'     => esc_attr__( 'Extra-Bold 800 Italic', 'shop-and-commerce' ),
				'ultra-bold'            => esc_attr__( 'Ultra-Bold 900', 'shop-and-commerce' ),
				'ultra-bold-italic'     => esc_attr__( 'Ultra-Bold 900 Italic', 'shop-and-commerce' ),
				'invalid-value'         => esc_attr__( 'Invalid Value', 'shop-and-commerce' ),
				'add-new'           	=> esc_attr__( 'Add new', 'shop-and-commerce' ),
				'row'           		=> esc_attr__( 'row', 'shop-and-commerce' ),
				'limit-rows'            => esc_attr__( 'Limit: %s rows', 'shop-and-commerce' ),
				'open-section'          => esc_attr__( 'Press return or enter to open this section', 'shop-and-commerce' ),
				'back'                  => esc_attr__( 'Back', 'shop-and-commerce' ),
				'reset-with-icon'       => sprintf( esc_attr__( '%s Reset', 'shop-and-commerce' ), '<span class="dashicons dashicons-image-rotate"></span>' ),
				'text-align'            => esc_attr__( 'Text Align', 'shop-and-commerce' ),
				'text-transform'        => esc_attr__( 'Text Transform', 'shop-and-commerce' ),
				'none'                  => esc_attr__( 'None', 'shop-and-commerce' ),
				'capitalize'            => esc_attr__( 'Capitalize', 'shop-and-commerce' ),
				'uppercase'             => esc_attr__( 'Uppercase', 'shop-and-commerce' ),
				'lowercase'             => esc_attr__( 'Lowercase', 'shop-and-commerce' ),
				'initial'               => esc_attr__( 'Initial', 'shop-and-commerce' ),
				'select-page'           => esc_attr__( 'Select a Page', 'shop-and-commerce' ),
				'open-editor'           => esc_attr__( 'Open Editor', 'shop-and-commerce' ),
				'close-editor'          => esc_attr__( 'Close Editor', 'shop-and-commerce' ),
				'switch-editor'         => esc_attr__( 'Switch Editor', 'shop-and-commerce' ),
				'hex-value'             => esc_attr__( 'Hex Value', 'shop-and-commerce' ),
			);

			// Apply global changes from the kirki/config filter.
			// This is generally to be avoided.
			// It is ONLY provided here for backwards-compatibility reasons.
			// Please use the kirki/{$config_id}/l10n filter instead.
			$config = apply_filters( 'kirki/config', array() );
			if ( isset( $config['i18n'] ) ) {
				$translation_strings = wp_parse_args( $config['i18n'], $translation_strings );
			}

			// Apply l10n changes using the kirki/{$config_id}/l10n filter.
			return apply_filters( 'kirki/' . $config_id . '/l10n', $translation_strings );

		}
	}
}
