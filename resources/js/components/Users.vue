<template>
  <div class="container">

    <div class="row mt-12">
      <div class="col-md-12">
        
      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body pb-0">

          <div class="card-tools" style="margin:10px;">
              <button class="btn btn-success" @click="newModal">
                <i class="fas fa-user-plus"></i>  
               Creat Employee 
              </button>
          </div>

          <div  class="row d-flex align-items-stretch">
            <div  v-for="user in users" :key="user.id" class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
              <div class="card bg-light">
                <div class="card-header text-muted border-bottom-0">
                 <div> <b style="font-size:large;" > {{ user.name }} {{ user.surname }}  </b></div>
                </div>
                <div style="margin-top:5px;" class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">

                    </div>
                    <center>
                    <div class="col-8 text-center">
                      <img style="margin-top:25px;" src="/img/profile.png" alt="" class="img-circle img-fluid">
                    </div>
                    </center>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-center">
                    <router-link :to="{ name: 'profile', params: { id: user.employee_id }}">
                    <a href="#" class="btn btn-sm btn-primary">
                      <i class="fas fa-user"></i> View Profile
                    </a>
                    </router-link>
                    <router-link :to="{ name: 'editProfile', params: { id: user.employee_id }}">
                    <a href="#" class="btn btn-sm bg-teal">
                      <i class="fas fa-user"></i> Edit
                    </a>
                    </router-link>
                    <a href="#" @click="deleteUser(user.id)" class="btn btn-sm btn-danger">
                      <i class="fas fa-comments"></i> Delete
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <nav aria-label="Contacts Page Navigation">
            <ul class="pagination justify-content-center m-0">
              <li class="page-item active"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">4</a></li>
              <li class="page-item"><a class="page-link" href="#">5</a></li>
              <li class="page-item"><a class="page-link" href="#">6</a></li>
              <li class="page-item"><a class="page-link" href="#">7</a></li>
              <li class="page-item"><a class="page-link" href="#">8</a></li>
            </ul>
          </nav>
        </div>
        <!-- /.card-footer -->
      </div>
      <!-- /.card -->



              </div>
        </div>
      
<!--
    <div class="row mt-5">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Users Table</h3>

            <div class="card-tools">
              <button class="btn btn-success" @click="newModal">
                Add New <i class="fas fa-user-plus"></i>
              </button>
            </div>
          </div>
 
          <div class="card-body table-responsive p-0">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Type</th>
                  <th>Registred At</th>
                  <th v-if="$gate.isAdmin()" >Modify</th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="user in users" :key="user.id">
                  <td>{{ user.id }}</td>
                  <td>{{ user.name }}</td>
                  <td>{{ user.email }}</td>
                  <td>{{ user.type | upText }}</td>
                  <td>{{ user.created_at | myDate }}</td>
                  <td v-if="$gate.isAdmin()">
                    <a  href="#" @click="editModal(user)">
                      <i class="fa fa-edit blue"></i>
                    </a>
                    /
                    <a href="#" @click="deleteUser(user.id)">
                      <i class="fa fa-trash red"></i>
                    </a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>

        </div>

      </div>
    </div>

-->
   
    <div
      class="modal fade"
      id="addNew"
      tabindex="-1"
      role="dialog"
      aria-labelledby="addNewlLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" v-show="!editmode" id="addNewLabel">
              Add New
            </h5>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form @submit.prevent="createUser">
            <div class="modal-body">
              <div class="form-group">

                <label>Name</label>
                <input
                  v-model="form.name"
                  type="text"
                  name="name"
                  placeholder="Name"
                  class="form-control"
                  :class="{ 'is-invalid': form.errors.has('username') }"
                />
                <has-error :form="form" field="name"></has-error>

                <label>Surname</label>
                <input
                  v-model="form.surname"
                  type="text"
                  name="surname"
                  placeholder="Surname"
                  class="form-control"
                  :class="{ 'is-invalid': form.errors.has('surname') }"
                />
                <has-error :form="form" field="name"></has-error>

                <label>Email</label>
                <input
                  v-model="form.email"
                  type="text"
                  name="email"
                  placeholder="Email"
                  class="form-control"
                  :class="{ 'is-invalid': form.errors.has('username') }"
                />
                <has-error :form="form" field="email"></has-error>

                <label>Password</label>
                <div class="form-group">
                  <input
                    v-model="form.password"
                    type="text"
                    name="password"
                    id="password"
                    class="form-control"
                    :class="{ 'is-invalid': form.errors.has('password') }"
                  />
                  <has-error :form="form" field="password"></has-error>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">
                Close
              </button>
              <button type="submit" class="btn btn-primary">
                Create
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
    
  </div>
</template>

<script>
import axios from "axios";
export default {
  data() {
    return {
      users: {},
      form: new Form({
        id: "",
        name: "",
        surname: "",
        email: "",
        password: "",
        employee_id: "",
        photo: "",
      }),
    };
  },
  methods: {


    newModal() {
      this.form.reset();
      $("#addNew").modal("show");
    },


    deleteUser(id) {
      swal
        .fire({
          title: "Are you sure?",
          text: "This user will delete.",
          icon: "warning",
          showCancelButton: true,
          confirmButtonColor: "#3085d6",
          cancelButtonColor: "#d33",
          confirmButtonText: "Yes, delete it!",
        })
        .then((result) => {
          if (result.value) {
            this.form
              .delete("api/user/" + id)
              .then(() => {
                if (result.isConfirmed) {
                  Fire.$emit("AfterDelete");
                  swal.fire(
                    "Deleted!",
                    "Your file has been deleted.",
                    "success"
                  );
                }
              })
              .catch(() => {
                swal.fire("Failed!", "Error.", "warning");
              });
          }
        });
    },

    loadUsers() {
      //console.log('Load user');
      //if(this.$gate.isAdmin()){
      axios.get("api/user").then(({ data }) => (this.users = data.data));
      //} 
    },

    createUser() {
      this.$Progress.start();
      this.form
        .post("api/user")
        .then(() => {
          Fire.$emit("AfterCreate");

          $("#addNew").modal("hide");

          toast.fire({
            icon: "success",
            title: "Signed in successfully",
          });

          this.$Progress.finish();
        })
        .catch(() => {});
    },
  },
  mounted() {
    this.loadUsers();
    //setInterval(() => this.loadUsers(),3000);
    Fire.$on("AfterCreate", () => {
      this.loadUsers();
    });
    Fire.$on("AfterDelete", () => {
      this.loadUsers();
    });
        Fire.$on("AfterUpdate", () => {
      this.loadUsers();
    });
  },
};
</script>
