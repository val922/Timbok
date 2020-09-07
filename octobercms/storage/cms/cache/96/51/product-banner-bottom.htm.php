<?php 
class Cms5f51761671bad141771983_20afa25cdab48dc166d8ef8d8031d70fClass extends Cms\Classes\PartialCode
{
public function onStart()
{    
    // Product Banner
    $shopProductBanner = $this->theme->shop_product_banner;
    
    $this['shopProductBanner'] = \OFFLINE\Mall\Models\Product::find($shopProductBanner);
}
}
