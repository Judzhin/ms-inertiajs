<template>
    <!--    <Layout>-->
    <h1>Users</h1>

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
            <th scope="row">1</th>
            <td>{{ user.name }}</td>
            <td>
                <!--<Link :href="'/users' + user.id + '/edit'">Edit</Link>-->
                <Link :href="`/users/${user.id}/edit`">Edit</Link>
            </td>
        </tr>
        </tbody>
    </table>

    <ul class="pagination">
        <li class="page-item" v-for="link in users.links">
            <Link :href="link.url" v-html="link.label" :class="'page-link'"/>
        </li>
    </ul>

    <div style="padding-top: 1000px;">
        <p>The current this is {{ time }}</p>
    </div>

    <Link href="/users" preserve-scroll>Refresh</Link>

    <!--    </Layout>-->
</template>
<script setup>
// import Layout from '../Shared/Layout';
// import {Link} from '@inertiajs/inertia-vue3'; // Global Import in App.js

// export default {
//     components: {Layout},
//     props: {time: String}
// };

defineProps({
    time: String,
    // users: Array
    users: Object
})

</script>
