<?php

  interface KontrakPasienView {
      public function tampil();
  }

  interface KontrakPasienPresenter {
      public function prosesDataPasien();
      public function prosesDataPasienByID($id);
      public function tambahData($data);
      public function hapusData($id);
      public function ubahData($id, $data);
      public function getId($i);
      public function getNik($i);
      public function getNama($i);
      public function getTempat($i);
      public function getTl($i);
      public function getGender($i);
      public function getEmail($i);
      public function getTelp($i);
      public function getSize();
  }
