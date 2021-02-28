<?php

/**
 * Nutrition Discounter
 *
 * @package           NutritionDiscounter
 * @author            Sem Bogaarts
 * @copyright         2021 Let's Deploy
 * @license           GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       Nutrition Discounter
 * Description:       Connects with the Nutrition Discounter API and fetches current prices.
 * Version:           1.0.0
 * Author:            Sem Bogaarts
 */

require "inc/constants.php";
require "inc/shortcodes.php";

class SB_NDS
{

    private static $_instance = null;

    public function __construct()
    {
        $this->add_shortcodes();
        $this->add_styles();
    }

    public function add_shortcodes()
    {
        $shortcodes = new SB_NDS_SHORTCODES();
        $shortcodes->attach();
    }

    public function add_styles()
    {
        wp_enqueue_style(
            'sb_nds',
            plugin_dir_url(__FILE__) . 'css/nutrition-discounter.css',
            false,
            '1.0'
        );
    }

    public static function get_instance()
    {
        if (self::$_instance == null) {
            self::$_instance = new SB_NDS();
        }
        return self::$_instance;
    }

}

/**
 * Start the script
 */
$sb_nds = SB_NDS::get_instance();