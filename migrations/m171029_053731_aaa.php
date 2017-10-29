<?php

use yii\db\Migration;

/**
 * Class m171029_053731_aaa
 */
class m171029_053731_aaa extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {

    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171029_053731_aaa cannot be reverted.\n";

        return false;
    }


    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('aaa', [
            'id' => $this->primaryKey(),
        ]);
    }

    public function down()
    {
        echo "m171029_053731_aaa cannot be reverted.\n";

        return false;
    }

}
