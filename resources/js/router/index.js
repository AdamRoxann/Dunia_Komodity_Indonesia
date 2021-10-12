import Home from '../pages/menu/Home.vue'
import About from '../pages/menu/About.vue'
import Blog from '../pages/menu/Blog.vue'
import Contact from '../pages/menu/Contact.vue'
import Gallery from '../pages/menu/Gallery.vue'
import GreenBean from '../pages/coffee/GreenBean.vue'
import Sugar from '../pages/sugar/Sugar.vue'
import Spices from '../pages/spices/Spices.vue'
import PalmSugar from '../pages/sugar/PalmSugar.vue'
import SugarBlock from '../pages/sugar/SugarBlock.vue'
import Gayo from '../pages/coffee/Gayo.vue'
import Lintong from '../pages/coffee/Lintong.vue'
import Kerinci from '../pages/coffee/Kerinci.vue'
import Sidikalang from '../pages/coffee/Sidikalang.vue'
import Mandailing from '../pages/coffee/Mandailing.vue'

export default {
    mode: 'history',

    routes: [
        {
            path: '/',
            name: 'home',
            component: Home,
        },
        {
            path: '/blog',
            name: 'blog',
            component: Blog,
        },
        {
            path: '/gallery',
            name: 'gallery',
            component: Gallery,
        },
        {
            path: '/about',
            name: 'about',
            component: About,
        },
        {
            path: '/contact',
            name: 'contact',
            component: Contact,
        },
        {
            path: '/greenbeans',
            name: 'greenbeans',
            component: GreenBean,
        },
        {
            path: '/coconutsugar',
            name: 'coconutsugar',
            component: Sugar,
        },
        {
            path: '/spices',
            name: 'spices',
            component: Spices,
        },
        {
            path: '/greenbeans/gayo',
            name: 'gayo',
            component: Gayo,
        },
        {
            path: '/greenbeans/lintong',
            name: 'lintong',
            component: Lintong,
        },
        {
            path: '/greenbeans/kerinci',
            name: 'kerinci',
            component: Kerinci,
        },
        {
            path: '/greenbeans/sidikalang',
            name: 'sidikalang',
            component: Sidikalang,
        },
        {
            path: '/greenbeans/mandailing',
            name: 'mandailing',
            component: Mandailing,
        },
        {
            path: '/coconutsugar/sugarblock',
            name: 'sugarblock',
            component: SugarBlock,
        },
        {
            path: '/coconutsugar/palmsugar',
            name: 'palmsugar',
            component: PalmSugar,
        },
        
        
    ]
}