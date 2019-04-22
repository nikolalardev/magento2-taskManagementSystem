<?php declare(strict_types=1);

namespace Lardev\TaskManagementSystem\Setup\Patch\Data;

use Lardev\TaskManagementSystem\Model\ResourceModel\Task;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\Patch\DataPatchInterface;
use Magento\Framework\Setup\Patch\PatchInterface;

class CreateDefaultTasks implements DataPatchInterface
{
    /**
     * @var ModuleDataSetupInterface
     */
    private $moduleDataSetup;

    /**
     * CreateDefaultTasks constructor.
     * @param ModuleDataSetupInterface $moduleDataSetup
     */
    public function __construct(ModuleDataSetupInterface $moduleDataSetup)
    {
        $this->moduleDataSetup = $moduleDataSetup;
    }

    /**
     * Get array of patches that have to be executed prior to this.
     *
     * example of implementation:
     *
     * [
     *      \Vendor_Name\Module_Name\Setup\Patch\Patch1::class,
     *      \Vendor_Name\Module_Name\Setup\Patch\Patch2::class
     * ]
     *
     * @return string[]
     */
    public static function getDependencies()
    {
        return [];
    }

    /**
     * Get aliases (previous names) for the patch.
     *
     * @return string[]
     */
    public function getAliases()
    {
        return [];
    }

    /**
     * Run code inside patch
     * If code fails, patch must be reverted, in case when we are speaking about schema - than under revert
     * means run PatchInterface::revert()
     *
     * If we speak about data, under revert means: $transaction->rollback()
     *
     * @return $this
     */
    public function apply()
    {
        $tasks = [
            ['name' => 'Task 1', 'description' => 'Task 1 description', 'start_time' => '2019-04-19 10:58:00'],
            ['name' => 'Another task', 'description' => 'Another description', 'start_time' => '2019-04-19 10:58:01'],
            ['name' => 'Final task', 'description' => 'even better description', 'start_time' => '2019-04-19 10:58:02'],
        ];

        $this->moduleDataSetup->getConnection()->insertMultiple(Task::TABLE, $tasks);

        return $this;
    }
}
