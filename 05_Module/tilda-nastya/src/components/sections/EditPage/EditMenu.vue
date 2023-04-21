<template>
    <transition-group name="modal">
        <div
            v-if="modalMenuOpen"
            @click.stop="hideMenuModal"
            class="menu-overlay"
        />
        <div v-if="modalMenuOpen" @click.stop class="menu-content">
            <div class="menu-content__top">
                <input
                    v-model="inputValue"
                    id="search-input"
                    class="top-input"
                    type="text"
                    placeholder="Библиотека блоков"
                >
                <button class="button-search">
                    <svg
                        class="icon"
                        width="20"
                        height="20"
                        aria-hidden="true"
                        role="img"
                    >
                        <use href="#search-icon" />
                    </svg>
                </button>
                <button @click.stop="hideMenuModal" class="button-close" />
            </div>
            <div class="menu-content__tabs">
                <button
                    v-for="tab in tabs.list"
                    :key="tab.id"
                    @click="tabs.activeTab = tab.tabName"
                    :class="{'active': tabs.activeTab === tab.tabName}"
                    class="tabs-item"
                >
                    {{ tab.title }}
                </button>
            </div>
            <component :is="tabs.activeTab" />
        </div>
    </transition-group>
</template>

<script>
import EditMenuTextBlock from "./EditMenu/EditMenuTextBlock.vue";
import EditMenuImageBlock from "./EditMenu/EditMenuImageBlock.vue";

export default {
    name: 'EditMenu',
    components: {
        EditMenuImageBlock, EditMenuTextBlock
    },
    props: {
        modalMenuOpen: {
            type: Boolean,
            default: false
        }
    },
    data() {
        return {
            inputValue: '',
            tabs: {
                activeTab: 'EditMenuTextBlock',
                list: [
                    {id: 1, title: 'Текстовые блоки', tabName: 'EditMenuTextBlock'},
                    {id: 2, title: 'Обложки', tabName: 'EditMenuImageBlock'},
                ]
            }
        }
    },
    methods: {
        hideMenuModal() {
            this.$emit('update:modalMenuOpen', false);
        }
    }
}
</script>