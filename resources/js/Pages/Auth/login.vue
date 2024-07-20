<script setup>
    import { Link, router, useForm } from '@inertiajs/vue3';
// import { reactive } from 'vue';

    const form = useForm({
        email: null,
        password: null,
    });

const submit = () =>{
   form.post(route('login'), {
    onError: () => form.reset("password"),
   });
};

</script>
<template>
    <div>
        <form @submit.prevent="submit" >
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
            
            <button type="submit" :disabled="form.processing">Submit</button>
        </form>
    </div>
</template>