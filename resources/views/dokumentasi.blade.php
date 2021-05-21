<!doctype html><html lang="en"><head><meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width,initial-scale=1"><meta name="top-bar" content="FFFFFF"><meta name="highlight" content="EF5B25"><meta name="right-sidebar" content="303030"><meta name="logo" content="https://res.cloudinary.com/postman/image/upload/t_team_logo_pubdoc/v1/team/d343367b9b11f64f9fbd966f639cb30de7099b3b30d28063b4170ccf29d711a9"><meta name="run-js" content="https://run.pstmn.io/button.js"><meta name="run-css" content="https://run.pstmn.io/button.css"><meta name="environmentUID" content="-"><meta name="collection-info-public" content="true"><meta name="ownerId" content="15741808"><meta name="publishedId" content="TzRa7jgz"><meta name="collectionId" content="15741808-b41ed255-9e9e-40b2-a1e8-115167fa61b8"><meta name="versionTagId" content="latest"> <meta name="description" content="Selamat datang di Dokumentasi API Daftar Kabupaten &amp;amp; Kota di Jawa Timur.

Berdasarkan prinsip REST, API Daftar Kabupaten &amp;amp; Kota di Jawa Timur akan menampilkan metadata JSON yang berisi nama nama Kabupaten dan Kota yang ada di Jawa Timur beserta dengan Bupati/Walikota, Luas Wilayah, Jumlah Penduduk, Jumlah Kecamatan, desa, &amp;amp; Kelurahan, Kepadatan, Lambang, dan Peta Lokasi.

