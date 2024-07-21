<script setup>

defineProps({
  blogs: Object,
});


</script>
<template>
    <div>
        <table>
            <thead>
              <tr>
                <th>user id</th>
                <th>title</th>
                <th>content</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="blog in blogs.data" :key="blog.id">
                <td>{{ blog.user_id }}</td>
                <td>{{ blog.title }}</td>
                <td>{{ blog.content }}</td>
              </tr>
            </tbody>
          </table>
    </div>
</template>