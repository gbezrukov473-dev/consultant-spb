<!-- ====== ШАПКА ====== -->
<!-- Битрикс: bitrix:main.include, area_id="header" -->
<header class="header">
  <div class="header-top">
    <div class="header-top__inner">
      <div class="header-top__logos">
        <a href="/" class="header-top__logo-link">
          <img src="/img/logo-consultant.svg" alt="КонсультантПлюс" class="logo-consultant" />
        </a>
        <a href="/" class="header-top__logo-link">
          <img src="/img/logo-chdk.svg" alt="ЧДК Право" class="logo-chdk" />
        </a>
      </div>

      <div class="header-top__right">
        <div class="header-top__phone-block">
          <span class="phone-icon"></span>
          <div class="header-top__phone-info">
            <a href="tel:+78123344481" class="header-top__phone-number">8 812 334 44 81</a>
            <span class="header-top__phone-hours">пн-пт 9:00-19:00</span>
          </div>
        </div>

        <a href="#" class="btn btn--yellow-on-purple header-top__cta-btn">Узнать цену</a>
      </div>

      <button class="header-burger" aria-label="Меню" aria-expanded="false">
        <span></span>
        <span></span>
        <span></span>
      </button>
    </div>
  </div>

  <nav class="header-nav" aria-label="Основная навигация">
    <div class="header-nav__inner">
      <ul class="header-nav__list" itemscope itemtype="https://schema.org/ItemList">
        <li class="header-nav__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/SiteNavigationElement">
          <a href="/systems/bukhgalteru/" itemprop="url" class="header-nav__link">Бухгалтеру</a>
          <meta itemprop="name" content="Бухгалтеру" />
        </li>
        <li class="header-nav__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/SiteNavigationElement">
          <a href="/systems/yuristu/" itemprop="url" class="header-nav__link">Юристу</a>
          <meta itemprop="name" content="Юристу" />
        </li>
        <li class="header-nav__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/SiteNavigationElement">
          <a href="/systems/rukovoditelyu/" itemprop="url" class="header-nav__link">Руководителю</a>
          <meta itemprop="name" content="Руководителю" />
        </li>
        <li class="header-nav__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/SiteNavigationElement">
          <a href="/systems/byudzhetnoy-organizatsii/" itemprop="url" class="header-nav__link">Бюджету</a>
          <meta itemprop="name" content="Бюджету" />
        </li>
        <li class="header-nav__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/SiteNavigationElement">
          <a href="/consult/" itemprop="url" class="header-nav__link">Линия консультаций</a>
          <meta itemprop="name" content="Линия консультаций" />
        </li>
        <li class="header-nav__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/SiteNavigationElement">
          <a href="/about/" itemprop="url" class="header-nav__link">О нас</a>
          <meta itemprop="name" content="О нас" />
        </li>
        <li class="header-nav__item header-nav__item--dropdown">
          <button class="header-nav__link header-nav__link--dropdown" aria-expanded="false">
            Новости
            <svg class="nav-arrow" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M1 1L6 6L11 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </button>
          <div class="header-nav__dropdown">
            <a href="/news/" class="header-nav__dropdown-link" itemscope itemtype="https://schema.org/SiteNavigationElement" itemprop="url"><span itemprop="name">Новости</span></a>
            <a href="/collections/" class="header-nav__dropdown-link" itemscope itemtype="https://schema.org/SiteNavigationElement" itemprop="url"><span itemprop="name">Правовые сборники</span></a>
          </div>
        </li>
        <li class="header-nav__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/SiteNavigationElement">
          <a href="/faq/" itemprop="url" class="header-nav__link">Вопрос-ответ</a>
          <meta itemprop="name" content="Вопрос-ответ" />
        </li>
        <li class="header-nav__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/SiteNavigationElement">
          <a href="/contacts/" itemprop="url" class="header-nav__link">Контакты</a>
          <meta itemprop="name" content="Контакты" />
        </li>
        <li class="header-nav__item header-nav__item--lk">
          <a href="#" class="header-nav__link header-nav__link--lk">
            <svg class="icon lk-icon" aria-hidden="true"><use href="/img/sprite.svg#lk-icon"></use></svg>
            Личный кабинет
          </a>
        </li>
      </ul>
    </div>
    <div class="header-nav__line"></div>
  </nav>

  <div class="mobile-menu">
    <div class="mobile-menu__inner">
      <ul class="mobile-menu__list">
        <li><a href="/systems/bukhgalteru/" class="mobile-menu__link">Бухгалтеру</a></li>
        <li><a href="/systems/yuristu/" class="mobile-menu__link">Юристу</a></li>
        <li><a href="/systems/rukovoditelyu/" class="mobile-menu__link">Руководителю</a></li>
        <li><a href="/systems/byudzhetnoy-organizatsii/" class="mobile-menu__link">Бюджету</a></li>
        <li><a href="/consult/" class="mobile-menu__link">Линия консультаций</a></li>
        <li><a href="/about/" class="mobile-menu__link">О нас</a></li>
        <li><a href="/news/" class="mobile-menu__link">Новости</a></li>
        <li><a href="/faq/" class="mobile-menu__link">Вопрос-ответ</a></li>
        <li><a href="/collections/" class="mobile-menu__link">Правовые сборники</a></li>
        <li><a href="/contacts/" class="mobile-menu__link">Контакты</a></li>
        <li><a href="#" class="mobile-menu__link mobile-menu__link--lk">Личный кабинет</a></li>
      </ul>
      <div class="mobile-menu__contacts">
        <a href="tel:+78123344481" class="mobile-menu__phone">8 812 334 44 81</a>
        <span class="mobile-menu__hours">пн-пт 9:00-19:00</span>
        <a href="#" class="btn btn--yellow mobile-menu__cta">Узнать цену</a>
      </div>
    </div>
  </div>
</header>
