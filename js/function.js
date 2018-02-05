$(document).ready(function(){
    $("html").niceScroll({
        cursorcolor:'#f7600e',
        cursorwidth:'10px',
        cursorborder:'1px solid #f7600e',
        cursorborderradius:0,
    });
})       
        document.onmousedown = function(e){
                e.preventDefault();
            }
        document.oncontextmenu = function(e){
                e.preventDefault();
            }
        document.onkeypress = function(e){
            if(e.keyCode == 123 ) {
                e.preventDefault();
            }
            else{
                if( e.keyCode == 17){
                    e.preventDefault();
                    document.onkeydown = function(e){
                    if(e.keyCode == 83 ) {
                    e.preventDefault();
                }
                document.onkeypress = function(e){
                    if(e.keyCode == 83 ) {
                    e.preventDefault();
                }
                document.onkeyup = function(e){
                    if(e.keyCode == 83 ) {
                    e.preventDefault();
                }
            }
            }
            }
        }
            }}
        document.onkeyup= function(e){
            if(e.keyCode == 123 ) {
                e.preventDefault();
            }
            else{
                if( e.keyCode == 17){
                    e.preventDefault();
                    document.onkeydown = function(e){
                    if(e.keyCode == 83 ) {
                    e.preventDefault();
                }
                document.onkeypress = function(e){
                    if(e.keyCode == 83 ) {
                    e.preventDefault();
                }
                document.onkeyup = function(e){
                    if(e.keyCode == 83 ) {
                    e.preventDefault();
                }
            }
            }
            }
        }}}
        document.onkeydown = function(e){
            if(e.keyCode == 123 ) {
                e.preventDefault();
            }
            else{
                if( e.keyCode == 17){
                    e.preventDefault();
                    document.onkeydown = function(e){
                    if(e.keyCode == 83 ) {
                    e.preventDefault();
                }
                document.onkeypress = function(e){
                    if(e.keyCode == 83 ) {
                    e.preventDefault();
                }
                document.onkeyup = function(e){
                    if(e.keyCode == 83 ) {
                    e.preventDefault();
                }
            }
            }
            }
        }
            }}
var butI         = document.querySelector(".butI"),
    slid         = document.getElementsByClassName("slid"),
    bef          = document.getElementById("bef"),
    aft          = document.getElementById("aft"),
    butII        = document.querySelector(".butII"),
    icon         = document.getElementById("icon"), 
    newDiv       = document.querySelectorAll(".cover"),
    div          = document.createElement("div"),
    div2         = document.createElement("div"),
    h3           = document.createElement("h3"),
    p            = document.createElement("p"),
    button       = document.createElement("button"),
    divH3        = document.createTextNode("ABAZOO WEBSITE"),
    buttonText   = document.createTextNode("Show Project"),
    divP         = document.createTextNode
        ("Ut enim ad minim veniam, quis nostrud laboris nisi ut aliquip ex ea commodo"),
    show         = document.getElementById("show"),
    stop         = 5,
    divShow      = 5,
    toShow       = divShow + 4,
    length       = newDiv.length - 1,
    l,
    i;

        h3.appendChild(divH3);
        p.appendChild(divP);
        button.appendChild(buttonText);
        div.appendChild(h3);
        div.appendChild(p);
        div.appendChild(button);
        div2.appendChild(div);
        div.style.width = "100%";
        div2.style.width = "100%";
        div2.setAttribute("class","divHover");
        button.setAttribute("class","hoverB");
    function myMove(pos,change,wt) { 
        "use strict";
  var id = setInterval(frame, 20);
  function frame() {
      "use strict";
    if (pos == wt) {
      clearInterval(id);
    } 
    else {
      if(pos + change < wt){
            pos = pos + change;
            document.body.scrollTop = pos;
      }
      else{
          if(pos + change > wt){
              pos = wt;
            document.body.scrollTop = pos;
          }
      }
    }
  }
}
 butI.onclick  =  function(){
     var x = document.getElementsByClassName("person")[0],
         m = x.offsetTop,
         y = m - parseInt(window.getComputedStyle(x).marginTop);
     myMove(0,100,y);
 };
 icon.onclick =  function(){
     myMove(0,100,1008)
 };
 butII.onclick =  function(){
     myMove(0,100,1740)
 };


console.log(newDiv.length);
for(i=0;i < newDiv.length;i++){
    newDiv[i].onmouseenter = function(){
        this.appendChild(div2);
    }
    newDiv[i].onmouseleave = function(){
        this.removeChild(div2)
    }
}
for(i=newDiv.length -1 ;i > divShow;i--){
    newDiv[i].classList.add('hideCss');
}

show.onclick = function(){
    if(show.className.split(" ").indexOf("wshow") > -1){
       for(i=divShow + 1 ;i < toShow ;i++){
           newDiv[i].classList.remove('hideCss');
       }
        toShow  +=3;
        divShow +=3;
        if(divShow == length){
            show.innerHTML='HIDE';
            show.classList.remove("wshow");
        }
    }else{
       for(l=divShow;l > toShow - 7 ;l--){
           newDiv[l].classList.add('hideCss');
       }
        toShow  -=3;
        divShow -=3;
        if(divShow == stop){
            show.innerHTML='SHOW MORE';
             show.classList.add("wshow");
        }
        
    }
}
slid[0].classList.add("act");
for(i=1 ;i < slid.length;i++){
    slid[i].classList.add("hideCss");
}
bef.onclick = function()
{
       var act = document.getElementsByClassName("act");
    if(slid[0].className.split(" ").indexOf("act") > -1){
        slid[0].classList.add("hideCss");
        slid[0].classList.remove("act");
        slid[slid.length - 1].classList.add("act");
        slid[slid.length - 1].classList.remove("hideCss");
    }
    else{
        var n = act[0].previousElementSibling;
        console.log(n);
        act[0].classList.add("hideCss");
        act[0].classList.remove("act");
        n.classList.remove("hideCss");
        n.classList.add("act");   
    }
}
aft.onclick = function()
{
       var act = document.getElementsByClassName("act");
    if(slid[slid.length - 1].className.split(" ").indexOf("act") > -1){
        slid[slid.length - 1].classList.add("hideCss");
        slid[slid.length - 1].classList.remove("act");
        slid[0].classList.add("act");
        slid[0].classList.remove("hideCss");
    }
    else{
        var n = act[0].nextElementSibling;
        console.log(n);
        act[0].classList.add("hideCss");
        act[0].classList.remove("act");
        n.classList.remove("hideCss");
        n.classList.add("act");   
    }
}










