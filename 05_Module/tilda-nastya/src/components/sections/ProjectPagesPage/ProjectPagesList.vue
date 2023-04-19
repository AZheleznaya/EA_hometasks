<template>
  <div class="pages">
    <h5 class="pages-title">Страницы сайта:</h5>
    <ul v-if="pages.length" class="pages-list list-unstyled">
      <project-page
          v-for="(page, index) in pages"
          :index-page="index + 1"
          :key="page.id"
          :page="page"
          :remove-current-page="removeProject"
      />
    </ul>
    <h3 v-else class="pages-empty">Добавьте первую страницу.</h3>
  </div>
</template>

<script>
import ProjectPage from "@/components/sections/ProjectPagesPage/ProjectPagesList/ProjectPage.vue";

export default {
  name: 'ProjectPagesList',
  components: {
    ProjectPage,
  },
  props: {
    indexPage: Number,
    pages: {
      type: Array,
    },
    removeCurrentPage: {
      type: Function
    }
  },
  methods: {
    removeProject(index) {
      this.removeCurrentPage(index)
    }
  }
}
</script>