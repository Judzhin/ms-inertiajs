<template>
    <h1>User Create</h1>

    <div class="row justify-content-md-center">
        <form @submit.prevent="submit" class="col col-md-6 ">
            <div class="mb-3">
                <label for="inputName" class="form-label">Name</label>
                <input v-model="form.name"
                       :class="['form-control', {'is-invalid': $page.props.errors.name}]"
                       id="inputName"
                       aria-describedby="nameHelp"
                       type="text"/>
                <div id="nameHelp" class="form-text">Write user name.</div>
                <div class="invalid-feedback" v-text="$page.props.errors.name"></div>
            </div>
            <div class="mb-3">
                <label for="inputEmail" class="form-label">Email</label>
                <input v-model="form.email" type="email"
                       :class="['form-control', {'is-invalid': $page.props.errors.email}]"
                       id="inputEmail"
                       aria-describedby="emailHelp"/>
                <div id="emailHelp" class="form-text">Write user email.</div>
                <div class="invalid-feedback" v-text="errors.email"></div>
            </div>
            <div class="mb-3">
                <label for="inputPassword" class="form-label">Password</label>
                <input v-model="form.password" type="password"
                       :class="['form-control', {'is-invalid': $page.props.errors.email}]"
                       id="inputPassword"/>
                <div class="invalid-feedback" v-text="errors.password"></div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</template>
<script setup>
import {reactive} from 'vue';
import {Inertia} from '@inertiajs/inertia';

defineProps({
    errors: Object
});
let form = reactive({
    name: '',
    email: '',
    password: '',
});

let submit = () => {
    Inertia.post('/users', form);
};
</script>
