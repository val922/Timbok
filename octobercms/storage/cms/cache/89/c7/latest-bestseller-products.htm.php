<?php 
class Cms5f518e0e309d0093926652_dad9cfb05cd32db4d2c9564492b8b48eClass extends Cms\Classes\PartialCode
{
public function onStart()
{
    // Latest - Bestseller Category Banner
    $indexLatestbestBanner = $this->theme->index_latestbest_banner;
    
    $this['indexLatestbestBanner'] = \OFFLINE\Mall\Models\Category::find($indexLatestbestBanner);
}
}
