<script setup>
import navbar from '../Sections/navbar.vue';
import { Link } from '@inertiajs/vue3';

defineProps({
  blogs: Object,
});
</script>

<template>
  <div>
    <navbar></navbar>
    <div class="bottom-0 bg-red-800">
    <table>
      <thead>
        <tr>
          <th>Author</th>
          <th>Title</th>
          <th>Content</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="blog in blogs.data" :key="blog.id">
          <td>{{ blog.user ? blog.user.name : 'Unknown' }}</td>
          <td>{{ blog.title }}</td>
          <td>{{ blog.content }}</td>
        </tr>
      </tbody>
    </table>
</div>
    <!-- Pagination links -->
    <div class="pagination">
      <Link
        v-for="link in blogs.links"
        :key="link.url"
        :href="link.url"
        :class="{ 'active': link.active }"
        v-html="link.label"
      />
    </div>
  </div>
</template>