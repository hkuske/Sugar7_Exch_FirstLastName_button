<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */

$manifest = array (
  'acceptable_sugar_versions' => 
  array (
    0 => '7.*.*',
  ),
  'acceptable_sugar_flavors' => 
  array (
    0 => 'PRO',
    1 => 'CORP',
    2 => 'ENT',
    3 => 'ULT',
  ),
  'readme' => '',
  'key' => '',
  'author' => 'kuske',
  'description' => 'Exchanges First and Last Name of a contact',
  'icon' => '',
  'is_uninstallable' => true,
  'name' => 'Exch_FirstLastName',
  'published_date' => '2015-01-07 16:39:59',
  'type' => 'module',
  'version' => 1420648866,
  'remove_tables' => 'false',
);

$installdefs = array (
  'id' => 'Exch_FirstLastName',
  'language' => 
  array (
    0=> 
    array (
      'from' => '<basepath>/SugarModules/include/language/en_us.exch_first_last_name.php',
      'to_module' => 'Contacts',
      'language' => 'en_us',
    ),
    1=> 
    array (
      'from' => '<basepath>/SugarModules/include/language/de_DE.exch_first_last_name.php',
      'to_module' => 'Contacts',
      'language' => 'de_DE',
    ),
  ),

  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/custom/',
      'to' => 'custom/',
    ),
  ),
);