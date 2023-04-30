<div class="dropdown d-inline-block">
    <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
        <img ng-src="http://wft.com:81/public//assets/img/lang/<?= \wfm\App::$app->getProperty('language')['code'] ?>.png" alt="">
    </a>
    <ul class="dropdown-menu" id="languages">
        <?php foreach ($this->languages as $k => $v): ?>
            <?php if (\wfm\App::$app->getProperty('language')['code'] == $k) continue; ?>
        <?php endforeach; ?>

        <li>
            <button class="dropdown-item" data-langcode="<?= $k ?>">
                <img ng-src="http://wft.com:81/public/assets/img/lang/<?= $k ?>.png" alt="">
                <?= $v['title'] ?>
            </button>
        </li>
    </ul>
</div>
