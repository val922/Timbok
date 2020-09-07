<?php 
class Cms5f518e0e11f25493378583_5be71aaa01ddc09f2e724496c77de6ffClass extends Cms\Classes\PartialCode
{
public function onStart()
{
    // Categories
    $indexCategories = $this->theme->index_categories;
    
    if (empty($indexCategories) || !is_array($indexCategories)) {
        $indexCategories = [];
    } else {
        $indexCategories = array_column($indexCategories, 'index_category');
    }
    
    $this['indexCategories'] = $indexCategories;
    
    $categories = $indexCategories;
    $categories = \OFFLINE\Mall\Models\Category::whereIn('id', $categories)->get();
    $sortedCategories = $categories
        ->sortBy(function ($item) use ($indexCategories) {
            return array_search($item->id, $indexCategories);
        });
    
    $this['sortedCategories'] = $sortedCategories;
}
}
