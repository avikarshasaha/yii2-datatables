<?php
namespace avikarsha\datatables;

use yii\web\AssetBundle;

class DataTablesAsset extends AssetBundle
{
    public $sourcePath = '@bower/datatables';

    public $css = [
        // "//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css",
        // "https://cdn.datatables.net/fixedheader/3.1.0/css/fixedHeader.dataTables.min.css",
        // "https://cdn.datatables.net/select/1.1.2/css/select.dataTables.min.css",
        // "https://cdn.datatables.net/buttons/1.1.2/css/buttons.dataTables.min.css",
        // "https://cdn.datatables.net/1.10.11/css/dataTables.bootstrap.min.css",
        // "https://cdn.datatables.net/buttons/1.1.2/css/buttons.bootstrap.min.css",
    ];

    public $js = [
        "https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js",
        "https://cdn.datatables.net/fixedheader/3.1.0/js/dataTables.fixedHeader.min.js",
        "https://cdn.datatables.net/1.10.11/js/dataTables.bootstrap.min.js",
        "https://cdn.datatables.net/buttons/1.1.2/js/dataTables.buttons.min.js",
        "https://cdn.datatables.net/buttons/1.1.2/js/buttons.bootstrap.min.js",
        "https://cdn.datatables.net/select/1.1.0/js/dataTables.select.min.js",
        "https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js",
        // "https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js",
        // "https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js",
        "https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.18/pdfmake.js",
        "https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.18/vfs_fonts.js",
        "https://cdn.datatables.net/buttons/1.1.1/js/buttons.html5.min.js",
        "https://cdn.datatables.net/colreorder/1.3.0/js/dataTables.colReorder.min.js",
        "//cdn.datatables.net/buttons/1.1.0/js/buttons.colVis.min.js",
        "//cdn.datatables.net/plug-ins/1.10.10/api/column().title().js",
        "https://cdn.polyfill.io/v2/polyfill.min.js?features=Intl.~locale.en",
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
