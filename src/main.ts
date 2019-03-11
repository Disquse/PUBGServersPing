import Vue from 'vue';

// vuetify
import Vuetify, {
  VApp,
  VToolbar,
  VProgressCircular,
  VCard,
  VLayout,
  VFlex,
  VDivider,
  VChip,
  VSpacer,
  VAvatar,
  VIcon,
  VBtn,
  VDataTable,
  VTooltip,
  VCheckbox,
  VParallax,
  VSnackbar,
  VSelect,
  VDialog,
  VRadioGroup,
  VRadio,
  VSlideYTransition,
} from 'vuetify/lib';
import { Ripple, Scroll } from 'vuetify/es5/directives';
import 'vuetify/src/stylus/app.styl';

Vue.use(Vuetify, {
  iconfont: 'md',
  components: {
    VApp,
    VToolbar,
    VProgressCircular,
    VCard,
    VLayout,
    VFlex,
    VDivider,
    VChip,
    VSpacer,
    VAvatar,
    VIcon,
    VBtn,
    VDataTable,
    VTooltip,
    VCheckbox,
    VParallax,
    VSnackbar,
    VSelect,
    VDialog,
    VRadioGroup,
    VRadio,
    VSlideYTransition,
  },
  directives: {
    Ripple,
    Scroll,
  },
});


// vue configs
Vue.config.productionTip = false;
Vue.config.silent = true;

import i18n from './i18n';
import App from './App.vue';

new Vue({
  i18n,
  render: (h) => h(App),
}).$mount('#app');
