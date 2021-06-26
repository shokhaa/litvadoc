<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Заявки';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' => 'last_name',
                'value' => function (\app\models\Contact $contact) {
                    return $contact->getFullName();
                },
            ],
            'experience_year',
            [
                'attribute' => 'specialists',
                'value' => function (\app\models\Contact $model) {
                    return implode(', ', $model->specialists);
                },
                'format' => 'raw'
            ],
            [
                'attribute' => 'animal_types',
                'value' => function (\app\models\Contact $model) {
                    return implode(', ', $model->animal_types);
                },
                'format' => 'raw'
            ],
            'email:email',
            'phone_number',
            'city',
            //'updated_at',
            //'role',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
