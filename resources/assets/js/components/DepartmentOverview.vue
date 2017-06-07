<template>
    <div v-if="department">
        <div class="breadcrumbs">
            <a href="/">Home</a> >
            {{ department.name }}
        </div>

        <h1 class="title has-text-centered">{{ department.name }}</h1>

        <div class="level">
            <div class="level-item has-text-centered">
                <div>
                    <h2 class="title is-1">{{ department.channel_volumes.total_applications }}</h2>
                    <p class="heading">Applications</p>
                </div>
            </div>
            <div class="level-item has-text-centered">
                <div>
                    <h2 class="title is-1">{{ department.channel_volumes.total_outputs }}</h2>
                    <p class="heading">Outputs</p>
                </div>
            </div>
            <div class="level-item has-text-centered">
                <div>
                    <h2 class="title is-1">{{ department.channel_volumes.percent_complete }}%</h2>
                    <p class="heading">Completion Rate</p>
                </div>
            </div>
        </div>

        <h2 class="title is-3">Service Volume by Program</h2>

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
                <td v-for="channel in program.channel_volumes.channels">{{ channel.applications }}</td>
            </tr>
        </table>
    </div>
</template>

<script>
    export default {
        props: ['id'],
        data() {
            return {
                department: null
            }
        },
        mounted() {
            axios.get('/api/departments/' + this.id + '?include=programs').then(response => {
                this.department = response.data;
            });
        }
    }
</script>
