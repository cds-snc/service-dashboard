<template>
    <div class="container">
        <h1 class="title is-1">{{ service.name }}</h1>
    </div>
</template>

<script>
    export default {
        props: ['id'],
        data() {
            return {
                service: []
            }
        },
        mounted() {
            axios.get('/api/services/' + this.id).then(response => {
                this.service = response.data;
            });
        }
    }
</script>
