<?php include '../../modele/inscription/register.php' ; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/@themesberg/flowbite@1.3.0/dist/flowbite.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>INSCRIPTION</title>
</head>
<body>
 
    <!-- IMAGE -->
    <div class="relative bg-white overflow-hidden">
            <div class="flex items-center justify-between w-full md:w-auto">
                <img class="h-30 w-auto sm:h-40" src="../../modele/inscription/ecole.jpg">
            </div>
        <div class=" lg:pb-48">
            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 ">
               <div class="sm:max-w-lg">
                    <div class="sm:max-w-lg">
                        <h1 class="text-4xl font font-extrabold tracking-tight text-gray-900 sm:text-4xl">WELCOME TO BDE</h1>
                        <h3 class="text-gray-400">INSCRIVEZ VOUS POUR VOTER LE BUREAU DES ETUDIANTS DE CETTE ANNEE!!!</h3>
                    </div>
                       <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
                            <div class="flex">
                                
                                    <?php

                                        if (isset($_GET['error']))
                                        {?>             
                                            <div >
                                                <?php echo $_GET['error']; ?>
                                            </div>
                                        <?php } 

                                    ?> 
                                <div>
                            </div>
                        </div>
                     <!--FORMULAIRE -->
                    <div class="mt-5 md:mt-0 md:col-span-2">
                        <form action="../../modele/inscription/register.php" method="POST">
                            <div class="shadow overflow-hidden sm:rounded-md">
                               <div class="px-4 py-5 bg-white sm:p-6">
                                    <div class="grid grid-cols-6 gap-6">
                                        <!--NOMS ETUDIANTS -->
                                       <div class="col-span-6 sm:col-span-3">
                                            <label for="first-name" class="block text-sm font-medium text-gray-700">NOMS</label>
                                            <input type="text"name="nom" id="nom" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        </div>
                                        <!--PRENOMS ETUDIANTS -->
                                       <div class="col-span-6 sm:col-span-3">
                                            <label for="last-name" class="block text-sm font-medium text-gray-700">PRENOMS</label>
                                            <input type="text" name="prenom" id="prenom" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                       </div>
                                        <!--NIVEAU ETUDIANTS -->
                                       <div class="col-span-6 sm:col-span-3">
                                            <label for="country" class="block text-sm font-medium text-gray-700">NIVEAU</label>
                                            <select name="niveau" id="niveau autocomplete="country-name" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                <option>SELECTIONNER NIVEAU</option>
                                                <option>LICENCE1</option>
                                                <option>LICENCE2</option>
                                                <option>LICENCE3</option>
                                            </select>
                                       </div>
                                        <!--FILIERE ETUDIANTS -->
                                       <div class="col-span-6 sm:col-span-3">
                                            <label for="country" class="block text-sm font-medium text-gray-700">FILIERE</label>
                                            <select name="filiere" id="filiere" autocomplete="country-name" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                            <option> SELECTIONNER FIIERE</option>
                                                <option>IRT</option>
                                                <option>IRT-SRS</option>
                                                <option>IRT-AL</option>
                                                <option>GESTION</option>
                                            </select>
                                        </div>
                                        <!--GROUPE ETUDIANTS -->
                                      <div class="col-span-6 sm:col-span-3">
                                            <label for="country" class="block text-sm font-medium text-gray-700">GROUPE</label>
                                            <select name="groupe" id="groupe" autocomplete="country-name" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                <option> SELECTIONNER GROUPE</option> 
                                                <option>GROUPE1</option>
                                                <option>GROUPE2</option>
                                                <option>GROUPE3</option>
                                            </select>
                                       </div>
                                        <!--EMAIL ETUDIANTS -->
                                        <div class="col-span-6 sm:col-span-4">
                                            <label for="email-address" class="block text-sm font-medium text-gray-700">ADRESSE EMAIL</label>
                                            <input type="text"  name="email" id="email" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        </div>
                                        <!--PASSWORD ETUDIANTS -->
                                        <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                            <label for="city" class="block text-sm font-medium text-gray-700">PASSE</label>
                                            <input type="password" name="pwd" id="pwd" autocomplete="address-level2" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        </div>
                                        <!--PASSWORD CONFIRM ETUDIANTS -->
                                        <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                            <label for="postal-code" class="block text-sm font-medium text-gray-700">CONRFIME</label>
                                            <input type="password" name="pwdconfirm" id="pwdconfirm" autocomplete="postal-code" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        </div>
                                    </div>
                               </div>
                                    <!--REGISTER -->
                                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                   <button type="submit" id="submit"  name="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">INSCRIPTION</button>
                                </div>
                            </div>
                        </form>
                    </div>
               </div>
           </div>
        </div>
        <div>
           <div class="mt-10">
                <!-- Decorative image grid -->
                <div aria-hidden="true" class="pointer-events-none lg:absolute lg:inset-y-0 lg:max-w-7xl lg:mx-auto lg:w-full">
                    <div class="absolute transform  sm:top-0 sm:translate-x-8 lg:left-1/2 lg:top-1/2 lg:-translate-y-1/2 lg:translate-x-8">
                        <div class="flex items-center space-x-6 lg:space-x-8">
                            <!--RANGE1 IMAGES -->
                            <div class="flex-shrink-0 grid grid-cols-1 gap-y-6 lg:gap-y-8">
                                <div class="w-44 h-44 rounded-lg overflow-hidden sm:opacity-0 lg:opacity-100">
                                    <img src="../../modele/inscription/belo.jpg" alt="" class="w-full h-full object-center object-cover">
                                </div>
                                <div class="w-44 h-44 rounded-lg overflow-hidden">
                                    <img src="../../modele/inscription/bg.jpg" alt="" class="w-full h-full object-center object-cover">
                                </div>
                                <div class="w-44 h-44 rounded-lg overflow-hidden">
                                    <img src="../../modele/inscription/bell.jpg" alt="" class="w-full h-full object-center object-cover">
                                </div>
                                
                                <div class="w-44 h-64 rounded-lg overflow-hidden">
                                    <img src="../../modele/inscription/bg.jpg" alt="" class="w-full h-full object-center object-cover">
                                </div>
                            </div>
                            <!--RANGE2 IMAGES -->
                            <div class="flex-shrink-0 grid grid-cols-1 gap-y-6 lg:gap-y-8">
                                <div class="w-44 h-64 rounded-lg overflow-hidden">
                                    <img src="../../modele/inscription/bell.jpg" alt="" class="w-full h-full object-center object-cover">
                                </div>
                                <div class="w-44 h-44  rounded-lg overflow-hidden">
                                    <img src="../../modele/inscription/belo.jpg" alt="" class="w-full h-full object-center object-cover">
                                </div>     
                                <div class="w-44 h-44 rounded-lg overflow-hidden">
                                    <img src="../../modele/inscription/bg.jpg" alt="" class="w-full h-full object-center object-cover">
                                </div>
                                <div class="w-44 h-44 rounded-lg overflow-hidden">
                                    <img src="../../modele/inscription/belo.jpg" alt="" class="w-full h-full object-center object-cover">
                                </div>
                            </div>
                            <!--RANGE3 IMAGES -->
                            <div class="flex-shrink-0 grid grid-cols-1 gap-y-6 lg:gap-y-8">
                                <div class="w-44 h-64 rounded-lg overflow-hidden">
                                    <img src="../../modele/inscription/bg.jpg" alt="" class="w-full h-full object-center object-cover">
                                </div>
                                <div class="w-44 h-44 rounded-lg overflow-hidden">
                                    <img src="../../modele/inscription/bell.jpg" alt="" class="w-full h-full object-center object-cover">
                                </div>
                                
                                <div class="w-44 h-44 rounded-lg overflow-hidden">
                                    <img src="../../modele/inscription/belo.jpg" alt="" class="w-full h-full object-center object-cover">
                                </div>
                                <div class="w-44 h-44 rounded-lg overflow-hidden">
                                    <img src="../../modele/inscription/bell.jpg" alt="" class="w-full h-full object-center object-cover">
                                </div>
                            </div>   
                            
                        </div>
                    </div>
                </div>
            </div>
       </div>
    </div>


</body>
</html>