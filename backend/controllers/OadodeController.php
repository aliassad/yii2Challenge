<?php

namespace backend\controllers;

use app\models\DescriptionOfGoods;
use Yii;
use app\models\Oadode;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * OadodeController implements the CRUD actions for Oadode model.
 */
class OadodeController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Oadode models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Oadode::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Oadode model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Oadode model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Oadode();
        $description_of_goods_a = new DescriptionOfGoods();
        $description_of_goods_b = new DescriptionOfGoods();
        $description_of_goods_c = new DescriptionOfGoods();
        $description_of_goods_d = new DescriptionOfGoods();
        $description_of_goods_e = new DescriptionOfGoods();

        if (Yii::$app->request->post()) {
            $model->business_title = implode(',', Yii::$app->request->post('Oadode')['business_title']);
            $DescriptionOfGoods = Yii::$app->request->post('DescriptionOfGoods');

            if ($model->load(Yii::$app->request->post())) {
                $description_of_goods_a->attributes = ($DescriptionOfGoods[1]);
                $description_of_goods_b->attributes = ($DescriptionOfGoods[2]);
                $description_of_goods_c->attributes = ($DescriptionOfGoods[3]);
                $description_of_goods_d->attributes = ($DescriptionOfGoods[4]);
                $description_of_goods_e->attributes = ($DescriptionOfGoods[5]);
                $isValid = $model->validate();
                $isValid = ($description_of_goods_a->validate() ||
                        $description_of_goods_b->validate() ||
                        $description_of_goods_c->validate() ||
                        $description_of_goods_d->validate() ||
                        $description_of_goods_e->validate()) && $isValid;

                if ($isValid) {

                    $model->user_id = Yii::$app->getUser()->id;
                    $model->save(false);

                    if ($description_of_goods_a->validate()) {
                        $description_of_goods_a->application_id = $model->id;
                        $description_of_goods_a->user_id = $model->user_id;
                        $description_of_goods_a->save(false);
                    }
                    if ($description_of_goods_b->validate()) {
                        $description_of_goods_b->application_id = $model->id;
                        $description_of_goods_b->user_id = $model->user_id;
                        $description_of_goods_b->save(false);
                    }
                    if ($description_of_goods_c->validate()) {
                        $description_of_goods_c->application_id = $model->id;
                        $description_of_goods_c->user_id = $model->user_id;
                        $description_of_goods_c->save(false);
                    }
                    if ($description_of_goods_d->validate()) {
                        $description_of_goods_d->application_id = $model->id;
                        $description_of_goods_d->user_id = $model->user_id;
                        $description_of_goods_d->save(false);
                    }
                    if ($description_of_goods_e->validate()) {
                        $description_of_goods_e->application_id = $model->id;
                        $description_of_goods_e->user_id = $model->user_id;
                        $description_of_goods_e->save(false);
                    }
                    return $this->redirect(['view', 'id' => $model->id]);
                }

            }
        }
        return $this->render('create', [
            'model' => $model,
            'description_of_goods_a' => $description_of_goods_a,
            'description_of_goods_b' => $description_of_goods_b,
            'description_of_goods_c' => $description_of_goods_c,
            'description_of_goods_d' => $description_of_goods_d,
            'description_of_goods_e' => $description_of_goods_e,
        ]);
    }

    /**
     * Updates an existing Oadode model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Oadode model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Oadode model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Oadode the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Oadode::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
