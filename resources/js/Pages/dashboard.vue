<script setup>
import navbar from "../Sections/navbar.vue"
import Notification from "../Components/blogNotification.vue"
import { Link, router, useForm, usePage } from "@inertiajs/vue3";

defineProps({
  blogs: Object,
});




//create blog
const page = usePage()

const createBlog = useForm({
  user_id: page.props.auth.user.id,
  title: null,
  content: null,
});

const submit = () => {
  console.log('Submitting form', createBlog);
  createBlog.post(route('dashboard'), {

    preserveState: false,
    preserveScroll: true,

    onSuccess: () => {
      createBlog.reset('title', 'content');
      //
    },
    onError: (errors) => {
      console.error('Form submission errors:', errors);
      // 
    }
  });
};

//delete blog
function deleteBlog(blogId) {
  router.delete(route('deleteBlog', blogId), {
    preserveState: false,
  });

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
            <td>{{ blog.user_id }}</td>
            <td>{{ blog.title }}</td>
            <td>{{ blog.content }}</td>
            <td>{{ blog.created_at }}</td>
            <td>
              <button @click="deleteBlog(blog.id)">delete blog</button>
            </td>
          </tr>
        </tbody>
      </table>

      <div v-if="$page.props.flash.blogCRUDnotif" class="alert">
        <Notification :message="$page.props.flash.blogCRUDnotif"></Notification>
      </div>

      <!-- CREATE BLOG -->
      <div>
        <form @submit.prevent="submit">
          <div hidden>
            <input type="hidden" v-model="createBlog.user_id" />
          </div>
          <div>
            <label for="title">Title</label>
            <input type="text" v-model="createBlog.title" required />
          </div>
          <div>
            <label for="content">Content</label>
            <textarea v-model="createBlog.content" required></textarea>
          </div>
          <button type="submit" :disabled="createBlog.processing">Submit</button>
        </form>
      </div>


    </div>
  </div>
</template>