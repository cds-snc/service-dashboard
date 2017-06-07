<<template>
    <div>
        <div class="field">
            <label for="filter" class="subtitle">Search Services</label>
            <input type="text" v-model="filter" id="filter" name="filter" class="input is-large" placeholder="Filter by Department, Service Name, or Program Name">
        </div>

        <div class="columns">
            <div class="column">
                <div class="field">
                    <label for="orientation">Internal/External</label>
                    <p class="control">
                        <span class="select">
                            <select v-model="orientation" id="orientation" name="orientation">
                                <option value="any">Any</option>
                                <option value="External">External</option>
                                <option value="Internal">Internal</option>
                            </select>
                        </span>
                    </p>
                </div>
            </div>
            <div class="column">
                <div class="field">
                    <label for="service_agreements">
                        Service Agreements
                    </label>
                    <p class="control">
                        <span class="select">
                            <select v-model="agreements" id="service_agreements" name="agreements">
                                <option value="any" selected>Any</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </span>
                    </p>
                </div>
            </div>
            <div class="column">
                <div class="field">
                    <label for="selected_designation">
                        Special Designation
                    </label>
                    <p class="control">
                        <span class="select">
                            <select v-model="selected_designation" id="selected_designation" name="selected_designation">
                                <option value="any" selected>Any</option>
                                <option v-for="designation in special_designations" :value="designation">{{ designation.name }}</option>
                            </select>
                        </span>
                    </p>
                </div>
            </div>
            <div class="column">
                <div class="field">
                    <label for="service_type">
                        Service Type
                    </label>
                    <p class="control">
                        <span class="select">
                            <select v-model="selected_type" id="service_type" name="service_type">
                                <option value="any" selected>Any</option>
                                <option v-for="type in service_types" :value="type.id">{{ type.name }}</option>
                            </select>
                        </span>
                    </p>
                </div>
            </div>
        </div>

        <table v-if="filteredServices.length" class="table is-striped is-bordered services">
            <tr>
                <th>Department</th>
                <th>Program</th>
                <th>Service Name</th>
                <th>Applications/Outputs</th>
                <th>Completion Rate</th>
            </tr>
            <tr v-for="service in filteredServices">
                <td><a :href="'/departments/' + service.department.id">{{ service.department.name }}</a></td>
                <td><a :href="'/programs/' + service.program.id">{{ service.program.name }}</a></td>
                <td><a :href="'/services/' + service.id">{{ service.name }}</a></td>
                <td>{{ service.channel_volumes.total_applications }}/{{ service.channel_volumes.total_outputs }}</td>
                <td>{{ service.channel_volumes.percent_complete }}%</td>
            </tr>
        </table>
        <div v-else class="notification">
            No Services Found
        </div>

    </div>
</template>

<script>
    export default {
        data() {
            return {
                filter: '',
                orientation: 'any',
                agreements: 'any',
                services: [],
                service_types: [],
                selected_type: 'any',
                special_designations: [],
                selected_designation: 'any'
            }
        },
        mounted() {
            axios.get('/api/services').then(response => {
                this.services = response.data;
            });
            axios.get('/api/service_types').then(response => {
                this.service_types = response.data;
            });
            axios.get('/api/special_designations').then(response => {
                this.special_designations = response.data;
            });
        },
        computed: {
            filteredServices() {
                return this.services.filter(service => {
                    return service.name.toLowerCase().indexOf(this.filter.toLowerCase()) > -1 ||
                            service.department.name.toLowerCase().indexOf(this.filter.toLowerCase()) > -1 ||
                            service.program.name.toLowerCase().indexOf(this.filter.toLowerCase()) > -1
                }).filter(service => {
                    if (this.orientation == 'any') {
                        return true;
                    }
                    return service.service_orientation == this.orientation;
                }).filter(service => {
                    if (this.agreements == 'any') {
                        return true;
                    }
                    return service.service_agreements == this.agreements;
                }).filter(service => {
                    if (this.selected_type == 'any') {
                        return true;
                    }
                    if (service.service_type) {
                        return service.service_type.id == this.selected_type;
                    }
                }).filter(service => {
                    if (this.selected_designation == 'any') {
                        return true;
                    }
                    if (this.selected_designation.name == 'None') {
                        if (service.special_designations) {
                            return service.special_designations.length == 0;
                        }
                    }
                    return _.find(service.special_designations, { 'id': this.selected_designation.id });
                });
            }
        },


    }
</script>
