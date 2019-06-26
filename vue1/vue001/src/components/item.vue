<template>
 
  <div class="itemWrap" @click='fn'>   
   <span v-show='aaa'>
    <!-- <img src="" alt="" srcset="">  -->
      <slot   name='activeImg'> 
   </slot>
    </span>
  
   <span v-show='!aaa' >
       <!-- <img src="" alt="">  -->
        <slot  name='normalImg'>

        </slot>

        </span>
  
   <p>{{txt}}</p>
  </div>
</template>
<script>
// sel:home
export default {
    props:['txt','mark','sel'],  //接受父组件过来值  mark => home mine 要跳转的路径 
  name: '',
  components: {},
  data() {
    return {
    }
  },
  computed: {
      aaa() {     //  每次来判断aaa 的值    sel='home'
          if(this.mark==this.sel) {
              return true
          }else {
              return false
          }
      }
  },
  methods: {
      fn() {
        this.$emit('c',this.mark)  // 点击的时候 把我们自身的mask 传给父组件
        this.$router.push('/'+this.mark)
      }
  },
}
</script>

<style scoped >
.itemWrap {
    width: 20%;
    float: left;
    text-align: center;

}

.itemWrap img {
    width: 35px;
}
</style>