Alamat dasar dari API ini adalah:
http://localhost/project-2-MSRanggaS/public/api/jatim"><meta name="documentationLayout" content="classic-double-column"><meta name="generator" content="Postman Documenter"><title>Daftar Kabupaten &amp; Kota di Jatim</title> <meta name="languages" content="[{&quot;key&quot;:&quot;csharp&quot;,&quot;label&quot;:&quot;C#&quot;,&quot;variant&quot;:&quot;RestSharp&quot;},{&quot;key&quot;:&quot;curl&quot;,&quot;label&quot;:&quot;cURL&quot;,&quot;variant&quot;:&quot;cURL&quot;},{&quot;key&quot;:&quot;dart&quot;,&quot;label&quot;:&quot;Dart&quot;,&quot;variant&quot;:&quot;http&quot;},{&quot;key&quot;:&quot;go&quot;,&quot;label&quot;:&quot;Go&quot;,&quot;variant&quot;:&quot;Native&quot;},{&quot;key&quot;:&quot;http&quot;,&quot;label&quot;:&quot;HTTP&quot;,&quot;variant&quot;:&quot;HTTP&quot;},{&quot;key&quot;:&quot;java&quot;,&quot;label&quot;:&quot;Java&quot;,&quot;variant&quot;:&quot;OkHttp&quot;},{&quot;key&quot;:&quot;java&quot;,&quot;label&quot;:&quot;Java&quot;,&quot;variant&quot;:&quot;Unirest&quot;},{&quot;key&quot;:&quot;javascript&quot;,&quot;label&quot;:&quot;JavaScript&quot;,&quot;variant&quot;:&quot;Fetch&quot;},{&quot;key&quot;:&quot;javascript&quot;,&quot;label&quot;:&quot;JavaScript&quot;,&quot;variant&quot;:&quot;jQuery&quot;},{&quot;key&quot;:&quot;javascript&quot;,&quot;label&quot;:&quot;JavaScript&quot;,&quot;variant&quot;:&quot;XHR&quot;},{&quot;key&quot;:&quot;c&quot;,&quot;label&quot;:&quot;C&quot;,&quot;variant&quot;:&quot;libcurl&quot;},{&quot;key&quot;:&quot;nodejs&quot;,&quot;label&quot;:&quot;NodeJs&quot;,&quot;variant&quot;:&quot;Axios&quot;},{&quot;key&quot;:&quot;nodejs&quot;,&quot;label&quot;:&quot;NodeJs&quot;,&quot;variant&quot;:&quot;Native&quot;},{&quot;key&quot;:&quot;nodejs&quot;,&quot;label&quot;:&quot;NodeJs&quot;,&quot;variant&quot;:&quot;Request&quot;},{&quot;key&quot;:&quot;nodejs&quot;,&quot;label&quot;:&quot;NodeJs&quot;,&quot;variant&quot;:&quot;Unirest&quot;},{&quot;key&quot;:&quot;objective-c&quot;,&quot;label&quot;:&quot;Objective-C&quot;,&quot;variant&quot;:&quot;NSURLSession&quot;},{&quot;key&quot;:&quot;ocaml&quot;,&quot;label&quot;:&quot;OCaml&quot;,&quot;variant&quot;:&quot;Cohttp&quot;},{&quot;key&quot;:&quot;php&quot;,&quot;label&quot;:&quot;PHP&quot;,&quot;variant&quot;:&quot;cURL&quot;},{&quot;key&quot;:&quot;php&quot;,&quot;label&quot;:&quot;PHP&quot;,&quot;variant&quot;:&quot;HTTP_Request2&quot;},{&quot;key&quot;:&quot;php&quot;,&quot;label&quot;:&quot;PHP&quot;,&quot;variant&quot;:&quot;pecl_http&quot;},{&quot;key&quot;:&quot;powershell&quot;,&quot;label&quot;:&quot;PowerShell&quot;,&quot;variant&quot;:&quot;RestMethod&quot;},{&quot;key&quot;:&quot;python&quot;,&quot;label&quot;:&quot;Python&quot;,&quot;variant&quot;:&quot;http.client&quot;},{&quot;key&quot;:&quot;python&quot;,&quot;label&quot;:&quot;Python&quot;,&quot;variant&quot;:&quot;Requests&quot;},{&quot;key&quot;:&quot;ruby&quot;,&quot;label&quot;:&quot;Ruby&quot;,&quot;variant&quot;:&quot;Net::HTTP&quot;},{&quot;key&quot;:&quot;shell&quot;,&quot;label&quot;:&quot;Shell&quot;,&quot;variant&quot;:&quot;Httpie&quot;},{&quot;key&quot;:&quot;shell&quot;,&quot;label&quot;:&quot;Shell&quot;,&quot;variant&quot;:&quot;wget&quot;},{&quot;key&quot;:&quot;swift&quot;,&quot;label&quot;:&quot;Swift&quot;,&quot;variant&quot;:&quot;URLSession&quot;}]"><link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,300,700,800" rel="stylesheet"><link rel="stylesheet" href="/styles/importer.ce135db7d00d7554b9d1.css"> <link rel="stylesheet" href="/styles/custom.scss?top-bar=FFFFFF&right-sidebar=303030&highlight=EF5B25&">  <link rel="shortcut icon" href="/favicon.ico"/>  <link rel="stylesheet" href="https://run.pstmn.io/button.css"> <script src="/js/messenger-setup.js" nonce="3j9rCdbgfuxlRpiHSG/0GEAj7zhRwrjUHgjnpfZretBKiWSI"></script> <meta property="og:title" content="Daftar Kabupaten &amp; Kota di Jatim"/> <meta property="og:description" content="Selamat datang di Dokumentasi API Daftar Kabupaten &amp;amp; Kota di Jawa Timur.

Berdasarkan prinsip REST, API Daftar Kabupaten &amp;amp; Kota di Jawa Timur akan menampilkan metadata JSON yang berisi nama nama Kabupaten dan Kota yang ada di Jawa Timur beserta dengan Bupati/Walikota, Luas Wilayah, Jumlah Penduduk, Jumlah Kecamatan, desa, &amp;amp; Kelurahan, Kepadatan, Lambang, dan Peta Lokasi.

