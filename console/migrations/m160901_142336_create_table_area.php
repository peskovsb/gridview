<?php

use yii\db\Migration;

/**
 * Handles the creation for table `{{%area}}`.
 */
class m160901_142336_create_table_area extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('{{%area}}', [

            'idArea' => $this->primaryKey()->notNull(),
            'idCountry' => $this->integer(11)->notNull(),
            'idState' => $this->integer(11)->notNull(),
            'nameRu' => $this->string(255)->notNull(),

        ]);
     }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('{{%area}}');
    }
}
