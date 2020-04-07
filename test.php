<!DOCTYPE html>
<html lang="">

<head>
	<meta charset="utf-8">
	<title>Page de test</title>
	<meta name="author" content="Leo">
	<meta name="description" content="Example description">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css" />
	<link rel="icon" type="image/x-icon" href="./element/Logo_splpp.png"/>
</head>

<body>
	<header> 
        <?php echo include("./element/header.php"); ?>
    </header>
	<main>
        <div class = "etat_des_perms">
            <div class = "msg_avertissement">
                Attention, pas de GCK de 18h00 à 00h00
            </div>
            <div class = "msg_avertissement">
                Attention, pas de GCK de 15h00 à 00h00
            </div>
            <div class = "msg_avertissement">
                Attention, pas de GCK de 12h00 à 00h00
            </div>
        </div>
        <div class = "navigation">
        Séléction du jour "placeholder"
        </div>
        <div class = "planing">
            <table>
                <thead>
                    <tr>
                        <th colspan="3">La Kfet le 06/04</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="ligne_entete">
                        <td></td>
                        <td> Début </td>
                        <td> Fin </td>
                    </tr>
                    <tr class = "ligne_GC">
                        <td> Léo </td>
                        <td> 12h00 </td>
                        <td> 14h00 </td>
                    </tr>
                    <tr class = "ligne_perm">
                        <td> Bicide </td>
                        <td> 18h00 </td>
                        <td> 00h00 </td>
                    </tr>
                    <tr class = "ligne_bouff">
                        <td> Mika </td>
                        <td> 11h00 </td>
                        <td> 13h00 </td>
                    </tr>
                    <tr class = "ligne_fermee">
                        <td> TriPot </td>
                        <td> 15h00 </td>
                        <td> 00h00 </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
	<footer>
    
    </footer>
</body>

</html>