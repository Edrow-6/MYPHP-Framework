<?php

namespace App\Controllers;

use App\Models\User;
use Exception;

class RegisterController extends Controller
{
    /**
     * Méthode d'affichage de la page avec des variables
     *
     * @return void
     * @throws Exception
     */
    public function show($flash = '') {
        $this->render('auth.login', [
            'flash' => $flash
        ]);
    }

    /**
     * Méthode d'inscription
     *
     * @return void
     */
    public function register() {
        // A faire

        /**
         * Si inscription générer une photo de profil:
         *
         * $avatar = new LasseRafn\InitialAvatarGenerator\InitialAvatar();
         * $image = $avatar->name(`{$nom} {$prenom}`)->generate();
         * return $image->stream('png', 100); ( ->save(); )
         *
         * $target = 'storage/uploads/'; |
         * $link = 'uploads';            | A REFACTORISER
         * symlink($target, $link);      |
         *
         * $filename = md5($nom.$prenom).'png';
         * $final_url = readlink($link).$filename;
         */
    }
}