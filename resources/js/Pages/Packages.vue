<template>
    <section id="packages-listing">
        <HeaderNav />
        <div class="bg-yugo">
            <div class="p-listing-wraper">
                <div
                    class="col-xl-12 p-0 listing-search-bar-outer position-relative float-left"
                >
                    <div
                        class="banner-heading"
                        style="margin-top: 70px; text-align: center"
                    >
                        <h1 class="banner-font">
                            <span class="banner-font-bold-packages"
                                >Customize & Book</span
                            >
                            <br />Amazing Holiday Packages
                        </h1>
                    </div>
                    <div
                        class="col-xl-12 p-listing-search-bar text-left float-left"
                    >
                        <select class="float-left country" name id="">
                            <option>Select Package</option>
                            <option
                                v-for="countrySelect in country_options"
                                :value="'/package/' + countrySelect.slug"
                                :key="countrySelect.slug"
                                :v-model="country_select"
                            >
                                {{ countrySelect.name }}
                            </option>
                        </select>
                        <div class="submit-btn ml-4 mt-1">
                            <button
                                type="submit"
                                class="form-btn primary-btn"
                                style="margin-left: 36px"
                            >
                                Search
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="listing-view-wrapper">
            <!-- <div class="p-top-bt">
                <div class="items">
                    <template v-for="(value, key, index) in categories">
                        <div class="slick-slide slick-current slick-active">
                            <img
                                :src="'https://www.yugo.pk/' + value.thumbnail"
                                class="slider-img"
                            />
                        </div>
                    </template>
                </div>
            </div> -->
            <div class="popular-routes">
                <h2 class="white">Most Popular Routes</h2>
                <swiper
                    class="swiper"
                    :modules="modules"
                    :space-between="30"
                    :slides-per-view="5"
                    :pagination="{ clickable: true }"
                >
                    <swiper-slide
                        class="slide items"
                        v-for="(value, key, index) in categories"
                    >
                        <img
                            :src="'https://www.yugo.pk/' + value.thumbnail"
                            class="slider-img"
                        />
                    </swiper-slide>
                </swiper>
            </div>
            <template v-if="featuredPackage">
                <div class="listing-features" id="packages-listing-features">
                    <div class="listing-feature-content">
                        <div class="listing-top">
                            <div class="night-st">
                                {{ featuredPackage.no_of_days }} Nights
                            </div>
                            <div class="rating-box">
                                <div class="rating-st">
                                    {{ featuredPackage.rating }}
                                </div>
                                <div class="rating-text">
                                    Average<br />Rating
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pacakge-title">
                        <h3>{{ featuredPackage.package_name }}</h3>
                    </div>
                    <div class="package-price-section-country">
                        <span class="starting-st">Starting from</span>
                        <span class="discount-text">{{
                            total_package_price_without
                        }}</span>
                        <span class="orignal-text">
                            PKR <b>{{ featured_package_price }}</b>
                        </span>
                        <span class="person-text">Per Person</span>
                    </div>
                    <div class="view-btn">
                        <button type="button" class="bttn-view">
                            View Trip
                        </button>
                    </div>
                </div>
            </template>
        <!-- swiper -->
            <div>
                <h2 class="white">Most Popular Routes</h2>
                <swiper
                    class="swiper"
                    :modules="modules"
                    :space-between="30"
                    :slides-per-view="3"
                    :pagination="{ clickable: true }"
                >
                    <swiper-slide
                        class="slide"
                        v-for="(value, key, index) in packagesSlider"
                    >
                        <div class="package-box-inner">
                            <div class="img-wrap">
                                <img
                                    alt="100%x280"
                                    :src="
                                        'https://www.yugo.pk/images/packages/' +
                                        value.thumbnail_image
                                    "
                                />
                                <div class="listing-top">
                                    <div class="night-st">
                                        {{ value.no_of_days }} Nights
                                    </div>
                                    <div class="rating-box">
                                        <div class="rating-st">
                                            {{ value.rating }}
                                        </div>
                                        <div class="rating-text">
                                            Average<br />
                                            Rating
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="package-card-detail">
                                <div class="package-title">
                                    <h3>{{ value.package_name }}</h3>
                                    <ul class="package-include">
                                        <template
                                            v-for="services in JSON.parse(
                                                value.services
                                            )"
                                        >
                                            <li>
                                                {{
                                                    services.replaceAll(
                                                        "_",
                                                        " "
                                                    )
                                                }},
                                            </li>
                                        </template>
                                    </ul>
                                    <br />
                                    <a
                                        href="/packages-detail"
                                        class="slider-bttn"
                                        >View Trip</a
                                    >
                                </div>
                                <div class="package-price-section">
                                    <div class="packages-discount">
                                        {{ value.discount
                                        }}<span class="percent">%</span
                                        ><span class="off">OFF</span>
                                    </div>
                                    <div class="package-price-inner">
                                        <span class="starting-from"
                                            >Starting From</span
                                        ><span class="discount-price">{{
                                            (
                                                value.package_ammount +
                                                (value.package_ammount *
                                                    value.discount) /
                                                    100
                                            )
                                                .toString()
                                                .replace(
                                                    /\B(?=(\d{3})+(?!\d))/g,
                                                    ","
                                                )
                                        }}</span>
                                        <span class="orignal-price"
                                            >PKR
                                            <b>{{
                                                value.package_ammount
                                                    .toString()
                                                    .replace(
                                                        /\B(?=(\d{3})+(?!\d))/g,
                                                        ","
                                                    )
                                            }}</b></span
                                        ><span class="sharing-text"
                                            >Per Person</span
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </swiper-slide>
                </swiper>
            </div>
            <!-- end -->
            <div class="view-all">
                <a href="">View All</a>
            </div>
            <div class="packages custom-banner-image">
                <div class="custom-block">
                    <h4>Customize your <span>Holiday Package</span></h4>
                    <div class="custom-btn">
                        <a
                            class="custom-btn-st"
                            data-toggle="modal"
                            data-target="#exampleModalCenter"
                            >Explore</a
                        >
                    </div>
                </div>
            </div>
            <div>
                <h2 class="white">Most Popular Routes</h2>
                <swiper
                    class="swiper"
                    :modules="modules"
                    :space-between="30"
                    :slides-per-view="6"
                    :pagination="{ clickable: true }"
                >
                    <swiper-slide
                        class="slide"
                        v-for="(value, key) in country_options"
                    >
                        <img
                            :src="'https://www.yugo.pk' + value.thumbnail"
                            class="destination-img"
                        />
                        <div class="destinantion-text-block">
                            <h4>{{ value.name }}</h4>
                            <p>{{ value.packageCount }}+ Packages</p>
                        </div>
                    </swiper-slide>
                </swiper>
            </div>
            <div class="view-all mt-2">
                <a href="">View All</a>
            </div>
            <div class="detail-filter-btns">
                <div class="filter-bttn active">
                    <a
                        v-bind:class="{
                            daysFilter1: isActive20,
                            daysFilter: hasError20,
                        }"
                        data-min="0"
                        data-max="200000"
                        @click="amountFilter(0, 200000)"
                        >Up to PKR 200,000
                    </a>
                </div>
                <div class="filter-bttn active">
                    <a
                        v-bind:class="{
                            daysFilter: isActive30,
                            daysFilter1: hasError30,
                        }"
                        data-min="0"
                        data-max="200000"
                        @click="amountFilter(200001, 300000)"
                        >PKR 200,001 to 300,000
                    </a>
                </div>
                <div class="filter-bttn active">
                    <a
                        v-bind:class="{
                            daysFilter: isActive40,
                            daysFilter1: hasError40,
                        }"
                        data-min="0"
                        data-max="200000"
                        @click="amountFilter(300001, 400000)"
                        >PKR 300,001 to 400,000
                    </a>
                </div>
                <div class="filter-bttn active">
                    <a
                        v-bind:class="{
                            daysFilter: isActive50,
                            daysFilter1: hasError50,
                        }"
                        data-min="0"
                        data-max="200000"
                        @click="amountFilter(400001, 9900000)"
                        >Above 400,000
                    </a>
                </div>
            </div>

            <!-- swiper -->
            <div>
                <h2 class="white">Most Popular Routes</h2>
                <swiper
                    class="swiper"
                    :modules="modules"
                    :space-between="30"
                    :slides-per-view="3"
                    :pagination="{ clickable: true }"
                >
                    <swiper-slide v-for="(value, key, index) in packagesSlider">
                        <div class="package-box-inner">
                            <div class="img-wrap">
                                <img
                                    alt="100%x280"
                                    :src="
                                        'https://www.yugo.pk/images/packages/' +
                                        value.thumbnail_image
                                    "
                                />
                                <div class="listing-top">
                                    <div class="night-st">
                                        {{ value.no_of_days }}
                                        Nights
                                    </div>
                                    <div class="rating-box">
                                        <div class="rating-st">
                                            {{ value.rating }}
                                        </div>
                                        <div class="rating-text">
                                            Average<br />
                                            Rating
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="package-card-detail">
                                <div class="package-title">
                                    <h3>
                                        {{ value.package_name }}
                                    </h3>
                                    <ul class="package-include">
                                        <template
                                            v-for="services in JSON.parse(
                                                value.services
                                            )"
                                        >
                                            <li>
                                                {{
                                                    services.replaceAll(
                                                        "_",
                                                        " "
                                                    )
                                                }},
                                            </li>
                                        </template>
                                    </ul>
                                    <br />
                                    <a
                                        href="/packages-detail"
                                        class="slider-bttn"
                                        >View Trip</a
                                    >
                                </div>
                                <div class="package-price-section">
                                    <div class="packages-discount">
                                        {{ value.discount
                                        }}<span class="percent">%</span
                                        ><span class="off">OFF</span>
                                    </div>
                                    <div class="package-price-inner">
                                        <span class="starting-from"
                                            >Starting From</span
                                        ><span class="discount-price">{{
                                            (
                                                value.package_ammount +
                                                (value.package_ammount *
                                                    value.discount) /
                                                    100
                                            )
                                                .toString()
                                                .replace(
                                                    /\B(?=(\d{3})+(?!\d))/g,
                                                    ","
                                                )
                                        }}</span>
                                        <span class="orignal-price"
                                            >PKR
                                            <b>{{
                                                value.package_ammount
                                                    .toString()
                                                    .replace(
                                                        /\B(?=(\d{3})+(?!\d))/g,
                                                        ","
                                                    )
                                            }}</b></span
                                        ><span class="sharing-text"
                                            >Per Person</span
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </swiper-slide>
                </swiper>
            </div>
            <!-- end -->
            <div class="detail-filter-btns">
                <div class="filter-bttn active">
                    <a
                        v-bind:class="{
                            daysFilter1: isActive0,
                            daysFilter: hasError0,
                        }"
                        id="days_filer_0"
                        data-min="0"
                        data-max="200000"
                        @click="daysFilter(0, 4)"
                        >Up to 4 Nights</a
                    >
                </div>
                <div class="filter-bttn active">
                    <a
                        v-bind:class="{
                            daysFilter: isActive5,
                            daysFilter1: hasError5,
                        }"
                        id="days_filer_5"
                        data-min="0"
                        data-max="200000"
                        @click="daysFilter(5, 7)"
                        >5 To 7 Nights</a
                    >
                </div>
                <div class="filter-bttn active">
                    <a
                        v-bind:class="{
                            daysFilter: isActive8,
                            daysFilter1: hasError8,
                        }"
                        id="days_filer_8"
                        data-min="0"
                        data-max="200000"
                        @click="daysFilter(8, 10)"
                        >8 To 10 Nights</a
                    >
                </div>
                <div class="filter-bttn active">
                    <a
                        v-bind:class="{
                            daysFilter: isActive11,
                            daysFilter1: hasError11,
                        }"
                        id="days_filer_11"
                        data-min="0"
                        data-max="200000"
                        @click="daysFilter(11, 100)"
                        >Above 11</a
                    >
                </div>
            </div>
            <div>
                <h2 class="white">Most Popular Routes</h2>
                <swiper
                    class="swiper"
                    :modules="modules"
                    :space-between="30"
                    :slides-per-view="3"
                    :pagination="{ clickable: true }"
                >
                    <swiper-slide v-for="(value, key, index) in packagesSlider">
                        <div class="package-box-inner">
                            <div class="package-box-inner">
                                <div class="img-wrap">
                                    <img
                                        alt="100%x280"
                                        :src="
                                            'https://www.yugo.pk/images/packages/' +
                                            value.thumbnail_image
                                        "
                                    />
                                    <div class="listing-top">
                                        <div class="night-st">
                                            {{ value.no_of_days }}
                                            Nights
                                        </div>
                                        <div class="rating-box">
                                            <div class="rating-st">
                                                {{ value.rating }}
                                            </div>
                                            <div class="rating-text">
                                                Average<br />
                                                Rating
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="package-card-detail">
                                    <div class="package-title">
                                        <h3>
                                            {{ value.package_name }}
                                        </h3>
                                        <ul class="package-include">
                                            <template
                                                v-for="services in JSON.parse(
                                                    value.services
                                                )"
                                            >
                                                <li>
                                                    {{
                                                        services.replaceAll(
                                                            "_",
                                                            " "
                                                        )
                                                    }},
                                                </li>
                                            </template>
                                        </ul>
                                        <br />
                                        <a
                                            href="/packages-detail"
                                            class="slider-bttn"
                                            >View Trip</a
                                        >
                                    </div>

                                    <div class="package-price-section">
                                        <div class="packages-discount">
                                            {{ value.discount
                                            }}<span class="percent">%</span
                                            ><span class="off">OFF</span>
                                        </div>
                                        <div class="package-price-inner">
                                            <span class="starting-from"
                                                >Starting From</span
                                            ><span class="discount-price">{{
                                                (
                                                    value.package_ammount +
                                                    (value.package_ammount *
                                                        value.discount) /
                                                        100
                                                )
                                                    .toString()
                                                    .replace(
                                                        /\B(?=(\d{3})+(?!\d))/g,
                                                        ","
                                                    )
                                            }}</span>
                                            <span class="orignal-price"
                                                >PKR
                                                <b>{{
                                                    value.package_ammount
                                                        .toString()
                                                        .replace(
                                                            /\B(?=(\d{3})+(?!\d))/g,
                                                            ","
                                                        )
                                                }}</b></span
                                            ><span class="sharing-text"
                                                >Per Person</span
                                            >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </swiper-slide>
                </swiper>
            </div>
            <div class="bottom-wrapper" style="margin-bottom: 40px">
                <div class="why-us heading">
                    <h2 class="destination-heading">Why Book with us!</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <img
                            src="/vue/image/faster-access.svg"
                            class="svg-img mb-5"
                        />
                        <div class="faster-info">
                            <h4 class="svg-head mb-2">faster Access</h4>
                            <p class="svg-detail m-0">
                                Get instant itinerary on your email when you
                                make your booking through YUGO.pk
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <img
                            src="/vue/image/refund-change.svg"
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
                            src="/vue/image/lowest-prices.svg"
                            class="svg-img mb-5"
                        />
                        <div class="lowest-info">
                            <h4 class="svg-head mb-2">Lowest Price</h4>
                            <p class="svg-detail m-0">
                                With over 100+ direct contracts with the
                                airlines & suppliers, YUGO.pk can save you more!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div
                class="bg-wrapper modal fade"
                :id="infoModalVendor.id"
                tabindex="-1"
                role="dialog"
                aria-labelledby="exampleModalCenterTitle"
                aria-hidden="true"
            >
                <div class="modal-dialog">
                    <div class="border-body modal-content">
                        <div class="modal-header">
                            <button
                                type="button"
                                class="close 123"
                                data-dismiss="modal"
                                aria-label="Close"
                            >
                                <span aria-hidden="true"> ×</span>
                            </button>
                            <img
                                :src="'https://www.yugo.pk/assets/img/custome_pack.png'"
                                :data-original="'https://www.yugo.pk/assets/img/custome_pack.png'"
                                alt="travel-image"
                                class="travelling-img"
                            />
                            <div class="detail-text">
                                <p>
                                    Please share your details so that our
                                    team<br />
                                    can work on your holiday package
                                </p>
                            </div>
                        </div>
                        <div class="body-bg modal-body">
                            <form ref="form" id="popup">
                                <div class="outer-bd">
                                    <div class="from-wrap">
                                        <div class="form-group">
                                            <label for="name"
                                                >Name<span
                                                    for=""
                                                    class="text-primary"
                                                    >*</span
                                                ></label
                                            >
                                            <input
                                                type="text"
                                                class="form-inp form-control"
                                                required
                                                value=""
                                                :v-modal="model.name"
                                                name="name"
                                            />
                                        </div>
                                        <div class="form-group">
                                            <label for="phone"
                                                >Phone Number:<span
                                                    for=""
                                                    class="text-primary"
                                                    >*</span
                                                ></label
                                            >
                                            <input
                                                type="text"
                                                class="form-inp form-control"
                                                required
                                                value=""
                                                :v-modal="model.phone"
                                                name="phone"
                                            />
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email:</label>
                                            <input
                                                type="email"
                                                class="form-inp form-control"
                                                required
                                                value=""
                                                :v-modal="model.email"
                                                name="email"
                                            />
                                        </div>
                                        <div class="form-group">
                                            <label for="vacation"
                                                >Vacation Cities:<span
                                                    for=""
                                                    required
                                                    class="text-primary"
                                                    >*</span
                                                ></label
                                            >
                                            <input
                                                type="text"
                                                class="form-inp form-control"
                                                value=""
                                                :v-modal="model.vacation"
                                                name="vacation"
                                            />
                                        </div>
                                        <div class="form-group">
                                            <label for="request"
                                                >Special
                                                Request(Optional):</label
                                            >
                                            <input
                                                class="form-inp form-control"
                                                value=""
                                                :v-modal="model.request"
                                                name="s_request"
                                            />
                                            <p class="fill-cont">
                                                Please fill these column<span
                                                    for=""
                                                    class="text-primary"
                                                    >*</span
                                                >
                                            </p>
                                        </div>
                                    </div>
                                    <div class="btn-center">
                                        <button
                                            type="button"
                                            class="iner-btn btn btn-primary"
                                            data-dismiss="modal"
                                            aria-label="Close"
                                            :contenteditable="formButton"
                                            @click="customizePackage()"
                                        >
                                            Submit
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <FooterView />
</template>
<script>
import { defineComponent } from "vue";
import AppLayout from "@/Layouts/AppLayout.vue";
import axios from "axios";
import HeaderNav from "@/component/HeaderNav.vue";
import FooterView from "@/component/FooterView.vue";
import { Swiper, SwiperSlide } from "swiper/vue";
import "swiper/css";

