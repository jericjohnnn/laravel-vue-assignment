<script setup>
import { ref } from 'vue';

const isMenuOpen = ref(false);

function toggleMenu() {
  isMenuOpen.value = !isMenuOpen.value;
}

function scrollToSection(sectionId) {
  const element = document.getElementById(sectionId);
  if (element) {
    element.scrollIntoView({ behavior: 'smooth' });
  }
  isMenuOpen.value = false; 
}
</script>

<template>
  <nav class="absolute top-0 left-0 right-0 z-50">
    <div class="container mx-auto px-4 md:px-0 py-6 flex justify-between items-center ">
      <!-- Logo -->
      <!-- <div class="w-40 md:w-52 ">
        <img src="../../assets/images/logo.webp" alt="Logo">
      </div> -->
      <a @click.prevent="scrollToSection('hero')" href="#Contact"
            class="w-40 md:w-52 "><img src="../../assets/images/logo.webp" alt="Logo"></a>

      <!-- MENU(Mobile) -->
      <button @click="toggleMenu" class="md:hidden">
        <svg class="w-10 h-10 text-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M4 6h16M4 12h16m-7 6h7"></path>
        </svg>
      </button>

      <!-- BLACK OVERLAY(mobile) -->
      <div 
        v-if="isMenuOpen" 
        @click="toggleMenu" 
        class="fixed inset-0 bg-black bg-opacity-50 md:hidden"
      ></div>

      <!-- NAV LIST -->
      <div 
        :class="{'translate-x-7': isMenuOpen, 'translate-x-full': !isMenuOpen}"
        class="z-50 fixed top-0 right-0 bottom-0 w-64 bg-white shadow-lg transform transition-transform duration-300 ease-in-out md:relative md:transform-none md:flex md:w-auto md:bg-transparent md:shadow-none"
      >
        <div class="flex flex-col h-full justify-center space-y-4 md:flex-row md:space-y-0 md:space-x-8">
          <a @click.prevent="scrollToSection('home')" href="#Home"
            class="block py-2 px-4 md:p-0 text-blue font-medium font-montserrat lg:text-lg">Home</a>
          <a @click.prevent="scrollToSection('services')" href="#Services"
            class="block py-2 px-4 md:p-0 text-blue font-medium font-montserrat lg:text-lg">Services</a>
          <a @click.prevent="scrollToSection('contact')" href="#Contact"
            class="block py-2 px-4 md:p-0 text-blue font-medium font-montserrat lg:text-lg">Contact</a>
        </div>
      </div>
    </div>
  </nav>
</template>
