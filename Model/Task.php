<?php declare(strict_types=1);

namespace Lardev\TaskManagementSystem\Model;

use Lardev\TaskManagementSystem\Model\Resource\Task as TaskResource;
use Magento\Framework\Model\AbstractModel;

class Task extends AbstractModel
{
    public function _construct()
    {
        $this->_init(TaskResource::class);
    }
}