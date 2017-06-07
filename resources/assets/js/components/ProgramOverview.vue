<template>
    <div class="container">
        <dashboard-header :title="program.name"></dashboard-header>

        <h2 class="title is-3">Service Volume by Service</h2>

        <table class="table">
            <tr>
                <th>Service</th>
                <th>Online</th>
                <th>In Person</th>
                <th>Telephone</th>
                <th>Mail</th>
            </tr>
            <tr v-for="service in program.services">
                <td><a :href="'/services/' + service.id">{{ service.name }}</a></td>
                <td v-for="channel in service.channel_volumes.channels">{{ channel.applications }}</td>
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
