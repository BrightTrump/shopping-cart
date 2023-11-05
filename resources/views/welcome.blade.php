<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    @vite(['resources/css/app.css', 'resources/css/style.css'])


</head>

<body class="">
    <header>
        <div class="justify-between flex items-center py-3 px-16 bg-slate-50 h-[59px]">
            <a href="/" class="" aria-label="go to homepage" aria-current="page">
                <div class="dng-logotype">
                    <img src="" alt="">
                </div>
            </a>

            <ul class="flex items-center">
                <li class="account-nav-item position-relative flex-col-align-center mr-4">
                    <div class="cursor-pointer flex items-center gap-2">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" fill="none"
                                class="dng-icon" viewBox="0 0 16 18">
                                <path
                                    d="M1 17C1.80235 13.7794 4.63218 12.2887 8 12.2887C11.3678 12.2887 14.1976 13.7794 15 17M11.9375 5.00017C11.9375 7.20941 10.1746 9.00035 8 9.00035C5.82538 9.00035 4.0625 7.20941 4.0625 5.00017C4.0625 2.79094 5.82538 1 8 1C10.1746 1 11.9375 2.79094 11.9375 5.00017Z"
                                    stroke="#171725" stroke-width="2" stroke-linecap="round"></path>
                            </svg>
                        </span>
                        <span class="text-[15px] text-black font-medium">Account</span>
                    </div>
                    {{-- <div class="acc-nav-popup pt-3">
                        <div class="dng-bg-white dng-rounded dng-border-gray-300 p-4" style="min-width: 170px;">
                            <ul>
                                <li class="dng-link mb-3">
                                    Login
                                </li>
                                <li class="dng-link"><strong>Signup</strong></li>
                            </ul>
                        </div>
                    </div> --}}
                </li>
                <li>
                    <div role="button" aria-label="view basket" class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" fill="none"
                            class="dng-icon" viewBox="0 0 20 17">
                            <path d="M1.3353 6.63135L18.6647 6.63135L15.9178 15.9999H4.08223L1.3353 6.63135Z"
                                stroke="#171725" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            </path>
                            <path d="M4.34375 6.57904L7.07102 1M15.6569 6.57904L12.9297 1" stroke="#171725"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                        <span class="text-[15px] text-black font-medium">
                            0 items
                        </span>
                    </div>
                </li>
            </ul>
        </div>
        <div class="container mb-3" style="display: none;">
            <form class="flex dng-searchbar">
                <div class="position-relative">
                    <div class="dng-rounded flex-align-center bg-gray-100 dng-border-default"><svg
                            xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" fill="none"
                            class="dng-icon" viewBox="0 0 18 18">
                            <path
                                d="M13.5 13.5L17 17M15.2222 8.11111C15.2222 12.0385 12.0385 15.2222 8.11111 15.2222C4.18375 15.2222 1 12.0385 1 8.11111C1 4.18375 4.18375 1 8.11111 1C12.0385 1 15.2222 4.18375 15.2222 8.11111Z"
                                stroke="#171725" stroke-width="2" stroke-linecap="round"></path>
                        </svg> <input type="text" placeholder="Search for drinks">
                        <div class="loader p-0 ml-2" style="display: none;"><svg xmlns="http://www.w3.org/2000/svg"
                                width="25px" height="25px" fill="#171725" class="dng-icon" viewBox="0 0 30 30">
                                <path opacity="0.35"
                                    d="M26.25 16.2502C27 16.2502 27.5 15.7502 27.5 15.0002C27.5 14.2502 27 13.7502 26.25 13.7502C25.875 13.7502 21.625 13.7502 21.25 13.7502C20.5 13.7502 20 14.2502 20 15.0002C20 15.7502 20.5 16.2502 21.25 16.2502C21.625 16.2502 25.875 16.2502 26.25 16.2502Z"
                                    fill="#F3641F"></path>
                                <path opacity="0.35"
                                    d="M22.125 23.8749C22.625 24.3749 23.375 24.3749 23.875 23.8749C24.375 23.3749 24.375 22.6249 23.875 22.1249C23.625 21.8749 20.625 18.8749 20.375 18.6249C19.875 18.1249 19.125 18.1249 18.625 18.6249C18.125 19.1249 18.125 19.8749 18.625 20.3749C18.75 20.6249 21.75 23.6249 22.125 23.8749Z"
                                    fill="#F3641F"></path>
                                <path opacity="0.49"
                                    d="M16.25 21.2498C16.25 20.4998 15.75 19.9998 15 19.9998C14.25 19.9998 13.75 20.4998 13.75 21.2498C13.75 21.6248 13.75 25.8748 13.75 26.2498C13.75 26.9998 14.25 27.4998 15 27.4998C15.75 27.4998 16.25 26.9998 16.25 26.2498C16.25 25.8748 16.25 21.6248 16.25 21.2498Z"
                                    fill="#F3641F"></path>
                                <path opacity="0.71"
                                    d="M11.5 20.2498C12 19.7498 12 18.9998 11.5 18.4998C11 17.9998 10.25 17.9998 9.75 18.4998C9.5 18.7498 6.5 21.7498 6.25 21.9998C5.75 22.4998 5.75 23.2498 6.25 23.7498C6.75 24.2498 7.5 24.2498 8 23.7498C8.25 23.6248 11.25 20.6248 11.5 20.2498Z"
                                    fill="#F3641F"></path>
                                <path opacity="0.93"
                                    d="M8.75 16.2502C9.5 16.2502 10 15.7502 10 15.0002C10 14.2502 9.5 13.7502 8.75 13.7502C8.375 13.7502 4.125 13.7502 3.75 13.7502C3 13.7502 2.5 14.2502 2.5 15.0002C2.5 15.7502 3 16.2502 3.75 16.2502C4.125 16.2502 8.375 16.2502 8.75 16.2502Z"
                                    fill="#F3641F"></path>
                                <path
                                    d="M9.75 11.5004C10.25 12.0004 11 12.0004 11.5 11.5004C12 11.0004 12 10.2504 11.5 9.75037C11.25 9.37537 8.25 6.37537 7.875 6.12537C7.375 5.62537 6.625 5.62537 6.125 6.12537C5.625 6.62537 5.625 7.37537 6.125 7.87537C6.375 8.25037 9.375 11.2504 9.75 11.5004Z"
                                    fill="#F3641F"></path>
                                <path
                                    d="M16.25 3.75024C16.25 3.00024 15.75 2.50024 15 2.50024C14.25 2.50024 13.75 3.00024 13.75 3.75024C13.75 4.12524 13.75 8.37525 13.75 8.75025C13.75 9.50025 14.25 10.0002 15 10.0002C15.75 10.0002 16.25 9.50025 16.25 8.75025C16.25 8.37525 16.25 4.12524 16.25 3.75024Z"
                                    fill="#F3641F"></path>
                                <path
                                    d="M23.875 7.87537C24.375 7.37537 24.375 6.62537 23.875 6.12537C23.375 5.62537 22.625 5.62537 22.125 6.12537C21.875 6.37537 18.875 9.37537 18.625 9.62537C18.125 10.1254 18.125 10.8754 18.625 11.3754C19.125 11.8754 19.875 11.8754 20.375 11.3754C20.625 11.2504 23.625 8.25037 23.875 7.87537Z"
                                    fill="#F3641F"></path>
                            </svg></div>
                    </div>
                    <ul class="dng-search-dropdown" style="display: none;">
                        <li>No matching drinks</li>
                    </ul>
                </div> <button type="submit" class="dng-rounded typo-white dng-bg-primary px-4 py-2">
                    Search
                </button>
            </form>
        </div>
        <div class="dng-bg-gray-100 dng-border-default dng-navigation">
            <nav class="container flex-align-center">
                <ul class="flex-align-center m-0 g-0 dng-scrollbar-none">
                    <div class="dng-nav-item">
                        <li class="dng-tab-item h-fit mr-4 active"><a href="/"
                                class="nuxt-link-exact-active nuxt-link-active" aria-current="page">
                                Dashboard
                                <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" fill="none"
                                    class="dng-icon" viewBox="0 0 12 6" style="width: 10px !important; display: none;">
                                    <path d="M1 1L6 5L11 1" stroke="#171725" stroke-width="2" stroke-linecap="round">
                                    </path>
                                </svg></a></li> <!---->
                    </div>
                    <div class="dng-nav-item">
                        <li class="dng-tab-item h-fit mr-4"><a href="/champagne-bavwi" class="">
                                Champagne
                                <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" fill="none"
                                    class="dng-icon" viewBox="0 0 12 6" style="width: 10px !important;">
                                    <path d="M1 1L6 5L11 1" stroke="#171725" stroke-width="2" stroke-linecap="round">
                                    </path>
                                </svg></a></li>
                        <ul class="dng-tab-item-popup">
                            <li class=""><a href="/champagne-bavwi/champagne-demi-sec-fhsiq" class="">
                                    Champagne Demi Sec
                                </a></li>
                            <li class=""><a href="/champagne-bavwi/champagne-brut-rose-mpokr" class="">
                                    Champagne - Brut Rose
                                </a></li>
                            <li class=""><a href="/champagne-bavwi/champagne-brut-blanc-gkosy" class="">
                                    Champagne Brut Blanc
                                </a></li>
                            <li class=""><a href="/champagne-bavwi/champagne-vintage-mndoe" class="">
                                    Champagne Vintage
                                </a></li> <!---->
                        </ul>
                    </div>
                    <div class="dng-nav-item">
                        <li class="dng-tab-item h-fit mr-4"><a href="/wines-zntvh" class="">
                                Wines
                                <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" fill="none"
                                    class="dng-icon" viewBox="0 0 12 6" style="width: 10px !important;">
                                    <path d="M1 1L6 5L11 1" stroke="#171725" stroke-width="2" stroke-linecap="round">
                                    </path>
                                </svg></a></li>
                        <ul class="dng-tab-item-popup">
                            <li class=""><a href="/wines-zntvh/red-wine-rltka" class="">
                                    Red Wine
                                </a></li>
                            <li class=""><a href="/wines-zntvh/rose-wine-rqyam" class="">
                                    Rose Wine
                                </a></li>
                            <li class=""><a href="/wines-zntvh/non-alcoholic-wine-ipznq" class="">
                                    Non Alcoholic Wine
                                </a></li>
                            <li class=""><a href="/wines-zntvh/white-wine-rfvnm" class="">
                                    White Wine
                                </a></li> <!---->
                        </ul>
                    </div>
                    <div class="dng-nav-item">
                        <li class="dng-tab-item h-fit mr-4"><a href="/sparkling-wines-hjauz" class="">
                                Sparkling Wines
                                <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" fill="none"
                                    class="dng-icon" viewBox="0 0 12 6" style="width: 10px !important;">
                                    <path d="M1 1L6 5L11 1" stroke="#171725" stroke-width="2" stroke-linecap="round">
                                    </path>
                                </svg></a></li>
                        <ul class="dng-tab-item-popup">
                            <li class=""><a href="/sparkling-wines-hjauz/sparkling-red-wine-edwvr"
                                    class="">
                                    Sparkling Red Wine
                                </a></li>
                            <li class=""><a href="/sparkling-wines-hjauz/sparkling-demi-sec-ynrze"
                                    class="">
                                    Sparkling Demi Sec
                                </a></li>
                            <li class=""><a href="/sparkling-wines-hjauz/sparkling-brut-wine-idrft"
                                    class="">
                                    Sparkling Brut Wine
                                </a></li>
                            <li class=""><a href="/sparkling-wines-hjauz/sparkling-rose-wine-trjpc"
                                    class="">
                                    Sparkling Rose Wine
                                </a></li> <!---->
                        </ul>
                    </div>
                    <div class="dng-nav-item">
                        <li class="dng-tab-item h-fit mr-4"><a href="/beer-ciders-tgpcq" class="">
                                Beer, RTD &amp; Ciders
                                <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" fill="none"
                                    class="dng-icon" viewBox="0 0 12 6" style="width: 10px !important;">
                                    <path d="M1 1L6 5L11 1" stroke="#171725" stroke-width="2" stroke-linecap="round">
                                    </path>
                                </svg></a></li>
                        <ul class="dng-tab-item-popup">
                            <li class=""><a href="/beer-ciders-tgpcq/ciders-rqetg" class="">
                                    Ciders
                                </a></li>
                            <li class=""><a href="/beer-ciders-tgpcq/craft-beer-hykpt" class="">
                                    Craft Beer
                                </a></li>
                            <li class=""><a href="/beer-ciders-tgpcq/lager-zynqj" class="">
                                    Lager
                                </a></li>
                            <li class=""><a href="/beer-ciders-tgpcq/rtd-uvecs" class="">
                                    Ready To Drink
                                </a></li>
                            <li class=""><a href="/beer-ciders-tgpcq/stout-ahbsd" class="">
                                    Stout
                                </a></li> <!---->
                        </ul>
                    </div>
                    <div class="dng-nav-item">
                        <li class="dng-tab-item h-fit mr-4"><a href="/spirits-jtrxv" class="">
                                Spirits
                                <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" fill="none"
                                    class="dng-icon" viewBox="0 0 12 6" style="width: 10px !important;">
                                    <path d="M1 1L6 5L11 1" stroke="#171725" stroke-width="2" stroke-linecap="round">
                                    </path>
                                </svg></a></li>
                        <ul class="dng-tab-item-popup">
                            <li class=""><a href="/spirits-jtrxv/vermouth-swtpr" class="">
                                    Vermouth
                                </a></li>
                            <li class=""><a href="/spirits-jtrxv/aperitif-and-liqueur-kbnor" class="">
                                    Aperitif And Liqueur
                                </a></li>
                            <li class=""><a href="/spirits-jtrxv/cognac-rswka" class="">
                                    Cognac
                                </a></li>
                            <li class=""><a href="/spirits-jtrxv/whisky-rmsid" class="">
                                    Whisky
                                </a></li>
                            <li class=""><a href="/spirits-jtrxv/tequila-wyhug" class="">
                                    Tequila
                                </a></li>
                            <li class=""><a href="/spirits-jtrxv/rum-emcpf" class="">
                                    Rum
                                </a></li>
                            <li class=""><a href="/spirits-jtrxv/bitters-and-ale-ascfx" class="">
                                    Bitters and Ale
                                </a></li>
                            <li class=""><a href="/spirits-jtrxv/brandy-akhep" class="">
                                    Brandy
                                </a></li>
                            <li class=""><a href="/spirits-jtrxv/gin-vobay" class="">
                                    Gin
                                </a></li>
                            <li class=""><a href="/spirits-jtrxv/vodka-pbcve" class="">
                                    Vodka
                                </a></li>
                            <li class=""><a href="/spirits-jtrxv/creams-lwhbo" class="">
                                    Creams
                                </a></li> <!---->
                        </ul>
                    </div>
                    <div class="dng-nav-item">
                        <li class="dng-tab-item h-fit mr-4"><a href="/mixers-soft-drinks-fubar" class="">
                                Mixers &amp; Soft Drinks
                                <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" fill="none"
                                    class="dng-icon" viewBox="0 0 12 6" style="width: 10px !important;">
                                    <path d="M1 1L6 5L11 1" stroke="#171725" stroke-width="2" stroke-linecap="round">
                                    </path>
                                </svg></a></li>
                        <ul class="dng-tab-item-popup">
                            <li class=""><a href="/mixers-soft-drinks-fubar/syrup-rhdzg" class="">
                                    Syrup
                                </a></li>
                            <li class=""><a href="/mixers-soft-drinks-fubar/fruit-juice-jeduw" class="">
                                    Fruit Juice &amp; Yoghurt
                                </a></li>
                            <li class=""><a href="/mixers-soft-drinks-fubar/malt-oyetw" class="">
                                    Malt
                                </a></li>
                            <li class=""><a href="/mixers-soft-drinks-fubar/soft-drinks-orswn" class="">
                                    Soft Drinks
                                </a></li>
                            <li class=""><a href="/mixers-soft-drinks-fubar/energy-sport-drinks-fmygj"
                                    class="">
                                    Energy &amp; Sport Drinks
                                </a></li>
                            <li class=""><a href="/mixers-soft-drinks-fubar/water-jcves" class="">
                                    Water
                                </a></li>
                            <li class=""><a href="/mixers-soft-drinks-fubar/puree-gtnub" class="">
                                    Puree
                                </a></li> <!---->
                        </ul>
                    </div>
                    <div class="dng-nav-item">
                        <li class="dng-tab-item h-fit mr-4"><a href="/extras-xucbr" class="">
                                Extras
                                <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" fill="none"
                                    class="dng-icon" viewBox="0 0 12 6" style="width: 10px !important;">
                                    <path d="M1 1L6 5L11 1" stroke="#171725" stroke-width="2" stroke-linecap="round">
                                    </path>
                                </svg></a></li>
                        <ul class="dng-tab-item-popup">
                            <li class=""><a href="/extras-xucbr/gift-items-vxolj" class="">
                                    Gift Items
                                </a></li>
                            <li class=""><a href="/extras-xucbr/cocktails-ykjie" class="">
                                    Cocktails
                                </a></li>
                            <li class=""><a href="/extras-xucbr/snacks-fxmhg" class="">
                                    Snacks
                                </a></li>
                            <li class=""><a href="/extras-xucbr/party-supplies-nwixu" class="">
                                    Party Supplies
                                </a></li>
                            <li class="separator"><span>Brands</span></li>
                            <li class=""><a href="/brand/1883" class="">
                                    1883
                                </a></li>
                            <li class=""><a href="/brand/1960" class="">
                                    1960
                                </a></li>
                            <li class=""><a href="/brand/19-crimes" class="">
                                    19 Crimes
                                </a></li>
                            <li class=""><a href="/brand/33-export" class="">
                                    "33" Export
                                </a></li>
                            <li class=""><a href="/brand/4-horses" class="">
                                    4 Horses
                                </a></li>
                            <li class=""><a href="/brand/4th-street" class="">
                                    4th street
                                </a></li>
                            <li class=""><a href="/brand/7up" class="">
                                    7up
                                </a></li>
                            <li class=""><a href="/brand/absolut-vodka" class="">
                                    Absolut Vodka
                                </a></li>
                            <li class=""><a href="/brand/ace-bitters" class="">
                                    Ace Bitters
                                </a></li>
                            <li class=""><a href="/brand/african-secret" class="">
                                    African Secret
                                </a></li>
                            <li class=""><a href="/brand/agor" class="">
                                    Agor
                                </a></li>
                            <li class=""><a href="/brand/alize" class="">
                                    Alize
                                </a></li>
                            <li class=""><a href="/brand/alma-de-vega" class="">
                                    Alma de Vega
                                </a></li>
                            <li class=""><a href="/brand/alvisa" class="">
                                    Alvisa
                                </a></li>
                            <li class=""><a href="/brand/amani-bay" class="">
                                    Amani Bay
                                </a></li>
                            <li class=""><a href="/brand/amarula" class="">
                                    Amarula
                                </a></li>
                            <li class=""><a href="/brand/amber" class="">
                                    Amber
                                </a></li>
                            <li class=""><a href="/brand/american-honey" class="">
                                    American Honey
                                </a></li>
                            <li class=""><a href="/brand/amiro" class="">
                                    Amiro
                                </a></li>
                            <li class=""><a href="/brand/amstel" class="">
                                    Amstel
                                </a></li>
                            <li class=""><a href="/brand/andre" class="">
                                    Andre
                                </a></li>
                            <li class=""><a href="/brand/angostura" class="">
                                    Angostura
                                </a></li>
                            <li class=""><a href="/brand/abinbev" class="">
                                    Anheuser-Busch InBev
                                </a></li>
                            <li class=""><a href="/brand/anno-69" class="">
                                    Anno 69
                                </a></li>
                            <li class=""><a href="/brand/antares" class="">
                                    Antares
                                </a></li>
                            <li class=""><a href="/brand/aperol" class="">
                                    Aperol
                                </a></li>
                            <li class=""><a href="/brand/apothic" class="">
                                    Apothic
                                </a></li>
                            <li class=""><a href="/brand/apperito" class="">
                                    Apperito
                                </a></li>
                            <li class=""><a href="/brand/ardberg" class="">
                                    Ardberg
                                </a></li>
                            <li class=""><a href="/brand/aristocrat" class="">
                                    Aristocrat
                                </a></li>
                            <li class=""><a href="/brand/armand-de-brignac" class="">
                                    Armand De Brignac
                                </a></li>
                            <li class=""><a href="/brand/arra" class="">
                                    Arra
                                </a></li>
                            <li class=""><a href="/brand/au-vodka" class="">
                                    AU Vodka
                                </a></li>
                            <li class=""><a href="/brand/aviation" class="">
                                    Aviation
                                </a></li>
                            <li class=""><a href="/brand/bacardi" class="">
                                    Bacardi
                                </a></li>
                            <li class=""><a href="/brand/bacchus" class="">
                                    Bacchus
                                </a></li>
                            <li class=""><a href="/brand/baileys" class="">
                                    Baileys
                                </a></li>
                            <li class=""><a href="/brand/bain-whiskey" class="">
                                    Bain whiskey
                                </a></li>
                            <li class=""><a href="/brand/ballantines" class="">
                                    Ballantine's
                                </a></li>
                            <li class=""><a href="/brand/bardinet" class="">
                                    Bardinet
                                </a></li>
                            <li class=""><a href="/brand/baron-otard" class="">
                                    Baron Otard
                                </a></li>
                            <li class=""><a href="/brand/bature-brewery" class="">
                                    Bature Brewery
                                </a></li>
                            <li class=""><a href="/brand/beefeater" class="">
                                    Beefeater
                                </a></li>
                            <li class=""><a href="/brand/beehive" class="">
                                    Beehive
                                </a></li>
                            <li class=""><a href="/brand/bella-rosa" class="">
                                    Bella Rosa
                                </a></li>
                            <li class=""><a href="/brand/beluga" class="">
                                    Beluga
                                </a></li>
                            <li class=""><a href="/brand/belvedere" class="">
                                    Belvedere
                                </a></li>
                            <li class=""><a href="/brand/benson-hedges" class="">
                                    Benson &amp; Hedges
                                </a></li>
                            <li class=""><a href="/brand/best" class="">
                                    Best
                                </a></li>
                            <li class=""><a href="/brand/b-g" class="">
                                    B &amp; G
                                </a></li>
                            <div class="py-0">
                                <div class="loader" style="padding-block: 1em; display: none;"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="17px" height="17px"
                                        fill="#171725" class="dng-icon" viewBox="0 0 30 30">
                                        <path opacity="0.35"
                                            d="M26.25 16.2502C27 16.2502 27.5 15.7502 27.5 15.0002C27.5 14.2502 27 13.7502 26.25 13.7502C25.875 13.7502 21.625 13.7502 21.25 13.7502C20.5 13.7502 20 14.2502 20 15.0002C20 15.7502 20.5 16.2502 21.25 16.2502C21.625 16.2502 25.875 16.2502 26.25 16.2502Z"
                                            fill="#F3641F"></path>
                                        <path opacity="0.35"
                                            d="M22.125 23.8749C22.625 24.3749 23.375 24.3749 23.875 23.8749C24.375 23.3749 24.375 22.6249 23.875 22.1249C23.625 21.8749 20.625 18.8749 20.375 18.6249C19.875 18.1249 19.125 18.1249 18.625 18.6249C18.125 19.1249 18.125 19.8749 18.625 20.3749C18.75 20.6249 21.75 23.6249 22.125 23.8749Z"
                                            fill="#F3641F"></path>
                                        <path opacity="0.49"
                                            d="M16.25 21.2498C16.25 20.4998 15.75 19.9998 15 19.9998C14.25 19.9998 13.75 20.4998 13.75 21.2498C13.75 21.6248 13.75 25.8748 13.75 26.2498C13.75 26.9998 14.25 27.4998 15 27.4998C15.75 27.4998 16.25 26.9998 16.25 26.2498C16.25 25.8748 16.25 21.6248 16.25 21.2498Z"
                                            fill="#F3641F"></path>
                                        <path opacity="0.71"
                                            d="M11.5 20.2498C12 19.7498 12 18.9998 11.5 18.4998C11 17.9998 10.25 17.9998 9.75 18.4998C9.5 18.7498 6.5 21.7498 6.25 21.9998C5.75 22.4998 5.75 23.2498 6.25 23.7498C6.75 24.2498 7.5 24.2498 8 23.7498C8.25 23.6248 11.25 20.6248 11.5 20.2498Z"
                                            fill="#F3641F"></path>
                                        <path opacity="0.93"
                                            d="M8.75 16.2502C9.5 16.2502 10 15.7502 10 15.0002C10 14.2502 9.5 13.7502 8.75 13.7502C8.375 13.7502 4.125 13.7502 3.75 13.7502C3 13.7502 2.5 14.2502 2.5 15.0002C2.5 15.7502 3 16.2502 3.75 16.2502C4.125 16.2502 8.375 16.2502 8.75 16.2502Z"
                                            fill="#F3641F"></path>
                                        <path
                                            d="M9.75 11.5004C10.25 12.0004 11 12.0004 11.5 11.5004C12 11.0004 12 10.2504 11.5 9.75037C11.25 9.37537 8.25 6.37537 7.875 6.12537C7.375 5.62537 6.625 5.62537 6.125 6.12537C5.625 6.62537 5.625 7.37537 6.125 7.87537C6.375 8.25037 9.375 11.2504 9.75 11.5004Z"
                                            fill="#F3641F"></path>
                                        <path
                                            d="M16.25 3.75024C16.25 3.00024 15.75 2.50024 15 2.50024C14.25 2.50024 13.75 3.00024 13.75 3.75024C13.75 4.12524 13.75 8.37525 13.75 8.75025C13.75 9.50025 14.25 10.0002 15 10.0002C15.75 10.0002 16.25 9.50025 16.25 8.75025C16.25 8.37525 16.25 4.12524 16.25 3.75024Z"
                                            fill="#F3641F"></path>
                                        <path
                                            d="M23.875 7.87537C24.375 7.37537 24.375 6.62537 23.875 6.12537C23.375 5.62537 22.625 5.62537 22.125 6.12537C21.875 6.37537 18.875 9.37537 18.625 9.62537C18.125 10.1254 18.125 10.8754 18.625 11.3754C19.125 11.8754 19.875 11.8754 20.375 11.3754C20.625 11.2504 23.625 8.25037 23.875 7.87537Z"
                                            fill="#F3641F"></path>
                                    </svg></div>
                            </div>
                        </ul>
                    </div>
                    <div class="dng-nav-item">
                        <li class="dng-tab-item h-fit mr-4"><a href="https://business.drinks.ng" target="_blank"
                                rel="noopener noreferrer nofollow noindex">
                                For Business
                            </a></li> <!---->
                    </div>
                    <div class="dng-nav-item">
                        <li class="dng-tab-item h-fit mr-4"><a href="/blog" class="">
                                Blog
                                <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" fill="none"
                                    class="dng-icon" viewBox="0 0 12 6" style="width: 10px !important;">
                                    <path d="M1 1L6 5L11 1" stroke="#171725" stroke-width="2" stroke-linecap="round">
                                    </path>
                                </svg></a></li>
                        <ul class="dng-tab-item-popup">
                            <li class=""><a href="https://spiritmagazine.drinks.ng/" target="_blank">
                                    Spirit Magazine
                                </a></li> <!---->
                        </ul>
                    </div>
                </ul>
            </nav>
        </div>
    </header>
</body>

</html>
