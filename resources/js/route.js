import { createWebHistory, createRouter } from "vue-router"
import Home from './components/Home.vue';
import Hell from './components/Hell.vue';
import Profile from './components/Profile.vue';
import Instagram from './components/Instagram.vue';





const routes = [
    
    {
        name: 'Home',
        path: '/hello',
        component: Home
    },

    {
        name: 'hell',
        path: '/hell',
        component: Hell
    },

    {
        name: 'profile',
        path: '/profile',
        component: Profile
    },

    {
        name: 'instagram',
        path: '/instagram',
        component: Instagram
    },

];
 const router = createRouter({
        history: createWebHistory(),
        routes
 });
export default router;