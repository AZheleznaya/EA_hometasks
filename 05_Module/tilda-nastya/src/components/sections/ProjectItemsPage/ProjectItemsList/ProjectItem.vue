<template>
    <li class="page">
        <router-link :to="`/project/${$route.params.projectId}/edit/${page.id}`" class="page-left">
            <img :src="itemImage" class="page-left__image" alt="image">
            <span class="page-left__title">{{ itemName }}</span>
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
            <button @click="removePage" class="page-right__trash">
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
        <project-settings-modal
            v-model:modal-settings-open="modalVisible"
            :page="page"
            @change-title="changeTitle"
            @save-image="saveActiveImage"
        />
    </li>
</template>

<script>
import ProjectSettingsModal from "@/components/modals/ProjectSettingsModal.vue";

export default {
    name: 'ProjectItem',
    emits: ['change-title', 'save-image'],
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
            modalVisible: false,
            itemName: this.page.title + " " + this.page.id,
            itemImage: this.page.img,
        }
    },
    methods: {
        removePage() {
            this.$emit('remove-page', this.indexPage)
        },
        showModal() {
            this.modalVisible = true
        },
        changeTitle(title) {
            this.itemName = title;
        },
        saveActiveImage(image) {
            this.itemImage = image;
        }
    }
}
</script>