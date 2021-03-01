<div class="nds-product">

    <div class="nds-product__header">
        <p>
            <?php echo $product->name; ?>
            <span class="nds-product__header-rating">
                        <?php for ($x = 0; ceil($product->rating) > $x; $x++): ?>
                            <i class="fa fa-star"></i>
                        <?php endfor; ?>
                <?php echo count($product->reviews); ?> reviews
                    </span>
        </p>
    </div>

    <table class="nds-product__table">
        <?php foreach ($product->prices as $price): ?>
            <tr>
                <td>
                    <a target="_blank" href="<?php echo $price->url; ?>">
                        <?php echo $price->shop->name; ?>
                    </a>
                </td>
                <td>
                    <p><?php echo $price->shop->coupon ?></p>
                </td>
                <td>
                    <p>&euro; <?php echo number_format($price->price, 2, ',', '.'); ?></p>
                </td>
                <td>
                    <a class="nds-product__action" target="_blank" href="<?php echo $price->url; ?>">Bekijk</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    <div class="nds-product__footer">
        <img src="<?php echo plugin_dir_url(__DIR__); ?>imgs/logo-nutrition-discounter.png" alt="">
        <p>Actuele prijzen via <a target="_blank"
                                  href="<?php echo $product->url; ?>?ref=<?php echo get_site_url(); ?>">Nutrition
                Discounter</a></p>
    </div>
</div>
