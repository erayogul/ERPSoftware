<style>
.widget-user-header{
     background-position: center center;
     background-size: cover;
     height: 250px;
}
 
</style>

<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12 mt-3">
        <div class="card card-widget widget-user">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header text-white" style="background: url('./img/back.png  ') center center;">
                <h3 class="widget-user-username text-right">{{ name +" "+ surname }}</h3>
                <h5 class="widget-user-desc text-right">Web Designer</h5>
              </div>
              <div class="widget-user-image">
                <img class="img-circle" :src="getProfilePhoto()" alt="User Avatar">
              </div>
              <div class="card-footer">
                <div class="row">
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header">3,200</h5>
                      <span class="description-text">SALES</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header">13,000</h5>
                      <span class="description-text">FOLLOWERS</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4">
                    <div class="description-block">
                      <h5 class="description-header">35</h5>
                      <span class="description-text">PRODUCTS</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
            </div>
      </div>

      <div class="col-md-12">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#information" data-toggle="tab">Information</a></li>
                  <li class="nav-item"><a class="nav-link" href="#activity" data-toggle="tab">Activity</a></li>
                  <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Timeline</a></li> 
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="tab-pane" id="activity">
                    <!-- Post -->
                    <div class="post">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="" alt="user image">
                        <span class="username">
                          <a href="#">Jonathan Burke Jr.</a>
                          <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                        </span>
                        <span class="description">Shared publicly - 7:30 PM today</span>
                      </div>
                      <!-- /.user-block -->
                      <p>
                        Lorem ipsum represents a long-held tradition for designers,
                        typographers and the like. Some people hate it and argue for
                        its demise, but others ignore the hate as they create awesome
                        tools to help create filler text for everyone from bacon lovers
                        to Charlie Sheen fans.
                      </p>

                      <p>
                        <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                        <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                        <span class="float-right">
                          <a href="#" class="link-black text-sm">
                            <i class="far fa-comments mr-1"></i> Comments (5)
                          </a>
                        </span>
                      </p>

                      <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                    </div>
                    <!-- /.post -->

                    <!-- Post -->
                    <div class="post clearfix">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="" alt="User Image">
                        <span class="username">
                          <a href="#">Sarah Ross</a>
                          <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                        </span>
                        <span class="description">Sent you a message - 3 days ago</span>
                      </div>
                      <!-- /.user-block -->
                      <p>
                        Lorem ipsum represents a long-held tradition for designers,
                        typographers and the like. Some people hate it and argue for
                        its demise, but others ignore the hate as they create awesome
                        tools to help create filler text for everyone from bacon lovers
                        to Charlie Sheen fans.
                      </p>

                      <form class="form-horizontal">
                        <div class="input-group input-group-sm mb-0">
                          <input class="form-control form-control-sm" placeholder="Response">
                          <div class="input-group-append">
                            <button type="submit" class="btn btn-danger">Send</button>
                          </div>
                        </div>
                      </form>
                    </div>
                    <!-- /.post -->

                    <!-- Post -->
                    <div class="post">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="" alt="User Image">
                        <span class="username">
                          <a href="#">Adam Jones</a>
                          <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                        </span>
                        <span class="description">Posted 5 photos - 5 days ago</span>
                      </div>
                      <!-- /.user-block -->
                      <div class="row mb-3">
                        <div class="col-sm-6">
                          <img class="img-fluid" src="" alt="Photo">
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                          <div class="row">
                            <div class="col-sm-6">
                              <img class="img-fluid mb-3" src="" alt="Photo">
                              <img class="img-fluid" src="" alt="Photo">
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-6">
                              <img class="img-fluid mb-3" src="" alt="Photo">
                              <img class="img-fluid" src="" alt="Photo">
                            </div>
                            <!-- /.col -->
                          </div>
                          <!-- /.row -->
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                      <p>
                        <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                        <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                        <span class="float-right">
                          <a href="#" class="link-black text-sm">
                            <i class="far fa-comments mr-1"></i> Comments (5)
                          </a>
                        </span>
                      </p>

                      <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                    </div>
                    <!-- /.post -->
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane " id="timeline">
                    <!-- The timeline -->
                    <div class="timeline timeline-inverse">
                      <!-- timeline time label -->
                      <div class="time-label">
                        <span class="bg-danger">
                          10 Feb. 2014
                        </span>
                      </div>
                      <!-- /.timeline-label -->
                      <!-- timeline item -->
                      <div>
                        <i class="fas fa-envelope bg-primary"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> 12:05</span>

                          <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                          <div class="timeline-body">
                            Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                            weebly ning heekya handango imeem plugg dopplr jibjab, movity
                            jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                            quora plaxo ideeli hulu weebly balihoo...
                          </div>
                          <div class="timeline-footer">
                            <a href="#" class="btn btn-primary btn-sm">Read more</a>
                            <a href="#" class="btn btn-danger btn-sm">Delete</a>
                          </div>
                        </div>
                      </div>
                      <!-- END timeline item -->
                      <!-- timeline item -->
                      <div>
                        <i class="fas fa-user bg-info"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> 5 mins ago</span>

                          <h3 class="timeline-header border-0"><a href="#">Sarah Young</a> accepted your friend request
                          </h3>
                        </div>
                      </div>
                      <!-- END timeline item -->
                      <!-- timeline item -->
                      <div>
                        <i class="fas fa-comments bg-warning"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> 27 mins ago</span>

                          <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

                          <div class="timeline-body">
                            Take me to your leader!
                            Switzerland is small and neutral!
                            We are more like Germany, ambitious and misunderstood!
                          </div>
                          <div class="timeline-footer">
                            <a href="#" class="btn btn-warning btn-flat btn-sm">View comment</a>
                          </div>
                        </div>
                      </div>
                      <!-- END timeline item -->
                      <!-- timeline time label -->
                      <div class="time-label">
                        <span class="bg-success">
                          3 Jan. 2014
                        </span>
                      </div>
                      <!-- /.timeline-label -->
                      <!-- timeline item -->
                      <div>
                        <i class="fas fa-camera bg-purple"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> 2 days ago</span>

                          <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

                          <div class="timeline-body">
                            <img src="http://placehold.it/150x100" alt="...">
                            <img src="http://placehold.it/150x100" alt="...">
                            <img src="http://placehold.it/150x100" alt="...">
                            <img src="http://placehold.it/150x100" alt="...">
                          </div>
                        </div>
                      </div>
                      <!-- END timeline item -->
                      <div>
                        <i class="far fa-clock bg-gray"></i>
                      </div>
                    </div>
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane active" id="information">


                    <div id="accordion">
                  <!-- we are adding the .class so bootstrap.js collapse plugin detects it -->
                  <div class="card" >
                    <a data-toggle="collapse" href="#collapseOne" data-parent="#accordion"  class="collapsed" aria-expanded="true">
                    <div class="card-header">
                      <h4 class="card-title">
                          Personal Information 
                      </h4>
                    </div>
                    </a>
                    <div id="collapseOne" class="panel-collapse in collapse" style="">
                      <div class="card-body">

                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                          <input type="email" v-model="form.name" class="form-control" id="inputName" placeholder="Name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Gender</label>
                        <div class="col-sm-10">
                          <input type="email" v-model="form.gender" class="form-control" id="inputEmail" placeholder="Name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="bloodGroup" class="col-sm-2 col-form-label">Blood Group</label>
                        <div class="col-sm-10">
                          <input type="email" v-model="form.blood_group" class="form-control" id="bloodGroup" placeholder="Name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="bloodGroup" class="col-sm-2 col-form-label">Place Of Birth</label>
                        <div class="col-sm-10">
                          <input type="email" v-model="form.place_of_birth" class="form-control" id="bloodGroup" placeholder="Name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="bloodGroup" class="col-sm-2 col-form-label">Birthday</label>
                        <div class="col-sm-10">
                          <input type="email" v-model="form.date_of_birth_official" class="form-control" id="inputName" placeholder="Name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="bloodGroup" class="col-sm-2 col-form-label">Marital Status:</label>
                        <div class="col-sm-10">
                          <input type="email" v-model="form.marital_status" class="form-control" id="inputName" placeholder="Name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="bloodGroup" class="col-sm-2 col-form-label">Nationality:</label>
                        <div class="col-sm-10">
                          <input type="email" v-model="form.nationality" class="form-control" id="inputName" placeholder="Name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="bloodGroup" class="col-sm-2 col-form-label">ID Number:</label>
                        <div class="col-sm-10">
                          <input type="email" v-model="form.id_number" class="form-control" id="inputName" placeholder="Name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="bloodGroup" class="col-sm-2 col-form-label">Education Status:</label>
                        <div class="col-sm-10">
                          <input type="email" v-model="form.education_status" class="form-control" id="inputName" placeholder="Name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="bloodGroup" class="col-sm-2 col-form-label">Military Status:</label>
                        <div class="col-sm-10">
                          <input type="email" v-model="form.military_status" class="form-control" id="inputName" placeholder="Name">
                        </div>
                      </div>

                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header">
                      <h4 class="card-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="collapsed" aria-expanded="false">
                          Contact Information 
                        </a>
                      </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" style="">
                      <div class="card-body">

                      <div class="form-group row">
                        <label for="bloodGroup" class="col-sm-2 col-form-label">Telephone No:</label>
                        <div class="col-sm-10">
                          <input type="email" v-model="form.mobile" class="form-control" id="inputName" placeholder="Name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="bloodGroup" class="col-sm-2 col-form-label">Address:</label>
                        <div class="col-sm-10">
                          <input type="email" v-model="form.address" class="form-control" id="inputName" placeholder="Name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="bloodGroup" class="col-sm-2 col-form-label">Email:</label>
                        <div class="col-sm-10">
                          <input type="email" v-model="form.email" class="form-control" id="inputName" placeholder="Name">
                        </div>
                      </div>

                      </div>
                    </div>
                  </div>
                  <div class="card ">
                    <div class="card-header">
                      <h4 class="card-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="collapsed" aria-expanded="false">
                          Emergency Contact Information
                        </a>
                      </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                      <div class="card-body">

                      <div class="form-group row">
                        <label for="bloodGroup" class="col-sm-2 col-form-label">Emergency Contact Name:</label>
                        <div class="col-sm-10">
                          <input type="email" v-model="form.emergency_contact_name" class="form-control" id="inputName" placeholder="Name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="bloodGroup" class="col-sm-2 col-form-label">Emergency Contact Mobile:</label>
                        <div class="col-sm-10">
                          <input type="email" v-model="form.emergency_contact_mobile" class="form-control" id="inputName" placeholder="Name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="bloodGroup" class="col-sm-2 col-form-label">Emergency Contact Type:</label>
                        <div class="col-sm-10">
                          <input type="email" v-model="form.emergency_contact_type" class="form-control" id="inputName" placeholder="Name">
                        </div>
                      </div>

                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header">
                      <h4 class="card-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapsefour" class="collapsed" aria-expanded="false">
                          Employment Information
                        </a>
                      </h4>
                    </div>
                    <div id="collapsefour" class="panel-collapse collapse">
                      <div class="card-body">

                      <div class="form-group row">
                        <label for="bloodGroup" class="col-sm-2 col-form-label">Start Date:</label>
                        <div class="col-sm-10">
                          <input type="email" v-model="form.start_date" class="form-control" id="inputName" placeholder="Name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="bloodGroup" class="col-sm-2 col-form-label">End Date:</label>
                        <div class="col-sm-10">
                          <input type="email" v-model="form.end_date" class="form-control" id="inputName" placeholder="Name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="bloodGroup" class="col-sm-2 col-form-label">Department:</label>
                        <div class="col-sm-10">
                          <input type="email" v-model="form.department" class="form-control" id="inputName" placeholder="Name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="bloodGroup" class="col-sm-2 col-form-label">Unit:</label>
                        <div class="col-sm-10">
                          <input type="email" v-model="form.unit" class="form-control" id="inputName" placeholder="Name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="bloodGroup" class="col-sm-2 col-form-label">Manager:</label>
                        <div class="col-sm-10">
                          <input type="email" v-model="form.manager" class="form-control" id="inputName" placeholder="Name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="bloodGroup" class="col-sm-2 col-form-label">Position:</label>
                        <div class="col-sm-10">
                          <input type="email" v-model="form.position" class="form-control" id="inputName" placeholder="Name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="bloodGroup" class="col-sm-2 col-form-label">Administrative Title:</label>
                        <div class="col-sm-10">
                          <input type="email" v-model="form.administrative_title" class="form-control" id="inputName" placeholder="Name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="bloodGroup" class="col-sm-2 col-form-label">Job Type:</label>
                        <div class="col-sm-10">
                          <input type="email" v-model="form.job_type" class="form-control" id="inputName" placeholder="Name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="bloodGroup" class="col-sm-2 col-form-label">Account Number:</label>
                        <div class="col-sm-10">
                          <input type="email" v-model="form.account_number" class="form-control" id="inputName" placeholder="Name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="bloodGroup" class="col-sm-2 col-form-label">Status:</label>
                        <div class="col-sm-10">
                          <input type="email" v-model="form.status" class="form-control" id="inputName" placeholder="Name">
                        </div>
                      </div>

                      </div>
                    </div>
                  </div>
                </div>



                    <form class="form-horizontal">
                      <div class="form-group row">
                        <label for="customFile" class="col-sm-2 col-form-label">Photo</label>
                        <div class="custom-file col-sm-10">
                            <input type="file" @change="updateProfile" class="form-control" id="customFile">
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button @click.prevent="updateInfo" type="submit" class="btn btn-danger">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>


    </div>
  </div>
