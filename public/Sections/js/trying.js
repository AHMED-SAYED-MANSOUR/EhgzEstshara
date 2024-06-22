function changeIcon(anchor) {
    var icon = anchor.querySelector("i");
    icon.classList.toggle('fa-plus');
    icon.classList.toggle('fa-minus');
  
     anchor.querySelector("span").textContent = icon.classList.contains('fa-plus') ? "Read more" : "Read less";
  }

  function overview()
{
 if(display==1)
 {
  div1.style.display='block';
  document.getElementById('mybtn1').style.backgroundColor='#004080';
  document.getElementById('mybtn1').style.color='white';
  btnText1.innerHTML = "Read less";
  display=0;
  
 }
 else
 {
  div1.style.display='none';
  btnText1.innerHTML = "Read more";
  document.getElementById('mybtn1').removeAttribute('style');
  document.getElementById('mybtn1').removeAttribute('style');
  display =1;
 }
}