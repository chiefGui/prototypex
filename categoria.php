<?php include 'admin/variables.php'; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns:fb="http://ogp.me/ns/fb#">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
        <title>Proway</title>
        <link rel="stylesheet" type="text/css" href="stylesheet/Base.css" />
        <link rel="stylesheet" type="text/css" href="stylesheet/Main.css" />
        <link rel="stylesheet" type="text/css" href="stylesheet/Inside.css" />
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <meta property="fb:admins" content="100002206277619"/>
    </head>
    <html>
        <body>
            <?php
            require 'src/facebook.php';

            $facebook = new Facebook(array(
                'appId' => '552716314773080',
                'secret' => '474d7a280abb64190b324287310972f2'
            ));
            ?>

            <div class="wrapper">
                <div onClick="javascript:window.open('<?php echo $links[0]; ?>');" class="banner"></div>
                
                <div class="container clearfix">
                    <div class="breadcrumb">
                        <a class="back-link" href="index.php">&larr; Voltar</a>
                    </div>
                    <div class="courses-header">
                        <h1 class="float-left">Próximos cursos agendados para "<?php echo $_GET['nome']; ?>"</h1>
                        <ul class="float-right">
                            <li>Ordenando por:</li>
                            <li class="active"><a href="#">Data</a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>

                    <div class="courses-container">
                        <ul class="course-list">
                            <?php
                            $categoria = isset($_GET['nome']) ? $_GET['nome'] : false;

                            $xml = simplexml_load_file("http://www.proway.com.br/cursos/facebook/facebook.xml");
                            $xmlContent = $xml->xpath("/cursos/curso[categoria='{$categoria}']");

                            foreach ($xmlContent as $curso) {
                                $arrCurso[] = $curso;
                                $arrInicioCurso[] = DateTime::createFromFormat("d/m/Y", $curso->inicio);
                            }

                            if (!isset($arrCurso)) {
                                echo "<p style='padding: 25px 0;'>Não há cursos agendados para esta categoria.</p>";
                            } else {
                                array_multisort($arrInicioCurso, SORT_ASC, $arrCurso);

                                for ($i = 0; $i < count($arrCurso); $i++):
                                    $id = $arrCurso[$i]->id;
                                    $nome = $arrCurso[$i]->nome;
                                    $categoria = $arrCurso[$i]->categoria;
                                    $inicio = $arrCurso[$i]->inicio;
                                    $periodo = $arrCurso[$i]->periodo;
                                    $local = $arrCurso[$i]->local;

                                    switch ($categoria) {
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

                                    <li class="course-item">
                                        <div class="course-content float-left">
                                            <div class="wrap-button float-left">
                                                <a class="main-button <?php echo $categoryColorClass; ?>" href="categoria.php?nome=<?php echo $categoria; ?>"><?php echo $categoria; ?></a>
                                            </div>
                                            <div class="course-description float-left">
                                                <p class="course-text">
                                                    <?php echo $nome; ?>
                                                </p>
                                                <ul>
                                                    <li> <span class="info">Início:</span> <?php echo $inicio; ?> </li>
                                                    <li> <span class="info">Período:</span> <?php echo $periodo; ?></li>
                                                    <li> <span class="info">Local:</span> <?php echo $local; ?></li>
                                                </ul>
                                            </div>
                                            <div class="subscribe float-right">
                                                <p> <a href="http://interno.proway.com.br/cursos/cursos_inscricao.asp?CodCurso=<?php echo $id; ?>&Curso=<?php echo $id; ?>" target="_blank"> Faça sua pré-inscrição </a></p>
                                                <p> <a href="curso.php?id=<?php echo $id; ?>"> <span class="plus">+</span>Mais informações</a></p>
                                            </div>
                                        </div>
                                    </li>
                                <?php
                                endfor;
                            }
                            ?>
                        </ul>
                        <div class="clearfix"></div>
                    </div>

                    <ul class="bottom-menu">
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