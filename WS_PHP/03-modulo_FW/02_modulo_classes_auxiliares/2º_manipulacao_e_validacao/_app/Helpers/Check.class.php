<?php
/**
 * Chech.class [ HELPERS ]
 * Classe responsável por manipular e validar dados do sistema
 *
 * @copyright (c) 2018, Cristovão Lira Braga UPINSIDE TECNOLOGIA
 */
class Check {
    
    private static $Data;
    private static $Format;
    
    public static function Email($Email){
        self::$Data = (string) $Email;
        self::$Format = '/[a-z0-9_\.\-]+@[a-z0-9_\.\-]*[a-z0-9_\.\-]+\.[a-z]{2,4}$/';
        
        if(preg_match(self::$Format, self::$Data)):
            return true;
        else:
            return false;
        endif;
    }
    
    public static function Name($Name) {
        self::$Format = array();
        self::$Format['a'] = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜüÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿRr"!@#$%&*()_-+={[}]/?;:.,\\\'<>°ºª';
        self::$Format['b'] = 'aaaaaaaceeeeiiiidnoooooouuuuuybsaaaaaaaceeeeiiiidnoooooouuuyybyRr                                 ';
    
        self::$Data = strtr(utf8_decode($Name), utf8_decode(self::$Format['a']), self::$Format['b']);
        self::$Data = strip_tags(trim(self::$Data));
        self::$Data = str_replace(' ', '-', self::$Data);
        self::$Data = str_replace(array('-----','----','---','--'), '-', self::$Data);
        
        return strtolower(utf8_decode(self::$Data));
    }
    
    public static function Date($Data){
        self::$Format = explode(' ', $Data);
        self::$Data = explode('/',self::$Format[0]);
        
        if(empty(self::$Format[1])):
            self::$Format[1] = date('H:i:s');
        endif;
        
        self::$Data = self::$Data[2] . '-' . self::$Data[1] . '-' . self::$Data[0] . ' ' . self::$Format[1];
        return self::$Data;
    }
    
}
