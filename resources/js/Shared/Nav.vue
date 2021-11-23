<template>
  <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex">
    <li class="nav-item">
      <NavLink href="/" :active="'/' == $page.url"> Home </NavLink>
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
    <li class="nav-item">
      <NavLink href="/logout" method="post">Log Out</NavLink>
    </li>
  </ul>
</template>
<script>
import NavLink from "./NavLink";
import { Link } from "@inertiajs/inertia-vue3";

export default {
  components: { Link, NavLink },
};
</script>
