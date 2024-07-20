<script setup>
import navbar from "../Sections/navbar.vue"
import { Link, router, useForm } from "@inertiajs/vue3";

defineProps({
    blogs: Object, 
});

// Define the deleteBlog function
// const deleteBlog = async (blogId) => {
//   try {
//     await router.delete(route('deleteBlog', blogId));
//     // Handle successful deletion (optional)
//     // You could emit an event or use a reactive variable to update the UI
//     // For example, if 'blogs' is reactive:
//     // blogs.value = blogs.value.filter(b => b.id !== blogId);
//   } catch (error) {
//     console.error('Error deleting blog:', error);
//     // Handle errors (e.g., display an error message)
//   }
// };

function deleteBlog(blogId){
    router.delete(route('deleteBlog', blogId));
}

</script>

<template>
  <div>
    <navbar></navbar>
    <div class="bg-slate-400 h-64">
      <h1 class="text-white">welcome to the dashboard {{ $page.props.auth.user.name }}</h1>
    </div>
    <div>
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
            <td>
              <button @click="deleteBlog(blog.id)">delete blog</button>
            </td>
          </tr>
        </tbody>
      </table>
      <div v-if="deleteBlog()">{{ $page.props.auth.user.name }}</div>
    </div>
  </div>
</template>