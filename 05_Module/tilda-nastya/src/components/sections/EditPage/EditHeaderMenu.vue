<template>
    <div
        v-if="modalEditOpen"
        class="edit-menu__overlay"
        @click.stop="hideEditModal"
    />
    <div v-if="modalEditOpen" class="edit-menu__modal">
        <button class="modal-item" @click="showModal">Настройки сайта</button>
        <router-link to="/" class="modal-item">Мои сайты</router-link>
        <router-link to="/profile" class="modal-item">Профиль</router-link>
    </div>
    <project-settings-modal v-model:modal-settings-open="modalVisible" :page="page" />
</template>

<script>
import ProjectSettingsModal from "@/components/modals/ProjectSettingsModal.vue";

export default {
    name: 'EditHeaderMenu',
    components: {
        ProjectSettingsModal
    },
    props: {
        modalEditOpen: {
            type: Boolean,
            default: false
        }
    },
    data() {
        return {
            modalVisible: false,
            page: {
                id: 1,
                title: "Page",
                img: "../images/img-1.jpeg",
            },
        }
    },
    methods: {
        hideEditModal() {
            this.$emit('update:modalEditOpen', false)
        },
        showModal() {
            this.modalVisible = true
        },
    }
}
</script>