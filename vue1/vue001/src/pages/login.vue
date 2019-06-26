<template>
  <div>
    <h1>我是登陆页面</h1>
    <input
      type="text"
      v-model="nickName"
    >
    <input
      type="text"
      v-model="pwd"
    >
    <button @click="login()">登录</button>
  </div>
</template>

<script>
export default {
  name: "login",
  data() {
    return {
      nickName: "",
      pwd: ""
    };
  },
  created() {
    localStorage.removeItem("userInfo"); 
    // 一进入登陆页面的时候先清空我们本地存贮的数据
  },
  methods: {
    // login() {
    //    var obj={
    //      name:this.nickName,
    //      psd:this.pwd
    //    }
    //   //  如果我们登陆成功了那么就把我们的用户名跟密码存贮在本地缓存里面，
    //   // 然后跳转到我们的首页
    //   if(!this.nickName || !this.pwd) return false
    //   localStorage.setItem('obj',JSON.stringify(obj)) //把数据放到本地缓存里面
    //   this.$router.push('/home') //跳转到home
    // },

    // login1() {
    //  var obj={
    //      name:this.nickName,
    //      psd:this.pwd
    //    }
    //   if(this.nickName=='') {
    //   return false
    // }
    // if(this.pwd=='') {
    //   return false
    // }
    //  localStorage.setItem('obj',JSON.stringify(obj)) //把数据放到本地缓存里面
    //   this.$router.push('/home') //跳转到home

    // }

    login() {
      let loginInfo = {
        nickName: this.nickName,
        pwd: this.pwd
      };
      if (this.nickName == "") {  
        alert('请输入您的用户名')
        return false;
      }
      if (this.pwd == "") {
        alert('请输入您的密码')
        return false;
      }
      localStorage.setItem("userInfo", JSON.stringify(loginInfo));
      this.$router.push("/home");
    }
  }
};
</script>