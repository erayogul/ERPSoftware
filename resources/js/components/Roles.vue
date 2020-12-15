<template>
<v-app>
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
  <template v-slot:item.employee_id="{ item }">
      <v-menu
        v-model="menu"
        bottom
        right
        transition="scale-transition"
        origin="top left"
      >
        <template v-slot:activator="{ on }">
          <v-chip
            pill
            v-on="on"
          >
            <v-avatar left>
              <v-img src="https://cdn.vuetifyjs.com/images/john.png"></v-img>
            </v-avatar>
            {{item.employee_id}}
          </v-chip>
        </template>
        <v-card width="300">
          <v-list dark>
            <v-list-item>
              <v-list-item-avatar>
                <v-img src="https://cdn.vuetifyjs.com/images/john.png"></v-img>
              </v-list-item-avatar>
              <v-list-item-content>
                <v-list-item-title>John Leider</v-list-item-title>
                <v-list-item-subtitle>john@vuetifyjs.com</v-list-item-subtitle>
              </v-list-item-content>
              <v-list-item-action>
                <v-btn
                  icon
                  @click="menu = false"
                >
                  <v-icon>mdi-close-circle</v-icon>
                </v-btn>
              </v-list-item-action>
            </v-list-item>
          </v-list>
          <v-list>
            <v-list-item @click="() => {}">
              <v-list-item-action>
                <v-icon>mdi-briefcase</v-icon>
              </v-list-item-action>
              <v-list-item-subtitle>john@gmail.com</v-list-item-subtitle>
            </v-list-item>
          </v-list>
        </v-card>
      </v-menu>

     </template>
  <template v-slot:item.isAdmin="{ item }">
 <v-switch v-model="item.isAdmin" color="success"></v-switch>
</template>
    </v-data-table>
  </v-card>
       </div>
    </div>
  </div>

  </v-app>
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
      axios.get("api/getAllUsers").then(({ data }) => (this.desserts = data.data));
      axios.get("api/user").then(({ data }) => (this.desserts = data.data));
    },

  },

    mounted() {
       this.loadUsers();
    },

};
</script>
