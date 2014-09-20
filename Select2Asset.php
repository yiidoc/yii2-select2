<?php

namespace yii\select2;
use yii\web\AssetBundle;
class Select2Asset extends AssetBundle {
    public $sourcePath = '@bower/select2';
    public $js = ['select2.js'];
    public $depends = ['yii\bootstrap\BootstrapAsset'];
}
