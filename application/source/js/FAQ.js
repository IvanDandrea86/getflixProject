const allCross = document.querySelectorAll('.visible-panel img');
console.log(allCross);
allCross.forEach(element => {
        element.addEventListener('click', function(){
            if(this.scr.includes('croix')){
                this.scr = './media/minus.svg';
            } else if (this.scr.includes('minus'))
                this.scr = './media/croix.svg';
        })
});
