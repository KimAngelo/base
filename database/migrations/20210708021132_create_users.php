<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateUsers extends AbstractMigration
{
    public function up()
    {
        $tab = $this->table('users');
        $tab->addColumn('name', 'string')
            ->addColumn('email', 'string', ['limit' => 50])
            ->addColumn('password', 'string', ['limit' => 60])
            ->addTimestamps()
            ->save();
    }

    public function down()
    {
        $this->table('users')->drop()->save();
    }
}
