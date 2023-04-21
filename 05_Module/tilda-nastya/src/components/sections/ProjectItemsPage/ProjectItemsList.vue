<template>
    <div class="pages">
        <h5 class="pages-title">Страницы сайта:</h5>
        <ul v-if="pages.length" class="pages-list list-unstyled">
            <project-item
                v-for="(page, index) in pages"
                :index-page="index + 1"
                :key="page.id"
                :page="page"
                @remove-page="removeProject"
            />
        </ul>
        <h3 v-else class="pages-empty">Добавьте первую страницу.</h3>
    </div>
</template>

<script>
import ProjectItem from "./ProjectItemsList/ProjectItem.vue";

export default {
    name: 'ProjectItemsList',
    components: {
        ProjectItem,
    },
    props: {
        indexPage: Number,
        pages: {
            type: Array,
        }
    },
    methods: {
        removeProject(index) {
            this.$emit('remove-page', index)
        }
    }
}
</script>