<?php

use yii\db\Migration;

/**
 * Class m171029_053845_bbb
 */
class m171029_053845_bbb extends Migration
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
        echo "m171029_053845_bbb cannot be reverted.\n";

        return false;
    }


    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('bbb', [
            'id' => $this->primaryKey(),
        ]);

    }

    public function down()
    {
        echo "m171029_053845_bbb cannot be reverted.\n";

        return false;
    }

}
