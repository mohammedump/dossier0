<?php
if(isset($_POST['data'])) {
    $data = $_POST['data'];
    
    $data = array(
        "textinput" => $data
    );

    $url = 'http://oujda-nlp-team.net:8081/api/alkhalilHTML';


    $options = array(
        'http' => array(
            'header' => "Content-type: application/x-www-form-urlencoded\r\n",
            'method' => 'POST',
            'content' => http_build_query($data)
        )
    );

    $context = stream_context_create($options);

    $result = file_get_contents($url, false, $context);
    if ($result !== false) {
        
        echo '<link rel="stylesheet" type="text/css" href="assetes/css/table-style.css">';

        ?>
        <div class="table-responsive"style="margin-bottom: 100px;">
        <table class="right-aligned-table">
                <?php echo $result; ?>
            </table>
        </div>
        <?php
    } else {
        echo 'Erreur lors de l\'appel au service web.';
    }
} else {
    echo '';
}
?>
