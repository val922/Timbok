<?php 
class Cms5f51761902494971379009_1869e039df60991075a1e46453629490Class extends Cms\Classes\PartialCode
{
public function onStart()
{
    $this['categories'] = \OFFLINE\Mall\Models\Category::orderBy('created_at', 'DESC')->get();
}
}
