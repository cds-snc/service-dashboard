<template>
    <div v-if="department">
        <div class="breadcrumbs">
            <a href="/">Home</a> >
            {{ department.name }}
        </div>

        <div class="toggle-charts">
            <a v-on:click="toggleCharts" :class="['button', show_charts ? 'is-danger' : 'is-primary']">
                <span class="icon">
                    <i class="fa fa-bar-chart"></i>
                </span>
                <span>{{ show_charts ? 'Hide Charts' : 'Show Charts' }}</span>
            </a>
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

        <h2 class="title is-3">Department Service Volume by Channel</h2>
        <service-volume :chartId="'service-volume-program-chart'" :csv="'/api/charts/departments/' + this.id + '/service_volume'" v-show="show_charts"></service-volume>

        <table class="table">
            <tr>
                <th>Channel</th>
                <th>Applications</th>
                <th>Outputs</th>
                <th>Percent Complete</th>
            </tr>
            <tr v-for="channel in department.channel_volumes.channels">
                <td>{{ channel.name }}</td>
                <td>{{ channel.applications }}</td>
                <td>{{ channel.outputs }}</td>
                <td>{{ channel.percent_complete }}%</td>
            </tr>
        </table>

        <h2 class="title is-3">Programs</h2>

        <service-volume :chartId="'service-volume-programs-chart'" :csv="'/api/charts/departments/' + this.id + '/programs/service_volume'" v-show="show_charts"></service-volume>

        <table class="table">
            <tr>
                <th>Program</th>
                <th>Applications</th>
                <th>Outputs</th>
                <th>Completion Rate</th>
            </tr>
            <tr v-for="program in department.programs">
                <td><a :href="'/programs/' + program.id">{{ program.name }}</a></td>
                <td>{{ program.channel_volumes.total_applications }}</td>
                <td>{{ program.channel_volumes.total_outputs }}</td>
                <td><span :class="{ 'is-danger' : program.channel_volumes.percent_complete > 100 }">{{ program.channel_volumes.percent_complete }}%</span></td>
            </tr>
        </table>
    </div>
</template>

<script>
    export default {
        props: ['id'],
        data() {
            return {
                department: null,
                show_charts: false
            }
        },
        mounted() {
            axios.get('/api/departments/' + this.id + '?include=programs').then(response => {
                this.department = response.data;
            });
        },
        methods: {
            toggleCharts: function() {
                this.show_charts = !this.show_charts;
            }
        }
    }
</script>
