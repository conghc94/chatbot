<?php

namespace common\models;
use yii\helpers\ArrayHelper;
use Yii;

/**
 * This is the model class for table "luong".
 *
 * @property integer $idLuong
 * @property integer $lop
 * @property integer $gia
 *
 * @property Suatday[] $suatdays
 */
class Luong extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'luong';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idLuong', 'lop', 'gia'], 'required'],
            [['idLuong', 'lop', 'gia'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idLuong' => 'Id Luong',
            'lop' => 'Lop',
            'gia' => 'Gia',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSuatdays()
    {
        return $this->hasMany(Suatday::className(), ['idLuong' => 'idLuong']);
    }
     public static function listLuong(){
        return ArrayHelper::map(self::find()->all(), 'idLuong', 'gia');
    }
}
