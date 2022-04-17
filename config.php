<?php
$servername = "clmmuytin.net";
$username = "root";
$password = "";
$database = "test";
$conn = mysqli_connect($servername, $username, $password, $database);
mysqli_set_charset($conn,"utf8");
function hoangphuc($query)
{
  global $conn;
  return mysqli_query($conn, $query);
}
function row_counts($result)
{
  return mysqli_num_rows($result);
}
function fetch_array($result)
{
  return mysqli_fetch_array($result);
}
function formatvnd($vnd)
{
  return str_replace(",", ".", number_format($vnd));
}
function confirm($result)
{
  global $conn;
  if (!$result) {
    die("ERROR query" . mysqli_error($conn));
  }
}
$caidat_momo = hoangphuc("SELECT * FROM `caidat_momo` WHERE id=1");
$caidat = fetch_array($caidat_momo);
?>