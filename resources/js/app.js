import Vue from 'vue';
import router from "./routes";
import {BootstrapVue, IconsPlugin} from 'bootstrap-vue'
import VueSweetalert2 from 'vue-sweetalert2';
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'
import 'sweetalert2/dist/sweetalert2.min.css';

Vue.use(BootstrapVue);
Vue.use(IconsPlugin);
Vue.use(VueSweetalert2);
new Vue({
    router,
}).$mount('#app');
