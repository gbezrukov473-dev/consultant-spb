<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$this->setFrameMode(true);

if (empty($arResult["ITEMS"])) return;

$sectionName = $arResult["SECTION_DATA"]["NAME"] ?? "";
$sectionDesc = $arResult["SECTION_DATA"]["DESCRIPTION"] ?? "";
?>

<section class="kits reveal ii">
    <div class="kits__inner">
        <h2 class="kits__title"><?=htmlspecialcharsbx($sectionName)?></h2>
        <?php if (!empty($sectionDesc)): ?>
          <p class="aip-features__subtitle"><?=$sectionDesc?></p>
        <?php endif; ?>

        <div class="kits__layout">

            <div class="kits__tabs">
                <?php foreach ($arResult["ITEMS"] as $index => $arItem): ?>
                  <?php
                  $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                  $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                  
                  $isActive = ($index === 0) ? ' is-active' : '';
                  ?>
                  <button class="kits__tab<?=$isActive?>" data-tab="<?=$index?>" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                      <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=htmlspecialcharsbx($arItem["NAME"])?>" class="kits__tab-img" loading="lazy" />
                      <div class="kits__tab-info">
                          <h3 class="kits__tab-title"><?=$arItem["NAME"]?></h3>
                          <p class="kits__tab-desc"><?=$arItem["PREVIEW_TEXT"]?></p>
                      </div>
                  </button>
                <?php endforeach; ?>
            </div>

            <div class="kits__content">
                <?php foreach ($arResult["ITEMS"] as $index => $arItem): ?>
                  <?php 
                  $canValues = $arItem["PROPERTIES"]["CAN"]["VALUE"] ?? [];
                  $helpValues = $arItem["PROPERTIES"]["HELP"]["VALUE"] ?? [];
                  $isActive = ($index === 0) ? ' is-active' : '';
                  
                  $videoFileId = $arItem["PROPERTIES"]["VIDEO"]["VALUE"] ?? null;
                  $videoPath = !empty($videoFileId) ? \CFile::GetPath($videoFileId) : '';
                  ?>
                  
                  <div class="kits__pane<?=$isActive?>" data-content="<?=$index?>">
                      <h3 class="kits__content-title"><?=$arItem["NAME"]?></h3>
                    
                      <?php if (!empty($canValues) && is_array($canValues)): ?>
                        <h3 class="kits__tab-title iit">Что умеет сервис:</h3>
                        <ul class="kits__list">
                            <?php foreach ($canValues as $canItem): ?>
                              <li><?=$canItem?></li>
                            <?php endforeach; ?>
                        </ul>
                      <?php endif; ?>
                    
                      <?php if (!empty($helpValues) && is_array($helpValues)): ?>
                        <h3 class="kits__tab-title iit">Как это работает:</h3>
                        <?php foreach ($helpValues as $helpIndex => $helpItem): ?>
                            <?=($helpIndex + 1)?>. <?=$helpItem?><br>
                        <?php endforeach; ?>
                        <br>
                      <?php endif; ?>
                    
                      <?=$arItem["DETAIL_TEXT"]?>

                      <div class="kits__content-actions">
                          <a href="#" class="btn btn--purple aip-hero__btn" data-open-modal="modalService" data-lead-comment="Запрос по ИИ-сервису">Получить доступ</a>
                          <?php if (!empty($videoPath)): ?>
                            <a href="#" class="btn btn--link-purple btn--sm chdk-card__link" data-open-modal="modalVideo<?=$arItem["ID"]?>" data-lead-comment="">Смотреть видеоролик</a>
                          <?php endif; ?>
                      </div>
                  </div>
                <?php endforeach; ?>
            </div>

        </div>
    </div>
</section>

<?php foreach ($arResult["ITEMS"] as $arItem): ?>
  <?php 
  $videoFileId = $arItem["PROPERTIES"]["VIDEO"]["VALUE"] ?? null;
  $videoPath = !empty($videoFileId) ? \CFile::GetPath($videoFileId) : '';
  ?>
  <?php if (!empty($videoPath)): ?>
    <div class="modal modal--video" id="modalVideo<?=$arItem["ID"]?>">
        <button class="modal__close" aria-label="Закрыть">&times;</button>
        <div class="modal__video-wrapper">
            <video controls preload="metadata" playsinline style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: contain;">
                <source src="<?=$videoPath?>" type="video/mp4">
                
                <!-- если браузер вообще не умеет воспроизводить MP4 -->
                <p style="padding: 20px; color: #fff; text-align: center;">
                    Ваш браузер не поддерживает встроенное видео. 
                </p>
            </video>
        </div>
    </div>
  <?php endif; ?>
<?php endforeach; ?>

