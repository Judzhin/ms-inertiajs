<template>
    <!--    <Layout>-->
    <div class="d-flex justify-content-between">
        <div class="bd-highlight">
            <h1 class="float-start">Users</h1>
            <Link v-if="can.createUser" href="/users/create" class="btn btn-outline-primary mt-2 ms-2">New User</Link>
        </div>
        <div class="bd-highlight">
            <input v-model="search" type="search" class="form-control mt-2" placeholder="Search..."/>
        </div>
    </div>

    <!--<ul>-->
    <!--    <li-->
    <!--        v-for="user in users"-->
    <!--        :key="user.id"-->
    <!--        v-text="user.name">-->
    <!--    </li>-->
    <!--</ul>-->

    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Handle</th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="user in users.data" :key="user.id">
            <th scope="row">{{ user.id }}</th>
            <td>{{ user.name }}</td>
            <td>
                <!--<Link :href="'/users' + user.id + '/edit'">Edit</Link>-->
                <Link v-if="user.can.edit" :href="`/users/${user.id}/edit`">Edit</Link>
            </td>
        </tr>
        </tbody>
    </table>

    <!--<ul class="pagination">-->
    <!--    &lt;!&ndash;<li class="page-item" v-for="link in users.links">&ndash;&gt;-->
    <!--    &lt;!&ndash;    <Link :href="link.url" v-html="link.label" :class="'page-link'"/>&ndash;&gt;-->
    <!--    &lt;!&ndash;</li>&ndash;&gt;-->
    <!--    <template v-for="link in users.links">-->
    <!--        <li :class="['page-item', {'active': link.active}, link.url ? '' : 'disabled']" >-->
    <!--            &lt;!&ndash;<Component is="Link" :href="link.url" v-html="link.label" :class="'page-link'"/>&ndash;&gt;-->
    <!--            <Component-->
    <!--                :is="link.active ? 'span' : 'Link'"-->
    <!--                :href="link.url" v-html="link.label" :class="'page-link'"/>-->
    <!--        </li>-->
    <!--    </template>-->
    <!--</ul>-->

    <Pagination :links="users.links"/>

    <div style="padding-top: 1000px;">
        <p>The current this is {{ time }}</p>
    </div>

    <Link href="/users" preserve-scroll>Refresh</Link>

    <!--    </Layout>-->
</template>
<script setup>
// import Layout from '../Shared/Layout';
import {Link} from '@inertiajs/inertia-vue3'; // Global Import in App.js
import Pagination from '../../Shared/Pagination';
import {ref, watch} from 'vue';
import {Inertia} from '@inertiajs/inertia';
import throttle from 'lodash/throttle'
import debounce from 'lodash/debounce'
// export default {
//     components: {Layout},
//     props: {time: String}
// };

let props = defineProps({
    time: String,
    // users: Array
    users: Object,
    filters: Object,
    can: Object
})

let search = ref(props.filters.search);

// watch(search, value => {
//     // console.log('Changed' + value);
//     Inertia.get('/users', {search: value}, {
//         preserveState: true,
//         replace: true
//     });
// });

// watch(search, throttle(value => {
watch(search, debounce(value => {
    // console.log('Changed' + value);
    Inertia.get('/users', {search: value}, {
        preserveState: true,
        replace: true
    });
}, 500));

</script>
