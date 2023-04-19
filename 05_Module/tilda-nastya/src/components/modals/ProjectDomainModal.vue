<template>
  <div
      v-if="modalDomainOpen"
      @click.stop="hideDomainModal()"
      class="domain-overlay"
  />
  <div v-if="modalDomainOpen" class="domain-content">
    <div class="modal-domain__head">
      <h4 class="head-title">Подключить домен</h4>
      <button @click.stop="hideDomainModal()" class="head-button" />
    </div>
    <div class="modal-domain__body">
      <label for="input-body" class="body-label">Домен</label>
      <input
          v-model="inputValue"
          id="input-body"
          class="body-input"
          type="text"
          placeholder="project1234567.tilda.ws"
      >
    </div>
    <div class="modal-domain__footer">
      <button @click.stop="hideDomainModal()" class="footer-button">Сохранить</button>
    </div>
  </div>
</template>

<script>
export default {
  name: 'ProjectDomainModal',
  props: {
    modalDomainOpen: {
      type: Boolean,
      default: false
    }
  },
  data() {
    return {
      inputValue: '',
    }
  },
  methods: {
    hideDomainModal() {
      this.$emit('update:modalDomainOpen', false)
    }
  }
}
</script>