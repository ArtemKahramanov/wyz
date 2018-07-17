<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "worker_discipline".
 *
 * @property int $worker_id
 * @property int $discipline_id
 *
 * @property Worker $worker
 * @property Discipline $discipline
 */
class WorkerDiscipline extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'worker_discipline';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['worker_id', 'discipline_id'], 'required'],
            [['worker_id', 'discipline_id'], 'integer'],
            [['worker_id', 'discipline_id'], 'unique', 'targetAttribute' => ['worker_id', 'discipline_id']],
            [['worker_id'], 'exist', 'skipOnError' => true, 'targetClass' => Worker::className(), 'targetAttribute' => ['worker_id' => 'id']],
            [['discipline_id'], 'exist', 'skipOnError' => true, 'targetClass' => Discipline::className(), 'targetAttribute' => ['discipline_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'worker_id' => 'Worker ID',
            'discipline_id' => 'Discipline ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWorker()
    {
        return $this->hasOne(Worker::className(), ['id' => 'worker_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDiscipline()
    {
        return $this->hasOne(Discipline::className(), ['id' => 'discipline_id']);
    }
}
