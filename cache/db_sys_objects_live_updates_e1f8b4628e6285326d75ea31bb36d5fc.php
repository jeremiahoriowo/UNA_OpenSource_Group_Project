<?php $mixedData=array (
  'sys_payments_cart' => 
  array (
    'id' => 1,
    'name' => 'sys_payments_cart',
    'init' => 0,
    'frequency' => 1,
    'service_call' => 'a:4:{s:6:"module";s:6:"system";s:6:"method";s:21:"get_live_updates_cart";s:6:"params";a:3:{i:0;a:2:{s:11:"menu_object";s:18:"sys_toolbar_member";s:9:"menu_item";s:7:"account";}i:1;a:2:{s:11:"menu_object";s:25:"sys_account_notifications";s:9:"menu_item";s:4:"cart";}i:2;s:7:"{count}";}s:5:"class";s:21:"TemplPaymentsServices";}',
    'active' => 1,
  ),
  'sys_payments_orders' => 
  array (
    'id' => 2,
    'name' => 'sys_payments_orders',
    'init' => 0,
    'frequency' => 1,
    'service_call' => 'a:4:{s:6:"module";s:6:"system";s:6:"method";s:23:"get_live_updates_orders";s:6:"params";a:3:{i:0;a:2:{s:11:"menu_object";s:18:"sys_toolbar_member";s:9:"menu_item";s:7:"account";}i:1;a:2:{s:11:"menu_object";s:25:"sys_account_notifications";s:9:"menu_item";s:6:"orders";}i:2;s:7:"{count}";}s:5:"class";s:21:"TemplPaymentsServices";}',
    'active' => 1,
  ),
  'sys_payments_invoices' => 
  array (
    'id' => 3,
    'name' => 'sys_payments_invoices',
    'init' => 0,
    'frequency' => 1,
    'service_call' => 'a:4:{s:6:"module";s:6:"system";s:6:"method";s:25:"get_live_updates_invoices";s:6:"params";a:3:{i:0;a:2:{s:11:"menu_object";s:18:"sys_toolbar_member";s:9:"menu_item";s:7:"account";}i:1;a:2:{s:11:"menu_object";s:25:"sys_account_notifications";s:9:"menu_item";s:8:"invoices";}i:2;s:7:"{count}";}s:5:"class";s:21:"TemplPaymentsServices";}',
    'active' => 1,
  ),
  'bx_persons_friend_requests' => 
  array (
    'id' => 4,
    'name' => 'bx_persons_friend_requests',
    'init' => 0,
    'frequency' => 1,
    'service_call' => 'a:4:{s:6:"module";s:6:"system";s:6:"method";s:40:"get_live_updates_unconfirmed_connections";s:6:"params";a:5:{i:0;s:10:"bx_persons";i:1;s:20:"sys_profiles_friends";i:2;a:2:{s:11:"menu_object";s:18:"sys_toolbar_member";s:9:"menu_item";s:7:"account";}i:3;a:2:{s:11:"menu_object";s:25:"sys_account_notifications";s:9:"menu_item";s:29:"notifications-friend-requests";}i:4;s:7:"{count}";}s:5:"class";s:23:"TemplServiceConnections";}',
    'active' => 1,
  ),
); ?>