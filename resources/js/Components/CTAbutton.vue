
<template>
  <button @click="showForm" class="relative overflow-hidden px-9 py-2 text-lg font-bold text-blue font-montserrat lg:text-xl 
  bg-white border border-sky-300 rounded-xl shadow-md transition-all 
  before:absolute before:bottom-0 before:left-0 before:top-0 before:z-0 before:h-full before:w-0 before:bg-blue before:transition-all before:duration-500 
  hover:text-white hover:before:left-0 hover:before:w-full hover:border-white">
    <span class="relative z-10"><slot></slot></span>
  </button>
  <contactForm ref="popUp" />
</template>

<script setup>
import { ref } from 'vue';
import contactForm from './contactForm.vue';

const popUp = ref(null);

const showForm = () => {
  popUp.value.show();
};
</script>
