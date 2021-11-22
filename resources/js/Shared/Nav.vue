<template>

    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <NavLink href="/" :active="'/' == $page.url">
                Home
            </NavLink>
        </li>
        <li class="nav-item">
            <NavLink href="/users" :active="$page.url.startsWith('/users')">
                Users
            </NavLink>
        </li>
        <li class="nav-item">
            <NavLink href="/settings" :active="'Settings' == $page.component">
                Settings
            </NavLink>
        </li>
    </ul>

    <!--<li>-->
    <!--    <Link href="/logout" method="post" :data="{foo:'bar'}" as="button" :class="'btn btn-link'">-->
    <!--        Log Out-->
    <!--    </Link>-->
    <!--</li>-->

</template>
<script>
import NavLink from './NavLink';
import {Link} from '@inertiajs/inertia-vue3';

export default {
    components: {Link, NavLink},
};
</script>
