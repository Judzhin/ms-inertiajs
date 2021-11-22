<template>
    <Layout>
        <h1>Hello, {{ name }}</h1>
        <p>In this series, we will use the followwing frameworks:</p>
        <ul>
            <li v-for="framework of frameworks" v-text="framework"></li>
        </ul>
    </Layout>
</template>
<script>
import Layout from '../Shared/Layout';
export default {
    components: { Layout },
    props: {
        name: String,
        frameworks: Array
    }
};
</script>
