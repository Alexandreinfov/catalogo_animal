<!DOCTYPE html>
<html>
    <head>
        <title>Formulário</title>
        <meta charset="utf-8">
        <style type="text/css">
            .msgerro{
                color: red;
                font-size:smaller;
            }
        </style>
    </head>
    <body>
        <?php 


        if (empty($_GET)){
            
        echo '
        <form action="form_animal.php" method="GET" ">
            <fieldset>
                <legend> <h1>Cadastrar Animal</h1></legend>
            <p>
                <label>Tipo:</label>
                    <input type="radio" name="animal" value="ave"/>Ave
                    <input type="radio" name="animal" value="anfibio"/>Anfíbio
                    <input type="radio" name="animal" value="mamifero"/>Mamífero</td>
                    <input type="radio" name="animal" value="peixe"/>Peixe</td>
                    <input type="radio" name="animal" value="reptil"/>Réptil</td>
            </p>
            <input type="submit" value="Proximo"/>
        </form>
        </fieldset> ';
        }else{

            $animal = $_GET["animal"];

            echo '
            <fieldset>
            <legend>Cadastrar animal: '.$animal.'</legend>
            <form method="POST" action="exibe_animal.php">
                <input type="text" name="peso" placeholder="Peso.." />
                <input type="text" name="comprimento" placeholder="comprimento .." /><br />
                <input type="text" name="altura" placeholder="Altura .." />
                <input type="text" name="cor" placeholder="Cor Predominante.." /><br />
                <input type="text" name="nome" placeholder="Nome Espécie .." /><br />
                <input type="hidden" name="tipo" value="'.$animal.'" />';
         
            switch ($animal) {
                case 'ave':

            
                  echo ' <input type="text" name="altura_voo" placeholder="Altura Máxima de vôo .." /><br />';

                    break;

                 case 'anfibio':

                    echo ' <input type="text" name="submerso" placeholder="Tempo máximo submerso em água .." /><br />';
                  
                    break;

                 case 'mamifero':

                    echo ' <input type="text" name="velocidade_max" placeholder="Velocidade Máxima .." /><br />';
                  
                    break;

                 case 'peixe':

                    echo ' <input type="text" name="temperatura" placeholder="Temperatura média em que sobrevive .." /><br />';
                  
                    break;

                 case 'reptil':

                    echo ' <input type="text" name="submerso" placeholder="Velocidade Máxima .." /><br />';
                  
                    break;

            }
            echo '
                <input type="submit" value="Enviar"/>
            </form> 
            </fieldset>
           ';

       
        }

        ?>
    </body>
</html>
