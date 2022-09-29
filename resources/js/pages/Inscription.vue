<template>
    <div class="w-full h-14 py-2 bg-gray-400">
        <h1 class="px-52 text-white text-3xl font-serif font-bold">Inscription</h1>
    </div>

    <div class="px-52">
        <div class="flex">
            <div class="basis-3/5 py-7">
                <h1 class="text-2xl font-serif text-blue-900 mb-6">Les modalites d'admission</h1>
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

                <h1 class="text-2xl font-serif text-blue-900 mb-6">Re-inscription pour une classe superieure</h1>
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

                <p class="text-justify py-6">
                    Documents : Bulletins 5ème et 6ème des humanités, Diplôme d’Etat (ou Attestation de réussite), Attestation de bonne vie
                    et mœurs, Attestation de naissance et 2 Photos passeport, Relevés des classes inférieures (Pour une inscription
                    spéciale). La Rentrée est prévue pour le 14-10-2022.
                </p>
            </div>

            <!-- img -->
            <div class="basis-2/5 py-7">
                <img src="img/etu2.jpg" alt="" class="w-full" style="height:470px">
            </div>
        </div>
    </div>

    <div class="bg-gray-400">
        <div class="flex text-lg px-52 gap-10">
            <div class="basis-2/5 mt-32">
                <img src="/img/learn.png" alt="" srcset="">
            </div>

            <div class="basis-3/5 mb-6">
                <h1 class="text-3xl text-white py-6 font-serif font-bold">Formulaire d'enregistrement</h1>
                <div class="flex gap-2 text-sm">
                    <div class="">
                        <label for="" class="text-white block">Prenom <span class="text-red-600">*</span></label>
                        <input type="text" class="px-4 rounded-md h-8 text-xs text-gray-700" placeholder="Prenom">
                    </div>
                    <div class="">
                        <label for="" class="text-white block">Nom <span class="text-red-600">*</span></label>
                        <input type="text" class="px-4 rounded-md h-8 text-xs text-gray-700" placeholder="Sexe">
                    </div>
                </div>
                <div class="mt-1 text-sm">
                    <label for="" class="text-white block">Sexe</label>
                    <select name="" class="px-4 rounded-md h-10 w-full text-xs text-gray-700">
                        <option value="">Homme</option>
                        <option value="">Femme</option>
                    </select>
                </div>
                <div class="mt-1 text-sm">
                    <label for="" class="text-white block">Nationalité <span class="text-red-600">*</span></label>
                    <input type="text" class="px-4 rounded-md h-8 w-full text-xs text-gray-700" placeholder="Nationalité">
                </div>
                <div class="mt-1 text-sm">
                    <label for="" class="text-white block">Email <span class="text-red-600">*</span></label>
                    <input type="mail" class="px-4 rounded-md h-8 w-full text-xs text-gray-700" placeholder="Email">
                </div>
                <div class="mt-1 text-sm">
                    <label for="" class="text-white block">Téléphone <span class="text-red-600">*</span></label>
                    <input type="tel" class="px-4 rounded-md h-8 w-full text-xs text-gray-700" placeholder="Téléphone">
                </div>
                <div class="mt-1 text-sm">
                    <label for="" class="text-white block">Niveau/cycle</label>
                    <select name="" class="px-4 rounded-md h-10 w-full text-xs text-gray-700">
                        <option value="">Graduat</option>
                        <option value="">Licence</option>
                    </select>
                </div>
                <div class="mt-1 text-sm">
                    <label for="" class="text-white block">Parlez-nous de vous</label>
                    <textarea name="" id="" cols="30" rows="5" class="px-4 rounded-md w-full text-xs text-gray-700" placeholder="Qu'est-ce qui vous définit ?"></textarea>
                </div>
                <button class="bg-blue-600 rounded-md text-white p-1 text-md mt-2 px-4">Envoyer</button>
            </div>
        </div>
    </div>
</template>