<template>
    <div class="bg-yugo">
        <HeaderNav />
        <div class="new-home-banner visa-banner text-center float-left col-xl-12">
            <div class="wrapper">
                <div class="position-relative float-left col-xl-12 p-0">
                    <h1 class="rubik-regular mb-0">Over <span class="rubik-bold">95% </span>  visa success rate <br>in 80+ countries</h1>
                </div>
                <div class="col-xl-12 p-listing-search-bar text-left float-left">
                    <select class="float-left country" id="country_select">
                        <option value="" selected disabled>Select Country</option>
                        <option v-for="countrySelect in country_options" 
                            :value="countrySelect.slug" :key="countrySelect.slug" :v-model="country_select">
                            {{ countrySelect.item_name }}
                        </option>
                    </select>  
                    <div class="submit-btn  ml-4 mt-1">
                        <button type="submit" class="form-btn primary-btn" style="margin-left: 36px;s" @click="searchVisa()">Search</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="visa-body-section">
        <div class="top-deals">
            <h1>Best Deals</h1>
            <div class="deals-slider">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators visa-slider">
                        <template v-for="(value, key, index) in sliders">
                            <template v-if="key == 0">
                                <li data-target="#carouselExampleIndicators" :data-slide-to="key"  class="active"></li>
                            </template>
                            <template v-else>
                                <li data-target="#carouselExampleIndicators" :data-slide-to="key"></li>
                            </template>
                        </template>
                    </ol>
                    <div class="carousel-inner" >
                        <template v-for="(value, key, index) in sliders">
                            <template v-if="key == 0">
                                <div class="carousel-item active">
                                <img class="d-block w-100" :src="'https://www.yugo.pk/images/campaigns/'+value.img"  alt="First slide">
                                </div>
                            </template>
                            <template v-else>
                                <div class="carousel-item">
                                <img class="d-block w-100" :src="'https://www.yugo.pk/images/campaigns/'+value.img"  alt="First slide">
                                </div>
                            </template>
                        </template>
                    </div>
                </div>
            </div>
        </div>
        <div class="visa-steps col-xl-12 float-left pl-0 pr-0">
            <div class="visa-heading">
                <h1>Visa in 3 Easy Steps</h1>
            </div>
            <div class="visa-steps-section">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="submit-section">
                            <img src="/vue/image/easy-step1.svg" class="submit-img">
                            <div class="procedure-info">
                                <h4 class="mb-3"> <a href="">Submit Documents</a></h4>
                                <p class="m-0">Email or courier us your
                                documents to process your
                                visa application</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="receive-section">
                            <img src="/vue/image/easy-step2.svg" class="submit-img">
                            <div class="procedure-info">
                                <h4 class="mb-3">  <a href="">Receive your Visa</a></h4>
                                <p class="m-0">We will courier or email
                                your visa once it is processed
                                or file is prepared
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="apply-section">
                            <img src="/vue/image/easy-step3.svg" class="submit-img">
                            <div class="procedure-info">
                                <h4 class="mb-3"> <a href="">Apply on Website</a></h4>
                                <p class="m-0">EFillup the request form online by clicking on book now. It will take less than 20 seconds</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-12 float-left top-destinations-bg">
        <div class="wrapper">
            <div class="visa-yugo float-left">
                <h2 class="destination-heading">Top Visa Destination</h2>
                    <template v-for="(value, key, index) in destination">
                         <div class="destinations2  float-left" v-if="key==2">
                            
                                    <figure class="position-relative"><img :src="'https://www.yugo.pk'+value.item.tile_img" alt="">
                                        <div class="name rubik-medium position-absolute text-uppercase"><a class="visa-inner-text">{{value.item_name}}</a></div>
                                    </figure>
                                    <div class="destination-inner float-left col-xl-12">
                                        <div class="float-left rubik-bold">
                                            <span class="rubik-regular d-block">Processing time</span>
                                            <div class="working-days">{{value.processing_time}}</div>
                                        </div>
                                        <div class="float-right text-right rubik-bold">
                                            <span class="rubik-regular d-block">Starting from</span>
                                            <b>PKR {{value.item.sell_price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}}</b>
                                        </div>
                                    </div>
                           
                        </div>
                        <div class="destinations  float-left" v-else>
                            
                                <figure class="position-relative"><img :src="'https://www.yugo.pk'+value.item.tile_img" alt="">
                                    <div class="name rubik-medium position-absolute text-uppercase"><a class="visa-inner-text">{{value.item_name}}</a></div>
                                </figure>
                                <div class="destination-inner float-left col-xl-12">
                                    <div class="float-left rubik-bold">
                                        <span class="rubik-regular d-block">Processing time</span>
                                        <div class="working-days">{{value.processing_time}}</div>
                                    </div>
                                    <div class="float-right text-right rubik-bold">
                                        <span class="rubik-regular d-block">Starting from</span>
                                        <b>PKR {{value.item.sell_price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}}</b>
                                    </div>
                                </div>
                           
                        </div>
                    </template>
            </div>
            <div class="visa-country col-xl-12 float-left">
                <h2>Top Visa Destination</h2>
                <div class="visa-country-box col-xl-12 mb-3 float-left">
                    <ul class="p-0 list-unstyled float-left">
                    <template v-for="(value, key, index) in visaDestination">
                        <li class="rubik-bold">
                        <a href="visadetail" class="visa-country-name">
                            {{value.item_name}} <span class="d-block rubik-regular">PKR {{value.item.sell_price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}}</span></a>
                        </li>
                    </template>
                    </ul>
                </div>
            </div>
        </div>
    </div>
   <FooterView />
</template>
<script>
    import {defineComponent} from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'
    import axios from 'axios'
    import HeaderNav from '@/component/HeaderNav.vue'
    import FooterView from '@/component/FooterView.vue'

    export default defineComponent({
        components: {
            AppLayout, HeaderNav,FooterView,
        },
        data() {
            return {
                selectedCountryOption : null,
                    country_options: [
                    { name: "Select Country", id: null },
                    ],
                    visaDestination: [],
                    items: [],
                    sliders: [],
                    destination : [],
                show: true,
            };
        },mounted() {
                    // bus.$on('pureView', this.pureView);
                    const vm = this;
                    axios.defaults.headers.common['Access-Control-Allow-Origin'] = '*';
                    axios.defaults.headers.common['Content-Type'] = 'application/json';
                    
                    axios
                            .get("http://127.0.0.1:8000/api/data/get/visa/home/", {
                                headers: {
                                    // remove headers
                                },
                            })
                            .then(function (response) {
                            console.log(response.data.campaigns)
                            vm.country_options = response.data.visas;
                            vm.sliders = response.data.campaigns.sliders;
                            vm.destination = response.data.toplocation;
                            vm.visaDestination = response.data.visas;
                            // console.log(vm.country_options)
                            })
                            .catch((error) => {
                            });
        },methods: {
            searchVisa: function ()
            {
            var e = document.getElementById("country_select");
            var country = e.value;
            if (country)
            {
                document.location.href = 'visa/'+ country;

            }else{
                document.location.href = 'visas';
            }
            }
        }
    });
</script>