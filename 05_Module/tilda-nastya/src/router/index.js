import {createRouter, createWebHistory} from 'vue-router';

const routes = [
    {
        path: '/',
        name: 'ProjectsPage',
        component: () => import('@/views/ProjectsPage.vue'),
    },
    {
        path: '/profile',
        name: 'ProfilePage',
        component: () => import('@/views/ProfilePage.vue'),
    },
    {
        path: '/project/:projectId',
        name: 'ProjectItems',
        component: () => import('@/views/ProjectItemsPage.vue'),
    },
    {
        path: '/project/:projectId/edit/:pageId',
        name: 'EditPage',
        component: () => import('@/views/EditPage.vue'),
    },
    {
        path: '/project/:projectId/preview/:pageId',
        name: 'PreviewPage',
        component: () => import('@/views/PreviewPage.vue'),
    }
];

const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes
});

export default router;