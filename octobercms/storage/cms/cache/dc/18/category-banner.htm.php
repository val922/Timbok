<?php 
class Cms5f518e0f1b2a6816327148_e5eac6482306edb03408ff7c4edf1e25Class extends Cms\Classes\PartialCode
{
public function onStart()
{
    // Category Banner Parallax
    $indexCategoryBanner = $this->theme->index_category_banner;
    
    $this['indexCategoryBanner'] = \OFFLINE\Mall\Models\Category::find($indexCategoryBanner);
    
    // Product Countdown
    $this->addJs('assets/vendor/countdown/jquery.countdown.min.js');
}
}
