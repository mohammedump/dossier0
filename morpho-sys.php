<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assetes/images/tools.png" type="image/png">
    <link rel="stylesheet" href="assetes/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <title>tools</title>
</head>
<style>
    .move-down-top {
        margin-top: 69px;
    }
</style>

<body>
    <?php include "topnav.php" ?>
    <?php include "navbar.php" ?>

    <div class="container">
        <div class="row">
            <div class="col-md-12 move-down-top">
                <p class="fs-5 text-center text-md-start">
                    AlKhalil Morpho Sys is a morphosyntactic analyzer of standard Arabic words. It analyses both non diacritized Arabic words and partially or completely diacritized words. The analysis is done out of context and the results for a given word are:
                </p>
                <ul class="fs-5 text-center text-md-start">
                    <li>the possible diacritization forms of the word,</li>
                    <li>for each possible diacritization form, the system provides,</li>
                    <li> the segmentation of the word in proclitic + stem + enclitic,</li>
                    <li>its POS tag, </li>
                    <li>its syntactic state (case for nouns and mood for verbs),</li>
                    <li> its lemma and its stem accompanied by their patterns;</li>
                    <li> its root (only if the word is a derivative noun or derivative verb)</li>
                </ul>
            </div>
            <div class="col-md-12 move-down-top">
                <div class="card-deck">
                    <div class="card" id="card2">
                        <div id="icon">
                            <img src="assetes/images/z3-removebg-preview.png" width="23%">
                        </div>
                        <h4 id="bdC">Source</h4>
                        <p id="bdC1">You have the opportunity to download the <span style="font-weight: bold;">source code</span> for AlKhalil Morpho Sys.</p>
                        <a href="http://alkhalil.oujda-nlp-team.net/AlKhalil-MorphoSys.php" class="btn_demo">Download source</a>
                    </div>

                    <div class="card" id="card3">
                        <div id="icon2" style="text-align: center;">
                            <img src="assetes/images/z2-removebg-preview.png" width="21%">
                        </div>
                        <h4 id="bdC">Jar</h4>
                        <p id="bdC1">You have the opportunity to download the <span style="font-weight: bold;">jar file</span> for AlKhalil Morpho Sys. </p>
                        <a href="http://alkhalil.oujda-nlp-team.net/AlKhalil-MorphoSys.php" class="btn_demo">Download Jar</a>

                    </div>
                    <div class="card" id="card4">
                        <div id="icon">
                            <img src="assetes/images/z1-removebg-preview.png" width="20%">
                        </div>
                        <h4 id="bdC">Demo</h4>
                        <p id="bdC1">On this page, you have two options: <span style="font-weight: bold;"> view Demo</span> and <span style="font-weight: bold;"> use Web API </span> for AlKhalil Morpho Sys.</p>
                        <a href="http://alkhalil.oujda-nlp-team.net/AlKhalil-MorphoSys.php" class="btn_demo">Download Demo</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mb-4"></div>
    <div class="anlyse1 mb-4">
        <div class="nine">
            <h1>ALKHALIL Demo<span>for AlKhalil Morpho Sys</span></h1>
        </div>
        <div class="img_tl">
            <img src="assetes/images/sty-r.png" alt="" style="width: 10%; height: 10%;">
        </div>
        <!--p class="ppp"> أكتب النص هنا</p-->
        <div class="form-group">
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">
المنظمة العربية للتربية والثقافة والعلوم هي منظمة متخصصة، مقرها تونس، تعمل في نطاق جامعة الدول العربية
            </textarea>
            <button class="btn btn-secondary" onclick="afficherContenu()">Envoyer</button>
        </div>
    </div>
    <div class="form-group" id="contenuTextarea">
        <div id="contenuDynamique"></div>
    </div>
    <div onclick="scrollToTop()" class="scrollTop">↑
    </div>
    <script src="assetes/js/main.js"></script>
    <script src="assetes/js/scripts.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <?php include "footer.php" ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>

</html>