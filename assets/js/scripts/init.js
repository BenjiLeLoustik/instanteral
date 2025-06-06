/* Activation / Désactivation de la navbar responsive du header */
const toggleResponsiveHeaderNavbar = () => {
    let navbar = $(document).find("header nav.header-navbar");
    if( navbar.hasClass("activeResponsiveNavar") ){
        navbar.removeClass("activeResponsiveNavar");
    }else{
        navbar.addClass("activeResponsiveNavar");
    }
}