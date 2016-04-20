<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Scanner;

/**
 * ScannerSearch represents the model behind the search form about `app\models\Scanner`.
 */
class ScannerSearch extends Scanner
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ig'], 'integer'],
            [['type_org', 'hardware', 'software', 'name', 'imgeFile', 'price', 'egais', 'proizv', 'type_scan', 'type_scan_mod', 'schit_kod', 'rastr_scan', 'interf_conn', 'class_secur', 'color', 'gorant', 'primetka'], 'safe'],
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
        $query = Scanner::find();

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
            'ig' => $this->ig,
        ]);

        $query->andFilterWhere(['like', 'type_org', $this->type_org])
            ->andFilterWhere(['like', 'hardware', $this->hardware])
            ->andFilterWhere(['like', 'software', $this->software])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'imgeFile', $this->imgeFile])
            ->andFilterWhere(['like', 'price', $this->price])
            ->andFilterWhere(['like', 'egais', $this->egais])
            ->andFilterWhere(['like', 'proizv', $this->proizv])
            ->andFilterWhere(['like', 'type_scan', $this->type_scan])
            ->andFilterWhere(['like', 'type_scan_mod', $this->type_scan_mod])
            ->andFilterWhere(['like', 'schit_kod', $this->schit_kod])
            ->andFilterWhere(['like', 'rastr_scan', $this->rastr_scan])
            ->andFilterWhere(['like', 'interf_conn', $this->interf_conn])
            ->andFilterWhere(['like', 'class_secur', $this->class_secur])
            ->andFilterWhere(['like', 'color', $this->color])
            ->andFilterWhere(['like', 'gorant', $this->gorant])
            ->andFilterWhere(['like', 'primetka', $this->primetka]);

        return $dataProvider;
    }
}
