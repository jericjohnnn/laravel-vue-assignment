<script setup>
import { Link, router, useForm } from '@inertiajs/vue3';

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
    <v-container>
        <v-row justify="center">
            <v-col cols="12" sm="8" md="6">
                <v-card>
                    <v-card-title>Register</v-card-title>
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

                            <v-btn
                                type="submit"
                                color="primary"
                                :loading="form.processing"
                                :disabled="form.processing"
                            >
                                Submit
                            </v-btn>
                        </v-form>
                    </v-card-text>
                </v-card>
            </v-col>
        </v-row>
    </v-container>
</template>