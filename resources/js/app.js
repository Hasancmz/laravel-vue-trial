require('./bootstrap');

window.Vue = require('vue').default;

import VueRouter from 'vue-router';
import routes from './router/routes';

Vue.use(VueRouter);



Vue.component('header-side', require('./components/HeaderSide.vue').default);
Vue.component('card-bootstrap', require('./components/CardBootstrap.vue').default);
Vue.component('card-style', require('./components/CardStyle.vue').default);
Vue.component('container', require('./components/Container.vue').default);
Vue.component('card-container', require('./components/CardContainer.vue').default);
Vue.component('products-header', require('./components/ProductsHeader.vue').default);
Vue.component('footer-side', require('./components/FooterSide.vue').default);


Vue.mixin( {
    data() {
        return {
            baseUrl
        }
    },
})


const app = new Vue({
    el: '#app',
    router: new VueRouter(routes)
});
