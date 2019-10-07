<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "match".
 *
 * @property int $id
 * @property string $name
 * @property string $match_date
 * @property string $match_result
 * @property int $team1_id
 * @property int $team2_id
 * @property string $created_at
 * @property string $updated_at
 */
class Match extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'match';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'name', 'team1_id', 'team2_id'], 'required'],
            [['id', 'team1_id', 'team2_id'], 'integer'],
            [['match_date', 'created_at', 'updated_at'], 'safe'],
            [['name', 'match_result'], 'string', 'max' => 100],
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
            'match_date' => 'Match Date',
            'match_result' => 'Match Result',
            'team1_id' => 'Team1 ID',
            'team2_id' => 'Team2 ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
