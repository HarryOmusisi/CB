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
class Statistics_Area extends Widget_Base {

    /**
     * Get widget name.
     * Retrieve button widget name.
     *
     * @since  1.0.0
     * @access public
     * @return string Widget name.
     */
    public function get_name() {
        return 'finbank_statistics_area';
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
        return esc_html__( 'Statistics Area', 'finbank' );
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
            'statistics_area',
            [
                'label' => esc_html__( 'Statistics Area', 'finbank' ),
            ]
        );
		$this->add_control(
			'pattern_image',
			[
				'label' => __( 'Pattern Image', 'finbank' ),
				'type' => Controls_Manager::MEDIA,
				'default' => ['url' => Utils::get_placeholder_image_src(),],
			]
		);
		$this->add_control(
			'image',
			[
				'label' => __( 'Image', 'finbank' ),
				'type' => Controls_Manager::MEDIA,
				'default' => ['url' => Utils::get_placeholder_image_src(),],
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
			'count_title',
			[
				'label'       => __( 'Count Title', 'finbank' ),
				'type'        => Controls_Manager::TEXT,
				'label_block' => true,
				'dynamic'     => [
					'active' => true,
				],
				'placeholder' => __( 'Enter your Count Title', 'finbank' ),
			]
		);
		$this->add_control(
			'counter_stop',
			[
				'label'       => __( 'Counter Stop Value', 'finbank' ),
				'type'        => Controls_Manager::TEXT,
				'label_block' => true,
				'dynamic'     => [
					'active' => true,
				],
				'placeholder' => __( 'Enter your Counter Stop Value', 'finbank' ),
			]
		);
		$this->add_control(
			'fg_color',
			[
				'label'       => __( 'Progress Bar Color', 'finbank' ),
				'type'        => Controls_Manager::COLOR,
				'dynamic'     => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'bg_color',
			[
				'label'       => __( 'Progress Bar Color', 'finbank' ),
				'type'        => Controls_Manager::COLOR,
				'dynamic'     => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'counter_stop2',
			[
				'label'       => __( 'Value', 'finbank' ),
				'type'        => Controls_Manager::TEXT,
				'label_block' => true,
				'dynamic'     => [
					'active' => true,
				],
				'placeholder' => __( 'Enter your Value', 'finbank' ),
			]
		);
		$this->add_control(
			'alphabet_letter',
			[
				'label'       => __( 'Alphabet Letter', 'finbank' ),
				'type'        => Controls_Manager::TEXT,
				'label_block' => true,
				'dynamic'     => [
					'active' => true,
				],
				'placeholder' => __( 'Enter your Alphabet Letter', 'finbank' ),
			]
		);
		$this->add_control(
			'count_title2',
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
			'text2',
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
				'placeholder' => __( 'Enter your Button Title', 'finbank' ),
			]
		);
		$this->add_control(
			'btn_link',
			[
				  'label' => __( 'Button Url', 'finbank' ),
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
	
    <!--Start Statistics Style2 Area-->
    <section class="statistics-style2-area">
        <?php if($settings['pattern_image']['id']) { ?>
        <div class="statistics-style2-area-shape1">
            <img src="<?php echo esc_url(wp_get_attachment_url($settings['pattern_image']['id'])); ?>" alt="<?php esc_attr_e('Awesome Image', 'finbank'); ?>">
        </div>
        <?php } ?>
        <?php if($settings['image']['id']) { ?>
        <div class="statistics-style2-area-bg" style="background-image: url(<?php echo esc_url(wp_get_attachment_url($settings['image']['id'])); ?>);"></div>
        <?php } ?>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-8">
                    <div class="statistics-content-box-style2">
                        <?php if($settings['title']) { ?>
                        <div class="sec-title">
                            <h2><?php echo wp_kses($settings['title'], true);?></h2>
                        </div>
                        <?php } ?>
                        <div class="progress-block">
                            <div class="inner-box">
                                <div class="graph-outer">
                                    <?php if($settings['counter_stop']) { ?>
                                    <input type="text" class="dial" data-fgColor="<?php echo esc_attr($settings['fg_color']);?>" data-bgColor="<?php echo esc_attr($settings['bg_color']);?>"
                                        data-width="140" data-height="140" data-linecap="normal" value="<?php echo esc_attr($settings['counter_stop']);?>">
                                    <?php } ?>
                                    <?php if($settings['count_title']) { ?>
                                    <div class="outer-text">
                                        <h3><?php echo wp_kses($settings['count_title'], true);?></h3>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="inner-text count-box">
                                <?php if($settings['counter_stop2']) { ?>
                                <div class="count-text-outer">
                                    <span class="count-text" data-stop="<?php echo esc_attr($settings['counter_stop2']);?>" data-speed="2000"></span><?php echo esc_attr($settings['alphabet_letter']);?>
                                </div>
                                <?php } ?>
                                <?php if($settings['count_title2']) { ?><h3><?php echo wp_kses($settings['count_title2'], true);?></h3><?php } ?>
                                <?php if($settings['text2']) { ?><p><?php echo wp_kses($settings['text2'], true);?></p><?php } ?>
                                <?php if($settings['btn_title']) { ?>
                                <div class="btn-box">
                                    <a href="<?php echo esc_url( $settings['btn_link']['url'] ); ?>"><span class="icon-right-arrow"></span><?php echo wp_kses( $settings['btn_title'], true ); ?></a>
                                </div>
                                <?php } ?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Statistics Style2 Area-->
        
        <?php
    }
}
