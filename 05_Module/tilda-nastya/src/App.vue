<template>
  <router-view />
  <svg-library-app />
</template>

<script>
import SvgLibraryApp from "@/components/global/SvgLibraryApp.vue";

export default {
  name: "App",
  components: {
    SvgLibraryApp,
  }
}
</script>