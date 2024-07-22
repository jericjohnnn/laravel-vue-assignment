<script setup>
import navbar from '../../Sections/navbar.vue';
import { Link, useForm } from '@inertiajs/vue3';

const form = useForm({
    email: null,
    password: null,
});

const submit = () => {
   form.post(route('login'), {
    onError: () => form.reset("password"),
   });
};
</script>

<template>
  <v-app>
    <navbar class="!static"></navbar>
    <v-main class="bg-blue ">
      <v-container class="fill-height " fluid>
        <v-row align="center" justify="center" >
          <v-col class="flex justify-center items-center"  cols="12" sm="8" md="6" lg="4">
            <v-card class="elevation-12 w-4/5 ">
              <v-toolbar color="primary" dark flat>
                <v-toolbar-title class="flex justify-center">Login</v-toolbar-title>
              </v-toolbar>
              <v-card-text>
                <v-form @submit.prevent="submit">
                  <v-text-field
                    v-model="form.email"
                    :error-messages="form.errors.email"
                    label="Email"
                    name="email"
                    prepend-icon="mdi-email"
                    type="email"
                    required
                  ></v-text-field>

                  <v-text-field
                    v-model="form.password"
                    :error-messages="form.errors.password"
                    label="Password"
                    name="password"
                    prepend-icon="mdi-lock"
                    type="password"
                    required
                  ></v-text-field>
                </v-form>
              </v-card-text>
              <v-card-actions class=" flex flex-col ">
                <v-spacer></v-spacer>
                <v-btn 
                class="bg-blue w-full text-slate-50 p-10 mb-5"
                
                  @click="submit" 
                  :loading="form.processing" 
                  :disabled="form.processing"
                >
                  Login
                </v-btn>
                <Link :href="route('register')">
                    Don't have an account? <span class="text-blue">Register</span>
              </Link>
              </v-card-actions>
             
            </v-card>
          </v-col>
        </v-row>
      </v-container>
    </v-main>
  </v-app>
</template>