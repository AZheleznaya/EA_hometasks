<template>
    <div class="projects-header">
        <div class="projects-header__left">
            <h5 class="left-title">Мои сайты&colon;</h5>
        </div>
        <div class="projects-header__right">
            <button class="add-project" @click="addNewProject">
                <span class="add-project__icon">
                  <img src="@/assets/images/svg/plus.svg" alt="add-icon">
                </span>
                <span class="add-project__text">Создать новый сайт</span>
            </button>
        </div>
    </div>
</template>

<script>
export default {
    name: 'ProjectsHeader',
    methods: {
        addNewProject() {
            this.$emit('addProject')
        }
    }
}
</script>