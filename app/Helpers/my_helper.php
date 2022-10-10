<?php
function get_format_date_sql($date){
    $tgl = new DateTime($date);
    return $tgl->format("Y-m-d");
}
function get_format_date($date){
    $tgl = new DateTime($date);
    return $tgl->format("d-m-Y");
}
function date_now(){
    $tgl = new DateTime("now");
    return $tgl->format("d-m-Y");
}
function get_date_time($date){
    $tgl = new DateTime($date);
    return $tgl->format("Y-m-d H:i:s");
}
function get_time($date){
    $tgl = new DateTime($date);
    return $tgl->format("H:i:s");
}
function successMsg($success)
{
    $display = '<div class="alert alert-success alert-dismissable">
                    <i class="fa fa-check"></i>
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    ' . $success . '
                </div>';
    return $display;
}
function errorMsg($error)
{
    $display = '<div class="alert alert-danger alert-dismissable">
                    <i class="fa fa-remove"></i>
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    ' . $error . '
                </div>';
    return $display;
}
function hitungUmur($tgl_lahir){
    $birthDate = new DateTime($tgl_lahir);
	$today = new DateTime("today");
	if ($birthDate > $today) { 
	    exit("0 tahun 0 bulan 0 hari");
	}
	$y = $today->diff($birthDate)->y;
	$m = $today->diff($birthDate)->m;
	$d = $today->diff($birthDate)->d;
    return $y." tahun ".$m." bulan ".$d." hari";
}
function cekUmur($tgl_lahir){
    $birthDate = new DateTime($tgl_lahir);
	$today = new DateTime("today");
	if ($birthDate > $today) { 
	    exit("0 tahun 0 bulan 0 hari");
	}
	$y = $today->diff($birthDate)->y;
    return $y;
}
