<script setup>
import navbar from "../Sections/navbar.vue"
import Notification from "../Components/blogNotification.vue"
import { Link, router, useForm, usePage } from "@inertiajs/vue3";
import { ref } from 'vue';

const page = usePage() // can use shared props(e.g auth.id)

defineProps({
  blogs: Object,
});


//create blog
const createBlog = useForm({
  user_id: page.props.auth.user.id,
  title: null,
  content: null,
});

const submitCreate = () => {
  createBlog.post(route('dashboard'), {

    preserveState: false,
    preserveScroll: true,

    onSuccess: () => {
      createBlog.reset('title', 'content');
      // can add more functionality
    },
    onError: (errors) => {
      console.error('Form submission errors:', errors);
      // can add more functionality
    }
  });
};



// edit blog
const editingBlog = ref(null);

function startEditing(blog) {
  editingBlog.value = { ...blog };
  updateBlog.title = blog.title;
  updateBlog.content = blog.content;
}

const updateBlog = useForm({
  title: '',
  content: '',
});

function submitUpdate() {
  updateBlog.patch(route('updateBlog', editingBlog.value.id), {
    preserveState: false,
    preserveScroll: true,
    onSuccess: () => {
      editingBlog.value = null;
      updateBlog.reset();
      // You might want to refresh your blogs data here
    }
  });
}


function cancelEdit() {
  editingBlog.value = null;
  updateBlog.reset();
}

//delete blog
function deleteBlog(blogId) {
  router.delete(route('deleteBlog', blogId), {
    preserveState: false,
    preserveScroll: true,
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
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="blog in blogs.data" :key="blog.id">
            <td>{{ blog.user_id }}</td>
            <td>{{ blog.title }}</td>
            <td>{{ blog.content }}</td>
            <td>{{ blog.created_at }}</td>
            <td>
              <button @click="startEditing(blog)">Edit</button>
              <button @click="deleteBlog(blog.id)">delete blog</button>
            </td>
          </tr>
        </tbody>
      </table>

      <!-- NOTIFICATION -->
      <div v-if="$page.props.flash.blogCRUDnotif" class="alert">
        <Notification :message="$page.props.flash.blogCRUDnotif"></Notification>
      </div>



      <!-- Edit form -->
      <div v-if="editingBlog" class="edit-form">
        <h3>Edit Blog</h3>
        <form @submit.prevent="submitUpdate">
          <div>
            <label for="edit-title">Title</label>
            <input id="edit-title" v-model="updateBlog.title" type="text" required />
          </div>
          <div>
            <label for="edit-content">Content</label>
            <textarea id="edit-content" v-model="updateBlog.content" required></textarea>
          </div>
          <button type="submit" :disabled="updateBlog.processing">Update</button>
          <button type="button" @click="cancelEdit">Cancel</button>
        </form>
      </div>




      <!-- CREATE BLOG -->
      <div>
        <form @submit.prevent="submitCreate">
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