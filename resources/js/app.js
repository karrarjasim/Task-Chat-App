import './bootstrap';

import { createApp } from 'vue' 
import Chat from './components/Chat.vue' 


createApp({}) 
    .component('Chat', Chat)
    .mount('#app') 
