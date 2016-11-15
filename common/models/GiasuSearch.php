<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Giasu;

/**
 * GiasuSearch represents the model behind the search form about `common\models\Giasu`.
 */
class GiasuSearch extends Giasu
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idGiaSu'], 'integer'],
            [['hoten', 'gioitinh', 'sodienthoai', 'diachi', 'mssv', 'ngaysinh', 'truong', 'sinhviennam', 'que', 'kinhnghiem', 'lopday', 'thoigianranh', 'thongtinthem'], 'safe'],
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
        $query = Giasu::find();

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
            'idGiaSu' => $this->idGiaSu,
        ]);

        $query->andFilterWhere(['like', 'hoten', $this->hoten])
            ->andFilterWhere(['like', 'gioitinh', $this->gioitinh])
            ->andFilterWhere(['like', 'sodienthoai', $this->sodienthoai])
            ->andFilterWhere(['like', 'diachi', $this->diachi])
            ->andFilterWhere(['like', 'mssv', $this->mssv])
            ->andFilterWhere(['like', 'ngaysinh', $this->ngaysinh])
            ->andFilterWhere(['like', 'truong', $this->truong])
            ->andFilterWhere(['like', 'sinhviennam', $this->sinhviennam])
            ->andFilterWhere(['like', 'que', $this->que])
            ->andFilterWhere(['like', 'kinhnghiem', $this->kinhnghiem])
            ->andFilterWhere(['like', 'lopday', $this->lopday])
            ->andFilterWhere(['like', 'thoigianranh', $this->thoigianranh])
            ->andFilterWhere(['like', 'thongtinthem', $this->thongtinthem]);

        return $dataProvider;
    }
}
