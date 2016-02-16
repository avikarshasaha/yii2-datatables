# yii2-datatables
yii2-datatables

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist avikarsha/yii2-datatable "*"
```

or add

```
"avikarsha/yii2-datatable": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?php use avikarsha\datatable\DataTables; 
    $searchModel = new ModelSearch();
    $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
?>
<?= DataTables::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],
 
        //columns
 
        ['class' => 'yii\grid\ActionColumn'],
    ],
]);?>```
