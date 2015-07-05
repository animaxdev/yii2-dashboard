<?php

use yii\helpers\Html;
use cornernote\returnurl\ReturnUrl;

/**
 * @var yii\web\View $this
 * @var cornernote\dashboard\models\Dashboard $model
 */

?>

<!-- menu buttons -->
<p class='pull-left'>
    <?= Html::a('<span class="fa fa-arrow-left"></span> ' . Yii::t('dashboard', 'Back'), ReturnUrl::getUrl(['index']), ['class' => 'btn btn-default']) ?>
    <?= Html::a('<span class="fa fa-eye"></span> ' . Yii::t('dashboard', 'View'), ['view', 'id' => $model->id, 'ru' => ReturnUrl::getRequestToken()], ['class' => 'btn btn-primary']) ?>
    <?= Html::a('<span class="fa fa-pencil"></span> ' . Yii::t('dashboard', 'Update'), ['update', 'id' => $model->id, 'ru' => ReturnUrl::getRequestToken()], ['class' => 'btn btn-info']) ?>
    <?= Html::a('<span class="fa fa-trash"></span> ' . Yii::t('dashboard', 'Delete'), ['delete', 'id' => $model->id, 'ru' => ReturnUrl::getRequestToken()], [
    'class' => 'btn btn-danger',
    'data-confirm' => '' . Yii::t('dashboard', 'Are you sure to delete this item?') . '',
    'data-method' => 'post',
    ]); ?>
</p>

<div class="clearfix"></div>