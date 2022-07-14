<template>
  <div>
    <header>
      Q uesto è header
    </header>
    <router-view></router-view>
    <footer>
      Footer
    </footer>
  </div>
</template>

<script>
import Posts from '../components/Posts.vue';

export default {
  name: "App",
  components: {
    Posts
  },
};
</script>

<style>
 
</style>