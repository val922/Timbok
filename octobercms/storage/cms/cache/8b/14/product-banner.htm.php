<?php 
class Cms5f518e0f839d9161729104_7439191eb8422912f396ece9900b1648Class extends Cms\Classes\PartialCode
{
public function onStart()
{    
    // Product Banner
    $indexProductBanner = $this->theme->index_product_banner;
    
    $this['indexProductBanner'] = \OFFLINE\Mall\Models\Product::find($indexProductBanner);
    
    // Product Countdown
    $this->addJs('assets/vendor/countdown/jquery.countdown.min.js');
}
}
