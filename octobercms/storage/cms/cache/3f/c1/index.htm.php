<?php 
class Cms5f518e0d4648c971989503_809d0056307fa8da486d22d7317e31c7Class extends Cms\Classes\PageCode
{
public function onInit()
{
    // Category Slider
    $category = $this->theme->index_slider_category;
    $this->page->components['sliderProducts']->setProperty('category', $category);
    $includeVariants = $this->theme->index_slider_category_variants;
    $this->page->components['sliderProducts']->setProperty('includeVariants', $includeVariants);
    $includeChildren = $this->theme->index_slider_category_children;
    $this->page->components['sliderProducts']->setProperty('includeChildren', $includeChildren);
    $perPage = $this->theme->index_slider_category_count;
    
    if (empty($perPage)) {
        $this->page->components['sliderProducts']->setProperty('perPage', 1);
    } else {
        $this->page->components['sliderProducts']->setProperty('perPage', $perPage);
    }
    
    $sort = $this->theme->index_slider_category_sort;
    $this->page->components['sliderProducts']->setProperty('sort', $sort);
    
    
    // Featured Products
    $perPageFeatured = $this->theme->index_featured_products;
    
    if (empty($perPageFeatured)) {
        $this->page->components['featuredProducts']->setProperty('perPage', 1);
    } else {
        $this->page->components['featuredProducts']->setProperty('perPage', $perPageFeatured);
    }
    
    
    // Latest Products
    $perPageLatest = $this->theme->index_latest_products;
    
    if (empty($perPageLatest)) {
        $this->page->components['latestProducts']->setProperty('perPage', 1);
    } else {
        $this->page->components['latestProducts']->setProperty('perPage', $perPageLatest);
    }
}
}
