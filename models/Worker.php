<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "worker".
 *
 * @property int $id
 * @property string $fio
 * @property string $passport_data
 * @property int $inn
 * @property int $employment_history_id
 * @property int $cafedra_id
 * @property string $rank
 * @property int $pension_certificate_number
 * @property int $holiday_id
 * @property int $contract_id
 * @property string $start_working_date
 * @property int $position_id
 *
 * @property RewardsWorkers[] $rewardsWorkers
 * @property Rewards[] $rewards
 * @property Cafedra $cafedra
 * @property Contract $contract
 * @property Holiday $holiday
 * @property EmploymentHistory $employmentHistory
 * @property Position $position
 * @property WorkerDiscipline[] $workerDisciplines
 * @property Discipline[] $disciplines
 */
class Worker extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'worker';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fio', 'passport_data', 'inn', 'employment_history_id', 'cafedra_id', 'rank', 'pension_certificate_number', 'holiday_id', 'contract_id', 'start_working_date'], 'required'],
            [['inn', 'employment_history_id', 'cafedra_id', 'pension_certificate_number', 'holiday_id', 'contract_id', 'position_id'], 'integer'],
            [['start_working_date'], 'safe'],
            [['fio', 'passport_data', 'rank'], 'string', 'max' => 255],
            [['cafedra_id'], 'exist', 'skipOnError' => true, 'targetClass' => Cafedra::className(), 'targetAttribute' => ['cafedra_id' => 'id']],
            [['contract_id'], 'exist', 'skipOnError' => true, 'targetClass' => Contract::className(), 'targetAttribute' => ['contract_id' => 'id']],
            [['holiday_id'], 'exist', 'skipOnError' => true, 'targetClass' => Holiday::className(), 'targetAttribute' => ['holiday_id' => 'id']],
            [['employment_history_id'], 'exist', 'skipOnError' => true, 'targetClass' => EmploymentHistory::className(), 'targetAttribute' => ['employment_history_id' => 'id']],
            [['position_id'], 'exist', 'skipOnError' => true, 'targetClass' => Position::className(), 'targetAttribute' => ['position_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fio' => 'Fio',
            'passport_data' => 'Passport Data',
            'inn' => 'Inn',
            'employment_history_id' => 'Employment History ID',
            'cafedra_id' => 'Cafedra ID',
            'rank' => 'Rank',
            'pension_certificate_number' => 'Pension Certificate Number',
            'holiday_id' => 'Holiday ID',
            'contract_id' => 'Contract ID',
            'start_working_date' => 'Start Working Date',
            'position_id' => 'Position ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRewardsWorkers()
    {
        return $this->hasMany(RewardsWorkers::className(), ['worker_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRewards()
    {
        return $this->hasMany(Rewards::className(), ['id' => 'rewards_id'])->viaTable('rewards_workers', ['worker_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCafedra()
    {
        return $this->hasOne(Cafedra::className(), ['id' => 'cafedra_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getContract()
    {
        return $this->hasOne(Contract::className(), ['id' => 'contract_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHoliday()
    {
        return $this->hasOne(Holiday::className(), ['id' => 'holiday_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmploymentHistory()
    {
        return $this->hasOne(EmploymentHistory::className(), ['id' => 'employment_history_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPosition()
    {
        return $this->hasOne(Position::className(), ['id' => 'position_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWorkerDisciplines()
    {
        return $this->hasMany(WorkerDiscipline::className(), ['worker_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDisciplines()
    {
        return $this->hasMany(Discipline::className(), ['id' => 'discipline_id'])->viaTable('worker_discipline', ['worker_id' => 'id']);
    }
}
