<?php declare(strict_types=1);

namespace Lardev\TaskManagementSystem\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Task extends AbstractDb
{
    const TABLE = 'lardev_task';
    const TABLE_ID_FIELD = 'task_id';

    /**
     * Resource initialization
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(self::TABLE, self::TABLE_ID_FIELD);
    }
}