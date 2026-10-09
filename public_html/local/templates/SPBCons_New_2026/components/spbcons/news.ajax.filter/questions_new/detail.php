<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<?php
$arItem = $arResult["ITEM"];
$this->getComponent()->initControlButtons($this, $arItem);
$questionTitle = !empty($arItem["DETAIL_TEXT"]) ? $arItem["DETAIL_TEXT"] : $arItem["NAME"];
$answerText = $arItem["PREVIEW_TEXT"];
$answerText = preg_replace('/<form[^>]*>.*?<\/form>/si', '', $answerText);
$answerText = preg_replace('/<script[^>]*>.*?<\/script>/si', '', $answerText);

$str = mb_substr(strip_tags($answerText), 0, 160);
$APPLICATION->SetPageProperty("description", str_replace(array("\r", "\n"), '', $str) . '...');
?>


<!-- ====== ХЛЕБНЫЕ КРОШКИ ====== -->
<nav class="breadcrumbs" aria-label="Хлебные крошки">
  <div class="breadcrumbs__inner">
    <a href="/" class="breadcrumbs__link">Главная</a>
    <span class="breadcrumbs__sep">&gt;</span>
    <a href="<?=$arParams["PAGE_URL"];?>" class="breadcrumbs__link">Вопрос-ответ</a>
    <span class="breadcrumbs__sep">&gt;</span>
    <span class="breadcrumbs__current"><?=htmlspecialcharsEx($arItem["NAME"]);?></span>
  </div>
</nav>


<!-- ====== СТАТЬЯ-ОТВЕТ ====== -->
<article class="na-article reveal" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
  <div class="na-article__inner">

    <h1 class="na-article__title"><?=$questionTitle;?></h1>

    <div class="na-article__body">
      <?=$answerText;?>
    </div>

  </div>
</article>


<!-- ====== ОСТАЛИСЬ ВОПРОСЫ? ====== -->
<section class="acc-offer faq-offer reveal">
  <div class="acc-offer__inner">
    <div class="acc-offer__content">
      <h2 class="acc-offer__title">Остались <strong>вопросы</strong>?</h2>
      <div class="faq-offer__subrow">
        <p class="faq-offer__subtitle">Мы&nbsp;поможем разобраться в&nbsp;праве, бухгалтерии и&nbsp;налогах</p>
        <span class="acc-offer__badge">напишите нам</span>
      </div>
      <a href="#" class="btn btn--purple acc-offer__btn" data-open-modal="modalQuestion">Задать вопрос</a>
    </div>
    <div class="acc-offer__image">
      <img src="<?=SITE_TEMPLATE_PATH?>/images/faq-question-box.png" alt="Остались вопросы?" class="acc-offer__img faq-offer__img" loading="lazy" />
    </div>
  </div>
</section>


