<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rewards".
 *
 * @property int $id
 * @property string $name
 *
 * @property RewardsWorkers[] $rewardsWorkers
 * @property Worker[] $workers
 */
class Rewards extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rewards';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 255],
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
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRewardsWorkers()
    {
        return $this->hasMany(RewardsWorkers::className(), ['rewards_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWorkers()
    {
        return $this->hasMany(Worker::className(), ['id' => 'worker_id'])->viaTable('rewards_workers', ['rewards_id' => 'id']);
    }
}
