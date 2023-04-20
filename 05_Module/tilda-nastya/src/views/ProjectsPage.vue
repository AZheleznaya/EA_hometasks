<template>
    <header-main />
    <projects-header :add-project="addNewProject"/>
    <projects-list :projects="allProjects" @remove-project="removeProject"/>
</template>

<script>
import HeaderMain from "@/components/partials/HeaderMain.vue";
import ProjectsHeader from "@/components/sections/ProjectsPage/ProjectsHeader.vue";
import ProjectsList from "@/components/sections/ProjectsPage/ProjectsList.vue";
import resolveNewItemId from "@/helpers/resolveNewItemId.js";

export default {
    name: 'ProjectsPage',
    components: {
        HeaderMain, ProjectsHeader, ProjectsList
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
            let newItemId = resolveNewItemId(this.allProjects);
            this.allProjects.push({id: newItemId, title: 'My project'})
        },
        removeProject(index) {
            this.allProjects.splice(index - 1, 1)
        }
    }
}
</script>