<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des données</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "gestion_donnees";

        // Connexion
        $sql = mysqli_connect($servername, $username, $password, $database);

        // Vérifier la connexion
        if (!$sql) {
            die("Connection failed: " . mysqli_connect_error());
        } else {
                echo "Connection successful";
    }
        
    ?>

</head>
<body>
    <div class="bg-gray-100 py-10">
        <div class="px-4 sm:px-6 lg:px-8">
            <div class="sm:flex sm:items-center">
                <div class="sm:flex-auto">
                    <h1 class="mb-4 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl">
                        <span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">Membres du </span> personnel
                    </h1>
                    <p class="text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400">Une liste de tous les membres du personnel de votre compte, y compris leur id, nom, prenom, e-mail, telephone, rôle, équipeID et statut.</p>
                </div>
                <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
                    <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">Ajouter</button>
                </div>
            </div>

            <br><br>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <!-- <th scope="col" class="p-4">
                                <div class="flex items-center">
                                    <input id="" type="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="" class="sr-only"></label>
                                </div>
                            </th> -->
                            <th scope="col" class="px-6 py-3">
                                ID Membre
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nom 
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Prénom 
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Email 
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Téléphone
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Rôle
                            </th>
                            <th scope="col" class="px-6 py-3">
                                ID Équipe
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Statut
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Modification
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Suppression
                            </th>
                        </tr>
                    </thead>
                    <?php
                        $table = "SELECT * FROM `membresdupersonnel`";
                        $result = mysqli_query($sql, $table);
                        while ($row=mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo '<td class="px-6 py-4">' . $row['MembreID'] . '</td>';
                            echo '<td class="px-6 py-4">' . $row['Nom'] . '</td>';
                            echo '<td class="px-6 py-4">' . $row['Prenom'] . '</td>';
                            echo '<td class="px-6 py-4">' . $row['Email'] . '</td>';
                            echo '<td class="px-6 py-4">' . $row['Telephone'] . '</td>';
                            echo '<td class="px-6 py-4">' . $row['Role'] . '</td>';
                            echo '<td class="px-6 py-4">' . $row['EquipeID'] . '</td>';
                            echo '<td class="px-6 py-4">' . $row['Statut'] . '</td>';
                            echo '<td class="px-6 py-4"><a href="#" class="text-blue-500 hover:underline hover:font-bold">Modifier</a></td>';
                            // echo '<td class="px-6 py-4"><a href="#" class="text-red-500 hover:underline hover:font-bold">Supprimer</a></td>';
                            echo '<td class="px-6 py-4"><a href="supprimermembre.php?supprimerID=' . $row['MembreID'] . '" class="text-red-500 hover:underline hover:font-bold">Supprimer</a></td>';
                            echo "</tr>";
                        }
                    ?>
                </table>
            </div>
        </div>
    </div>

    <div class="bg-gray-100 py-10">
        <div class="px-4 sm:px-6 lg:px-8">
            <div class="sm:flex sm:items-center">
                <div class="sm:flex-auto">
                    <h1 class="mb-4 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl">
                        <span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">Équipe </span> 
                    </h1>
                    <p class="text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400">Une liste de tous les équipes de votre compte, y compris leur id, nom, date de création.</p>
                </div>
                <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
                    <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">Ajouter</button>
                </div>
            </div>

            <br><br>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <!-- <th scope="col" class="p-4">
                                        <div class="flex items-center">
                                            <input id="" type="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="" class="sr-only"></label>
                                        </div>
                                    </th> -->
                                    <th scope="col" class="px-6 py-3">
                                        ID Équipe
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Nom Équipe 
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Date de Création  
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Modification
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Suppression
                                    </th>
                                </tr>
                            </thead>
                            <?php
                                $table = "SELECT * FROM `equipes`";
                                $result = mysqli_query($sql, $table);
                                while ($row=mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo '<td class="px-6 py-4">' . $row['equipeID'] . '</td>';
                                    echo '<td class="px-6 py-4">' . $row['nomEquipe'] . '</td>';
                                    echo '<td class="px-6 py-4">' . $row['dateCreation'] . '</td>';
                                    echo '<td class="px-6 py-4"><a href="#" class="text-blue-500 hover:underline hover:font-bold">Modifier</a></td>';
                                    // echo '<td class="px-6 py-4"><a href="#" class="text-red-500 hover:underline hover:font-bold">Supprimer</a></td>';
                                    echo '<td class="px-6 py-4"><a href="supprimerequipe.php?supprimerID=' . $row['equipeID'] . '" class="text-red-500 hover:underline hover:font-bold">Supprimer</a></td>';
                                    echo "</tr>";
                                }
                            ?>
                        </table>
            </div>
        </div>
    </div>

    <div class="bg-gray-100 py-10">
        <div class="px-4 sm:px-6 lg:px-8">
            <div class="sm:flex sm:items-center">
                <div class="sm:flex-auto">
                    <h1 class="mb-4 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl">
                        <span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">Équipe </span> 
                    </h1>
                    <p class="text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400">Une liste de tous les équipes de votre compte, y compris leur id, nom, date de création.</p>
                </div>
                <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
                    <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">Ajouter</button>
                </div>
            </div>

            <br><br>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <!-- <th scope="col" class="p-4">
                                        <div class="flex items-center">
                                            <input id="" type="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="" class="sr-only"></label>
                                        </div>
                                    </th> -->
                                    <th scope="col" class="px-6 py-3">
                                        Membre ID
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Nom
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Prenom
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Email
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Telephone
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Role
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Equipe
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Statut
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Nom Equipe
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Date de Creation
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <?php
                                $table = "SELECT membresdupersonnel.MembreID, membresdupersonnel.Nom, membresdupersonnel.Prenom, membresdupersonnel.Email, membresdupersonnel.Telephone, membresdupersonnel.Role, membresdupersonnel.EquipeID, membresdupersonnel.Statut, equipes.nomEquipe, equipes.dateCreation 
                                            FROM `membresdupersonnel`
                                            INNER JOIN equipes ON membresdupersonnel.EquipeID = equipes.equipeID";
                                $result = mysqli_query($sql, $table);
                                while ($row=mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo '<td class="px-6 py-4">' . $row['MembreID'] . '</td>';
                                    echo '<td class="px-6 py-4">' . $row['Nom'] . '</td>';
                                    echo '<td class="px-6 py-4">' . $row['Prenom'] . '</td>';
                                    echo '<td class="px-6 py-4">' . $row['Email'] . '</td>';
                                    echo '<td class="px-6 py-4">' . $row['Telephone'] . '</td>';
                                    echo '<td class="px-6 py-4">' . $row['Role'] . '</td>';
                                    echo '<td class="px-6 py-4">' . $row['EquipeID'] . '</td>';
                                    echo '<td class="px-6 py-4">' . $row['Statut'] . '</td>';
                                    echo '<td class="px-6 py-4">' . $row['nomEquipe'] . '</td>';
                                    echo '<td class="px-6 py-4">' . $row['dateCreation'] . '</td>';
                                    echo '<td class="px-6 py-4"><a href="#" class="text-blue-500 hover:underline hover:font-bold">Modifier</a></td>';
                                    echo '<td class="px-6 py-4"><a href="#" class="text-red-500 hover:underline hover:font-bold">Supprimer</a></td>';

                                    // echo '<td class="px-6 py-4"><a href="supprimerequipe.php?supprimerID=' . $row['equipeID'] . '" class="text-red-500 hover:underline hover:font-bold">Supprimer</a></td>';
                                    echo "</tr>";
                                }
                            ?>
                        </table>
            </div>
        </div>
    </div>

</body>
</html>

<?php
// Fermer la connexion
    mysqli_close($sql);
?>