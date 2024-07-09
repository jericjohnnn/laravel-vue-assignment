<template>
  <Teleport to="body">
    <div v-if="isVisible" @click.self="close"
      class="fixed inset-0 flex items-center justify-center z-[9999] bg-black bg-opacity-30 font-montserrat">
      <div v-motion-pop-visible class="relative bg-white p-6 rounded-2xl shadow-xl max-w-lg w-full mx-4">
        <button @click="close" class="absolute top-2 right-2 text-black hover:text-gray-700 transition duration-300">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>

        <div class="flex flex-col justify-center items-center">
          <h2 class="text-2xl font-bold mb-6 text-black">Get In Touch</h2>
          <form class="w-full">
            <div class="mb-4">
              <label for="name" class="block text-sm font-medium text-black mb-1">Name:</label>
              <input type="text" id="name" name="name"
                class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue text-black">
            </div>

            <div class="mb-4">
              <label for="email" class="block text-sm font-medium text-black mb-1">Email:</label>
              <input type="email" id="email" name="email"
                class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue text-black">
            </div>

            <div class="mb-4">
              <label for="subject" class="block text-sm font-medium text-black mb-1">Subject:</label>
              <input type="text" id="subject" name="subject"
                class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue text-black">
            </div>

            <div class="mb-6">
              <label for="message" class="block text-sm font-medium text-black mb-1">Message:</label>
              <textarea id="message" name="message" rows="4"
                class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue text-black"></textarea>
            </div>

            <button type="submit"
              class="hover:bg-sky-500 w-full bg-blue text-white font-semibold py-2 px-4 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue focus:ring-offset-2 transition duration-300">
              Send
            </button>
          </form>
        </div>
      </div>
    </div>
  </Teleport>
</template>

<script setup>
import { ref } from 'vue';

const isVisible = ref(false);

const show = () => {
  isVisible.value = true;
};

const close = () => {
  isVisible.value = false;
};

defineExpose({ show });
</script>