<template>
    <header-main />
    <project-items-panel :add-page="addNewPage"/>
    <project-items-list :pages="allPages" @remove-page="removePage"/>
</template>

<script>
import HeaderMain from "@/components/partials/HeaderMain.vue";
import ProjectItemsPanel from "@/components/sections/ProjectItemsPage/ProjectItemsPanel.vue";
import ProjectItemsList from "@/components/sections/ProjectItemsPage/ProjectItemsList.vue";
import resolveNewItemId from "@/helpers/resolveNewItemId.js";

export default {
    name: 'ProjectPages',
    components: {
        HeaderMain, ProjectItemsPanel, ProjectItemsList
    },
    data() {
        return {
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