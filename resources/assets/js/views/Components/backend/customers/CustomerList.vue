<template>

	<v-app id="inspire">

		<!--breadcrumbs start-->
		<breadcrumb1btn
				v-bind:breadcrumb-item="breadcrumbs"
				v-bind:btn-new-url="btnNewUrl"
				v-bind:breadcrumb-title="breadcrumbTitle"
		></breadcrumb1btn>

		<!--Data table component-->
		<v-card>
			<v-card-title>
	            {{listTitle}}
	        </v-card-title>
			<v-divider></v-divider>
			<v-form v-model="valid" ref="formFilter" lazy-validation>
			<v-container grid-list-md>
				<v-layout row wrap>
					<v-flex xs12 sm4 md4>
						<v-text-field label="Customer Name" v-model="filter.customer_name"></v-text-field>
					</v-flex>
					<v-flex xs12 sm4 md4>
						<v-text-field label="Email" v-model="filter.email"></v-text-field>
					</v-flex>
					<v-flex xs12 sm4 md4>
						<v-select label="Customer Group" :items="customergroup" v-model="filter.customer_group_id"></v-select>
					</v-flex>
					<v-flex xs12 sm4 md4>
						<v-select label="Status" :items="status" v-model="filter.status"></v-select>
					</v-flex>
					<v-flex xs12 sm4 md4>
						<v-text-field label="City" v-model="filter.city"></v-text-field>
					</v-flex>
					
					<v-flex xs12 sm4 md4>
						<v-menu
				          lazy
				          :close-on-content-click="false"
				          v-model="menu"
				          transition="scale-transition"
				          offset-y
				          full-width
				          :nudge-right="40"
				          max-width="290px"
				          min-width="290px"
				        >
				          <v-text-field
				            slot="activator"
				            label="Picker in menu"
				            v-model="filter.date_added"
				            prepend-icon="event"
				            readonly
				          ></v-text-field>
				          <v-date-picker v-model="filter.date_added" no-title scrollable actions>
				            <template slot-scope="{ save, cancel }">
				              <v-card-actions>
				                <v-spacer></v-spacer>
				                <v-btn flat color="primary" @click="cancel">Cancel</v-btn>
				                <v-btn flat color="primary" @click="save">OK</v-btn>
				              </v-card-actions>
				            </template>
				          </v-date-picker>
				        </v-menu>
					</v-flex>
					<v-flex xs12 sm12 md12 class="text-lg-right">
						<v-btn @click="filterCustomer" :disabled="!valid">Filter</v-btn>
						<v-btn @click="clear">clear</v-btn>
					</v-flex>
				</v-layout>
			</v-container>
		    </v-form>
			<v-divider></v-divider>
		</v-card>

		<data-table
				v-bind:list-title="listTitle"
				v-bind:data-header="headers"
				v-bind:data-value="customers"
				v-bind:url="url"
				v-bind:btn-new-url="btnNewUrl"
				v-on:change="fetchData"
				v-bind:del="false"
				v-bind:eye="false">
		</data-table>

		<!--End of data table-->

	</v-app>

</template>

<script>
    import Flash from '../../../../helper/flash'
    import axios from 'axios'
    import dataTable from '../commons/tables/dataTableFilter.vue'
    import breadcrumb1btn from '../commons/breadcrumb/breadcrumb1btn.vue'
    export default{
        props:[
            'id'//this use to pass id of record to data table component
        ],
        data(){
            return{
            	valid:false,
            	menu:null,
                url:'/admin/api/customers/',
                btnNewUrl:'/admin/customers/add',
                listTitle:'Customer List',
                headers: [
                    { text: 'Customer ID',align: 'left',class:'text-xs-left',value: 'customer_id'},
                    { text: 'Customer Name',align:'left',class:'text-xs-left', value: 'customer_name' },
                    { text: 'Email',align:'left',class:'text-xs-left', value: 'email' },
                    { text: 'Customer Group',align:'left',class:'text-xs-left', value: 'group' },
                    { text: 'Customer IP',align:'left',class:'text-xs-left', value: 'ip' },
                    { text: 'Date Added',align:'left',class:'text-xs-left', value: 'date_added' },
                    {text: 'Action',align:'center',class:'text-xs-center',value:'customer_id',status:'status',sortable: false}
                ],
                customers:[],
                customergroup:[],
				status:[
					{text:'Active',value:1},
                    {text:'Inactive',value:0},
				],
				filter:{},
                breadcrumbTitle:'Customer List',
                breadcrumbs: [
                    {
                        text: 'Administrator',
                        disabled: false
                    },
                    {
                        text: 'Customer',
                        disabled: false
                    },
                    {
                        text: 'Lists',
                        disabled: true
                    }
                ]
            }
        },
        components:{'dataTable':dataTable,'breadcrumb1btn':breadcrumb1btn},
        created(){
            this.fetchData()
            document.title = 'Customer List';
            this.fetchGroup();
        },
        methods:{
            fetchData(){
                axios.get(this.url).then(response=>{
                    this.customers=response.data;
            	});
            },
			fetchGroup(){
                axios.get('/admin/api/getCustomerGroup/').then(res=>[
                    this.customergroup=res.data
				])
			},
			filterCustomer()
			{
				axios.post('/admin/api/filterCustomer',this.filter).then(res=>{
					if(res.data.result==true){
						this.customers=res.data.data
					}
				})
			},
			clear(){
				this.$refs.formFilter.reset()
				this.fetchData()
			}
        }
    }
</script>