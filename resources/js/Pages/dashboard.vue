<script setup>
import navbar from "../Sections/navbar.vue"


</script>
<template>
    <navbar></navbar>
    <div class="bg-slate-400 h-screen">
        <h1 class="text-white">welcome to the dashboard {{ $page.props.auth.user.name }}</h1>
    </div>
</template>