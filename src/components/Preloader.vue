<template>
  <transition name="fade">
    <div class="preloader" v-show="loading">
      <v-progress-circular
        class="spinner"
        :size="72"
        color="indigo darken-2"
        indeterminate
      >
      </v-progress-circular>
    </div>
  </transition>
</template>

<script lang="ts">
  import { Component, Prop, Vue } from 'vue-property-decorator';

  @Component
  export default class Preloader extends Vue {
    private loading: boolean = true;

    private mounted() {
      setTimeout(() => {
        this.loading = false;
      }, 400);
    }
  }
</script>


<style lang="stylus" scoped>
  .preloader
    position: fixed
    left: 0
    top: 0
    right: 0
    bottom: 0
    background: #FFF
    z-index: 99

  .spinner
    position: absolute;
    left: 50%
    top: 50%
    margin: -32px 0 0 -32px

  .fade-enter-active, .fade-leave-active
    transition: opacity .6s

  .fade-enter, .fade-leave-to
    opacity: 0


</style>
