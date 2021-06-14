<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Starlight">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/starlight/img/starlight-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/starlight">
    <meta property="og:title" content="Starlight">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>ACOMSIV</title>

    <!-- vendor css -->

    <link href="{{ asset('backend') }}/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="{{ asset('backend') }}/lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="{{ asset('backend') }}/lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="{{ asset('backend') }}/lib/highlightjs/github.css" rel="stylesheet">
    <link href="{{ asset('backend') }}/lib/datatables/jquery.dataTables.css" rel="stylesheet">
    <link href="{{ asset('backend') }}/lib/select2/css/select2.min.css" rel="stylesheet">
    <link href="{{ asset('backend') }}/lib/highlightjs/github.css" rel="stylesheet">
    <link href="{{ asset('backend') }}/lib/medium-editor/medium-editor.css" rel="stylesheet">
    <link href="{{ asset('backend') }}/lib/medium-editor/default.css" rel="stylesheet">
    <link href="{{ asset('backend') }}/lib/summernote/summernote-bs4.css" rel="stylesheet">
    <!-- Starlight CSS -->
    <link rel="stylesheet" href="{{ asset('backend') }}/css/starlight.css">
  </head>

  <body>

    @guest
    @else
    <!-- ########## START: LEFT PANEL ########## -->
    <div class="sl-logo"><a href=""><svg version="1.0" xmlns="http://www.w3.org/2000/svg"
 width="200" height="65" viewBox="0 0 702.000000 285.000000"
 preserveAspectRatio="xMidYMid meet" style="padding-top: 10px;">

