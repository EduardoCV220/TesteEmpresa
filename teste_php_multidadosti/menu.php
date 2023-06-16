<?php
function criarMenu($guias_menu)
{
    ksort($guias_menu);

    $menu = '';

    foreach ($guias_menu as $guia_menu => $dados) {
        sort($dados);
        $menu .= "
        <li class=''>
            <a href='javascript:;'>";
            if($guia_menu == "relatorio"){
                $menu .= "<i class='fa fa-file-text'></i>";
            }
            else if($guia_menu == "cadastro"){
                $menu .= "<i class='fa fa-bar-chart-o'></i>"; 
            }
                $menu .=    "<span class='title'>
                    " . $guia_menu . "
                    </span>
                <span class='arrow '>
                </span>
            </a>
            <ul class='sub-menu'>";

        foreach ($dados as $dado) {
            $menu .= "
                <li>
                    <a href='#'>" . $dado . "</a>
                </li>
          ";
        }
        $menu .= "
            </ul>
    </li>
    ";
    }


    return $menu;
}
?>



<ul class="page-sidebar-menu">
    <li class="sidebar-toggler-wrapper">
        <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
        <div class="sidebar-toggler hidden-phone">
        </div>
        <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
    </li>
    <li class="sidebar-search-wrapper">
        <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
        <form class="sidebar-search" action="extra_search.html" method="POST">
            <div class="form-container">
                <div class="input-box">
                    <a href="javascript:;" class="remove"></a>
                    <input type="text" placeholder="Search..." />
                    <input type="button" class="submit" value=" " />
                </div>
            </div>
        </form>
        <!-- END RESPONSIVE QUICK SEARCH FORM -->
    </li>
    <li class="start active ">
        <a href="index.php">
            <i class="fa fa-home"></i>
            <span class="title">
                Dashboard
            </span>
            <span class="selected">
            </span>
        </a>
    </li>
    <?php

    $guias_menu = ['cadastro' => array('cliente', 'fornecedor', 'usuário', 'produtos', 'perfil de acesso'), 'relatorio' => array('cliente', 'faturamento', 'produtos')];

    $menu = criarMenu($guias_menu);

    echo ($menu);
    ?>
</ul>
