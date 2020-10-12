<template>
    <div class="container">

                    <tr  v-for="user in qqq" :key="user.id">
                      <td>{{user.id}}</td>
                      <td>{{user.name}}</td>
                      <td>{{user.email}}</td>
                      <td>{{user.type}}</td>
                      <td>{{user.created_at}}</td>
                    </tr>

</div>
</template>

<script>
    export default {
      data(){
        return{
          qqq : '',
        }
      },
      methods:{
        loaddata(){
          console.log('Load user');
          axios.get('api/eraytest').then((data)  => {
              this.qqq = data.data
              }).catch((error)=>{
                  console.log(error)
              });
        },
        
      },
        mounted() {
            this.loaddata();
        }

    }
</script>
