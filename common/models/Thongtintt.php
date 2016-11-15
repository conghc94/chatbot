<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "thongtintt".
 *
 * @property integer $id
 * @property string $gioithieu
 * @property string $diachi
 * @property string $sodienthoai
 * @property string $email
 */
class Thongtintt extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'thongtintt';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['gioithieu', 'diachi', 'sodienthoai', 'email'], 'required'],
            [['gioithieu'], 'string', 'max' => 200],
            [['diachi'], 'string', 'max' => 150],
            [['sodienthoai'], 'string', 'max' => 20],
            [['email'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'gioithieu' => 'Gioithieu',
            'diachi' => 'Diachi',
            'sodienthoai' => 'Sodienthoai',
            'email' => 'Email',
        ];
    }
}
