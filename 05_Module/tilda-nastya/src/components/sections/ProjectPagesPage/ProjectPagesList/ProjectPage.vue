<template>
  <li class="page">
    <div class="page-left">
      <img :src="page.img" class="page-left__image" alt="image" >
      <h3 class="page-left__title">{{ page.title + " " + page.id }}</h3>
    </div>
    <div class="page-right">
      <button @click="showModal" class="page-right__settings">
        <svg
            class="icon"
            width="14"
            height="14"
            aria-hidden="true"
            role="img"
        >
          <use href="#settings-icon" />
        </svg>
        <span class="text">Настройки</span>
      </button>
      <button @click="removePage" class="page-right__trash">
        <svg
            class="icon"
            width="14"
            height="14"
            aria-hidden="true"
            role="img"
        >
          <use href="#trash-icon" />
        </svg>
        <span class="text">Удалить</span>
      </button>
    </div>
    <project-settings-modal v-model:modal-settings-open="modalVisible"/>
  </li>
</template>

<script>
import ProjectSettingsModal from "@/components/modals/ProjectSettingsModal.vue";

export default {
  name: 'ProjectPage',
  components: {
    ProjectSettingsModal
  },
  props: {
    indexPage: Number,
    page: {
      type: Object,
    },
    removeCurrentPage: {
      type: Function
    }
  },
  data() {
    return {
      modalVisible: false
    }
  },
  methods: {
    removePage() {
      this.removeCurrentPage(this.indexPage)
    },
    showModal() {
      this.modalVisible = true
    }
  }
}
</script>