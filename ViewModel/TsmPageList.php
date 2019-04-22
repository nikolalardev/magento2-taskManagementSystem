<?php
declare(strict_types=1);

namespace Lardev\TaskManagementSystem\ViewModel;

use Lardev\TaskManagementSystem\Model\TaskFactory;
use Magento\Framework\View\Element\Block\ArgumentInterface;

class TsmPageList implements ArgumentInterface
{
    /**
     * @var TaskFactory
     */
    private $taskFactory;

    public function __construct(
        TaskFactory $taskFactory
    ) {
        $this->taskFactory = $taskFactory;
    }

    public function test()
    {
        echo "test";
        //TODO
    }

    public function getTasks()
    {
        $data = [];
        $task = $this->taskFactory->create();
        $collection  = $task->getCollection();
        foreach ($collection as $item) {
            $data[] = $item->getData();
        }

        return $data;
    }
}
