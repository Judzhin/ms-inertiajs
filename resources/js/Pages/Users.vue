<template>
    <Layout>
        <h1>Users</h1>

        <div style="padding-top: 1000px;">
            <p>The current thi is {{ time }}</p>
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
    time: String
})

</script>
