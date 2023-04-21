<template>
    <div class="project-panel">
        <div class="container">
            <div class="project-panel__top">
                <button @click="showModal" class="add-domain">
                    <span class="add-domain__icon">
                        <img src="@/assets/images/svg/domain.svg" alt="domain-icon">
                    </span>
                    <span class="add-domain__text">Подключить домен</span>
                </button>
                <button class="project-url">
                    <svg
                        class="url-icon"
                        width="14"
                        height="14"
                        role="img"
                    >
                        <use xlink:href="#external-icon"/>
                    </svg>
                    <span class="project-url__title">Адрес сайта&colon;</span>
                    <span class="project-url__text">http://project1234567.tilda.ws</span>
                </button>
            </div>
            <div class="project-panel__bottom">
                <h2 class="project-title">My project</h2>
                <button @click="addNewPage" class="add-page">
                    <span class="add-page__icon">
                        <img src="@/assets/images/svg/plus.svg" alt="add-icon">
                    </span>
                    <span class="add-page__text">Создать новую страницу</span>
                </button>
            </div>
        </div>
        <project-domain-modal
            v-model:modal-domain-open="modalVisible"
        />
    </div>
</template>

<script>
import ProjectDomainModal from "@/components/modals/ProjectDomainModal.vue";

export default {
    name: 'ProjectItemsPanel',
    components: {
        ProjectDomainModal
    },
    data() {
        return {
            modalVisible: false
        }
    },
    methods: {
        addNewPage() {
            this.$emit('addPage')
        },
        showModal() {
            this.modalVisible = true;
        }
    }
}
</script>