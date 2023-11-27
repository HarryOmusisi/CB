<?php namespace FINBANKPLUGIN\Element;

use Elementor\Controls_Manager;
use Elementor\Controls_Stack;
use Elementor\Group_Control_Typography;
use Elementor\Scheme_Typography;
use Elementor\Scheme_Color;
use Elementor\Group_Control_Border;
use Elementor\Repeater;
use Elementor\Widget_Base;
use Elementor\Utils;
use Elementor\Group_Control_Text_Shadow;
use Elementor\Plugin;

/**
 * Elementor button widget.
 * Elementor widget that displays a button with the ability to control every
 * aspect of the button design.
 *
 * @since 1.0.0
 */
class Credit_Card_V3 extends Widget_Base {

    /**
     * Get widget name.
     * Retrieve button widget name.
     *
     * @since  1.0.0
     * @access public
     * @return string Widget name.
     */
    public function get_name() {
        return 'finbank_credit_card_v3';
    }

    /**
     * Get widget title.
     * Retrieve button widget title.
     *
     * @since  1.0.0
     * @access public
     * @return string Widget title.
     */
    public function get_title() {
        return esc_html__( 'Credit Card V3', 'finbank' );
    }

    /**
     * Get widget icon.
     * Retrieve button widget icon.
     *
     * @since  1.0.0
     * @access public
     * @return string Widget icon.
     */
    public function get_icon() {
        return 'eicon-library-open';
    }

    /**
     * Get widget categories.
     * Retrieve the list of categories the button widget belongs to.
     * Used to determine where to display the widget in the editor.
     *
     * @since  2.0.0
     * @access public
     * @return array Widget categories.
     */
    public function get_categories() {
        return [ 'finbank' ];
    }

    /**
     * Register button widget controls.
     * Adds different input fields to allow the user to change and customize the widget settings.
     *
     * @since  1.0.0
     * @access protected
     */
    protected function register_controls() {
        $this->start_controls_section(
            'credit_card_v3',
            [
                'label' => esc_html__( 'Credit Card V3', 'finbank' ),
            ]
        );
		$this->add_control(
			'image',
			[
				'label' => __( 'Pattern Image', 'finbank' ),
				'type' => Controls_Manager::MEDIA,
				'default' => ['url' => Utils::get_placeholder_image_src(),],
			]
		);
		$this->add_control(
			'image2',
			[
				'label' => __( 'About Image', 'finbank' ),
				'type' => Controls_Manager::MEDIA,
				'default' => ['url' => Utils::get_placeholder_image_src(),],
			]
		);
		$this->add_control(
			'sub_title',
			[
				'label'       => __( 'Sub Title', 'finbank' ),
				'type'        => Controls_Manager::TEXT,
				'label_block' => true,
				'dynamic'     => [
					'active' => true,
				],
				'placeholder' => __( 'Enter your Sub Title', 'finbank' ),
			]
		);
		$this->add_control(
			'title',
			[
				'label'       => __( 'Title', 'finbank' ),
				'type'        => Controls_Manager::TEXT,
				'label_block' => true,
				'dynamic'     => [
					'active' => true,
				],
				'placeholder' => __( 'Enter your Title', 'finbank' ),
			]
		);
		$this->add_control(
			'text',
			[
				'label'       => __( 'Text', 'finbank' ),
				'type'        => Controls_Manager::TEXTAREA,
				'dynamic'     => [
					'active' => true,
				],
				'placeholder' => __( 'Enter your Text', 'finbank' ),
			]
		);
		$this->add_control(
			'btn_title',
			[
				'label'       => __( 'Button Title', 'finbank' ),
				'type'        => Controls_Manager::TEXT,
				'label_block' => true,
				'dynamic'     => [
					'active' => true,
				],
				'placeholder' => __( 'Enter your Title', 'finbank' ),
			]
		);
		$this->add_control(
			'btn_link',
			[
				  'label' => __( 'External Url', 'finbank' ),
				  'type' => Controls_Manager::URL,
				  'placeholder' => __( 'https://your-link.com', 'plugin-domain' ),
				  'show_external' => true,
				  'default' => [
				    'url' => '',
				    'is_external' => true,
				    'nofollow' => true,
				  ],
			 ]
		);
		$this->end_controls_section();
    }

    /**
     * Render button widget output on the frontend.
     * Written in PHP and used to generate the final HTML.
     *
     * @since  1.0.0
     * @access protected
     */
    protected function render() {
        $settings = $this->get_settings_for_display();
        $allowed_tags = wp_kses_allowed_html('post');
    ?>
	
    <!--Start Card Banner Area-->
    <section class="card-banner-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card-banner-content">
                        <?php if($settings['image']['id']){ ?>
                        <div class="card-banner-content-bg" style="background-image: url(<?php echo esc_url(wp_get_attachment_url($settings['image']['id'])); ?>);"></div>
                        <?php } ?>
                        <?php if($settings['image2']['id']){ ?>
                        <div class="card-banner-content-img-box">
                            <img src="<?php echo esc_url(wp_get_attachment_url($settings['image2']['id'])); ?>" alt="<?php esc_attr_e('Awesome Image', 'finbank'); ?>">
                        </div>
                        <?php } ?>
                        <div class="inner-title">
                            <?php if($settings['sub_title']) { ?><h4><?php echo wp_kses($settings['sub_title'], true);?></h4><?php } ?>
                            <?php if($settings['title']) { ?><h2><?php echo wp_kses($settings['title'], true);?></h2><?php } ?>
                        </div>
                        <?php if($settings['text']) { ?>
                        <div class="text">
                            <p><?php echo wp_kses($settings['text'], true);?></p>
                        </div>
                        <?php } ?>
                        <?php if($settings['btn_title']){ ?>
                        <div class="btns-box">
                            <a class="btn-one" href="<?php echo esc_url($settings['btn_link']['url']); ?>">
                                <span class="txt"><?php echo wp_kses($settings['btn_title'], true);?></span>
                            </a>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Card Banner Area-->
        
        <?php
    }
}
