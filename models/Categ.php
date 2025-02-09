<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "categ".
 *
 * @property int $id
 * @property string $name
 *
 * @property Work[] $works
 */
class Categ extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'categ';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }

    /**
     * Gets query for [[Works]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getWorks()
    {
        return $this->hasMany(Work::class, ['category_id' => 'id']);
    }
}
