<script setup>
import { ref } from 'vue'
const count = ref(0)
</script>

<template>
  <div class="flex items-center">
    <button @click="count++" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-2">
      Count is:
    </button>
    <span class="text-black font-bold">{{ count }}</span>
  </div>
</template>