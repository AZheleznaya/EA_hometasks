<template>
  <header class="header">
    <ul class="list-unstyled list">
      <li class="list-item" v-for="link in links">
        <router-link
            :to="link.to"
            class="list-item__link"
        >
          {{ link.title }}
        </router-link>
      </li>
    </ul>
  </header>
</template>

<script>
export default {
  name: 'Header',
  data() {
    return {
      links: [
        {title: 'Home', to: '/'},
        {title: 'About', to: '/about'}
      ]
    }
  }
}
</script>