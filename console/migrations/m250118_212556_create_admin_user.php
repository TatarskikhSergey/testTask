<?php

use common\models\User;
use yii\db\Migration;

/**
 * Class m250118_212556_create_admin_user
 */
class m250118_212556_create_admin_user extends Migration
{
    /**
     * {@inheritdoc}
     * @throws \yii\db\Exception
     */
    public function safeUp()
    {
        $user = new User();
        $user->username = 'admin';
        $user->password = 'admin';
        $user->email = 'test@test.test';
        $user->generateAuthKey();
        $user->status = User::STATUS_ACTIVE;

        if (!$user->save()) {
            throw new Exception("Ошибка при создании тестового пользователя");
        }
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m250118_212556_create_admin_user cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m250118_212556_create_admin_user cannot be reverted.\n";

        return false;
    }
    */
}
