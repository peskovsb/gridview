<?php

use yii\db\Migration;

/**
 * Handles the creation for table `{{%city}}`.
 */
class m160901_142406_create_table_city extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('{{%city}}', [

            'idCity' => $this->primaryKey()->notNull(),
            'idCountry' => $this->integer(11)->notNull(),
            'idState' => $this->integer(11)->notNull(),
            'idArea' => $this->integer(11)->notNull(),
            'nameRu' => $this->string(255)->notNull(),

        ]);
     }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('{{%city}}');
    }
}
