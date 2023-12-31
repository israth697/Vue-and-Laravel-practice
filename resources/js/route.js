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
import Student_edit from './components/Student/Student_edit.vue';
import Teacher from './components/Teacher/Teacher.vue';
import Teacher_list from './components/Teacher/Teacher_list.vue';
import Teacher_edit from './components/Teacher/Teacher_edit.vue';

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

    {
        name: 'student_edit',
        path: '/student_edit',
        component: Student_edit
    },

    {
        name: 'teacher',
        path: '/teacher',
        component: Teacher
    },

    {
        name: 'teacher_list',
        path: '/teacher_list',
        component: Teacher_list
    },

    {
        name: 'teacher_edit',
        path: '/teacher_edit/:id',
        component: Teacher_edit
    },

];
 const router = createRouter({
        history: createWebHistory(),
        routes
 });
export default router;