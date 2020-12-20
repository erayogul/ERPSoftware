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
            <v-data-table :headers="headers" :items="desserts" :search="search">
              <template v-slot:item.employee_id="{ item }">
                <v-list two-line>
                  <v-list-item>
                    <v-list-item-avatar>
                      <v-img
                         :src= getProfilePhotoUrl(item.photo)
                      ></v-img>
                    </v-list-item-avatar>
                    <v-list-item-content>
                      <v-list-item-title> {{item.name}} {{item.surname}} </v-list-item-title>
                      <v-list-item-subtitle>{{
                        item.employee_id
                      }}  </v-list-item-subtitle>
                    </v-list-item-content>
                  </v-list-item>
                </v-list>
              </template>

              <template v-slot:item.isAdmin="{ item }">
                <v-switch
                  v-model="item.isAdmin"
                  @change="
                    updateRoles(item.isAdmin, item.employee_id, 'isAdmin')
                  "
                  inset
                ></v-switch>
              </template>

              <template v-slot:item.stock_create="{ item }">
                <v-switch
                  v-model="item.stock_create"
                  @change="
                    updateRoles(item.stock_create, item.employee_id, 'stock_create')
                  "
                  inset
                ></v-switch>
              </template>

              <template v-slot:item.stock_view="{ item }">
                <v-switch
                  v-model="item.stock_view"
                  @change="
                    updateRoles(item.stock_view, item.employee_id, 'stock_view')
                  "
                  inset
                ></v-switch>
              </template>

              <template v-slot:item.stock_use="{ item }">
                <v-switch
                  v-model="item.stock_use"
                  @change="
                    updateRoles(item.stock_use, item.employee_id, 'stock_use')
                  "
                  inset
                ></v-switch>
              </template>

               <template v-slot:item.stock_edit="{ item }">
                <v-switch
                  v-model="item.stock_edit"
                  @change="
                    updateRoles(item.stock_edit, item.employee_id, 'stock_edit')
                  "
                  inset
                ></v-switch>
              </template>

              <template v-slot:item.stock_delete="{ item }">
                <v-switch
                  v-model="item.stock_delete"
                  @change="
                    updateRoles(item.stock_delete, item.employee_id, 'stock_delete')
                  "
                  inset
                ></v-switch>
              </template>

              <template v-slot:item.welfare_create="{ item }">
                <v-switch
                  v-model="item.welfare_create"
                  @change="
                    updateRoles(item.welfare_create, item.employee_id, 'welfare_create')
                  "
                  inset
                ></v-switch>
              </template>

              <template v-slot:item.welfare_view="{ item }">
                <v-switch
                  v-model="item.welfare_view"
                  @change="
                    updateRoles(item.welfare_view, item.employee_id, 'welfare_view')
                  "
                  inset
                ></v-switch>
              </template>

              <template v-slot:item.welfare_edit="{ item }">
                <v-switch
                  v-model="item.welfare_edit"
                  @change="
                    updateRoles(item.welfare_edit, item.employee_id, 'welfare_edit')
                  "
                  inset
                ></v-switch>
              </template>

              <template v-slot:item.welfare_delete="{ item }">
                <v-switch
                  v-model="item.welfare_delete"
                  @change="
                    updateRoles(item.welfare_delete, item.employee_id, 'welfare_delete')
                  "
                  inset
                ></v-switch>
              </template>

              <template v-slot:item.employee_view_all="{ item }">
                <v-switch
                  v-model="item.employee_view_all"
                  @change="
                    updateRoles(item.employee_view_all, item.employee_id, 'employee_view_all')
                  "
                  inset
                ></v-switch>
              </template>

              <template v-slot:item.employee_view_basic="{ item }">
                <v-switch
                  v-model="item.employee_view_basic"
                  @change="
                    updateRoles(item.employee_view_basic, item.employee_id, 'employee_view_basic')
                  "
                  inset
                ></v-switch>
              </template>

              <template v-slot:item.employee_view_hr="{ item }">
                <v-switch
                  v-model="item.employee_view_hr"
                  @change="
                    updateRoles(item.employee_view_hr, item.employee_id, 'employee_view_hr')
                  "
                  inset
                ></v-switch>
              </template>

              <template v-slot:item.employee_edit_all="{ item }">
                <v-switch
                  v-model="item.employee_edit_all"
                  @change="
                    updateRoles(item.employee_edit_all, item.employee_id, 'employee_edit_all')
                  "
                  inset
                ></v-switch>
              </template>

              <template v-slot:item.employee_edit_basic="{ item }">
                <v-switch
                  v-model="item.employee_edit_basic"
                  @change="
                    updateRoles(item.employee_edit_basic, item.employee_id, 'employee_edit_basic')
                  "
                  inset
                ></v-switch>
              </template>

              <template v-slot:item.employee_edit_hr="{ item }">
                <v-switch
                  v-model="item.employee_edit_hr"
                  @change="
                    updateRoles(item.employee_edit_hr, item.employee_id, 'employee_edit_hr')
                  "
                  inset
                ></v-switch>
              </template>

              <template v-slot:item.employee_delete="{ item }">
                <v-switch
                  v-model="item.employee_delete"
                  @change="
                    updateRoles(item.employee_delete, item.employee_id, 'employee_delete')
                  "
                  inset
                ></v-switch>
              </template>

              <template v-slot:item.department_create="{ item }">
                <v-switch
                  v-model="item.department_create"
                  @change="
                    updateRoles(item.department_create, item.employee_id, 'department_create')
                  "
                  inset
                ></v-switch>
              </template>

              <template v-slot:item.department_view="{ item }">
                <v-switch
                  v-model="item.department_view"
                  @change="
                    updateRoles(item.department_view, item.employee_id, 'department_view')
                  "
                  inset
                ></v-switch>
              </template>

              <template v-slot:item.department_edit="{ item }">
                <v-switch
                  v-model="item.department_edit"
                  @change="
                    updateRoles(item.department_edit, item.employee_id, 'department_edit')
                  "
                  inset
                ></v-switch>
              </template>

              <template v-slot:item.department_delete="{ item }">
                <v-switch
                  v-model="item.department_delete"
                  @change="
                    updateRoles(item.department_delete, item.employee_id, 'department_delete')
                  "
                  inset
                ></v-switch>
              </template>
               </v-data-table
          ></v-card>
        </div>
      </div></div
  ></v-app>
