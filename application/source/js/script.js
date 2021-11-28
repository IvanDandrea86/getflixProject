
const bg_image= document.getElementById("bg_img")


window.onload = function () {

    function changeImage() {   
        var BackgroundImg=[
            "./media/cine0.jpg",
            "./media/cine2.jpg"];
        var i = Math.floor((Math.random() * 2));
        bg_image.style.backgroundImage = 'url("' + BackgroundImg[i] + '")';
    }
    window.setInterval(changeImage, 7000);
}