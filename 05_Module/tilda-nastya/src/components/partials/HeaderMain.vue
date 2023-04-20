<template>
    <header class="header">
        <div class="header-wrapper">
            <router-link to="/" class="header-waves">
                <svg class="waves-icon" width="14" height="14" role="img">
                    <use href="#waves"/>
                </svg>
            </router-link>
            <router-link to="/" class="header-logo">
                <img class="logo-icon" src="@/assets/images/svg/tilda-logo.svg" alt="logo">
            </router-link>
            <div class="header-items">
                <div class="header-items__left">
                    <nav class="header-nav">
                        <ul class="nav-list list-unstyled">
                            <li class="nav-list__item active">
                                <router-link to="/" class="nav-list__link">Мои сайты</router-link>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="header-items__right">
                    <nav class="header-nav">
                        <ul class="nav-list list-unstyled">
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
    name: 'HeaderMain',
}
</script>