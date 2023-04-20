<template>
    <div class="menu-block">
        <ul class="menu-block__list list-unstyled">
            <edit-menu-item
                v-for="textBlock in textBlocks"
                :key="textBlock.id"
                :item="textBlock"
            />
        </ul>
    </div>
</template>

<script>
import EditMenuItem from "./EditMenuItem.vue";

export default {
    name: 'EditMenuTextBlock',
    components: {
        EditMenuItem,
    },
    data() {
        return {
            textBlocks: [
                {id: 1, title: "Блок с текстом", description: "Выравнивание текста по левому краю"},
                {id: 2, title: "Блок с текстом", description: "Выравнивание текста по центру"},
                {id: 3, title: "Заголовок", description: "Заголовок, подзаголовок и текст. Выравнивание по центру"},
                {id: 4, title: "Заголовок", description: "Заголовок, подзаголовок и текст. Выравнивание по левому краю"}
            ]
        }
    }
}
</script>