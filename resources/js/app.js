import Vue from 'vue';
import router from "./routes";
import {BootstrapVue, IconsPlugin} from 'bootstrap-vue'
import VueSweetalert2 from 'vue-sweetalert2';
import Paginate from 'vuejs-paginate'

import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'
import 'sweetalert2/dist/sweetalert2.min.css';
import axios from 'axios';


Vue.use(BootstrapVue);
Vue.use(IconsPlugin);
Vue.use(VueSweetalert2);
Vue.component('paginate', Paginate)

new Vue({
    router,
}).$mount('#app');
