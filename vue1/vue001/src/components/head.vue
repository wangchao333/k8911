<template>
 <div class="container-fluid">
  <div class="row">
     <div class="col-xs-4">3223</div>
     <div class="col-xs-4">555</div>
     <div class="col-xs-4">888</div>
  </div>
</div>
</template>

<script>
export default {
 
  name: 'heads',
  components: {},
  data() {
    return {
      flags:true,
      names:''

    }
  },
  created() {  //从本地缓存里面去获取我们登陆的用户名
     this.names=JSON.parse(localStorage.getItem('userInfo')) 

     console.log(this.names)
  },
  methods: {
      goback() {
          this.$router.go(-1)
      },
      goLogin() {
        this.$router.push('/login')
      },
      goOut() {
          this.$router.push('/login')
      }
  },
  
 
  }


</script>

<style scoped >

</style>
