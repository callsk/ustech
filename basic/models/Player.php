<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "player".
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $image_uri
 * @property string $player_jersey_number
 * @property string $country
 * @property int $matches
 * @property int $run
 * @property string $highest_score
 * @property int $fifties
 * @property int $hundreds
 */
class Player extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'player';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['first_name', 'last_name'], 'required'],
            [['matches', 'run', 'fifties', 'hundreds'], 'integer'],
            [['first_name', 'last_name', 'player_jersey_number', 'country', 'highest_score'], 'string', 'max' => 100],
            [['image_uri'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'image_uri' => 'Image Uri',
            'player_jersey_number' => 'Player Jersey Number',
            'country' => 'Country',
            'matches' => 'Matches',
            'run' => 'Run',
            'highest_score' => 'Highest Score',
            'fifties' => 'Fifties',
            'hundreds' => 'Hundreds',
        ];
    }
}
