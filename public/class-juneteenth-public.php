<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Juneteenth
 * @subpackage Juneteenth/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Juneteenth
 * @subpackage Juneteenth/public
 * @author     Your Name <email@example.com>
 */
class Juneteenth_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $juneteenth    The ID of this plugin.
	 */
	private $juneteenth;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $juneteenth       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $juneteenth, $version ) {

		$this->juneteenth = $juneteenth;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Juneteenth_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Juneteenth_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->juneteenth, plugin_dir_url( __FILE__ ) . 'css/juneteenth-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Juneteenth_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Juneteenth_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->juneteenth, plugin_dir_url( __FILE__ ) . 'js/juneteenth-public.js', array(), $this->version, false );

	}

	/**
	 * Add modal markup to bottom of the page.
	 *
	 * @since		 1.0.0
	 */
	public function its_juneteenth_div() {

		ob_start();
		?>
		<div class="juneteenth-wrapper">
			<button class="juneteenth-btn" data-micromodal-trigger="juneteenth">Juneteenth</button>
			<div class="juneteenth-modal micromodal-slide" id="juneteenth" aria-hidden="true">
				<div class="juneteenth-modal__overlay" tabindex="-1" data-micromodal-close>
					<div class="juneteenth-modal__container" role="dialog" aria-modal="true" aria-labelledby="juneteenth-title">
						<header class="juneteenth-modal__header">
							<button class="juneteenth-modal__close" aria-label="Close modal" data-micromodal-close></button>
						</header>
						<main class="juneteenth-modal__content" id="juneteenth-content">
							<svg class="juneteenth__heading" id="juneteenth-title" viewBox="0 0 93 18">
								<defs>
									<linearGradient id="filler">
										<stop stop-color="#A00320" offset="0%"></stop>
										<stop stop-color="#A00320" offset="30%"></stop>
										<stop stop-color="#FEC601" offset="35%"></stop>
										<stop stop-color="#FEC601" offset="60%"></stop>
										<stop stop-color="#579735" offset="65%"></stop>
										<stop stop-color="#579735" offset="100%"></stop>
									</linearGradient>
								</defs>
								<text x="0" y="15"><?php echo __('Juneteenth', 'juneteenth'); ?></text>
							</svg>
							<p style="text-align:center;"><a href="https://nmaahc.si.edu/blog-post/celebrating-juneteenth" target="_blank" rel="noopener" class="juneteenth__learn-more"><?php echo __('Learn More About This Day', 'juneteenth'); ?></a></p>
							<svg class="juneteenth__subheading" viewBox="0 0 222 20">
								<text x="0" y="15"><?php echo __('Black Lives Matter Everyday', 'juneteenth'); ?></text>
							</svg>
						</main>
					</div>
				</div>
			</div>
		</div>
		<?php
		$output = ob_get_clean();
		echo $output;

	}

}
