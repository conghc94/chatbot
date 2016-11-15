<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "suatday".
 *
 * @property integer $idSuatDay
 * @property integer $idGiaSu
 * @property integer $idNguoiCan
 * @property integer $idLuong
 * @property integer $tinhtrang
 *
 * @property Giasu $idGiaSu0
 * @property Nguoican $idNguoiCan0
 * @property Luong $idLuong0
 */
class Suatday extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'suatday';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idGiaSu', 'idNguoiCan', 'idLuong', 'tinhtrang'], 'required'],
            [['idGiaSu', 'idNguoiCan', 'idLuong', 'tinhtrang'], 'integer'],
            [['idGiaSu'], 'exist', 'skipOnError' => true, 'targetClass' => Giasu::className(), 'targetAttribute' => ['idGiaSu' => 'idGiaSu']],
            [['idNguoiCan'], 'exist', 'skipOnError' => true, 'targetClass' => Nguoican::className(), 'targetAttribute' => ['idNguoiCan' => 'idNguoiCan']],
            [['idLuong'], 'exist', 'skipOnError' => true, 'targetClass' => Luong::className(), 'targetAttribute' => ['idLuong' => 'idLuong']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idSuatDay' => 'Id Suat Day',
            'idGiaSu' => 'Id Gia Su',
            'idNguoiCan' => 'Id Nguoi Can',
            'idLuong' => 'Id Luong',
            'tinhtrang' => 'Tinhtrang',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdGiaSu0()
    {
        return $this->hasOne(Giasu::className(), ['idGiaSu' => 'idGiaSu']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdNguoiCan0()
    {
        return $this->hasOne(Nguoican::className(), ['idNguoiCan' => 'idNguoiCan']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdLuong0()
    {
        return $this->hasOne(Luong::className(), ['idLuong' => 'idLuong']);
    }
}
