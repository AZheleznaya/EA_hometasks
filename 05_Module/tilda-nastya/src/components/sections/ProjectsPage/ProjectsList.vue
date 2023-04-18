<template>
  <ul v-if="projects.length" class="projects list-unstyled">
    <project-card
        v-for="(project, index) in projects"
        :index-project="index + 1"
        :key="project.id"
        :project="project"
        :remove-current-project="removeProject"
    />
    <li class="projects__empty" />
  </ul>
  <h3 v-else class="empty-projects">Добавьте ваш первый сайт.</h3>
</template>

<script>
import ProjectCard from "@/components/sections/ProjectsPage/ProjectsList/ProjectCard.vue";

export default {
  name: 'ProjectList',
  components: {
    ProjectCard
  },
  props: {
    projects: {
      type: Array,
    },
    removeCurrentProject: {
      type: Function
    }
  },
  methods: {
    removeProject(index) {
      this.removeCurrentProject(index)
    }
  }
}
</script>