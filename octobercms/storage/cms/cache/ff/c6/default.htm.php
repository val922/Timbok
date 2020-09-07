<?php 
class Cms5f51761940242550882256_97f021607a8d61e8554167eba277e4a3Class extends Cms\Classes\PartialCode
{
public function onStart()
{
    $this['brands'] = \OFFLINE\Mall\Models\Brand::with('products')->get();
}
}
