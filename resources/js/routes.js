import Logo from './components/Logo'
import LogoSymbol from './components/LogoSymbol'
import Colors from './components/Colors'
import Typography from "./components/Typography";
import Mascot from "./components/Mascot";
import Illustrations from "./components/Illustrations";
import Wallpapers from "./components/Wallpapers";
import NotFound from "./components/NotFound";
import Stats from "./components/Stats";


let LoadersAndAnimations = () => import ( /*webpackChunkName: "loaders" */"./components/LoadersAndAnimations");


export default {

    mode: 'history',

    linkActiveClass: 'font-bold',

    routes: [
        {
            path:'*',
            component: NotFound
        },
        {
            path: '/',
            component: Logo
        },
        {
            path: '/logo_symbol',
            component: LogoSymbol,
        },
        {
            path: '/colors',
            component: Colors,
        },
        {
            path: '/typography',
            component: Typography
        },
        {
            path: '/mascot',
            component: Mascot,
        },
        {
            path: '/illustrations',
            component: Illustrations,
        },
        {
            path: '/loaders-animations',
            component: LoadersAndAnimations
        },
        {
            path: '/wallpapers',
            component: Wallpapers,
        },
        {
            path: '/colors',
            component: Colors,
        },
        {
            path: '/site-stats',
            component: Stats,
        }
    ],

}
