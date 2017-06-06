<template>
    <div class="container">
        <dashboard-header :title="program.name"></dashboard-header>

        <table class="table">
            <tr>
                <th>Service Name</th>
                <th>ID</th>
                <th>Type</th>
                <th>Responsibility Area</th>
            </tr>
            <tr v-for="service in program.services">
                <td><a :href="'/services/' + service.id">{{ service.name }}</a></td>
                <td>{{ service.service_id }}</td>
                <td><span v-if="service.service_type">{{ service.service_type.name }}</span></td>
                <td><span v-if="service.responsibility_area">{{ service.responsibility_area.name }}</span></td>
            </tr>
        </table>
    </div>
</template>

<script>
    export default {
        props: ['id'],
        data() {
            return {
                program: []
            }
        },
        mounted() {
            axios.get('/api/programs/' + this.id).then(response => {
                this.program = response.data;
            });
        }
    }
</script>
