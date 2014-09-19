<?php

namespace yii\select2;

class Select2BootstrapAsset extends yii\web\AssetBundle {

    public $sourcePath = '@bower/select2';
    public $css = ['select2-bootstrap.css'];
    public $depends = ['yii\bootstrap\BootstrapAsset'];

}
