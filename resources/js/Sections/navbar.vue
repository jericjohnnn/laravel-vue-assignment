<script setup>
import { ref } from 'vue';
import { Link } from '@inertiajs/vue3';

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
    <div class="container mx-auto px-4 py-6 flex justify-between items-center">
      <!-- Logo -->
      <a @click.prevent="scrollToSection('hero')" href="#Contact" class="w-40 md:w-52">
        <img src="../../assets/images/logo.webp" alt="Logo">
      </a>

      <!-- MENU(Mobile) -->
      <button @click="toggleMenu" class="md:hidden">
        <svg class="w-10 h-10 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24"
          xmlns="http://www.w3.org/2000/svg">
          <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M4 6h16M4 12h16m-7 6h7"></path>
        </svg>
      </button>

      <!-- BLACK OVERLAY(mobile) -->
      <div v-if="isMenuOpen" @click="toggleMenu" class="fixed inset-0 bg-black bg-opacity-50 md:hidden"></div>

      <!-- NAV LIST -->
      <div v-if="!$page.props.auth.user" :class="{ 'translate-x-0': isMenuOpen, 'translate-x-full': !isMenuOpen }"
        class="z-50 fixed top-0 right-0 bottom-0 w-64 bg-white shadow-lg transform transition-transform duration-300 ease-in-out md:relative md:transform-none md:flex md:w-auto md:bg-transparent md:shadow-none">
        <div class="flex flex-col h-full justify-center space-y-4 md:flex-row md:space-y-0 md:space-x-8">
          <a  @click.prevent="scrollToSection('home')" href="#Home"
            class="block py-2 px-4 md:p-0 text-black lg:hover:text-blue lg:transition font-medium font-montserrat lg:text-lg">Home</a>
          <a  @click.prevent="scrollToSection('services')" href="#Services"
            class="block py-2 px-4 md:p-0 text-black lg:hover:text-blue lg:transition font-medium font-montserrat lg:text-lg">Services</a>
          <a  @click.prevent="scrollToSection('contact')" href="#Contact"
            class="block py-2 px-4 md:p-0 text-black lg:hover:text-blue lg:transition font-medium font-montserrat lg:text-lg">Contact</a>
          <Link href="/blog"
            class="block py-2 px-4 md:p-0 text-black lg:hover:text-blue lg:transition font-medium font-montserrat lg:text-lg">Blog</Link>
           
          <!-- Login/Signup options (visible only in mobile menu) -->
          <div class="md:hidden">
            <a @click.prevent="scrollToSection('login')" href="#Login"
              class="block py-2 px-4 text-blue lg:hover:text-blue lg:transition font-medium font-montserrat lg:text-lg">Login</a>
            <a @click.prevent="scrollToSection('signup')" href="#Signup"
              class="block py-2 px-4 text-blue lg:hover:text-blue lg:transition font-medium font-montserrat lg:text-lg">Sign Up</a>
          </div>
        </div>
      </div>

      <div v-if="$page.props.auth.user">
        <Link method="post" as="button" :href="route('logout')">Logout</Link>
    </div>
      <!-- NAV LOGIN/SIGNUP (Desktop) -->
      <div v-else class="hidden md:flex space-x-4 items-center">
        <Link :href="route('login')"
          class="text-blue lg:hover:text-black lg:transition font-medium font-montserrat lg:text-lg">Login</Link>
        <Link :href="route('register')"
          class="rounded-lg py-1 px-3 border-2 border-blue text-blue lg:hover:text-black lg:hover:border-black lg:transition font-medium font-montserrat lg:text-lg">Sign Up</Link>
      </div>
    </div>
  </nav>
</template>