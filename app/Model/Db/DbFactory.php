<?php
namespace Model\Db;
use ORM;

/* --
 * Le fait de d�clarer des propri�t�s ou des m�thodes comme
 * statiques vous permet d'y acc�der sans avoir besoin d'instancier
 * la classe. On ne peut acc�der � une propri�t� d�clar�e comme statique
 * avec l'objet instanci� d'une classe (bien que ce soit possible pour
 * une m�thode statique).
 * Docs : http://php.net/manual/fr/language.oop5.static.php
 */
class DbFactory
{

    public static function start() {

        # Récupération des Données de l'App
        $app = getApp();

        # Initialisation de Idiorm
        ORM::configure('mysql:host='.$app->getConfig('db_host').';dbname='.$app->getConfig('db_name'));
        ORM::configure('username', $app->getConfig('db_user'));
        ORM::configure('password', $app->getConfig('db_pass'));
        // ORM::configure('driver_options', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

        # Configuration de la clé primaire de chaque table
        ORM::configure('id_column_overrides', array(
           	't_competences'=>'id_competence',
            't_experiences'=>'id_experience',
            't_formations'=>'id_formation',
            't_intertitres'=>'id_intertitre',
            't_loisirs'=>'id_loisir',
            't_realisations'=>'id_realisation',
            't_titres_cv'=>'id_titre_cv',
            't_utilisateurs'=>'id_utilisateur'
        ));

    }

}
