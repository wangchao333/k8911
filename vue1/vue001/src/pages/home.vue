<template>
  <div class="page">
    <h1>home 三大块组成 轮播图 热点 新闻列表 </h1>
    <Banner>
      <CarouselItem>
        <div class="demo-carousel"><img
            class="bannerImg"
            src="../assets/images/banner/01.jpg"
            alt=""
          ></div>
      </CarouselItem>
      <CarouselItem>
        <div class="demo-carousel"><img
            class="bannerImg"
            src="../assets/images/banner/02.jpg"
            alt=""
          ></div>
      </CarouselItem>
      <CarouselItem>
        <div class="demo-carousel"><img
            class="bannerImg"
            src="../assets/images/banner/03.jpg"
            alt=""
          ></div>
      </CarouselItem>

    </Banner>
    <Cell txt='热点' :bol=true></Cell>
    <newsList></newsList>
  </div>
</template>
<script>
// 1 先建三个组件(pages/homes/三个组件)  引入 在home组件引入
// 2挂载三个组件
// 3使用三个组件
import newsList from "./homes/newsList";
import Cell from "./homes/cell";
import Banner from "./homes/banner";
export default {
  name: "home",
  components: {
    newsList,
    Cell,
    Banner
  },
  data() {
    return {};
  }
};
</script>

<style scoped >
</style>
