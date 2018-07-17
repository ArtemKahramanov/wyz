<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cafedra".
 *
 * @property int $id
 * @property string $name
 * @property int $assistant_id
 *
 * @property Worker[] $workers
 */
class Cafedra extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cafedra';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'assistant_id'], 'required'],
            [['assistant_id'], 'integer'],
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
            'assistant_id' => 'Assistant ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWorkers()
    {
        return $this->hasMany(Worker::className(), ['cafedra_id' => 'id']);
    }
}
