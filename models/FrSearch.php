<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Fr;

/**
 * FrSearch represents the model behind the search form about `app\models\Fr`.
 */
class FrSearch extends Fr
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['type_org', 'hardware', 'software', 'name', 'imgeFile', 'price', 'egais', 'proizv', 'color', 'autootrez_check', 'garant', 'interf_conn', 'metod_print', 'speed_print', 'speed_print_qr', 'lenght_check_lent', 'gabarit', 'primetka'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Fr::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'type_org', $this->type_org])
            ->andFilterWhere(['like', 'hardware', $this->hardware])
            ->andFilterWhere(['like', 'software', $this->software])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'imgeFile', $this->imgeFile])
            ->andFilterWhere(['like', 'price', $this->price])
            ->andFilterWhere(['like', 'egais', $this->egais])
            ->andFilterWhere(['like', 'proizv', $this->proizv])
            ->andFilterWhere(['like', 'color', $this->color])
            ->andFilterWhere(['like', 'autootrez_check', $this->autootrez_check])
            ->andFilterWhere(['like', 'garant', $this->garant])
            ->andFilterWhere(['like', 'interf_conn', $this->interf_conn])
            ->andFilterWhere(['like', 'metod_print', $this->metod_print])
            ->andFilterWhere(['like', 'speed_print', $this->speed_print])
            ->andFilterWhere(['like', 'speed_print_qr', $this->speed_print_qr])
            ->andFilterWhere(['like', 'lenght_check_lent', $this->lenght_check_lent])
            ->andFilterWhere(['like', 'gabarit', $this->gabarit])
            ->andFilterWhere(['like', 'primetka', $this->primetka]);

        return $dataProvider;
    }
}
