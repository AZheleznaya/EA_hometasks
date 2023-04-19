<template>
  <div
      v-if="modalSettingsOpen"
      @click.stop="hideSettingsModal()"
      class="settings-overlay"
  />
  <div v-if="modalSettingsOpen" class="settings-content">
    <div class="settings-content__head">
      <div class="head-content__top">
        <h4 class="settings-title">Настройки страницы</h4>
        <button @click.stop="hideSettingsModal()" class="settings-button" />
      </div>
      <div class="head-content__tabs">
        <button
            v-for="tab in tabs.list"
            :key="tab.id"
            class="tabs-item"
        >
          {{ tab.title }}
        </button>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'ProjectSettingsModal',
  props: {
    modalSettingsOpen: {
      type: Boolean,
      default: false
    }
  },
  data() {
    return {
      tabs: {
        active: "Главное",
        list: [
          {id: 1, title: "Главное"},
          {id: 2, title: "Бейджик"}
        ]
      }
    }
  },
  methods: {
    hideSettingsModal() {
      this.$emit('update:modalSettingsOpen', false)
    }
  }
}
</script>