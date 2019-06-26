import Vue from 'vue'
import Router from 'vue-router'
// import HelloWorld from '@/components/HelloWorld'
import Con from '../components/con.vue'
import Head from '../components/head.vue'
Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      name: 'Con',
      component: Con
    },
    {
      path: '/',
      name: 'Head',
      component: Head
    }
  ]
})
