if ('serviceWorker' in navigator) {
    window.addEventListener('load', () => {
        navigator.serviceWorker.register('/sw.js');
    });
}

window.Vue = require('vue');
import App from './App.vue';

Vue.config.devtools = true;
Vue.config.performance = true;

const app = new Vue({
    el: '#app',
    components: {
        App
    },
    render: h => h(App)
});