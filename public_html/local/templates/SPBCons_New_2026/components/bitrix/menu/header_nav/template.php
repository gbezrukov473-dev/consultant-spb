<?php
  /**
   * Шаблон десктопного меню — header-nav
   *
   * Путь: /local/templates/spbcons_dev/components/bitrix/menu/header_nav/template.php
   *
   * Этот файл — мост между данными из админки и вашей CSS-вёрсткой.
   * Компонент bitrix:menu передаёт сюда массив $arResult с пунктами меню.
   * Каждый пункт содержит: TEXT (название), LINK (ссылка), SELECTED (активен ли),
   * DEPTH_LEVEL (уровень вложенности), IS_PARENT (есть ли дочерние пункты),
   * PARAMS (дополнительные параметры из .menu.php).
   */
  if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
  if (empty($arResult)) return;
?>

<ul class="header-nav__list">
  <?php
    $inDropdown = false;
    
    foreach ($arResult as $key => $arItem):
    // Проверяем специальные параметры из .menu.php
    $isLk = (isset($arItem["PARAMS"]["is_lk"]) && $arItem["PARAMS"]["is_lk"] === "Y");
    $isSelected = $arItem["SELECTED"];
    $text = htmlspecialcharsEx($arItem["TEXT"]);
    $link = $arItem["LINK"];
    
    // === Уровень 2: элементы выпадающего подменю ===
    if ($arItem["DEPTH_LEVEL"] == 2):
      ?>
        <a href="<?= $link ?>" class="header-nav__dropdown-link<?= ($isSelected ? ' is-active' : '') ?>"><?= $text ?></a>
      <?php
      continue;
    endif;
    
    // === Уровень 1 ===
    
    // Закрываем предыдущий dropdown, если был открыт
    if ($inDropdown):
      $inDropdown = false;
      ?>
        </div>
        </li>
    <?php
    endif;
    
    // --- Пункт с выпадающим подменю ---
    if ($arItem["IS_PARENT"]):
    $inDropdown = true;
  ?>
    <li class="header-nav__item header-nav__item--dropdown">
        <button class="header-nav__link header-nav__link--dropdown<?= ($isSelected ? ' is-active' : '') ?>" aria-expanded="false">
          <?= $text ?>
            <svg class="nav-arrow" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 1L6 6L11 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </button>
        <div class="header-nav__dropdown">
          <?php
            // --- Пункт "Личный кабинет" с иконкой ---
              elseif ($isLk):
                ?>
                  <li class="header-nav__item islk header-nav__item--lk">
                      <a href="<?= $link ?>" class="header-nav__link<?/* header-nav__link--lk*/?>">
                          <svg class="icon lk-icon" aria-hidden="true"><use href="<?= SITE_TEMPLATE_PATH ?>/images/sprite.svg#lk-icon"></use></svg>
                        <?= $text ?>
                      </a>
                  </li>
              <?php
            // --- Обычный пункт меню ---
            else:
              ?>
                <li class="header-nav__item">
                    <a href="<?= $link ?>" class="header-nav__link<?= ($isSelected ? ' is-active' : '') ?>"><?= $text ?></a>
                </li>
            <?php
            endif;
            endforeach;
            
            // Закрываем последний dropdown, если остался открытым
            if ($inDropdown):
          ?>
        </div>
    </li>
<?php
  endif;
?>
</ul>

