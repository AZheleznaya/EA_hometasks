<template>
    <div class="blocks">
        <button
            v-if="!blocks.length"
            @click="showModal"
            class="blocks-button"
        >
            Добавить запись
        </button>
    </div>
    <edit-block-text />
    <edit-block-image />
    <edit-menu v-model:modal-menu-open="modalVisible" />
</template>

<script>
import EditMenu from "./EditMenu.vue";
import EditBlockText from "./EditBlocks/EditBlockText.vue";
import EditBlockImage from "./EditBlocks/EditBlockImage.vue";

export default {
    name: 'EditBlocks',
    components: {
        EditMenu, EditBlockText, EditBlockImage
    },
    props: {
        blocks: {
            type: Array
        }
    },
    data() {
        return {
            modalVisible: false,
        }
    },
    methods: {
        showModal() {
            this.modalVisible = true
        }
    }
}
</script>