Alamat dasar dari API ini adalah:
http://localhost/project-2-MSRanggaS/public/api/jatim"/> <meta property="og:site_name" content="Daftar Kabupaten &amp; Kota di Jatim"/> <meta property="og:url" content="https://documenter.getpostman.com/view/15741808/TzRa7jgz"/> <meta property="og:image" content="https://res.cloudinary.com/postman/image/upload/t_team_logo_pubdoc/v1/team/d343367b9b11f64f9fbd966f639cb30de7099b3b30d28063b4170ccf29d711a9"/>  <meta name="twitter:title" value="Daftar Kabupaten &amp; Kota di Jatim"/> <meta name="twitter:description" value="Selamat datang di Dokumentasi API Daftar Kabupaten &amp;amp; Kota di Jawa Timur.

Berdasarkan prinsip REST, API Daftar Kabupaten &amp;amp; Kota di Jawa Timur akan menampilkan metadata JSON yang berisi nama nama Kabupaten dan Kota yang ada di Jawa Timur beserta dengan Bupati/Walikota, Luas Wilayah, Jumlah Penduduk, Jumlah Kecamatan, desa, &amp;amp; Kelurahan, Kepadatan, Lambang, dan Peta Lokasi.

Alamat dasar dari API ini adalah:
http://localhost/project-2-MSRanggaS/public/api/jatim"/><meta name="twitter:card" content="summary"><meta name="twitter:domain" value="https://documenter.getpostman.com/view/15741808/TzRa7jgz"/> <meta name="twitter:image" content="https://res.cloudinary.com/postman/image/upload/t_team_logo_pubdoc/v1/team/d343367b9b11f64f9fbd966f639cb30de7099b3b30d28063b4170ccf29d711a9"/><meta name="twitter:label1" value="Last Update"/><meta name="twitter:data1" value=""/></head><body><div class="layout">
  <div class="top-bar" id="top-bar">
  </div>
  <div class="config-bar hidden-xs is-content-loading">
    <div class="top-bar-left">
  
      <div class="environment-selector">
         <div
          class="environment-dropdown hidden-xs active-environment"
            data-environment-id="0"
         >
           <div class="dropdown-container environment-dropdown-selector" data-dropdown-id=environment-dropdown-selector>
             <label class="dropdown-label"> ENVIRONMENT </label>
             <select class="dropdown-selector chosen-select" data-placeholder="Select environment...">
                   <option
                     value="0"
                     data-id="0"
                     
                     
                   >
                     No Environment
                   </option>
             </select>
           </div>
        </div>
      </div>
  
      <div class="layout-selector">
        <div class="dropdown-container layout-dropdown-selector" data-dropdown-id=layout-dropdown-selector>
          <label class="dropdown-label"> LAYOUT </label>
          <select class="dropdown-selector chosen-select" data-placeholder="Select Layout ...">
                <option
                  value="classic-single-column"
                  data-id="classic-single-column"
                  
                  
                >
                  Single Column
                </option>
                <option
                  value="classic-double-column"
                  data-id="classic-double-column"
                  
                   selected 
                >
                  Double Column
                </option>
          </select>
        </div>
      </div>
  
      <div class="language hidden-xs">
        <div class="language-selector">
          <div class="dropdown-container language-selector-dropdown" data-dropdown-id=language-selector-dropdown>
            <label class="dropdown-label"> LANGUAGE </label>
            <select class="dropdown-selector chosen-select" data-placeholder="Select Language ...">
                  <option
                    value="csharp - RestSharp - C#"
                    data-id="csharp - RestSharp - C#"
                    
                    
                  >
                    C# - RestSharp
                  </option>
                  <option
                    value="curl - cURL - cURL"
                    data-id="curl - cURL - cURL"
                    
                    
                  >
                    cURL - cURL
                  </option>
                  <option
                    value="dart - http - Dart"
                    data-id="dart - http - Dart"
                    
                    
                  >
                    Dart - http
                  </option>
                  <option
                    value="go - Native - Go"
                    data-id="go - Native - Go"
                    
                    
                  >
                    Go - Native
                  </option>
                  <option
                    value="http - HTTP - HTTP"
                    data-id="http - HTTP - HTTP"
                    
                    
                  >
                    HTTP - HTTP
                  </option>
                  <option
                    value="java - OkHttp - Java"
                    data-id="java - OkHttp - Java"
                    
                    
                  >
                    Java - OkHttp
                  </option>
                  <option
                    value="java - Unirest - Java"
                    data-id="java - Unirest - Java"
                    
                    
                  >
                    Java - Unirest
                  </option>
                  <option
                    value="javascript - Fetch - JavaScript"
                    data-id="javascript - Fetch - JavaScript"
                    
                    
                  >
                    JavaScript - Fetch
                  </option>
                  <option
                    value="javascript - jQuery - JavaScript"
                    data-id="javascript - jQuery - JavaScript"
                    
                    
                  >
                    JavaScript - jQuery
                  </option>
                  <option
                    value="javascript - XHR - JavaScript"
                    data-id="javascript - XHR - JavaScript"
                    
                    
                  >
                    JavaScript - XHR
                  </option>
                  <option
                    value="c - libcurl - C"
                    data-id="c - libcurl - C"
                    
                    
                  >
                    C - libcurl
                  </option>
                  <option
                    value="nodejs - Axios - NodeJs"
                    data-id="nodejs - Axios - NodeJs"
                    
                    
                  >
                    NodeJs - Axios
                  </option>
                  <option
                    value="nodejs - Native - NodeJs"
                    data-id="nodejs - Native - NodeJs"
                    
                    
                  >
                    NodeJs - Native
                  </option>
                  <option
                    value="nodejs - Request - NodeJs"
                    data-id="nodejs - Request - NodeJs"
                    
                    
                  >
                    NodeJs - Request
                  </option>
                  <option
                    value="nodejs - Unirest - NodeJs"
                    data-id="nodejs - Unirest - NodeJs"
                    
                    
                  >
                    NodeJs - Unirest
                  </option>
                  <option
                    value="objective-c - NSURLSession - Objective-C"
                    data-id="objective-c - NSURLSession - Objective-C"
                    
                    
                  >
                    Objective-C - NSURLSession
                  </option>
                  <option
                    value="ocaml - Cohttp - OCaml"
                    data-id="ocaml - Cohttp - OCaml"
                    
                    
                  >
                    OCaml - Cohttp
                  </option>
                  <option
                    value="php - cURL - PHP"
                    data-id="php - cURL - PHP"
                    
                    
                  >
                    PHP - cURL
                  </option>
                  <option
                    value="php - HTTP_Request2 - PHP"
                    data-id="php - HTTP_Request2 - PHP"
                    
                    
                  >
                    PHP - HTTP_Request2
                  </option>
                  <option
                    value="php - pecl_http - PHP"
                    data-id="php - pecl_http - PHP"
                    
                    
                  >
                    PHP - pecl_http
                  </option>
                  <option
                    value="powershell - RestMethod - PowerShell"
                    data-id="powershell - RestMethod - PowerShell"
                    
                    
                  >
                    PowerShell - RestMethod
                  </option>
                  <option
                    value="python - http.client - Python"
                    data-id="python - http.client - Python"
                    
                    
                  >
                    Python - http.client
                  </option>
                  <option
                    value="python - Requests - Python"
                    data-id="python - Requests - Python"
                    
                    
                  >
                    Python - Requests
                  </option>
                  <option
                    value="ruby - Net::HTTP - Ruby"
                    data-id="ruby - Net::HTTP - Ruby"
                    
                    
                  >
                    Ruby - Net::HTTP
                  </option>
                  <option
                    value="shell - Httpie - Shell"
                    data-id="shell - Httpie - Shell"
                    
                    
                  >
                    Shell - Httpie
                  </option>
                  <option
                    value="shell - wget - Shell"
                    data-id="shell - wget - Shell"
                    
                    
                  >
                    Shell - wget
                  </option>
                  <option
                    value="swift - URLSession - Swift"
                    data-id="swift - URLSession - Swift"
                    
                    
                  >
                    Swift - URLSession
                  </option>
            </select>
          </div>
        </div>
        <div id="language-settings" class="language-settings-icon">
          <div class="pm-icon-gear pm-icon-gear-- pm-icon-gear--md"></div>  </div>
      </div>
    </div>
  </div>


  
  <div role="dialog" class="modal " tabindex="-1"
     id="rawBodyModal" 
     aria-labelledby="documentation-request-modal" >
  
    <div class="modal-dialog" role="document">
      <div class="modal-header">
        <div class="title"></div>
        <button type="button" class="close btn-circle" data-dismiss="modal" aria-label="Close">
          <div>
            <span aria-hidden="true">×</span>
          </div>
        </button>
      </div>
  
      <div class="modal-content">
        <div class="modal-body">
            <div class="rawBodyModal">
                <pre><code class="body-block"></code></pre>
                <button class="btn btn-sm pull-right copy-request copy-request-modal" data-clipboard-target=""></button>
            </div>
        </div>
      </div>
    </div>
  </div>

  
  <div role="dialog" class="modal " tabindex="-1"
     id="snippetModal" 
     aria-labelledby="documentation-response-modal" >
  
    <div class="modal-dialog" role="document">
      <div class="modal-header">
        <div class="title"></div>
        <button type="button" class="close btn-circle" data-dismiss="modal" aria-label="Close">
          <div>
            <span aria-hidden="true">×</span>
          </div>
        </button>
      </div>
  
      <div class="modal-content">
        <div class="modal-body">
            <div class="snippetModal">
              <pre><code></code></pre>
            </div>
        </div>
      </div>
    </div>
  </div>

  
  <div role="dialog" class="modal " tabindex="-1"
     id="tableModal" 
     aria-labelledby="documentation-response-modal" >
  
    <div class="modal-dialog" role="document">
      <div class="modal-header">
        <div class="title"></div>
        <button type="button" class="close btn-circle" data-dismiss="modal" aria-label="Close">
          <div>
            <span aria-hidden="true">×</span>
          </div>
        </button>
      </div>
  
      <div class="modal-content">
        <div class="modal-body">
            <div class="tableModal"></div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal" id="languageSettingsModal" class="documentation-language-settings-modal" tabindex="-1" role="dialog" aria-labelledby="documentation-language-settings-modal">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h3 class="modal-title"> Language Settings </h3>
              <div class='actions'>
                <h4 class='contribute-github'>
                  <a
                    class='contribute-github pm-link'
                    href='https://github.com/postmanlabs/postman-code-generators'
                    rel='noopener noreferrer'
                    target='_blank'
                  >
                    Contribute on Github
                  </a>
                </h4>
              </div>
            </div>
            <div class="modal-body">
                <div class="language-settings-container">
                  <div class='language-list-settings'>
                    <div class='language-list-container'>
                      <div class="language-search">
                        <div class="input-group">
                          <input type="text" id='language-search-input' maxlength="100" class="form-control" placeholder="Filter languages" aria-describedby="basic-addon2">
                          <span class="input-group-addon" id="basic-addon1">
                            <i class="pm-icon pm-icon-sm pm-icon-secondary"><svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path fill-rule="evenodd" d="M13.0383 7.0293c0 1.2262-.4116 2.4525-1.1317 3.4744l2.7779 2.7589c.4116.3578.4116 1.0222.0517 1.431-.2061.204-.4632.3064-.7204.3064-.2571 0-.5143-.1024-.7204-.3064l-2.7779-2.7593c-1.029.7155-2.2123 1.1243-3.4984 1.1243-1.5949 0-3.1381-.6645-4.27-1.7884C1.6173 10.146 1 8.6643 1 7.0292c0-1.584.6174-3.1166 1.749-4.2408C3.881 1.6134 5.4242 1 7.0191 1c1.595 0 3.1382.6645 4.2701 1.7884 1.1317 1.1242 1.7491 2.6059 1.7491 4.2409zm-1.7716.0374c0 2.3196-1.8804 4.2-4.2 4.2-2.3196 0-4.2-1.8804-4.2-4.2 0-2.3196 1.8804-4.2 4.2-4.2 2.3196 0 4.2 1.8804 4.2 4.2z" fill="#A9A9A9"></path></svg></i>
                          </span>
                        </div>
                      </div>
                        <div class='languages-list'> </div>
                    </div>
                    <div class='language-settings'>
                       <div class="ls-settings-container"></div>
                         <div class="settings-loader">
                            
                            <div class="loader loader--lg">
                              <div class="loading-icon--spinner"></div>
                                <div id='loader-text'>Just a moment...</div>
                            </div>                      </div>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
  </div>

  <div class='container-fluid no-gutter'>
    <div class="row content-container">
      <div class="col-xs-12 info no-gutter">
        <div id="mobile-controls">
        
        
          <div class="environment-container">
              <label class="title">Environment</label>
                <div class="btn-group environment-dropdown dropdown">
                    <button class="btn pm-btn pm-btn-secondary hard--sides disabled" type="button">
                      <div class="dropdown-button ellipsis active-environment" data-environment-id="0">No environment</div>
                    </button>
                </div>
          </div>
        
            <div class="language-container">
              <label class="title">Language</label>
              <div class="language">
                <div class="btn-group languages language-dropdown">
                  <button type="button" class="btn pm-btn dropdown-toggle language-button ellipsis" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="active-lang ellipsis selected-language"></div>
                    <span class="pm-icon pm-dropdown-icon">
                      <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4 5L0 0L8 0L4 5Z" fill="#EBEBEB"/>
                      </svg>
                    </span>
                  </button>
                  <ul class="dropdown-menu dropdown-menu-right language_dropdown">
                      <li class="dropdown-menu-item" data-lang-key="csharp"  data-lang-variant="RestSharp" data-lang-label="C#"> C# - RestSharp</li>
                      <li class="dropdown-menu-item" data-lang-key="curl"  data-lang-variant="cURL" data-lang-label="cURL"> cURL - cURL</li>
                      <li class="dropdown-menu-item" data-lang-key="dart"  data-lang-variant="http" data-lang-label="Dart"> Dart - http</li>
                      <li class="dropdown-menu-item" data-lang-key="go"  data-lang-variant="Native" data-lang-label="Go"> Go - Native</li>
                      <li class="dropdown-menu-item" data-lang-key="http"  data-lang-variant="HTTP" data-lang-label="HTTP"> HTTP - HTTP</li>
                      <li class="dropdown-menu-item" data-lang-key="java"  data-lang-variant="OkHttp" data-lang-label="Java"> Java - OkHttp</li>
                      <li class="dropdown-menu-item" data-lang-key="java"  data-lang-variant="Unirest" data-lang-label="Java"> Java - Unirest</li>
                      <li class="dropdown-menu-item" data-lang-key="javascript"  data-lang-variant="Fetch" data-lang-label="JavaScript"> JavaScript - Fetch</li>
                      <li class="dropdown-menu-item" data-lang-key="javascript"  data-lang-variant="jQuery" data-lang-label="JavaScript"> JavaScript - jQuery</li>
                      <li class="dropdown-menu-item" data-lang-key="javascript"  data-lang-variant="XHR" data-lang-label="JavaScript"> JavaScript - XHR</li>
                      <li class="dropdown-menu-item" data-lang-key="c"  data-lang-variant="libcurl" data-lang-label="C"> C - libcurl</li>
                      <li class="dropdown-menu-item" data-lang-key="nodejs"  data-lang-variant="Axios" data-lang-label="NodeJs"> NodeJs - Axios</li>
                      <li class="dropdown-menu-item" data-lang-key="nodejs"  data-lang-variant="Native" data-lang-label="NodeJs"> NodeJs - Native</li>
                      <li class="dropdown-menu-item" data-lang-key="nodejs"  data-lang-variant="Request" data-lang-label="NodeJs"> NodeJs - Request</li>
                      <li class="dropdown-menu-item" data-lang-key="nodejs"  data-lang-variant="Unirest" data-lang-label="NodeJs"> NodeJs - Unirest</li>
                      <li class="dropdown-menu-item" data-lang-key="objective-c"  data-lang-variant="NSURLSession" data-lang-label="Objective-C"> Objective-C - NSURLSession</li>
                      <li class="dropdown-menu-item" data-lang-key="ocaml"  data-lang-variant="Cohttp" data-lang-label="OCaml"> OCaml - Cohttp</li>
                      <li class="dropdown-menu-item" data-lang-key="php"  data-lang-variant="cURL" data-lang-label="PHP"> PHP - cURL</li>
                      <li class="dropdown-menu-item" data-lang-key="php"  data-lang-variant="HTTP_Request2" data-lang-label="PHP"> PHP - HTTP_Request2</li>
                      <li class="dropdown-menu-item" data-lang-key="php"  data-lang-variant="pecl_http" data-lang-label="PHP"> PHP - pecl_http</li>
                      <li class="dropdown-menu-item" data-lang-key="powershell"  data-lang-variant="RestMethod" data-lang-label="PowerShell"> PowerShell - RestMethod</li>
                      <li class="dropdown-menu-item" data-lang-key="python"  data-lang-variant="http.client" data-lang-label="Python"> Python - http.client</li>
                      <li class="dropdown-menu-item" data-lang-key="python"  data-lang-variant="Requests" data-lang-label="Python"> Python - Requests</li>
                      <li class="dropdown-menu-item" data-lang-key="ruby"  data-lang-variant="Net::HTTP" data-lang-label="Ruby"> Ruby - Net::HTTP</li>
                      <li class="dropdown-menu-item" data-lang-key="shell"  data-lang-variant="Httpie" data-lang-label="Shell"> Shell - Httpie</li>
                      <li class="dropdown-menu-item" data-lang-key="shell"  data-lang-variant="wget" data-lang-label="Shell"> Shell - wget</li>
                      <li class="dropdown-menu-item" data-lang-key="swift"  data-lang-variant="URLSession" data-lang-label="Swift"> Swift - URLSession</li>
                  </ul>
                </div>
              </div>
        
              <div id='language-settings-icon'><div class="pm-icon-gear pm-icon-gear-- pm-icon-gear--sm"></div></div>
            </div>
        </div>

        <div id='error-view'>
        </div>

        <div id="doc-body-container">
        </div>
      </div>
        <div class="no-gutter phantom-sidebar"></div>
        <div class="no-gutter sidebar nav" id="nav-sidebar"></div>
    </div>
  </div>

  <div id="toast-container" class="toast-container">
  </div>
