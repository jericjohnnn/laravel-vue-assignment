<script setup>
import navbar from "../Sections/navbar.vue"
import { Link, router, useForm } from '@inertiajs/vue3';


defineProps({
    blogs: Object, 
    // users: Object,
});

function deleteUser(blogId){
    router.delete('/dashboard/'+ blogId)
}

// const user_id = usePage().props.value.user_id;
</script>



<template>
    <div>
    <navbar></navbar>
    <div class="bg-slate-400 h-64">
        <h1 class="text-white">welcome to the dashboard {{ $page.props.auth.user.name }}</h1>
    </div>
    <div>{{ user_id }}</div>
    <div>
        <!-- <table>
            <thead>
                <tr>
                    <th>email</th>
                    <th>name</th>
                    <th>register date</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="user in users.data" :key="user.id">
                    <td>{{user.name}}</td>
                    <td>{{user.email}}</td>
                    <td>{{user.created_at}}</td>
                </tr>
            </tbody>
        </table> -->

        <table>
            <thead>
                <tr>
                    <th>user id</th>
                    <th>title</th>
                    <th>content</th>
                     <th>created at</th>
                     <th>delete</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="blog in blogs.data" :key="blog.id">
                    <td>{{blog.user_id}}</td>
                    <td>{{blog.title}}</td>
                    <td>{{blog.content}}</td>
                    <td>{{blog.created_at}}</td>
                    <button @click.prevent="deleteUser(blog.id)">delete blog</button>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</template>