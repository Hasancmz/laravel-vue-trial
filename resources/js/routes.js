import Home from './components/Home';
import About from './components/About';
import Kazak from './components/Kazak';
import Ayakkabi from './components/Ayakkabi';
import Esofman from './components/Esofman';
import Mont from './components/Mont';
import Polar from './components/Polar';

export default {
    mode: 'history',

    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/about',
            name: 'about',
            component: About
        },
        {
            path: '/products/kazak',
            name: 'kazak',
            component: Kazak
        },
        {
            path: '/products/ayakkabi',
            name: 'ayakkabi',
            component: Ayakkabi
        },
        {
            path: '/products/esofman',
            name: 'esofman',
            component: Esofman
        },
        {
            path: '/products/mont',
            name: 'mont',
            component: Mont
        },
        {
            path: '/products/polar',
            name: 'polar',
            component: Polar
        }
    ]
}

/*import Vue from 'vue';
import VueRouter from 'vue-router';
Vue.use(VueRouter);

import home from './components/Home';
import about from './components/About';

const routes = [
    {path: '/', component:home},
    {path: '/about', component:about}
]

export default new VueRouter ({
    routes
})*/