</div>
<script src="https://cdn.ravenjs.com/3.26.2/raven.min.js" nonce="3j9rCdbgfuxlRpiHSG/0GEAj7zhRwrjUHgjnpfZretBKiWSI" crossorigin="anonymous"></script><script src="/js/production.min.ad99b5b19cb94801b24a.js" nonce="3j9rCdbgfuxlRpiHSG/0GEAj7zhRwrjUHgjnpfZretBKiWSI" id="script-data-scope" data-var-user-id="" data-var-environment="production" data-var-team-id="" data-var-host="" data-var-hostname="documenter.getpostman.com" data-var-api-host="https://documenter.gw.postman.com" data-var-documenter-domains-regex="^documenter.(postman|getpostman).com$" data-var-version="1.21.10" data-var-sentry-dsn="https://714c749bafde4552896bc6298c2c28a6@sentry.postmanlabs.com/11"></script><script src="/js/main.94bd36869ac6eaed355c.js" nonce="3j9rCdbgfuxlRpiHSG/0GEAj7zhRwrjUHgjnpfZretBKiWSI"></script><script src="/js/runbutton.js" nonce="3j9rCdbgfuxlRpiHSG/0GEAj7zhRwrjUHgjnpfZretBKiWSI" id="public-run-button-embed" data-web-host="https://www.getpostman.com/" data-button-url="https://run.pstmn.io/button.js"></script><div id="root"/></body></html>