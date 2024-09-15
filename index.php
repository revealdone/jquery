<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<!-- kalo mau manggil class itu pake .class titik
    kalo manggil id pake #id #-->
<!-- 
    event pada jquery
    event merupakan suatu method atau aksi yang di lakukan pada jquery.
    misalnya :
    
        #mouse events :                     #keyboard events :
        -click                              -keypress
        -dblclick                           -keydown
        -mouseenter                         -keyup
        -mouseleave

        #form events:                       #document/window events :
        -sumbit                             -load
        -change                             -resize
        -focus                              -scroll
        -blur                               -unload

-->

<!-- mendapatkan (get ) nilai dan value dengan jquery
            
    -html() : adalah fungsi jquery untuk mendapatkan nilai elemen pda html
    -text() : untuk mendapatkan konten text pada dari elemen html
    -val() : untuk mendapatkan nilai value dari elemen html
    -attr() : untuk mendapatkan nilai dari atribut pada elemen html

-->

<!-- efek pada jquery
 -hide() = untuk menyembunyikan elemen
 -show() = untuk menampilkan elemen
 -toggle() = untuk menampilkan dan untuk menyembunyikan elemen
 -fadeIn() = untuk menampilkan elemen dengan efek mudar
 -fadeOut() = untuk menyembunyikan elemen dengan efek mudar
 fadeToggle() = untuk menampilkan dan menyembunyikan elemen dengan efek mudar
 slideDown() = untuk menampilkan elemen dengan efek slide
 slideUP() = untuk menyembunyikan elemen dengan efek slide
 slideToggle() = untuk menampilkan menyembunyikan elemen dengan efek slide
  -->
<body>
    <h1>Belajar jquery|<p>kian santang</p></h1>

    <button id="tombol">tombol hide</button>
    
    <button class="tombol">tombol show</button>
    <h5>ketika ngetik keyboard di input ada alert>
    <input type="text" id="teks"></h5>ketika mengganti di input ada muncul show> click tombol hide dulu
    <input type="text" id="teks1">
    <p class="box">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit ab, quia ipsum, excepturi, odit facere sed perspiciatis tempora exercitationem eos quidem doloribus mollitia fugit. Molestiae sint voluptatum praesentium voluptatem dolorum.</p>
    <button id="tombol1">tombol hide double click</button>
    <button id="tombol3" >Klik aku</button>
    <button type="button" id="tombol34" onclick="Swal('heloo', 'js', 'success')">Klik aku sweert</button>
    <button id="tombol4">Klik aku html tag</button>
    <button id="tombol5">Klik aku text doang</button>

    <p class="box1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, debitis sed deserunt nulla impedit iste dignissimos commodi maxime porro doloribus, ducimus, esse sit rem quae? Expedita eaque sapiente a alias.</p>
    
    <button id="tombol_hide">tombol hide  </button>
    <button id="tombol_show">tombol show  </button>
    <button id="tombol_toggle">tombol toggle  </button>
    <button id="tombol_fadeIn">tombol  fadeIn </button>
    <button id="tombol_fadeOut">tombol fadeOut </button>
    <button id="tombol_fadeToggle">tombol fadeToggle </button>
    <button id="tombol_slideDown">tombol slideDown </button>
    <button id="tombol_slideUp">tombol slideUp </button>
    <button id="tombol_slideToggle">tombol slideToggle </button>

    <h4>set nilai</h4>
    <input type="text" id="teks2" class="set2 mb-10">
    <button id="tombol6" >klik aku untuk set nilai</button>
    <button id="tombol7" >klik aku untuk set nilai</button>
    <button id="tombol_kosongkan" >kosongkan</button>
    <p>show password jquery</p>
    
    <div class="box3">
      <form>
        <input type="password" class="form-password">
        <br/>
        <input type="checkbox" class="form-checkbox">show password
        <br/>
        <input type="sumbit" class="form-sumbit" value="login">
      </form>
    </div>

    
    <script src="http://localhost:8080/jquery/sweetalert2.all.min.js"></script>
    <script src="http://localhost:8080/jquery/jquery-3.7.1.min.js"></script>
    <script src="http://localhost:8080/jquery/jquery.js"></script>
<script>
    $(document).ready(function () {
  // mendapatkan get nilai dan value
  $("#tombol3").click(function () {
    alert("hai...");
  });
//   ngambil isi tag html berikut sintag nya kaya h1
  $("#tombol4").click(function () {
    var nilai = $('h1').html()
    alert(nilai)
  });
  //   ngambil isi tag text html gapake sintag nya kaya h1
  $("#tombol5").click(function () {
    var nilai = $('h1').text()
    alert(nilai)
  });
// show click
  $("#tombol_hide").click(function () {
    $(".box1").hide(1000);
  });
  $("#tombol_show").click(function () {
    $(".box1").show(1000);
  });
  $("#tombol_toggle").click(function () {
    $(".box1").toggle(1000);
  });
  $("#tombol_fadeIn").click(function () {
    $(".box1").fadeIn(1000);
  });
  $("#tombol_fadeOut").click(function () {
    $(".box1").fadeOut(1000);
  });
  $("#tombol_fadeToggle").click(function () {
    $(".box1").fadeToggle(1000);
  });
  $("#tombol_slideDown").click(function () {
    $(".box1").slideDown(1000);
  });
  $("#tombol_slideUp").click(function () {
    $(".box1").slideUp(1000);
  });
  $("#tombol_slideToggle").click(function () {
    $(".box1").slideToggle(1000);
  });
// 
  $("#tombol6").click(function () {
    $("h4").html("selamet datang, <b>IT</b> Programmer");
  }); 


  $('#teks2').val('IT PROGRAMMER');

  $("#tombol7").click(function () {
    $("#teks2").val("selamet datang, <b>IT</b> Programmer wahid");
  }); 
  $("#tombol_kosongkan").click(function () {
    $("#teks2").val("");
    $("#teks2").focus();
  }); 

  // show password di checkbox
  $(".form-checkbox").click(function () {
    // uji jika checkbox aktif
    if ($(this).is(':checked')) {
      $('.form-password').attr('type','text');
    } else {
      $('.form-password').attr('type','password');
    }
  }); 

  $("#tombol34").click(function () {
    let timerInterval;
Swal.fire({
  title: "Auto close alert!",
  html: "I will close in <b></b> milliseconds.",
  timer: 2000,
  timerProgressBar: true,
  didOpen: () => {
    Swal.showLoading();
    const timer = Swal.getPopup().querySelector("b");
    timerInterval = setInterval(() => {
      timer.textContent = `${Swal.getTimerLeft()}`;
    }, 100);
  },
  willClose: () => {
    clearInterval(timerInterval);
  }
}).then((result) => {
  /* Read more about handling dismissals below */
  if (result.dismiss === Swal.DismissReason.timer) {
    console.log("I was closed by the timer");
  }
});
  });

});

</script>
<script src="sweetalert2.all.min.js"></script>
</body>
</html>