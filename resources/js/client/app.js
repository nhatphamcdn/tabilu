import './bootstrap';

import Vue from 'vue';

// Route information for Vue Router
import Routes from './resources/routes';

// Component File
import App from './views/App';

const app = new Vue({
  el: '#app',
  router: Routes,
  render: createElement => createElement(App),
});

export default app;