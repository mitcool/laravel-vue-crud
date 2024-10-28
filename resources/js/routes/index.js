import { createRouter, createWebHistory } from 'vue-router';
import PostsIndex from '@/components/Posts/Index.vue'
import PostsCreate from '@/components/Posts/Create.vue'
import PostsEdit from '@/components/Posts/Edit.vue'

const routes = [
    {
        path:'/',
        component:PostsIndex,
        name:'posts.index',
        meta: {
            title:'Posts'
        }
    },
    {
        path: '/posts/create', 
        component:PostsCreate,
        name:'posts.create',
        meta: {
            title:'Add new post'
        }
    },
    {
        path: '/posts/edit/:id', 
        component:PostsEdit,
        name:'posts.edit',
        meta: {
            title:'Edit post new post'
        }
    },
]

export default createRouter({
    history:createWebHistory(),
    routes
});