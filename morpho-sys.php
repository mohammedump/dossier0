<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" integrity="sha512-ou/YWnaN7o9J0UZBw3xDUbGBQiKeSIpa9PTKM/bwLJWOr+GFJ7UCXJUjVzBh1Ywnz0g3Ga6rVGm/DV4Cy9kGqA==" crossorigin="anonymous" />
    <link rel="icon" href="assetes/images/tools.png" type="image/png">
    <link rel="stylesheet" href="assetes/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet">

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
            <div class="col move-down-top">
    <div class="card-deck equal-card-height">
        <div class="card">
            <div class="card-body text-center">
                <img src="assetes/images/z3-removebg-preview.png" width="23%" class="mb-3">
                <h4 class="card-title">Source</h4>
                <p class="card-text">You have the opportunity to download the <strong>source code</strong> for AlKhalil Morpho Sys.</p>
                <a href="traitement/AlkhalilMorphSys2.zip" class="btn btn-primary">Download Source</a>
            </div>
        </div>
        <div class="card">
            <div class="card-body text-center">
                <img src="assetes/images/z2-removebg-preview.png" width="21%" class="mb-3">
                <h4 class="card-title">Jar</h4>
                <p class="card-text">You have the opportunity to download the <strong>JAR file</strong> for AlKhalil Morpho Sys.</p>
                <a href="traitement/AlkhalilMorphSys2.jar" class="btn btn-primary">Download JAR</a>
            </div>
        </div>
        <div class="card">
            <div class="card-body text-center">
                <img src="assetes/images/z1-removebg-preview.png" width="20%" class="mb-3">
                <h4 class="card-title">Rest API</h4>
                <p class="card-text">You have the opportunity to download the <strong>REST API</strong> for AlKhalil Morpho Sys.</p>
                <a href="traitement/web-API-alkhalilAnalyzer-2.0.zip" class="btn btn-primary">Download API</a>
            </div>
        </div>
    </div>
</div>

        </div>

        <div class="mb-4"></div>
        <div class="anlyse1 mb-4">
            <div class="nine">
                <h1>ALKHALIL Demo<span>
                        for AlKhalil Morpho Sys</span></h1>
            </div>
            <div class="img_tl">
                <img src="assetes/images/sty-r.png" alt="" style="width: 10%; height: 10%;">
            </div>
            <!--p class="ppp"> أكتب النص هنا</p-->
            <div class="form-group d-flex flex-column align-items-center justify-content-center">
                <textarea class="form-control" id="myTextarea" rows="3" style="width: 100%; text-align: right;">
        المنظمة العربية للتربية والثقافة والعلوم هي منظمة متخصصة، مقرها تونس، تعمل في نطاق جامعة الدول العربية
     </textarea>
                <button class="btn btn-secondary mt-3" id="cop">analyser</button>
                <div id="loadingIndicator" style="display: none;">
                    <div class="spinner-border text-primary" role="status">
                        <span class="visually-hidden">Chargement en cours...</span>
                    </div>
                </div>

            </div>

        </div>

        <div class="form-group mb-4" id="contenuTextarea">
            <div class="table-responsive">
                <div id="result">

                </div>
            </div>
            <?php include "assetes/js/alkhalil.php" ?>
        </div>
        
 <div class="dw mb-4" style="margin-bottom: 400px;">
    <div class="row">
        <div class="col-md-12">
            <div class="six">
                <h1 class="mb-3">RESTful Web API Code Snippets<span class="d-block">for AlKhalil Morpho Sys</span></h1>
                <p class="mb-4">
                    API code examples in popular programming languages such as Java, Python. These code snippets allow
                    you to effectively utilize the API and integrate it into your projects for the AlKhalil Morpho Sys
                    module.
                </p>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="java-tab" data-toggle="tab" href="#java" role="tab" aria-controls="java" aria-selected="true">Java</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="python-tab" data-toggle="tab" href="#python" role="tab" aria-controls="python" aria-selected="false">Python</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="java" role="tabpanel" aria-labelledby="java-tab">
                            <div class="inner">
                                <div class="test-icon text-center">
                                    <span class="icon" id="icon22" style="font-size: 4rem;"><i class="bi bi-filetype-java bi-4x"></i></span> <!-- Java icon -->
                                </div>
                                <div class="col-md-12">
                                <pre id="language-java" class="code-block"style="height: 400px; overflow-y: auto;">
                                    <code class="language-java">
<span class="token keyword">import</span> <span class="token namespace">java<span class="token punctuation">.</span>io<span
        class="token punctuation">.</span></span><span class="token class-name">BufferedReader</span><span
    class="token punctuation">;</span>
