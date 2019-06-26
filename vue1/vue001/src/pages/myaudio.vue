<template>
  <div class="page">
 <h1>myaudio</h1>
   <p>书影音</p>
      <nav id="subNav">
          <span @click="nowIndex=0" :class="{active:nowIndex==0}"><router-link to="/myaudio/film">电影</router-link></span>
          <span @click="nowIndex=1" :class="{active:nowIndex==1}"><router-link to="/myaudio/read">读书</router-link></span>
          <span @click="nowIndex=2" :class="{active:nowIndex==2}"><router-link to="/myaudio/tv">电视</router-link></span>
          <span @click="nowIndex=3" :class="{active:nowIndex==3}"><router-link to="/myaudio/city">同城</router-link></span>
          <span @click="nowIndex=4" :class="{active:nowIndex==4}"><router-link to="/myaudio/music">音乐</router-link></span>
      </nav>
 <router-view></router-view>
  </div>
</template>

<script>
export default {
  name: '',
  components: {},
  data() {
    return {
      nowIndex:0

    }
  }
}
</script>

<style scoped >
#subNav{
  width: 100%;
  height: 40px;
  line-height: 40px;
  border-bottom: 1px solid #eeeeee;
  display: flex;
  text-align: center;
}
#subNav span{
  flex: 1;
}
#subNav span a{
  color: #999;
}
#subNav span.active{
  border-bottom: 2px solid green;
}
</style>
