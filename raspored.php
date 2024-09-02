<?php

// Definisanje osnovnih podataka
$razredi = ["5-1", "5-2", "5-3", "5-4","6-1","6-2","6-3","6-4","7-1", "7-2", "7-3", "7-4", "8-1", "8-2", "8-3", "8-4"];
$predmeti = ["Matematika", "Srpski jezik", "Engleski jezik", "Informatika","Tehničko", "Muzičko", "Fizika", "Hemija", "Fizičko", "Geografija", "Biologija", "Istorija",  "Ruski", "Francuski", "Likovno"];
$nastavnici = [];
for ($i = 1; $i <= 27; $i++) {
    $nastavnici[] = "Nastavnik $i";
}

// Primer ogranicenja (nastavnici koji ne mogu imati časove u određeno vreme)
$ogranicenja_nastavnika = [
    //"Slavica Brkić" => [ "Ponedeljak 6","Utorak 6","Sreda 6","Četvrtak 6", "Petak 6"],

     //"Ivan Drljača" => ["Ponedeljak 1","Ponedeljak 2","Ponedeljak 3","Ponedeljak 4","Ponedeljak 5", "Ponedeljak 6","Ponedeljak 7","Ponedeljak 8","Sreda 1", "Sreda 2","Sreda 3","Sreda 4","Sreda 5","Sreda 6","Sreda 7","Sreda 8",],
       //"Jelena Munđa" => ["Petak 4","Petak 5","Petak 6","Petak 7","Petak 8",],
       //"Sabrina Kurajica" => ["Ponedeljak 1", "Ponedeljak 2","Utorak 1","Utorak 2","Sreda 1","Sreda 2","Četvrtak 1", "Četvrtak 2", "Petak 1", "Petak 2"],
    // Dodaj druga ogranicenja po potrebi
];
$broj_casova_po_predmetu = [
    "5-1" => [
        "Matematika" => 4,
        "Srpski jezik" => 5,
        "Engleski jezik" => 2,
        "Informatika" => 2,
        "Tehničko" => 2,
        "Muzičko" => 2,
        "Fizičko" => 3,
        "Geografija" => 2,
        "Biologija" => 2,
        "Istorija" => 2,
        "Ruski" => 2,
        "Francuski" => 2,
        "Likovno" => 2,
        // Nema Fiziku ni Hemiju
    ],
      "5-2" => [
        "Matematika" => 4,
        "Srpski jezik" => 5,
        "Engleski jezik" => 2,
        "Informatika" => 2,
        "Tehničko" => 2,
        "Muzičko" => 2,
        "Fizičko" => 3,
        "Geografija" => 2,
        "Biologija" => 2,
        "Istorija" => 2,
        "Ruski" => 2,
        "Francuski" => 2,
        "Likovno" => 2,
        // Nema Fiziku ni Hemiju
    ],
      "5-3" => [
        "Matematika" => 4,
        "Srpski jezik" => 5,
        "Engleski jezik" => 2,
        "Informatika" => 2,
        "Tehničko" => 2,
        "Muzičko" => 2,
        "Fizičko" => 3,
        "Geografija" => 2,
        "Biologija" => 2,
        "Istorija" => 2,
        "Ruski" => 2,
        "Francuski" => 2,
        "Likovno" => 2,
        // Nema Fiziku ni Hemiju
    ],
      "5-4" => [
        "Matematika" => 4,
        "Srpski jezik" => 5,
        "Engleski jezik" => 2,
        "Informatika" => 2,
        "Tehničko" => 2,
        "Muzičko" => 2,
        "Fizičko" => 3,
        "Geografija" => 2,
        "Biologija" => 2,
        "Istorija" => 2,
        "Ruski" => 2,
        "Francuski" => 2,
        "Likovno" => 2,
        // Nema Fiziku ni Hemiju
    ],
    "6-1" => [
        "Matematika" => 4,
        "Srpski jezik" => 4,
        "Engleski jezik" => 2,
        "Informatika" => 2,
        "Tehničko" => 2,
        "Muzičko" => 2,
        "Fizičko" => 3,
        "Geografija" => 2,
        "Biologija" => 2,
        "Istorija" => 2,
        "Ruski" => 2,
        "Francuski" => 2,
        "Likovno" => 2,
        "Fizika" => 2, // Ima Fiziku, ali ne i Hemiju
    ],
      "6-2" => [
        "Matematika" => 4,
        "Srpski jezik" => 4,
        "Engleski jezik" => 2,
        "Informatika" => 2,
        "Tehničko" => 2,
        "Muzičko" => 2,
        "Fizičko" => 3,
    
        "Geografija" => 2,
        "Biologija" => 2,
        "Istorija" => 2,
        "Ruski" => 2,
        "Francuski" => 2,
        "Likovno" => 1,
        "Fizika" => 2, // Ima Fiziku, ali ne i Hemiju
    ],
      "6-3" => [
        "Matematika" => 4,
        "Srpski jezik" => 4,
        "Engleski jezik" => 2,
        "Informatika" => 2,
        "Tehničko" => 2,
        "Muzičko" => 2,
        "Fizičko" => 3,
        "Geografija" => 2,
        "Biologija" => 2,
        "Istorija" => 2,
        "Ruski" => 2,
        "Francuski" => 2,
        "Likovno" => 1,
        "Fizika" => 2, // Ima Fiziku, ali ne i Hemiju
    ],
      "6-4" => [
        "Matematika" => 4,
        "Srpski jezik" => 4,
        "Engleski jezik" => 2,
        "Informatika" => 2,
        "Tehničko" => 2,
        "Muzičko" => 2,
        "Fizičko" => 3,
        "Geografija" => 2,
        "Biologija" => 2,
        "Istorija" => 2,
        "Ruski" => 2,
        "Francuski" => 2,
        "Likovno" => 1,
        "Fizika" => 2, // Ima Fiziku, ali ne i Hemiju
    ],
    "7-1" => [
        "Matematika" => 4,
        "Srpski jezik" => 4,
        "Engleski jezik" => 2,
        "Informatika" => 2,
        "Tehničko" => 2,
        "Muzičko" => 2,
        "Fizičko" => 3,
        "Geografija" => 2,
        "Biologija" => 2,
        "Istorija" => 2,
        "Ruski" => 2,
        "Francuski" => 2,
        "Likovno" => 1,
        "Fizika" => 2,
        "Hemija" => 2, // Imaju i Fiziku i Hemiju
    ],
 
   
      "7-2" => [
        "Matematika" => 4,
        "Srpski jezik" => 4,
        "Engleski jezik" => 2,
        "Informatika" => 2,
        "Tehničko" => 2,
        "Muzičko" => 2,
        "Fizičko" => 3,
        "Geografija" => 2,
        "Biologija" => 2,
        "Istorija" => 2,
        "Ruski" => 2,
        "Francuski" => 2,
        "Likovno" => 1,
        "Fizika" => 2,
        "Hemija" => 2, // Imaju i Fiziku i Hemiju
    ],
      "7-3" => [
        "Matematika" => 4,
        "Srpski jezik" => 4,
        "Engleski jezik" => 2,
        "Informatika" => 2,
        "Tehničko" => 2,
        "Muzičko" => 2,
        "Fizičko" => 3,
        "Geografija" => 2,
        "Biologija" => 2,
        "Istorija" => 2,
        "Ruski" => 2,
        "Francuski" => 2,
        "Likovno" => 1,
        "Fizika" => 2,
        "Hemija" => 2, // Imaju i Fiziku i Hemiju
    ],
      "7-4" => [
        "Matematika" => 4,
        "Srpski jezik" => 4,
        "Engleski jezik" => 2,
        "Informatika" => 2,
        "Tehničko" => 2,
        "Muzičko" => 2,
        "Fizičko" => 3,
        "Geografija" => 2,
        "Biologija" => 2,
        "Istorija" => 2,
        "Ruski" => 2,
        "Francuski" => 2,
        "Likovno" => 1,
        "Fizika" => 2,
        "Hemija" => 2, // Imaju i Fiziku i Hemiju
    ],
        "8-1" => [
        "Matematika" => 4,
        "Srpski jezik" => 4,
        "Engleski jezik" => 2,
        "Informatika" => 2,
        "Tehničko" => 2,
        "Muzičko" => 2,
        "Fizičko" => 3,
        "Geografija" => 2,
        "Biologija" => 2,
        "Istorija" => 2,
        "Ruski" => 2,
        "Francuski" => 2,
        "Likovno" => 1,
        "Fizika" => 2,
        "Hemija" => 2, // Imaju i Fiziku i Hemiju
    ],
        "8-2" => [
        "Matematika" => 4,
        "Srpski jezik" => 4,
        "Engleski jezik" => 2,
        "Informatika" => 2,
        "Tehničko" => 2,
        "Muzičko" => 2,
        "Fizičko" => 3,
        "Geografija" => 2,
        "Biologija" => 2,
        "Istorija" => 2,
        "Ruski" => 2,
        "Francuski" => 2,
        "Likovno" => 1,
        "Fizika" => 2,
        "Hemija" => 2, // Imaju i Fiziku i Hemiju
    ],
        "8-3" => [
        "Matematika" => 4,
        "Srpski jezik" => 4,
        "Engleski jezik" => 2,
        "Informatika" => 2,
        "Tehničko" => 2,
        "Muzičko" => 2,
        "Fizičko" => 3,
        "Geografija" => 2,
        "Biologija" => 2,
        "Istorija" => 2,
        "Ruski" => 2,
        "Francuski" => 2,
        "Likovno" => 1,
        "Fizika" => 2,
        "Hemija" => 2, // Imaju i Fiziku i Hemiju
    ],
        "8-4" => [
        "Matematika" => 4,
        "Srpski jezik" => 4,
        "Engleski jezik" => 2,
        "Informatika" => 2,
        "Tehničko" => 2,
        "Muzičko" => 2,
        "Fizičko" => 3,
        "Geografija" => 2,
        "Biologija" => 2,
        "Istorija" => 2,
        "Ruski" => 2,
        "Francuski" => 2,
        "Likovno" => 1,
        "Fizika" => 2,
        "Hemija" => 2, // Imaju i Fiziku i Hemiju
    ],
];

