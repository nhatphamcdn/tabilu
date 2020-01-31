/** Import Core */
import Vue from 'vue';
import VueRouter from 'vue-router';

/** Import Component */
import Home from '@/components/Home';
import Product from '@/components/Product';

Vue.use(VueRouter);

const router = new VueRouter({
  mode: 'history',
  routes: [
    {
      path: '/',
      name: 'home',
      component: Home
    },
    {
      path: '/products',
      name: 'products',
      component: Product
    },
  ]
});

export default router;