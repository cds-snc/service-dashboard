<template>
    <div class="container" v-if="service">
        <nav class="nav">
            <div class="nav-left">
                <a href="" class="nav-item"><< Back</a>
            </div>
            <div class="nav-center">
                <div class="nav-item">
                    <h2 class="subtitle">SERVICE DASHBOARD</h2>
                </div>
            </div>
            <div class="nav-right"></div>
        </nav>

        <h1 class="title is-1 has-text-centered">{{ service.name }}</h1>

        <div class="level">
            <div class="level-item has-text-centered">
                <div>
                    <h2 class="title is-1">{{ service.channel_volumes.total_outputs }}</h2>
                    <p class="heading">Transactions</p>
                </div>
            </div>
            <div class="level-item has-text-centered">
                <div>
                    <h2 class="title is-1">{{ service.channel_volumes.percent_complete }}%</h2>
                    <p class="heading">Completion Rate</p>
                </div>
            </div>
        </div>

        <h2 class="title is-2">Details</h2>
        <p>{{ service.description }}</p>

        <div class="columns">
            <div class="column">
                <dl class="service-details">
                    <dt>Service Owner</dt>
                    <dd>{{ service.department.name }}</dd>

                    <dt>Program Name</dt>
                    <dd>{{ service.program.name }}</dd>

                    <dt>Responsibility Area</dt>
                    <dd>{{ service.responsibility_area.name }}</dd>

                    <dt>Authority</dt>
                    <dd>{{ service.authority }}</dd>
                </dl>
            </div>
            <div class="column">
                <dl class="service-details">
                    <dt>Service Type</dt>
                    <dd v-if="service.service_type">{{ service.service_type.name }}</dd>

                    <dt v-if="service.special_designations">Special Designations</dt>
                    <dd><span v-for="designation in service.special_designations">{{ designation.name }}<br></span></dd>

                    <dt>Service Agreements</dt>
                    <dd>{{ service.service_agreements }}</dd>

                    <dt>Internal/External</dt>
                    <dd>{{ service.service_orientation }}</dd>
                </dl>
            </div>
            <div class="column">
                <dl class="service-details">
                    <dt>Service Standards</dt>
                    <dd>{{ service.service_standards }}</dd>

                    <dt>Performance Targets</dt>
                    <dd>{{ service.performance_targets }}</dd>

                    <dt>User Fee</dt>
                    <dd>{{ service.user_fee }}</dd>
                </dl>
            </div>
        </div>

        <h2 class="title is-2">Transaction Volume</h2>

        <table class="table">
            <tr>
                <th>Channel</th>
                <th>Applications</th>
                <th>Outputs</th>
                <th>Percent Complete</th>
            </tr>
            <tr v-for="channel in service.channel_volumes.channels">
                <td>{{ channel.name }}</td>
                <td>{{ channel.applications }}</td>
                <td>{{ channel.outputs }}</td>
                <td>{{ channel.percent_complete }}%</td>
            </tr>
        </table>

        <h2 class="title is-2">eEnabled Services</h2>

        <div class="columns">
            <div v-for="eservice in service.e_services.services" class="column has-text-centered">
                <strong>{{ eservice.name }}</strong><br>
                {{ eservice.enabled }}
            </div>
            <div class="column has-text-centered">
                <strong>Estimated % of the service completed online</strong><br>
                {{ service.e_services.score }}
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['id'],
        data() {
            return {
                service: null
            }
        },
        created() {
            axios.get('/api/services/' + this.id).then(response => {
                this.service = response.data;
            });
        }
    }
</script>

<style lang="scss">
    dl.service-details {
        dt {
            font-weight: bold;
            margin-top: 20px;
        }
    }
</style>