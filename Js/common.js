
function copyrightYear(){  //keep copyright year updated
  let copyRight=document.getElementById('copyRight');
  let date=new Date();
  copyRight.innerHTML=`<i class="fa fa-copyright fa-md" aria-hidden="true"></i> Copyright ${date.getFullYear()} APC Taourirt Ighil-Tous droits réservés`;
}

