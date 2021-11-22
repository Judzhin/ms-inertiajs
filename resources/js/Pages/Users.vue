<template>
    <Layout>
        <h1>Users</h1>

        <div style="padding-top: 1000px;">
            <p>The current thi is {{ time }}</p>
        </div>

        <Link href="/users" preserve-scroll>Refresh</Link>

    </Layout>
</template>
<script>
import {Link} from '@inertiajs/inertia-vue3';
import Layout from '../Shared/Layout';

export default {
    components: {Layout, Link},
    props: {time: String}
};
</script>
