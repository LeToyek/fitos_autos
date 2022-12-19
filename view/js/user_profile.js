$(document).ready(function () {
  open_profile();
})

function open_profile() {
  $('#profil_user').show("swing").fadeIn();
  $('#manage').hide("swing").fadeOut();
  $('#daftar_tx').hide("swing").fadeOut();

  $('#btn-profile').addClass('active');
  $('#btn-manage').removeClass('active');
  $('#btn-tx').removeClass('active');
}

function open_manage() {
  $('#profil_user').hide("swing").fadeOut();
  $('#manage').show("swing").fadeIn();
  $('#daftar_tx').hide("swing").fadeOut();

  $('#btn-profile').removeClass('active');
  $('#btn-manage').addClass('active');
  $('#btn-tx').removeClass('active');
}

function open_tx() {
  $('#profil_user').hide("swing").fadeOut();
  $('#manage').hide("swing").fadeOut();
  $('#daftar_tx').show("swing").fadeIn();

  $('#btn-profile').removeClass('active');
  $('#btn-manage').removeClass('active');
  $('#btn-tx').addClass('active');
}