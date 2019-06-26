<template>
  <div id="app">
 <Head></Head>
 <Con></Con>
    <router-view/>
   
    
  </div>
</template>
import Tabbar from './components/con'
import Head from './components/head'

<script>
export default {
  name: 'App',
  
}
</script>

<style>
*{
  padding:0;
  margin:0;
}

</style>
