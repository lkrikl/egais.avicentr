<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Tcd;

/**
 * TcdSearch represents the model behind the search form about `app\models\Tcd`.
 */
class TcdSearch extends Tcd
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['type_org', 'harware', 'software', 'name', 'imgeFile', 'price', 'egais', 'proizv', 'processor', 'ddr', 'display', 'type_display', 'type_schit', 'speed_scan', 'daln_schit', 'klav', 'os', 'rus', 'interf', 'gsm', 'pil', 'temp', 'gobar', 'ves', 'primetka'], 'safe'],
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
        $query = Tcd::find();

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
            ->andFilterWhere(['like', 'harware', $this->harware])
            ->andFilterWhere(['like', 'software', $this->software])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'imgeFile', $this->imgeFile])
            ->andFilterWhere(['like', 'price', $this->price])
            ->andFilterWhere(['like', 'egais', $this->egais])
            ->andFilterWhere(['like', 'proizv', $this->proizv])
            ->andFilterWhere(['like', 'processor', $this->processor])
            ->andFilterWhere(['like', 'ddr', $this->ddr])
            ->andFilterWhere(['like', 'display', $this->display])
            ->andFilterWhere(['like', 'type_display', $this->type_display])
            ->andFilterWhere(['like', 'type_schit', $this->type_schit])
            ->andFilterWhere(['like', 'speed_scan', $this->speed_scan])
            ->andFilterWhere(['like', 'daln_schit', $this->daln_schit])
            ->andFilterWhere(['like', 'klav', $this->klav])
            ->andFilterWhere(['like', 'os', $this->os])
            ->andFilterWhere(['like', 'rus', $this->rus])
            ->andFilterWhere(['like', 'interf', $this->interf])
            ->andFilterWhere(['like', 'gsm', $this->gsm])
            ->andFilterWhere(['like', 'pil', $this->pil])
            ->andFilterWhere(['like', 'temp', $this->temp])
            ->andFilterWhere(['like', 'gobar', $this->gobar])
            ->andFilterWhere(['like', 'ves', $this->ves])
            ->andFilterWhere(['like', 'primetka', $this->primetka]);

        return $dataProvider;
    }
}
