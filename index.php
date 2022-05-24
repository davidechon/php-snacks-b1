<!-- ## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60
## Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
## Snack 3
Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z
## Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
## Snack 5
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
## Snack 6
Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.
## Snack 7
Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<!-- ## Snack 1 -->
<?php
  $partiteGiocate = [
    [
      'squadraHome' => 'Olimpia Milano',
      'puntiPartitaHome' => '55',
      'squadraGuest' => 'Cantù',
      'puntiPartitaGuest' => '60',
    ],
    [
      'squadraHome' => 'Squadra Due',
      'puntiPartitaHome' => '45',
      'squadraGuest' => 'Ospite Due',
      'puntiPartitaGuest' => '82',
    ],
    [
      'squadraHome' => 'Squadra Tre',
      'puntiPartitaHome' => '70',
      'squadraGuest' => 'Ospite Tre',
      'puntiPartitaGuest' => '20',
    ],
    [
      'squadraHome' => 'Squadra Quattro',
      'puntiPartitaHome' => '35',
      'squadraGuest' => 'Ospite Quattro',
      'puntiPartitaGuest' => '85',
    ],
    [
      'squadraHome' => 'Squadra Cinque',
      'puntiPartitaHome' => '45',
      'squadraGuest' => 'Ospite Cinque',
      'puntiPartitaGuest' => '40',
    ],
    [
      'squadraHome' => 'Squadra Sei',
      'puntiPartitaHome' => '85',
      'squadraGuest' => 'Ospite Sei',
      'puntiPartitaGuest' => '80',
    ],
    [
      'squadraHome' => 'Squadra Sette',
      'puntiPartitaHome' => '70',
      'squadraGuest' => 'Ospite Sette',
      'puntiPartitaGuest' => '65',
    ],
    [
      'squadraHome' => 'Squadra Otto',
      'puntiPartitaHome' => '60',
      'squadraGuest' => 'Ospite Otto',
      'puntiPartitaGuest' => '66',
    ],
    
  ];
  // var_dump ($partiteGiocate);
  // echo $partiteGiocate[1]['squadraHome'];

  // for( $i= 0; $i < count($partiteGiocate); $i++){ 
  // echo "{$partiteGiocate[$i]['squadraHome']} - {$partiteGiocate[$i]['squadraGuest']} | {$partiteGiocate[$i]['puntiPartitaHome']} - {$partiteGiocate[$i]['puntiPartitaGuest']}"; 
  // }
?>
<!-- /## Snack 1 -->

<!-- ## Snack 2 -->
<?php
  if(empty($_GET['name'])){
    $alert = 'non hai inserito un nome';
    $class = 'alert-danger';
  }else{
    $name = $_GET['name'];
    if(strlen($name) > 4){
      $alert = 'il tuo nome è valido';
      $class = 'alert-success';
    }
    echo $name;
  }

  // $email = $_GET['email'];
  // var_dump($email);
  if(empty($_GET['email'])){
    $alert = 'non hai inserito la mail';
    $class = 'alert-danger';

  }elseif(strpos($email,'@') !== false && strpos($email,'.')  !== false ){
    $alert = 'la tua mail è valida';
    $class = 'alert-success';
  }else{
    $alert = 'la tua mail non è valida';
    $class = 'alert-danger';
  }

?>
<!-- /## Snack 2 -->

<?php
  $posts = [
      '10/01/2019' => [
          [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
          ],
          [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
          ],
      ],
      '10/02/2019' => [
          [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
          ]
      ],
      '15/05/2019' => [
          [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
          ],
          [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
          ],
          [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
          ]
      ],
  ];

  $myKeys = array_keys($posts);
  // var_dump($myKeys);
  // for($i = 0; $i <= count($posts); $i++){
  //   var_dump($posts[$myKeys[$i]]);
  // }
  ?>
<!-- /## Snack 3 -->

<!-- ## Snack 4 -->
<?php
  $numbers = [];
  for($i = 0; $i < 15; $i++){
      $numero = rand(1, 40);
      if(!in_array($numero, $numbers)){
          array_push($numbers, $numero);
      };
  };
  $results = print_r($numbers, true);
?>
<!-- /## Snack 4 -->

<!-- Snack5 -->
<?php
  $txt = 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Libero labore itaque corrupti rerum quod, similique repellat aliquam sint nostrum, consectetur maxime quidem vitae impedit quisquam in fugit quis dolore consequatur quia ipsam a quibusdam? Delectus numquam repellat hic nostrum iure eius omnis magni, a vero blanditiis, ad quibusdam nesciunt? Sapiente voluptate, mollitia voluptas voluptatum expedita eius eaque repellendus in tempora aspernatur minus nemo perspiciatis reiciendis voluptatem sequi odit accusantium optio cum aperiam quod? Officiis sint quasi sunt atque quisquam nisi quaerat hic animi! Mollitia ad, amet exercitationem omnis tempora porro maxime explicabo. Cum dignissimos ipsum reprehenderit culpa quis et quia.'; 
  $txtExp = explode('.', $txt);
  // var_dump($txtExp);
