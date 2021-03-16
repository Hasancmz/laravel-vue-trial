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
            component: Home
        },
        {
            path: '/about',
            component: About
        },
        {
            path: '/products/kazak',
            component: Kazak
        },
        {
            path: '/products/ayakkabi',
            component: Ayakkabi
        },
        {
            path: '/products/esofman',
            component: Esofman
        },
        {
            path: '/products/mont',
            component: Mont
        },
        {
            path: '/products/polar',
            component: Polar
        }
    ]
}