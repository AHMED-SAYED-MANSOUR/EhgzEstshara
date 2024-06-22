var div1=document.getElementById('over-view');
var btnText1 = document.getElementById("mybtn1");
var display1=1;
var display2=1;
var display3=1;

function overview()
{
 if(display1==1)
 {
    div2.style.display='none';
    div3.style.display='none';
    btnText2.innerHTML = '<i id="plus" class="fa-solid fa-plus"></i>'+'&nbsp'+'&nbsp'+'&nbsp'+"Read More";
    btnText3.innerHTML = '<i id="plus" class="fa-solid fa-plus"></i>'+'&nbsp'+'&nbsp'+'&nbsp'+"Read More";
    document.getElementById('mybtn2').style.backgroundColor='white';
    document.getElementById('mybtn3').style.backgroundColor='white';
    document.getElementById('mybtn2').style.color='black';
    document.getElementById('mybtn3').style.color='black';
  div1.style.display='block';
  document.getElementById('mybtn1').style.backgroundColor='#004080';
  document.getElementById('mybtn1').style.color='white';

  btnText1.innerHTML ='<i id="minus" class="fa-solid fa-minus"></i>'+'&nbsp'+'&nbsp'+'&nbsp'+"Read less";
  display1=0;
  display2=1;
  display3=1;
  
 }
 else
 {
  div1.style.display='none';
  btnText1.innerHTML = '<i id="plus" class="fa-solid fa-plus"></i>'+'&nbsp'+'&nbsp'+'&nbsp'+"Read more";
  document.getElementById('mybtn1').removeAttribute('style');
  document.getElementById('mybtn1').removeAttribute('style');
  display1 =1;
 }
}

var div2=document.getElementById('prevention');
var btnText2 = document.getElementById("mybtn2");

function prevention()
{
 if(display2==1)
 {
    div1.style.display='none';
    div3.style.display='none';
    btnText1.innerHTML = '<i id="plus" class="fa-solid fa-plus"></i>'+'&nbsp'+'&nbsp'+'&nbsp'+"Read More";
    btnText3.innerHTML = '<i id="plus" class="fa-solid fa-plus"></i>'+'&nbsp'+'&nbsp'+'&nbsp'+"Read More";
    document.getElementById('mybtn1').style.backgroundColor='white';
    document.getElementById('mybtn3').style.backgroundColor='white';
    document.getElementById('mybtn1').style.color='black';
    document.getElementById('mybtn3').style.color='black';
  div2.style.display='block';
  document.getElementById('mybtn2').style.backgroundColor='#004080';
  document.getElementById('mybtn2').style.color='white';
  btnText2.innerHTML = '<i id="minus" class="fa-solid fa-minus"></i>'+'&nbsp'+'&nbsp'+'&nbsp'+"Read less";
  display2=0;
  display3=1;
  display1=1;
 }
 else
 {
  div2.style.display='none';
  btnText2.innerHTML = '<i id="plus"  class="fa-solid fa-plus"></i>'+'&nbsp'+'&nbsp'+'&nbsp'+"Read more";
  document.getElementById('mybtn2').removeAttribute('style');
  document.getElementById('mybtn2').removeAttribute('style');
  display2 =1;
 }
}

var div3=document.getElementById('diagnosis');
var btnText3 = document.getElementById("mybtn3");

function diagnosis()
{
 if(display3==1)
 {
    div1.style.display='none';
    div2.style.display='none';
    btnText1.innerHTML = '<i id="plus" class="fa-solid fa-plus"></i>'+'&nbsp'+'&nbsp'+'&nbsp'+"Read More";
    btnText2.innerHTML = '<i id="plus" class="fa-solid fa-plus"></i>'+'&nbsp'+'&nbsp'+'&nbsp'+"Read More";
    document.getElementById('mybtn1').style.backgroundColor='white';
    document.getElementById('mybtn2').style.backgroundColor='white';
    document.getElementById('mybtn1').style.color='black';
    document.getElementById('mybtn2').style.color='black';
  div3.style.display='block';
  document.getElementById('mybtn3').style.backgroundColor='#004080';
  document.getElementById('mybtn3').style.color='white';
  btnText3.innerHTML = '<i id="minus"  class="fa-solid fa-minus"></i>'+'&nbsp'+'&nbsp'+'&nbsp'+"Read less";
  display3=0;
  display2=1;
  display1=1;
 }
 else
 {
  div3.style.display='none';
  btnText3.innerHTML = '<i id="plus"  class="fa-solid fa-plus"></i>'+'&nbsp'+'&nbsp'+'&nbsp'+"Read more";
  document.getElementById('mybtn3').removeAttribute('style');
  document.getElementById('mybtn3').removeAttribute('style');
  display3 =1;
 }
}



$(window).scroll(function () {
    if ($(this).scrollTop() > 300) {
        $('.sticky-top').addClass('shadow-sm').css('top', '0px');
    } else {
        $('.sticky-top').removeClass('shadow-sm').css('top', '-100px');
    }
});

