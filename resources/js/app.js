require('./bootstrap');
//console.log(baseUrl);
window.Vue = require('vue').default;

import Vue from 'vue';
import VueRouter from 'vue-router';
import routes from './router/routes';

Vue.use(VueRouter);
 

Vue.component('container', require('./components/Container.vue').default);
Vue.component('card-container', require('./components/CardContainer.vue').default);
Vue.component('card-style', require('./components/CardStyle.vue').default);
Vue.component('card-bootstrap', require('./components/CardBootstrap.vue').default);
Vue.component('header-side', require('./components/HeaderSide.vue').default);
Vue.component('footer-side', require('./components/FooterSide.vue').default);
Vue.component('products-header', require('./components/ProductsHeader.vue').default);
Vue.component('home', require('./views/Home.vue').default);


Vue.mixin({
    data: function(){
        return {
            get baseUrl() {
                return baseUrl;
            }
        }
    }
})


const app = new Vue({
    el: '#app',
    router: new VueRouter(routes)
});



/*const routes = [
    {path: '/', component: require('./components/Home.vue').default},
    {path: '/about', component: require('./components/About.vue').default},
    {path: '/products/kazak', component: require('./components/Kazak.vue').default},
    {path: '/products/ayakkabi', component: require('./components/Ayakkabi.vue').default},
    {path: '/products/esofman', component: require('./components/Esofman.vue').default},
    {path: '/products/mont', component: require('./components/Mont.vue').default},
    {path: '/products/polar', component: require('./components/Polar.vue').default},
]

const router = new VueRouter({
    routes: routes,
    mode: "history"
})

const app = new Vue({
    router
}).$mount('#app')

------------Diğer path yolu bu şekilde burda tanımlanıyor hepside ----------------------------
*/


/*require('./bootstrap');

window.Vue = require('vue').default;

import routes from './routes';

//Vue.component('header-side', require('./components/HeaderSide.vue').default);

const app = new Vue({
    routes
});*/