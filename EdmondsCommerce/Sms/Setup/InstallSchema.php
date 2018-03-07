<?php

namespace EdmondsCommerce\Sms\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class InstallSchema implements InstallSchemaInterface
{

    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;

        $installer->startSetup();

        $connection = $installer->getConnection();
        $connection
            ->addColumn(
                $installer->getTable('quote'),
                'sms',
                [
                    'type' => \Magento\Framework\DB\Ddl\Table ::TYPE_TEXT,
                    'nullable' => true,
                    'default' => NULL,
                    'length' => 255,
                    'comment' => 'SMS Number'
                ]
            );
		$connection
            ->addColumn(
                $installer->getTable('quote_address'),
                'sms',
                [
                    'type' => \Magento\Framework\DB\Ddl\Table ::TYPE_TEXT,
                    'nullable' => true,
                    'default' => NULL,
                    'length' => 255,
                    'comment' => 'SMS Number'
                ]
            );
        $connection
            ->addColumn(
                $installer->getTable('sales_order'),
                'sms',
                [
                    'type' => \Magento\Framework\DB\Ddl\Table ::TYPE_TEXT,
                    'nullable' => true,
                    'default' => NULL,
                    'length' => 255,
                    'comment' => 'SMS Number'
                ]
            );
		$connection
            ->addColumn(
                $installer->getTable('sales_order_address'),
                'sms',
                [
                    'type' => \Magento\Framework\DB\Ddl\Table ::TYPE_TEXT,
                    'nullable' => true,
                    'default' => NULL,
                    'length' => 255,
                    'comment' => 'SMS Number'
                ]
            );

        $installer->endSetup();
    }
}