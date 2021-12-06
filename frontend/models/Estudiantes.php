<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "estudiantes".
 *
 * @property int $id
 * @property string $nombres
 * @property string|null $apellidos
 * @property string|null $cedula
 */
class Estudiantes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'estudiantes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombres'], 'required'],
            [['nombres', 'apellidos', 'cedula'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombres' => 'Nombres',
            'apellidos' => 'Apellidos',
            'cedula' => 'Cedula',
        ];
    }
}
