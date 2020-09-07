<?php 
class Cms5f518e0da9fb7430175051_ba1af02180190a3b81763797056af1c2Class extends Cms\Classes\PartialCode
{
public function onStart()
{
    // Slider Products
    $indexSliderProducts = $this->theme->index_slider_products;
    
    if (empty($indexSliderProducts) || !is_array($indexSliderProducts)) {
        $indexSliderProducts = [];
    } else {
        $indexSliderProducts = array_column($indexSliderProducts, 'index_slider_product');
    }
    
    $this['indexSliderProducts'] = $indexSliderProducts;
    
    // Sorted Slider Products
    $sliderProducts = $indexSliderProducts;
    $sliderProducts = \OFFLINE\Mall\Models\Product::whereIn('id', $sliderProducts)->get();
    $sortedSliderProducts = $sliderProducts
        ->sortBy(function ($item) use ($indexSliderProducts) {
            return array_search($item->id, $indexSliderProducts);
        });
    
    $this['sortedSliderProducts'] = $sortedSliderProducts;
}
}
