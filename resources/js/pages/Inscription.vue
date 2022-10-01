<template>
    <div class="">
        <div class="w-full px-4 py-2 mt-20 text-center bg-gray-50 h-14 lg:px-32 sm:px-8 md:px-16 xl:px-64 2xl:px-80">
            <h1 class="font-serif text-3xl font-bold text-gray-400 px-52">Inscription</h1>
        </div>
        <!-- img -->
        <div class="flex justify-center w-full lg:hidden py-7">
            <img src="img/etu2.png" alt="" class="w-2/6 h-80" >
        </div>
    
        <div class="px-4 lg:px-32 sm:px-8 md:px-16 xl:px-64 2xl:px-80">
            <div class="grid grid-cols-6 gap-20">
                <div class="col-span-5 py-7">
                    <h1 class="mb-6 font-serif text-2xl text-blue-900">Les modalites d'admission</h1>
                    <p>
                        <span>A.</span><span class="px-2">Formulaire : 10$</span>
                    </p>
                    <p class="py-4">
                        <span>B.</span><span class="px-2">Si moins de 60% aux EXETATS,
                            test d’admission : 10$ (à payer le jour du test) – L1 uniquement.
                            Matière : Français, Mathématique, Culture Générale, Anglais</span>
                    </p>
                    <p class="py-4">
                        <span>C.</span><span class="px-2">Confirmation d’inscription
                        -25$ des frais administratifs + Minerval première tranche +
                        -20$ de frais d’inscription (Licence) – 30$ (Master) +
                        -10$ de la fiche de scolarité (L3 et M2 uniquement) + 10’000fc (Photos passeport)</span>
                    </p>
    
                    <h1 class="mb-6 font-serif text-2xl text-blue-900">Re-inscription pour une classe superieure</h1>
                    <p>
                        <span>A.</span><span class="px-2">Réinscription : 20$ (Licence) – 30$ (Master)</span>
                    </p>
                    <p class="py-4">
                        <span>B.</span><span class="px-2">Minerval première tranche : 
                            voir enseignements organisés (pour les classes terminales,
                             les frais sont à payer en deux tranches)</span>
                    </p>
                    <p class="py-4">
                        <span>C.</span><span class="px-2">Relevé des côtes, Attestation de réussite,
                             Attestation de recherche, Recommandation de stage : 10$</span>
                    </p>
                    <p class="py-4">
                        <span>D.</span><span class="px-2">Fiche de cotation stage : 5$</span>
                    </p>
                    <p class="py-4">
                        <span>E.</span><span class="px-2">Frais de participation a la session : 15$ (Licence)</span>
                    </p>
    
                    <p class="py-6 text-justify">
                        Documents : Bulletins 5ème et 6ème des humanités, Diplôme d’Etat (ou Attestation de réussite), Attestation de bonne vie
                        et mœurs, Attestation de naissance et 2 Photos passeport, Relevés des classes inférieures (Pour une inscription
                        spéciale). La Rentrée est prévue pour le 14-10-2022.
                    </p>
                </div>
    
                <!-- img -->
                <div class="col-span-1 py-7">
                    <img src="img/etu2.png" alt="" class="w-full" >
                </div>
            </div>
        </div>
    
        <div class="px-4 bg-gray-50 lg:px-32 sm:px-8 md:px-16 xl:px-64 2xl:px-80">
            <div class="flex gap-10 text-lg">
                <div class="hidden mt-32 md:grid basis-2/5">
                    <img src="/img/learn.png" alt="" srcset="">
                </div>
    
                <div class="w-full mb-6 md:basis-3/5">
                    <h1 class="py-6 font-serif text-2xl font-bold text-gray-400 lg:text-3xl">Formulaire d'enregistrement</h1>
                    <div class="flex gap-2 text-sm">
                        <div class="">
                            <label for="" class="block text-gray-400">Prenom <span class="text-red-600">*</span></label>
                            <input type="text" class="h-8 px-4 text-xs text-gray-700 rounded-md" placeholder="Prenom">
                        </div>
                        <div class="">
                            <label for="" class="block text-gray-400">Nom <span class="text-red-600">*</span></label>
                            <input type="text" class="h-8 px-4 text-xs text-gray-700 rounded-md" placeholder="Sexe">
                        </div>
                    </div>
                    <div class="mt-1 text-sm">
                        <label for="" class="block text-gray-400">Sexe</label>
                        <select name="" class="w-full h-10 px-4 text-xs text-gray-700 rounded-md">
                            <option value="">Homme</option>
                            <option value="">Femme</option>
                        </select>
                    </div>
                    <div class="mt-1 text-sm">
                        <label for="" class="block text-gray-400">Nationalité <span class="text-red-600">*</span></label>
                        <input type="text" class="w-full h-8 px-4 text-xs text-gray-700 rounded-md" placeholder="Nationalité">
                    </div>
                    <div class="mt-1 text-sm">
                        <label for="" class="block text-gray-400">Email <span class="text-red-600">*</span></label>
                        <input type="mail" class="w-full h-8 px-4 text-xs text-gray-700 border-2 border-gray-300 rounded-md" placeholder="Email">
                    </div>
                    <div class="mt-1 text-sm">
                        <label for="" class="block text-gray-400">Téléphone <span class="text-red-600">*</span></label>
                        <input type="tel" class="w-full h-8 px-4 text-xs text-gray-700 rounded-md" placeholder="Téléphone">
                    </div>
                    <div class="mt-1 text-sm">
                        <label for="" class="block text-gray-400">Niveau/cycle</label>
                        <select name="" class="w-full h-10 px-4 text-xs text-gray-700 rounded-md">
                            <option value="">Graduat</option>
                            <option value="">Licence</option>
                        </select>
                    </div>
                    <div class="mt-1 text-sm">
                        <label for="" class="block text-gray-400">Parlez-nous de vous</label>
                        <textarea name="" id="" cols="30" rows="5" class="w-full px-4 text-xs text-gray-700 rounded-md" placeholder="Qu'est-ce qui vous définit ?"></textarea>
                    </div>
                    <button class="p-1 px-4 mt-2 text-white bg-blue-600 rounded-md text-md">Envoyer</button>
                </div>
            </div>
        </div>

    </div>
</template>