<g transform="translate(0.000000,285.000000) scale(0.100000,-0.100000)"
fill="white" stroke="none">
<path d="M6459 2813 l-76 -15 4 -151 c3 -84 5 -156 7 -161 2 -10 156 318 156
334 0 6 -3 9 -7 9 -5 -1 -42 -8 -84 -16z"/>
<path d="M5585 2808 c-6 -16 -175 -846 -175 -859 0 -5 63 -9 150 -9 83 0 150
3 150 8 0 10 160 834 166 855 5 16 -6 17 -141 17 -107 0 -147 -3 -150 -12z"/>
<path d="M6005 2768 c11 -90 115 -782 120 -805 5 -23 7 -23 190 -23 l185 0
220 440 220 440 -169 0 -168 0 -96 -227 c-52 -126 -103 -247 -112 -271 -10
-24 -21 -40 -25 -35 -4 4 -18 123 -30 263 -12 140 -24 258 -27 263 -2 4 -74 7
-160 7 l-155 0 7 -52z"/>
<path d="M4915 2795 c-97 -21 -147 -48 -201 -108 -62 -68 -84 -112 -84 -169 0
-78 57 -140 160 -173 128 -41 220 -107 220 -157 0 -11 -16 -35 -35 -53 -92
-87 -277 -86 -402 3 l-30 21 -11 -101 c-6 -56 -9 -105 -6 -109 12 -19 194 -52
294 -53 138 -1 220 24 312 93 144 109 201 221 160 314 -24 54 -68 85 -162 116
-97 31 -193 84 -210 114 -13 24 -13 30 0 55 24 43 74 62 161 62 67 0 85 -4
145 -34 38 -19 70 -33 72 -31 10 10 40 181 33 188 -15 16 -167 36 -261 36 -52
0 -122 -7 -155 -14z"/>
<path d="M5935 2765 c-4 -22 -43 -215 -85 -430 -62 -311 -75 -391 -64 -393 16
-4 285 26 292 32 2 3 -27 191 -66 418 -57 345 -70 406 -77 373z"/>
<path d="M5380 2778 c-1 -31 -28 -239 -31 -242 -2 -2 -41 -16 -86 -30 -46 -15
-83 -31 -83 -35 0 -3 16 -15 35 -25 46 -25 109 -86 129 -124 8 -16 18 -48 22
-71 13 -84 -69 -202 -204 -291 l-47 -31 70 7 c39 3 95 9 125 13 l54 6 27 140
c14 77 49 262 78 411 28 150 51 275 51 278 0 3 -31 6 -70 6 -49 0 -70 -4 -70
-12z"/>
<path d="M3399 2343 l-84 -428 144 -3 c79 -1 145 -1 146 0 2 2 20 119 41 261
21 141 40 257 43 257 3 0 35 -71 71 -158 35 -86 71 -174 80 -194 l16 -37 138
190 c76 105 140 188 143 186 3 -4 -70 -280 -126 -474 l-10 -33 177 0 177 0 64
418 c35 229 66 423 69 430 3 9 -34 12 -166 12 l-171 0 -108 -153 c-59 -84
-112 -155 -118 -157 -5 -3 -35 65 -65 150 l-55 155 -161 3 -160 2 -85 -427z"/>
<path d="M2700 2747 c-69 -16 -89 -27 -167 -90 -156 -125 -245 -298 -246 -477
0 -65 4 -84 33 -143 40 -80 99 -138 168 -162 112 -40 307 -28 421 26 236 109
349 290 339 539 -7 165 -64 249 -198 291 -82 26 -269 35 -350 16z m190 -144
c60 -42 85 -106 83 -215 -3 -172 -106 -354 -221 -389 -121 -36 -203 132 -158
324 49 209 197 349 296 280z"/>
<path d="M2749 2507 c-43 -29 -48 -70 -8 -75 33 -4 119 28 132 50 30 47 -64
66 -124 25z"/>
<path d="M2779 2405 c-101 -35 -106 -39 -118 -95 -16 -74 -13 -129 9 -177 17
-39 22 -43 56 -43 33 0 45 8 90 54 38 39 57 69 68 107 21 69 21 143 0 163 -19
20 -25 20 -105 -9z"/>
<path d="M3980 2723 c-41 -14 -76 -27 -77 -28 -6 -4 27 -101 40 -118 11 -17
17 -12 60 55 26 40 55 83 63 96 21 29 11 28 -86 -5z"/>
<path d="M1920 2724 c-194 -51 -324 -185 -391 -404 -30 -97 -32 -222 -5 -300
25 -71 96 -141 168 -167 100 -34 375 -17 397 26 5 9 11 41 15 71 4 30 10 65
12 77 6 21 5 21 -42 7 -26 -8 -79 -14 -118 -14 -133 0 -179 50 -177 194 2 216
101 336 276 336 39 0 95 -6 125 -14 30 -8 56 -13 57 -12 1 1 5 45 9 98 l7 96
-52 11 c-71 15 -214 13 -281 -5z"/>
<path d="M3355 2699 c-22 -10 -54 -19 -71 -19 -43 0 -46 -7 -24 -49 58 -115
70 -290 27 -402 -57 -149 -145 -245 -324 -355 -47 -30 -53 -35 -28 -31 17 3
95 15 175 27 80 12 146 23 147 24 5 5 143 801 141 811 -2 8 -16 6 -43 -6z"/>
<path d="M833 2553 c-44 -82 -145 -270 -226 -418 -80 -149 -149 -278 -152
-288 -7 -16 4 -17 132 -17 l138 0 31 83 31 82 136 3 137 3 0 -86 0 -85 150 0
c83 0 150 3 150 6 0 8 -138 798 -146 837 l-6 27 -148 0 -148 0 -79 -147z m200
-193 c4 -41 6 -109 5 -150 l-3 -75 -87 -3 c-84 -3 -88 -2 -88 18 0 21 66 266
76 282 3 5 25 8 47 6 l42 -3 8 -75z"/>
<path d="M4526 2663 c-20 -138 -21 -133 8 -133 24 0 26 4 26 39 0 30 9 51 35
85 l35 46 -49 0 c-49 0 -49 0 -55 -37z"/>
<path d="M5046 2595 c-57 -20 -64 -31 -38 -57 27 -28 99 -29 166 -4 51 20 52
26 4 49 -52 24 -90 27 -132 12z"/>
<path d="M2007 2506 c-21 -8 -47 -22 -57 -31 -34 -31 -64 -115 -41 -115 5 0
39 18 76 39 37 22 90 46 117 52 27 7 53 18 59 25 27 33 -87 55 -154 30z"/>
<path d="M712 2492 c-7 -5 -127 -188 -266 -408 l-254 -399 56 -3 c54 -3 57 -2
88 35 23 27 28 39 18 41 -20 5 -18 28 5 60 23 32 350 582 375 630 22 42 11 64
-22 44z"/>
<path d="M1438 2433 c-68 -42 -88 -60 -88 -77 0 -13 9 -103 20 -202 11 -98 20
-182 20 -186 0 -5 18 -8 41 -8 35 0 40 2 34 18 -23 54 -37 127 -37 207 -1 102
29 208 77 270 14 19 25 35 23 34 -2 0 -42 -26 -90 -56z"/>
<path d="M4500 2430 l0 -50 45 0 c25 0 45 2 45 4 0 2 -7 17 -15 32 -8 16 -15
37 -15 47 0 12 -8 17 -30 17 -29 0 -30 -1 -30 -50z"/>
<path d="M2058 2368 l-188 -91 0 -87 c0 -80 2 -88 26 -111 35 -32 100 -31 174
5 93 44 117 34 122 -49 3 -42 6 -50 23 -50 16 0 19 6 17 30 -2 17 -4 82 -4
145 -1 97 3 129 25 200 25 85 26 100 4 100 -7 -1 -96 -42 -199 -92z"/>
<path d="M4543 2337 l-83 -21 0 -38 c0 -46 -9 -45 167 -17 l134 22 -53 29
c-29 16 -57 33 -62 38 -6 6 -12 10 -15 9 -4 -1 -43 -11 -88 -22z"/>
<path d="M4690 2241 c-108 -15 -115 -18 -118 -40 l-4 -24 79 7 c73 6 211 31
220 39 2 2 1 12 -3 21 -7 19 -20 19 -174 -3z"/>
<path d="M3962 2117 l-71 -113 -115 -18 -116 -18 0 -44 c0 -39 3 -44 23 -44
34 1 299 28 302 32 4 5 53 313 50 316 -1 1 -34 -48 -73 -111z"/>
<path d="M3720 2195 c0 -16 -7 -58 -14 -92 l-14 -63 43 0 42 0 -24 83 c-30
105 -31 108 -33 72z"/>
<path d="M4899 2186 c-2 -3 -53 -10 -112 -17 -93 -10 -107 -14 -107 -30 0 -17
8 -19 73 -19 109 0 166 20 167 58 0 12 -12 16 -21 8z"/>
<path d="M4425 2128 c-2 -13 -11 -60 -18 -105 l-14 -83 28 0 c24 0 29 5 33 33
3 17 10 59 16 91 14 82 13 86 -15 86 -17 0 -26 -7 -30 -22z"/>
<path d="M808 1910 c-9 -22 -13 -40 -10 -40 4 1 39 19 77 40 l70 40 -60 0 -60
0 -17 -40z"/>
<path d="M2259 1942 c-13 -2 -40 -8 -61 -13 -32 -8 -37 -14 -43 -49 -6 -33
-12 -41 -33 -46 -106 -25 -285 -73 -289 -78 -11 -11 20 -36 56 -46 87 -24 261
-4 490 56 74 19 139 38 144 41 6 3 -14 12 -44 20 -61 16 -122 49 -166 90 -19
18 -38 27 -54 25z"/>
<path d="M5420 1865 c-333 -40 -614 -75 -625 -78 -43 -11 122 -6 306 8 177 14
861 87 951 102 28 4 38 10 38 24 0 15 -7 19 -32 18 -18 -1 -305 -34 -638 -74z"/>
<path d="M1452 1902 c-32 -16 -33 -18 -27 -62 6 -43 4 -47 -20 -58 -14 -7 -45
-12 -68 -12 -48 0 -112 -28 -112 -50 0 -41 160 -36 339 10 65 16 138 30 162
30 65 0 58 24 -10 38 -72 15 -142 48 -182 89 -38 38 -37 37 -82 15z"/>
<path d="M5170 1905 c-47 -7 -267 -36 -490 -65 -223 -28 -414 -56 -425 -61
-49 -23 466 23 880 79 170 23 200 30 203 45 3 14 -4 17 -40 16 -24 -1 -81 -7
-128 -14z"/>
<path d="M840 1845 c-63 -35 -116 -68 -118 -73 -1 -5 1 -18 5 -29 8 -19 13
-18 126 31 l117 51 0 42 c0 24 -3 43 -7 42 -5 -1 -60 -29 -123 -64z"/>
<path d="M4404 1884 c-34 -19 -89 -30 -340 -64 -164 -22 -324 -45 -354 -50
-100 -17 190 -2 390 20 215 24 503 60 507 64 6 5 -128 56 -145 55 -9 -1 -35
-12 -58 -25z"/>
<path d="M3550 1815 c-413 -71 -439 -76 -320 -69 112 6 758 90 768 99 1 1 0
10 -4 19 -9 24 -41 21 -444 -49z"/>
<path d="M3120 1839 c-120 -24 -401 -66 -502 -75 -69 -6 -78 -9 -78 -27 0 -19
4 -20 93 -13 114 9 319 38 500 72 119 23 137 29 137 45 0 24 -23 24 -150 -2z"/>
<path d="M875 1746 l-120 -51 135 -3 134 -3 83 37 c46 21 83 42 83 47 0 6 -30
7 -81 3 -63 -5 -85 -3 -98 7 -14 12 -32 7 -136 -37z"/>
<path d="M385 1720 l-39 -40 79 0 c75 1 84 3 145 40 l65 40 -105 0 -106 0 -39
-40z"/>
<path d="M6050 1654 c-300 -6 -594 -12 -653 -13 l-108 -1 -59 -92 c-33 -50
-58 -94 -56 -96 3 -2 47 1 98 8 261 33 1081 144 1283 174 274 40 309 39 -505
20z"/>
<path d="M4255 1609 c-842 -27 -2241 -69 -2316 -69 l-66 0 -176 -192 c-298
-327 -825 -913 -822 -915 1 -2 60 19 131 46 547 206 1537 464 2559 665 474 93
1123 212 1266 231 48 6 52 9 203 188 l57 67 -138 -1 c-76 -1 -390 -10 -698
-20z"/>
<path d="M197 1517 c4 -8 25 -33 46 -57 l37 -44 0 57 0 57 -45 0 c-36 0 -44
-3 -38 -13z"/>
<path d="M387 1523 c-4 -3 -7 -280 -7 -615 0 -480 3 -608 13 -608 6 0 76 26
154 58 l142 57 407 479 c415 490 524 622 524 631 0 8 -1226 6 -1233 -2z"/>
<path d="M80 1248 l0 -203 100 -100 100 -100 0 225 0 225 -87 70 c-47 39 -92
74 -100 78 -11 7 -13 -27 -13 -195z"/>
<path d="M90 664 l0 -199 100 -100 100 -100 -1 205 -1 205 -99 94 -99 93 0
-198z"/>
<path d="M90 236 l0 -56 62 0 61 0 -24 26 c-13 14 -41 39 -61 56 l-38 30 0
-56z"/>
</g>
</svg></a></div>
    <div class="sl-sideleft">
      <!-- <div class="input-group input-group-search">
        <input type="search" name="search" class="form-control" placeholder="Search">
        <span class="input-group-btn">
          <button class="btn"><i class="fa fa-search"></i></button>
        </span>
        </div> -->
        <!-- input-group-btn -->
