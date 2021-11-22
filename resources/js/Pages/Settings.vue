<template>

    <Head>
        <!--<title>My App - Setting</title>-->
        <title>Setting</title>
        <meta type="description" content="Information About My Setting Page" head-key="description"/>
    </Head>

    <!--    <Layout>-->
    <h1>Settings</h1>
    <!--    </Layout>-->
</template>
<script>
import Layout from '../Shared/Layout';
import {Head} from '@inertiajs/inertia-vue3';

export default {
    // components: { Layout },
    components: {Head},
    layout: Layout
};
</script>
