<template>
    <h1>User Create</h1>

    <div class="row justify-content-md-center">
        <form @submit.prevent="submit" class="col col-md-6">
            <div class="mb-3">
                <label for="inputName" class="form-label">Name</label>
                <input v-model="form.name"
                       :class="['form-control', {'is-invalid': form.errors.name}]"
                       id="inputName"
                       aria-describedby="nameHelp"
                       type="text"/>
                <div id="nameHelp" class="form-text">Write user name.</div>
                <div class="invalid-feedback" v-text="form.errors.name"></div>
            </div>
            <div class="mb-3">
                <label for="inputEmail" class="form-label">Email</label>
                <input v-model="form.email" type="email"
                       :class="['form-control', {'is-invalid': form.errors.email}]"
                       id="inputEmail"
                       aria-describedby="emailHelp"/>
                <div id="emailHelp" class="form-text">Write user email.</div>
                <div class="invalid-feedback" v-text="form.errors.email"></div>
            </div>
            <div class="mb-3">
                <label for="inputPassword" class="form-label">Password</label>
                <input v-model="form.password" type="password"
                       :class="['form-control', {'is-invalid': $page.props.errors.password}]"
                       id="inputPassword"/>
                <div class="invalid-feedback" v-text="errors.password"></div>
            </div>
            <!--<button type="submit" class="btn btn-primary" :disabled="processing">Submit</button>-->
            <button type="submit" class="btn btn-primary" :disabled="form.processing">Submit</button>
        </form>
    </div>

</template>
<script setup>
import {reactive, ref} from 'vue';
import {Inertia} from '@inertiajs/inertia';
import {useForm} from '@inertiajs/inertia-vue3';

defineProps({
    errors: Object
});

// let form = reactive({
//     name: '',
//     email: '',
//     password: '',
// });

// this.$inertia.form({
//     name: '',
//     ...
// });

let form = useForm({
    name: '',
    email: '',
    password: '',
});

// let processing = ref(false);

let submit = () => {
    // processing.value = true;
    // Inertia.post('/users', form, {
    //     onStart: () => {
    //         processing.value = true
    //     },
    //     onFinish: () => {
    //         processing.value = false
    //     }
    // });
    form.post('/users');
};
</script>
