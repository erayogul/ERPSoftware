export const mainMixin= {
    data(){
    return {
        name: "",
        photo: "",
    }
    },
    methods:{
        
        getProfilePhoto(employee_id){
            axios.get('api/getProfilPhoto',{params: {employee_id:employee_id}}).then(({ data }) => (this.photo = data));
            let linkPhoto = (this.photo.length>200) ? this.photo : "img/"+ this.photo;
            /*let linkPhoto="img/profile.png";
            console.log(linkPhoto);*/
            return linkPhoto;
        },

        getEmployeeName(employee_id){
            axios.get('api/getEmployeeName',{params: {employee_id:employee_id}}).then(({ data }) => (this.name = data))
            /*let name ="Eray Oğul";
            console.log(name);*/
            return this.name;
        },

        getProfilePhotoUrl(photoName){
            let photo = "img/"+ photoName;
            return photo;
          },
    }
}