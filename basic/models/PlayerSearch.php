<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Player;

/**
 * PlayerSearch represents the model behind the search form of `app\models\Player`.
 */
class PlayerSearch extends Player
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'matches', 'run', 'fifties', 'hundreds'], 'integer'],
            [['first_name', 'last_name', 'image_uri', 'player_jersey_number', 'country', 'highest_score'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Player::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'matches' => $this->matches,
            'run' => $this->run,
            'fifties' => $this->fifties,
            'hundreds' => $this->hundreds,
        ]);

        $query->andFilterWhere(['like', 'first_name', $this->first_name])
            ->andFilterWhere(['like', 'last_name', $this->last_name])
            ->andFilterWhere(['like', 'image_uri', $this->image_uri])
            ->andFilterWhere(['like', 'player_jersey_number', $this->player_jersey_number])
            ->andFilterWhere(['like', 'country', $this->country])
            ->andFilterWhere(['like', 'highest_score', $this->highest_score]);

        return $dataProvider;
    }
}
