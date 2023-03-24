<?php 

$menu = new Menu();
$actions = !isset($_GET['a']) ? '' : strtolower($_GET['a']);

$menuFunc = [
    'orders' => ['obj' => $menu, 'method' => 'save'],
    // 'delete_product' => ['obj' => $menu, 'method' => 'delete', 'args' => [
    //         'products', 'product_id', $id 
    //     ]
    // ],
];

method($actions, $menuFunc);