import Vue from "vue";
import VueRouter from "vue-router";
import LoginPage from "./pages/auth/LoginPage";
import RegisterPage from './pages/auth/RegisterPage'
import Dashboard from './pages/site/Dashboard'
import VueCookies from "vue-cookies";
import CategoryPage from "./pages/category/IndexCategoryPage";
import NewsPage from './pages/news/IndexNewsPage'
import FormCategory from "./pages/category/FormCategory";
import UpdateCategory from "./pages/category/UpdateCategory";
import AddNewsPage from "./pages/news/AddNewsPage";
import IndexUserPage from "./pages/user/IndexUserPage";
import HomePage from "./frontend/pages/HomePage";
import NewsPageFrontend from "./frontend/pages/NewsPageFrontend";
import DetailNews from "./frontend/pages/DetailNews";

Vue.use(VueRouter)
Vue.use(VueCookies);

// 2. Define some routes
// Each route should map to a component. The "component" can
// either be an actual component constructor created via
// `Vue.extend()`, or just a component options object.
// We'll talk about nested routes later.
const routes = [
    // begin route auth
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
    //end route auth
    //begin route category
    {
        path     : '/category',
        component: CategoryPage,
        name     : 'category-page',
        meta     : {
            requiresAuth: true
        }
    },
    {
        path     : '/category/add',
        component: FormCategory,
        name     : 'form-category',
        meta     : {
            requiresAuth: true
        }
    },
    {
        path     : '/category/update/:id',
        component: UpdateCategory,
        name     : 'update-category',
        meta     : {
            requiresAuth: true
        }
    },
    //end route category
    //begin route news
    {
        path     : '/news',
        component: NewsPage,
        name     : 'news-page',
        meta     : {
            requiresAuth: true
        }
    },
    {
        path     : '/news/add',
        component: AddNewsPage,
        name     : 'add-news-page',
        meta     : {
            requiresAuth: true
        }
    },
    //end route news
    //begin route user
    {
        path     : '/users',
        component: IndexUserPage,
        name     : 'user-page',
        meta     : {
            requiresAuth: true
        }
    },
    //end route user
    {
        path     : '/dashboard',
        component: Dashboard,
        name     : 'dashboard',
        meta     : {
            requiresAuth: true
        }
    },

    // frontend
    {
        path     : '/',
        component: HomePage,
        name     : 'home-page',
    },
    {
        path     : '/news-page',
        component: NewsPageFrontend,
        name     : 'news-page',
    },
    {
        path     : '/detail-news/:id',
        component: DetailNews,
        name     : 'detail-news',
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
    }
    next()

});

export default router;
