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

<body>
    <?php include "topnav.php" ?>
    <?php include "navbar.php" ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <br /> <br />
                <p style="font-size: 22px">
                This POS tagger was developed for Arabic texts taking into account the agglutination structure very 
                        present in the Arabic language. It uses a very rich tagset containing compound tags that provide 
                        syntactic information on the clitics attached to words. This system uses a probabilistic model
                        and the Alkhalil_Morpho_Sys analyzer to identify the correct tags in the context. 
                        To build the model, we used 90% of the Nemlar labeled corpus, consisting of approximately 
                        500,000 words, during the training phase, and the remaining 10% was devoted to the testing
                        phase. The precision obtained is around 94%.
                </p>

                <p style="font-size: 22px">
                For further details, please check the following paper :
                <ul>
                    <li style="font-size: 22px; color: blue;">Ababou, N.; Mazroui. A.;  “A hybrid Arabic POS tagging for simple and compound morphosyntactic tags”. International Journal of Speech Technology 2016, vol. 19, no 2, p. 289-302</li>
                </ul>
                </p>
                <div class="col-md-12 move-down-top">
                    <div class="card-deck">
                        <div class="card" id="card2">
                            <div id="icon">
                                <img src="assetes/images/z3-removebg-preview.png" width="23%">
                            </div>
                            <h4 id="bdC">Source</h4>
                            <p id="bdC1">You have the opportunity to download the <span style="font-weight: bold;">source code</span> for POS-TAGGER from Alkhalil official website.</p>
                            <a href="http://alkhalil.oujda-nlp-team.net/AlKhalil-MorphoSys.php" class="btn_demo">Download source</a>
                        </div>

                        <div class="card" id="card3">
                            <div id="icon2" style="text-align: center;">
                                <img src="assetes/images/z2-removebg-preview.png" width="21%">
                            </div>
                            <h4 id="bdC">Jar</h4>
                            <p id="bdC1">You have the opportunity to download the <span style="font-weight: bold;">jar file</span> for POS-TAGGER from Alkhalil official website. </p>
                            <a href="http://alkhalil.oujda-nlp-team.net/AlKhalil-MorphoSys.php" class="btn_demo">Download Jar</a>

                        </div>
                        <div class="card" id="card4">
                            <div id="icon">
                                <img src="assetes/images/z1-removebg-preview.png" width="20%">
                            </div>
                            <h4 id="bdC">Demo</h4>
                            <p id="bdC1">On this page, you have two options: <span style="font-weight: bold;"> view Demo</span> and <span style="font-weight: bold;"> use Web API </span> for POS-TAGGER from Alkhalil official website.</p>
                            <a href="http://alkhalil.oujda-nlp-team.net/AlKhalil-MorphoSys.php" class="btn_demo">Download Demo</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="mb-4"></div>
        <div class="anlyse1 mb-4">
            <div class="nine">
                <h1>ALKHALIL Demo<span>FOR POS-TAGGER MODULE</span></h1>
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
    <?php include "footer.php" ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>

</html>