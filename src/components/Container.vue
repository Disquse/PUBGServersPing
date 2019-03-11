<template>
  <div>
    <v-dialog v-model="localeDialog" max-width="390">
      <v-card class="dialog-panel">
        <v-card-title class="headline">
          {{ $t('locale-button') }}
        </v-card-title>
        <v-divider class="dialog-divider"></v-divider>

        <v-card-text>
          <v-radio-group v-model="$i18n.locale" :mandatory="false">
            <v-radio
              v-for="locale in locales"
              :key="locale"
              :label="getLocaleName(locale) + ' by ' + getLocaleAuthor(locale)"
              :value="locale"
            ></v-radio>
          </v-radio-group>
        </v-card-text>

        <v-card-actions>
          <v-spacer></v-spacer>
          <v-btn color="blue darken-1" flat @click="showLocaleDialog(false); saveLocale()">
            {{ $t('close-button') }}
          </v-btn>
        </v-card-actions>
      </v-card>
    </v-dialog>

    <v-dialog v-model="aboutDialog" max-width="600">
      <v-card class="dialog-panel">
        <v-card-title class="headline">
          {{ $t('about-button') }}
        </v-card-title>
        <v-divider class="dialog-divider"></v-divider>

        <v-card-text>
          <h3>Contributions</h3>
          This website is open sourced under MIT license. Check this <a href="https://github.com/disquse/pubgserversping">GitHub</a> repository.
          We would like to merge your improvments. Also you can add your own translation for the website. Checkout <i>./src/locales</i> folder.
          <br/><br/>

          <h3>I experiencing lags, but my ping is fine!</h3>
          Main problem of the PUBG is not a ping. There's alot reasons why you can have such problems. And there's no way to tell why for sure.
          <br/><br/>

          <h3>Why this website exist?</h3>
          There's no way to check your ping directly in-game. And some people are actually finding this information helpful. Why not then?
          <br/><br/>

          <h3>How accurate are the measurements?</h3>
          Some time after the first website release, PUBG gameservers was moved to the other locations. Our website is using outdated data for some regions.
          However, in 99% cases your measurements would be quite the same, if there's no issues between you and gameservers network bridge.
          There's still no any public list of PUBG gameservers IPv4 addresses, we would like to give you as accurate info as we can. But currently it's not possible.
          <br/><br/>

          <h3>How I can suggest a feature or report bug?</h3>
          Use our public <a href="https://github.com/disquse/pubgserversping">GitHub</a> repository for such things.
          <br/><br/>

          <h3>How to contact you?</h3>
          If it's related to the project, feel free to create an issue in out <a href="https://github.com/disquse/pubgserversping">GitHub</a> repository.
          If you want to talk privately, add me in Discord: <i>Disquse#1429</i>
          <br/><br/>

          <h3>Thanks to:</h3>
          - <b><a href="http://twitch.tv/beastqt">BeastQT</a></b> and <b><a href="http://twitch.tv/asmadey">Asmadey</a></b> for motivating to create this project.
          <br/>

          <span v-for="locale in locales" :key="locale">
            <a v-if="locale != 'en'">
              - <b>{{ getLocaleAuthor(locale) }}</b> for the localization ({{ getLocaleName(locale) }}).
              <br/>
            </a>
          </span>
        </v-card-text>

        <v-card-actions>
          <v-spacer></v-spacer>
          <v-divider class="dialog-divider"></v-divider>
          <v-btn color="blue darken-1" flat @click="showAboutDialog(false)">
            {{ $t('close-button') }}
          </v-btn>
        </v-card-actions>
      </v-card>
    </v-dialog>

    <v-snackbar
      v-model="snackbarState"
      :timeout="3000"
      right="true"
      top="true"
      dark
    >
      {{ snackbarText }}
      <v-btn
        dark
        flat
        icon
        color="red"
        @click="snackbarState = false"
      >
        <v-icon>close</v-icon>
      </v-btn>
    </v-snackbar>

    <v-layout data-app justify-center class="main-container">
      <v-card min-width="640px" max-width="1200px" width="60vw">
        <v-card-title primary-title>
          <div class="public-message" v-html="$t('public-message')"></div>

          <v-divider></v-divider>
          <v-layout align-content-center justify-center style="padding-top:10px">
            <v-btn dark color="indigo darken-2" @click="showAboutDialog(true)">
              {{ $t('about-button') }}
            </v-btn>
            <v-btn dark color="indigo darken-2" @click="showLocaleDialog(true)">
              {{ $t('locale-button') }}
            </v-btn>
            <v-btn dark color="indigo darken-2" @click="clearAllServerResults()">
              {{ $t('clear-button') }}
            </v-btn>
            <v-btn dark color="green" @click="pingSelectedServers()" :loading="isPinging">
              {{ $t('ping-button') }}
            </v-btn>
          </v-layout>

          <v-container style="padding: 10px;">
            <v-data-table
              v-model="selected"
              :value="selected"
              :headers="tableHeaders"
              :items="servers"
              item-key="name"
              disable-initial-sort="true"
              hide-actions
              select-all
            >
              <template slot="no-data">
                <v-layout justify-space-around>
                  <span class="subheading">
                    {{ $t('something-is-broken') }}
                  </span>
                </v-layout>
              </template>

              <template slot="items" slot-scope="props">
                <td>
                  <v-checkbox
                    v-model="props.selected"
                    primary
                    hide-details
                  ></v-checkbox>
                </td>
                <td>{{ props.item.name }}</td>
                <td class="text-xs-left" v-html="getServerSummarizedPing(props.item)" style="width: 25%"></td>
                <td class="text-xs-right" v-html="getServerMinimalPing(props.item)"></td>
                <td class="text-xs-right" v-html="getServerMaximalPing(props.item)"></td>
                <td class="text-xs-right" v-html="getServerAveragePing(props.item)"></td>
                <td class="justify-center layout px-0">
                  <v-btn :disabled="isPinging" flat icon color="green" @click="pingServer(props.item)">
                    <v-icon>play_circle_filled</v-icon>
                  </v-btn>
                  <v-btn
                    :disabled="isPinging || isServerResultsEmpty(props.item)"
                    @click="clearServerResults(props.item)"
                    color="red"
                    flat
                    icon
                  >
                    <v-icon>delete</v-icon>
                  </v-btn>
                </td>
              </template>
            </v-data-table>
          </v-container>
        </v-card-title>
      </v-card>
    </v-layout>
  </div>
