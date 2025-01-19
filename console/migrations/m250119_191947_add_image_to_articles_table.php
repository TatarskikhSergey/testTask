<?php

use yii\db\Migration;

/**
 * Class m250119_191947_add_image_to_articles_table
 */
class m250119_191947_add_image_to_articles_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('articles', 'image', $this->string()->after('content'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('articles', 'image');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m250119_191947_add_image_to_articles_table cannot be reverted.\n";

        return false;
    }
    */
}
