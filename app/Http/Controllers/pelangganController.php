<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class pelangganController extends Controller
{
public function index()
{
$pelanggan = $this->dataPelanggan();
return view('pelanggan/index',compact('pelanggan'));
}
public function dataPelanggan()
{
$pelanggan = ['Mudo','Ongki','Gumay','Harlis'];
return $pelanggan;
}
}