<?php
require_once('conf.php');
require_once('functions.php');
require_once('data.php');

$content = include_template('index.php', [
    'categories' => $categories,
    'goods' => $goods
    ]);

$layout_page = include_template('layout.php', [
  'title' => 'YetiCave – Главная',
  'is_auth' => $is_auth,
  'user_avatar' => $user_avatar,
  'user_name' => $user_name,
  'content' => $content,
  'categories' => $categories
]);

print($layout_page);
