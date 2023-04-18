<template>
  <header-app/>
  <projects-header :add-project="addNewProject"/>
  <projects-list :projects="allProjects" :remove-current-project="removeProject"/>
</template>

<script>
import HeaderApp from "@/components/partials/HeaderApp.vue";
import ProjectsHeader from "@/components/sections/ProjectsPage/ProjectsHeader.vue";
import ProjectsList from "@/components/sections/ProjectsPage/ProjectsList.vue";

export default {
  name: 'ProjectsPage',
  components: {
    HeaderApp, ProjectsHeader, ProjectsList
  },
  data() {
    return {
      allProjects: [
        {id: 1, title: 'My project'},
        {id: 2, title: 'My project'},
        {id: 3, title: 'My project'}
      ]
    }
  },
  methods: {
    addNewProject() {
      if (!this.addMissingProject()) {
        this.allProjects.push({id: this.allProjects.length + 1, title: 'My project'})
      }
    },
    addMissingProject() {
      let sortedIds = this.allProjects.map(p => p.id).sort((a, b) => a - b);

      if (sortedIds.length === 0) {
        return false;
      }

      if (sortedIds[0] !== 1) {
        this.allProjects.push({id: 1, title: 'My project'});
        return true;
      }

      for (let index = 0; index < sortedIds.length - 1; index++) {
        let current = sortedIds[index];
        let next = sortedIds[index + 1];
        if (next - current > 1) {
          this.allProjects.push({id: current + 1, title: 'My project'})
          return true;
        }
      }
      return false;
    },
    removeProject(index) {
      this.allProjects.splice(index - 1, 1)
    }
  }
}
</script>