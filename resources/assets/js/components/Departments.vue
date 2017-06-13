<template>
    <div class="container">
        <div class="breadcrumbs">
            <a href="/">Home</a> >
            Departments
        </div>

        <div class="toggle-charts">
            <a v-on:click="toggleCharts" :class="['button', show_charts ? 'is-danger' : 'is-primary']">
                <span class="icon">
                    <i class="fa fa-bar-chart"></i>
                </span>
                <span>{{ show_charts ? 'Hide Charts' : 'Show Charts' }}</span>
            </a>
        </div>

        <h2 class="subtitle is-2">Service Volume by Department</h2>

        <service-volume :chartId="'service-volume-department-chart'" :csv="'/api/charts/departments/service_volume'" v-show="show_charts"></service-volume>

        <table class="table is-bordered is-striped">
            <thead>
                <tr>
                    <th></th>
                    <th colspan="2">Online</th>
                    <th colspan="2">In Person</th>
                    <th colspan="2">Telephone</th>
                    <th colspan="2">Mail</th>
                </tr>
                <tr>
                    <th>Department</th>
                    <th><abbr title="Applications">A</abbr></th>
                    <th><abbr title="Outputs">O</abbr></th>
                    <th><abbr title="Applications">A</abbr></th>
                    <th><abbr title="Outputs">O</abbr></th>
                    <th><abbr title="Applications">A</abbr></th>
                    <th><abbr title="Outputs">O</abbr></th>
                    <th><abbr title="Applications">A</abbr></th>
                    <th><abbr title="Outputs">O</abbr></th>
                </tr>
            </thead>
            <tr v-for="department in departments">
                <td><a :href="'/departments/' + department.id">{{ department.name }}</a></td>
                <template v-for="channel in department.channel_volumes.channels">
                    <td>{{ channel.applications }}</td>
                    <td>{{ channel.outputs }}</td>
                </template>
            </tr>
        </table>

        <h2 class="subtitle is-2">Completion Rates</h2>

        <completion-rate :csv="'/api/charts/departments/completion'" v-if="show_charts"></completion-rate>

        <table class="table">
            <tr>
                <th>Department Name</th>
                <th>Applications</th>
                <th>Outputs</th>
                <th>Percent Complete</th>
            </tr>
            <tr v-for="department in departments">
                <td><a :href="'/departments/' + department.id">{{ department.name }}</a></td>
                <td>{{ department.channel_volumes.total_applications }}</td>
                <td>{{ department.channel_volumes.total_outputs }}</td>
                <td><span :class="{ 'is-danger' : department.channel_volumes.percent_complete > 100 }">{{ department.channel_volumes.percent_complete }}%</span></td>
            </tr>
        </table>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                departments: null,
                show_charts: false
            }
        },
        mounted() {
            axios.get('/api/departments/').then(response => {
                this.departments = response.data;
            });
        },
        methods: {
            toggleCharts: function() {
                this.show_charts = !this.show_charts;
            }
        }
    }
</script>