?>
<!-- /## Snack 5 -->

<!-- ## Snack 6 -->
<?php
    $db = [
        'teachers' => [
          [
            'name' => 'Michele',
            'lastname' => 'Papagni'
          ],
          [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
          ]
        ],
        'pm' => [
          [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
          ],
          [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
          ]
        ]
    ];

?> <!-- /## Snack 6 -->

 <!-- ## Snack 7 -->
<?php
  $alunni = [
    [
      'nome' => 'Dennis',
      'cognome' => 'Gambini',
      'voti' => [2,7,9,6]
    ],
    [
      'nome' => 'Francesco',
      'cognome' => 'Ciannavei',
      'voti' => [5,7,10,1]
    ],
    [
      'nome' => 'Davide',
      'cognome' => 'Chon',
      'voti' => [3,4,8,9]
    ],
    [
      'nome' => 'Federico',
      'cognome' => 'Magli',
      'voti' => [1,9,8,6]
    ]
  ];
  function calcolaMedia($array) {
    $somma = 0;
    for($i = 0; $i < count($array); $i++){
        $somma = $somma + $array[$i];
    }
    $media = $somma / count($array);
    return $media;
  }
?> <!-- /## Snack 7 -->





<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  <!-- Style -->
  <link rel="stylesheet" href="css/style.css">
  <title>Php Snacks B1</title>
</head>
<body>

 <!-- ## Snack 1 -->
    <section id="snack1">
      <h1> Snack 1</h1>
      <h2> Partite Giocate </h2>
      <ul>
        <?php 
        for( $i= 0; $i < count($partiteGiocate); $i++){ ?>
        <li>
        <?php echo "{$partiteGiocate[$i]['squadraHome']} - {$partiteGiocate[$i]['squadraGuest']} | {$partiteGiocate[$i]['puntiPartitaHome']} - {$partiteGiocate[$i]['puntiPartitaGuest']} <br>"; ?>
        </li>
        <?php 
        }
        ?>
      </ul> 
    </section> <!-- /## Snack 1 -->

 <!-- ## Snack 2 -->
    <section id="snack2">
      <h1> Snack 2 </h1>
      <h2> GET </h2>
      <p> <?php echo $name ?> </p>
      <p class="<?php echo $class ?>"> <?php echo $alert ?> </p>
    </section> <!-- /## Snack 2 -->
      

<!-- ## Snack 3 -->
    <section id="snack3">
        <h1> Snack 3 </h1>
        <p><?php foreach($posts as $keyOne => $valueOne){ ?>
          <ul>
          <?php echo $keyOne.' - '?>
            <li>
                <?php foreach($valueOne as $valueTwo => $x){
                echo $x["title"].' : '.$x["author"].' - '.$x["text"].'</br>';
            }?>
            </li>
        </ul>
          <?php } ?>
        </p>
    </section> <!-- /## Snack 3 -->

<!-- ## Snack 4 -->
    <section id="snack4">
        <h1> Snack 4 </h1>
        <pre> <?php echo $results ?> </pre>
    </section> <!-- /## Snack 4 -->

 <!-- ## Snack 5 -->
    <section id="snack5">
        <h1> Snack 5 </h1>
        <ul>
          <?php for($i = 0; $i < count($txtExp); $i++){ ?>
            <li>
              <?php echo $txtExp[$i]; ?>
            </li>
          <?php } ?>
        </ul>
       

    </section> <!-- /## Snack 5 -->

 <!-- /## Snack 6 -->
    <section id="snack6"> 
      <h1> Snack 6 </h1>
      <ul class="green">
        <?php for($i = 0; $i < count($db["teachers"]); $i++){ ?>
            <li>
            <?php echo $db["teachers"][$i]["name"].' '.$db["teachers"][$i]["lastname"];?>
            </li>
            <?php };?>
        </ul>
        <ul class="grey">
        <?php for($i = 0; $i < count($db["pm"]); $i++){ ?>
            <li>
            <?php echo $db["pm"][$i]["name"].' '.$db["pm"][$i]["lastname"];?>
            </li>
            <?php };?>
        </ul>

    </section> <!-- /## Snack 6 -->

<!-- ## Snack7 -->
    <section id="snack7">
        <h1> Snack 7 </h1>
        <ul>
            <?php for($k = 0; $k < count($alunni); $k++){ ?>
                <li>
                    <?php 
                    $a = calcolaMedia($alunni[$k]['voti']);
                    echo $alunni[$k]['nome'].' '.$alunni[$k]['cognome'].' media voti: '.$a; 
                    ?>
                </li>
            <?php } ?>
        </ul>
    </section> <!-- /## Snack 7 -->
    
</body>
</html>