<span class="token keyword">import</span> <span class="token namespace">java<span
        class="token punctuation">.</span>io<span class="token punctuation">.</span></span><span
    class="token class-name">IOException</span><span class="token punctuation">;</span>
<span class="token keyword">import</span> <span class="token namespace">java<span
        class="token punctuation">.</span>io<span class="token punctuation">.</span></span><span
    class="token class-name">InputStreamReader</span><span class="token punctuation">;</span>
<span class="token keyword">import</span> <span class="token namespace">java<span
        class="token punctuation">.</span>io<span class="token punctuation">.</span></span><span
    class="token class-name">UnsupportedEncodingException</span><span class="token punctuation">;</span>
<span class="token keyword">import</span> <span class="token namespace">java<span
        class="token punctuation">.</span>net<span class="token punctuation">.</span></span><span
    class="token class-name">HttpURLConnection</span><span class="token punctuation">;</span>
<span class="token keyword">import</span> <span class="token namespace">java<span
        class="token punctuation">.</span>net<span class="token punctuation">.</span></span><span
    class="token class-name">MalformedURLException</span><span class="token punctuation">;</span>
<span class="token keyword">import</span> <span class="token namespace">java<span
        class="token punctuation">.</span>net<span class="token punctuation">.</span></span><span
    class="token class-name">URL</span><span class="token punctuation">;</span>
<span class="token keyword">import</span> <span class="token namespace">java<span
        class="token punctuation">.</span>net<span class="token punctuation">.</span></span><span
    class="token class-name">URLEncoder</span><span class="token punctuation">;</span>
<span class="token keyword">import</span> <span class="token namespace">java<span class="token punctuation">.</span>nio<span class="token punctuation">.</span>charset<span class="token punctuation">.</span></span><span class="token class-name">StandardCharsets</span><span class="token punctuation">;</span>

