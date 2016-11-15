<?php

namespace common\models;
use yii\helpers\ArrayHelper;
use Yii;

/**
 * This is the model class for table "giasu".
 *
 * @property integer $idGiaSu
 * @property string $hoten
 * @property string $gioitinh
 * @property string $sodienthoai
 * @property string $diachi
 * @property string $mssv
 * @property string $ngaysinh
 * @property string $truong
 * @property string $sinhviennam
 * @property string $que
 * @property string $kinhnghiem
 * @property string $lopday
 * @property string $thoigianranh
 * @property string $thongtinthem
 *
 * @property Suatday[] $suatdays
 */
class Giasu extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'giasu';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['hoten', 'gioitinh', 'sodienthoai', 'diachi', 'ngaysinh', 'truong', 'sinhviennam', 'que', 'kinhnghiem', 'lopday', 'thoigianranh'], 'required'],
            [['hoten', 'diachi', 'truong', 'thongtinthem'], 'string', 'max' => 100],
            [['gioitinh', 'mssv', 'ngaysinh'], 'string', 'max' => 20],
            [['sodienthoai', 'que', 'kinhnghiem', 'lopday', 'thoigianranh'], 'string', 'max' => 50],
            [['sinhviennam'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idGiaSu' => 'Id Gia Su',
            'hoten' => 'Hoten',
            'gioitinh' => 'Gioitinh',
            'sodienthoai' => 'Sodienthoai',
            'diachi' => 'Diachi',
            'mssv' => 'Mssv',
            'ngaysinh' => 'Ngaysinh',
            'truong' => 'Truong',
            'sinhviennam' => 'Sinhviennam',
            'que' => 'Que',
            'kinhnghiem' => 'Kinhnghiem',
            'lopday' => 'Lopday',
            'thoigianranh' => 'Thoigianranh',
            'thongtinthem' => 'Thongtinthem',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSuatdays()
    {
        return $this->hasMany(Suatday::className(), ['idGiaSu' => 'idGiaSu']);
    }
     public static function listGiasu(){
        return ArrayHelper::map(self::find()->all(), 'idGiaSu', 'hoten');
    }
}