</template>

<script>
export default {
  data(){
    return{
      form: new Form({
        employee_id: "",
        name: "",
        surname: "",
        gender: "",
        blood_group: "",
        place_of_birth: "",
        date_of_birth_official: "",
        mobile: "",
        address: "",
        marital_status: "",
        nationality: "",
        id_number: "",
        emergency_contact_name: "",
        emergency_contact_mobile: "",
        emergency_contact_type: "",
        education_status: "",
        military_status: "",
        email: "",
        start_date: "",
        end_date: "",
        department: "",
        unit: "",
        manager: "",
        position: "",
        administrative_title: "",
        job_type: "",
        account_number: "",
        photo: "",
      }),
      name: "",
      surname: ""
    }
  },
  mounted() {
    console.log(this.$route.params.id );
  },

  methods:{

    getProfilePhoto(){
      let photo = (this.form.photo.length>200) ? this.form.photo : "img/"+ this.form.photo;
      return photo;
    },

    updateInfo(){
      this.$Progress.start();
      this.form.put('api/profile')
      .then(()=>{
        Fire.$emit('AfterCreate');
        this.$Progress.finish();
      })
      .catch(()=>{
        this.$Progress.fail();
      });
    },

    updateProfile(e){
      let file = e.target.files[0];
      let reader = new FileReader();

      if(file['size'] < 2111775){
        reader.onloadend = (file) => {
          this.form.photo = reader.result;
        }
        reader.readAsDataURL(file);
      }
      else{
        swal.fire({
          type: 'error',
          title: 'Oops..',
          text: 'You are uploading a large file',
        })
      }
    }
  },

  created(){
    //axios.get("api/profile")
    //.then(({data}) => (this.form.fill(data),this.name = data.name));
    axios.get('api/getProfile',{params: {employee_id: this.$route.params.id}}).then(({ data }) => (this.form.fill(data),this.name = data.name, this.surname = data.surname));

    
  }

};
</script>
