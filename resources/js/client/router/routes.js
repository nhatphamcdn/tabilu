const page = (path) => {
  return () => import(`@client/pages/${path}.vue`).then(m => m.default || m);
}

export default [
  { path: '/', name: 'home', component: page('Home') },
  { path: '/products', name: 'products', component: page('Product') },
];