<br>
      <!-- input-group -->

      <div class="sl-sideleft-menu">
        <a href="{{ url('admin/home') }}" class="sl-menu-link @yield('dashboard')">
          <div class="sl-menu-item">
          <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16"
	 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
		<path d="M287,0c-8.291,0-15,6.709-15,15v211c0,8.291,6.709,15,15,15h210c8.291,0,15-6.709,15-15C512,101.928,411.072,0,287,0z"/>

		<path d="M314.788,478.367L242,283.275V76c0-8.291-6.709-15-15-15C102.928,61,0,161.928,0,286s102.928,226,227,226
			c27.158,0,53.745-4.819,79.014-14.312C313.763,494.773,317.689,486.13,314.788,478.367z"/>

		<path d="M497,271H287c-4.922,0-9.521,2.417-12.334,6.46c-2.798,4.043-3.442,9.199-1.714,13.813l73.74,197.641
			c1.406,3.721,4.219,6.738,7.852,8.379c3.635,1.653,7.731,1.793,11.484,0.381C453.333,464.817,512,379.164,512,286
			C512,277.709,505.291,271,497,271z"/>

</svg>
            <span class="menu-item-label">Estadisticas</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->

        <a href="{{ url('/') }}" target="_blank" class="sl-menu-link ">
          <div class="sl-menu-item">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-house-door-fill" viewBox="0 0 16 16">
  <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/>
