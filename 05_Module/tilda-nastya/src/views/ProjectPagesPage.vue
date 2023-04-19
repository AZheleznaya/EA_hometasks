<template>
  <header-app />
  <project-pages-panel :add-page="addNewPage" />
  <project-pages-list :pages="allPages" :remove-current-page="removePage" />
</template>

<script>
import HeaderApp from "@/components/partials/HeaderApp.vue";
import ProjectPagesPanel from "@/components/sections/ProjectPagesPage/ProjectPagesPanel.vue";
import ProjectPagesList from "@/components/sections/ProjectPagesPage/ProjectPagesList.vue";
import resolveNewItemId from "@/helpers/resolveNewItemId.js";

export default {
  name: 'ProjectPages',
  components: {
    HeaderApp, ProjectPagesPanel, ProjectPagesList
  },
  data() {
    return{
      allPages: [
        {id: 1, title: 'Page', img: '../images/img-1.jpeg'},
        {id: 2, title: 'Page', img: '../images/img-2.jpeg'},
      ]
    }
  },
  methods: {
    addNewPage() {
      let newItemId = resolveNewItemId(this.allPages);
      this.allPages.push({id: newItemId, title: 'Page', img: '../images/img-3.jpeg'})
    },
    removePage(index) {
      this.allPages.splice(index - 1, 1)
    }
  }
}
</script>