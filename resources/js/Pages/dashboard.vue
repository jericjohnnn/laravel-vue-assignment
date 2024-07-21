<script setup>
import navbar from "../Sections/navbar.vue"
import Notification from "../Components/blogNotification.vue"
import { Link, router, useForm, usePage } from "@inertiajs/vue3";
import { ref } from 'vue';

const page = usePage()

defineProps({
  blogs: Object,
});

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
    },
    onError: (errors) => {
      console.error('Form submission errors:', errors);
    }
  });
};

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
    }
  });
}

function cancelEdit() {
  editingBlog.value = null;
  updateBlog.reset();
}

function deleteBlog(blogId) {
  router.delete(route('deleteBlog', blogId), {
    preserveState: false,
    preserveScroll: true,
  });
}
</script>

<template>
  <v-app>
    <navbar class="!static"></navbar>
    
    <v-main class="bg-blue">

      <v-container>
        <div class="my-10">
        <h1 class="text-h4">Welcome to your Blogs {{ $page.props.auth.user.name }}</h1>
      </div>

        <v-row>
          <v-col v-for="blog in blogs.data" :key="blog.id" cols="12" sm="6" md="4">
            <v-card>
              <v-card-title>{{ blog.title }}</v-card-title>
              <v-card-text>
                <p>{{ blog.content }}</p>
                
              </v-card-text>
              <v-card-actions>
                <v-btn color="primary" @click="startEditing(blog)">Edit</v-btn>
                <v-btn color="error" @click="deleteBlog(blog.id)">Delete</v-btn>
              </v-card-actions>
            </v-card>
          </v-col>
        </v-row>

        <v-snackbar v-model="$page.props.flash.blogCRUDnotif" :timeout="3000">
          <Notification :message="$page.props.flash.blogCRUDnotif"></Notification>
        </v-snackbar>

        <v-dialog v-model="editingBlog" max-width="500px">
          <v-card>
            <v-card-title>Edit Blog</v-card-title>
            <v-card-text>
              <v-form @submit.prevent="submitUpdate">
                <v-text-field v-model="updateBlog.title" label="Title" required></v-text-field>
                <v-textarea v-model="updateBlog.content" label="Content" required></v-textarea>
                <v-card-actions>
                  <v-spacer></v-spacer>
                  <v-btn color="primary" type="submit" :loading="updateBlog.processing">Update</v-btn>
                  <v-btn color="error" @click="cancelEdit">Cancel</v-btn>
                </v-card-actions>
              </v-form>
            </v-card-text>
          </v-card>
        </v-dialog>

        <div class="flex  bg-white p-3 mt-4 justify-center gap-9">
          <Link class=""
            v-for="link in blogs.links"
            :key="link.url"
            :href="link.url"
            :class="{ 'active': link.active }"
            v-html="link.label"
          />
        </div>


        <v-card class="mt-4">
          <v-card-title>Create New Blog</v-card-title>
          <v-card-text>
            <v-form @submit.prevent="submitCreate">
              <input type="hidden" v-model="createBlog.user_id" />
              <v-text-field v-model="createBlog.title" label="Title" required></v-text-field>
              <v-textarea v-model="createBlog.content" label="Content" required></v-textarea>
              <v-btn type="submit" color="primary" :loading="createBlog.processing" class="mt-2">Submit</v-btn>
            </v-form>
          </v-card-text>
        </v-card>

        


      </v-container>
    </v-main>
  </v-app>
</template>