</svg>
            <span class="menu-item-label">Home</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->

        <a href="{{ route('admin.user') }}"  class="sl-menu-link @yield('user')">
          <div class="sl-menu-item">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-people-fill" viewBox="0 0 16 16">
  <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
  <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
  <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
</svg>
            <span class="menu-item-label">Usuarios</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->



        <a href="{{ route('admin.category') }}"  class="sl-menu-link @yield('category')">
          <div class="sl-menu-item">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="black">
  <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
</svg>
            <span class="menu-item-label">Categorias</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->

        <a href="{{ route('admin.brand') }}"  class="sl-menu-link @yield('brand')">
          <div class="sl-menu-item">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-bookmarks-fill" viewBox="0 0 16 16">
  <path d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5V4z"/>
  <path d="M4.268 1A2 2 0 0 1 6 0h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L13 13.768V2a1 1 0 0 0-1-1H4.268z"/>
</svg>
            <span class="menu-item-label">Marcas</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->


        <a href="#" class="sl-menu-link @yield('products')">
          <div class="sl-menu-item">
          <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 512 512" width="16" height="16"><title>Commercial delivery </title><polygon points="203.654 241.22 377.296 140.969 295.628 93.818 121.986 194.069 203.654 241.22"/><polygon points="197 253.344 23 153.085 23 353.619 197 453.878 197 253.344"/><rect x="351" y="356" width="19" height="19"/><path d="M211,253.344V453.878l95-54.935V254.182A30.037,30.037,0,0,1,335.891,224H360.8a24.533,24.533,0,0,1,23.417-18H384V153.085Z"/><rect x="374" y="220" width="61" height="21" rx="10.161"/><polygon points="281.628 85.735 203.654 40.717 30.013 140.969 107.986 185.987 281.628 85.735"/><path d="M472.916,238H447.733a23.942,23.942,0,0,1-23.143,17H384.217a23.944,23.944,0,0,1-23.144-17H335.891A16.022,16.022,0,0,0,320,254.182v202.1A15.628,15.628,0,0,0,335.891,472H472.916A15.793,15.793,0,0,0,489,456.282v-202.1A16.186,16.186,0,0,0,472.916,238ZM337,285.033A6.985,6.985,0,0,1,343.949,278h32.975A7.093,7.093,0,0,1,384,285.033v4.71a7.019,7.019,0,0,1-7.038,6.984A6.739,6.739,0,0,1,370.307,292H351v19h.276a7,7,0,1,1,0,14h-7.327A6.95,6.95,0,0,1,337,318.008ZM337,349a7,7,0,0,1,7-7h33a7,7,0,0,1,7,7v33a7,7,0,0,1-7,7H344a7,7,0,0,1-7-7Zm14.277,104h-7.328A6.752,6.752,0,0,1,337,446.244V413.269A7.191,7.191,0,0,1,343.949,406h32.975A7.3,7.3,0,0,1,384,413.269v6.745A7.037,7.037,0,0,1,369.929,420H351v19h.277a7,7,0,1,1,0,14Zm51.664-27.259-25.452,25.452a7,7,0,0,1-9.9,0L356.4,440.007a7,7,0,1,1,9.9-9.9l6.236,6.237,20.5-20.5a7,7,0,0,1,9.9,9.9Zm0-129.249-25.452,25.452a7,7,0,0,1-9.9,0L356.4,310.758a7,7,0,1,1,9.9-9.9l6.236,6.237,20.5-20.5a7,7,0,0,1,9.9,9.9ZM464.857,437H420.891a7,7,0,0,1,0-14h43.966a7,7,0,0,1,0,14Zm0-64H420.891a7,7,0,0,1,0-14h43.966a7,7,0,0,1,0,14Zm0-64H420.891a7,7,0,0,1,0-14h43.966a7,7,0,0,1,0,14Z"/></svg>
            <span class="menu-item-label">Productos</span>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-chevron-down" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
