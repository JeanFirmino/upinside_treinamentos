<?php
require './_app/config.inc.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Curso Work Series -  HTML5 do Jeito Certo!</title>
        
        <!--[if lt IE 9]>
               <script src="js/html5shiv.js"></script>
        <![endif]-->
        
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel="stylesheet">        
        <link rel="stylesheet" href="<?= INCLUDE_PATH; ?>/css/boot.css"/>
        <link rel="stylesheet" href="<?= INCLUDE_PATH; ?>/css/style.css"/>
        <link rel="shortcut icon" href="<?= INCLUDE_PATH; ?>/img/favicon.png"/>
        
    </head>
    <body>
        <!--Sermpre utilizar traço quando for class do boot e anderline quando for pra style, assim fica mais fácil de indetificar!-->
        <header class="container bg-gray">
            <div class="content">
                <h1 class="main_logo fl-left fontzero">
                    <a title="Home" href="<?= HOME; ?>" class="radius">
                        Curso Work Series -  HTML5 do Jeito Certo!
                    </a>
                </h1>

                <ul class="main_nav fl-right">
                    <?php require REQUIRE_PATH . '/inc/main_nav.php'; ?>
                </ul>
                <div class="clear"></div>
            </div>
        </header>
        
        <!--CONTEÚDO-->
        <!--Bloco de vídeo-->
        <article class="container">
            <div class="content">
                <header class="sectiontitle">
                        <h1>Conheça o curso WS HTML5!</h1>
                        <p class="tagline">Veja o que o tutor do curso <mark>Robson V. Leite</mark> tem a dizer!</p>
                </header>
                
                <video class="video video-large main_video" src="<?= HOME; ?>/uploads/midia/video.mp4" controls width="400"></video>
                
                <aside class="al-center">
                    <h1>Pronto para <a class="btn btn-green radius" title="Comprar Curso WS HTML5 Agora!" target="_blank" href="https://www.upinside.com.br/cursos/html5-do-jeito-certo">Comprar o WS HTML5</a> e Aprender de Verdade?</h1>
                </aside>                
                <div class="clear"></div>
            </div>
            
            <footer class="bg-blulight">
                <section class="content main_videos" style="padding-bottom: 10px;">
                    <h1>Veja Algumas Aulas do Curso WS HTML5!</h1>
                   
                    <article class="box box-small">
                        <div class="thumb">
                            <div class="video_play"></div>
                            <img title="Vídeo Aula Entenda o HTML5" alt="[Entenda o HTML5]" src="<?= INCLUDE_PATH; ?>/img/entendendo-o-html5.jpg"/>
                        </div>
                        <h1 class="box_video_title">Entenda o HTML5</h1>
                    </article>
                    
                     <article class="box box-small">
                        <div class="thumb">
                            <div class="video_play"></div>
                            <img title="Vídeo Aula Entenda o HTML5" alt="[Entenda o HTML5]" src="<?= INCLUDE_PATH; ?>/img/entendendo-o-html5.jpg"/>
                        </div>
                        <h1 class="box_video_title">Entenda o HTML5</h1>
                    </article>
                    
                    <article class="box box-small">
                        <div class="thumb">
                            <div class="video_play"></div>
                            <img title="Vídeo Aula Entenda o HTML5" alt="[Entenda o HTML5]" src="<?= INCLUDE_PATH; ?>/img/entendendo-o-html5.jpg"/>
                        </div>
                        <h1 class="box_video_title">Entenda o HTML5</h1>
                    </article>
                    
                     <article class="box box-small last">
                        <div class="thumb">
                            <div class="video_play"></div>
                            <img title="Vídeo Aula Entenda o HTML5" alt="[Entenda o HTML5]" src="<?= INCLUDE_PATH; ?>/img/entendendo-o-html5.jpg"/>
                        </div>
                       <h1 class="box_video_title">Entenda o HTML5</h1>
                    </article>
                    
                    <div class="clear"></div>
                </section>
            </footer>
        </article>
        
        <!--seção relacional-->
        <section class="container bg-orange">
            <!--Container do title-->
            <div class="content">
                <header class="sectiontitle sectiontitle-nomargin">
                    <h1>Conheça as tecnologias apresentadas:</h1>
                    <p class="tagline">O Curso WS HTML5 apresenta técnicas com foco em produção e otimização de conteúdo para internet!</p>
                </header>                
                
                <div class="clear"></div>
            </div>
            
            <!--Container dos artigos-->
            <div class="container bg-body">
                <div class="content" style="padding-bottom: 10px;">
                    
                    <article class="main_tec_item box box-small al-center radius">
                        <img title="Módulo de HTML5 Semântico" alt="[HTML5 Semântico]" src="<?= INCLUDE_PATH; ?>/img/tec_semantic.png"/>
                        <h1>HTML5 Semântico:</h1>
                        <p class="tagline">Aprenda a produzir conteúdo de qualidade. Otimizando cada bloco tanto para usuários quanto para rôbos de busca!</p>
                    </article>
                    
                    <article class="main_tec_item box box-small al-center radius">
                        <img title="Módulo de CSS produtivo com OOCSS" alt="[CSS produtivo com OOCSS]" src="<?= INCLUDE_PATH; ?>/img/tec_drycss.png"/>
                        <h1>CSS produtivo com OOCSS:</h1>
                        <p class="tagline">Conheça as técnicas de produção do modelo OOCSS, construindo um ambiente padronizado e de ágil desenvolvimento!</p>
                    </article>
                    
                   <article class="main_tec_item box box-small al-center radius">
                        <img title="Módulo de Formulários com HTML5" alt="[Formulários com HTML5]" src="<?= INCLUDE_PATH; ?>/img/tec_forms.png"/>
                        <h1>Formulários com HTML5:</h1>
                        <p class="tagline">Conheça e aprenda a utilizar toda tecnologia dos novos elementos de formulários do HTML5!</p>
                    </article>
                    
                    <article class="main_tec_item box box-small al-center radius last">
                        <img title="Módulo de Áudio e Vídeo na Web" alt="[Áudio e Vídeo na Web]" src="<?= INCLUDE_PATH; ?>/img/tec_midia.png"/>
                        <h1>Áudio e Vídeo na Web:</h1>
                        <p class="tagline">Nunca foi tão fácil incorporar e controlar mídias na internet. Aprenda a fazer isso de forma fácil!</p>
                    </article>
                    
                    <div class="box-line"></div>
                    
                    <article class="main_tec_item box box-small al-center radius">
                        <img title="Módulo de Geolocation e HTML5 Storage" alt="[Geolocation e HTML5 Storage]" src="<?= INCLUDE_PATH; ?>/img/tec_geo.png"/>
                        <h1>Geolocation e HTML5 Storage:</h1>
                        <p class="tagline">Aprenda a utilizar a tecnologia de localização do HTML5. E ainda armazene dados de navegação apenas com HTML!</p>
                    </article>
                    
                    <article class="main_tec_item box box-small al-center radius">
                        <img title="Módulo de Distribuição com Micro Dados" alt="[Distribuição com Micro Dados]" src="<?= INCLUDE_PATH; ?>/img/tec_microdados.png"/>
                        <h1>Distribuição com Micro Dados:</h1>
                        <p class="tagline">Aprenda a utilizar o vocabulário dos micro dados para distribuição de conteúdo otimizado de forma extrema!</p>
                    </article>                    
                    <div class="clear"></div>
                </div>
            </div>
        </section>
        
        <!--Seção Temático-->
        <section class="container bg-blulight">
            <div class="content">
                <div class="sectiontitle">
                    <h1 class="shorticon shorticon-config shorticon-sectiontitle ds-inblock">Ficha Técnica:</h1>
                    <p class="tagline">Saiba mais sobre o conteúdo do curso WS HTML5</p>
                </div>
                
                <article class="main_info box box-small"><h1>Tempo em Aula: <b>23h</b></h1></article>
                <article class="main_info box box-small"><h1>Certifica de: <b>230h</b></h1></article>
                <article class="main_info box box-small"><h1>Módulos: <b>8</b></h1></article>
                <article class="main_info box box-small last"><h1>Vídeo Aulas: <b>50</b></h1></article>
                
                <div class="clear"></div>
            </div>
        </section>
        
        <!--Bloco de retorno e conversão-->
        <article class="container bg-blue">
            <div class="content content-page al-center">
                <header class="sectiontitle">
                        <h1>Faça Parte da Turma WS HTML5, Matricule-se!</h1>
                        <p class="tagline">Comece Agora Mesmo. O Curso é <mark>100% em Vídeo Aulas</mark>, <mark>Online</mark> e <mark>On Demand!</mark></p>
                </header>
                
                <a class="btn btn-green btn-big radius" title="Quero Me Matricular no Curso WS HTML5 Agora!" target="_blank" href="https://www.upinside.com.br/cursos/html5-do-jeito-certo">Comprar WS HTML5!</a>
                
                <footer>
                    <div class="main_chamada al-center">
                        Você estuda quando e onde quiser na melhor plataforma EAD. Com suporte diretamente com o tutor, e todo material disponível para download!
                    </div>
                </footer>
                
                <div class="clear"></div>
            </div>
        </article>
        
        <!--Content visual-->
        <div class="container">
            <div class="content content-page al-center fontsize2 font-light">
                UpInside Treinamentos. Os melhores e mais completo cursos de desenvolvimento Web e TI do mercado!
                <div class="clear"></div>
            </div>
        </div>
        
        <!--CONTEÚDO-->
        
        <footer class="container bg-light">
            <section class="content main_footer">
                <h1 class="fontzero">Sobre a UpInside Treinamentos</h1>
                
                <nav class="box box-medium">
                    <h1 class="title font-bold">Mais sobre o  WS HTML5:</h1>
                    <ul>
                        <li><a class="shorticon shorticon-section" title="Assista o Vídeo de Apresentação" href="#apresentacao">Assista o Vídeo</a></li>
                        <li><a class="shorticon shorticon-section" title="Apresentação" href="#apresentacao">Você vai Aprender</a></li>
                        <li><a class="shorticon shorticon-section" title="Assista o Vídeo de Apresentação" href="#apresentacao">Ficha Técnica</a></li>
                    </ul>
                </nav>
                
                <article class="box box-medium">
                    <h1 class="title font-bold">UpInside nas redes sociais:</h1>
                    <ul>
                        <li><a class="shorticon shorticon-facebook" target="_blank" rel="nofollow" title="UpInside Treinamentos no Facebook" href="http://www.facebook.com/upinside">Facebook</a></li>
                        <li><a class="shorticon shorticon-google" target="_blank" rel="nofollow" title="UpInside Treinamentos no Google Plus" href="http://plus.google.com/+upinside">Google+</a></li>
                        <li><a class="shorticon shorticon-twitter" target="_blank" rel="nofollow" title="UpInside Treinamentos no Twitter" href="http://www.twitter.com/UpInsideBr">Twitter</a></li>
                    </ul>
                </article>
                
                <article class="main_ead box box-medium last">
                    <h1 class="fontzero">Plataforma UpInside</h1>
                    
                    <p class="shorticon shorticon-config"><b>Plataforma EAD:</b> <a title="Plataforma EAD da UpInside" href="http://www.upinside.com.br/">www.upinside.com.br</a></p>
                    <p class="shorticon shorticon-mail"><b>E-mail:</b> <a title="Envie um email" href="mailto:cursos@upinside.com.br">cursos@upinside.com.br</a></p>
                    <hr>
                    <p class="plast">&copy; <?= date('Y'); ?> - UpInside Treinamentos, Todos os Direitos Reservados!</p>                    
                </article>
                
                <div class="clear"></div>
            </section>
        </footer>        
    </body>
</html>
