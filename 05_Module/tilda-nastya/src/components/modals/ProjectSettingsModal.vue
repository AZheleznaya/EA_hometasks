<template>
    <transition-group name="settings">
        <div
            v-if="modalSettingsOpen"
            @click.stop="hideSettingsModal"
            class="settings-overlay"
        />
        <div v-if="modalSettingsOpen" class="settings-content">
            <div class="settings-content__head">
                <div class="head-content__top">
                    <h4 class="settings-title">Настройки страницы</h4>
                    <button @click.stop="hideSettingsModal" class="settings-button"/>
                </div>
                <div class="head-content__tabs">
                    <button
                        v-for="tab in tabs.list"
                        :key="tab.id"
                        @click="tabs.active = tab.tabName"
                        :class="{'active': tabs.active === tab.tabName}"
                        class="tabs-item"
                    >
                        {{ tab.title }}
                    </button>
                </div>
            </div>
            <div class="settings-content__body">
                <component
                    :is="tabs.active"
                    :page="page"
                    @change-title="changeTitle"
                    @save-image="saveActiveImage"
                    @close-modal="hideSettingsModal"
                />
            </div>
        </div>
    </transition-group>
</template>

<script>
import ProjectItemSettingsMain from "@/components/sections/ProjectItemsPage/ProjectItemsList/ProjectItemSettings/ProjectItemSettingsMain.vue";
import ProjectItemSettingsImage from "@/components/sections/ProjectItemsPage/ProjectItemsList/ProjectItemSettings/ProjectItemSettingsImage.vue";

export default {
    name: 'ProjectSettingsModal',
    emits: ['change-title', 'save-image', 'close-modal'],
    components: {
        ProjectItemSettingsMain, ProjectItemSettingsImage
    },
    props: {
        modalSettingsOpen: {
            type: Boolean,
            default: false
        },
        page: {
            type: Object
        },
    },
    data() {
        return {
            tabs: {
                active: "ProjectItemSettingsMain",
                list: [
                    {id: 1, title: "Главное", tabName: "ProjectItemSettingsMain"},
                    {id: 2, title: "Бейджик", tabName: "ProjectItemSettingsImage"}
                ]
            }
        }
    },
    methods: {
        hideSettingsModal() {
            this.$emit('update:modalSettingsOpen', false)
        },
        changeTitle(title) {
            this.$emit('change-title', title)
        },
        saveActiveImage(image) {
            this.$emit('save-image', image);
        }
    }
}
</script>