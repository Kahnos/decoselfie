<?php
    require_once("assets/config.php");
    require_once(VIEWS_PATH . "/header.php");
?>

    <title> decoSelfie - Creación y compra </title>

    <!---------- Body ---------->
    <div class="container" id="creation-body">
        <div id="steps">
            <h3>Orientación</h3>
            <step>
                <?php
                    require_once(VIEWS_PATH . "/orientation-step.php");
                ?>
            </step>
            <h3>Patrón externo</h3>
            <step>
                <?php
                    require_once(VIEWS_PATH . "/external-pattern-step.php");
                ?>
            </step>
            <h3>Patrón interno</h3>
            <step>
                <?php
                    require_once(VIEWS_PATH . "/internal-pattern-step.php");
                ?>
            </step>
            <h3>Subir imagen</h3>
            <step>
                <?php
                    require_once(VIEWS_PATH . "/image-upload-step.php");
                ?>
            </step>
            <h3>Vista final</h3>
            <step>
                <?php
                    require_once(VIEWS_PATH . "/final-preview-step.php");
                ?>
            </step>
            <h3>Compra</h3>
            <step>
                <?php
                    require_once(VIEWS_PATH . "/payment-step.php");
                ?>
            </step>
        </div>
    </div>

<?php
    require_once(VIEWS_PATH . "/footer.php");
?>
