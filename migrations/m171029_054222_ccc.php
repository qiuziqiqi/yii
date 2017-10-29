<?php

use yii\db\Migration;

/**
 * Class m171029_054222_ccc
 */
class m171029_054222_ccc extends Migration
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
        echo "m171029_054222_ccc cannot be reverted.\n";

        return false;
    }


    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('ccc', [
            'id' => $this->primaryKey(),
        ]);
    }

    public function down()
    {
        echo "m171029_054222_ccc cannot be reverted.\n";

        return false;
    }

}
