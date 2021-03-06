<?php
//Used Gii to generate this model
namespace app\models;

use Yii;

/**
 * This is the model class for table "description_of_goods".
 *
 * @property int $id
 * @property int|null $application_id
 * @property int|null $customer_id
 * @property int|null $user_id
 * @property string|null $description
 * @property string|null $ecl_group
 * @property string|null $ecl_item
 */
class DescriptionOfGoods extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'description_of_goods';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['application_id', 'customer_id', 'user_id'], 'integer'],
            [['description', 'ecl_group', 'ecl_item'], 'required'],
            [['description', 'ecl_group', 'ecl_item'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'application_id' => Yii::t('app', 'Application ID'),
            'customer_id' => Yii::t('app', 'Customer ID'),
            'user_id' => Yii::t('app', 'User ID'),
            'description' => Yii::t('app', 'Description of Controlled goods'),
            'ecl_group' => Yii::t('app', 'ECL Group No.'),
            'ecl_item' => Yii::t('app', 'ECL Item No.'),
        ];
    }
}
