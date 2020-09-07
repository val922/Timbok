<?php 
class Cms5f518e0ef4123645728168_9c41ede210969b637219f3ea2a27e4eeClass extends Cms\Classes\PartialCode
{
public function onStart()
{
    $this['brands'] = \OFFLINE\Mall\Models\Brand::with('products')->get();
}
}
