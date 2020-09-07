<?php 
use OFFLINE\Mall\Models\Category;class Cms5f51761322bbc080510636_d3a0bf4bfd428eb76f9dbd0a59df4570Class extends Cms\Classes\PageCode
{

public function onStart() {
    // Breadcrumbs
    $controller = new Cms\Classes\Controller;
    $product    = $this['product']->product;
    $variant    = $this['product']->variant;
    $category   = $product->categories->first();

    // Get all parent categories of this product.
    $breadcrumbs = $category->getParentsAndSelf()->map(function($category) use ($controller) {
        return ['link' => $controller->pageUrl('category', ['slug' => $category->nested_slug]), 'text' => $category->name];
    });

    // Add the product itself to the breadcrumbs.
    $breadcrumbs[] = [
        'link' => $controller->pageUrl('product', ['slug' => $product->slug, 'variant' => optional($variant)->hashId]),
        'text' => $product->name
    ];

    $this['breadcrumbs'] = $breadcrumbs;



    // Related Products
    
    // Fetch the category from the product component.
    $productComponent = $this->findComponentByName('product');
    $item = optional($productComponent)->item;
    if (!$item) {
        return;
    }
    $category = optional($item->categories)->first();
    if (!$category) {
        return;
    }
    // If a category is available, use it for the products component.
    $this->findComponentByName('relatedProducts')->category = $category;
    
    //if ($category) {
        // If a category is available, use it for the products component.
    //    $this->page->components['relatedProducts']->category = $category;
    //}
}
}
