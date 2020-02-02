const page = (path) => {
  return () => import(`@client/pages/${path}.vue`).then(m => m.default || m);
}

export default [
  { path: '/', name: 'home', component: page('Home') },
  { path: '/products', name: 'products', component: page('Product') },
  { path: '/product/:slug', name: 'product-detail', component: page('ProductDetail') },
  { path: '/blog', name: 'blog', component: page('Blog') },
  { path: '/blog/:slug', name: 'blog-detail', component: page('BlogDetail') },
  { path: '/contact', name: 'contact', component: page('Contact') },
];
