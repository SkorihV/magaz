<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Каталог товаров</title>
    <link rel="stylesheet" href="/assets/style.css">
</head>
<body>
<div class="site-wrapper">
    <ul class="menu-top">
        <li><a class="link-item" href="/products/">Товары</a></li>
        <li><a class="link-item" href="/categories/">Категории</a></li>
    </ul>
    {if $h1}<h1>{$h1}</h1>{/if}
    <div class="body-content">
        <div class="left-side">
{include file="categories-list.tpl" categories=$categories}
        </div>
        <div class="right-side">
