import Vue from 'vue';
import VueRouter from 'vue-router';

import home from './views/home/index.vue';
import deliverables from './views/deliverables/index.vue';
import actionItems from './views/actionItems/index.vue';
import changes from './views/changes/index.vue';
import decisions from './views/decisions/index.vue';
import issues from './views/issues/index.vue';
import references from './views/references/index.vue';
import requirements from './views/requirements/index.vue';
import resources from './views/resources/index.vue';
import risks from './views/risks/index.vue';
import tasks from './views/tasks/index.vue';

Vue.use(VueRouter);
const router = new VueRouter({
    routes: [
        { path: '/', component: home },
        { path: '/deliverables', component: deliverables},
        { path: '/tasks', component: tasks},
        { path: '/issues', component: issues},
        { path: '/changes', component: changes},
        { path: '/references', component: references},
        { path: '/resources', component: resources},
        { path: '/actionItems', component: actionItems},
        { path: '/requirements', component: requirements},
        { path: '/decisions', component: decisions},
        { path: '/risks', component: risks},
    ]
});

export default router;
