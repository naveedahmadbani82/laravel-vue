<template>
    <div class="bg-yugo">
        <HeaderNav />
        <div class="col-xl-12 outer-wrap position-relative">
            <div class="banner-heading">
                <h1 class="banner-font">
                    Get <span class="banner-font-bold">Best Price</span> on
                    <br />Domestic & International Price
                </h1>
            </div>
            <div class="banner-search-bar">
                <ul class="nav nav-btns mb-3">
                    <li class="nav-items">
                        <a class="active bg-round" id="round-btns" href="#"
                            >Roundtrip</a
                        >
                    </li>
                    <li class="nav-items">
                        <a class="active" id="round-btns" href="#">On-way</a>
                    </li>
                </ul>
            </div>
            <div class="hero-search-bar tabz-hero">
                <div class="inner-w">
                    <div class="hero-tabz-active">
                        <form medtho="post" class="form-outer">
                            <div class="form-wrap" id="inner-form-header">
                                <div class="line-st"></div>
                                <input
                                    type="hidde"
                                    placeholder="Departing Form"
                                    class="input-st"
                                />
                                <input
                                    type="hidde"
                                    placeholder="Going to"
                                    class="input-st1"
                                />
                            </div>
                            <div class="form-wrap" id="inner-form-header">
                                <label class="departure-lable">Departure</label>
                                <div class="line-st1"></div>
                                <input
                                    type="hidde"
                                    placeholder="Departure"
                                    class="input-st-left"
                                    name="Departure"
                                />
                                <label class="return-lable">Return</label>
                                <input
                                    type="hidde"
                                    placeholder=""
                                    class="input-st-right"
                                />
                            </div>
                            <div class="form-wrap" id="inner-form-header">
                                <div class="bg-travel">
                                    <label for="check" class="fade-down"
                                        >Travelers</label
                                    >
                                    <div class="travelars-content">
                                        <div class="relative">01</div>
                                    </div>
                                    <label for="check" class="fade-down class"
                                        >Class</label
                                    >
                                    <div class="travelars-content-eco">
                                        <div class="relative-eco">Economy</div>
                                    </div>
                                    <div class="line-st2"></div>
                                    <input id="check" type="checkbox" />
                                    <div class="test">
                                        <div class="p-all">
                                            <h3 class="travelers-heading">
                                                Travelers
                                            </h3>
                                            <div class="travelers-detail-inner">
                                                <div class="d-block">
                                                    <p>Adults</p>
                                                    <div class="wrap-scroll">
                                                        <div
                                                            class="message adult"
                                                        >
                                                            <button
                                                                v-on:click.prevent="
                                                                    decrement
                                                                "
                                                            >
                                                                -
                                                            </button>
                                                            <p>{{ count }}</p>
                                                            <button
                                                                v-on:click.prevent="
                                                                    increment
                                                                "
                                                            >
                                                                +
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-block">
                                                    <p>Children</p>
                                                    <span>2 - 12 Years</span>
                                                    <div class="wrap-scroll">
                                                        <div class="message">
                                                            <button
                                                                v-on:click.prevent="
                                                                    decrement
                                                                "
                                                            >
                                                                -
                                                            </button>
                                                            <p>{{ count }}</p>
                                                            <button
                                                                v-on:click.prevent="
                                                                    increment
                                                                "
                                                            >
                                                                +
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-block">
                                                    <p>Infants</p>
                                                    <span>0 - 23 Months</span>
                                                    <div class="wrap-scroll">
                                                        <div class="message">
                                                            <button
                                                                v-on:click.prevent="
                                                                    decrement
                                                                "
                                                            >
                                                                -
                                                            </button>
                                                            <p>{{ count }}</p>
                                                            <button
                                                                v-on:click.prevent="
                                                                    increment
                                                                "
                                                            >
                                                                +
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h3 class="travelers-heading">
                                                Class
                                            </h3>
                                            <div class="travel-class-option">
                                                <button
                                                    type="button"
                                                    class="default-btn"
                                                >
                                                    Economy
                                                </button>
                                                <button
                                                    type="button"
                                                    class="default-btn"
                                                >
                                                    Business
                                                </button>
                                                <button
                                                    type="button"
                                                    class="default-btn"
                                                >
                                                    First
                                                </button>
                                            </div>
                                            <button
                                                type="button"
                                                class="apply-btn"
                                            >
                                                Apply
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-wrap" id="inner-form-header"></div>
                            <div class="submit-btn mt-2">
                                <button
                                    type="submit"
                                    class="form-btn primary-btn"
                                >
                                    Search
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="body-wrapper">
        <div class="deals-nav-tabz">
            <div class="float-left col-xl-12 p-0">
                <h2 class="deals-font">Best Deals</h2>
                <div class="deals-nav-bar" id="navbz">
                    <ul>
                        <li class="navbar-flights">Flights</li>
                        <li class="navbar2">Visas</li>
                        <li class="navbar2">Bank Offers</li>
                        <li class="navbar2">Yugo Rewards</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- <div class="flights-bannewr">
            <div
                id="carouselExampleIndicators"
                class="carousel slide"
                data-ride="carousel"
            >
                <div
                    class="carousel-inner"
                    v-for="(value, key, index) in sliders"
                >
                    <template v-if="key == 0">
                        <div class="carousel-item active">
                            <img
                                class="d-block w-100 flights-img"
                                :src="
                                    'https://www.yugo.pk/images/campaigns/' +
                                    value.page_banner
                                "
                                alt="First slide"
                            />
                        </div>
                    </template>
                    <template v-else>
                        <div class="carousel-item">
                            <img
                                class="d-block w-100 flights-img"
                                :src="
                                    'https://www.yugo.pk/images/campaigns/' +
                                    value.page_banner
                                "
                                alt="Second slide"
                            />
                        </div>
                    </template>
                </div>
                <ol class="carousel-indicators">
                <li
                    data-target="#carouselExampleIndicators"
                    data-slide-to="0"
                    class="active"
                ></li>
                <li
                    data-target="#carouselExampleIndicators"
                    data-slide-to="1"
                ></li>
                <li
                    data-target="#carouselExampleIndicators"
                    data-slide-to="2"
                ></li>
            </ol>
            </div>
        </div> -->

        <div
            id="carouselExampleIndicators"
            class="carousel slide"
            data-ride="carousel"
        >
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img
                        class="d-block w-100 display-img"
                        src="vue/image/body-banner.jpg"
                        alt="First slide"
                    />
                    <img
                        class="d-block w-100 mobile-img"
                        src="vue/image/responsive-banner.jpg"
                        alt="First slide"
                    />
                </div>
                <div class="carousel-item">
                    <img
                        class="d-block w-100 display-img"
                        src="vue/image/body-banner2.jpg"
                        alt="Second slide"
                    />
                    <img
                        class="d-block w-100 mobile-img"
                        src="vue/image/home-banner2.jpg"
                        alt="Second slide"
                    />
                </div>
            </div>
            <ol class="carousel-indicators banner-points">
                <li
                    data-target="#carouselExampleIndicators"
                    data-slide-to="0"
                    class="active"
                ></li>
                <li
                    data-target="#carouselExampleIndicators"
                    data-slide-to="1"
                ></li>
            </ol>
        </div>

        <div class="row mb-st">
            <div class="col-lg-3">
                <img src="vue/image/covid-img.png" class="covid-img" />
            </div>
            <div class="col-lg-6">
                <div class="top-p">
                    <h2 class="corona-head">Coronavirus Information</h2>
                    <p class="corona-detail">
                        Read about how the new travel restrictions might <br />
                        effect your trip
                    </p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="covid-info">
                    <p class="click-st">Click here</p>
                    <a class="info-detail">Latest on Covid-19</a>
                </div>
            </div>
        </div>
        <div class="row"></div>
        <div class="popular-routes">
            <h2 class="deals-font">Most Popular Routes</h2>
            <swiper
                class="swiper"
                :modules="modules"
                :space-between="30"
                :slides-per-view="4"
                :pagination="{ clickable: true }"
            >
                <swiper-slide
                    class="slide"
                    v-for="(value, key, index) in listSliders"
                >
                    <div class="border-shadow">
                        <img
                            class="card-img-top"
                            :src="'https://www.yugo.pk/' + value.logo"
                            alt="Card image cap"
                        />
                        <div class="card-body routes mb-3">
                            <span class="country-name">{{
                                value.name.split(" ")[0]
                            }}</span>
                            <img
                                src="/vue/image/separator.png"
                                alt=""
                                class="inner-arrow"
                            />
                            <span class="country-name">{{
                                value.name.split(" ")[2]
                            }}</span>
                            <div class="start-price">Start From</div>
                            <p class="country-price">PKR {{ value.price }}</p>
                        </div>
                    </div>
                </swiper-slide>
            </swiper>
        </div>
        <div class="destination-wrapper">
            <div class="visa-yugo float-left">
                <h2 class="destination-heading">Top Visa Destination</h2>
                <template v-for="(value, key, index) in destination">
                    <div class="destinations2 float-left" v-if="key == 2">
                        <figure class="position-relative">
                            <img
                                :src="
                                    'https://www.yugo.pk' + value.item.tile_img
                                "
                                alt=""
                            />
                            <div
                                class="name rubik-medium position-absolute text-uppercase"
                            >
                                <a class="visa-inner-text">{{
                                    value.item_name
                                }}</a>
                            </div>
                        </figure>
                        <div class="destination-inner float-left col-xl-12">
                            <div class="float-left rubik-bold">
                                <span class="rubik-regular d-block"
                                    >Processing time</span
                                >
                                <div class="working-days">
                                    {{ value.processing_time }}
                                </div>
                            </div>
                            <div class="float-right text-right rubik-bold">
                                <span class="rubik-regular d-block"
                                    >Starting from</span
                                >
                                <b
                                    >PKR
                                    {{
                                        value.item.sell_price
                                            .toString()
                                            .replace(
                                                /\B(?=(\d{3})+(?!\d))/g,
                                                ","
                                            )
                                    }}</b
                                >
                            </div>
                        </div>
                    </div>
                    <div class="destinations float-left" v-else>
                        <figure class="position-relative">
                            <img
                                :src="
                                    'https://www.yugo.pk' + value.item.tile_img
                                "
                                alt=""
                            />
                            <div
                                class="name rubik-medium position-absolute text-uppercase"
                            >
                                <a class="visa-inner-text">{{
                                    value.item_name
                                }}</a>
                            </div>
                        </figure>
                        <div class="destination-inner float-left col-xl-12">
                            <div class="float-left rubik-bold">
                                <span class="rubik-regular d-block"
                                    >Processing time</span
                                >
                                <div class="working-days">
                                    {{ value.processing_time }}
                                </div>
                            </div>
                            <div class="float-right text-right rubik-bold">
                                <span class="rubik-regular d-block"
                                    >Starting from</span
                                >
                                <b
                                    >PKR
                                    {{
                                        value.item.sell_price
                                            .toString()
                                            .replace(
                                                /\B(?=(\d{3})+(?!\d))/g,
                                                ","
                                            )
                                    }}</b
                                >
                            </div>
                        </div>
                    </div>
                </template>
            </div>
        </div>
        <div class="bottom-wrapper">
            <div class="why-us heading">
                <h2 class="destination-heading">Why Book with us!</h2>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <img
                        src="vue/image/refund-change.svg"
                        class="svg-img mb-5"
                    />
                    <div class="refund-info">
                        <h4 class="svg-head mb-2">Refund or Change</h4>
                        <p class="svg-detail m-0">
                            We are here to make your experience incredible.
                            Reach us by phone, email, or WhatsApp.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <img
                        src="vue/image/lowest-prices.svg"
                        class="svg-img mb-5"
                    />
                    <div class="lowest-info">
                        <h4 class="svg-head mb-2">Lowest Price</h4>
                        <p class="svg-detail m-0">
                            With over 100+ direct contracts with the airlines &
                            suppliers, YUGO.pk can save you more!
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <img
                        src="vue/image/faster-access.svg"
                        class="svg-img mb-5"
                    />
                    <div class="faster-info">
                        <h4 class="svg-head mb-2">faster Access</h4>
                        <p class="svg-detail m-0">
                            Get instant itinerary on your email when you make
                            your booking through YUGO.pk
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <FooterView />
</template>