</template>

<script lang="ts">
import { Component, Vue } from 'vue-property-decorator';
import { servers, IServerData, ServerRegions} from '../configs/servers';
import { setTimeout, setInterval } from 'timers';

export interface IServerResults {
  name: string;
  pings: number[];
}

// TODO: maybe vuetify already has such typings?
export interface ITableHeader {
  text: string;
  sortable?: boolean;
  align?: string;
  value: string;
}

@Component({})
export default class Container extends Vue {

  // TODO: sorting
  public readonly tableHeaders: ITableHeader[] = [
    {
      text: 'Server',
      sortable: false, // true
      align: 'left',
      value: 'name',
    },
    {
      text: 'Latency',
      sortable: false,
      align: 'left',
      value: 'latency',
    },
    {
      text: 'Min',
      sortable: false, // true
      align: 'right',
      value: 'min',
    },
    {
      text: 'Max',
      sortable: false, // true
      align: 'right',
      value: 'max',
    },
    {
      text: 'Average',
      sortable: false, // true
      align: 'right',
      value: 'average',
    },
    {
      text: 'Actions',
      align: 'right',
      sortable: false,
      value: 'actions',
    },
  ];

  public readonly WORST_PING: number = 300;
  public readonly MAX_RESULTS: number = 16;
  public readonly TIMEOUT_DELAY: number = 8000;

  public servers: IServerData[] = servers;
  public selected: any = [];

  public isPinging: boolean = false;
  public results: IServerResults[] = [];

  public snackbarState: boolean = false;
  public snackbarText: string = '';

  public locales: string[] = [];

  public localeDialog: boolean = false;
  public aboutDialog: boolean = false;

  public mounted() {
    this.initLocales();
    this.initSelected();
    this.initEvents();
  }

  /**
   * Show snackbar with text.
   * @param {string} text - snackbar text
   * @returns {void}
   */
  public showSnackbar(text: string): void {
    this.snackbarText = text;
    this.snackbarState = true;
  }

  /**
   * Show about dialog.
   * @param {boolean} state - dialog state
   * @returns {void}
   */
  public showAboutDialog(state: boolean): void {
    this.aboutDialog = state;
  }

