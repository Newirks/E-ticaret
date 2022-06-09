function openNav() {
	document.getElementById('nav').style.width = "100%";
}
function closeNav() {
	document.getElementById('nav').style.width = "0%";
}
function openmenu() {
	document.getElementById('mobilmenu').style.width = "100%";
}
function backmenu() {
	document.getElementById('mobilmenu').style.width = "0%";
}


"use strict";
  var _slayt = document.getElementsByClassName("slayt");
  var slaytSayisi = _slayt.length;
  var slaytNo = 0;
  var i = 0;

  slaytGoster(slaytNo);

  function sonrakiSlayt() {
    slaytNo++;
    slaytGoster(slaytNo);
  }

  function oncekiSlayt() {
    slaytNo--;
    slaytGoster(slaytNo);
  }

  function slaytGoster(slaytNumarasi) {
    slaytNo = slaytNumarasi;

    if (slaytNumarasi >= slaytSayisi) slaytNo = 0;

    if (slaytNumarasi < 0) slaytNo = slaytSayisi - 1;

    for (i = 0; i < slaytSayisi; i++) {
      _slayt[i].style.display = "none";
    }

    _slayt[slaytNo].style.display = "block";

  }


