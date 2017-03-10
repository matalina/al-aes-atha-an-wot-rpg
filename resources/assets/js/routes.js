import VueRouter from 'vue-router';
import Home from './views/main/Home';
import Characters from './views/main/Characters';
import Handbook from './views/main/Handbook';
import Forums from './views/main/Forums';
import News from './views/main/News';
import Login from './views/users/Login';
import Register from './views/users/Register';
import Profile from './views/users/Profile';
import NewPassword from './views/users/NewPassword';

let routes = [
    {
        path: '/',
        component: Home
    },
    {
        path: '/characters',
        component: Characters
    },
    {
        path: '/forums',
        component: Forums
    },
    {
        path: '/handbook',
        component: Handbook
    },
    {
        path: '/news',
        component: News
    },
    {
        path: '/login',
        component: Login
    },
    {
        path: '/register',
        component: Register
    },
    {
        path: '/profile',
        component: Profile
    },
    {
        path: '/new-password',
        component: NewPassword
    }
];

export default new VueRouter({
  routes
});