// Povezivanje predmeta sa nastavnicima po razredu i odeljenju
$povezivanje_predmeta = [
    "5-1" => [
        
        "Geografija" => "Sanja Arsenijevic 211",
       "Biologija" => "Ivana Stanković 201",
        "Istorija" => "Vesna Kostić 213",
         "Engleski jezik" => "Milica Matić 113",
 "Ruski" => "Nataša Trišić, 110",
 "Francuski" => "Snežana Budimčić 112",
  "Likovno" => "Jelena Munđa 221",
      "Srpski jezik" => "Slavica Brkić Milovanović 111",
       "Matematika" => "Svetlana Janković 203",
        "Tehničko" => "Aleksandar Bogićević TT",
         "Muzičko" => "Jelena Oparušić kabinet za muzičko",
         "Informatika" => "Nevena Čvorović kabinet za informatiku",
         "Fizičko" => "David",
        // Dodaj ostale predmete...
    ],
    "5-2" => [
       "Geografija" => "Sanja Arsenijevic 211",
     "Biologija" => "Ivana Stanković",
        "Istorija" => "Vesna Kostić",
     "Engleski jezik"=> "Olivera Nedeljković",
        "Ruski" => "Nataša Trišić",
       "Francuski" => "Snežana Budimčić",
        "Likovno" => "Jelena Munđa",
            "Srpski jezik" => "Marija Stamenković",
               "Matematika" => "Svetlana Janković",
                "Tehničko" => "Aleksandar Bogićević",
                 "Muzičko" => "Jelena Oparušić",
                 "Informatika" => "Nevena Čvorović",
                  "Fizičko" => "Darko",
    ],
     "5-3" => [
       "Geografija" => "Sanja Arsenijevic",
        "Biologija" => "Sabrina Kurajica",
        "Istorija" => "Vesna Kostić",
    "Engleski jezik" => "Olivera Nedeljković",
   "Ruski" => "Nataša Trišić",
       "Francuski" => "Snežana Budimčić",
        "Likovno" => "Jelena Munđa",
            "Srpski jezik" => "Slavica Brkić Milovanović",
            "Matematika" => "Mina Teoharević",
             "Tehničko" => "Snežana Rosić",
              "Muzičko" => "Jelena Oparušić",
              "Informatika" => "Nevena Čvorović",
               "Fizičko" => "Darko",
    ],
     "5-4" => [
       "Geografija" => "Sanja Arsenijevic",
      "Biologija" => "Sabrina Kurajica",
       "Istorija" => "Vesna Kostić",
    "Engleski jezik"=> "Milica Matić",
    "Ruski" => "Nataša Trišić",
      "Francuski" => "Snežana Budimčić",
       "Likovno" => "Jelena Munđa",
        "Srpski jezik" => "Marija Stamenković",
        "Matematika" => "Mina Teoharević",
          "Tehničko" => "Snežana Rosić",
           "Muzičko" => "Jelena Oparušić",
           "Informatika" => "Nevena Čvorović",
            "Fizičko" => "David",
    ],
    "6-1" => [
       "Geografija" => "Sanja Arsenijevic",
      "Biologija" => "Sabrina Kurajica",
     "Istorija" => "Vesna Kostić",
            "Engleski jezik" => "Milica Matić",
  "Ruski" => "Nataša Trišić",
"Francuski" => "Snežana Budimčić",
"Likovno" => "Nina Manić Jovanović",
 "Srpski jezik" => "Tatjana Hadžić",
    "Matematika" => "Svetlana Janković",
  "Tehničko" => "Snežana Rosić",
   "Fizika" => "Jovana Živanović",
    "Muzičko" => "Jelena Oparušić",
    "Informatika" => "Nevena Čvorović",
     "Fizičko" => "David",
    ],
      "6-2" => [
       "Geografija" => "Sanja Arsenijevic",
      "Biologija" => "Sabrina Kurajica",
      "Istorija" => "Vesna Kostić",
           "Engleski jezik" => "Olivera Nedeljković",
   "Ruski" => "Nataša Trišić",
        "Francuski" => "Snežana Budimčić",
        "Likovno" => "Jelena Munđa",
         "Srpski jezik" => "Marija Stamenković",
            "Matematika" => "Svetlana Janković",
              "Tehničko" => "Snežana Rosić",
               "Fizika" => "Jovana Živanović",
                "Muzičko" => "Jelena Oparušić",
                "Informatika" => "Nevena Čvorović",
                 "Fizičko" => "Darko",
    ],
      "6-3" => [
     "Geografija" => "Sanja Arsenijevic",
       "Biologija" => "Sabrina Kurajica",
     "Istorija" => "Vesna Kostić",
       "Engleski jezik" => "Olivera Nedeljković",
   "Ruski" => "Nataša Trišić",
      "Francuski" => "Snežana Budimčić",
       "Likovno" => "Jelena Munđa",
        "Srpski jezik" => "Marija Stamenković",
           "Matematika" => "Svetlana Janković",
             "Tehničko" => "Žarko Gojković",
              "Fizika" => "Jovana Živanović",
               "Muzičko" => "Jelena Oparušić",
               "Informatika" => "Nevena Čvorović",
                "Fizičko" => "Darko",
    ],
      "6-4" => [
        "Geografija" => "Sanja Arsenijevic",
    "Biologija" => "Sabrina Kurajica",
    "Istorija" => "Vesna Kostić",
            "Engleski jezik" => "Olivera Nedeljković",
        "Ruski" => "Nataša Trišić",
     "Francuski" => "Snežana Budimčić",
     "Likovno" => "Nina Manić Jovanović",
      "Srpski jezik" => "Jovana Repić",
      "Matematika" => "Mina Teoharević",
        "Tehničko" => "Snežana Rosić",
         "Fizika" => "Jovana Živanović",
          "Muzičko" => "Jelena Oparušić",
          "Informatika" => "Nevena Čvorović",
           "Fizičko" => "David",
    ],
        "7-1" => [
          "Geografija" => "Jelena Živković",
   "Biologija" => "Ivana Stanković",
       "Istorija" => "Vesna Kostić",
      "Engleski jezik" => "Olivera Nedeljković",
         "Ruski" => "Nataša Trišić",
        "Francuski" => "Snežana Budimčić",
        "Likovno" => "Nina Manić Jovanović",
         "Srpski jezik" => "Tatjana Hadžić",
         "Matematika" => "Mina Teoharević",
          "Tehničko" => "Aleksandar Bogićević",
            "Hemija" => "Milica Čalija",
             "Fizika" => "Jovana Živanović",
              "Muzičko" => "Jelena Oparušić",
              "Informatika" => "Nevena Čvorović",
               "Fizičko" => "David",
    ],
        "7-2" => [
         "Geografija" => "Jelena Živković",
   "Biologija" => "Ivana Stanković",
        "Istorija" => "Vesna Kostić",
     "Engleski jezik"=> "Olivera Nedeljković",
   "Ruski" => "Nataša Trišić",
    "Francuski" => "Snežana Budimčić",
    "Likovno" => "Nina Manić Jovanović",
     "Srpski jezik" => "Tatjana Hadžić",
     "Matematika" => "Mina Teoharević",
      "Tehničko" => "Aleksandar Bogićević",
       "Hemija" => "Milica Čalija",
        "Fizika" => "Jovana Živanović",
         "Muzičko" => "Jelena Oparušić",
         "Informatika" => "Nevena Čvorović",
         "Fizičko" => "Darko",
    ],
        "7-3" => [
           "Geografija" => "Jelena Živković",
     "Biologija" => "Ivana Stanković",
        "Istorija" => "Vesna Kostić",
           "Engleski jezik" => "Olivera Nedeljković",
      "Ruski" => "Nataša Trišić",
       "Francuski" => "Snežana Budimčić",
       "Likovno" => "Nina Manić Jovanović",
        "Srpski jezik" => "Jovana Repić",
           "Matematika" => "Snežana Bogićević",
            "Tehničko" => "Aleksandar Bogićević",
             "Hemija" => "Milica Čalija",
              "Fizika" => "Jovana Živanović",
               "Muzičko" => "Jelena Oparušić",
               "Informatika" => "Nevena Čvorović",
                "Fizičko" => "David, Darko",
                 
    ],
        "7-4" => [
        "Geografija" => "Jelena Živković",
      "Biologija" => "Ivana Stanković",
       "Istorija" => "Vesna Kostić",
        "Engleski jezik" => "Olivera Nedeljković",
        "Ruski" => "Nataša Trišić",
       "Francuski" => "Snežana Budimčić",
       "Likovno" => "Nina Manić Jovanović",
           "Srpski jezik" => "Slavica Brkić Milovanović",
           "Matematika" => "Mina Teoharević",
            "Tehničko" => "Aleksandar Bogićević",
             "Hemija" => "Milica Čalija",
              "Fizika" => "Jovana Živanović",
               "Muzičko" => "Jelena Oparušić",
               "Informatika" => "Nevena Čvorović",
                "Fizičko" => "Darko",
    ],

        "8-1" => [
        "Geografija" => "Sanja Arsenijevic",
           "Biologija" => "Sabrina Kurajica",
       "Istorija" => "Ivan Drljača",
        "Engleski jezik" => "Milica Matić",
       "Ruski" => "Nataša Trišić",
  "Francuski" => "Snežana Budimčić",
  "Likovno" => "Nina Manić Jovanović",
   "Srpski jezik" => "Jovana Repić",
   "Matematika" => "Snežana Bogićević",
    "Tehničko" => "Aleksandar Bogićević",
     "Hemija" => "Milica Čalija",
      "Fizika" => "Jovana Živanović",
       "Muzičko" => "Jelena Oparušić",
       "Informatika" => "Nevena Čvorović",
        "Fizičko" => "David",
    ],
        "8-2" => [
        "Geografija" => "Sanja Arsenijevic",
           "Biologija" => "Sabrina Kurajica",
           "Istorija" => "Ivan Drljača",
         "Engleski jezik" => "Milica Matić",
       "Ruski" => "Nataša Trišić",
   "Francuski" => "Snežana Budimčić",
   "Likovno" => "Nina Manić Jovanović",
    "Srpski jezik" => "Jovana Repić",
    "Matematika" => "Snežana Bogićević",
     "Tehničko" => "Aleksandar Bogićević",
      "Hemija" => "Milica Čalija",
       "Fizika" => "Jovana Živanović",
        "Muzičko" => "Jelena Oparušić",
        "Informatika" => "Nevena Čvorović",
         "Fizičko" => "Darko",
    ],
        "8-3" => [
        "Geografija" => "Sanja Arsenijevic",
           "Biologija" => "Sabrina Kurajica",
        "Istorija" => "Ivan Drljača",
       "Engleski jezik"=> "Milica Matić",
      "Ruski" => "Nataša Trišić",
        "Francuski" => "Snežana Budimčić",
        "Likovno" => "Nina Manić Jovanović",
         "Srpski jezik" => "Slavica Brkić Milovanović",
         "Matematika" => "Snežana Bogićević",
          "Tehničko" => "Aleksandar Bogićević",
           "Hemija" => "Milica Čalija",
            "Fizika" => "Jovana Živanović",
             "Muzičko" => "Jelena Oparušić",
             "Informatika" => "Nevena Čvorović",
              "Fizičko" => "Darko",
    ],
        "8-4" => [
        "Geografija" => "Sanja Arsenijevic",
       "Biologija" => "Sabrina Kurajica",
             "Istorija" => "Ivan Drljača",
     "Engleski jezik" => "Milica Matić",
        "Ruski" => "Nataša Trišić",
     "Francuski" => "Snežana Budimčić",
     "Likovno" => "Nina Manić Jovanović",
      "Srpski jezik" => "Tatjana Hadžić",
      "Matematika" => "Snežana Bogićević",
      "Tehničko" => "Aleksandar Bogićević",
       "Hemija" => "Milica Čalija",
        "Fizika" => "Jovana Živanović",
         "Muzičko" => "Jelena Oparušić",
          "Informatika" => "Nevena Čvorović",
           "Fizičko" => "David",
    ],
    // Dodaj druge razrede i odeljenja...
];
function inicijalizuj_raspored() {
    $dani = ["Ponedeljak", "Utorak", "Sreda", "Cetvrtak", "Petak"];
    $raspored = [];
    foreach ($dani as $dan) {
        $raspored[$dan] = array_fill(0, 7, null); // 8 časova dnevno
    }
    return $raspored;
}

