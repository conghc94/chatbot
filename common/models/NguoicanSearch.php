<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Nguoican;

/**
 * NguoicanSearch represents the model behind the search form about `common\models\Nguoican`.
 */
class NguoicanSearch extends Nguoican
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idNguoiCan'], 'integer'],
            [['hoten', 'gioitinh', 'diachi', 'sodienthoai', 'yc_lop', 'yc_mon', 'yc_truong', 'yc_kinhnghiem', 'yc_que', 'yc_sinhviennam', 'yc_gioitinh', 'yc_khac', 'buoihoc'], 'safe'],
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
        $query = Nguoican::find();

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
            'idNguoiCan' => $this->idNguoiCan,
        ]);

        $query->andFilterWhere(['like', 'hoten', $this->hoten])
            ->andFilterWhere(['like', 'gioitinh', $this->gioitinh])
            ->andFilterWhere(['like', 'diachi', $this->diachi])
            ->andFilterWhere(['like', 'sodienthoai', $this->sodienthoai])
            ->andFilterWhere(['like', 'yc_lop', $this->yc_lop])
            ->andFilterWhere(['like', 'yc_mon', $this->yc_mon])
            ->andFilterWhere(['like', 'yc_truong', $this->yc_truong])
            ->andFilterWhere(['like', 'yc_kinhnghiem', $this->yc_kinhnghiem])
            ->andFilterWhere(['like', 'yc_que', $this->yc_que])
            ->andFilterWhere(['like', 'yc_sinhviennam', $this->yc_sinhviennam])
            ->andFilterWhere(['like', 'yc_gioitinh', $this->yc_gioitinh])
            ->andFilterWhere(['like', 'yc_khac', $this->yc_khac])
            ->andFilterWhere(['like', 'buoihoc', $this->buoihoc]);

        return $dataProvider;
    }
}
