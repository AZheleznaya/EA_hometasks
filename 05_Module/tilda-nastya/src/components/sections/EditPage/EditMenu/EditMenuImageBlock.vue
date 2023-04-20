<template>
    <div class="menu-block">
        <ul class="menu-block__list list-unstyled">
            <edit-menu-item
                v-for="imageBlock in imageBlocks"
                :key="imageBlock.id"
                :item="imageBlock"
            />
        </ul>
    </div>
</template>

<script>
import EditMenuItem from "./EditMenuItem.vue";

export default {
    name: 'EditMenuImageBlock',
    components: {
        EditMenuItem
    },
    data() {
        return {
            imageBlocks: [
                {id: 1, title: "Блок с текстом и фоновой картинкой", description: "Выравнивание текста по центру"},
                {id: 2, title: "Обложка №1", description: "Обложка: заголовок и описание. Выравнивание текста по левому краю"},
                {id: 3, title: "Обложка №2", description: "Обложка: заголовок и описание. Выравнивание текста по центру"},
                {id: 4, title: "Обложка №3", description: "Обложка: заголовок и описание. Выравнивание текста по правому краю"}
            ]
        }
    }
}
</script>