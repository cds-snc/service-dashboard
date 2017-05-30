<template>
    <div class="container">
        <h1 class="title is-1">{{ department.name }}</h1>

        <table class="table">
            <tr>
                <th>Service Name</th>
                <th>ID</th>
                <th>Type</th>
                <th>Responsibility Area</th>
                <th>Program</th>
            </tr>
            <tr v-for="service in department.services">
                <td>{{ service.name }}</td>
                <td>{{ service.service_id }}</td>
                <td><span v-if="service.service_type">{{ service.service_type.name }}</span></td>
                <td><span v-if="service.responsibility_area">{{ service.responsibility_area.name }}</span></td>
                <td><span v-if="service.program">{{ service.program.name }}</span></td>
            </tr>
        </table>
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
