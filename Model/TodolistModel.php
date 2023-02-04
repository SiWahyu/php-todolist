<?php

namespace Model {

  class Todolist {

    private string $kegiatan;
    private string $deskripsiKegiatan;

    public function getKegiatan(): string {
      return $this->kegiatan;
    }

    public function setKegiatan(string $kegiatan){
      $this->kegiatan = $kegiatan;
    }

    public function getDeskripsiKegiatan(): string {
      return $this->deskripsiKegiatan;
    }

    public function setDeskripsiKegiatan(string $deskripsiKegiatan){
      $this->deskripsiKegiatan = $deskripsiKegiatan;
    }

  }
}

?>