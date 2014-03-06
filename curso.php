<?php include 'admin/variables.php'; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns:fb="http://ogp.me/ns/fb#">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
        <title>Proway</title>
        <link rel="stylesheet" type="text/css" href="stylesheet/Base.css" />
        <link rel="stylesheet" type="text/css" href="stylesheet/Main.css" />
        <link rel="stylesheet" type="text/css" href="stylesheet/Inside.css" />
        <meta property="fb:admins" content="100005448944299,100002206277619" />
        <meta property="fb:app_id" content="450838794996242" />
    </head>
    <script src="http://connect.facebook.net/en_US/all.js#xfbml=1">
    </script>
    <body>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1&appId=450838794996242";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

        <div class="wrapper">
            <div onClick="javascript:window.open('<?php echo $links[0]; ?>');" class="banner"></div>

            <?php
            $xml = simplexml_load_file("http://www.proway.com.br/cursos/facebook/facebook.xml");
            $xmlContent = $xml->xpath("/cursos/curso[id='{$_GET['id']}']");
            foreach ($xmlContent as $curso)
                ;

            switch ($curso->categoria) {
                case "Web":
                    $categoryColorClass = "green";
                    break;
                case "Artes Gráficas":
                    $categoryColorClass = "orange";
                    break;
                case "Banco de dados":
                    $categoryColorClass = "blue";
                    break;
                case "Servidores e Redes":
                    $categoryColorClass = "pink";
                    break;
                case "Desenvolvimento":
                    $categoryColorClass = "lightblue";
                    break;
                case "Governança de TI e projetos";
                    $categoryColorClass = "lightorange";
                    break;
                case "Comercial":
                    $categoryColorClass = "acqua";
                    break;
                case "Engenharia e arquitetura":
                    $categoryColorClass = "red";
                    break;
                case "Iniciantes e usuários av.":
                    $categoryColorClass = "purple";
                    break;
            }
            ?>

            <div class="container">
                <div class="breadcrumb">
                    <a class="back-link" href="index.php">&larr; Voltar</a>
                </div>

                <p class="category"><a href="categoria.php?nome=<?php echo $curso->categoria; ?>" class="course-title <?php echo $categoryColorClass; ?>"><?php echo $curso->categoria; ?></a></p>

                <h1 class="main-description"><?php echo $curso->nome; ?></h1>

                <ul class="info-list float-left">
                    <li> <span class="info">Início:</span> <?php echo $curso->inicio; ?></li>
                    <li> <span class="info">Período:</span> <?php echo $curso->periodo; ?></li>
                    <li> <span class="info">Local:</span> <?php echo $curso->local; ?></li>
                    <li> <span class="info">Carga horária:</span> <?php echo $curso->cargaHoraria; ?>h</li>
                </ul>
                <ul class="facebook-actions float-right">
                    <li><div class="fb-like" data-href="http://www.proway.com.br/index.php?curso=<?php echo $curso->id; ?>" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true" data-font="arial"></div></li>
                </ul>

                <div class="objectives float-left">
                    <p class="float-left">
                        <span class="info">Objetivos:</span>
                    </p>	

                    <p class="main-text float-right">
<?php echo $curso->objetivos; ?>
                    </p>
                </div>

                <div class="objectives float-left">
                    <p>
                        <span class="info">Público alvo:</span>
                    </p>	

                    <p class="main-text">
<?php echo $curso->publicoAlvo; ?>
                    </p>
                </div>

                <div class="objectives float-left">
                    <p>
                        <span class="info">Pré-requisitos:</span>
                    </p>	

                    <p class="main-text">
<?php echo $curso->preRequisitos; ?>
                    </p>
                </div>

                <div class="objectives float-left">
                    <p>
                        <span class="info">Conteúdo programático:</span>
                    </p>	

                    <p class="main-text">
                        <?php $pattern = "/((((http|https|ftp|ftps)\:\/\/)|www\.)[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,4}(\/\S*)?)/";
                            if(preg_match($pattern, $curso->conteudoProgramatico, $url)) {
                                   echo preg_replace($pattern, "<a href=\"{$url[0]}\" target=\"_blank\">{$url[0]}</a>", $curso->conteudoProgramatico);
                            } else {
                                   echo $curso->conteudoProgramatico;
                            } ?>
                    </p>
                </div>

                <div class="comments">
                    <fb:comments href="https://proway.herokuapp.com/curso.php?id=<?php echo $curso->id; ?>" width="790" num_posts="10"></fb:comments>
                </div>

                <ul class="bottom-menu">
                    <li class="green float-left">
                        <a href="index.php">Clique aqui para visualizar mais turmas agendadas</a>
                    </li>

                    <li class="orange">
                        <a href="http://www.facebook.com/messages/210811362304177" target="_blank">Dúvidas? Clique aqui</a>
                    </li>

                    <li class="blue float-right">
                        <a href="http://www.proway.com.br/index.php?pagina=7" target="_blank">Conheça todos os cursos da <span class="proway">ProWay</span> clicando aqui!</a>
                    </li>
                </ul>

                <div onClick="javascript:window.open('<?php echo $links[1]; ?>');" class="sub-banner first float-left">
                </div>

                <div onClick="javascript:window.open('<?php echo $links[2]; ?>');" class="sub-banner second float-right">
                </div>
            </div>
        </div>
    </body>
</html>