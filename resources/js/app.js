if ('serviceWorker' in navigator) {
    window.addEventListener('load', () => {
        navigator.serviceWorker.register('/sw.js');
    });
}

window.Vue = require('vue');
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import App from './App.vue';
import SearchPage from './components/pages/search/SearchPage.vue';
import ErrorPage from './components/pages/ErrorPage.vue';

// Vue.config.devtools = true;
// Vue.config.performance = true;

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/search',
            name: 'search',
            component: SearchPage
        },
        {
            path: '/',
            redirect: '/search'
        },
        {
            path: '/404',
            name: '404',
            component: ErrorPage
        },
        {
            path: '/*',
            redirect: '/404'
        },
    ],
});

new Vue({
    router,
    render: h => h(App),
}).$mount('#app')