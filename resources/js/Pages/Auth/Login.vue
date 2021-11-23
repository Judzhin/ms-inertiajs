<template>
  <Head title="Login Form" />

  <div class="row justify-content-md-center mt-5">
    <form @submit.prevent="submit" class="col col-md-2">
      <h1>Login</h1>
      <div class="form-group">
        <label for="inputEmail">Email address</label>
        <input
          v-model="form.email"
          type="email"
          :class="['form-control', { 'is-invalid': form.errors.email }]"
          id="inputEmail"
          aria-describedby="emailHelp"
          placeholder="Enter email"
        />
        <div class="invalid-feedback" v-text="form.errors.email"></div>
        <small id="emailHelp" class="form-text text-muted"
          >We'll never share your email with anyone else.</small
        >
      </div>
      <div class="form-group mb-2">
        <label for="inputPassword">Password</label>
        <input
          v-model="form.password"
          type="password"
          :class="['form-control', { 'is-invalid': form.errors.password }]"
          id="inputPassword"
          placeholder="Password"
        />
        <div class="invalid-feedback" v-text="form.errors.password"></div>
      </div>
      <button type="submit" class="btn btn-primary" :disabled="form.processing">
        Login
      </button>
    </form>
  </div>
</template>

<script>
export default {
  layout: null,
};
</script>
<script setup>
import { Head, useForm } from "@inertiajs/inertia-vue3";

let form = useForm({
  email: "",
  password: "",
});

let submit = () => {
    form.post('login');
}
</script>