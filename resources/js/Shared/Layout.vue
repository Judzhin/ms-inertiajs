<template>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">My App</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <Nav/>
                <!--<form class="d-flex">-->
                <!--    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">-->
                <!--    <button class="btn btn-outline-success" type="submit">Search</button>-->
                <!--</form>-->
            </div>

            <span class="navbar-text">
                Welcome Back, {{ username }}
            </span>

        </div>
    </nav>

<!--    <iframe height="200px" width="100%" frameborder="no" scrolling="no" seamless-->
<!--            src="https://player.simplecast.com/11eb3b6d-1454-4606-857a-7cafa9752cb5?dark=false"></iframe>-->
    <slot/>
</template>
<script>
import Nav from './Nav';

export default {
    components: {Nav},
    computed: {
        /**
         *
         * @returns {any}
         */
        username() {
            return this.$page.props.auth.user.username;
        }
    }
};
</script>
