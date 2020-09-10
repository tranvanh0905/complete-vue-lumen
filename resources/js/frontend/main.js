import Vue from 'vue';
import router from "../routes";
import {BootstrapVue, IconsPlugin} from 'bootstrap-vue'
import VueSweetalert2 from 'vue-sweetalert2';
import Paginate from 'vuejs-paginate'
import '../../css/wp-includes/css/dist/block-library/style.mind03b.css?ver=5.5.1';
import '../../css/wp-content/plugins/contact-form-7/includes/css/stylesbb49.css?ver=5.2.2';
import '../../css/wp-content/plugins/edge-cache-html-cloudflare-workers/public/css/cloudflare-edge-cache-public8a54.css?ver=1.0.0';
import '../../css/wp-content/themes/newspaper-x/assets/vendors/bootstrap/bootstrap.mind03b.css?ver=5.5.1';
import '../../css/wp-content/themes/newspaper-x/assets/vendors/bootstrap/bootstrap-theme.mind03b.css?ver=5.5.1';
import '../../css/wp-content/themes/newspaper-x/styled03b.css?ver=5.5.1';
import '../../css/wp-content/themes/newspaper-x/assets/css/stylee7f0.css?ver=1.3.1';
import '../../css/wp-content/themes/newspaper-x/assets/vendors/owl-carousel/owl.carousel.mind03b.css?ver=5.5.1';
import '../../css/wp-content/themes/newspaper-x/assets/vendors/owl-carousel/owl.theme.defaultd03b.css?ver=5.5.1';

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
}).$mount('#frontend_app');
