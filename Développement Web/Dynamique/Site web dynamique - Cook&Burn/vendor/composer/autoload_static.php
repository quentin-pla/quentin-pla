<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb770050fbbebb884dd29f72063100b5a
{
    public static $classMap = array (
        'Cookburn\\Controllers\\ConnexionController' => __DIR__ . '/../..' . '/cookburn/Controllers/ConnexionController.php',
        'Cookburn\\Controllers\\ProfilController' => __DIR__ . '/../..' . '/cookburn/Controllers/ProfilController.php',
        'Cookburn\\Controllers\\RecetteController' => __DIR__ . '/../..' . '/cookburn/Controllers/RecetteController.php',
        'Cookburn\\Models\\Burn' => __DIR__ . '/../..' . '/cookburn/Models/Burn.php',
        'Cookburn\\Models\\Connexion' => __DIR__ . '/../..' . '/cookburn/Models/Connexion.php',
        'Cookburn\\Models\\Etape_Recette' => __DIR__ . '/../..' . '/cookburn/Models/Etape_Recette.php',
        'Cookburn\\Models\\Favoris' => __DIR__ . '/../..' . '/cookburn/Models/Favoris.php',
        'Cookburn\\Models\\Ingredient' => __DIR__ . '/../..' . '/cookburn/Models/Ingredient.php',
        'Cookburn\\Models\\Ingredient_Recette' => __DIR__ . '/../..' . '/cookburn/Models/Ingredient_Recette.php',
        'Cookburn\\Models\\Recettes' => __DIR__ . '/../..' . '/cookburn/Models/Recettes.php',
        'Cookburn\\Models\\Recuperation' => __DIR__ . '/../..' . '/cookburn/Models/Recuperation.php',
        'Cookburn\\Models\\Utilisateur' => __DIR__ . '/../..' . '/cookburn/Models/Utilisateur.php',
        'Core\\Controllers\\Controller' => __DIR__ . '/../..' . '/core/Controllers/Controller.php',
        'Core\\Controllers\\Database' => __DIR__ . '/../..' . '/core/Controllers/Database.php',
        'Core\\Controllers\\Model' => __DIR__ . '/../..' . '/core/Controllers/Model.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitb770050fbbebb884dd29f72063100b5a::$classMap;

        }, null, ClassLoader::class);
    }
}
