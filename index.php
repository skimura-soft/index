
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>I Love You Kak>_< - kalteng cyber xploit</title>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.all.min.js"></script>
  </head>
  <body>
    <div id="foto" class="foto" style="display:none">
<div class="image">
<!-- Foto Kamu --><img id="ftKm" src="https://i.postimg.cc/8zxYn2xG/FB-IMG-16354292315443416.jpg" width="100px" height="100px"/>
<!-- Foto Aku --><img id="ftAk" style="opacity:0;position:absolute;" src="https://i.postimg.cc/KzDsjRjc/FB-IMG-16354292358400063.jpg" width="100px" height="100px"/></div>
<!-- Nama Kamu --><span id="sp1"><b id="namamu"></b><div id="lope" style="display:inline-block;align-items:center;justify-content:center;">&#9829;</div></span>
<div id="sp2" style="display:none;"><span style="font-size:13px;" id="text3"></span></div>
<div id="sp3" style="display:none;"><span id="text4"></span></div>
</div>

<div id='Content' style="display:none">
<div class="kolomteks"><p id="text"></p><p style="font-size:.80rem;" id="text2"></p></div>
<div id="trm" class="contTom"><a style="margin:12px 12px 12px 0;" class='button' onClick="lanjutan();"></i>Lanjut</a></div>
<!-- Nomor WA --><a id="whs" class='button whatsapp' onClick='bukaWa();'><i class='icon whatsapp'></i>Kirim pesan</a>
<a id="whs" class="button whatsapp" onClick="bukaWa2();"><i class="icon whatsapp"></i>Kirim Pesan</a>
</div>

    <script src="js/script.js"></script>
    <script type="text/javascript">
            var author = 'Aku';
            var today = new Date();var date = today.getDate()+'/'+(today.getMonth()+1)+'/'+today.getFullYear()+'.';var dateTime = date;
            var swals = Swal
            async function mulai(){
                var { value: nama } = await swals.fire({
                    title: 'Nama kamu?',
                    input: 'text',
                    confirmButtonText: 'Lanjut',
                    allowOutsideClick: false,
                    showCancelButton: false,
                });                           
                if(nama){
                  play();
                	window.nama = nama;
                    text2 = "Dari: " + author + ", untuk: " + window.nama + ".";
                    text4 = "I Love U, " + window.nama + "!";         
                	await swals.fire(`Hai, ${nama}! &#10084;&#65039;`);
                    await swals.fire(`Sekarang lihat ini ya &#10084;&#65039;`);
                    ketik();showDiv();showFt();
                    document.getElementById("namamu").innerHTML = "Halo, " + nama + "!";                    
                } else {
                    await swals.fire('Isi namanya ayanggg');
                    await swals.fire('Gak boleh kosong');
                    mulai();
                }
            }
            mulai()
            async function lanjutan(){
                    var { value: sayang } = await swals.fire({
                        title: `Sebelumnya, ${nama} sayang gak sama ${author} :(`,
                        showDenyButton: true,
                        showCancelButton: false,
                        confirmButtonText: 'Sayang',
                        denyButtonText: `Gak sayang`,
                        allowOutsideClick: false,
                    }).then((result) => {
                        if (result.isConfirmed) {
                             window.sayang = "sayang";lanjutan2();    
                        } else if (result.isDenied) {window.sayang = "enggak sayang";window.persen = "%3A%2F";Swal.fire('Yaudah deh:(');whs();}})}
  
                    async function lanjutan2(){
                        var { value: persen } = await swals.fire({
                            title: 'Seberapa sayang?',
                            icon: 'question',
                            input: 'range',
                            inputLabel: 'Antara 10-100% ya',
                            inputAttributes: {
                                min: 10,
                                max: 100,
                            },
                            allowOutsideClick: false,
                            inputValue: 90
                        });
                        if(persen){
                        	window.persen = persen + '%25';
                        	await swals.fire(`Maacii udah sayang sama ${author} ${persen}%`);
                            iloveu();siap();whs();
                            }
                        }
                        function bukaWa(){window.location = "https://wa.me/6285821676621?text=mau%20dong%20aku%20jadi%20pacar%20kamu";}
                        function bukaWa1(){
                        window.location = "https://wa.me/6285821676621?text=gamau%20pacaran%20sama%20kamu";
                        }
</script>
    <script>
  var i=0,text;
  text = "Bahkan gula pun akan kalah manisnya ketika kamu tersenyum kepadaku."
  var u=0,text2;//Text2 ada di if(nama)  
  var o=0,text3;
  text3 = "Lihat ini sayang...                                 "
  var a=0,text4;//Text4 ada di if(nama)
</script>
  </body>
</html>
