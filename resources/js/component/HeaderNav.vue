<template>
    <div class="col-xl-12 float-left p-0">
        <div class="main-header" id="header">
            <div class="wrapper-top">
                <div class="on-show-hie">
                    <div class="container-fluid main-header">
                        <nav class="navbar-top">
                            <a class="navbar-brand" href="/home">
                                <img
                                    src="/vue/image/logo.svg"
                                    class="svg-icon"
                                />
                            </a>
                            <div class="header-nav-links">
                                <ul
                                    class="main-header-links list-unstyled m-0 p-0"
                                >
                                    <li class="nav-active">
                                        <a
                                            class="header-font nav-link"
                                            href="/flights"
                                            >Flights</a
                                        >
                                    </li>
                                    <li class="nav-active">
                                        <a
                                            class="header-font nav-link"
                                            href="/visaview"
                                            >Visas</a
                                        >
                                    </li>
                                    <li class="nav-active">
                                        <a
                                            class="header-font nav-link"
                                            href="/offers"
                                            >Offers</a
                                        >
                                    </li>
                                    <li class="nav-active">
                                        <a
                                            class="header-font nav-link"
                                            href="/packages"
                                            >Packages</a
                                        >
                                    </li>
                                    <li class="main-header dropdown">
                                        <a
                                            class="header-drop nav-link"
                                            href="/"
                                            id="navbardrop"
                                            data-toggle="dropdown"
                                        >
                                            My Account
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#"
                                                >Login</a
                                            >
                                            <a class="dropdown-item" href="#"
                                                >Sign Up</a
                                            >
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="banner-nav-links">
        <ul class="m-0 p-0 list-unstyled">
            <li class="d-inline-block align-top">
                <a href="https://www.yugo.pk/flights">
                    <div class="banner-icon1 d-block"></div>
                    Flights</a
                >
            </li>
            <li class="d-inline-block align-top">
                <a href="https://www.yugo.pk/flights">
                    <div class="banner-icon2 d-block"></div>
                    Visas</a
                >
            </li>
            <li class="d-inline-block align-top">
                <a href="https://www.yugo.pk/flights">
                    <div class="banner-icon3 d-block"></div>
                    Offers</a
                >
            </li>
            <li class="d-inline-block align-top">
                <a href="https://www.yugo.pk/flights">
                    <div class="banner-icon4 d-block"></div>
                    Packages</a
                >
            </li>
        </ul>
    </div>
    <!-- responsive -->
  
 

    <!-- end -->
</template>
<script>
export default {
    name: "HeaderNav",
};
 $(window).on("scroll", function () {
    if ($(window).scrollTop() > 50) {
        $("#header").addClass("active");
    } else {
        //remove the background property so it comes transparent again (defined in your css)
        $("#header").removeClass("active");
    }
});
</script>
<style scoped>
::placeholder {
    color: #00224f;
    opacity: 1; /* Firefox */
}

</style>