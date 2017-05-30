<template>
    <div class="container">
        <h1 class="title is-1">{{ department.name }}</h1>
    </div>
</template>

<script>
    export default {
        props: ['id'],
        data() {
            return {
                department: []
            }
        },
        mounted() {
            axios.get('/api/departments/' + this.id).then(response => {
                this.department = response.data;
            });
        }
    }
</script>
