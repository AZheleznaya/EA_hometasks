<template>
    <header-edit />
    <edit-blocks :blocks="blocks" />
</template>

<script>
import HeaderEdit from "@/components/partials/HeaderEdit.vue";
import EditBlocks from "@/components/sections/EditPage/EditBlocks.vue";

export default {
    name: 'EditPage',
    components: {
        EditBlocks, HeaderEdit
    },
    data() {
        return {
            blocks: [],
        }
    }
}
</script>