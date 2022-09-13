@extends('layout.layout')

@section('container')

<div class="col">
    <br>    
    <br>
    <h3><img src="/img/logo-provinsi-jatim.png" style=”float:left;” width="15%" />  -  Selamat Datang Sistem Informasi Surat Menyurat CDK -</h3>
    <hr>
    <p><center>Salah Satu Fitur Dari <a href="https://cdkmalang.dishut.jatimprov.go.id/">Website CDK Malang</a> Untuk Mempermudah Dan Mengelola Surat Masuk Dan Keluar</center><p>

    
    <br>
    <br>
    <br>



    <div class="row my-6">
        
        <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
            <h4>Si - Ratma</h4>
            <hr class="w3-clear">
            <p style="font-size: 20px;"> <strong>Sistem Informasi Surat Menyurat</strong> adalah aplikasi untuk menginput segala jenis persuratan mulai dari Surat Masuk maupun Surat Keluar CDK Wilayah Malang</p>
            <div class="w3-row-padding" style="margin:0 -16px">
            </div>
        </div>
    </div>

    <br>
    <br>
    <br>

    <div class="row my-6">
        <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
            <h4>Surat Masuk & Keluar</h4>
            <hr class="w3-clear">
            <p style="font-size: 20px;">Merupakan Fitur Untuk Menambahkan Dan Mendata Surat - Surat Yang Akan Masuk Dan Juga Keluar , Selain Surat Masuk Dan Keluar Terdapat Juga Lembar Diposisi Juga Kode Pengarsipan Yang Berfungsi Untuk Menginput Kode Pada Setiap Surat</p>
            <div class="w3-row-padding" style="margin:0 -16px">
                <br>
                <div class="col">
                    <p class=""></p>
                    <a href="/surat-masuk" class="btn btn-primary">Surat Masuk</a>
                    <a href="/surat-keluar" class="btn btn-warning">Surat Keluar</a>
                </div>
            </div>
        </div>
    </div>

    <br>
    <br>
    <br>

    <div class="row my-6">
        <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
            <h4>Disposisi</h4>
            <hr class="w3-clear">
            <p style="font-size: 20px;">Berfungsi Untuk Mempermudah Dalam Menindaklanjuti Surat Sesuai Dengan Apa Yang Dikehendaki</p>
            <div class="w3-row-padding" style="margin:0 -16px">
                <br>
                <div class="col">
                    <p class=""></p>
                    <a href="/disposisi" class="btn btn-dark">Lembar Disposisi</a>
                </div>
            </div>
        </div>
    </div>

    <br>
    <br>
    <br>

    <div class="row my-6">
        <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
            <h4>Pengarsipan</h4>
            <hr class="w3-clear">
            <p style="font-size: 20px;">Merupakan Fitur Untuk Mempermudah Pengarsipan Surat Yang Masuk , Tersedia Arsip Aktif Dan Arsip Korespondensi</p>
            <div class="w3-row-padding" style="margin:0 -16px">
                <br>
                <div class="col">
                    <p class=""></p>
                    <a href="/arsip-aktif" class="btn btn-primary">Arsip Aktif</a>
                    <a href="/arsip-korespondensi" class="btn btn-warning">Arsip Korespondensi</a>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <hr>
    <br>
    <script>
        // Accordion
        function myFunction(id) {
        var x = document.getElementById(id);
        if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-theme-d1";
        } else { 
        x.className = x.className.replace("w3-show", "");
        x.previousElementSibling.className = 
        x.previousElementSibling.className.replace(" w3-theme-d1", "");
        }
        }
        
        // Used to toggle the menu on smaller screens when clicking on the menu button
        function openNav() {
        var x = document.getElementById("navDemo");
        if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        } else { 
        x.className = x.className.replace(" w3-show", "");
        }
        }
        </script>

@endsection

    