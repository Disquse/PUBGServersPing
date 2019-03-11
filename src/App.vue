<template>
  <div id="app">
    <Preloader />
    <Background />
    <Header version="4" />
    <Container lang="en" />
  </div>
</template>

<script lang="ts">
  import { Component, Vue } from 'vue-property-decorator';

  import Preloader from './components/Preloader.vue';
  import Background from './components/Background.vue';
  import Header from './components/Header.vue';
  import Container from './components/Container.vue';

  @Component({
    components: {
      Preloader,
      Background,
      Header,
      Container,
    },
  })
  export default class App extends Vue {}
</script>

<style lang="stylus">
  #app
    font-family: Roboto, Helvetica, Arial, sans-serif
</style>
