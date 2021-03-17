import Kazak from '../views/Kazak';
import Ayakkabi from '../views/Ayakkabi';
import Esofman from '../views/Esofman';
import Mont from '../views/Mont';
import Polar from '../views/Polar';

export default {
    mode: 'history',

    routes: [
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
