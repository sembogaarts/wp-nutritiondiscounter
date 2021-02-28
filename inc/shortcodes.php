<?php

class SB_NDS_SHORTCODES
{

    public function attach()
    {
        add_shortcode('nds', array($this, 'pricing'));
    }

    public function pricing($attrs = [])
    {
        // No ID Found
        if (!$attrs['id']) {
            echo "wow";
            return;
        }

        $res = file_get_contents(ENDPOINT . $attrs['id']);

        // API Unavailable
        if (!$res) {
            return;
        }

        $product = json_decode($res);

        ob_start();

        include(plugin_dir_path(__DIR__) . "templates/product.php");

        return ob_get_clean();

    }

}

