<template>
  <div class="page">
   <h2>我是detail组件</h2>
   <h2>我是出传过来的id:  {{$route.params.ids}}</h2>
 <h2>我是出传过来的作者:  {{this.$route.params.author}}</h2>

   
  </div>
</template>

<script>
export default {
  name: '',
  components: {},
  data() {
    return {

    }
    
  },
  created() {
        console.log(this.$route) 
    },
}
</script>

<style scoped >
</style>