  /**
   * Show locale dialog.
   * @param {boolean} state - dialog state
   * @returns {void}
   */
  public showLocaleDialog(state: boolean): void {
    this.localeDialog = state;
  }

  /**
   * Saves current locale to localStorate.
   * @returns {void}
   */
  public saveLocale(): void {
    localStorage.setItem('locale', this.$i18n.locale);
  }

  /**
   * Returns locale name from the localization package. Return locale id if fails.
   * @param {string} id - locale id
   * @returns {string}
   */
  public getLocaleName(id: string): string {
    return this.$i18n.messages[id]['locale-name'].toString() || id;
  }

  /**
   * Returns locale author from the localization package. Return locale id if fails.
   * @param {string} id - locale id
   * @returns {string}
   */
  public getLocaleAuthor(id: string): string {
    return this.$i18n.messages[id]['locale-author'].toString() || 'Unknown';
  }

  /**
   * Returns is current server selected.
   * @param {IServerData} server - server data
   * @returns {boolean}
   */
  public isServerSelected(server: IServerData): boolean {
    const isSelected: any = this.selected.find((srv: any) => srv.name === server.name);
    return !!isSelected;
  }

  /**
   * Returns summarized and formatted server data.
   * @param {IServerData} server - server data
   * @returns {string}
   */
  public getServerSummarizedPing(server: IServerData): string {
    const serverResults: IServerResults | undefined = this.getServerResults(server);

    if (!serverResults) {
      return '';
    }

    const formatted: string[] = [];

    for (const num of serverResults.pings) {
      const colored: string = this.formatPing(num);
      formatted.push(colored);
    }

    return formatted.join(' ');
  }

  /**
   * Returns server minimal formatted ping data.
   * @param {IServerData} server - server data
   * @returns {string}
   */
  public getServerMinimalPing(server: IServerData): string {
    const serverResults: IServerResults | undefined = this.getServerResults(server);

    if (!serverResults) {
      return '';
    }

    const value: number = Math.min(...serverResults.pings);
    return this.formatPing(value);
  }


  /**
   * Returns server maximal formatted ping data.
   * @param {IServerData} server - server data
   * @returns {string}
   */
  public getServerMaximalPing(server: IServerData): string {
    const serverResults: IServerResults | undefined = this.getServerResults(server);

    if (!serverResults) {
      return '';
    }

    const value: number = Math.max(...serverResults.pings);
    return this.formatPing(value);
  }


  /**
   * Returns server average formatted ping data.
   * @param {IServerData} server - server data
   * @returns {string}
   */
  public getServerAveragePing(server: IServerData): string {
    const serverResults: IServerResults | undefined = this.getServerResults(server);

    if (!serverResults) {
      return '';
    }

    const value: number = serverResults.pings.reduce((f: number, t: number ) => f + t, 0) / serverResults.pings.length;
    return this.formatPing(Math.floor(value));
  }


  /**
   * Ping server and store retults.
   * @param {IServerData} server - server data
   * @returns {void}
   */
  public async pingServer(server: IServerData): Promise<void> {
    if (this.isPinging) {
      return;
    }

    this.isPinging = true;
    await this.tryPingServer(server, true);
    this.isPinging = false;
  }

  /**
   * Ping all selected servers and store the results.
   * @returns {void}
   */
  public async pingSelectedServers(): Promise<void> {
    if (this.isPinging) {
      return;
    }

    if (this.selected.length === 0) {
      this.showSnackbar(this.$t('no-selected-servers').toString());
      return;
    }

    this.isPinging = true;
    for (const server of this.servers) {
      if (this.isServerSelected(server)) {
        await this.tryPingServer(server, true);
      }
    }

    this.isPinging = false;
  }

  /**
   * Clear server results.
   * @param {IServerData} server - server data
   * @returns {void}
   */
  public clearServerResults(server: IServerData): void {
    const serverResults: IServerResults | undefined = this.getServerResults(server);

    if (serverResults) {
      serverResults.pings = [];
    }
  }

  /**
   * Clear all results.
   * @returns {void}
   */
  public clearAllServerResults(): void {
    for (const id in this.results) {
      this.results[id].pings = [];
    }
  }

  /**
   * Returns is server has no stored results.
   * @param {IServerData} server - server data
   * @returns {boolean}
   */
  public isServerResultsEmpty(server: IServerData): boolean {
    const serverResults: IServerResults | undefined = this.getServerResults(server);

    return (!serverResults || serverResults.pings.length <= 0);
  }

