<?php

class About
{
  public function index($nama = 'Wahyu', $pekerjaan = 'Mahasiswa')
  {
    echo "Halo, nama saya adalah $nama, saya adalah seorang $pekerjaan";
  }

  public function page()
  {
    echo 'About/page';
  }
}