<span class="token keyword">public</span> <span class="token keyword">class</span> <span class="token class-name">Exemple</span> <span class="token punctuation">{</span>

    <span class="token keyword">public</span> <span class="token keyword">static</span> <span class="token keyword">void</span> <span class="token function">main</span><span class="token punctuation">(</span><span class="token class-name">String</span><span class="token punctuation">[</span><span class="token punctuation">]</span> args<span class="token punctuation">)</span> <span class="token punctuation">{</span>
        <span class="token keyword">try</span> <span class="token punctuation">{</span>
            <span class="token class-name">String</span> baseUrl <span class="token operator">=</span> <span class="token string">"http://oujda-nlp-team.net:8081/api/alkhalil"</span><span class="token punctuation">;</span>
            <span class="token class-name">String</span> text <span class="token operator">=</span> <span class="token string">"############################"</span><span class="token punctuation">;</span>
            <span class="token comment">// Encodes the text parameter to be included as a query parameter</span>
            <span class="token class-name">String</span> encodedText <span class="token operator">=</span> <span class="token class-name">URLEncoder</span><span class="token punctuation">.</span><span class="token function">encode</span><span class="token punctuation">(</span>text<span class="token punctuation">,</span> <span class="token class-name">StandardCharsets</span><span class="token punctuation">.</span>UTF_8<span class="token punctuation">.</span><span class="token function">toString</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
            <span class="token class-name">String</span> apiUrl <span class="token operator">=</span> baseUrl <span class="token operator">+</span> <span class="token string">"?textinput="</span> <span class="token operator">+</span> encodedText<span class="token punctuation">;</span>

            <span class="token class-name">URL</span> apiURL <span class="token operator">=</span> <span class="token keyword">new</span> <span class="token function">URL</span><span class="token punctuation">(</span>apiUrl<span class="token punctuation">)</span><span class="token punctuation">;</span>
            <span class="token class-name">HttpURLConnection</span> connection <span class="token operator">=</span> <span class="token punctuation">(</span><span class="token class-name">HttpURLConnection</span><span class="token punctuation">)</span> apiURL<span class="token punctuation">.</span><span class="token function">openConnection</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
            connection<span class="token punctuation">.</span><span class="token function">setRequestMethod</span><span class="token punctuation">(</span><span class="token string">"POST"</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
            connection<span class="token punctuation">.</span><span class="token function">setRequestProperty</span><span class="token punctuation">(</span><span class="token string">"Content-Type"</span><span class="token punctuation">,</span> <span class="token string">"application/json"</span><span class="token punctuation">)</span><span class="token punctuation">;</span>

            <span class="token keyword">try</span> <span class="token punctuation">(</span><span class="token class-name">BufferedReader</span> reader <span class="token operator">=</span> <span class="token keyword">new</span> <span class="token class-name">BufferedReader</span><span class="token punctuation">(</span><span class="token keyword">new</span> <span class="token class-name">InputStreamReader</span><span class="token punctuation">(</span>connection<span class="token punctuation">.</span><span class="token function">getInputStream</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">)</span><span class="token punctuation">)</span><span class="token punctuation">)</span> <span class="token punctuation">{</span>
                <span class="token class-name">StringBuilder</span> response <span class="token operator">=</span> <span class="token keyword">new</span> <span class="token class-name">StringBuilder</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
                <span class="token class-name">String</span> line<span class="token punctuation">;</span>
                <span class="token keyword">while</span> <span class="token punctuation">(</span><span class="token punctuation">(</span>line <span class="token operator">=</span> reader<span class="token punctuation">.</span><span class="token function">readLine</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">)</span> <span class="token operator">!=</span> <span class="token keyword">null</span><span class="token punctuation">)</span> <span class="token punctuation">{</span>
                    response<span class="token punctuation">.</span><span class="token function">append</span><span class="token punctuation">(</span>line<span class="token punctuation">)</span><span class="token punctuation">;</span>
                <span class="token punctuation">}</span>
                <span class="token class-name">System</span><span class="token punctuation">.</span>out<span class="token punctuation">.</span><span class="token function">println</span><span class="token punctuation">(</span>response<span class="token punctuation">.</span><span class="token function">toString</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
            <span class="token punctuation">}</span> <span class="token keyword">finally</span> <span class="token punctuation">{</span>
                connection<span class="token punctuation">.</span><span class="token function">disconnect</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
            <span class="token punctuation">}</span>
        <span class="token punctuation">}</span> <span class="token keyword">catch</span> <span class="token punctuation">(</span><span class="token class-name">UnsupportedEncodingException</span> <span class="token operator">|</span> <span class="token class-name">MalformedURLException</span> e<span class="token punctuation">)</span> <span class="token punctuation">{</span>
            e<span class="token punctuation">.</span><span class="token function">printStackTrace</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
        <span class="token punctuation">}</span> <span class="token keyword">catch</span> <span class="token punctuation">(</span><span class="token class-name">IOException</span> e<span class="token punctuation">)</span> <span class="token punctuation">{</span>
            e<span class="token punctuation">.</span><span class="token function">printStackTrace</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
        <span class="token punctuation">}</span>
    <span class="token punctuation">}</span>
<span class="token punctuation">}</span>
						
						</code>



                                    </code>
                                </pre>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="python" role="tabpanel" aria-labelledby="python-tab">
                            <div class="code-wrapper">
                                <div class="test-icon text-center">
                                    <span class="icon" id="icon1" style="font-size: 4rem;"><i class="bi bi-filetype-py bi-4x"></i></span> <!-- Python icon -->
                                </div>
                                <div class="col-md-8 center-block">
                                <pre id="language-python" class="code-block" style="font-size: 0.9em; line-height: 1.5; overflow-x: auto;">
                                    <code class="language-python">
<span class="token keyword">import</span> requests

<span class="token comment"># Get result in XML format</span>
url <span class="token operator">=</span> <span class="token string">"http://oujda-nlp-team.net:8081/api/alkhalil"</span>
text_input <span class="token operator">=</span> <span class="token string">"############################"</span>

data <span class="token operator">=</span> <span class="token punctuation">{</span><span class="token string">"textinput"</span><span class="token punctuation">:</span> text_input<span class="token punctuation">}</span>
response <span class="token operator">=</span> requests<span class="token punctuation">.</span>post<span class="token punctuation">(</span>url<span class="token punctuation">,</span> data<span class="token operator">=</span>data<span class="token punctuation">)</span>

<span class="token keyword">if</span> response<span class="token punctuation">.</span>status_code <span class="token operator">==</span> <span class="token number">200</span><span class="token punctuation">:</span>
    result <span class="token operator">=</span> response<span class="token punctuation">.</span>text
    <span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string-interpolation"><span class="token string">f"Result in text format: </span><span class="token interpolation"><span class="token punctuation">{</span>result<span class="token punctuation">}</span></span><span class="token string">"</span></span><span class="token punctuation">)</span>
<span class="token keyword">else</span><span class="token punctuation">:</span>
    <span class="token keyword">print</span><span class="token punctuation">(</span><span class="token string">"Error during API request."</span><span class="token punctuation">)</span>
										
								</code>
                                    </code>
                                </pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




        <div class="dw" style="margin-bottom: 400px;">
            
        </div>







    </div>





    <div onclick="scrollToTop()" class="scrollTop">↑
    </div>
    <?php include "footer.php" ?>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script src="assetes/js/script2.js"></script>
    <script src="assetes/js/alkhalil.js"></script>
    <script src="assetes/js/script1.js"></script>
    <script src="assetes/js/main.js"></script>

</body>

</html>