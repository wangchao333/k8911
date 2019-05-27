 var arr=["1.jpg","2.jpg","3.jpg","4.jpg"];
    var ord = 0;
    var myTimer = null;
    function  initUI() {
        $("#box li:first").css({"backgroundColor":"orange"});
    }

    function  initEvent() {
        $("#box").mouseenter(function () {
            stopPlay();
        });

        $("#box").mouseleave(function () {
            autoPlay();
        });

        $("#box li").click(function () {
            goImg($("#box li").index(this));
        });

        $(".prev").click(function () {
            let transord =ord-1;
            transord = transord<0?arr.length-1:transord;
            goImg(transord);
        });

        $(".next").click(function () {
            let transord =ord+1;
            transord = transord>arr.length-1?0:transord;
            goImg(transord);
        });
    }

    function autoPlay() {
        myTimer = setInterval(function () {
            let outOrd = ord;
            ord++;
            if(ord>arr.length-1){
                ord=0;
            }
            let $img = $("#box img");
            $img.eq(outOrd).animate({"opacity":0},2000);
            $img.eq(ord).animate({"opacity":1},2000);
            $("#box li").eq(ord).css({"backgroundColor":'orange'}).siblings().css({"backgroundColor":"white"});
        },3000);
    }

    function stopPlay() {
        window.clearInterval(myTimer);
    }

    function  goImg(transOrd) {
        let outOrd = ord;
        ord=transOrd;
        if(ord>arr.length-1){
            ord=0;
        }
        let $img = $("#box img");
        $img.eq(outOrd).animate({"opacity":0},2000);
        $img.eq(ord).animate({"opacity":1},2000);
        $("#box li").eq(ord).css({"backgroundColor":"orange"}).siblings().css({"backgroundColor":"white"});
    }

    $(function () {
        initUI();
        initEvent();
        autoPlay();
    });

// 回到顶部
var back = document.getElementsByClassName("jjj")[0];
// console.log(back);
window.onscroll =function(){
    //IE/火狐：document.documentElement.scrollTop
    //谷歌：document.body.srcollTop
    var top = document.documentElement.scrollTop || document.body.srcollTop
//			console.log(top)
    var client = document.documentElement.clientHeight || document.body.clientHeight;
   // console.log(client);
    if(top>client){
        back.style.display="block";
    }else{
        back.style.display="none";
    }
    back.onclick = function(){
//				document.documentElement.scrollTop =0;
//				document.body.scrollTop =0;
        var timer = setInterval(function(){
            var top = document.documentElement.scrollTop || document.body.srcollTop;
            var speed = Math.floor(-top/9);
            document.documentElement.scrollTop=document.body.scrollTop =top+speed;
            if(top <20){
                clearInterval(timer);
            }
        },30)
    }
}