function generisi_rotaciju($predmeti) {
    $rotacija = $predmeti;
    shuffle($rotacija);
    return $rotacija;
}

function dodaj_blok_casova(&$raspored, $predmet, $nastavnik, $broj_casova) {
    $dani = ["Ponedeljak", "Utorak", "Sreda", "Cetvrtak", "Petak"];
    
    foreach ($dani as $dan) {
        // Pronađi slobodne sate
        $slobodni_sati = array_keys(array_filter($raspored[$dan], function($cas) { return $cas === null; }));
        
        // Traži blok slobodnih časova
        for ($i = 0; $i <= count($slobodni_sati) - $broj_casova; $i++) {
            $blok = array_slice($slobodni_sati, $i, $broj_casova);
            
            // Proveri da li su svi sati u bloku slobodni
            if (count($blok) === $broj_casova) {
                $sati_dodati = 0;
                
                // Dodaj blok časova
                foreach ($blok as $sat) {
                    if ($sati_dodati < $broj_casova) {
                        $raspored[$dan][$sat] = [$predmet, $nastavnik];
                        $sati_dodati++;
                    } else {
                        break;
                    }
                }
                
                // Ako je uspešno dodano, izađi iz funkcije
                if ($sati_dodati === $broj_casova) {
                    return true;
                }
            }
        }
    }
    
    // Ako nije uspelo dodavanje, vrati false
    return false;
}

