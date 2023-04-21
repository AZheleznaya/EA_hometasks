<template>
    <div v-if="modalOpen" @click.stop="hideModal" class="overlay"/>
    <div @click.stop v-if="modalOpen" class="moreModal">
        <h4 class="moreModal-title">Настройки сайта</h4>
        <ul class="moreModal-list list-unstyled">
            <li class="moreModal-list__item">
                <button class="item-button">Переименовать</button>
            </li>
            <li class="moreModal-list__item">
                <button @click="removeProject" class="item-button">Удалить</button>
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    name: 'ProjectCardMenu',
    emits: ['remove-project'],
    props: {
        indexProject: Number,
        modalOpen: {
            type: Boolean,
            default: false
        },
    },
    methods: {
        hideModal() {
            this.$emit('update:modalOpen', false)
        },
        removeProject() {
            this.$emit('remove-project', this.indexProject)
        }
    },
}
</script>