<?php

use yii\helpers\Html;

/* @var $description_of_goods_a app\models\DescriptionOfGoods */
/* @var $description_of_goods_b app\models\DescriptionOfGoods */
/* @var $description_of_goods_c app\models\DescriptionOfGoods */
/* @var $description_of_goods_d app\models\DescriptionOfGoods */
/* @var $description_of_goods_e app\models\DescriptionOfGoods */
?>
<h4><?= Yii::t('app', 'Description of the controlled goods the applicant may be required to examine, possess or transfer <br>(Refer to the Export Control List (ECL))'); ?></h4>
<div class="row">
    <table class="table">
        <thead class="thead-light text-center">
        <tr>
            <th class="text-center"
                scope="col"><?= Html::activeLabel($description_of_goods_a, 'description'); ?></th>
            <th class="text-center"
                scope="col"><?= Html::activeLabel($description_of_goods_a, 'ecl_group'); ?></th>
            <th class="text-center"
                scope="col"><?= Html::activeLabel($description_of_goods_a, 'ecl_item'); ?></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td class="text-center" scope="row">
                <?= Html::activeTextInput($description_of_goods_a, '[1]description'); ?>
            </td>
            <td class="text-center">
                <?= Html::activeTextInput($description_of_goods_a, '[1]ecl_group'); ?>
            </td>
            <td class="text-center">
                <?= Html::activeTextInput($description_of_goods_a, '[1]ecl_item'); ?>
            </td>
        </tr>
        <tr>
            <td class="text-center" scope="row">
                <?= Html::activeTextInput($description_of_goods_b, '[2]description'); ?>
            </td>
            <td class="text-center">
                <?= Html::activeTextInput($description_of_goods_b, '[2]ecl_group'); ?>
            </td>
            <td class="text-center">
                <?= Html::activeTextInput($description_of_goods_b, '[2]ecl_item'); ?>
            </td>
        </tr>
        <tr>
            <td class="text-center" scope="row">
                <?= Html::activeTextInput($description_of_goods_c, '[3]description'); ?>
            </td>
            <td class="text-center">
                <?= Html::activeTextInput($description_of_goods_c, '[3]ecl_group'); ?>
            </td>
            <td class="text-center">
                <?= Html::activeTextInput($description_of_goods_c, '[3]ecl_item'); ?>
            </td>
        </tr>
        <tr>
            <td class="text-center" scope="row">
                <?= Html::activeTextInput($description_of_goods_d, '[4]description'); ?>
            </td>
            <td class="text-center">
                <?= Html::activeTextInput($description_of_goods_d, '[4]ecl_group'); ?>
            </td>
            <td class="text-center">
                <?= Html::activeTextInput($description_of_goods_d, '[4]ecl_item'); ?>
            </td>
        </tr>
        <tr>
            <td class="text-center" scope="row">
                <?= Html::activeTextInput($description_of_goods_e, '[5]description'); ?>
            </td>
            <td class="text-center">
                <?= Html::activeTextInput($description_of_goods_e, '[5]ecl_group'); ?>
            </td>
            <td class="text-center">
                <?= Html::activeTextInput($description_of_goods_e, '[5]ecl_item'); ?>
            </td>
        </tr>
        </tbody>
    </table>
</div>