import Vue from "vue";
import VueRouter from "vue-router";
import LoginPage from "./pages/auth/LoginPage";
import RegisterPage from './pages/auth/RegisterPage'

Vue.use(VueRouter)
// 2. Define some routes
// Each route should map to a component. The "component" can
// either be an actual component constructor created via
// `Vue.extend()`, or just a component options object.
// We'll talk about nested routes later.
const routes = [
    {
        path     : '/login',
        component: LoginPage,
    },
    {
        path     : '/register',
        component: RegisterPage,
    },
]
export default new VueRouter({
    routes,
})
