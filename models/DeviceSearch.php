<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Device;

/**
 * DeviceSearch represents the model behind the search form about `app\models\Device`.
 */
class DeviceSearch extends Device
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['type_organization', 'ca', 'hardware', 'software', 'scanner', 'fr_print', 'tcd', 'imgeFile', 'title', 'tth', 'price'], 'safe'],
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
        $query = Device::find();

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

        $query->andFilterWhere(['like', 'type_organization', $this->type_organization])
            ->andFilterWhere(['like', 'ca', $this->ca])
            ->andFilterWhere(['like', 'hardware', $this->hardware])
            ->andFilterWhere(['like', 'software', $this->software])
            ->andFilterWhere(['like', 'scanner', $this->scanner])
            ->andFilterWhere(['like', 'fr_print', $this->fr_print])
            ->andFilterWhere(['like', 'tcd', $this->tcd])
            ->andFilterWhere(['like', 'imgeFile', $this->imgeFile])
            ->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'tth', $this->tth])
            ->andFilterWhere(['like', 'price', $this->price]);

        return $dataProvider;
    }
}
