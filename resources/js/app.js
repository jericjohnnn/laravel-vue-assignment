import './bootstrap';
import '../css/app.css';

import { MotionPlugin } from '@vueuse/motion'
import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'
import { ZiggyVue } from '../../vendor/tightenco/ziggy'

// VUETIFY IMPORTS
import 'vuetify/styles';
import { createVuetify } from 'vuetify';
import * as components from 'vuetify/components';
import * as directives from 'vuetify/directives';

const vuetify = createVuetify({
  components,
  directives,
});

createInertiaApp({
  resolve: name => {
    const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
    return pages[`./Pages/${name}.vue`]
  },
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(vuetify) //VUETIFY
      .use(ZiggyVue) //ZIGGYVUE
      .use(MotionPlugin) //USEMOTION
      .use(plugin)
      .mount(el)
  },
})
