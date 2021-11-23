<template>

    <Head>
        <!--<title>My App - Home</title>-->
        <title>Home</title>
        <meta type="description" content="Information About My Home Page" head-key="description"/>
    </Head>

    <!--    <Layout>-->
    <h1>Hello, {{ name }}</h1>
    <p>In this series, we will use the followwing frameworks:</p>
    <ul>
        <li v-for="framework of frameworks" v-text="framework"></li>
    </ul>
    <!--    </Layout>-->
</template>
<script>
import Layout from '../Shared/Layout';
import {Head} from '@inertiajs/inertia-vue3';

export default {
    // components: { Layout },
    components: {Head},
    layout: Layout,
    props: {
        name: String,
        frameworks: Array
    }
};
</script>
