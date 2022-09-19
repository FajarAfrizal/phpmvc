<?php
class Book_model
{
    private $books = [
        [
            "judul" => "hujan",
            "penulis" => "tere liye",
            "tanggal_selesai" => "2022-06-22",
        ],
        [
            "judul" => "pulang",
            "penulis" => "tere liye",
            "tanggal_selesai" => "2022-07-30",
        ]
    ];
    public function getbooks()
    {
        return $this->books;
    }
}
