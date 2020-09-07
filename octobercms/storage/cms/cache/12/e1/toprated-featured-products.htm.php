<?php 
class Cms5f518e103e591250903368_1c28844075df48bf1ef5942e413715d5Class extends Cms\Classes\PartialCode
{
public function onStart()
{
    // Latest - Bestseller Category Banner
    $indexTopfeaturedBanner = $this->theme->index_topfeatured_banner;
    
    $this['indexTopfeaturedBanner'] = \OFFLINE\Mall\Models\Category::find($indexTopfeaturedBanner);
}
}
