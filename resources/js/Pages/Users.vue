<template>
    <Layout>
        <h1>Users</h1>

        <ul>
            <li
                v-for="user in users"
                :key="user.id"
                v-text="user.name">
            </li>
        </ul>

        <div style="padding-top: 1000px;">
            <p>The current this is {{ time }}</p>
        </div>

        <Link href="/users" preserve-scroll>Refresh</Link>

    </Layout>
</template>
<script setup>
import Layout from '../Shared/Layout';
// import {Link} from '@inertiajs/inertia-vue3'; // Global Import in App.js

// export default {
//     components: {Layout},
//     props: {time: String}
// };

defineProps({
    time: String,
    users: Array
})

</script>
