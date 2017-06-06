<template>
    <div class="container">
        <dashboard-header :title="department.name"></dashboard-header>

        <h2 class="subtitle is-2">Service Volumes</h2>

        <table class="table">
            <tr>
                <th>Program</th>
                <th>Online</th>
                <th>In Person</th>
                <th>Telephone</th>
                <th>Mail</th>
            </tr>
            <tr v-for="program in department.programs">
                <td><a :href="'/programs/' + program.id">{{ program.name }}</a></td>
                <td v-for="channel in program.volumes">{{ channel.applications }}</td>
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
            axios.get('/api/departments/' + this.id + '?include=programs').then(response => {
                this.department = response.data;
            });
        }
    }
</script>
