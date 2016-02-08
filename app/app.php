<?php
/**
 * Created by PhpStorm.
 * User: MAX
 * Date: 12/12/2015
 * Time: 00:00
 */

namespace App;
use PDO;
use PDOException;

/**
 * Class app
 * @package App
 *
 * Définie la base du projet
 *
 */
class app
{

}

/**
 * Class constante
 * @package App
 *
 * Définie un ensemble de constante à modifié à chaque début de projet
 *
 */
class constante extends app{

    const HTTP              = "http://";
    const URL               = "scpvs.cridip-swd.com/";
    const ASSETS            = "assets/";
    const NOM_SITE          = "SCPVS";
    const SOURCES           = "http://ns342142.ip-5-196-76.eu/sources/scpvs/";
    const MAINTENANCE       = 0;
    const IP_MAIN           = "109.190.224.161";
    const IP_SRC            = "ns342142.ip-5-196-76.eu";
    /*
     * ADRESSE BUREAU = 109.190.224.161
     * ADRESSE MAISON = 109.190.65.252
     */
    /**
     * @param $dos array Permet de parser sous forme string le tableau array=$dos
     * @return string retourne un format standard de link HTML
     */
    private static function parseArray($dos)
    {
        return implode("/", $dos);
    }

    /**
     * @param array $dos Il permet d'envoyer à la fonction la liste des dossiers à parcourir sous forme de tableau
     * @param bool|true $assets Permet d'insérer de manière automatique le dossier 'assets'
     * @param bool $sources Renvoie les informations vers le fichiers DataSources de CRIDIP
     * @return string Suivant le bool $assets, il retourne la redirection sous format de lien(string)
     */
    public static function getUrl($dos = array(), $assets = true, $sources = true)
    {
        if($assets === true)
        {
            return static::HTTP.static::URL.static::ASSETS.static::parseArray($dos);
        }elseif($sources === true){
            return static::SOURCES;
        }else{
            return static::HTTP.static::URL.static::parseArray($dos);
        }

    }

    public function maintenance($ip)
    {
        if(static::MAINTENANCE == 1){
            if($ip != static::IP_MAIN)
            {
                return true;
            }else{
                return false;
            }
        }
    }




}

class date_format extends app
{

    /**
     * @param $date // Prend en Parametre la date au format d-m-Y
     * @return int // retourne le resultat en format entier time()
     */
    public function format_strt($date)
    {
        return strtotime($date);
    }

    /**
     * @param $format // Prend en paramêtre la date au format choisie |ex: d-m-Y H:i ou d/m/Y
     * @param $strtotime // Prend en paramêtre la date au format strtotime entier time()
     * @return bool|string // Retourne la date au format choisie en paramêtre
     */
    public function formatage($format, $strtotime)
    {
        return date($format, $strtotime);
    }

    /**
     * @param $jour // Prend le jour au format time()
     * @param $mois // Prend le mois au format time()
     * @param $annee // Prend l'année au format time()
     * @return string // Retourne la date au format j d m y | ex: Lundi 04 Janvier 2016
     */
    public function formatage_long($strtotime)
    {
        $j = date("N", $strtotime);
        $m = date("n", $strtotime);
        $y = date("Y", $strtotime);

        $dj = date("d", $strtotime);

        switch($j)
        {
            case 1: $data_jour = "Lundi"; break;
            case 2: $data_jour = "Mardi"; break;
            case 3: $data_jour = "Mercredi"; break;
            case 4: $data_jour = "Jeudi"; break;
            case 5: $data_jour = "Vendredi"; break;
            case 6: $data_jour = "Samedi"; break;
            case 7: $data_jour = "Dimanche"; break;
        }

        switch($m)
        {
            case 1: $data_mois = "Janvier"; break;
            case 2: $data_mois = "Février"; break;
            case 3: $data_mois = "Mars"; break;
            case 4: $data_mois = "Avril"; break;
            case 5: $data_mois = "Mai"; break;
            case 6: $data_mois = "Juin"; break;
            case 7: $data_mois = "Juillet"; break;
            case 8: $data_mois = "Aout"; break;
            case 9: $data_mois = "Septembre"; break;
            case 10: $data_mois = "Octobre"; break;
            case 11: $data_mois = "Novembre"; break;
            case 12: $data_mois = "Décembre"; break;
        }

        return $data_jour." ".$dj." ".$data_mois." ".$y;
    }

