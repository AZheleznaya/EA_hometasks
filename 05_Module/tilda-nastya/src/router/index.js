import { createRouter, createWebHistory } from 'vue-router';

const routes = [
  {
    path: '/',
    name: 'ProjectsPage',
    component: () => import('@/views/ProjectsPage.vue'),
  },
  {
    path: '/project/:projectId',
    name: 'ProjectPages',
    component: () => import('@/views/ProjectPagesPage.vue'),
  }
];

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
});

export default router;