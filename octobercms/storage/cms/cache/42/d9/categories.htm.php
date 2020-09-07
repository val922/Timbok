<?php 
class Cms5f5180ec70efa046899111_00db539d6fce2ecd15de9c9ceb5ce740Class extends Cms\Classes\PageCode
{
public function onStart()
{
    $this['categories'] = \OFFLINE\Mall\Models\Category::with('products')->get();
}
}
