<?php
class CModel {
    public function GetData () {
        // $arrayResult[] = array(
        //     'TITLE' => 'blog hosting site',
        //     'DATE' => '22.06.2020',
        //     'AUTHOR' => 'VolDeMort',
        //     'IMAGE' => 'https://news.artnet.com/app/news-upload/2019/01/Cat-Photog-Feat-256x256.jpg',
        //     'TEXT' => 'Nulla morbi, ad pur Portwisu id, arcu vestibulum dolor conmtum ac egestas lorem elit libero',

        // );

        // $arrayResult[] = array(
        //     'TITLE' => 'blog hosting site NEW',
        //     'DATE' => '21.06.2020',
        //     'AUTHOR' => 'Igor',
        //     'IMAGE' => 'https://news.artnet.com/app/news-upload/2019/01/Cat-Photog-Feat-256x256.jpg',
        //     'TEXT' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Accusamus harum voluptas esse vel cumque culpa',

        // );
         $mysqli = new mysqli("localhost", "root", "", "blog");

         $result = $mysqli->query("SELECT * FROM News");

        $arrayResult = $result->fetch_all(MYSQLI_ASSOC);
        
        return $arrayResult;
    }
}