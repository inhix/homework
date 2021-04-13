<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 19.08.2018
 * Time: 11:31
 */
//news/sport/juventus-jenoa-anons-matcha
return [
    'admin/category/edit/([0-9-a-zA-Z-]+)' => 'adminCategory/edit/$1',
    'admin/category/delete/([0-9-a-zA-Z-]+)' => 'adminCategory/delete/$1',
    'admin/category/update' => 'adminCategory/update',
    'admin/category/create' => 'adminCategory/create',
    'admin/category/store' => 'adminCategory/store',
    'admin/category/updateStore' => 'adminCategory/updateStore',
    'admin/category' => 'adminCategory/index',
    'news/([a-zA-Z-]+)/([a-zA-Z-]+)' => 'news/detail/$2',
    'news/([a-zA-Z-]+)' => 'news/index/$1',
    'news' => 'news/index',
    'comment' => 'comments/store',
    '^\s*$' => 'index/index',
];

?>