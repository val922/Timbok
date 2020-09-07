<?php 
class Cms5f53cae4e4216608494863_11987a41fa6db9310d8e3c236dcd3cceClass extends Cms\Classes\PageCode
{
/*function onInit()
{
    $user = Auth::getUser();
    if($user){
        $component = $this->addComponent(
            'Responsiv\Uploader\Components\ImageUploader',
            'imageUploader',
            ['modelClass'=>'OFFLINE\Mall\Models\User','modelKeyColumn'=>'avatar', 'deferredBinding' => false]
        );

        $component->bindModel('avatar', $user);
    }
}*/
public function onInit()
{
    $user = Auth::getUser();
    if($user){
        $this->imageUploader->bindModel('avatar', $user);
    }
}
}
