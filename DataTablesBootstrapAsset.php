<?php
namespace avikarsha\datatables;
use yii\web\AssetBundle;
class DataTablesBootstrapAsset extends AssetBundle 
{
    public $sourcePath = '@bower/datatables-bootstrap3'; 

    public $css = [
    ];

    public $js = [
        "BS3/assets/js/datatables.js",
    ];

    public $depends = [
        'yii\web\JqueryAsset',
        'avikarsha\datatables\DataTablesAsset',
    ];
}