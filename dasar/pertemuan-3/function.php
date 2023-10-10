<?php
/*
di function pada parameter nya dapat di isi beberapa argumen.
dapat diberikan nilai default juga pada argumen nya, cth ⬇️ ;
// function salam ($nama="Admin"){
//  return "Halo Selamat Datang $nama, Ada Bisa Dibantu?";
// }
// echo salam()
/////////////////////
maka output nya akan, dikarenakan paramater tidak di isi & otomatis di isi dengan nilai default
-------------------------Halo Selamat Datang Admin, Ada Bisa Dibantu?--------------------------
*/

function salam ($nama){
  return "Halo Selamat Datang $nama, Ada Bisa Dibantu?";
}
echo salam('Aurelio');
?>
