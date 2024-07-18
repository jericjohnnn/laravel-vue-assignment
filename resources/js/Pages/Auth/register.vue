<script setup>
    import { Link, router, useForm } from '@inertiajs/vue3';
// import { reactive } from 'vue';

    const form = useForm({
        name: null,
        email: null,
        password: null,
        password_confirmation: null,
    });

const submit = () =>{
   form.post(route('register'), {
    onError: () => form.reset("password", "password_confirmation"),
   });
};

</script>
<template>
    <div>
        <form @submit.prevent="submit" >
            <div>
                <label >name</label>
                <input type="text" v-model="form.name">
                <small>{{ form.errors.name }}</small>
            </div>
            <div>
                <label >email</label>
                <input type="email" v-model="form.email">
                <small>{{ form.errors.email }}</small>
            </div>
            <div>
                <label >password</label>
                <input type="password" v-model="form.password">
                <small>{{ form.errors.password }}</small>
            </div>
            <div>
                <label >confirm password</label>
                <input type="password" v-model="form.password_confirmation">
            </div>
            <button type="submit" :disabled="form.processing">Submit</button>
        </form>
    </div>
</template>