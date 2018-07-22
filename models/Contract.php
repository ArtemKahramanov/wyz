<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contract".
 *
 * @property int $id
 * @property string $date_start
 * @property string $date_stop
 *
 * @property Worker[] $workers
 */
class Contract extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contract';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date_start', 'date_stop', 'worker_id'], 'required'],
            [['date_start', 'date_stop', 'worker_id'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'worker_id' => 'Worker Id',
            'date_start' => 'Date Start',
            'date_stop' => 'Date Stop',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWorkers()
    {
        return $this->hasMany(Worker::className(), ['contract_id' => 'id']);
    }
}
