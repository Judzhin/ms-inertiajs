<template>
    <ul class="pagination">
        <!--<li class="page-item" v-for="link in users.links">-->
        <!--    <Link :href="link.url" v-html="link.label" :class="'page-link'"/>-->
        <!--</li>-->
        <template v-for="link in links">
            <li :class="['page-item', {'active': link.active}, link.url ? '' : 'disabled']">
                <!--<Component is="Link" :href="link.url" v-html="link.label" :class="'page-link'"/>-->
                <Component
                    :is="link.active ? 'span' : 'Link'"
                    :href="link.url" v-html="link.label" :class="'page-link'"/>
            </li>
        </template>
    </ul>
</template>
<script>
export default {
    props: {
        links: Array
    }
};
</script>
