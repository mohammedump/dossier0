<?php
if (isset($_POST['data'])) {
    $data = $_POST['data'];

    // Sanitize
    $data = trim($data);
    if (empty($data)) {
        echo 'Input data is empty';
        exit; 
    }
    $postData = http_build_query(array(
        "textinput" => $data
    ));

    $url = 'http://oujda-nlp-team.net:8082/api/pos';
    $options = array(
        'http' => array(
            'header' => "Content-type: application/x-www-form-urlencoded\r\n",
            'method' => 'POST',
            'content' => $postData,
            'timeout' => 10 // Timeout in seconds
        )
    );
    $context = stream_context_create($options);

    $result = file_get_contents($url, false, $context);
    
    if ($result !== false) {
        // Parse the XML response
        $xml = simplexml_load_string($result);

        if (isset($xml->Analyze->Info)) {
            echo '<div class="table-responsive" style="margin-bottom: 50px;">';
            echo '<table class="table table-bordered table-striped">';
            echo '<thead class="thead-dark">';
            echo '<tr>';
            echo '<th style="text-align: right;">English Tag</th>';
            echo '<th style="text-align: right;">الوسم</th>';
            echo '<th style="text-align: right;">الكلمة</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';

            foreach ($xml->Analyze->Info as $info) {
                if (isset($info->Word)) {
                    $wordCount = count($info->Word);
                    for ($i = 0; $i < $wordCount; $i++) {
                        echo '<tr>';
                        echo '<td style="text-align: right;">' . $info->SerieTagAng[$i] . '</td>';
                        echo '<td style="text-align: right;">' . $info->SerieTagAra[$i] . '</td>';
                        echo '<td style="text-align: right;">' . $info->Word[$i] . '</td>';
                        echo '</tr>';
                    }
                }
            }

            echo '</tbody>';
            echo '</table>';
            echo '</div>';
        } else {
            echo '<p>No data available</p>';
        }
    } else {
        echo 'Error calling the web service.';
    }
} else {
    echo '';
}
?>
