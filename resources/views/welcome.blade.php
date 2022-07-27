<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Sistem Pengurusan Aduan Kerosakan Aset Tak Alih">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Spak</title>
    <link rel="stylesheet" href="{{asset('Site1/nicepage.css')}}" media="screen">
<link rel="stylesheet" href="{{asset('Site1/Home.css')}}" media="screen">
    <script class="u-script" type="text/javascript" src="{{asset('Site1/jquery.js')}}" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{asset('Site1/nicepage.js')}}" defer=""></script>
    <meta name="generator" content="Nicepage 3.12.1, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"url": "index.html",
		"logo": "images/LOGO_ILPSELANDAR_2021_edit.png"
}</script>
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#478ac9">
    <link rel="canonical" href="index.html">
    <meta property="og:url" content="index.html">
  </head>
  <body data-home-page="Home.html" data-home-page-title="Home" class="u-body"><header class="u-clearfix u-header u-header" id="sec-0674"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="679" data-image-height="143">
          <img src="{{asset('AdminLTE-3.1.0/dist/img/LOGO_ILPSELANDAR_2021.png')}}" class="u-logo-image u-logo-image-1" data-image-width="244.593">
        </a>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;"><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</symbol>
</defs></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="http://localhost/myspak/public/login" style="padding: 10px 20px;">Log Masuk</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>
    <section class="u-clearfix u-section-1" id="sec-41aa">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-left-cell u-palette-5-light-2 u-size-30 u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1">
                  <h2 class="u-align-center u-heading-font u-text u-text-1">Sistem Pengurusan Aduan Kerosakan Aset Tak Alih</h2>
                  <div class="u-border-3 u-border-palette-3-base u-line u-line-horizontal u-line-1"></div>
                  <ol class="u-align-left u-text u-text-2">
                    <li>Memudahkan aduan kerosakan aset tak alih secara atas talian.</li>
                    <li>Memudahkan semakan aduan kerosakan aset tak alih.</li>
                    <li>Memudahkan pemantauan pencapaian pengurusan kerosakan aset tak alih.</li>
                  </ol>
                </div>
              </div>
              <div class="u-align-center u-container-style u-layout-cell u-palette-5-light-3 u-right-cell u-size-30 u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2">
                  <h3 class="u-text u-text-3">Log masuk</h3>
                  
                  <div class="u-border-3 u-border-palette-1-base u-line u-line-horizontal u-line-2"></div>
                  
                  <p class="u-text u-text-font u-text-4">Anda perlu log masuk untuk membuat laporan kerosakan.&nbsp;<br>
                   
                  </p>
                  <form method="POST" action="{{ route('login') }}">
                        @csrf
                  
                  <input type="email" id="email" name="email" placeholder="emel" required autofocus>
                  <br>
                               
                                <br>
                                
                  <input id="password" type="password"  name="password" required  placeholder="Katalaluan">
                  <br>
                      @error('email')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                    <br>
                      
                  <!-- <a href="{{ url('login') }}" class="u-btn u-button-style u-palette-3-base u-btn-1">Log masuk</a> -->
                  <button type="submit" class="btn btn-primary">
                                    <!-- {{ __('Login') }} -->
                                    Log masuk
                                </button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
<!--     
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-fc4e"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
    <p style="text-align:center;"><strong>Hakcipta &copy; <?php if(date('Y') == '2020'){ echo "2020"; }else{ echo "2020 - ".date('Y');} ?><a href="http://www.ilpselandar.gov.my"> ILP Selandar </a></strong> </p>
   
      </div></footer> -->
  
  </body>
</html>