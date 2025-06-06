/* Activation / Désactivation de la navbar responsive du header */
const toggleResponsiveHeaderNavbar = () => {
    let navbar = $(document).find("header nav.header-navbar");
    if( navbar.hasClass("activeResponsiveNavar") ){
        navbar.removeClass("activeResponsiveNavar");
    }else{
        navbar.addClass("activeResponsiveNavar");
    }
}

/* Activation du module de recherche */
const openSearchModule = () => {
    let btnSearchModule = $(document).find("header button.btnSearch"),
        searchModule    = $(document).find("header #searchBox");

    searchModule.addClass("showModule");    
}

/* Désactivation du module de recherche */
const closeSearchModule = () => {
    let btnSearchModule = $(document).find("header button.btnSearch"),
        searchModule    = $(document).find("header #searchBox");

    searchModule.removeClass("showModule");
}