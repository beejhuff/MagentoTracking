<?php
/**
 * Jcowie Tracking Setup File
 *
 * @category jcowie-tracking
 * @package  Tracking
 * @author   James Cowie <james@jcowie.co.uk>
 * @version  1.0.0
 */

/* @var $this Mage_Catalog_Model_Resource_Setup */
$installer = $this;
$installer->startSetup();

$table = $installer->getConnection()->newTable($installer->getTable('jcowie_tracking'))
    ->addColumn(
        'tracking_id', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
        'unsigned' => true,
        'nullable' => false,
        'primary' => true,
        'identity' => true,
        ), 'Tracking Code ID'
    )
    ->addColumn(
        'tracking_code', Varien_Db_Ddl_Table::TYPE_TEXT, null, array(
        'nullable' => false,
        ), 'Tracking Code'
    )
    ->addColumn(
        'created_time', Varien_Db_Ddl_Table::TYPE_DATETIME, null, array(
        ), 'Created Date'
    )
    ->addColumn(
        'update_time', Varien_Db_Ddl_Table::TYPE_TIMESTAMP, null, array(
        ), 'Updated Time'
    )
    ->setComment('Jcowie Tracking Code module');
$installer->getConnection()->createTable($table);

$installer->endSetup();
