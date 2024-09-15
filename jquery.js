$(document).ready(function () {
  // click 1x
  $("#tombol").click(function () {
    $(".box").hide(1000);
  });

  $(".tombol").click(function () {
    $(".box").show(3000);
  });
  // click 2x
  $("#tombol1").dblclick(function () {
    $(".box").hide(1000);
  });
  // ketika ngetik keyboard di input ada alert
  $("#teks").keypress(function () {
    alert("anda menekan keyboard");
  });
  // kalo di input di ganti kata2 nya maka show
  $("#teks1").change(function () {
    $(".box").show(1000);
  });

  $("#tombol_fadeIn").click(function () {
    $(".box1").fadeIn(1000);
  });

  $("#tombol6").click(function () {
    $(".p").html("selamet datang, <b>IT</b> Programmer");
  });
});
