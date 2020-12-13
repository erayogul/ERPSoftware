<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12 mt-3">
          
           <v-card>
    <v-card-title>
      Roles & Privilages
      <v-spacer></v-spacer>
      <v-text-field
        v-model="search"
        append-icon="mdi-magnify"
        label="Search"
        single-line
        hide-details
      ></v-text-field>
    </v-card-title>
    <v-data-table
      :headers="headers"
      :items="desserts"
      :search="search"
      
    >
  <template v-slot:items="props">
      <td>{{ props.desserts.employee_id }}</td>

      <td>{{ props.desserts.isAdmin }}</td>

      <td>{{ props.desserts.isAdmin }}</td>

      <td>{{ props.desserts.stock_create }}</td>
      <td>{{ props.desserts.stock_view }}</td>
      <td>{{ props.desserts.stock_use }}</td>
      <td>{{ props.desserts.stock_edit }}</td>
      <td>{{ props.desserts.stock_delete }}</td>

      <td>{{ props.desserts.welfare_create }}</td>
      <td>{{ props.desserts.welfare_view }}</td>
      <td>{{ props.desserts.welfare_edit }}</td>
      <td>{{ props.desserts.welfare_delete }}</td>

      <td>{{ props.desserts.employee_view_all }}</td>
      <td>{{ props.desserts.employee_view_basic }}</td>
      <td>{{ props.desserts.employee_view_hr }}</td>
      <td>{{ props.desserts.employee_edit_all }}</td>
      <td>{{ props.desserts.employee_edit_basic }}</td>
      <td>{{ props.desserts.employee_edit_hr }}</td>
      <td>{{ props.desserts.employee_delete }}</td>

      <td>{{ props.desserts.department_create }}</td>
      <td>{{ props.desserts.department_view }}</td>
      <td>{{ props.desserts.department_edit }}</td>
      <td>{{ props.desserts.department_delete }}</td>

     </template>
    </v-data-table>
  </v-card>
       </div>
    </div>
  </div>
</template>

<script>
export default {
  data(){
    return{
      search: '',
        headers: [
          { text: 'Employee ID', value: 'employee_id' },

          { text: 'is Admin', value: 'isAdmin' },

          { text: 'Stock Create', value: 'stock_create' },
          { text: 'Stock View', value: 'stock_view' },
          { text: 'Stock Use', value: 'stock_use' },
          { text: 'Stock Edit', value: 'stock_edit' },
          { text: 'Stock Delete', value: 'stock_delete' },

          { text: 'Welfare Create', value: 'welfare_create' },
          { text: 'Welfare View', value: 'welfare_view' },
          { text: 'Welfare Edit', value: 'welfare_edit' },
          { text: 'Welfare Delete', value: 'welfare_delete' },

          { text: 'Employee View All', value: 'employee_view_all' },
          { text: 'Employee View Basic', value: 'employee_view_basic' },
          { text: 'Employee View HR', value: 'employee_view_hr' },
          { text: 'Employee Edit All', value: 'employee_edit_all' },
          { text: 'Employee Edit Basic', value: 'employee_edit_basic' },
          { text: 'Employee Edit HR', value: 'employee_edit_hr' },
          { text: 'Employee Delete', value: 'employee_delete' },

          { text: 'Department Create', value: 'department_create' },
          { text: 'Department View', value: 'department_view' },
          { text: 'Department Edit', value: 'department_edit' },
          { text: 'Department Delete', value: 'department_delete' },
        ],
        desserts: [],

    }
  },
  methods:{

    loadUsers() {
        console.log()
      axios.get("api/getAllUsers").then(({ data }) => (this.desserts = data.data));
    },

  },

    mounted() {
       this.loadUsers();
    },

};
</script>
