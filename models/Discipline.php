<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "discipline".
 *
 * @property int $id
 * @property string $name
 * @property int $hours
 *
 * @property WorkerDiscipline[] $workerDisciplines
 * @property Worker[] $workers
 */
class Discipline extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'discipline';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'hours'], 'required'],
            [['hours'], 'integer'],
            [['name'], 'string', 'max' => 128],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'hours' => 'Hours',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWorkerDisciplines()
    {
        return $this->hasMany(WorkerDiscipline::className(), ['discipline_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWorkers()
    {
        return $this->hasMany(Worker::className(), ['id' => 'worker_id'])->viaTable('worker_discipline', ['discipline_id' => 'id']);
    }
}
