<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Luong;

/**
 * LuongSearch represents the model behind the search form about `common\models\Luong`.
 */
class LuongSearch extends Luong
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idLuong', 'lop', 'gia'], 'integer'],
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
        $query = Luong::find();

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
            'idLuong' => $this->idLuong,
            'lop' => $this->lop,
            'gia' => $this->gia,
        ]);

        return $dataProvider;
    }
}
