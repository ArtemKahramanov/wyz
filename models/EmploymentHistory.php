<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "employment_history".
 *
 * @property int $id
 * @property int $number
 * @property string $date_issue
 * @property string $commands
 *
 * @property Worker[] $workers
 */
class EmploymentHistory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'employment_history';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['number', 'date_issue', 'commands'], 'required'],
            [['number'], 'integer'],
            [['date_issue'], 'safe'],
            [['commands'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'number' => 'Number',
            'date_issue' => 'Date Issue',
            'commands' => 'Commands',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWorkers()
    {
        return $this->hasMany(Worker::className(), ['employment_history_id' => 'id']);
    }
}
