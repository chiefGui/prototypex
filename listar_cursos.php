<?php
$cursos = simplexml_load_file("http://www.proway.com.br/cursos/facebook/facebook.xml");

require 'src/xsort.php';

foreach ($cursos->curso as $curso) {
    $arrCurso[] = $curso;
    $arrInicioCurso[] = DateTime::createFromFormat("d/m/Y", $curso->inicio);
}

array_multisort($arrInicioCurso, SORT_ASC, $arrCurso);

for ($i = 3; $i <= ($cursos->count() - 1); $i++):
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

    <li class="course-item plus">
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

<?php endfor; ?>