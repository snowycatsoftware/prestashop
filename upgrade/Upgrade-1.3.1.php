<?php
/**
 * 2017-2018 DM Productions B.V.
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License (AFL 3.0)
 * that is bundled with this package in the file LICENSE.md
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/afl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to info@dmp.nl so we can send you a copy immediately.
 *
 * @author     Michael Dekker <info@mijnpresta.nl>
 * @copyright  2010-2018 DM Productions B.V.
 * @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 */

if (!defined('_PS_VERSION_') && !defined('_PS_VERSION_')) {
    exit;
}

function upgrade_module_1_3_1()
{
    // Support foreign postcodes
    try {
        Db::getInstance()->execute('ALTER TABLE `'._DB_PREFIX_.'myparcel` MODIFY postcode VARCHAR(32) NOT NULL');
    } catch (Exception $e) {
    }

    return true;
}
