<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Suatday;

/**
 * SuatdaySearch represents the model behind the search form about `common\models\Suatday`.
 */
class SuatdaySearch extends Suatday
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idSuatDay', 'idGiaSu', 'idNguoiCan', 'idLuong', 'tinhtrang'], 'integer'],
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
        $query = Suatday::find();

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
            'idSuatDay' => $this->idSuatDay,
            'idGiaSu' => $this->idGiaSu,
            'idNguoiCan' => $this->idNguoiCan,
            'idLuong' => $this->idLuong,
            'tinhtrang' => $this->tinhtrang,
        ]);

        return $dataProvider;
    }
}
