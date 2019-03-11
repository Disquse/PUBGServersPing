<template>
  <div
    class="background"
    :style="{ background: currentBackground }"
  >
  </div>
</template>

<script lang="ts">
  import { Component, Model, Vue } from 'vue-property-decorator';
  import { backgrounds } from '../configs/backgrounds';

  @Component({})
  export default class Background extends Vue {
    @Model() private internalBackground: string = backgrounds[Math.floor(Math.random() * backgrounds.length)];

    /**
     * Formatted background css style.
     * @returns {string}
     */
    get currentBackground(): string {
      return `url(${this.internalBackground}) no-repeat center center fixed`;
    }
  }
</script>

<style lang="stylus" scoped>
  .background
    z-index: -99
    position: fixed
    width: 100%
    height: 100%
    background-size: cover !important
</style>
