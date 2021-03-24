var app = new Vue({
    el: '#app',
    data: {
        isLoading: true
    },
    mounted() {
        document.onreadystatechange = () => {
            if (document.readyState == 'complete') {
                this.isLoading = false;
            }
        };
        $(".mobile-menu").slicknav({
            prependTo: "#mobile-menu-wrap",
            allowParentLinks: true,
        });




    }, methods: {
        humbergerOpen() {
            $(".humberger__menu__wrapper").addClass("show__humberger__menu__wrapper");
            $(".humberger__menu__overlay").addClass("active");
            $("body").addClass("over_hid");
        },
        humbergerMenuOverlay() {
            $(".humberger__menu__wrapper").removeClass(
                "show__humberger__menu__wrapper"
            );
            $(".humberger__menu__overlay").removeClass("active");
            $("body").removeClass("over_hid");
        },
        heroCategoriesAll() {
            $(".hero__categories ul").slideToggle(400);
        },
        myFunction() {
            Swal.fire({
                title:
                    "Our website is under construction.Click Playstore icon for download our app from playstore",
                icon: "info",
                html:
                    '<a href="https://play.google.com/store/apps/details?id=com.paramorsho.consultancy"><img src="./img/google-play-badge/google-play-badge/128x128.png" alt=""/></a>',
                showCloseButton: true,
                showCancelButton: true,
                focusConfirm: false,
                confirmButtonText: '<i class="fa fa-thumbs-up"></i> Great!',
                confirmButtonAriaLabel: "Thumbs up, great!",
                cancelButtonText: '<i class="fa fa-thumbs-down"></i>',
                cancelButtonAriaLabel: "Thumbs down",
            });
        }
    }
})