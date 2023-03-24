<?php 

$menu = new Menu();
$actions = !isset($_GET['a']) ? '' : strtolower($_GET['a']);

$menuFunc = [
    'receipt' => ['obj' => $menu, 'method' => 'receipt'],
    // 'delete_product' => ['obj' => $menu, 'method' => 'delete', 'args' => [
    //         'products', 'product_id', $id 
    //     ]
    // ],
];

method($actions, $menuFunc);