export default defineComponent({
    name: "swiper-example-multiple-slides-per-biew",
    title: "Multiple slides per view",
    components: {
        AppLayout,
        HeaderNav,
        FooterView,
        Swiper,
        SwiperSlide,
    },
    data() {
        return {
            open: false,
            infoModalVendor: {
                id: "exampleModalCenter",
                title: "",
                content: "",
            },
            modalShow: false,
            selectedCountryOption: null,
            model: [
                {
                    name: "name",
                    phone: "030742998952",
                    email: "khanabani83",
                    vacation: "ndgnfvbjdjkkbjkbj jgbj",
                    request: "nvbbbh hh hhf ",
                },
            ],
            total_package_price_without: null,
            days_filter0: 0,
            days_filter1: 4,
            isActive0: true,
            hasError0: false,
            isActive5: true,
            hasError5: false,
            isActive8: true,
            hasError8: false,
            isActive11: true,
            hasError11: false,
            amount_filter0: 0,
            amount_filter1: 200000,
            isActive20: true,
            hasError20: false,
            isActive30: true,
            hasError30: false,
            isActive40: true,
            hasError40: false,
            isActive50: true,
            hasError50: false,

            featured_package_price: null,
            country_options: [{ name: "Select Country", id: null }],
            categories: [],
            featuredPackage: [],
            packagesSlider: [],
            show: true,
        };
    },
    mounted() {
        // bus.$on('pureView', this.pureView);
        const vm = this;
        axios.defaults.headers.common["Access-Control-Allow-Origin"] = "*";
        axios.defaults.headers.common["Content-Type"] = "application/json";
        axios
            .get("http://127.0.0.1:8000/api/packages/all/", {
                headers: {
                    // remove headers
                },
            })
            .then(function (response) {
                console.log(response.data.data);
                vm.country_options = response.data.countries;
                vm.categories = response.data.categories;
                vm.featuredPackage = response.data.featuredPackage;
                vm.packagesSlider = response.data.packages;
                var package_total_price =
                    response.data.featuredPackage.package_ammount;
                var discount =
                    (Number(package_total_price) *
                        Number(response.data.featuredPackage.discount)) /
                    100;
                var total_package_price_without =
                    package_total_price + discount;
                vm.total_package_price_without = total_package_price_without
                    .toString()
                    .replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                vm.featured_package_price =
                    response.data.featuredPackage.package_ammount
                        .toString()
                        .replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            })
            .catch((error) => {
                // error
            });
    },
    methods: {
        daysFilter(from, to) {
            this.days_filter0 = from;
            this.days_filter1 = to;
            this.isActive0 = false;
            this.hasError0 = true;
            this.isActive5 = true;
            this.hasError5 = false;
            this.isActive8 = true;
            this.hasError8 = false;
            this.isActive11 = true;
            this.hasError11 = false;
            if (from == 0) {
                this.isActive0 = true;
                this.hasError0 = false;
            } else if (from == 5) {
                this.isActive5 = false;
                this.hasError5 = true;
            } else if (from == 8) {
                this.isActive8 = false;
                this.hasError8 = true;
            } else if (from == 11) {
                this.isActive11 = false;
                this.hasError11 = true;
            }
        },
        amountFilter(from, to) {
            this.amount_filter0 = from;
            this.amount_filter1 = to;
            this.isActive20 = false;
            this.hasError20 = true;
            this.isActive30 = true;
            this.hasError30 = false;
            this.isActive40 = true;
            this.hasError40 = false;
            this.isActive50 = true;
            this.hasError50 = false;
            if (from == 0) {
                this.isActive20 = true;
                this.hasError20 = false;
            } else if (from == 200001) {
                this.isActive30 = false;
                this.hasError30 = true;
            } else if (from == 300001) {
                this.isActive40 = false;
                this.hasError40 = true;
            } else if (from == 400001) {
                this.isActive50 = false;
                this.hasError50 = true;
            }
        },
        customizePackage() {
            const form = document.getElementById("popup");
            const name = form.querySelector("input[name=name]");
            const phone = form.querySelector("input[name=phone]");
            const email = form.querySelector("input[name=email]");
            const vacation = form.querySelector("input[name=vacation]");
            const s_request = form.querySelector("input[name=s_request]");

            const vm = this;
            axios.defaults.headers.common["Access-Control-Allow-Origin"] = "*";
            axios.defaults.headers.common["Content-Type"] = "application/json";
            axios
                .get("http://127.0.0.1:8000/api/packages/query/", {
                    name: name.value,
                    phone: phone.value,
                    email: email.value,
                    vacation: vacation.value,
                    s_request: s_request.value,
                    headers: {
                        // remove headers
                    },
                })
                .then(function (response) {
                    console.log(response);
                })
                .catch((error) => {
                    // error
                });
        },
    },
});
var swiper = new Swiper('.swiper', {
      slidesPerView: 1,
      spaceBetween: 10,
      // init: false,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      breakpoints: {
        640: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 4,
          spaceBetween: 40,
        },
        1024: {
          slidesPerView: 5,
          spaceBetween: 50,
        },
      }
    });
 
</script>

<style scoped>
@import "../../../public/vue/yugostyle.css";
.swiper {
    @include swiper-wrapper();
}
.slide {
    @include swiper-slide();
}
</style>