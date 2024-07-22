<script setup>
import { Link, useForm } from '@inertiajs/vue3';
import navbar from '../../Sections/navbar.vue';

const form = useForm({
    name: null,
    email: null,
    password: null,
    password_confirmation: null,
});

const submit = () => {
   form.post(route('register'), {
    onError: () => form.reset("password", "password_confirmation"),
   });
};
</script>

<template>
    <div>
    <navbar class="!static"></navbar>
    <div class="bg-blue h-screen flex flex-col items-center">
    <v-container >
        <v-row justify="center bg-blue">
            <v-col cols="12" sm="8" md="6">
                <v-card>
                    <div class="flex justify-center items-center p-8  text-4xl">Register</div>
                    <v-card-text>
                        <v-form @submit.prevent="submit">
                            <v-text-field
                                v-model="form.name"
                                label="Name"
                                :error-messages="form.errors.name"
                                required
                            ></v-text-field>

                            <v-text-field
                                v-model="form.email"
                                label="Email"
                                type="email"
                                :error-messages="form.errors.email"
                                required
                            ></v-text-field>

                            <v-text-field
                                v-model="form.password"
                                label="Password"
                                type="password"
                                :error-messages="form.errors.password"
                                required
                            ></v-text-field>

                            <v-text-field
                                v-model="form.password_confirmation"
                                label="Confirm Password"
                                type="password"
                                required
                            ></v-text-field>
                            <div class="flex flex-col">
                            <v-btn
                            class="bg-blue w-full text-slate-50 p-10 mb-5"
                                type="submit"
                                :loading="form.processing"
                                :disabled="form.processing"
                            >
                                Register
                            </v-btn>
                            <Link :href="route('login')" class="flex justify-center mt-3">
                            Already have an account? <span class="text-blue ">Login</span>
                        </Link>
                    </div>
                        </v-form>
                        
                    </v-card-text>
                </v-card>
            </v-col>
        </v-row>
    </v-container>
</div>
</div>
</template>