function postavi_predmete(&$raspored, $predmeti, $povezivanje_predmeta, $broj_casova_po_predmetu) {
    $dani = ["Ponedeljak", "Utorak", "Sreda", "Cetvrtak", "Petak"];
    $casovi_po_predmetu = array_fill_keys($predmeti, 0);

    
    // Dodaj blok časova za specifične predmete
    $blok_predmeti = [
        "Tehničko" => 2,
        "Likovno" => 2
    ];
    foreach ($blok_predmeti as $predmet => $broj_casova) {
        if (isset($povezivanje_predmeta[$predmet])) {
            dodaj_blok_casova($raspored, $predmet, $povezivanje_predmeta[$predmet], $broj_casova);
        }
    }

    

    foreach ($dani as $dan) {
        $rotacija = generisi_rotaciju($predmeti);
        $satovi = array_keys($raspored[$dan]);

        foreach ($satovi as $index => $sat) {
            if (isset($rotacija[$index])) {
                $predmet = $rotacija[$index];

                

                // Proveri da li predmet ne prelazi maksimalni broj časova
                if ($casovi_po_predmetu[$predmet] < ($broj_casova_po_predmetu[$predmet] ?? PHP_INT_MAX)) {
                    $nastavnik = $povezivanje_predmeta[$predmet] ?? 'Nepoznat';
                    $raspored[$dan][$sat] = [$predmet, $nastavnik];
                    $casovi_po_predmetu[$predmet]++;
                }
            }
        }
    }
}

