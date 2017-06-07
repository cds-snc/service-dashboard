<template>
    <div>
        <nav class="nav">
            <div class="nav-left">
                <a href="/" class="nav-item"><h1 class="subtitle">SERVICE DASHBOARD</h1></a>
            </div>
            <div class="nav-center">

            </div>
            <div class="nav-right nav-menu">
                <a href="/" class="nav-item">Search</a>
                <a href="/departments" class="nav-item">Departments</a>
            </div>
        </nav>

        <h1 class="title has-text-centered">{{ title }}</h1>

    </div>
</template>

<script>
    export default {
        props: ['title'],
    }
</script>