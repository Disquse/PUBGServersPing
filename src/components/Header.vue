<template>
  <v-toolbar fixed color="indigo darken-2" v-scroll="onScroll">
    <v-toolbar-title class="headline white--text">
      {{ $t('header-title') }}
    </v-toolbar-title>
    <v-spacer></v-spacer>

    <v-slide-y-transition class="py-0" tag="div">
      <div class="hidden-sm-and-down" v-if="showButtons">
        <v-btn dark outline color="grey lighten-2" @click="callClearAll()">
          {{ $t('clear-button') }}
        </v-btn>
        <v-btn dark outline color="grey lighten-2" @click="callPingSelected()">
          {{ $t('ping-button') }}
        </v-btn>
      </div>
    </v-slide-y-transition>

    <v-spacer></v-spacer>
    <v-toolbar-items class="hidden-xs-only">
      <span class="prefix white--text">
        With <v-icon>favorite</v-icon> by
      </span>

      <v-chip small disabled color="rgba(0, 0, 0, 0.1)">
        <v-avatar>
          <img :src="author.avatar" alt=":)">
        </v-avatar>
        <a class="white--text">
          {{ author.nickname }}
        </a>
      </v-chip>
    </v-toolbar-items>
  </v-toolbar>
</template>

<script lang="ts">
import { Component, Prop, Vue } from 'vue-property-decorator';

export interface IAuthor {
  avatar: string;
  nickname: string;
}

@Component
export default class Header extends Vue {
  public showButtons: boolean = false;
  @Prop() private version!: number;

  private readonly author: IAuthor = {
    avatar: 'https://pubg.disquse.ru/images/avatar.jpg',
    nickname: 'Disquse',
  };

  /**
   * Enabled header buttons if main is hidden while scrolling.
   * @returns {void}
   */
  public onScroll(e: any): void {
    this.showButtons = (e.pageY > 165);
  }

  /**
   * Sends event that request clear all action from Container.
   * @returns {void}
   */
  public callClearAll(): void {
    this.$root.$emit('requestClearAll');
  }

  /**
   * Sends event that request ping selected servers action from Container.
   * @returns {void}
   */
  public callPingSelected(): void {
    this.$root.$emit('requestPingSelected');
  }
}
</script>

<style lang="stylus" scoped>
  v-toolbar-title, a
    cursor: default

  .author
    background-color: rgba(0, 0, 0, .3)

  .prefix
    opacity: .7 !important
    padding-right: 8px

  .v-icon
    font-size: 18px !important
    color: red
</style>
