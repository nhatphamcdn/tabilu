import './bootstrap';
import Vue from 'vue';

import router from '@client/router';
import store from '@client/store';

// Component File
import App from '@client/views/App';

const app = new Vue({
  store,
  router,
  ...App
});

export default app;