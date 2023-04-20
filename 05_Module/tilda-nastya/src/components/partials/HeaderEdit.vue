<template>
    <header class="header-edit">
        <div class="header-edit__wrapper">
            <router-link to="/" class="header-waves">
                <svg class="waves-icon" width="14" height="14" role="img">
                    <use href="#waves"/>
                </svg>
            </router-link>
            <div class="breadcrumbs">
                <div class="breadcrumbs__left">
                    <nav class="breadcrumbs-nav">
                        <ul class="breadcrumbs-nav__list list-unstyled">
                            <li class="list-item">
                                <router-link to="/" class="list-item__link">
                                    <svg
                                        class="home__icon"
                                        width="14"
                                        height="14"
                                        aria-hidden="true"
                                        role="img"
                                    >
                                        <use href="#home-icon" />
                                    </svg>
                                    Мои сайты
                                </router-link>
                            </li>
                            <li class="list-item">
                                <img src="@/assets/images/svg/arrow-right.svg" alt="arrow-icon">
                            </li>
                            <li class="list-item">
                                <router-link :to="`/project/${$route.params.projectId}`" class="list-item__link">
                                    My project
                                </router-link>
                            </li>
                            <li class="list-item">
                                <img src="@/assets/images/svg/arrow-right.svg" alt="arrow-icon">
                            </li>
                            <li class="list-item">
                                <a href="javascript:void(0);" class="list-item__link">Page</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="breadcrumbs__right">
                    <nav class="breadcrumbs-nav">
                        <ul class="breadcrumbs-nav__list list-unstyled">
                            <li class="list-item">
                                <a href="javascript:void(0);" class="list-item__link">Предпросмотр</a>
                            </li>
                            <li class="list-item">
                                <a href="javascript:void(0);" class="list-item__link">Ещё</a>
                                <svg
                                    class="more-icon"
                                    width="24"
                                    height="24"
                                    aria-hidden="true"
                                    role="img"
                                >
                                    <use href="#arrow-down" />
                                </svg>
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
    name: 'HeaderEdit'
}
</script>