import './bootstrap';

import { createApp } from 'vue/dist/vue.esm-bundler.js';
import home from './components/home.vue';
import login from './components/login.vue';
import register from './components/register.vue';
import users from './components/users.vue';

const app = createApp({
        components:{
            home,login,register,users,
        }
});

app.mount('#app');