<section class="promo">
    <h2 class="promo__title">Нужен стафф для катки?</h2>
    <p class="promo__text">На нашем интернет-аукционе ты найдёшь самое эксклюзивное сноубордическое и горнолыжное снаряжение.</p>
    <ul class="promo__list">
        <?php foreach ($categories as $iconCategorie => $categorie):?>
        <li class="promo__item <?='promo__item--' . $iconCategorie;?>">
            <a class="promo__link" href="all-lots.html">
                <?=htmlentities($categorie);?>
            </a>
        </li>
        <?php endforeach; ?>
    </ul>
</section>
<section class="lots">
    <div class="lots__header">
        <h2>Открытые лоты</h2>
    </div>
    <ul class="lots__list">
        <?php foreach ($goods as $good): ?>
        <li class="lots__item lot">
            <div class="lot__image">
                <img src=<?=$good[ 'url'];?> width="350" height="260" alt=
                <?= htmlentities($good['description']);?>>
            </div>
            <div class="lot__info">
                <span class="lot__category"><?= htmlentities($good['categorie']);?></span>
                <h3 class="lot__title"><a class="text-link" href="lot.html"><?= htmlentities($good['productName']);?></a></h3>
                <div class="lot__state">
                    <div class="lot__rate">
                        <span class="lot__amount">Стартовая цена</span>
                        <span class="lot__cost"><?= htmlentities(getFormattedPrice($good['price']));?></span>
                    </div>
                    <div class="lot__timer timer">
                        <?=getStockTime();?>
                    </div>
                </div>
            </div>
        </li>
        <?php endforeach;?>
    </ul>
</section>
