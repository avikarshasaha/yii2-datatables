<?php
namespace avikarsha\datatables;
use yii\web\AssetBundle;
class DataTablesAsset extends AssetBundle 
{
    public $sourcePath = '@bower/datatables'; 

    public $css = [
        //"//cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css",
        //"https://cdn.datatables.net/fixedheader/3.1.0/css/fixedHeader.dataTables.min.css"
    ];

    public $js = [
        "https://cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js",
        "https://cdn.datatables.net/fixedheader/3.1.0/js/dataTables.fixedHeader.min.js",
        "https://cdn.datatables.net/buttons/1.1.1/js/dataTables.buttons.min.js",
        "https://cdn.datatables.net/select/1.1.0/js/dataTables.select.min.js",
        "https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js",
        "https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js",
        "https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js",
        "https://cdn.datatables.net/buttons/1.1.1/js/buttons.html5.min.js"
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}