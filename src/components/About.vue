<template>
  <!-- this section shouldn't be translated -->
  <div>
    <h3>Contributions</h3>
    This website is open source and licensed under MIT license. Check this <a :href="publicRepoUrl">GitHub</a> repository for details.
    We would like to merge your improvments. Also you can add your own translation for this website. See <i>./src/locales</i> folder in the GitHub repo.
    <br/><br/>

    <h3>My ping is fine, but game lag!</h3>
    The main problem of PUBG networking is not your ping. There's a lot of reasons why you can have such problems. And there's no way to tell why for sure.
    <br/><br/>

    <h3>Why this website even exist?</h3>
    When this small project was planned initially, there wasn't a way to check your ping directly in-game. And as usual, some people wanted to know their ping.
    <br/><br/>

    <h3>How accurate are those measurements?</h3>
    After the first release, PUBG game servers changed their hosting provider. And sadly we're still using outdated endpoints for some regions.
    However, in 99% of cases your ping would be quite the same, if there's no issues between you and game servers network bridge.
    There's still no any public list of PUBG gameservers IPv4 addresses, we would like to give you as accurate info as we can.
    <br/><br/>

    <h3>How I can suggest a feature or report bug?</h3>
    Use our public <a :href="publicRepoUrl">GitHub</a> repository for such things. See "Issues" section.
    <br/><br/>

    <h3>How to contact you?</h3>
    If it's related to this project, feel free to create an issue in out <a :href="publicRepoUrl">GitHub</a> repository.
    If you want to talk privately, add me in Discord: <i>{{ authorDiscord }}</i>
    <br/><br/>

    <h3>Thanks to:</h3>
    - <b><a href="http://twitch.tv/beastqt">BeastQT</a></b> and <b><a href="http://twitch.tv/asmadey">Asmadey</a></b> for motivating to create this project.
    <br/>
  </div>
</template>

<script lang="ts">
import { Component, Vue } from 'vue-property-decorator';

@Component
export default class About extends Vue {

  public readonly authorDiscord = 'Disquse#1111';

  public readonly publicRepoUrl = 'https://github.com/disquse/pubgserversping';
}
</script>