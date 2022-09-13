<template>
    <div>
        <jet-banner/>
        <div id="main-wrapper" class="dsy-main-wrapper">
            <div class="dsy-page">
                <div class="dsy-page-content vertical-menu">
                    <header class="header">
                        <div class="navbar navbar-expand nav-top-bar1 nav-bar-fixed">
                            <div class="top-bar-menu collapse navbar-collapse" id="mobile-navbar">
                                <ul class="navbar-nav">
                                    <li class="nav-toggle-btn d-none d-lg-block">
                                        <button class="btn-icon" id="dsy-aside-toggler">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </button>
                                    </li>
                                    <li class="nav-toggle-btn d-lg-none">
                                        <button class="btn-icon sidebar-toggle-mobile">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </button>
                                    </li>
                                    <li class="nav-search-bar">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search......">
                                            <div class="input-group-append">
                                                <button class="item-btn" type="button"><i class="flaticon-null-15"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="navbar-nav">
                                    <li class="navbar-item dropdown nav-language">

                                    </li>
                                    <li class="navbar-item dropdown nav-message">
                                        <a class="navbar-nav-link dropdown-toggle" href="#" role="button"
                                           data-toggle="dropdown" aria-expanded="false">
                                            <i class="flaticon-null-18"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <h5 class="main-heading text-body text-bold mb-1">Messages</h5>
                                            <div class="sub-heading text-12 text-manatee">You have 4 unread messages
                                            </div>
                                            <div class="nofify-list">
                                                <a href="#" class="media">
                                                    <div class="item-img">
                                                       </div>
                                                    <div class="media-body">
                                                        <h6 class="item-title text-14 text-bold mb-1">Thomas Henry</h6>
                                                        <p class="text-13">There many variations dumm more the of
                                                            available.</p>
                                                        <div class="text-12 text-manatee">Mar 15 3:55 PM</div>
                                                    </div>
                                                </a>
                                                <a href="#" class="media">
                                                    <div class="item-img">
                                                         </div>
                                                    <div class="media-body">
                                                        <h6 class="item-title text-14 text-bold mb-1">Tom Black</h6>
                                                        <p class="text-13">There many variations dumm more the of
                                                            available.</p>
                                                        <div class="text-12 text-manatee">Mar 17 6:12 PM</div>
                                                    </div>
                                                </a>
                                                <a href="#" class="media">
                                                    <div class="item-img">
                                                           </div>
                                                    <div class="media-body">
                                                        <h6 class="item-title text-14 text-bold mb-1">Jasmine
                                                            Roberts</h6>
                                                        <p class="text-13">There many variations dumm more the of
                                                            available.</p>
                                                        <div class="text-12 text-manatee">Mar 18 2:36 PM</div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="view-btn">
                                                <a href="#">VIEW ALL</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="navbar-item dropdown nav-notification">
                                        <a class="navbar-nav-link dropdown-toggle" href="#" role="button"
                                           data-toggle="dropdown" aria-expanded="false">
                                            <i class="flaticon-null-17"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h5 class="text-body text-bold mb-1">Notification</h5>
                                                <a href="#" class="text-12 text-manatee text-bold">Mark All</a>
                                            </div>
                                            <div class="nofify-list">
                                                <a href="#" class="media">
                                                    <div class="item-img">
                                                          </div>
                                                    <div class="media-body">
                                                        <h6 class="item-title text-13 text-bold mb-1">Requested to
                                                            Widthdrawl</h6>
                                                        <div class="sub-title text-12 text-manatee">2 Hrs Ago</div>
                                                    </div>
                                                </a>
                                                <a href="#" class="media">
                                                    <div class="item-img">
                                                           </div>
                                                    <div class="media-body">
                                                        <h6 class="item-title text-13 text-bold mb-1">New user
                                                            registered.</h6>
                                                        <div class="sub-title text-12 text-manatee">5 Hrs Ago</div>
                                                    </div>
                                                </a>
                                                <a href="#" class="media">
                                                    <div class="item-img">
                                                          </div>
                                                    <div class="media-body">
                                                        <h6 class="item-title text-13 text-bold mb-1">Thomas Henry
                                                            Added!</h6>
                                                        <div class="sub-title text-12 text-manatee">5 Hrs Ago</div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="view-btn">
                                                <a href="#">VIEW ALL</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="navbar-item dropdown nav-admin">
                                        <a class="navbar-nav-link dropdown-toggle" href="#" role="button"
                                           data-toggle="dropdown" aria-expanded="false"> Maria Ree<i
                                            class="flaticon-null-16"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <h5 class="text-bold text-body mb-0">Maria Ree</h5>
                                            <div class="text-14 text-manatee">Graphic Design</div>
                                            <ul class="settings-list">
                                                <li><a href="#"><i class="far fa-user"></i>View Profile</a></li>
                                                <li><a href="#"><i class="fas fa-edit"></i>Account Setting</a></li>
                                                <li><a href="#"><i class="fas fa-question"></i>Help Center</a></li>
                                                <li><a href="#"><i class="fas fa-lock"></i>Lock screen</a></li>
                                            </ul>
                                            <div class="sign-btn">
                                                <a href="#">SIGN OUT</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </header>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import {defineComponent} from 'vue'
    import JetApplicationMark from '@/Jetstream/ApplicationMark.vue'
    import JetBanner from '@/Jetstream/Banner.vue'
    import JetDropdown from '@/Jetstream/Dropdown.vue'
    import JetDropdownLink from '@/Jetstream/DropdownLink.vue'
    import JetNavLink from '@/Jetstream/NavLink.vue'
    import JetResponsiveNavLink from '@/Jetstream/ResponsiveNavLink.vue'
    import {Head, Link} from '@inertiajs/inertia-vue3';

    export default defineComponent({
        props: {
            title: String,
        },

        components: {
            Head,
            JetApplicationMark,
            JetBanner,
            JetDropdown,
            JetDropdownLink,
            JetNavLink,
            JetResponsiveNavLink,
            Link,
        },

        data() {
            return {
                showingNavigationDropdown: false,
            }
        },

        methods: {
            switchToTeam(team) {
                this.$inertia.put(route('current-team.update'), {
                    'team_id': team.id
                }, {
                    preserveState: false
                })
            },

            logout() {
                this.$inertia.post(route('logout'));
            },
        }
    })
</script>
