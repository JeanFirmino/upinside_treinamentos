<?php

/**
 * Session.class [ HELPER ] 
 * Responsável pelas estatísticas, sessões e atualizações de tráfego do sistema!
 *  
 *
 * @copyright (c) 2018, Cristovão Lira Braga UPINSIDE TREINAMENTOS
 */
class Session {

    private $Date;
    private $Cache;
    private $Traffic;
    private $Browser;

    function __construct($Cache = null) {
        session_start();
        $this->CheckSession($Cache);
    }

    //Verifica e executa todos os métodos da classe!
    private function CheckSession($Cache = null) {
        $this->Date = date('Y-m-d');
        $this->Cache = ( (int) $Cache ? $Cache : 20 );

        if (empty($_SESSION['useronline'])):
            $this->setTraffic();
            $this->setSession();
            $this->CheckBrowser();
            $this->BrowserUpdate();
        else:
            $this->TrafficUpdate();
            $this->sessionUpdate();
            $this->CheckBrowser();
        endif;

        $this->Date = null;
    }

    /**
     * ****************************************
     * *********** SESSÃO DO USUÁRIO **********
     * **************************************** 
     */
    //Inicia a sessão do usuário
    private function setSession() {
        $_SESSION['useronline'] = [
            "online_session" => session_id(),
            "online_startviews" => date('Y-m-d H:i:s'),
            "online_endviews" => date('Y-m-d H:i:s', strtotime("+{$this->Cache}minutes")),
            "online_ip" => filter_input(INPUT_SERVER, 'REMOTE_ADDR', FILTER_VALIDATE_IP),
            "online_url" => filter_input(INPUT_SERVER, 'REQUEST_URI', FILTER_DEFAULT),
            "online_agent" => filter_input(INPUT_SERVER, "HTTP_USER_AGENT", FILTER_DEFAULT)
        ];
    }

    //Atualiza sessão do usuário!
    private function sessionUpdate() {
        $_SESSION['useronline']['online_endviews'] = date('Y-m-d H:i:s', strtotime("+{$this->Cache}minutes"));
        $_SESSION['useronline']['online_url'] = filter_input(INPUT_SERVER, 'REQUEST_URI', FILTER_DEFAULT);
    }

    /**
     * ************************************************************
     * ************* USUÁRIOS, VISITAS E ATUALIZAÇÕES *************
     * ************************************************************
     */
    //Verifica e insere o tráfego na tabela
    private function setTraffic() {
        $this->getTraffic();
        if (!$this->Traffic):
            $ArrSiteViews = ['siteviews_date' => $this->Date, 'siteviews_users' => 1, 'siteviews_views' => 1, 'siteviews_pages' => 1];
            $CreateSiteViews = new Create;
            $CreateSiteViews->ExeCreate('ws_siteviews', $ArrSiteViews);
        else:
            if (!$this->getCookie()):
                $ArrSiteViews = ['siteviews_users' => $this->Traffic['siteviews_users'] + 1, 'siteviews_views' => $this->Traffic['siteviews_views'] + 1, 'siteviews_pages' => $this->Traffic['siteviews_pages'] + 1];
            else:
                $ArrSiteViews = ['siteviews_views' => $this->Traffic['siteviews_views'] + 1, 'siteviews_pages' => $this->Traffic['siteviews_pages'] + 1];
            endif;

            $updateSiteViews = new update;
            $updateSiteViews->ExeUpdate('ws_siteviews', $ArrSiteViews, "WHERE siteviews_date = :date", "date={$this->Date}");
        endif;
    }

    //Obtém dados da tabela [ HELPER TRIFFC ]
    private function getTraffic() {
        $readSiteViews = new Read;
        $readSiteViews->ExeRead('ws_siteviews', "WHERE siteviews_date = :date", "date={$this->Date}");

        if ($readSiteViews->getRowCount()):
            $this->Traffic = $readSiteViews->getResult()[0];
        endif;
    }

    //Verifica e atualiza os pageviews
    private function TrafficUpdate() {
        $this->getTraffic();
        $ArrSiteViews = ['siteviews_pages' => $this->Traffic['siteviews_pages'] + 1];
        $updadtePageViews = new update;
        $updadtePageViews->ExeUpdate('ws_siteviews', $ArrSiteViews, "WHERE siteviews_date = :date", "date={$this->Date}");

        $this->Traffic = null;
    }

    //Verifica, cria e atualiza o cookie do usuário [ HELPER ]
    private function getCookie() {
        $Cookie = filter_input(INPUT_COOKIE, 'useronline', FILTER_DEFAULT);
        setcookie("useronline", base64_decode("ML - Manutencão Lira"), time() + 86400);
        if (!$Cookie):
            return false;
        else:
            return true;
        endif;
    }

    /**
     * **************************************************
     * ************* NAVEGADORES DE ACESSO **************
     * **************************************************
     */
    //Identifica navegador do usuário!
    private function CheckBrowser() {
        $this->Browser = $_SESSION['useronline']['online_agent'];
        if (strpos($this->Browser, 'Chrome')):
            $this->Browser = 'Chrome';
        elseif (strpos($this->Browser, 'Firefox')):
            $this->Browser = 'Firefox';
        elseif (strpos($this->Browser, 'MSIE') || strpos($this->Browser, 'Trident/')):
            $this->Browser = 'IE';
        else:
            $this->Browser = 'Outros';
        endif;
    }

    //Atualiza tabela com dados de navegadores
    private function BrowserUpdate() {
        $readAgent = new Read;
        $readAgent->ExeRead('ws_siteviews_agent', "WHERE agent_name = :agent", "agent={$this->Browser}");
        
        if (!$readAgent->getResult()):
            $ArrAgent = ['agent_name' => $this->Browser, 'agent_views' => 1];
            $CreateAgent = new Create;
            $CreateAgent->ExeCreate('ws_siteviews_agent', $ArrAgent);
        else:
            $ArrAgent = ['agent_views' => $readAgent->getResult()[0]['agent_views'] + 1];
            $UpdateAgent = new Update;
            $UpdateAgent->ExeUpdate('ws_siteviews_agent', $ArrAgent, "WHERE agent_name = :name", "name={$this->Browser}");
        endif;
    }

    /**
     * ****************************************
     * *********** USUÁRIOS ONLINE ************
     * ****************************************
     */
    //
}
