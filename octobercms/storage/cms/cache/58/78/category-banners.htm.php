<?php 
class Cms5f518e0dea6e2387976775_0e17dbb1baea59992f430aa17dbea407Class extends Cms\Classes\PartialCode
{
public function onStart()
{
    // Category Banners
    $indexCategoryBanners = $this->theme->index_category_banners;
    
    if (empty($indexCategoryBanners) || !is_array($indexCategoryBanners)) {
        $indexCategoryBanners = [];
    } else {
        $indexCategoryBanners = array_column($indexCategoryBanners, 'index_category_banner');
    }
    
    $this['indexCategoryBanners'] = $indexCategoryBanners;
    
    // Sorted Category Banners
    $categoryBanners = $indexCategoryBanners;
    $categoryBanners = \OFFLINE\Mall\Models\Category::whereIn('id', $categoryBanners)->get();
    $sortedCategoryBanners = $categoryBanners
        ->sortBy(function ($item) use ($indexCategoryBanners) {
            return array_search($item->id, $indexCategoryBanners);
        });
    
    $this['sortedCategoryBanners'] = $sortedCategoryBanners;
}
}
