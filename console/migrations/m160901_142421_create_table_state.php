<?php

use yii\db\Migration;

/**
 * Handles the creation for table `{{%state}}`.
 */
class m160901_142421_create_table_state extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('{{%state}}', [

            'idState' => $this->primaryKey()->notNull(),
            'idCountry' => $this->integer(11)->notNull(),
            'alias' => $this->string(255)->notNull(),
            'nameRu' => $this->string(255)->notNull(),

        ]);
     }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('{{%state}}');
    }
}