</svg>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{ route('add-products') }}" class="nav-link @yield('add-products')">Agregar Productos</a></li>
          <li class="nav-item"><a href="{{ route('manage-products') }}" class="nav-link @yield('manage-products')">Gestionar Productos</a></li>
        </ul>

        <a href="{{ route('admin.coupon') }}"  class="sl-menu-link @yield('coupon')">
          <div class="sl-menu-item">
          <svg id="Capa_1" enable-background="new 0 0 475.293 475.293" height="16" viewBox="0 0 475.293 475.293"  width="16" xmlns="http://www.w3.org/2000/svg"><path d="m430.734 415.882h-386.175c-24.571 0-44.559-19.988-44.559-44.559v-74.265c0-8.21 6.643-14.853 14.853-14.853 24.571 0 44.559-19.988 44.559-44.559s-19.988-44.559-44.559-44.559c-8.21.001-14.853-6.642-14.853-14.852v-74.265c0-24.571 19.988-44.559 44.559-44.559h386.176c24.571 0 44.559 19.988 44.559 44.559v74.265c0 8.21-6.643 14.853-14.853 14.853-24.571 0-44.559 19.988-44.559 44.559s19.988 44.559 44.559 44.559c8.21 0 14.853 6.643 14.853 14.853v74.265c-.001 24.57-19.988 44.558-44.56 44.558zm-401.028-105.465v60.906c0 8.195 6.658 14.853 14.853 14.853h386.176c8.195 0 14.853-6.658 14.853-14.853v-60.906c-33.854-6.904-59.412-36.9-59.412-72.771s25.557-65.866 59.412-72.771v-60.905c0-8.195-6.658-14.853-14.853-14.853h-386.176c-8.195 0-14.853 6.658-14.853 14.853v60.906c33.854 6.904 59.412 36.9 59.412 72.771s-25.558 65.866-59.412 72.77z"/><path d="m-253.192 288.847h253.806v29.716h-253.806z" transform="matrix(.351 -.936 .936 .351 -2.301 12.678)"/><path id="path-1_20_" d="m163.382 237.647c-24.571 0-44.559-19.988-44.559-44.559s19.988-44.559 44.559-44.559 44.559 19.988 44.559 44.559-19.988 44.559-44.559 44.559zm0-59.412c-8.195 0-14.853 6.658-14.853 14.853s6.658 14.853 14.853 14.853 14.853-6.658 14.853-14.853-6.658-14.853-14.853-14.853z" transform="translate(4 5)"/><path id="path-1_19_" d="m311.911 326.764c-24.571 0-44.559-19.988-44.559-44.559s19.988-44.559 44.559-44.559 44.559 19.988 44.559 44.559-19.988 44.559-44.559 44.559zm0-59.412c-8.195 0-14.853 6.658-14.853 14.853s6.658 14.853 14.853 14.853 14.853-6.658 14.853-14.853-6.658-14.853-14.853-14.853z" transform="translate(9 8)"/></svg>
            <span class="menu-item-label">Cupones</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->

        <a href="{{ route('admin.orders') }}"  class="sl-menu-link @yield('orders')">
          <div class="sl-menu-item">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-bag-check-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zm-.646 5.354a.5.5 0 0 0-.708-.708L7.5 10.793 6.354 9.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"/>
