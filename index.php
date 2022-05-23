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

<?php
// ## Snack 1

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
echo $partiteGiocate[1]['squadraHome'];

for( $i= 0; $i < count($partiteGiocate); $i++){ 

echo "{$partiteGiocate[$i]['squadraHome']} - {$partiteGiocate[$i]['squadraGuest']} | {$partiteGiocate[$i]['puntiPartitaHome']} - {$partiteGiocate[$i]['puntiPartitaGuest']}"; 

}

// 

?>

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
  <main>
     <!-- ## Snack 1 -->
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
     
   
      <!-- /## Snack 1 -->
  </main>


</body>
</html>