<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body>
    <header class="header">
        <div class="barra-navegacion"> 
            <div class="contenedor-cabecera">
                <div class="list-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-menu-2" width="80" height="80" viewBox="0 0 24 24" stroke-width="1" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M4 6l16 0" />
                        <path d="M4 12l16 0" />
                        <path d="M4 18l16 0" />
                    </svg>
                </div>
                
                <div class="logo">
                    <a href="<?php echo site_url('/')?>">
                        <svg width="148" height="35" viewBox="0 0 148 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M144.411 4.54744H144.887C145.028 4.54744 145.137 4.51867 145.206 4.4589C145.272 4.39914 145.301 4.3106 145.301 4.19771C145.301 4.0981 145.272 4.02726 145.21 3.98078C145.141 3.93429 145.04 3.90994 144.887 3.90994H144.411V4.54744ZM143.72 6.03495V3.25252H144.869C145.279 3.25252 145.566 3.33221 145.737 3.49159C145.907 3.65096 145.991 3.85461 145.991 4.10252C145.991 4.30174 145.958 4.46997 145.885 4.60721C145.81 4.74445 145.664 4.83078 145.442 4.86841C145.584 4.88833 145.693 4.93039 145.759 4.99015C145.834 5.04992 145.878 5.12075 145.907 5.20265C145.936 5.28455 145.951 5.37752 145.951 5.48377V6.03495H145.25V5.49484C145.25 5.42401 145.243 5.36424 145.228 5.31997C145.217 5.27349 145.181 5.24028 145.13 5.21815C145.075 5.19823 144.989 5.18495 144.869 5.18495H144.422V6.03495H143.72ZM144.752 6.99341C145.101 6.99341 145.42 6.93364 145.704 6.81633C145.98 6.70122 146.219 6.53963 146.416 6.33377C146.616 6.12791 146.768 5.88664 146.877 5.60552C146.983 5.32661 147.034 5.02336 147.034 4.69797C147.034 4.37258 146.983 4.06932 146.877 3.7882C146.768 3.50929 146.616 3.26802 146.416 3.05994C146.219 2.8563 145.98 2.69692 145.704 2.58403C145.42 2.46893 145.101 2.41359 144.752 2.41359C144.393 2.41359 144.077 2.46893 143.793 2.58403C143.51 2.69692 143.273 2.8563 143.074 3.05994C142.875 3.26802 142.722 3.50929 142.616 3.7882C142.507 4.06932 142.456 4.37258 142.456 4.69797C142.456 5.02336 142.507 5.32661 142.616 5.60552C142.722 5.88664 142.875 6.12791 143.074 6.33377C143.273 6.53963 143.51 6.70122 143.793 6.81633C144.077 6.93364 144.393 6.99341 144.752 6.99341ZM144.752 7.75708C144.178 7.75708 143.658 7.62205 143.193 7.35422C142.729 7.08416 142.366 6.71893 142.093 6.25409C141.828 5.78924 141.69 5.27127 141.69 4.69797C141.69 4.11802 141.821 3.59784 142.089 3.13963C142.354 2.68364 142.722 2.32062 143.182 2.05278C143.647 1.78273 144.167 1.64771 144.752 1.64771C145.329 1.64771 145.85 1.78273 146.31 2.05278C146.764 2.32062 147.125 2.68364 147.397 3.13963C147.665 3.59784 147.8 4.11802 147.8 4.69797C147.8 5.27127 147.665 5.78924 147.397 6.25409C147.125 6.71893 146.764 7.08416 146.303 7.35422C145.839 7.62205 145.323 7.75708 144.752 7.75708Z" fill="white"/>
                            <path d="M132.482 33.8702H138.441V1.64771H132.482V33.8702Z" fill="white"/>
                            <path d="M123.32 21.3372C123.32 23.0727 122.94 24.5712 122.187 25.7865C121.439 26.9995 120.407 27.9225 119.132 28.529C117.846 29.1422 116.408 29.4521 114.86 29.4521C113.278 29.4521 111.817 29.1422 110.513 28.529C109.222 27.9225 108.173 26.9995 107.407 25.7842C106.637 24.5712 106.252 23.0727 106.252 21.3372C106.252 19.5708 106.648 18.059 107.432 16.8437C108.213 15.6285 109.26 14.6855 110.542 14.0458C111.828 13.4017 113.278 13.0763 114.86 13.0763C116.434 13.0763 117.88 13.4105 119.15 14.068C120.414 14.7254 121.432 15.675 122.187 16.8902C122.94 18.1077 123.32 19.604 123.32 21.3372ZM122.3 9.72278C120.131 8.68684 117.625 8.16223 114.86 8.16223C112.093 8.16223 109.572 8.68684 107.367 9.72057C105.158 10.7609 103.39 12.2838 102.115 14.2428C100.84 16.2062 100.193 18.5924 100.193 21.3372C100.193 24.1174 100.84 26.5125 102.115 28.4582C103.39 30.4039 105.158 31.9025 107.374 32.9074C109.572 33.9079 112.093 34.4171 114.86 34.4171C117.625 34.4171 120.131 33.9079 122.3 32.9074C124.476 31.9003 126.222 30.4039 127.48 28.4582C128.737 26.5103 129.377 24.1152 129.377 21.3372C129.377 18.5947 128.737 16.2085 127.48 14.245C126.222 12.2838 124.483 10.7609 122.3 9.72278Z" fill="white"/>
                            <path d="M94.6527 21.6184C93.6765 21.0982 92.5719 20.6577 91.3545 20.3057C90.1592 19.9626 88.8598 19.6173 87.4896 19.2831C86.0398 18.9887 84.7515 18.6898 83.6691 18.3954C82.611 18.1055 81.7942 17.7601 81.2386 17.3684C80.7184 16.9965 80.2027 16.2483 80.2027 15.6197C80.2027 14.7652 80.6055 14.1122 81.4422 13.623C82.2989 13.1206 83.8395 12.866 85.5107 12.866C87.1775 12.866 88.4348 13.4105 89.2516 13.9728C90.0618 14.5306 90.624 15.4536 90.9118 16.7176L90.9516 16.8991H96.9481V16.6733C96.9481 15.0198 96.5098 13.5301 95.6443 12.2418C94.7766 10.9513 93.4839 9.93749 91.8083 9.22695C90.1415 8.51861 88.0452 8.16223 85.5683 8.16223C83.8572 8.16223 82.259 8.33931 80.8136 8.69127C79.3637 9.04322 78.0821 9.54569 77.0107 10.1854C75.9305 10.8318 75.0805 11.6331 74.4784 12.5694C73.8719 13.5079 73.5665 14.5726 73.5665 15.7303C73.5665 16.9921 73.8941 18.0767 74.5404 18.9532C75.1824 19.8254 76.0766 20.5514 77.1989 21.1115C78.3034 21.6626 79.5563 22.1297 80.9221 22.4971C82.2701 22.8579 83.9258 23.1944 85.3359 23.4954C86.7348 23.7013 88.1913 23.9559 89.5239 24.4561C90.7812 24.9298 91.4563 25.9281 91.235 27.2872C91.1663 27.7255 91.0136 28.1616 90.7303 28.5069C89.4907 30.0143 86.7238 29.8151 85.0127 29.7089C83.6824 29.6269 82.2369 29.3547 81.0859 28.6375C79.9016 27.896 79.1601 26.6564 78.8768 25.4611L78.8303 25.284H72.5859L72.5527 25.4766C72.473 25.999 72.5416 26.6453 72.7563 27.3979C72.971 28.1439 73.3672 28.9341 73.9472 29.7443C74.5249 30.5589 75.3506 31.3314 76.4064 32.0375C77.4645 32.7458 78.7971 33.3258 80.3842 33.7618C81.9646 34.1957 83.8639 34.4171 86.0221 34.4171C88.4857 34.4171 90.6284 34.1182 92.3794 33.5339C94.148 32.9428 95.5314 32.0729 96.4766 30.9506C97.4284 29.824 97.911 28.4604 97.911 26.8954C97.911 25.6359 97.61 24.5624 97.0256 23.7035C96.4434 22.8491 95.6443 22.1474 94.6527 21.6184Z" fill="white"/>
                            <path d="M62.0229 25.5119C61.361 26.7271 60.4136 27.6723 59.1785 28.3452C57.9433 29.0203 56.4758 29.3568 54.7824 29.3568C53.286 29.3568 51.9712 29.0203 50.8379 28.3452C49.6979 27.6723 48.8147 26.736 48.1794 25.5384C47.5507 24.3409 47.2342 22.9331 47.2342 21.315C47.2342 18.8845 47.8961 16.9388 49.2175 15.4712C50.5368 14.0059 52.3962 13.2688 54.7824 13.2688C56.4758 13.2688 57.9389 13.5831 59.1563 14.2051C60.3804 14.8315 61.3256 15.7413 62.0008 16.9388C62.6803 18.1363 63.0146 19.5951 63.0146 21.315C63.0146 22.8999 62.6869 24.2966 62.0229 25.5119ZM63.672 9.10731L63.2647 12.266V13.0629C62.5497 11.7968 61.5979 10.7431 60.4203 9.9064C58.7756 8.74429 56.6174 8.15991 53.9324 8.15991C51.4953 8.15991 49.3194 8.70887 47.398 9.80457C45.4767 10.9003 43.9582 12.4276 42.8315 14.3822C41.7092 16.339 41.147 18.6499 41.147 21.315C41.147 23.9115 41.7026 26.1959 42.8071 28.1681C43.9139 30.1426 45.4147 31.6766 47.3006 32.7723C49.1932 33.868 51.2916 34.4147 53.6026 34.4147C55.6656 34.4147 57.4276 34.0185 58.8952 33.2261C60.3627 32.4358 61.5536 31.3888 62.4545 30.0895C62.76 29.6534 63.0389 29.2041 63.2868 28.737L63.5414 33.8591H69.2368V9.10731" fill="white"/>
                            <path d="M21.0082 18.1741V23.0505H29.1917C28.7933 23.9647 28.262 24.7837 27.5935 25.4832C26.6926 26.4328 25.5194 27.1876 24.1183 27.7277C22.6972 28.2722 21.0149 28.5489 19.098 28.5489C16.5944 28.5489 14.3942 28.0664 12.5769 27.1168C10.7684 26.1738 9.3628 24.8435 8.41097 23.1656C7.48792 21.5431 7.00537 19.6483 6.97217 17.541C7.00537 15.478 7.55654 13.4858 8.56371 11.7769C9.53988 10.1367 10.9676 8.85727 12.9443 7.86781C14.786 6.94255 17.1036 6.47328 19.8351 6.47328C21.7498 6.47328 23.5759 6.77433 25.1055 7.34099C26.5664 7.8811 27.7905 8.63813 28.7313 9.58995C29.6676 10.5373 30.3516 11.684 30.7655 13.001L30.874 13.3441H37.0498L37.0055 12.8107C36.7952 10.3492 35.9408 8.18435 34.4599 6.37367C32.999 4.57849 31.0046 3.15961 28.5387 2.15909C26.0905 1.16521 23.162 0.660522 19.8351 0.660522C16.9907 0.660522 14.3433 1.05453 11.9748 1.82927C9.59079 2.61065 7.50563 3.75948 5.77022 5.23813C4.03037 6.72563 2.67568 8.54737 1.73493 10.6547C0.834017 12.6823 0.358105 14.9976 0.331543 17.5388C0.358105 20.0689 0.811882 22.3798 1.67959 24.4052C2.58493 26.5103 3.88871 28.332 5.55993 29.8217C7.22673 31.3048 9.23884 32.4514 11.5343 33.2328C13.6305 33.9478 16.0278 34.3196 19.0869 34.406C19.337 34.4126 19.5849 34.4148 19.824 34.4148C26.6572 34.4148 30.2675 31.6368 32.1313 29.151V33.8083H37.4637V18.1741" fill="white"/>
                        </svg>
                    </a>
                </div>
            </div> 
                
            <div class="contenedor-menu">
                <?php
                $args = array( 
                    'theme_location'        => 'menu-principal',
                    'container'             => 'nav',
                    'container_class'       => 'menu-principal',
                    'menu_class'            => 'menu-principal',
                );
                wp_nav_menu($args);
                ?>
            </div>
        </div>
    </header>