    public function format($datetime)
    {
        $now = time();
        $created = $datetime;

        //Calcul de la différence
        $diff = $now-$created;
        $m = ($diff)/(60); // Minutes
        $h = ($diff)/(60*60); // Heures
        $j = ($diff)/(60*60*24); // jours
        $s = ($diff)/(60*60*24*7);

        if($diff < 60) {
            return $diff." Secondes";
        }elseif ($m < 60) { // "il y a x minutes"
            $minute = (floor($m) == 1) ? 'minute' : 'minutes';
            return floor($m).' '.$minute;
        }
        elseif ($h < 24) { // " il y a x heures, x minutes"
            $heure = (floor($h) <= 1) ? 'heure' : 'heures';
            $dateFormated = floor($h).' '.$heure;
            if (floor($m-(floor($h))*60) != 0) {
                $minute = (floor($m) == 1) ? 'minute' : 'minutes';
                $dateFormated .= ' et '.floor($m-(floor($h))*60).' '.$minute;
            }
            return $dateFormated;
        }
        elseif ($j < 7) { // " il y a x jours, x heures"
            $jour = (floor($j) <= 1) ? 'jour' : 'jours';
            $dateFormated = floor($j).' '.$jour;
            if (floor($h-(floor($j))*24) != 0) {
                $heure = (floor($h) <= 1) ? 'heure' : 'heures';
                $dateFormated .= ' et '.floor($h-(floor($j))*24).' '.$heure;
            }
            return $dateFormated;
        }
        elseif ($s < 5) { // " il y a x semaines, x jours"
            $semaine = (floor($s) <= 1) ? 'semaine' : 'semaines';
            $dateFormated = floor($s).' '.$semaine;
            if (floor($j-(floor($s))*7) != 0) {
                $jour = (floor($j) <= 1) ? 'jour' : 'jours';
                $dateFormated .= ' et '.floor($j-(floor($s))*7).' '.$jour;
            }
            return $dateFormated;
        }
        else { // on affiche la date normalement
            return strftime("%d %B %Y à %H:%M", $created);
        }
    }
    public function week2str($annee, $no_semaine)
    {
        // Récup jour début et fin de la semaine
        $timeStart = strtotime("First Thursday January {$annee} + ".($no_semaine - 1)." Week");
        $timeEnd   = strtotime("First Thursday January {$annee} + {$no_semaine} Week -1 day");

        // Récup année et mois début
        $anneeStart = date("Y", $timeStart);
        $anneeEnd   = date("Y", $timeEnd);
        $moisStart  = date("m", $timeStart);
        $moisEnd    = date("m", $timeEnd);

        // Gestion des différents cas de figure
        if( $anneeStart != $anneeEnd ){
            // à cheval entre 2 années
            $retour = "du ".strftime("%d %B %Y", $timeStart)." au ".strftime("%d %B %Y", $timeEnd);
        } elseif( $moisStart != $moisEnd ){
            // à cheval entre 2 mois
            $retour = "du ".strftime("%d %B", $timeStart)." au ".strftime("%d %B %Y", $timeEnd);
        } else {
            // même mois
            $retour = "du ".strftime("%d", $timeStart)." au ".strftime("%d %B %Y", $timeEnd);
        }
        return $retour;
    }

    public function date_jour_strt()
    {
        return strtotime(date("d-m-Y"));
    }


}

class fonction extends app
{
    public function gen_token($idclient)
    {
        $ip_client = sha1($_SERVER['REMOTE_ADDR']);
        $heure = strtotime(date("H:i"));
        $salt = "_";
        $caractere = "azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN0123456789";
        $shuffle = str_shuffle($caractere);
        $lenght = substr($shuffle, 0, 10);
        $gen = $heure.$salt.sha1($lenght).$salt.$ip_client.$salt.$idclient;
        return $gen;

    }

