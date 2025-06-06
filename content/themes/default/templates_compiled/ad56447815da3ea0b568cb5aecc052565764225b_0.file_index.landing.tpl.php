<?php
/* Smarty version 5.4.1, created on 2025-02-28 21:57:33
  from 'file:index.landing.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67c2314d4ddac2_13513846',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad56447815da3ea0b568cb5aecc052565764225b' => 
    array (
      0 => 'index.landing.tpl',
      1 => 1710795146,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_sign_form.tpl' => 2,
    'file:__svg_icons.tpl' => 6,
    'file:_footer.links.tpl' => 2,
    'file:_footer.tpl' => 1,
  ),
))) {
function content_67c2314d4ddac2_13513846 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/drew44/public_html/content/themes/default/templates';
$_smarty_tpl->renderSubTemplate('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<?php if ($_smarty_tpl->getValue('system')['landing_page_template'] == "elengine") {?>

  <style>
    <?php if ($_smarty_tpl->getValue('system')['language']['dir'] == "LTR") {?>
      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('minimize_css')("../css/elengine.css");?>

    <?php } else { ?>
      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('minimize_css')("../css/elengine.rtl.css");?>

    <?php }?>
  </style>

  <div class="d-flex w-100 h-100 position-relative flex-column py-4 overflow-hidden fr_welcome">
    <div class="w-100 position-relative fr_welcome_mid">
      <div class="row m-md-0">
        <div class="col-lg-5 col-md-6 p-md-0 align-self-center">
          <div class="p-4 m-auto fr_welcome_sign">
            <div class="position-relative fr_welcome_sign_head">
              <a class="d-inline-block overflow-hidden logo-wrapper" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
">
                <?php if ($_smarty_tpl->getValue('system')['system_logo']) {?>
                  <img class="logo-light ele_logo_pc" src="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('system')['system_logo'];?>
" alt="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('system')['system_title']);?>
">
                  <?php if (!$_smarty_tpl->getValue('system')['system_logo_dark']) {?>
                    <img class="logo-dark ele_logo_pc" src="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('system')['system_logo'];?>
" alt="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('system')['system_title']);?>
">
                  <?php } else { ?>
                    <img class="logo-dark ele_logo_pc" src="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('system')['system_logo_dark'];?>
" alt="<?php echo $_smarty_tpl->getValue('system')['system_title'];?>
">
                  <?php }?>
                <?php } else { ?>
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('system')['system_title']);?>

                <?php }?>
              </a>
              <h5><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Welcome to");?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('system')['system_title']);?>
</h5>
            </div>

            <?php $_smarty_tpl->renderSubTemplate('file:_sign_form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('do'=>"in"), (int) 0, $_smarty_current_dir);
?>
          </div>
        </div>

        <div class="col-lg-7 col-md-6 p-md-0 align-self-center">
          <div class="fr_welcome_bg">
            <img class="position-absolute fr_welcome_bg_img" src="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->getValue('system')['theme'];?>
/images/landing/welcome.jpg" alt="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('system')['system_title']);?>
">
            <div class="d-flex align-items-end fr_welcome_img">
              <svg width="1171" height="241" viewBox="0 0 1171 241" fill="none" xmlns="http://www.w3.org/2000/svg" class="svg_blur">
                <g opacity="0.5" filter="url(#filter0_f)">
                  <path d="M731.735 -179.55C596.571 -157.762 516.36 -74.1815 552.576 7.13199C588.793 88.4455 727.724 136.701 862.887 114.913C998.051 93.1247 1078.26 9.54454 1042.05 -71.769C1005.83 -153.082 866.898 -201.337 731.735 -179.55Z" fill="url(#paint0_linear)" />
                  <path d="M378 114.106C520.489 114.106 636 45.8883 636 -38.2623C636 -122.413 520.489 -190.63 378 -190.63C235.511 -190.63 120 -122.413 120 -38.2623C120 45.8883 235.511 114.106 378 114.106Z" fill="url(#paint1_linear)" />
                </g>
                <defs>
                  <filter id="filter0_f" x="0" y="-310.63" width="1170.74" height="550.775" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                    <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                    <feGaussianBlur stdDeviation="60" result="effect1_foregroundBlur" />
                  </filter>
                  <linearGradient id="paint0_linear" x1="567.5" y1="1.03997" x2="1029.02" y2="64.6468" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#001AFF" />
                    <stop offset="1" stop-color="#6EE5C2" />
                  </linearGradient>
                  <linearGradient id="paint1_linear" x1="155" y1="-11.0234" x2="511.855" y2="-162.127" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#FFC83A" />
                    <stop offset="0.504191" stop-color="#FF008A" />
                    <stop offset="1" stop-color="#6100FF" />
                  </linearGradient>
                </defs>
              </svg>
              <svg width="729" height="576" viewBox="0 0 729 576" fill="none" xmlns="http://www.w3.org/2000/svg" class="svg_lines">
                <g clip-path="url(#clip0_1230_11366)">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M374.115 -145.719C341.801 -183.348 280.863 -203.754 233.564 -207.792L233.691 -209.286C281.181 -205.232 342.577 -184.748 375.253 -146.696C391.618 -127.64 400.785 -104.166 397.362 -76.1853C393.942 -48.2326 377.969 -15.8775 344.261 21.0018C242.693 132.129 178.932 254.77 165.604 339.046C158.933 381.224 164.931 413.519 184.772 430.101C204.592 446.666 238.6 447.853 288.73 426.874C324.561 411.878 356.58 410.542 382.45 420.831C408.329 431.122 427.934 452.999 439.015 484.183C460.96 545.937 449.533 644.287 387.265 762.353C385.351 766.4 383.378 770.473 381.345 774.57L380.001 773.903C381.476 770.93 382.92 767.97 384.332 765.023L384.19 764.947C384.773 763.856 385.35 762.767 385.924 761.68C439.783 647.784 446.724 554.019 423.814 494.772C411.959 464.113 392.123 442.716 366.667 432.485C341.207 422.253 310.017 423.147 275.38 437.283C227.06 457.003 193.023 455.439 172.346 438.073C151.697 420.731 144.712 387.903 149.799 345.932C159.98 261.929 218.614 140.328 315.702 28.9899C347.766 -7.7808 362.343 -39.8651 364.8 -67.3975C367.256 -94.9061 357.622 -117.97 341.056 -136.747C307.875 -174.357 246.916 -194.71 199.986 -198.709L200.113 -200.203C247.241 -196.188 308.642 -175.754 342.181 -137.739C358.975 -118.703 368.792 -95.2448 366.294 -67.2642C363.799 -39.3074 349.019 -6.93527 316.832 29.9757C219.861 141.18 161.421 262.51 151.288 346.113C146.218 387.946 153.266 420.09 173.311 436.924C193.327 453.735 226.646 455.552 274.813 435.894C309.719 421.648 341.322 420.682 367.227 431.094C393.136 441.507 413.237 463.258 425.213 494.231C446.239 548.608 442.266 631.467 400.786 731.851C449.796 627.282 457.485 540.639 437.602 484.685C426.637 453.827 407.3 432.327 381.896 422.225C356.484 412.118 324.883 413.37 289.309 428.257C239.064 449.285 204.314 448.389 183.81 431.252C163.326 414.132 157.433 381.104 164.122 338.811C177.512 254.143 241.471 131.243 343.154 19.9899C376.742 -16.7587 392.504 -48.8354 395.873 -76.3675C399.238 -103.872 390.246 -126.936 374.115 -145.719ZM307.155 -127.49C273.601 -164.928 213.09 -184.965 166.78 -188.723L166.902 -190.218C213.416 -186.443 274.363 -166.325 308.272 -128.491C325.251 -109.548 335.46 -86.1491 333.648 -58.1643C331.837 -30.2006 318.03 2.2436 287.18 39.3161C194.245 150.998 140.062 270.127 132.299 352.526C128.415 393.749 136.164 425.565 156.212 442.769C176.23 459.947 208.811 462.803 255.213 445.382C289.672 432.445 320.975 432.066 346.798 442.619C372.625 453.174 392.872 474.626 405.283 505.161C430.091 566.198 423.63 663.581 367.954 783.452L366.594 782.82C422.188 663.127 428.477 566.211 403.893 505.726C391.608 475.5 371.623 454.385 346.23 444.008C320.833 433.628 289.929 433.95 255.74 446.786C209.148 464.278 175.876 461.621 155.235 443.908C134.623 426.22 126.907 393.766 130.805 352.386C138.607 269.579 192.981 150.171 286.027 38.3567C316.754 1.43161 330.368 -30.7198 332.151 -58.2612C333.933 -85.7816 323.909 -108.797 307.155 -127.49ZM273.304 -118.324C239.37 -155.591 179.309 -175.335 133.625 -178.873L133.741 -180.369C179.636 -176.814 240.126 -156.988 274.413 -119.334C291.578 -100.483 302.186 -77.1472 301.068 -49.1707C299.951 -21.2125 287.128 11.2836 257.631 48.4873C168.781 160.552 118.989 277.936 113.666 359.361C111.004 400.09 119.476 431.634 139.51 449.111C159.511 466.559 191.305 470.207 235.839 454.523C269.033 442.832 299.628 443.016 325.216 453.705C350.805 464.396 371.302 485.559 384.358 515.667C410.457 575.854 406.852 671.824 354.883 791.904L353.506 791.308C405.396 671.412 408.847 575.911 382.982 516.263C370.055 486.453 349.816 465.608 324.637 455.089C299.456 444.57 269.252 444.345 236.337 455.937C191.578 471.701 159.118 468.206 138.524 450.241C117.962 432.304 109.496 400.164 112.169 359.263C117.519 277.425 167.498 159.757 256.456 47.5553C285.83 10.5066 298.469 -21.692 299.569 -49.2306C300.669 -76.751 290.249 -99.7146 273.304 -118.324ZM239.502 -109.25C205.181 -146.349 145.573 -165.821 100.52 -169.163L100.631 -170.659C145.902 -167.301 205.933 -147.745 240.603 -110.269C257.959 -91.5084 268.97 -68.2413 268.555 -40.2856C268.14 -12.3454 256.312 20.1824 228.184 57.4866C143.466 169.842 98.0947 285.233 95.232 365.56C93.8002 405.735 103.003 436.976 123.029 454.761C143.021 472.517 174.031 477.058 216.698 463.309C248.801 452.965 278.774 453.765 304.16 464.613C329.547 475.461 350.274 496.327 363.936 525.983C391.248 585.272 390.344 679.709 342.125 799.921L340.733 799.363C388.876 679.341 389.642 585.371 362.574 526.611C349.045 497.243 328.569 476.674 303.57 465.992C278.57 455.309 248.976 454.485 217.158 464.737C174.231 478.569 142.583 474.133 122.033 455.883C101.517 437.662 92.2946 405.867 93.733 365.507C96.6105 284.762 142.162 169.079 226.986 56.5835C254.992 19.4419 266.646 -12.784 267.055 -40.3078C267.463 -67.8162 256.641 -90.7236 239.502 -109.25ZM205.743 -100.267C171.028 -137.198 111.873 -156.42 67.4557 -159.587L67.5623 -161.083C112.205 -157.9 171.775 -138.593 206.836 -101.294C224.386 -82.6233 235.806 -59.4289 236.102 -31.5065C236.397 -3.59706 225.577 28.9421 198.831 66.3164C118.288 178.869 77.4048 292.002 77.0397 371.1C76.8571 410.655 86.8043 441.56 106.82 459.693C126.803 477.796 157.016 483.338 197.78 471.743C229.367 462.758 259.006 464.183 284.3 475.194C309.597 486.207 330.485 506.78 344.613 535.983C372.859 594.367 374.096 687.239 329.669 807.503L328.262 806.983C372.619 686.909 371.258 594.502 343.263 536.637C329.271 507.715 308.629 487.421 283.702 476.57C258.772 465.717 229.495 464.281 198.19 473.186C157.131 484.865 126.313 479.376 105.813 460.804C85.3452 442.262 75.3562 410.846 75.5397 371.093C75.9068 291.573 116.965 178.14 197.612 65.4435C224.235 28.2398 234.893 -3.99345 234.602 -31.4906C234.311 -58.9749 223.081 -81.8215 205.743 -100.267ZM172.029 -91.3744C136.913 -128.14 78.2114 -147.134 34.4321 -150.147L34.5351 -151.643C78.546 -148.615 137.655 -129.534 173.114 -92.4104C190.861 -73.8293 202.696 -50.7122 203.71 -22.8359C204.723 5.03013 194.921 37.5602 169.573 74.9742C93.2449 187.632 56.9505 298.369 59.1376 376.168C60.2312 415.07 70.94 445.622 90.937 464.117C110.904 482.585 140.289 489.173 179.078 479.821C209.927 472.383 239.12 474.531 264.281 485.745C289.445 496.96 310.525 517.221 325.181 545.922C354.482 603.305 358.105 694.404 317.509 814.644L316.088 814.165C356.619 694.116 352.888 603.48 323.845 546.604C309.328 518.176 288.489 498.176 263.671 487.115C238.851 476.053 210.001 473.909 179.43 481.279C140.311 490.711 110.359 484.124 89.9185 465.219C69.5077 446.34 58.7376 415.32 57.6382 376.21C55.4391 297.985 91.902 186.94 168.331 74.1329C193.558 36.8977 203.21 4.67716 202.211 -22.7813C201.212 -50.2295 189.569 -73.0107 172.029 -91.3744ZM138.355 -82.5731C102.829 -119.174 44.5808 -137.962 1.44287 -140.841L1.54276 -142.338C44.9189 -139.442 103.568 -120.567 139.431 -83.6179C157.38 -65.1258 169.634 -42.0908 171.374 -14.2732C173.114 13.5365 164.34 46.0371 140.401 83.4603C68.3289 196.129 36.6287 305.026 41.376 381.806C43.7496 420.196 55.2268 450.462 75.2109 469.203C95.1668 487.918 123.733 495.257 160.572 487.545C221.033 474.889 275.768 498.219 306.117 554.873C336.434 611.468 342.361 701.203 305.635 821.343L304.201 820.904C340.867 700.96 334.847 611.682 304.794 555.581C274.773 499.538 220.716 476.488 160.879 489.014C123.681 496.8 94.5785 489.422 74.1848 470.297C53.8191 451.198 42.2657 420.502 39.8789 381.898C35.1052 304.692 66.9641 195.479 139.138 82.652C162.957 45.416 171.592 13.2282 169.877 -14.1795C168.163 -41.5793 156.1 -64.2904 138.355 -82.5731ZM104.718 -73.8624C68.7748 -110.299 10.9783 -128.901 -31.5163 -131.669L-31.4188 -133.166C11.3204 -130.382 69.5098 -111.69 105.786 -74.9158C123.94 -56.5125 136.619 -33.5644 139.093 -5.81831C141.566 21.9221 133.831 54.3728 111.313 91.7749C43.5324 204.361 16.5293 311.054 23.8929 386.634C27.5745 424.422 39.8376 454.357 59.8004 473.401C79.7389 492.422 107.454 500.669 142.27 494.912C201.594 485.102 256.041 508.238 287.376 563.939C318.683 619.591 326.859 707.636 294.039 827.597L292.592 827.201C325.359 707.437 317.105 619.846 286.068 564.675C255.06 509.554 201.252 486.679 142.515 496.392C107.315 502.213 79.0995 493.885 58.765 474.486C38.4548 455.111 26.1027 424.784 22.4 386.78C14.9948 310.773 42.1461 203.756 110.028 91.0012C132.428 53.7949 140.037 21.6597 137.599 -5.68509C135.162 -33.0242 122.673 -55.6605 104.718 -73.8624ZM71.1184 -65.2429C34.7496 -101.516 -22.5976 -119.953 -64.4476 -122.629L-64.3519 -124.126C-22.251 -121.434 35.4812 -102.905 72.1776 -66.305C90.5409 -47.9902 103.651 -25.1339 106.865 2.52775C110.079 30.1859 103.391 62.5661 82.3066 99.9166C18.8512 212.328 -3.41388 316.883 6.59184 391.295C11.5944 428.499 24.6541 458.109 44.5965 477.431C64.5191 496.734 91.3791 505.838 124.158 501.921C182.589 494.938 236.752 517.896 269.023 572.648C301.27 627.358 311.593 713.697 282.712 833.401L281.254 833.049C310.088 713.543 299.702 627.652 267.731 573.41C235.785 519.21 182.223 496.493 124.336 503.41C91.1525 507.375 63.8303 498.156 43.5528 478.509C23.2953 458.881 10.1369 428.915 5.10523 391.495C-4.95766 316.658 17.4431 211.771 81.0003 99.1793C101.969 62.0332 108.544 29.9705 105.375 2.70087C102.207 -24.5652 89.2877 -47.1216 71.1184 -65.2429ZM37.5502 -56.7129C0.747148 -92.8218 -56.1538 -111.114 -97.3588 -113.719L-97.2641 -115.216C-55.8023 -112.595 1.47561 -94.2085 38.6007 -57.7836C57.1773 -39.5573 70.7229 -16.7979 74.6847 10.7664C78.6462 38.3292 73.0137 70.6184 53.3735 107.887C-5.7249 220.031 -23.7338 324.018 -11.3191 398.05C-5.11195 435.065 8.69025 464.54 28.7038 483.83C48.6982 503.101 74.9442 512.26 106.191 508.575C164.699 501.676 218.596 524.481 251.58 578.97C284.537 633.416 296.552 719.388 271.642 838.757L270.174 838.45C295.043 719.276 282.98 633.74 250.296 579.747C217.638 525.795 164.332 503.23 106.367 510.065C74.6932 513.8 47.9949 504.506 27.6629 484.91C7.35019 465.332 -6.55605 435.524 -12.7984 398.298C-25.2828 323.85 -7.15515 219.527 52.0465 107.188C71.5744 70.1323 77.1067 38.1621 73.1999 10.9798C69.2933 -16.2008 55.9376 -38.6723 37.5502 -56.7129ZM4.01608 -48.2756C-33.2299 -84.2204 -89.6885 -102.388 -130.249 -104.942L-130.154 -106.439C-89.3317 -103.868 -32.5043 -85.6048 5.0577 -49.3549C23.8519 -31.2173 37.8384 -8.56004 42.554 18.8941C47.2696 46.3485 42.7016 78.526 24.5151 115.683C-30.1983 227.467 -43.8503 330.297 -28.9711 403.654C-21.5317 440.332 -6.97005 469.598 13.1074 488.955C33.1683 508.296 58.7699 517.78 88.412 514.866C145.671 509.237 199.299 531.904 233.334 585.822C267.347 639.704 281.735 724.698 260.826 843.656L259.349 843.397C280.223 724.636 265.804 640.07 232.066 586.623C198.351 533.213 145.287 510.782 88.5588 516.359C58.4732 519.316 32.4391 509.676 12.0663 490.035C-8.29007 470.409 -22.9603 440.835 -30.4412 403.952C-45.4028 330.189 -31.649 227.018 23.1678 115.023C41.2458 78.0884 45.7274 46.2306 41.0757 19.1481C36.4239 -7.93469 22.6258 -30.3159 4.01608 -48.2756ZM-29.4911 -39.9269C-67.189 -75.7072 -123.21 -93.7687 -163.126 -96.292L-163.032 -97.789C-122.847 -95.2488 -66.466 -77.089 -28.4585 -41.0149C-9.44236 -22.9661 4.99027 -0.416174 10.4659 26.9148C15.9419 54.2475 12.446 86.2929 -4.27771 123.307C-54.5799 234.64 -63.2546 334.554 -45.5971 406.354C-27.9342 478.177 15.9922 521.689 70.8407 520.795C128.138 519.861 181.493 542.385 216.264 594.881C251.014 647.346 267.128 729.636 250.25 848.103L248.765 847.891C265.616 729.617 249.482 647.75 215.013 595.709C180.565 543.699 127.727 521.368 70.8651 522.295C15.0313 523.205 -29.3032 478.891 -47.0537 406.713C-64.8096 334.512 -56.0501 234.251 -5.64465 122.69C10.975 85.9057 14.3986 54.1801 8.99517 27.2095C3.59137 0.237209 -10.6545 -22.0485 -29.4911 -39.9269ZM-62.9712 -31.6683C-101.13 -67.2832 -156.719 -85.2581 -195.993 -87.7697L-195.897 -89.2667C-156.35 -86.7376 -100.409 -68.6623 -61.9477 -32.7649C-42.7052 -14.8053 -27.8213 7.63185 -21.5796 34.8267C-15.3373 62.0245 -17.7539 93.9171 -33.0066 130.759C-78.8744 241.549 -82.9811 339.617 -62.7423 410.397C-42.4942 481.209 2.04356 524.548 53.4023 526.366C110.484 528.387 163.578 550.794 199.164 602.294C234.731 653.769 252.728 734.192 239.905 852.092L238.414 851.93C251.216 734.22 233.214 654.211 197.93 603.147C162.664 552.109 110.054 529.873 53.3492 527.865C1.07499 526.014 -43.8437 481.945 -64.1845 410.809C-84.5344 339.641 -80.3624 241.222 -34.3925 130.185C-19.2386 93.582 -16.88 62.0084 -23.0416 35.1622C-29.2039 8.31306 -43.9032 -13.8716 -62.9712 -31.6683ZM-96.4279 -23.4993C-135.057 -58.9477 -190.22 -76.8545 -228.855 -79.3736L-228.757 -80.8704C-189.845 -78.3333 -134.339 -60.324 -95.4138 -24.6044C-75.9404 -6.73465 -60.6 15.5843 -53.5868 42.6299C-46.5724 69.6797 -47.9031 101.399 -61.6773 138.038C-103.09 248.197 -103.09 345.157 -80.4921 415.284C-57.8815 485.452 -12.7269 528.599 36.0899 531.576C92.8282 535.036 145.674 557.346 182.123 608.224C218.554 659.079 238.524 738.366 229.781 855.623L228.286 855.511C237.014 738.444 217.053 659.558 180.903 609.098C144.771 558.661 92.3863 536.511 35.9986 533.073C-13.6953 530.043 -59.2151 486.204 -81.9198 415.744C-104.638 345.243 -104.593 247.932 -63.0814 137.51C-49.3999 101.118 -48.1127 69.7157 -55.0388 43.0064C-61.9659 16.2931 -77.1241 -5.78505 -96.4279 -23.4993ZM-129.864 -15.419C-168.973 -50.6995 -223.717 -68.5564 -261.715 -71.1017L-261.615 -72.5984C-223.335 -70.0342 -168.256 -52.073 -128.859 -16.5328C-109.15 1.24652 -93.3481 23.4416 -85.5579 50.3251C-77.7663 77.2135 -78.0049 108.739 -90.294 145.146C-127.234 254.581 -122.729 349.531 -97.5685 418.554C-72.3927 487.621 -26.6041 530.598 18.9453 536.427C75.1022 543.614 127.7 565.835 165.077 615.511C202.441 665.171 224.51 742.156 219.869 858.693L218.371 858.633C223.004 742.286 200.957 665.694 163.878 616.413C126.811 567.149 74.6367 545.066 18.7549 537.915C-27.5767 531.985 -73.7028 488.407 -98.9778 419.068C-124.268 349.687 -128.75 254.384 -91.7152 144.666C-79.5119 108.513 -79.3022 77.3024 -86.9986 50.7426C-94.6965 24.1777 -110.319 2.2119 -129.864 -15.419ZM-163.278 -7.42936C-202.877 -42.5401 -257.209 -60.3648 -294.575 -62.9548L-294.471 -64.4512C-256.821 -61.8415 -202.162 -43.9106 -162.282 -8.55174C-142.333 9.13634 -126.065 31.202 -117.493 57.9102C-108.919 84.624 -108.06 115.935 -118.858 152.079C-151.309 260.703 -142.532 353.891 -114.918 421.933C-87.2875 490.017 -40.8551 532.816 1.92745 540.917C57.0683 551.358 109.427 573.507 147.854 622.091C186.274 670.666 210.681 745.557 210.162 861.301L208.662 861.294C209.18 745.745 184.811 671.235 146.677 623.022C108.552 574.818 56.5801 552.792 1.64834 542.391C-41.828 534.158 -88.5737 490.837 -116.308 422.497C-144.06 354.115 -152.836 260.575 -120.295 151.65C-109.575 115.766 -110.448 84.7666 -118.921 58.3686C-127.395 31.9651 -143.488 10.1174 -163.278 -7.42936ZM-196.676 0.472322C-236.775 -34.4666 -290.704 -52.2763 -327.442 -54.9292L-327.334 -56.4252C-290.309 -53.7516 -236.061 -35.8342 -195.69 -0.658592C-155.277 34.5542 -128.759 87.0851 -147.377 158.842C-175.327 266.566 -162.578 358.234 -132.655 425.413C-102.713 492.633 -55.6271 535.243 -14.9786 545.045C40.1096 558.329 92.2428 580.421 131.494 628.013C170.742 675.6 197.023 748.575 200.646 863.445L199.147 863.493C195.53 748.815 169.299 676.208 130.337 628.967C91.3789 581.731 39.6061 559.751 -15.3302 546.503C-56.5969 536.552 -103.976 493.485 -134.025 426.024C-164.092 358.522 -176.861 266.506 -148.829 158.465C-130.376 87.3451 -156.619 35.374 -196.676 0.472322ZM-230.06 8.28598C-270.668 -26.4788 -324.205 -44.2901 -360.32 -47.0236L-360.207 -48.5193C-323.802 -45.7639 -269.956 -27.8433 -229.084 7.14652C-188.175 42.1684 -160.241 94.3239 -175.855 165.433C-199.293 272.173 -182.966 362.6 -150.921 429.054C-118.859 495.545 -71.1101 537.953 -31.7857 548.81C23.5088 564.075 75.4297 586.126 115.457 632.935C155.482 679.742 183.532 751.206 191.311 865.126L189.814 865.228C182.048 751.497 154.06 680.387 114.317 633.91C74.5751 587.434 22.9947 565.489 -32.1849 550.255C-72.0729 539.244 -120.1 496.425 -152.272 429.705C-184.463 362.947 -200.83 272.178 -177.32 165.111C-161.846 94.6404 -189.489 43.0187 -230.06 8.28598ZM-263.434 16.0142C-304.563 -18.5737 -357.716 -36.4031 -393.215 -39.2345L-393.095 -40.7298C-357.305 -37.8751 -303.851 -19.9353 -262.469 14.8662C-221.054 49.6949 -191.694 101.453 -204.298 171.855C-223.217 277.521 -203.034 366.121 -168.724 431.555C-134.398 497.021 -85.9693 539.236 -48.4698 552.222C5.97789 571.078 57.6921 593.1 98.7635 638.71C139.841 684.326 170.194 753.445 182.145 866.344L180.653 866.502C168.723 753.797 138.446 685.018 97.6488 639.713C56.8462 594.402 5.44364 572.48 -48.9606 553.64C-86.9289 540.491 -135.61 497.939 -170.053 432.252C-204.511 366.534 -224.755 277.597 -205.775 171.59C-193.284 101.826 -222.338 50.5747 -263.434 16.0142ZM82.724 643.461C41.3949 598.767 -9.83149 576.859 -65.6047 556.672C-103.409 542.99 -152.765 500.685 -189.058 435.66C-225.366 370.607 -248.636 282.755 -234.194 177.901C-224.69 108.898 -255.167 58.0394 -296.798 23.6545C-338.457 -10.7535 -391.238 -28.6167 -426.127 -31.563L-426 -33.0577C-390.819 -30.0866 -337.746 -12.112 -295.843 22.498C-253.912 57.1311 -223.117 108.471 -232.708 178.106C-247.103 282.618 -223.907 370.143 -187.748 434.929C-151.573 499.743 -102.461 541.738 -65.0942 555.262C-9.2941 575.458 42.2336 597.465 83.8253 642.442C125.423 687.427 157.008 755.302 173.141 867.096L171.657 867.31C155.55 755.698 124.047 688.148 82.724 643.461ZM66.4481 648.037C24.0828 604.353 -26.9836 582.448 -82.188 559.333C-119.104 543.876 -169.141 501.838 -207.474 437.81C-245.82 373.76 -272.483 287.66 -262.583 184.044C-256.069 115.858 -287.979 65.4136 -330.155 31.2081C-372.354 -3.01661 -424.774 -20.9288 -459.061 -24.0068L-458.927 -25.5008C-424.348 -22.3966 -371.645 -4.37222 -329.21 30.0431C-286.752 64.4776 -254.516 115.377 -261.09 184.187C-270.956 287.456 -244.384 373.238 -206.187 437.039C-167.977 500.863 -118.162 542.645 -81.6087 557.95C-26.4313 581.053 24.9165 603.058 67.5249 646.993C110.147 690.941 143.961 756.76 164.288 867.38L162.812 867.651C142.519 757.216 108.8 691.707 66.4481 648.037Z" fill="currentColor"></path>
                </g>
              </svg>
              <div class="position-relative w-100 fr_welcome_img_innr">
                <!-- welcome message -->
                <h5><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Welcome to");?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('system')['system_title']);?>
</h5>
                <h2><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Share your memories, connect with others, make new friends");?>
</h2>
                <p class="m-0"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('system')['system_description']);?>
</p>
                <!-- welcome message -->

                <?php if ($_smarty_tpl->getValue('system')['play_store_badge_enabled'] || $_smarty_tpl->getValue('system')['appgallery_badge_enabled'] || $_smarty_tpl->getValue('system')['app_store_badge_enabled']) {?>
                  <div class="mt-4 fr_welcome_apps <?php if ($_smarty_tpl->getValue('system')['play_store_badge_enabled']) {?>mx-n2<?php }?>">
                    <?php if ($_smarty_tpl->getValue('system')['play_store_badge_enabled']) {?>
                      <a href="<?php echo $_smarty_tpl->getValue('system')['play_store_link'];?>
" target="_blank">
                        <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"playstore_badge",'height'=>"68px"), (int) 0, $_smarty_current_dir);
?>
                      </a>
                    <?php }?>
                    <?php if ($_smarty_tpl->getValue('system')['appgallery_badge_enabled']) {?>
                      <a href="<?php echo $_smarty_tpl->getValue('system')['appgallery_store_link'];?>
" target="_blank">
                        <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"appgallery_badge",'height'=>"50px",'class'=>"mr10"), (int) 0, $_smarty_current_dir);
?>
                      </a>
                    <?php }?>
                    <?php if ($_smarty_tpl->getValue('system')['app_store_badge_enabled']) {?>
                      <a href="<?php echo $_smarty_tpl->getValue('system')['app_store_link'];?>
" target="_blank">
                        <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"appstore_badge",'height'=>"50px"), (int) 0, $_smarty_current_dir);
?>
                      </a>
                    <?php }?>
                  </div>
                <?php }?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="w-100 position-relative mt-5 fr_welcome_bottom">
      <?php $_smarty_tpl->renderSubTemplate('file:_footer.links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    </div>
  </div>

<?php } else { ?>

  <div class="container-fluid">
    <div class="row landing-row">
      <div class="col-lg-6 landing-left">
        <div class="landing-intro">
          <!-- welcome message -->
          <h5><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Welcome to");?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('system')['system_title']);?>
</h5>
          <h1><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('system')['system_description']);?>
</h1>
          <!-- welcome message -->

          <!-- slider -->
          <div class="landing-slider d-none d-lg-block">
            <ul class="landing-slides">
              <input type="radio" name="radio-btn" id="img-1" checked />
              <li class="landing-slide-container">
                <div class="landing-slide">
                  <img src="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->getValue('system')['theme'];?>
/images/landing/slide_1.svg" />
                </div>
                <div class="nav">
                  <label for="img-3" class="prev">&#x2039;</label>
                  <label for="img-2" class="next">&#x203a;</label>
                </div>
              </li>
              <input type="radio" name="radio-btn" id="img-2" />
              <li class="landing-slide-container">
                <div class="landing-slide">
                  <img src="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->getValue('system')['theme'];?>
/images/landing/slide_2.svg" />
                </div>
                <div class="nav">
                  <label for="img-1" class="prev">&#x2039;</label>
                  <label for="img-3" class="next">&#x203a;</label>
                </div>
              </li>
              <input type="radio" name="radio-btn" id="img-3" />
              <li class="landing-slide-container">
                <div class="landing-slide">
                  <img src="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->getValue('system')['theme'];?>
/images/landing/slide_3.svg" />
                </div>
                <div class="nav">
                  <label for="img-2" class="prev">&#x2039;</label>
                  <label for="img-1" class="next">&#x203a;</label>
                </div>
              </li>
              <li class="nav-dots">
                <label for="img-1" class="nav-dot" id="img-dot-1"></label>
                <label for="img-2" class="nav-dot" id="img-dot-2"></label>
                <label for="img-3" class="nav-dot" id="img-dot-3"></label>
              </li>
            </ul>
          </div>
          <!-- slider -->
        </div>
      </div>
      <div class="col-lg-6">
        <div class="landing-form">
          <?php $_smarty_tpl->renderSubTemplate('file:_sign_form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('do'=>"in"), (int) 0, $_smarty_current_dir);
?>
          <div class="text-center">
            <?php if ($_smarty_tpl->getValue('system')['play_store_badge_enabled']) {?>
              <a href="<?php echo $_smarty_tpl->getValue('system')['play_store_link'];?>
" target="_blank">
                <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"playstore_badge",'height'=>"68px"), (int) 0, $_smarty_current_dir);
?>
              </a>
            <?php }?>
            <?php if ($_smarty_tpl->getValue('system')['appgallery_badge_enabled']) {?>
              <a href="<?php echo $_smarty_tpl->getValue('system')['appgallery_store_link'];?>
" target="_blank">
                <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"appgallery_badge",'height'=>"50px",'class'=>"mr10"), (int) 0, $_smarty_current_dir);
?>
              </a>
            <?php }?>
            <?php if ($_smarty_tpl->getValue('system')['app_store_badge_enabled']) {?>
              <a href="<?php echo $_smarty_tpl->getValue('system')['app_store_link'];?>
" target="_blank">
                <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"appstore_badge",'height'=>"50px"), (int) 0, $_smarty_current_dir);
?>
              </a>
            <?php }?>
          </div>
        </div>

        <?php $_smarty_tpl->renderSubTemplate('file:_footer.links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
      </div>
    </div>
  </div>

<?php }?>

<?php $_smarty_tpl->renderSubTemplate('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