</svg>
            <span class="menu-item-label">Pedidos</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->




        </ul>
      </div><!-- sl-sideleft-menu -->

      <br>
    </div><!-- sl-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
    <div class="sl-header">
      <div class="sl-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-stack" viewBox="0 0 16 16">
  <path d="m14.12 10.163 1.715.858c.22.11.22.424 0 .534L8.267 15.34a.598.598 0 0 1-.534 0L.165 11.555a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.66zM7.733.063a.598.598 0 0 1 .534 0l7.568 3.784a.3.3 0 0 1 0 .535L8.267 8.165a.598.598 0 0 1-.534 0L.165 4.382a.299.299 0 0 1 0-.535L7.733.063z"/>
  <path d="m14.12 6.576 1.715.858c.22.11.22.424 0 .534l-7.568 3.784a.598.598 0 0 1-.534 0L.165 7.968a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.659z"/>
</svg></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-stack" viewBox="0 0 16 16">
  <path d="m14.12 10.163 1.715.858c.22.11.22.424 0 .534L8.267 15.34a.598.598 0 0 1-.534 0L.165 11.555a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.66zM7.733.063a.598.598 0 0 1 .534 0l7.568 3.784a.3.3 0 0 1 0 .535L8.267 8.165a.598.598 0 0 1-.534 0L.165 4.382a.299.299 0 0 1 0-.535L7.733.063z"/>
  <path d="m14.12 6.576 1.715.858c.22.11.22.424 0 .534l-7.568 3.784a.598.598 0 0 1-.534 0L.165 7.968a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.659z"/>
