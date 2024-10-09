<?php use Illuminate\Support\Facades\Auth; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeremias</title>
</head>
<body>
    <?php  echo 'oi Jeremias' ?>
    <!-- <?php 
        echo Auth::user() ? 'você está logado' : 'você não está logado';
    ?> -->
    

    <!-- <?php foreach(range(1,20) as $key): ?>
        <p> <?php echo $key ?> </p>
    <?php endforeach; ?>

    @foreach (range(1,20) as $key)
        <p> {{ $key }} </p>
    @endforeach -->

</body>
</html>