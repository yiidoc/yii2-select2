<?php

namespace yii\select2;

use yii\web\AssetBundle;

class Select2BootstrapAsset extends AssetBundle {

    public $sourcePath = '@bower/select2-bootstrap-css-bootstrap3';
    public $css = ['dist/css/select2-bootstrap.css'];
    public $depends = ['yii\bootstrap\BootstrapAsset'];

}
