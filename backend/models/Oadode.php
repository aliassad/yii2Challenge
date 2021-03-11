<?php
//Used Gii to generate this model
namespace app\models;

use Yii;

/**
 * This is the model class for table "oadode".
 *
 * @property int $id
 * @property int|null $application_id
 * @property int|null $customer_id
 * @property int|null $user_id
 * @property string|null $legal_name
 * @property string|null $business_name
 * @property string|null $business_address
 * @property string|null $business_mailing_address
 * @property string|null $business_phone
 * @property string|null $business_fax
 * @property string|null $business_email
 * @property int|null $application_type
 * @property string|null $business_title
 * @property int|null $lang
 */
class Oadode extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'oadode';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['application_id', 'customer_id', 'user_id', 'application_type', 'lang'], 'integer'],
            [['legal_name', 'business_name', 'business_address', 'business_mailing_address', 'business_phone', 'business_fax', 'business_email', ], 'string', 'max' => 255],
            [['legal_name', 'business_name', 'business_address', 'business_mailing_address', 'business_phone', 'business_email', 'business_title','application_type','lang'], 'required'],
            [['business_fax'], 'safe'],
            [['business_email'], 'email'],
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
            'legal_name' => Yii::t('app', 'Legal Name'),
            'business_name' => Yii::t('app', 'Business Name'),
            'business_address' => Yii::t('app', 'Civic Address'),
            'business_mailing_address' => Yii::t('app', 'Mailing Address (if different from civic address)'),
            'business_phone' => Yii::t('app', 'Telephone Number (Include extension no. if applicable)'),
            'business_fax' => Yii::t('app', 'Facsimile Number'),
            'business_email' => Yii::t('app', 'E-mail'),
            'application_type' => Yii::t('app', 'Type of Application'),
            'business_title' => Yii::t('app', 'Business Title (Select all that apply)'),
            'lang' => Yii::t('app', 'Preferred Language of Correspondence'),
        ];
    }

}
