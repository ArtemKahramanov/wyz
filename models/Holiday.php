<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "holiday".
 *
 * @property int $id
 * @property string $date_start
 * @property string $date_stop
 *
 * @property Worker[] $workers
 */
class Holiday extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'holiday';
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
        return $this->hasMany(Worker::className(), ['holiday_id' => 'id']);
    }
}
