<?php

namespace common\models;
use yii\helpers\ArrayHelper;
use Yii;

/**
 * This is the model class for table "nguoican".
 *
 * @property integer $idNguoiCan
 * @property string $hoten
 * @property string $gioitinh
 * @property string $diachi
 * @property string $sodienthoai
 * @property string $yc_lop
 * @property string $yc_mon
 * @property string $yc_truong
 * @property string $yc_kinhnghiem
 * @property string $yc_que
 * @property string $yc_sinhviennam
 * @property string $yc_gioitinh
 * @property string $yc_khac
 * @property string $buoihoc
 *
 * @property Suatday[] $suatdays
 */
class Nguoican extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'nguoican';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['hoten', 'gioitinh', 'diachi', 'sodienthoai', 'yc_lop', 'yc_mon', 'yc_truong', 'yc_kinhnghiem', 'yc_que', 'yc_sinhviennam', 'yc_gioitinh', 'buoihoc'], 'required'],
            [['hoten', 'diachi', 'yc_truong', 'yc_khac'], 'string', 'max' => 100],
            [['gioitinh', 'yc_gioitinh'], 'string', 'max' => 20],
            [['sodienthoai', 'yc_lop', 'yc_mon', 'yc_kinhnghiem', 'yc_que', 'yc_sinhviennam'], 'string', 'max' => 50],
            [['buoihoc'], 'string', 'max' => 1000],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idNguoiCan' => 'Id Nguoi Can',
            'hoten' => 'Hoten',
            'gioitinh' => 'Gioitinh',
            'diachi' => 'Diachi',
            'sodienthoai' => 'Sodienthoai',
            'yc_lop' => 'Yc Lop',
            'yc_mon' => 'Yc Mon',
            'yc_truong' => 'Yc Truong',
            'yc_kinhnghiem' => 'Yc Kinhnghiem',
            'yc_que' => 'Yc Que',
            'yc_sinhviennam' => 'Yc Sinhviennam',
            'yc_gioitinh' => 'Yc Gioitinh',
            'yc_khac' => 'Yc Khac',
            'buoihoc' => 'Buoihoc',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSuatdays()
    {
        return $this->hasMany(Suatday::className(), ['idNguoiCan' => 'idNguoiCan']);
    }
     public static function listNguoiCan(){
        return ArrayHelper::map(self::find()->all(), 'idNguoiCan', 'hoten');
    }
}
