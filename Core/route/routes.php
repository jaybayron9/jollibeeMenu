<?php 

$actions = isset($_GET['r']) ? strtolower($_GET['r']) : '';
$menu = new Menu();
$auth = new Auth();

$menuFunc = [
    'login' => ['obj' => $auth, 'method' => 'login'],
    'logout' => ['obj' => $auth, 'method' => 'logout'],
    'receipt' => ['obj' => $menu, 'method' => 'receipt'],
    'check_orders' => ['obj' => $menu, 'method' => 'check_count'],
    'order_count' => ['obj' => $menu, 'method' => 'order_count'],
    'show_orders' => ['obj' => $menu, 'method' => 'show_orders'],
    'insert_order' => ['obj' => $menu, 'method' => 'insert_order'],
    'remove_order' => ['obj' => $menu, 'method' => 'remove_order'],
    'cancel_orders' => ['obj' => $menu, 'method' => 'cancel_orders'],
];

method($actions, $menuFunc);