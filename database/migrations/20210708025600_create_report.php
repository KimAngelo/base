<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateReport extends AbstractMigration
{
    public function up()
    {
        $tab = $this->table('report_access');
        $tab->addColumn('users', 'integer')
            ->addColumn('views', 'integer')
            ->addColumn('pages', 'integer')
            ->addTimestamps()
            ->save();

        $tab = $this->table('report_online');
        $tab->addColumn('user', 'integer', ['null' => true])
            ->addColumn('ip', 'string', ['limit' => 50])
            ->addColumn('url', 'string')
            ->addColumn('agent', 'string')
            ->addColumn('pages', 'integer', ['default' => '1'])
            ->addTimestamps()
            ->save();

    }

    public function down()
    {
        $this->table('report_access')->drop()->save();
        $this->table('report_online')->drop()->save();
    }
}