function generisi_raspored_za_odeljenje($predmeti, $povezivanje_predmeta, $broj_casova_po_predmetu) {
    $raspored = inicijalizuj_raspored();
    postavi_predmete($raspored, $predmeti, $povezivanje_predmeta, $broj_casova_po_predmetu);
    return $raspored;
}

function generisi_raspored_za_sve_razrede($razredi, $predmeti, $povezivanje_predmeta, $broj_casova_po_predmetu) {
    $rasporedi = [];
    foreach ($razredi as $razred) {
        $rasporedi[$razred] = generisi_raspored_za_odeljenje($predmeti, $povezivanje_predmeta[$razred] ?? [], $broj_casova_po_predmetu[$razred] ?? []);
    }
    return $rasporedi;
}

function prikazi_raspored_tabela($raspored) {
    $dani = ["Ponedeljak", "Utorak", "Sreda", "Cetvrtak", "Petak"];
    $broj_casova = 8; // Broj časova u nedelji

    echo "<table border='1' cellpadding='5' cellspacing='0' style='border-collapse: collapse;'>";
    
    // Zaglavlje tabele sa časovima
    echo "<tr><th>Čas</th>";
    foreach ($dani as $dan) {
        echo "<th>$dan</th>";
    }
    echo "</tr>";

    // Prikazivanje časova za svaki red
    for ($i = 1; $i <= $broj_casova; $i++) {
        echo "<tr><td>Čas $i</td>";
        foreach ($dani as $dan) {
            // Ako postoji podatak za taj čas u danu, prikaži ga, inače prikaži "Slobodno"
            $cas = $raspored[$dan][$i] ?? null;
            if ($cas === null) {
                echo "<td>Slobodno</td>";
            } else {
                list($predmet, $nastavnik) = $cas;
                echo "<td>$predmet<br>($nastavnik)</td>";
            }
        }
        echo "</tr>";
    }
    
    echo "</table>";
}

    // Prikazivanje rasporeda po danima
    foreach ($dani as $dan) {
        echo "<tr>";
        echo "<td>$dan</td>";
        // Prikazivanje časova za svaki dan
        for ($i = 1; $i <= $broj_casova; $i++) {
            if (isset($raspored[$dan][$i])) {
                $cas = $raspored[$dan][$i];
                if ($cas === null) {
                    echo "<td>Slobodno</td>";
                } else {
                    list($predmet, $nastavnik) = $cas;
                    echo "<td>$predmet<br>($nastavnik)</td>";
                }
            } else {
                echo "<td>Slobodno</td>"; // Ako nema podatka za taj čas
            }
        }
        echo "</tr>";
    }
    
    echo "</table>";

