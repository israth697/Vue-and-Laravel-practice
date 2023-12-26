import { createWebHistory, createRouter } from "vue-router"
import Home from './components/Home.vue';
import Hell from './components/Hell.vue';
import Profile from './components/Profile.vue';
import Instagram from './components/Instagram.vue';
import ComponentA from './components/ComponentA.vue';
import Watcher from './components/Watcher.vue';
import Page from './components/Page.vue';
import Details from './components/Student/Details.vue';
import Student_list from './components/Student/Student_list.vue';





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
    
    {
        name: 'componenta',
        path: '/componenta',
        component: ComponentA
    },

    {
        name: 'watcher',
        path: '/watcher',
        component: Watcher
    },

    {
        name: 'page',
        path: '/page',
        component: Page
    },

    {
        name: 'details',
        path: '/details',
        component: Details
    },

    {
        name: 'student_list',
        path: '/student_list',
        component: Student_list
    },

    

];
 const router = createRouter({
        history: createWebHistory(),
        routes
 });
export default router;