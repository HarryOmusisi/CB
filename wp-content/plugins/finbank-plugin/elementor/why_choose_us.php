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
class Why_Choose_Us extends Widget_Base {

    /**
     * Get widget name.
     * Retrieve button widget name.
     *
     * @since  1.0.0
     * @access public
     * @return string Widget name.
     */
    public function get_name() {
        return 'finbank_why_choose_us';
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
        return esc_html__( 'Why Choose Us', 'finbank' );
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
            'why_choose_us',
            [
                'label' => esc_html__( 'Why Choose Us', 'finbank' ),
            ]
        );
		$this->add_control(
		    'features', 
		    [
				'type' => Controls_Manager::REPEATER,
				'separator' => 'before',
				'default' => 
					[
						['block_title' => esc_html__('Community', 'finbank')],
						['block_title' => esc_html__('Commitment', 'finbank')],
						['block_title' => esc_html__('Consistency', 'finbank')]
					],
				'fields' => 
				[
					[
						'name' => 'icons',
						'label' => esc_html__('Enter The icons', 'finbank'),
						'label_block' => true,
						'type' => Controls_Manager::SELECT2,
						'options'  => get_fontawesome_icons(),
					],
					[
						'name' => 'block_title',
						'label' => esc_html__('Title', 'finbank'),
						'label_block' => true,
						'type' => Controls_Manager::TEXT,
						'default' => esc_html__('', 'finbank')
					],
					[
						'name' => 'block_text',
						'label' => esc_html__('Text', 'finbank'),
						'label_block' => true,
						'type' => Controls_Manager::TEXTAREA,
						'default' => esc_html__('', 'finbank')
					],
				],
				'title_field' => '{{block_title}}',
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
	
    <!--Start Choose Style1 Area-->
    <section class="choose-style1-area">
        <div class="container">
            <ul class="row choose-style1__content">
				<?php $i=1; foreach($settings['features'] as $key => $item): ?>
                <!--Start Single Choose Style1-->
                <li class="col-xl-4 col-lg-4 single-choose-style1-colum text-center">
                    <div class="single-choose-style1">
                        <div class="icon">
                            <?php if($item['icons']){ ?>
                            <div class="icon-inner">
                                <span class="<?php echo wp_kses(str_replace( "icon ",  "", $item['icons']), true);?>"></span>
                            </div>
                            <?php } ?>
                            <div class="counting"><?php echo wp_kses(sprintf('%02d', $i), true); ?></div>
                        </div>
                        <div class="text">
                            <h3><?php echo wp_kses($item['block_title'], true);?></h3>
                            <p><?php echo wp_kses($item['block_text'], true);?></p>
                        </div>
                    </div>
                </li>
                <!--End Single Choose Style1-->
				<?php $i++; endforeach; ?>
            </ul>
        </div>
    </section>
    <!--End Choose Style1 Area-->        
                         
        <?php
    }
}
