<template>
  <div class="projects-header">
    <div class="projects-header__left">
      <h5 class="left-title">Мои сайты&colon;</h5>
    </div>
    <div class="projects-header__right">
      <button @click="addNewProject" class="add-project">
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
  props: {
    addProject: {
      type: Function
    }
  },
  methods: {
    addNewProject() {
      this.addProject()
    }
  }
}
</script>