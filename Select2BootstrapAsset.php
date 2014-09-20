<?php

namespace yii\select2;
use yii\web\AssetBundle;
class Select2BootstrapAsset extends AssetBundle {

    public $sourcePath = '@bower/select2-bootstrap-css';
    public $css = ['select2-bootstrap.css'];
    public $depends = ['yii\bootstrap\BootstrapAsset'];

}