</svg></a></div>
      </div><!-- sl-header-left -->
      <div class="sl-header-right">
        <nav class="nav">
          <div class="dropdown">
            <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
              <span class="logged-name"><span class="hidden-md-down"></span></span>
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-circle " viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg>

            </a>
            <div class="dropdown-menu dropdown-menu-header wd-200">
              <ul class="list-unstyled user-profile-nav">
                <li><a href="{{ url('admin/users/edit/'.Auth::user()->id) }}
                "><i class="icon ion-ios-person-outline"></i> Editar Perfil</a></li>
                <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();"><i class="icon ion-power"></i> Cerrar Sésion</a></li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
        </form>
              </ul>
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
        </nav>
      </div><!-- sl-header-right -->
    </div><!-- sl-header -->
    <!-- ########## END: HEAD PANEL ########## -->

    <!-- ########## START: RIGHT PANEL ########## -->

    <!-- ########## END: RIGHT PANEL ########## --->
    @endguest
    @yield('admin_content')


    <script src="../js/sweetalert2.js"></script>
    <script src="{{ asset('backend') }}/lib/jquery/jquery.js"></script>
    <script src="{{ asset('backend') }}/lib/popper.js/popper.js"></script>
    <script src="{{ asset('backend') }}/lib/bootstrap/bootstrap.js"></script>
    <script src="{{ asset('backend') }}/lib/jquery-ui/jquery-ui.js"></script>
    <script src="{{ asset('backend') }}/lib/datatables/jquery.dataTables.js"></script>
    <script src="{{ asset('backend') }}/lib/datatables-responsive/dataTables.responsive.js"></script>
    <script>
      $(function(){
        'use strict';

        $('#datatable1').DataTable({
          responsive: true,
          language: {
            searchPlaceholder: 'Buscar...',
            sSearch: '',
            lengthMenu: 'Mostrar _MENU_ registros',
            zeroRecords: "No se encontraron resultados",
            emptyTable: "Ningún dato disponible en esta tabla",
            info:          "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            infoEmpty: "Mostrando registros del 0 al 0 de un total de 0 registros",
            infoFiltered: "(filtrado de un total de _MAX_ registros)",
            paginate: {
            first:    "Primero",
            last:    "Último",
            next: "Siguiente",
            previous: "Anterior"
        }
          }
        });

        $('#datatable2').DataTable({
          bLengthChange: false,
          searching: false,
          responsive: true
        });

        // Select2
        $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

      });
    </script>
     <script src="{{ asset('backend') }}/lib/medium-editor/medium-editor.js"></script>

     <script src="{{ asset('backend') }}/lib/summernote/summernote-bs4.min.js"></script>
     <script>
       $(function(){
         'use strict';

         // Inline editor
         var editor = new MediumEditor('.editable');

         // Summernote editor
         $('#summernote').summernote({
           height: 150,
           tooltip: false
         })

         $('#summernote2').summernote({
           height: 150,
           tooltip: false
         })
       });
     </script>
    <script src="{{ asset('backend') }}/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
    <script src="{{ asset('backend') }}/lib/jquery.sparkline.bower/jquery.sparkline.min.js"></script>
    <script src="{{ asset('backend') }}/lib/d3/d3.js"></script>
    <script src="{{ asset('backend') }}/lib/rickshaw/rickshaw.min.js"></script>
    <script src="{{ asset('backend') }}/lib/chart.js/Chart.js"></script>
    <script src="{{ asset('backend') }}/lib/Flot/jquery.flot.js"></script>
    <script src="{{ asset('backend') }}/lib/Flot/jquery.flot.pie.js"></script>
    <script src="{{ asset('backend') }}/lib/Flot/jquery.flot.resize.js"></script>
    <script src="{{ asset('backend') }}/lib/flot-spline/jquery.flot.spline.js"></script>

    <script src="{{ asset('backend') }}/js/starlight.js"></script>
    <script src="{{ asset('backend') }}/js/ResizeSensor.js"></script>
    <script src="{{ asset('backend') }}/js/dashboard.js"></script>
    <script src="{{ asset('backend') }}/lib/highlightjs/highlight.pack.js"></script>

    <script src="{{ asset('backend') }}/lib/select2/js/select2.min.js"></script>

    <script src="{{ asset('backend') }}/js/starlight.js"></script>

    <script src="js/sweetalert2.js"></script>

