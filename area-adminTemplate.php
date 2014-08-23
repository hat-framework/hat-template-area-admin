<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php 
        $this->LoadHead(); 
        $this->Html->LoadJquery();
        $this->Html->LoadCss(array("reset", "basic", "enchancements", "layout", "fonts", "message", "menu", "formulario", "area-admin", "table"));
?>
<body>
    <div id="tudo">
        <!--header -->
        <div id="header-wrap">
            <div id="nav">
                <style>.menu_superior{float: right;}</style>
            </div>
            <div id="header">
                <h1 id="logo-text">
                    <a href="<?php echo SITE_URL; ?>" title=""><?php echo SITE_NOME; ?></a>
                </h1>
                <p id="slogan"><?php echo SITE_SLOGAN; ?></p>
            </div>

        </div>

        <!-- content-outer -->
        <div id="content-wrap">

           <!-- content -->
           <div id="content">
               <div id="response"><?php $this->LoadMessages(); ?></div>
                <!-- main -->
                <div id="esq">
                    <?php
                    if(isset($module_menu)){
                        $this->LoadJsPlugin("menu/accordion", "macordion");
                        $this->macordion->draw($module_menu);
                    }
                    $this->LoadRegion("menu-lateral");
                    ?>
                </div>

                <div id="main-dir">
                    <div id="main">
                        <?php 
                        $this->LoadRegion("body-top");
                        $this->Load('body'); 
                    ?>
                    </div>
                </div>

            <!-- content -->
            </div>
            <div style="clear: both;"></div>
        <!-- /content-out -->
        </div>

        
        <!-- footer-outer -->
        <div id="footer-outer">Todos os direitos reservados</div>
    </div>
</body>
</html>