<template>
  <div v-if="message && showNotification">
    <h1>{{message}}</h1>
  </div>
</template>

<script setup>
import { defineProps, ref, onMounted } from 'vue';


defineProps({
    message: String,
});


const showNotification = ref(false);

onMounted(() => {
    showNotification.value = true;
    setTimeout(() => showNotification.value = false, 2000);
})
</script>

<style>

</style>