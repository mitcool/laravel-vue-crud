import { ref } from 'vue';
import axios from 'axios';

export default function usePosts(){
    const posts = ref({});

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
    }
    return {posts,getPosts}
}