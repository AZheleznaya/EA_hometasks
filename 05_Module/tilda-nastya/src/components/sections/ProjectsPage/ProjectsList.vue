<template>
    <ul v-if="projects.length" class="projects list-unstyled">
        <project-card
            v-for="(project, index) in projects"
            :index-project="index + 1"
            :key="project.id"
            :project="project"
            @remove-project="removeProject"
        />
        <li class="projects__empty"/>
    </ul>
    <h3 v-else class="empty-projects">Добавьте ваш первый сайт.</h3>
</template>

<script>
import ProjectCard from "./ProjectsList/ProjectCard.vue";

export default {
    name: 'ProjectList',
    emits: ['remove-project'],
    components: {
        ProjectCard
    },
    props: {
        projects: {
            type: Array,
        }
    },
    methods: {
        removeProject(index) {
            this.$emit('remove-project', index)
        }
    }
}
</script>