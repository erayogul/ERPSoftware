<template>
  <div class="container">

    <div class="row mt-3">
      <div class="col-md-15">

      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body pb-0">
          <div  class="row d-flex align-items-stretch">
            <div  v-for="user in users" :key="user.id" class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
              <div class="card bg-light">
                <div class="card-header text-muted border-bottom-0">
                  Digital Strategist
                </div>
                <div style="margin-top:5px;" class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="lead"><b>{{ user.name }}</b></h2>
                      <p class="text-muted text-sm"><b>Role: </b> {{ user.type | upText }} </p>
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: Demo Street 123, Demo City 04312, NJ</li>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: + 800 - 12 12 23 52</li>
                      </ul>
                    </div>
                    <div class="col-5 text-center">
                      <img style="margin-top:25px;" src="/img/profile.png" alt="" class="img-circle img-fluid">
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-center">
                    <a href="#" class="btn btn-sm btn-primary">
                      <i class="fas fa-user"></i> View Profile
                    </a>
                    <a href="#"  @click="editModal(user)" class="btn btn-sm btn-danger">
                      <i class="fas fa-user"></i> Edit
                    </a>
                    <a href="#" @click="deleteUser(user.id)" class="btn btn-sm bg-teal">
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
<!-- fhdrhth 
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

    <!-- Modal -->
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
            <h5 class="modal-title" v-show="editmode" id="addNewLabel">
              Update Users's Info
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
          <form @submit.prevent="editmode ? updateUser() : createUser()">
            <div class="modal-body">
              <div class="form-group">
                <label>Username</label>
                <input
                  v-model="form.name"
                  type="text"
                  name="name"
                  placeholder="Name"
                  class="form-control"
                  :class="{ 'is-invalid': form.errors.has('username') }"
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

                <label>Bio</label>
                <textarea
                  v-model="form.bio"
                  type="text"
                  id="bio"
                  placeholder="Bio"
                  class="form-control"
                  :class="{ 'is-invalid': form.errors.has('username') }"
                ></textarea>
                <has-error :form="form" field="bio"></has-error>

                <div class="form-group">
                  <select
                    name="type"
                    v-model="form.type"
                    id="type"
                    class="form-control"
                    :class="{ 'is-invalid': form.errors.has('type') }"
                  >
                    <option value="">Select User Role</option>
                    <option value="admin">Admin</option>
                    <option value="user">Standard User</option>
                    <option value="author">Author</option>
                  </select>
                  <has-error :form="form" field="type"></has-error>
                </div>

                <div class="form-group">
                  <input
                    v-model="form.password"
                    type="password"
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
              <button v-show="editmode" type="submit" class="btn btn-success">
                Update
              </button>
              <button v-show="!editmode" type="submit" class="btn btn-primary">
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
      editmode: false,
      users: {},
      form: new Form({
        id: "",
        name: "",
        email: "",
        password: "",
        type: "",
        bio: "",
        photo: "",
      }),
    };
  },
  methods: {
    updateUser(id) {
      this.$Progress.start();
      this.form
        .put("api/user/" + this.form.id)
        .then(() => {
          Fire.$emit("AfterUpdate");
          $("#addNew").modal("hide");
          Fire.$emit("AfterDelete");
          swal.fire("Updated!", "Your file has been updated.", "success");
          this.$rogress.finish();
        })
        .catch(() => {
          this.$Progress.fail();
        });
    },

    newModal() {
      this.editmode = false;
      this.form.reset();
      $("#addNew").modal("show");
    },

    editModal(user) {
      this.editmode = true;
      this.form.reset();
      $("#addNew").modal("show");
      this.form.fill(user);
    },

    deleteUser(id) {
      swal
        .fire({
          title: "Are you sure?",
          text: "You won't be able to revert this!",
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
      if(this.$gate.isAdmin()){
      axios.get("api/user").then(({ data }) => (this.users = data.data));
      }
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
