<?php
$is_auth = (bool) rand(0, 1);
$user_name = 'Евгений';
$user_avatar = 'img/user.jpg';
$categories = [
  'promo__item--boards' => '<Доски и лыжи',
  'promo__item--attachment' => 'Крепления',
  'promo__item--boots' => 'Ботинки',
  'promo__item--clothing' => 'Одежда',
  'promo__item--tools' => 'Инструменты',
  'promo__item--other' => 'Разное'
];
$goods = [
  [
    'productName' => '2014 Rossignol District Snowboard',
    'categorie' => 'Доски и лыжи',
    'price' => 10999,
    'url' => 'img/lot-1.jpg',
    'description' => 'Cноуборд'
  ],
  [
    'productName' => 'DC Ply Mens 2016/2017 Snowboard',
    'categorie' => 'Доски и лыжи',
    'price' => 159999,
    'url' => 'img/lot-2.jpg',
    'description' => 'Cноуборд'
  ],
  [
    'productName' => 'Крепление Union Contact Pro 2015 года размер L/XL',
    'categorie' => 'Крепления',
    'price' => 8000,
    'url' => 'img/lot-3.jpg',
    'description' => 'Крепление'
  ],
  [
    'productName' => 'Ботинки для сноуборда DC Mutiny Charocal',
    'categorie' => 'Ботинки',
    'price' => 10999,
    'url' => 'img/lot-4.jpg',
    'description' => 'Ботинки для сноуборда'
  ],
  [
    'productName' => 'Куртка для сноуборда DC Mutiny Charocal',
    'categorie' => 'Ботинки',
    'price' => 7500,
    'url' => 'img/lot-5.jpg',
    'description' => 'Куртка для сноуборда'
  ],
  [
    'productName' => 'Маска Oakley Canopy',
    'categorie' => 'Разное',
    'price' => 5400,
    'url' => 'img/lot-6.jpg',
    'description' => 'Маска для сноуборда'
  ],
];