// Definišite predmete, povezivanje nastavnika, razrede i broj časova po predmetu
$predmeti = ["Geografija", "Biologija", "Istorija", "Engleski jezik", "Ruski", "Francuski", "Likovno", "Srpski jezik", "Matematika", "Tehničko", "Muzičko", "Informatika", "Fizičko"];
$povezivanje_predmeta = [
    "5-1" => [
        "Geografija" => "Sanja Arsenijević 211",
        "Biologija" => "Ivana Stanković 201",
        "Istorija" => "Vesna Kostić 213",
        "Engleski jezik" => "Milica Matić 113",
        "Ruski" => "Nataša Trišić 110",
        "Francuski" => "Snežana Budimčić 112",
        "Likovno" => "Jelena Munđa 221",
        "Srpski jezik" => "Slavica Brkić Milovanović 111",
        "Matematika" => "Svetlana Janković 203",
        "Tehničko" => "Aleksandar Bogićević TT",
        "Muzičko" => "Jelena Oparušić kabinet za muzičko",
        "Informatika" => "Nevena Čvorović kabinet za informatiku",
        "Fizičko" => "David",
    ],
];

$broj_casova_po_predmetu = [
    "5-1" => [
        "Geografija" => 2,
        "Biologija" => 2,
        "Istorija" => 2,
        "Engleski jezik" => 2,
        "Ruski" => 2,
        "Francuski" => 2,
        "Likovno" => 2,
        "Srpski jezik" => 5,
        "Matematika" => 4,
        "Tehničko" => 2,
        "Muzičko" => 2,
        "Informatika" => 2,
        "Fizičko" => 3,
    ],
];
$raspored = [
    "Ponedeljak" => [],
    "Utorak" => [],
    "Sreda" => [],
    "Cetvrtak" => [],
    "Petak" => []
];

$razredi = ["5-1"];
// Postavljanje predmeta i prikaz rasporeda

$svi_rasporedi = generisi_raspored_za_sve_razrede($razredi, $predmeti, $povezivanje_predmeta, $broj_casova_po_predmetu);

foreach ($svi_rasporedi as $razred => $raspored) {
    echo "<h2>Raspored za $razred</h2>";
    prikazi_raspored_tabela($raspored);
    echo "<hr>";
}