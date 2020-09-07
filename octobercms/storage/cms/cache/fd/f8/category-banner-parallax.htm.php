<?php 
class Cms5f518e0e21fc5369742502_0fe065217d5defd21028bd7c10fee64dClass extends Cms\Classes\PartialCode
{
public function onStart()
{
    // Category Banner Parallax
    $indexCategoryBannerParallax = $this->theme->index_category_banner_parallax;
    
    $this['indexCategoryBannerParallax'] = \OFFLINE\Mall\Models\Category::find($indexCategoryBannerParallax);
}
}
