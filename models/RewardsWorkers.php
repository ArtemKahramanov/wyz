<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rewards_workers".
 *
 * @property int $rewards_id
 * @property int $worker_id
 *
 * @property Rewards $rewards
 * @property Worker $worker
 */
class RewardsWorkers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rewards_workers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['rewards_id', 'worker_id'], 'required'],
            [['rewards_id', 'worker_id'], 'integer'],
            [['rewards_id', 'worker_id'], 'unique', 'targetAttribute' => ['rewards_id', 'worker_id']],
            [['rewards_id'], 'exist', 'skipOnError' => true, 'targetClass' => Rewards::className(), 'targetAttribute' => ['rewards_id' => 'id']],
            [['worker_id'], 'exist', 'skipOnError' => true, 'targetClass' => Worker::className(), 'targetAttribute' => ['worker_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'rewards_id' => 'Rewards ID',
            'worker_id' => 'Worker ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRewards()
    {
        return $this->hasOne(Rewards::className(), ['id' => 'rewards_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWorker()
    {
        return $this->hasOne(Worker::className(), ['id' => 'worker_id']);
    }
}
