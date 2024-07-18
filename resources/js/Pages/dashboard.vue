<script setup>
import navbar from "../Sections/navbar.vue"

defineProps({
    users: Object, //change this to blogs in passafund office
});

</script>
<template>
    <navbar></navbar>
    <div class="bg-slate-400 h-64">
        <h1 class="text-white">welcome to the dashboard {{ $page.props.auth.user.name }}</h1>
    </div>

    <div>
        <table>
            <thead>
                <tr>
                    <th>email</th>
                    <th>name</th>
                    <th>register date</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="user in users.data" :key="user.id">
                    <td>{{user.name}}</td>
                    <td>{{user.email}}</td>
                    <td>{{user.created_at}}</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>