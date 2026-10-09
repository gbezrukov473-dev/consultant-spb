<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<?php
$allowedCategories = [
	"Налоги и налогообложение",
	"Кадровый учёт",
	"Уплата налогов и взносов в бюджет",
	"ККТ",
	"Платёжное поручение",
	"Бухгалтерский учёт",
	"ЭЦП",
	"Охрана и безопасность труда",
	"Расчёт среднего заработка",
	"Пособие по уходу за ребёнком",
	"Чистые активы",
	"Командировка",
	"Передача исключительных прав",
	"Регистрация передачи исключительных прав",
	"Совокупная обязанность",
];

$tabs = [];
if (!empty($arResult["AVAILABLE_TAGS"])) {
	foreach ($allowedCategories as $catName) {
		$normCat = str_replace('ё', 'е', mb_strtolower(trim($catName), 'UTF-8'));
		foreach ($arResult["AVAILABLE_TAGS"] as $tag) {
			$normTag = str_replace('ё', 'е', mb_strtolower(trim($tag["NAME"]), 'UTF-8'));
			if ($normTag === $normCat) {
				$tabs[] = ['id' => $tag["ID"], 'name' => $tag["NAME"]];
				break;
			}
		}
	}
}
?>


<!-- ====== ХЛЕБНЫЕ КРОШКИ ====== -->
<nav class="breadcrumbs" aria-label="Хлебные крошки">
  <div class="breadcrumbs__inner">
    <a href="/" class="breadcrumbs__link">Главная</a>
    <span class="breadcrumbs__sep">&gt;</span>
    <span class="breadcrumbs__current">Вопрос-ответ</span>
  </div>
</nav>

<!-- ====== ЗАГОЛОВОК ====== -->
<section class="faq-header">
  <div class="faq-header__inner">
    <h1 class="faq-header__title">Вопрос-ответ</h1>
  </div>
</section>

<!-- ====== FAQ СПИСОК ====== -->
<section class="faq-list reveal">
  <div class="faq-list__inner">

	<!-- Табы-фильтры -->
	<div class="faq-list__tabs" role="tablist">
		<button class="faq-list__tab is-active" data-filter="all" role="tab" aria-selected="true">Все</button>
		<?php foreach ($tabs as $tab): ?>
		<button class="faq-list__tab" data-filter="<?=htmlspecialcharsEx($tab['id']);?>" role="tab"><?=htmlspecialcharsEx($tab['name']);?></button>
		<?php endforeach; ?>
	</div>

	<!-- Список вопросов -->
	<div class="faq-questions" id="faqQuestions">
		<?php require(__DIR__ . "/list.php"); ?>
	</div>

	<!-- Кнопка "Показать ещё" -->
	<div class="faq-list__more-wrap">
		<button class="btn btn--purple faq-list__more-btn" id="faqMoreBtn">Показать ещё</button>
	</div>

  </div>
</section>


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


<script>
(function () {
	var PER_PAGE = 10;
	var currentFilter = 'all';
	var visibleCount = PER_PAGE;

	var tabs = document.querySelectorAll('.faq-list__tab');
	var allLinks = Array.prototype.slice.call(document.querySelectorAll('.faq-questions__link'));
	var moreBtn = document.getElementById('faqMoreBtn');

	function getFiltered() {
		if (currentFilter === 'all') return allLinks;
		return allLinks.filter(function (link) {
			var tags = (link.getAttribute('data-tags') || '').split(',');
			return tags.indexOf(currentFilter) !== -1;
		});
	}

	function render() {
		var filtered = getFiltered();

		allLinks.forEach(function (link) {
			link.style.display = 'none';
			link.classList.remove('faq-questions__link--odd', 'faq-questions__link--even');
		});

		var shown = Math.min(visibleCount, filtered.length);
		for (var i = 0; i < shown; i++) {
			filtered[i].style.display = '';
			// Чередование цветов по видимой позиции (nth-child считает и скрытые).
			filtered[i].classList.add(i % 2 === 0 ? 'faq-questions__link--odd' : 'faq-questions__link--even');
		}

		if (moreBtn) {
			moreBtn.style.display = visibleCount < filtered.length ? '' : 'none';
		}
	}

	tabs.forEach(function (tab) {
		tab.addEventListener('click', function () {
			tabs.forEach(function (t) {
				t.classList.remove('is-active');
				t.setAttribute('aria-selected', 'false');
			});
			tab.classList.add('is-active');
			tab.setAttribute('aria-selected', 'true');

			currentFilter = tab.getAttribute('data-filter');
			visibleCount = PER_PAGE;
			render();
		});
	});

	if (moreBtn) {
		moreBtn.addEventListener('click', function (e) {
			e.preventDefault();
			visibleCount += PER_PAGE;
			render();
		});
	}

	render();
})();
</script>
