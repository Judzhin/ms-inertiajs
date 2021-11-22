<template>
    <h1>User Create</h1>

    <div class="row justify-content-md-center">
        <form @submit.prevent="submit" class="col col-md-6">
            <div class="mb-3">
                <label for="inputName" class="form-label">Name</label>
                <input v-model="form.name" type="text" class="form-control" id="inputName"
                       aria-describedby="nameHelp">
                <div id="nameHelp" class="form-text">Write user name.</div>
            </div>
            <div class="mb-3">
                <label for="inputEmail" class="form-label">Email</label>
                <input v-model="form.email" type="email" class="form-control" id="inputEmail"
                       aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">Write user email.</div>
            </div>
            <div class="mb-3">
                <label for="inputPassword" class="form-label">Password</label>
                <input v-model="form.password" type="password" class="form-control" id="inputPassword">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</template>
<script setup>
import {reactive} from 'vue';
import {Inertia} from '@inertiajs/inertia';

defineProps({});
let form = reactive({
    name: '',
    email: '',
    password: '',
});

let submit = () => {
    Inertia.post('/users', form);
};
</script>
