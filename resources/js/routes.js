import Vue from "vue";
import VueRouter from "vue-router";
import LoginPage from "./pages/auth/LoginPage";
import RegisterPage from './pages/auth/RegisterPage'
import Dashboard from './pages/site/Dashboard'
import VueCookies from "vue-cookies";
import CategoryPage from "./pages/category/IndexCategoryPage";
import NewsPage from './pages/news/IndexNewsPage'

Vue.use(VueRouter)
Vue.use(VueCookies);

// 2. Define some routes
// Each route should map to a component. The "component" can
// either be an actual component constructor created via
// `Vue.extend()`, or just a component options object.
// We'll talk about nested routes later.
const routes = [
    {
        path     : '/login',
        component: LoginPage,
        name     : 'login-page',
    },
    {
        path     : '/register',
        component: RegisterPage,
        name     : 'register-page',
    },
    {
        path     : '/category',
        component: CategoryPage,
        name     : 'category-page',
        meta     : {
            requiresAuth: true
        }
    },
    {
        path     : '/news',
        component: NewsPage,
        name     : 'news-page',
        meta     : {
            requiresAuth: true
        }
    },
    {
        path     : '/dashboard',
        component: Dashboard,
        name     : 'dashboard',
        meta     : {
            requiresAuth: true
        }
    }
]
let router   = new VueRouter({
    routes
});

router.beforeEach((to, from, next) => {
    if(to.matched.some(record => record.meta.requiresAuth)) {
        if(localStorage.getItem('token') == null) {
            next({name: 'login-page'})
        } else {
            next()
        }
    } else {
        if(localStorage.getItem('token') !== null) {
            next({name: 'dashboard'})
        } else {
            next()
        }
    }
});

export default router;