<!-- ELIMINAR PEDIDO -->

    @if(session('delete') == 'Pedido Borrado Satisfactoriamente')
                  <script>
                  Swal.fire(
                'Eliminado!',
                'Tu Pedido se eliminó con éxito.',
                'success'
                )
                  </script>
                    @endif

                    @if(session('delete') == 'Cupón Borrado')
                  <script>
                  Swal.fire(
                'Eliminado!',
                'Tu Cupón se eliminó con éxito.',
                'success'
                )
                  </script>
                    @endif

                    @if(session('delete') == 'Marca Borrada Satisfarctoriamente')
                  <script>
                  Swal.fire(
                'Eliminado!',
                'Tu Marca se eliminó con éxito.',
                'success'
                )
                  </script>
                    @endif

                    @if(session('delete') == 'Categoría Borrada Satisfactoriamente')
                  <script>
                  Swal.fire(
                'Eliminado!',
                'Tu Categoría se eliminó con éxito.',
                'success'
                )
                  </script>
                    @endif

                    @if(session('delete') == 'Administrador Borrado Satisfactoriamente')
                  <script>
                  Swal.fire(
                'Eliminado!',
                'Tu Administrador se eliminó con éxito.',
                'success'
                )
                  </script>
                    @endif

                    @if(session('delete') == 'Usuario Borrado Satisfactoriamente')
                  <script>
                  Swal.fire(
                'Eliminado!',
                'Tu Usuario se eliminó con éxito.',
                'success'
                )
                  </script>
                    @endif
    <script >
$('.formulario-eliminar').submit(function(e){
        e.preventDefault();
        Swal.fire({
  title: '¿Estás Seguro?',
  text: "Este Pedido se eliminara definitivamente!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: '¡Si, Eliminar!',
  cancelButtonText: 'Cancelar',
}).then((result) => {
  if (result.isConfirmed) {
    this.submit();
  }
})
    });
</script>

<script >
$('.formulario-eliminarcupon').submit(function(e){
        e.preventDefault();
        Swal.fire({
  title: '¿Estás Seguro?',
  text: "Este Cupón se eliminara definitivamente!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: '¡Si, Eliminar!',
  cancelButtonText: 'Cancelar',
}).then((result) => {
  if (result.isConfirmed) {
    this.submit();
  }
})
    });
</script>

<script >
$('.formulario-eliminarmarca').submit(function(e){
        e.preventDefault();
        Swal.fire({
  title: '¿Estás Seguro?',
  text: "Esta Marca se eliminara definitivamente!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: '¡Si, Eliminar!',
  cancelButtonText: 'Cancelar',
}).then((result) => {
  if (result.isConfirmed) {
    this.submit();
  }
})
    });
</script>

<script >
$('.formulario-eliminarcategoria').submit(function(e){
        e.preventDefault();
        Swal.fire({
  title: '¿Estás Seguro?',
  text: "Esta Categoría se eliminara definitivamente!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: '¡Si, Eliminar!',
  cancelButtonText: 'Cancelar',
}).then((result) => {
  if (result.isConfirmed) {
    this.submit();
  }
})
    });
</script>

<script >
$('.formulario-eliminaradmin').submit(function(e){
        e.preventDefault();
        Swal.fire({
  title: '¿Estás Seguro?',
  text: "Este Administrador se eliminara definitivamente!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: '¡Si, Eliminar!',
  cancelButtonText: 'Cancelar',
}).then((result) => {
  if (result.isConfirmed) {
    this.submit();
  }
})
    });
</script>

<script >
$('.formulario-eliminarusuario').submit(function(e){
        e.preventDefault();
        Swal.fire({
  title: '¿Estás Seguro?',
  text: "Este Usuario se eliminara definitivamente!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: '¡Si, Eliminar!',
  cancelButtonText: 'Cancelar',
}).then((result) => {
  if (result.isConfirmed) {
    this.submit();
  }
})
    });
</script>






  </body>
</html>
