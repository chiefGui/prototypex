<?php require_once 'variables.php'; ?>

<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Silmaq App</a>
    </div>
  </div>
</div>

<div class="container">
        <hr>

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <h4 class="text-center">Banner principal (790x220)</h4>
                </div>
                <div class="panel-body text-center">
                    <img src="http://vincae.com/prototypex/images/790x220.jpg">
                </div>
                <ul class="list-group list-group-flush text-center">
                    <form action="announces/save.php" method="post" enctype="multipart/form-data">
                        <li class="list-group-item">
                            <div class="form-group">
                                <input class="form-control" name="link" type="text" value="<?php echo $links[0]; ?>" />
                            </div>
                        </li>
                        <li class="list-group-item">
                                <div class="form-group">
                                                        <p class="text-left">Alterar imagem:</p>
                                                        <input type="file" name="file">
                                </div>
                        </li>
                </ul>
                <input name="category" type="hidden" value="1"/>
                <div class="panel-footer">
                    <button class="btn btn-lg btn-lg btn-primary" type="submit">Salvar</button>
                </div>
                </form>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center">
                        Banner primário (380x200)</h4>
                </div>
                <div class="panel-body text-center">
                    <img src="http://vincae.com/prototypex/images/380x200_1.jpg">
                </div>
                <ul class="list-group list-group-flush text-center">
                    <form action="announces/save.php" method="post" enctype="multipart/form-data">
                        <li class="list-group-item">
                            <div class="form-group">
                                <input class="form-control" name="link" type="text" value="<?php echo $links[1]; ?>" />
                            </div>
                        </li>
                        <li class="list-group-item">
                                <div class="form-group">
                                                        <p class="text-left">Alterar imagem:</p>
                                                        <input type="file" name="file">
                                </div>
                        </li>
                </ul>
                <input name="category" type="hidden" value="2" />
                <div class="panel-footer">
                    <button class="btn btn-lg btn-lg btn-primary" type="submit">Salvar</button>
                </div>
                </form>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center">
                        Banner secundário (380x200)</h4>
                </div>
                <div class="panel-body text-center">
                    <img src="http://vincae.com/prototypex/images/380x200_2.jpg">
                </div>
                <ul class="list-group list-group-flush text-center">
                    <form action="announces/save.php" method="post" enctype="multipart/form-data">
                        <li class="list-group-item">
                            <div class="form-group">
                                <input class="form-control" name="link" type="text" value="<?php echo $links[2]; ?>" />
                            </div>
                        </li>
                        <li class="list-group-item">
                                <div class="form-group">
                                                        <p class="text-left">Alterar imagem:</p>
                                                        <input type="file" name="file">
                                </div>
                        </li>
                </ul>
                <input name="category" type="hidden" value="3"/>
                <div class="panel-footer">
                    <button class="btn btn-lg btn-lg btn-primary" type="submit">Salvar</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