    public function gen_password()
    {
        $caractere = "AZERTUIOPQSDFGHJLMWXCVBNazertyuiopqsdfghjklmwxcvbn0123456789";
        $shuffle = str_shuffle($caractere);
        $lenght = substr($shuffle, 0, 6);
        return $lenght;
    }

    public function number_decimal($chiffre)
    {
        return number_format($chiffre, 2, ',', ' ')." €";
    }
}

class DB extends app{

    private $host = "localhost";
    private $username = "root";
    private $password = "1992maxime";
    private $database = "gameshop";
    private $db;

    public function __construct($host = null, $username = null, $password = null, $database = null)
    {
        if($host != null)
        {
            $this->host = $host;
            $this->username = $username;
            $this->password = $password;
            $this->database = $database;
        }

        try{
            $this->db = new PDO('mysql:host='.$this->host.';dbname='.$this->database, $this->username, $this->password, array(
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8',
                PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
            ));
        }catch(PDOException $e)
        {
            echo $e->getCode().": ".$e->getMessage();
        }
    }

    /**
     * @param $sql // Requete demander au système (UNIQUEMENT SELECT FROM)
     * @param null $data // Tableau des variables à rechercher avec la requete demander
     * @return array // Retourne Tableau de la requete (OBJECT)
     */
    public function query($sql, $data = null)
    {
        $req = $this->db->prepare($sql);
        $req->execute($data);
        return $req->fetchAll(PDO::FETCH_OBJ);
    }

    /**
     * @param $sql // Requete demander au système (UNIQUEMENT SELECT Count() FROM)
     * @param null $data // Tableau des variables à rechercher avec la requete demander
     * @return string // Retourne un nombre associatif à la requete
     */
    public function count($sql, $data = null)
    {
        try {
            $req = $this->db->prepare($sql);
            $req->execute($data);
            return $req->fetchColumn();
        }catch(PDOException $e)
        {
            return $e->getCode().": ".$e->getMessage();
        }
    }

    /**
     * @param $sql // Requete demander au systeme (UPDATE, DELETE, INSERT)
     * @param null $data // Tableau des variables à inserer avec la requete demander
     * @return int|string retourne le nombre de ligne affecter par la requte
     */
    public function execute($sql, $data = null)
    {
        try {
            $req = $this->db->prepare($sql);
            $req->execute($data);
            return $req->rowCount();
        }catch(PDOException $e)
        {
            return $e->getCode().": ".$e->getMessage();
        }

    }
}

class error extends app{

    public function notificateur($stat, $define)
    {
        if($stat === 'success')
        {
            if($define === 'define_default'){return $this->define_default;}

        }elseif($stat === 'warning')
        {

        }elseif($stat === 'error'){

        }
    }
}

class ssh2 extends app
{
    protected $server   = "vps221243.ovh.net";
    protected $port     = "5678";
    protected $user     = "sysdev";
    protected $pass     = "sysdev";
    public $connect     = "";

    protected $error_connect = "Système de Connexion SSH2 inopérant !<br>Impossible de ce connecter au serveur distant.";

    public function connexion($server = null, $port = null, $user = null, $pass = null, $external = false)
    {
        if($external == false)
        {
            $connect = ssh2_connect($this->server, $this->port);
            $login = ssh2_auth_password($connect, $this->user, $this->pass);

            if(!$login)
            {
                $text = "Erreur SSH2: Connexion echoué, veuillez vérifier les paramêtre de l'application app/app.php <i>(CLASS)</i>.";
                header("Location: ../index.php?view=admin_sha&sub=error&text=$text");
            }else{
                return $connect;
            }
        }else{
            $connect = ssh2_connect($server, $port);
            $login = ssh2_auth_password($connect, $user, $pass);

            if(!$login)
            {
                $text = "Erreur SSH2: Connexion echoué, veuillez vérifier les paramêtre de l'application app/app.php <i>(CLASS)</i>.";
                header("Location: ../index.php?view=admin_sha&sub=error&text=$text");
            }else{
                return $connect;
            }
        }
    }

}