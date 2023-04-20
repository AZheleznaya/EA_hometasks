<template>
    <li class="page">
        <router-link :to="`/project/${$route.params.projectId}/edit/${page.id}`" class="page-left">
            <img :src="page.img" class="page-left__image" alt="image">
            <span class="page-left__title">{{ page.title + " " + page.id }}</span>
        </router-link>
        <div class="page-right">
            <button @click="showModal" class="page-right__settings">
                <svg
                    class="icon"
                    width="14"
                    height="14"
                    aria-hidden="true"
                    role="img"
                >
                    <use href="#settings-icon"/>
                </svg>
                <span class="text">Настройки</span>
            </button>
            <button @click="removePage(indexPage)" class="page-right__trash">
                <svg
                    class="icon"
                    width="14"
                    height="14"
                    aria-hidden="true"
                    role="img"
                >
                    <use href="#trash-icon"/>
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
    name: 'ProjectItem',
    components: {
        ProjectSettingsModal
    },
    props: {
        indexPage: Number,
        page: {
            type: Object,
        }
    },
    data() {
        return {
            modalVisible: false
        }
    },
    methods: {
        removePage(index) {
            this.$emit('remove-page', index)
        },
        showModal() {
            this.modalVisible = true
        }
    }
}
</script>