<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Oadode */
/* @var $description_of_goods_a app\models\DescriptionOfGoods */
/* @var $description_of_goods_b app\models\DescriptionOfGoods */
/* @var $description_of_goods_c app\models\DescriptionOfGoods */
/* @var $description_of_goods_d app\models\DescriptionOfGoods */
/* @var $description_of_goods_e app\models\DescriptionOfGoods */

$this->title = Yii::t('app', 'Create Oadode');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Oadodes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="oadode-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form.php', [
        'model' => $model,
        'description_of_goods_a' => $description_of_goods_a,
        'description_of_goods_b' => $description_of_goods_b,
        'description_of_goods_c' => $description_of_goods_c,
        'description_of_goods_d' => $description_of_goods_d,
        'description_of_goods_e' => $description_of_goods_e,
    ]) ?>

</div>
