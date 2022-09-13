
<link rel="stylesheet" type="text/css" href="/style/mans-catalog-block.css">
<div class="linkPath">
    <span><a href="/index.php">Главная</a> / Мужчины</span>
</div>
<div class="titleCategory">
    <p>МУЖЧИНАМ</p>
    <span class="p-sub">Все товары</span>
    <div class="filters">
        <div class="dropdown-list">
            <button>Категория</button>
            <div class="dropdown-content">
                <span>Куртка</span>
                <span>Кеды</span>
                <span>Джинсы</span>
            </div>
        </div>
        <div class="dropdown-list">
            <button>Размер</button>
            <div class="dropdown-content">
                <span>38</span>
                <span>39</span>
                <span>40</span>
                <span>41</span>
                <span>42</span>
            </div>
        </div>
        <div class="dropdown-list">
            <button>Стоимость</button>
            <div class="dropdown-content">
                <span>0-1000 руб.</span>
                <span>1000-3000 руб.</span>
                <span>3000-6000 руб.</span>
                <span>6000-20000 руб.</span>
            </div>
        </div>
    </div>
</div>

<?php
 $goods = json_decode(file_get_contents('../goods/goods.json'));
?>
<script defer src="/js/mans-cat-goods.js"></script>
<script defer src="/js/cookieMans-catalog.js"></script>
<html>
    <div class="goodsList" id="goods-block">
    </div>
</html>