<script>
import { Pagination } from "swiper";
import { Swiper, SwiperSlide } from "swiper/vue";
import "swiper/css";
import "swiper/css/pagination";
import { defineComponent } from "vue";
import AppLayout from "@/Layouts/AppLayout.vue";
import axios from "axios";
import HeaderNav from "@/component/HeaderNav.vue";
import FooterView from "@/component/FooterView.vue";

export default defineComponent({
    name: "swiper-example-multiple-slides-per-biew",
    title: "Multiple slides per view",
    url: import.meta.url,
    components: {
        AppLayout,
        HeaderNav,
        FooterView,
        Swiper,
        SwiperSlide,
    },
    data() {
        return {
            sliders: [],
            destination: [],
            listSliders: [],
            listSliders: [],
        };
    },
    mounted() {
        // bus.$on('pureView', this.pureView);
        const vm = this;
        axios.defaults.headers.common["Access-Control-Allow-Origin"] = "*";
        axios.defaults.headers.common["Content-Type"] = "application/json";
        axios
            .get("http://127.0.0.1:8000/api/data/home/", {
                headers: {
                    // remove headers
                },
            })
            .then(function (response) {
                console.log(response.data.campaigns);
                vm.sliders = response.data.campaigns;
                vm.destination = response.data.toplocation;
                vm.listSliders = response.data.popularRoutes.first;
                vm.listSliders1 = response.data.popularRoutes.second;
            })
            .catch((error) => {});
    },
});
$(function () {
    $('input[name="Departure"]').daterangepicker(
        {
            opens: "left",
        },
        function (start, end, label) {
            console.log(
                "A new date selection was made: " +
                    start.format("YYYY-MM-DD") +
                    " to " +
                    end.format("YYYY-MM-DD")
            );
        }
    );
});
</script>
<style>
::placeholder {
    color: #00224f;
    opacity: 1; /* Firefox */
}
.swiper {
    @include swiper-wrapper();
}
.slide {
    @include swiper-slide();
}
</style>