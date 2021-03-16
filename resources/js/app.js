require('./bootstrap');

window.Vue = require('vue').default;

import VueRouter from 'vue-router';
import routes from './routes';

Vue.use(VueRouter);
 
Vue.component('header-side', require('./components/HeaderSide.vue').default);
Vue.component('products-header', require('./components/ProductsHeader.vue').default);

const app = new Vue({
    el: '#app',
    router: new VueRouter(routes)
});
