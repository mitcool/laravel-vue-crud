import { ref } from 'vue';
import axios from 'axios';
import {useRouter} from 'vue-router'

export default function usePosts(){
    const posts = ref({});
    const router = useRouter();
    const validationErrors = ref({}) 
    
    const getPosts = async (
        page = 1,
        category='',
        orderColumn='created_at',
        orderDirection= 'desc') => {
        axios.get('/api/posts?page=' + page + 
            '&category=' + category + 
            '&orderColumn=' + orderColumn + 
            '&orderDirection=' + orderDirection)
            .then(response => {
                posts.value = response.data
            })
    };

    const storePost = async (post) => {
        axios.post('/api/posts', post)
            .then(response => {
                router.push({ name: 'posts.index' })
            })
            .catch(error => { 
                if (error.response?.data) {
                    validationErrors.value = error.response.data.errors;
                }
            }) 
    }

    return { posts, getPosts, storePost, validationErrors } 
}
