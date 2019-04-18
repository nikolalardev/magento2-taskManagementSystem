<?php declare(strict_types=1);

namespace Lardev\TaskManagementSystem\Model\Resource\Task;

use Lardev\TaskManagementSystem\Model\Resource\Task as TaskResource;
use Lardev\TaskManagementSystem\Model\Task as TaskModel;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(TaskModel::class, TaskResource::class);
    }
}