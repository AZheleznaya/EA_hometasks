<template>
  <header class="header">
    <div class="header-wrapper">
      <div class="header-waves">
        <svg class="waves-icon" width="14" height="14" role="img">
          <use href="#waves" />
        </svg>
      </div>
      <div class="header-logo">
        <img class="logo-icon" src="@/assets/images/svg/tilda-logo.svg" alt="logo">
      </div>
      <div class="header-items">
        <div class="header__items-left">
          <nav class="header-nav">
            <ul class="nav-list">
              <li class="nav-list__item nav-list__item_active">
                <a href="javascript:void(0);" class="nav-list__link">Мои сайты</a>
              </li>
            </ul>
          </nav>
        </div>
        <div class="header__items-right">
          <nav class="header-nav">
            <ul class="nav-list">
              <li class="nav-list__item">
                <a href="javascript:void(0);" class="nav-list__link">Выйти</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>
</template>

<script>
export default {
  name: 'HeaderApp',
}
</script>