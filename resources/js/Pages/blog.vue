<script setup>
import navbar from '../Sections/navbar.vue';
import { Link } from '@inertiajs/vue3';
import { ref, watch } from 'vue';
import { router } from '@inertiajs/vue3';

const props = defineProps({
  blogs: Object,
});

const currentPage = ref(props.blogs.current_page);

const changePage = (page) => {
  router.get(props.blogs.path, { page: page }, {
    preserveState: true,
    preserveScroll: true,
  });
};

watch(() => props.blogs.current_page, (newPage) => {
  currentPage.value = newPage;
});
</script>

<template>
    <v-app >
      <navbar class="!static"></navbar>
      
      <v-main class="bg-blue">
        <v-container>
          <h1 class="text-h3 mb-6">Blogs</h1>
          
          <v-row>
            <v-col v-for="blog in blogs.data" :key="blog.id" cols="12" md="6" lg="4">
              <v-card class="mx-auto" max-width="400">
                <v-card-title class="text-h5">
                  {{ blog.title }}
                </v-card-title>
                
                <v-card-text>
                  <v-chip class="mb-2" color="primary" label>
                    {{ blog.user.name }}
                  </v-chip>
                  <p>{{ blog.content }}</p>
                </v-card-text>
                
                <v-card-actions>
                  <v-btn color="primary" variant="text">
                    Read More
                  </v-btn>
                </v-card-actions>
              </v-card>
            </v-col>
          </v-row>
  
          <v-pagination
            v-model="currentPage"
            :length="blogs.last_page"
            :total-visible="7"
            @update:modelValue="changePage"
          ></v-pagination>
  
        </v-container>
      </v-main>
    </v-app>
  </template>
  
