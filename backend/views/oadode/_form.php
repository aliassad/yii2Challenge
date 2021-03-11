<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Oadode */
/* @var $description_of_goods_a app\models\DescriptionOfGoods */
/* @var $description_of_goods_b app\models\DescriptionOfGoods */
/* @var $description_of_goods_c app\models\DescriptionOfGoods */
/* @var $description_of_goods_d app\models\DescriptionOfGoods */
/* @var $description_of_goods_e app\models\DescriptionOfGoods */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="oadode-form">

    <?php $form = ActiveForm::begin(); ?>

    <h4><?= Yii::t('app', 'A. BUSINESS INFORMATION (to be completed by Designed official)'); ?></h4>

    <?= $form->field($model, 'legal_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'business_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'business_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'business_mailing_address')->textInput(['maxlength' => true]) ?>

    <div class="row">
        <div class="col-sm-6">
            <?= $form->field($model, 'business_phone')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-sm-6">
            <?= $form->field($model, 'business_fax')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <?= $form->field($model, 'business_email')->textInput(['maxlength' => true]) ?>

    <?php echo $this->render('description_of_goods/_form.php', array(
        'description_of_goods_a' => $description_of_goods_a,
        'description_of_goods_b' => $description_of_goods_b,
        'description_of_goods_c' => $description_of_goods_c,
        'description_of_goods_d' => $description_of_goods_d,
        'description_of_goods_e' => $description_of_goods_e,
    )); ?>

    <?= $form->field($model, 'application_type')->radioList([1 => Yii::t('app', 'New'),
        2 => Yii::t('app', 'Re-Assessment')]); ?>

    <?= $form->field($model, 'business_title')->checkboxList(['owner' => Yii::t('app', 'Owner'),
        'authorized_individual' => Yii::t('app', 'Authorized Individual'),
        'designated_official' => Yii::t('app', 'Designated official'),
        'officer' => Yii::t('app', 'Officer'),
        'director' => Yii::t('app', 'Director'),
        'employee' => Yii::t('app', 'Employee'),
    ]) ?>

    <?= $form->field($model, 'lang')->radioList([1 => Yii::t('app', 'English'),
        2 => Yii::t('app', 'French')]); ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