  /**
   * Returns server results data.
   * @returns {IServerResults|undefined}
   */
  private getServerResults(server: IServerData): IServerResults | undefined {
    return this.results.find((r: any) => r.name === server.name);
  }

  /**
   * Returns a formated ping string with color.
   * @param {number} ping - ping value
   * @returns {string}
   */
  private formatPing(ping: number): string {
    if (!isFinite(ping)) {
      return '';
    }

    let coef: number = (ping / this.WORST_PING);
    coef = (coef < 0) ? 0 : (coef > 1) ? 1 : coef;

    const red: number = Math.floor(255 * coef);
    const green: number = 255 - red;

    return `<span class="ping-number" style="color: rgb(${red}, ${green}, 0)">${ping}</span>`;
  }

  /**
   * Returns a formated ping string with color.
   * @param {IServerData} server - server data
   * @param {boolean?} shouldSave - if true, saves ping results
   * @returns {Promise}
   */
  private async tryPingServer(server: IServerData, shouldSave?: boolean): Promise<number> {
    const ping: number = await this.pingEndpoint(server.endpoint);

    shouldSave = (typeof shouldSave === 'undefined') ? true : shouldSave;
    if (shouldSave) {
      this.storeServerResult(server, ping);
    }

    return new Promise<number>((r: any): any => r(ping));
  }

  /**
   * Returns ping to endpoind address, -1 if not succeeded.
   * @param {string} address - endpoind address
   * @returns {Promise}
   */
  private async pingEndpoint(address: string): Promise<number> {
    return new Promise<number>((r: any): void => {
      const randomHash: string = Math.floor(Math.random() * 0xFFFFFFFFFFFFFFFF).toString(36);
      const requestURL: string = `${address}/ping?x=${randomHash}`;

      const element: HTMLImageElement = new Image();
      const startTime: number = Date.now();
      const finish: any = () => r(Date.now() - startTime);

      element.onload = finish;
      element.onerror = finish;
      element.src = requestURL;

      setTimeout(() => r(-1), this.TIMEOUT_DELAY);
    });
  }

  /**
   * Stores server results.
   * @param {IServerData} server - server data
   * @param {number} ping - ping results
   * @returns {void}
   */
  private storeServerResult(server: IServerData, ping: number): void {
    if (ping <= -1) {
      // notify
      return;
    }

    const serverResults: IServerResults | undefined = this.results.find((r: any) => r.name === server.name);
    if (serverResults) {
      serverResults.pings.push(ping);

      if (serverResults.pings.length > this.MAX_RESULTS) {
        serverResults.pings.shift();
      }
    } else {
      const newResults: IServerResults = {
        name: server.name,
        pings: [ping],
      };

      this.results.push(newResults);
    }
  }

  /**
   * Initializes selected servers loader and saved.
   * @returns {void}
   */
  private initSelected(): void {
    const savedSelections: string | null = localStorage.getItem('selected');
    if (savedSelections) {
      const saved: any = JSON.parse(savedSelections);

      for (const server of saved) {
        const isValid: any = this.servers.find((srv: any) => srv.name === server.name);

        if (isValid) {
          this.selected.push(server);
        }
      }

      this.$forceUpdate();
    }

    setInterval(() => {
      localStorage.setItem('selected', JSON.stringify(this.selected));
    }, 5000);
  }

  /**
   * Initializes website locales.
   * @returns {void}
   */
  private initLocales(): void {
    for (const lang in this.$i18n.messages) {
      this.locales.push(lang);
    }

    const savedLocale: string | null = localStorage.getItem('locale');
    if (savedLocale) {
      this.$i18n.locale = savedLocale;
    }
  }

  /**
   * Initializes internal event listeners.
   * @returns {void}
   */
  private initEvents(): void {
    this.$root.$on('requestClearAll', () => {
      this.clearAllServerResults();
    });

    this.$root.$on('requestPingSelected', () => {
      if (!this.isPinging) {
        this.pingSelectedServers();
      }
    });
  }
}
</script>

<style lang="stylus" scoped>
  .public-message
    width: 100%
    text-align: center
    font-size: 16px
    font-weight: 600
    padding: 20px 60px

  .main-container
    padding-top: 100px

  .dialog-panel
    padding: 20px

  .dialog-divider
    margin-top: 10px
    margin-bottom 15px
</style>