</template>
    </v-data-table>
  </v-card>
       </div>
    </div>
  </div>

  </v-app>
</template>

<script>
import {mainMixin} from '../mainMixin.js'

export default {
  mixins: [mainMixin],
  data() {
    return {
      search: "",
      headers: [
        { text: "Employee ID", value: "employee_id" },

        { text: "is Admin", value: "isAdmin" },

        { text: "Stock Create", value: "stock_create" },
        { text: "Stock View", value: "stock_view" },
        { text: "Stock Use", value: "stock_use" },
        { text: "Stock Edit", value: "stock_edit" },
        { text: "Stock Delete", value: "stock_delete" },

        { text: "Welfare Create", value: "welfare_create" },
        { text: "Welfare View", value: "welfare_view" },
        { text: "Welfare Edit", value: "welfare_edit" },
        { text: "Welfare Delete", value: "welfare_delete" },

        { text: "Employee View All", value: "employee_view_all" },
        { text: "Employee View Basic", value: "employee_view_basic" },
        { text: "Employee View HR", value: "employee_view_hr" },
        { text: "Employee Edit All", value: "employee_edit_all" },
        { text: "Employee Edit Basic", value: "employee_edit_basic" },
        { text: "Employee Edit HR", value: "employee_edit_hr" },
        { text: "Employee Delete", value: "employee_delete" },

        { text: "Department Create", value: "department_create" },
        { text: "Department View", value: "department_view" },
        { text: "Department Edit", value: "department_edit" },
        { text: "Department Delete", value: "department_delete" },
      ],
      desserts: [],
    };
  },
  methods: {
    loadUsers() {
      axios
        .get("api/getAllUsers")
        .then(({ data }) => (this.desserts = data));
    },
    updateRoles(newRolestatus, employee_id, columName) {
      axios
        .post("api/updateRole", {
          employee_id,
          newRolestatus,
          columName,
        })
        .then(function (response) {
          toast.fire({
            icon: "success",
            title: "Role successfully changed.",
          });
        })
        .catch(function (error) {
          toast.fire({
            icon: "error",
            title: "Error :(",
          });
        });
    },
  },

  mounted() {
    this.loadUsers();
  },
};
</script>
