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


