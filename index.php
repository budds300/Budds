<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from wpriverthemes.com/drake/earth-lines-sphere/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Apr 2024 11:57:18 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="icon" type="image/x-icon" href="wpriverthemes.com/Tamminga/wp-content/uploads/2023/03/logoz.png">



    <title>Tamminga Budds</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <meta name='robots' content='max-image-preview:large' />
    <link rel='dns-prefetch' href='http://maxst.icons8.com/' />
    <link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
    <link rel="alternate" type="application/rss+xml" title="Tamminga &raquo; Feed"
        href="https://wpriverthemes.com/drake/feed/" />
    <link rel="alternate" type="application/rss+xml" title="Tamminga &raquo; Comments Feed"
        href="https://wpriverthemes.com/drake/comments/feed/" />
    <script>
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "https:\/\/wpriverthemes.com\/drake\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.4.4"
            }
        };
        /*! This file is auto-generated */
        ! function (i, n) {
            var o, s, e;

            function c(e) {
                try {
                    var t = {
                        supportTests: e,
                        timestamp: (new Date).valueOf()
                    };
                    sessionStorage.setItem(o, JSON.stringify(t))
                } catch (e) {}
            }

            function p(e, t, n) {
                e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
                var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data),
                    r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e
                        .getImageData(0, 0, e.canvas.width, e.canvas.height).data));
                return t.every(function (e, t) {
                    return e === r[t]
                })
            }

            function u(e, t, n) {
                switch (t) {
                    case "flag":
                        return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !
                            1 : !n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e,
                                "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f",
                                "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"
                            );
                    case "emoji":
                        return !n(e, "\ud83e\udef1\ud83c\udffb\u200d\ud83e\udef2\ud83c\udfff",
                            "\ud83e\udef1\ud83c\udffb\u200b\ud83e\udef2\ud83c\udfff")
                }
                return !1
            }

            function f(e, t, n) {
                var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ?
                    new OffscreenCanvas(300, 150) : i.createElement("canvas"),
                    a = r.getContext("2d", {
                        willReadFrequently: !0
                    }),
                    o = (a.textBaseline = "top", a.font = "600 32px Arial", {});
                return e.forEach(function (e) {
                    o[e] = t(a, e, n)
                }), o
            }

            function t(e) {
                var t = i.createElement("script");
                t.src = e, t.defer = !0, i.head.appendChild(t)
            }
            "undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", s = ["flag", "emoji"], n.supports = {
                everything: !0,
                everythingExceptFlag: !0
            }, e = new Promise(function (e) {
                i.addEventListener("DOMContentLoaded", e, {
                    once: !0
                })
            }), new Promise(function (t) {
                var n = function () {
                    try {
                        var e = JSON.parse(sessionStorage.getItem(o));
                        if ("object" == typeof e && "number" == typeof e.timestamp && (new Date)
                            .valueOf() < e.timestamp + 604800 && "object" == typeof e.supportTests)
                            return e.supportTests
                    } catch (e) {}
                    return null
                }();
                if (!n) {
                    if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas &&
                        "undefined" != typeof URL && URL.createObjectURL && "undefined" != typeof Blob)
                        try {
                            var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(),
                                    p.toString()
                                ].join(",") + "));",
                                r = new Blob([e], {
                                    type: "text/javascript"
                                }),
                                a = new Worker(URL.createObjectURL(r), {
                                    name: "wpTestEmojiSupports"
                                });
                            return void(a.onmessage = function (e) {
                                c(n = e.data), a.terminate(), t(n)
                            })
                        } catch (e) {}
                    c(n = f(s, u, p))
                }
                t(n)
            }).then(function (e) {
                for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n
                    .supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports
                        .everythingExceptFlag && n.supports[t]);
                n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n
                    .DOMReady = !1, n.readyCallback = function () {
                        n.DOMReady = !0
                    }
            }).then(function () {
                return e
            }).then(function () {
                var e;
                n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e
                    .concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)))
            }))
        }((window, document), window._wpemojiSettings);
    </script>
    <style id='wp-emoji-styles-inline-css'>
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <style id='classic-theme-styles-inline-css'>
        /*! This file is auto-generated */
        .wp-block-button__link {
            color: #fff;
            background-color: #32373c;
            border-radius: 9999px;
            box-shadow: none;
            text-decoration: none;
            padding: calc(.667em + 2px) calc(1.333em + 2px);
            font-size: 1.125em
        }

        .wp-block-file__button {
            background: #32373c;
            color: #fff;
            text-decoration: none
        }
    </style>
    <style id='global-styles-inline-css'>
        body {
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
            --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
        }

        :where(.is-layout-flex) {
            gap: 0.5em;
        }

        :where(.is-layout-grid) {
            gap: 0.5em;
        }

        body .is-layout-flow>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-flow>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-flow>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-constrained>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-constrained>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
            max-width: var(--wp--style--global--content-size);
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained>.alignwide {
            max-width: var(--wp--style--global--wide-size);
        }

        body .is-layout-flex {
            display: flex;
        }

        body .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        body .is-layout-flex>* {
            margin: 0;
        }

        body .is-layout-grid {
            display: grid;
        }

        body .is-layout-grid>* {
            margin: 0;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }

        .wp-block-navigation a:where(:not(.wp-element-button)) {
            color: inherit;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        .wp-block-pullquote {
            font-size: 1.5em;
            line-height: 1.6;
        }
    </style>
    <link rel='stylesheet' id='contact-form-7-css'
        href='wpriverthemes.com/Tamminga/wp-content/plugins/contact-form-7/includes/css/styles7404.css?ver=5.9.3'
        media='all' />
    <link rel='stylesheet' id='redux-extendify-styles-css'
        href='wpriverthemes.com/Tamminga/wp-content/plugins/redux-framework/redux-core/assets/css/extendify-utilitiese929.css?ver=4.4.15'
        media='all' />
    <link rel='stylesheet' id='line-awesome-css'
        href='maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min5352.css'
        media='all' />
    <link rel='stylesheet' id='bootstrap-css'
        href='wpriverthemes.com/Tamminga/wp-content/themes/drake/assets/css/bootstrap.min5352.css?ver=6.4.4'
        media='all' />
    <link rel='stylesheet' id='owl-carousel-css'
        href='wpriverthemes.com/Tamminga/wp-content/themes/drake/assets/css/owl.carousel.min5352.css?ver=6.4.4'
        media='all' />
    <link rel='stylesheet' id='owl-theme-css'
        href='wpriverthemes.com/Tamminga/wp-content/themes/drake/assets/css/owl.theme.default.min5352.css?ver=6.4.4'
        media='all' />
    <link rel='stylesheet' id='animate-css'
        href='wpriverthemes.com/Tamminga/wp-content/themes/drake/assets/css/animate.min5352.css?ver=6.4.4'
        media='all' />
    <link rel='stylesheet' id='smooth-scrollbar-css'
        href='wpriverthemes.com/Tamminga/wp-content/themes/drake/assets/css/smooth-scrollbar5352.css?ver=6.4.4'
        media='all' />
    <link rel='stylesheet' id='lightbox-css'
        href='wpriverthemes.com/Tamminga/wp-content/themes/drake/assets/css/lightbox.min5352.css?ver=6.4.4'
        media='all' />
    <link rel='stylesheet' id='drake-style-css'
        href='wpriverthemes.com/Tamminga/wp-content/themes/drake/assets/css/style5352.css?ver=6.4.4' media='all' />
    <link rel='stylesheet' id='unit-test-css'
        href='wpriverthemes.com/Tamminga/wp-content/themes/drake/assets/css/unit-test5352.css?ver=6.4.4' media='all' />
    <link rel='stylesheet' id='drake-responsive-css'
        href='wpriverthemes.com/Tamminga/wp-content/themes/drake/assets/css/responsive5352.css?ver=6.4.4' media='all' />
    <link rel='stylesheet' id='drake-fonts-css'
        href='http://fonts.googleapis.com/css?family=Inter%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900%26subset%3Dlatin%2Clatin-ext&amp;ver=1.0.0'
        media='all' />
    <link rel='stylesheet' id='elementor-icons-css'
        href='wpriverthemes.com/Tamminga/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.mind54b.css?ver=5.29.0'
        media='all' />
    <link rel='stylesheet' id='elementor-frontend-css'
        href='wpriverthemes.com/Tamminga/wp-content/plugins/elementor/assets/css/frontend-lite.min7329.css?ver=3.20.2'
        media='all' />
    <link rel='stylesheet' id='swiper-css'
        href='wpriverthemes.com/Tamminga/wp-content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min94a4.css?ver=8.4.5'
        media='all' />
    <link rel='stylesheet' id='elementor-post-10-css'
        href='wpriverthemes.com/Tamminga/wp-content/uploads/elementor/css/post-102513.css?ver=1711002626' media='all' />
    <link rel='stylesheet' id='elementor-global-css'
        href='wpriverthemes.com/Tamminga/wp-content/uploads/elementor/css/global2afb.css?ver=1711002627' media='all' />
    <link rel='stylesheet' id='google-fonts-1-css'
        href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=swap&amp;ver=6.4.4'
        media='all' />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <script src="wpriverthemes.com/Tamminga/wp-includes/js/jquery/jquery.minf43b.js?ver=3.7.1" id="jquery-core-js">
    </script>
    <script src="wpriverthemes.com/Tamminga/wp-includes/js/jquery/jquery-migrate.min5589.js?ver=3.4.1"
        id="jquery-migrate-js"></script>
    <link rel="https://api.w.org/" href="https://wpriverthemes.com/drake/wp-json/" />
    <link rel="alternate" type="application/json" href="https://wpriverthemes.com/drake/wp-json/wp/v2/pages/199" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://wpriverthemes.com/drake/xmlrpc.php?rsd" />
    <meta name="generator" content="WordPress 6.4.4" />
    <link rel="canonical" href="index.html" />
    <link rel='shortlink' href='https://wpriverthemes.com/drake/?p=199' />
    <link rel="alternate" type="application/json+oembed"
        href="https://wpriverthemes.com/drake/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwpriverthemes.com%2Fdrake%2Fearth-lines-sphere%2F" />
    <link rel="alternate" type="text/xml+oembed"
        href="https://wpriverthemes.com/drake/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwpriverthemes.com%2Fdrake%2Fearth-lines-sphere%2F&amp;format=xml" />
    <meta name="generator" content="Redux 4.4.15" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <meta name="generator"
        content="Elementor 3.20.2; features: e_optimized_assets_loading, e_optimized_css_loading, additional_custom_breakpoints, block_editor_assets_optimize, e_image_loading_optimization; settings: css_print_method-external, google_font-enabled, font_display-swap">
    <style id="wp-custom-css">
        .global-color .setting-toggle {
            border-radius: 5px;
        }

        .global-color .setting-toggle i {
            animation: rotating 3s infinite linear;
        }
    </style>

</head>

<body class="home1-page">
    <video class="body-overlay" muted autoplay loop>
        <source src="https://wpriverthemes.com/drake/wp-content/themes/drake/assets/images/video1.mp4" type="video/mp4">
    </video>
    <div class="page-loader">
        <div class="bounceball"></div>
    </div>
    <span class="icon-menu">
        <span class="bar"></span>
        <span class="bar"></span>
    </span>
    <div class="global-color">
        <span class="setting-toggle">
            <i class="las la-cog"></i>
        </span>
        <div class="inner">
            <div class="overlay"></div>
            <div class="global-color-option">
                <span class="close-settings">
                    <i class="las la-times"></i>
                </span>
                <h3>Configuration</h3>
                <div class="global-color-option-inner">
                    <p>Colors</p>
                    <div class="color-boxed">
                        <a href="#" class="clr-active" onclick="color1();"></a>
                        <a href="#" onclick="color2();"></a>
                        <a href="#" onclick="color3();"></a>
                        <a href="#" onclick="color4();"></a>
                        <a href="#" onclick="color5();"></a>
                        <a href="#" onclick="color6();"></a>
                        <a href="#" onclick="color7();"></a>
                        <a href="#" onclick="color8();"></a>
                    </div>


                </div>
            </div>
        </div>
    </div>


    <div class="responsive-sidebar-menu">
        <div class="overlay"></div>
        <div class="sidebar-menu-inner">
            <div class="menu-wrap">
                <p>Menu</p>
                <ul class="dmenu scroll-nav-responsive d-flex">
                    <li>
                        <a class="scroll-to" href="#home">
                            <i class="las la-home"></i> <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a class="scroll-to" href="#about">
                            <i class="lar la-user"></i> <span>About</span>
                        </a>
                    </li>
                    <li>
                        <a class="scroll-to" href="#resume">
                            <i class="las la-briefcase"></i> <span>Resume</span>
                        </a>
                    </li>
                    <li>
                        <a class="scroll-to" href="#services">
                            <i class="las la-stream"></i> <span>Services</span>
                        </a>
                    </li>
                    <li>
                        <a class="scroll-to" href="#skills">
                            <i class="las la-shapes"></i> <span>Skills</span>
                        </a>
                    </li>
                    <li>
                        <a class="scroll-to" href="#portfolio">
                            <i class="las la-grip-vertical"></i> <span>Portfolio</span>
                        </a>
                    </li>

                    <li>
                        <a class="scroll-to" href="#contact">
                            <i class="las la-envelope"></i> <span>Contact</span>
                        </a>
                    </li>
                </ul>
            </div>


            <div class="sidebar-social">
                <p>Social</p>
                <ul class="social-links d-flex align-items-center">
                    <li>
                        <a href="https://www.instagram.com/_budds_/"><i class="lab la-instagram"></i></a>
                    </li>
                    <li>
                        <a href="https://twitter.com/tamminga_g"><i class="bi bi-twitter-x fs-6"></i></a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/in/tamminga-givondo/"><i class="lab la-linkedin"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
        </div>
    </div>

    <ul class="dmenu scroll-nav d-flex">
        <li>
            <a class="scroll-to" href="#home">
                <span>Home</span> <i class="las la-home"></i>
            </a>
        </li>
        <li>
            <a class="scroll-to" href="#about">
                <span>About</span> <i class="lar la-user"></i>
            </a>
        </li>
        <li>
            <a class="scroll-to" href="#resume">
                <span>Resume</span> <i class="las la-briefcase"></i>
            </a>
        </li>
        <li>
            <a class="scroll-to" href="#services">
                <span>Services</span> <i class="las la-stream"></i>
            </a>
        </li>
        <li>
            <a class="scroll-to" href="#skills">
                <span>Skills</span> <i class="las la-shapes"></i>
            </a>
        </li>
        <li>
            <a class="scroll-to" href="#portfolio">
                <span>Portfolio</span> <i class="las la-grip-vertical"></i>
            </a>
        </li>

        <li>
            <a class="scroll-to" href="#contact">
                <span>Contact</span> <i class="las la-envelope"></i>
            </a>
        </li>
    </ul>

    <div class="left-sidebar ">
        <div class="sidebar-header d-flex align-items-center justify-content-between">
            <img src="wpriverthemes.com/Tamminga/wp-content/uploads/2023/03/1.png" width="140" alt="Logo">
            <span class="designation">Fullstack Developer &amp; Data Analyst</span>
        </div>
        <img class="me" src="wpriverthemes.com/Tamminga/wp-content/uploads/2023/03/me.jpeg" alt="ME">
        <h3 class="email mx-1">tammingagivondo@gmail.com</h3>
        <h3 class="address">Nairobi Kenya</h3>
        <p class="copyright">&copy; <span id="year"></span> Tamminga. All Rights Reserved</p>
        <ul class="social-profile d-flex align-items-center flex-wrap justify-content-center">
            <li>


                <a href="https://www.instagram.com/_budds_/" target="_blank"><i class="lab la-instagram"></i></a>


            </li>
            <li>

            <a href="https://twitter.com/tamminga_g"><i class="bi bi-twitter-x fs-6"></i></a>
            </li>
            <li>

                <a href="https://www.linkedin.com/in/tamminga-givondo/" target="_blank"><i
                        class="lab la-linkedin"></i></a>
            </li>
            <li>

                <a href="https://github.com/budds300" target="_blank"><i class="lab la-github"></i></a>
            </li>
        </ul>
        <a href="#contact" class="theme-btn">
            <i class="las la-envelope"></i> Hire Me! </a>
    </div>

    <main class="drake-main">
        <div id="smooth-wrapper">
            <div id="smooth-content">

                <div class="left-sidebar">
                    <div class="sidebar-header d-flex align-items-center justify-content-between">
                        <img src="wpriverthemes.com/Tamminga/wp-content/uploads/2023/03/1.png" width="200" alt="Logo">
                        <span class="designation">Fullstack Developer &amp; Data Analyst</span>
                    </div>
                    <img class="me" src="wpriverthemes.com/Tamminga/wp-content/uploads/2023/03/me.jpeg" alt="ME">
                    <h3 class="email mx-1">tammingagivondo@gmail.com</h3>
                    <h3 class="address">Nairobi Kenya</h3>
                    <p class="copyright">&copy; <span id="year"></span> Tamminga. All Rights Reserved</p>
                    <ul class="social-profile d-flex align-items-center flex-wrap justify-content-center">
                        <li>


                            <a href="https://www.instagram.com/_budds_/" target="_blank"><i
                                    class="lab la-instagram"></i></a>


                        </li>
                        <li>

                            <a href="https://twitter.com/tamminga_g" target="_blank"><i class="lab la-twitter"></i></a>
                        </li>
                        <li>

                            <a href="https://www.linkedin.com/in/tamminga-givondo/" target="_blank"><i
                                    class="lab la-linkedin"></i></a>
                        </li>
                        <li>

                            <a href="https://github.com/budds300" target="_blank"><i class="lab la-github"></i></a>
                        </li>
                    </ul>
                    <a href="#contact" class="theme-btn">
                        <i class="las la-envelope"></i> Hire Me! </a>
                </div>
                <div data-elementor-type="wp-page" data-elementor-id="199" class="elementor elementor-199">
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-4008bb0 elementor-section-full_width page-section scroll-to-page elementor-section-height-default elementor-section-height-default"
                        data-id="4008bb0" data-element_type="section" id="home">
                        <div class="elementor-container elementor-column-gap-no">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-56d535e"
                                data-id="56d535e" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-d8d1695 elementor-widget elementor-widget-drakehero"
                                        data-id="d8d1695" data-element_type="widget"
                                        data-widget_type="drakehero.default">
                                        <div class="elementor-widget-container">

                                            <section class="hero-section">

                                                <div class="custom-container">
                                                    <div class="hero-content content-width">
                                                        <div class="section-header">
                                                            <h4 class="subtitle scroll-animation"
                                                                data-animation="fade_from_bottom">
                                                                <i class="las la-home"></i> Introduce </h4>
                                                            <h1 class="scroll-animation"
                                                                data-animation="fade_from_bottom">Say Hi from
                                                                <span>Tamminga</span>, Software Developer and Data
                                                                Analyst</h1>
                                                        </div>
                                                        <p class="scroll-animation" data-animation="fade_from_bottom">I
                                                            thrive in creating elegant solutions through both software
                                                            design and data analysis, driven by a passion for simplicity
                                                            in everything I do.</p>

                                                        <a href="#portfolio"
                                                            class="go-to-project-btn scroll-to scroll-animation"
                                                            data-animation="rotate_up">
                                                            <img decoding="async"
                                                                src="wpriverthemes.com/Tamminga/wp-content/uploads/2023/03/round-text.png"
                                                                alt="Round Text">
                                                            <i class="las la-arrow-down"></i>
                                                        </a>

                                                        <div class="facts d-flex">

                                                            <div class="left scroll-animation"
                                                                data-animation="fade_from_left">
                                                                <h2>4+</h2>
                                                                <p>Years of <br>Experience</p>
                                                            </div>


                                                            <div class="right scroll-animation"
                                                                data-animation="fade_from_right">
                                                                <h2>80+</h2>
                                                                <p>projects completed</p>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </section>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-51b78d5 elementor-section-full_width page-section scroll-to-page elementor-section-height-default elementor-section-height-default"
                        data-id="51b78d5" data-element_type="section" id="about">
                        <div class="elementor-container elementor-column-gap-no">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-0f928fc"
                                data-id="0f928fc" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-089591c elementor-widget elementor-widget-drakeabout"
                                        data-id="089591c" data-element_type="widget"
                                        data-widget_type="drakeabout.default">
                                        <div class="elementor-widget-container">

                                            <section class="about-area">
                                                <div class="custom-container">
                                                    <div class="about-content content-width">
                                                        <div class="section-header">
                                                            <h4 class="subtitle scroll-animation"
                                                                data-animation="fade_from_bottom">
                                                                <i class="lar la-user"></i> About </h4>
                                                            <h2 class="scroll-animation"
                                                                data-animation="fade_from_bottom">Every great design
                                                                begin with<br> an even <span>better story</span></h2>
                                                        </div>
                                                        <p class="scroll-animation" data-animation="fade_from_bottom">
                                                            For the past 4 years, I've leveraged my technical skills in
                                                            both software development and data analysis. I've thrived in
                                                            remote environments, collaborating with diverse teams on
                                                            building data-driven solutions for a variety of clients. I'm
                                                            a continuous learner, passionate about tackling complex
                                                            problems and translating data insights into actionable
                                                            applications.
                                                        </p>
                                                    </div>
                                                </div>
                                            </section>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-09e57b7 elementor-section-full_width page-section scroll-to-page elementor-section-height-default elementor-section-height-default"
                        data-id="09e57b7" data-element_type="section" id="resume">
                        <div class="elementor-container elementor-column-gap-no">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-e656275"
                                data-id="e656275" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-813d5c5 elementor-widget elementor-widget-drakeresume"
                                        data-id="813d5c5" data-element_type="widget"
                                        data-widget_type="drakeresume.default">
                                        <div class="elementor-widget-container">
                                            <section class="resume-area">
                                                <div class="custom-container">
                                                    <div class="resume-content content-width">
                                                        <div class="section-header">
                                                            <h4 class="subtitle scroll-animation"
                                                                data-animation="fade_from_bottom">
                                                                <i class="las la-briefcase"></i> resume </h4>
                                                            <h2 class="scroll-animation"
                                                                data-animation="fade_from_bottom">Education &
                                                                <span>Experience</span></h2>
                                                        </div>

                                                        <div class="resume-timeline">
                                                            <div class="item scroll-animation"
                                                                data-animation="fade_from_right">
                                                                <span class="date">2022 - Present</span>
                                                                <h3>Software Developer</h3>
                                                                <p>Mobidev Kenya</p>

                                                                <h3>Front-End Developer</h3>
                                                                <p>AUDA-NEPAD (AU)</p>

                                                            </div>
                                                            <div class="item scroll-animation"
                                                                data-animation="fade_from_right">
                                                                <span class="date">2021 - 2022</span>
                                                                <h3>Software Engineer</h3>
                                                                <p>Oaknet Business</p>

                                                                <h3>Web Developer</h3>
                                                                <p>Freelance</p>
                                                            </div>
                                                            <div class="item scroll-animation"
                                                                data-animation="fade_from_right">
                                                                <span class="date">2023-2024</span>
                                                                <h3>Azubi Africa</h3>
                                                                <p>Data Analytics</p>
                                                            </div>
                                                            <div class="item scroll-animation"
                                                                data-animation="fade_from_right">
                                                                <span class="date">2021</span>
                                                                <h3>Moringa School</h3>
                                                                <p>Software Development</p>
                                                            </div>
                                                            <div class="item scroll-animation"
                                                                data-animation="fade_from_right">
                                                                <span class="date">2019 - 2024</span>
                                                                <h3>Bachelor Degree of Information Technology</h3>
                                                                <p>Catholic university of Eastern Africa</p>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </section>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-e2fc89f elementor-section-full_width page-section scroll-to-page elementor-section-height-default elementor-section-height-default"
                        data-id="e2fc89f" data-element_type="section" id="services">
                        <div class="elementor-container elementor-column-gap-no">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-043c284"
                                data-id="043c284" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-cf421ee elementor-widget elementor-widget-drakeservices"
                                        data-id="cf421ee" data-element_type="widget"
                                        data-widget_type="drakeservices.default">
                                        <div class="elementor-widget-container">

                                            <section class="services-area">
                                                <div class="custom-container">
                                                    <div class="services-content content-width">
                                                        <div class="section-header">
                                                            <h4 class="subtitle scroll-animation"
                                                                data-animation="fade_from_bottom">
                                                                <i class="las la-stream"></i> Services </h4>
                                                            <h2 class="scroll-animation"
                                                                data-animation="fade_from_bottom">My
                                                                <span>Specializations</span></h2>
                                                        </div>

                                                        <div class="services-items">
                                                            <div class="service-item scroll-animation"
                                                                data-animation="fade_from_bottom">
                                                                <i class="las la-bezier-curve"></i>
                                                                <h3>Front-End Development</h3>
                                                                <p>I created digital products with unique ideas use
                                                                    Figma & Framer</p>
                                                                <span class="projects">30 Projects</span>
                                                            </div>
                                                            <div class="service-item scroll-animation"
                                                                data-animation="fade_from_bottom">
                                                                <i class="las la-code"></i>
                                                                <h3>Software Development</h3>
                                                                <p>I develop websites and deploy them using AWS, Digital
                                                                    Ocean, Vercel, Heroku, or WordPress.</p>
                                                                <span class="projects">50 Projects</span>
                                                            </div>
                                                            <div class="service-item scroll-animation"
                                                                data-animation="fade_from_bottom">
                                                                <i class="las la-rocket"></i>
                                                                <h3>Data Analyst</h3>
                                                                <p>Work closely with cross-functional teams to analyze
                                                                    data, generate insights, and support decision-making
                                                                    processes</p>
                                                                <span class="projects">8 Projects</span>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </section>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-a32fcf2 elementor-section-full_width page-section scroll-to-page elementor-section-height-default elementor-section-height-default"
                        data-id="a32fcf2" data-element_type="section" id="skills">
                        <div class="elementor-container elementor-column-gap-no">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-0fa9229"
                                data-id="0fa9229" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-319c9f1 elementor-widget elementor-widget-drakeskill"
                                        data-id="319c9f1" data-element_type="widget"
                                        data-widget_type="drakeskill.default">
                                        <div class="elementor-widget-container">

                                            <section class="skills-area">
                                                <div class="custom-container">
                                                    <div class="skills-content content-width">
                                                        <div class="section-header">
                                                            <h4 class="subtitle scroll-animation"
                                                                data-animation="fade_from_bottom">
                                                                <i class="las la-shapes"></i> my skills </h4>
                                                            <h2 class="scroll-animation"
                                                                data-animation="fade_from_bottom">My
                                                                <span>Advantages</span></h2>
                                                        </div>
                                                        <div class="row skills text-center">
                                                            <div class="col-md-3 scroll-animation"
                                                                data-animation="fade_from_bottom">
                                                                <div class="skill">
                                                                    <div class="skill-inner">
                                                                        <img decoding="async"
                                                                            src="wpriverthemes.com/Tamminga/wp-content/uploads/2023/03/laravel.png"
                                                                            alt="">
                                                                        <h2 class="percent"></h2>
                                                                    </div>
                                                                    <p class="name">Laravel/PHP</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 scroll-animation"
                                                                data-animation="fade_from_bottom">
                                                                <div class="skill">
                                                                    <div class="skill-inner">
                                                                        <img decoding="async " width="70"
                                                                            src="wpriverthemes.com/Tamminga/wp-content/uploads/2023/03/nextjs.png"
                                                                            alt="">
                                                                        <h2 class="percent"></h2>
                                                                    </div>
                                                                    <p class="name">Next.js</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 scroll-animation"
                                                                data-animation="fade_from_bottom">
                                                                <div class="skill">
                                                                    <div class="skill-inner">
                                                                        <img decoding="async " width="70"
                                                                            src="wpriverthemes.com/Tamminga/wp-content/uploads/2023/03/python-127-svgrepo-com.png"
                                                                            alt="">
                                                                        <h2 class="percent"></h2>
                                                                    </div>
                                                                    <p class="name">Python</p>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-3 scroll-animation"
                                                                data-animation="fade_from_right">
                                                                <div class="skill">
                                                                    <div class="skill-inner">
                                                                        <img decoding="async"
                                                                            src="wpriverthemes.com/Tamminga/wp-content/uploads/2023/03/react.png"
                                                                            alt="">
                                                                        <h2 class="percent"></h2>
                                                                    </div>
                                                                    <p class="name">React</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 scroll-animation"
                                                                data-animation="fade_from_left">
                                                                <div class="skill">
                                                                    <div class="skill-inner">
                                                                        <img decoding="async"
                                                                            src="wpriverthemes.com/Tamminga/wp-content/uploads/2023/03/figma.png"
                                                                            alt="">
                                                                        <h2 class="percent"></h2>
                                                                    </div>
                                                                    <p class="name">Figma</p>
                                                                </div>
                                                            </div>
                                                            <!-- <div class="col-md-3 scroll-animation"
                                                            data-animation="fade_from_bottom">
                                                            <div class="skill">
                                                                <div class="skill-inner">
                                                                    <img decoding="async"
                                                                        src="wpriverthemes.com/Tamminga/wp-content/uploads/2023/03/framer.png"
                                                                        alt="">
                                                                    <h2 class="percent"></h2>
                                                                </div>
                                                                <p class="name">Framer</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 scroll-animation"
                                                            data-animation="fade_from_top">
                                                            <div class="skill">
                                                                <div class="skill-inner">
                                                                    <img decoding="async"
                                                                        src="wpriverthemes.com/Tamminga/wp-content/uploads/2023/03/webflow.png"
                                                                        alt="">
                                                                    <h2 class="percent"></h2>
                                                                </div>
                                                                <p class="name">Webflow</p>
                                                            </div>
                                                        </div> -->
                                                            <div class="col-md-3 scroll-animation"
                                                                data-animation="fade_from_left">
                                                                <div class="skill">
                                                                    <div class="skill-inner">
                                                                        <img decoding="async"
                                                                            src="wpriverthemes.com/Tamminga/wp-content/uploads/2023/03/wordpress.png"
                                                                            alt="">
                                                                        <h2 class="percent"></h2>
                                                                    </div>
                                                                    <p class="name">WordPress</p>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-3 scroll-animation"
                                                                data-animation="fade_from_bottom">
                                                                <div class="skill">
                                                                    <div class="skill-inner">
                                                                        <img decoding="async " width="70"
                                                                            src="wpriverthemes.com/Tamminga/wp-content/uploads/2023/03/node-fill-svgrepo-com.png"
                                                                            alt="">
                                                                        <h2 class="percent"></h2>
                                                                    </div>
                                                                    <p class="name">Node</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 scroll-animation"
                                                                data-animation="fade_from_bottom">
                                                                <div class="skill">
                                                                    <div class="skill-inner">
                                                                        <img decoding="async " width="70"
                                                                            src="wpriverthemes.com/Tamminga/wp-content/uploads/2023/03/typescript-16-svgrepo-com.png"
                                                                            alt="">
                                                                        <h2 class="percent"></h2>
                                                                    </div>
                                                                    <p class="name">Typescript</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 scroll-animation"
                                                                data-animation="fade_from_bottom">
                                                                <div class="skill">
                                                                    <div class="skill-inner">
                                                                        <img decoding="async " width="70"
                                                                            src="wpriverthemes.com/Tamminga/wp-content/uploads/2023/03/powerbi-svgrepo-com.png"
                                                                            alt="">
                                                                        <h2 class="percent"></h2>
                                                                    </div>
                                                                    <p class="name">Powerbi</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 scroll-animation"
                                                                data-animation="fade_from_bottom">
                                                                <div class="skill">
                                                                    <div class="skill-inner">
                                                                        <img decoding="async " width="70"
                                                                            src="wpriverthemes.com/Tamminga/wp-content/uploads/2023/03/excel.png"
                                                                            alt="">
                                                                        <h2 class="percent"></h2>
                                                                    </div>
                                                                    <p class="name">Excel</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 scroll-animation"
                                                                data-animation="fade_from_bottom">
                                                                <div class="skill">
                                                                    <div class="skill-inner">
                                                                        <img decoding="async " width="70"
                                                                            src="wpriverthemes.com/Tamminga/wp-content/uploads/2023/03/mysql.png"
                                                                            alt="">
                                                                        <h2 class="percent"></h2>
                                                                    </div>
                                                                    <p class="name">Mysql</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 scroll-animation"
                                                                data-animation="fade_from_bottom">
                                                                <div class="skill">
                                                                    <div class="skill-inner">
                                                                        <img decoding="async " width="70"
                                                                            src="wpriverthemes.com/Tamminga/wp-content/uploads/2023/03/postgresql.png"
                                                                            alt="">
                                                                        <h2 class="percent"></h2>
                                                                    </div>
                                                                    <p class="name">Postgresql</p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </section>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-2090be3 elementor-section-full_width page-section scroll-to-page elementor-section-height-default elementor-section-height-default"
                        data-id="2090be3" data-element_type="section" id="portfolio">
                        <div class="elementor-container elementor-column-gap-no">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-77d49c0"
                                data-id="77d49c0" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-ab189bd elementor-widget elementor-widget-drakeportfolio"
                                        data-id="ab189bd" data-element_type="widget"
                                        data-widget_type="drakeportfolio.default">
                                        <div class="elementor-widget-container">

                                            <section class="portfolio-area">
                                                <div class="custom-container">
                                                    <div class="portfolio-content content-width">
                                                        <div class="section-header">
                                                            <h4 class="subtitle scroll-animation"
                                                                data-animation="fade_from_bottom">
                                                                <i class="las la-grip-vertical"></i> portfolio </h4>
                                                            <h2 class="scroll-animation"
                                                                data-animation="fade_from_bottom">Featured
                                                                <span>Projects</span></h2>
                                                        </div>

                                                        <div class="row portfolio-items">

                                                            <div class="col-md-12 scroll-animation"
                                                                data-animation="fade_from_bottom">
                                                                <div class="portfolio-item portfolio-full">
                                                                    <div class="portfolio-item-inner portfolio-1">
                                                                        <a href="wpriverthemes.com/Tamminga/wp-content/uploads/2023/03/cep3.png"
                                                                            data-lightbox="example-1">
                                                                            <img decoding="async" class="image-1"
                                                                                src="wpriverthemes.com/Tamminga/wp-content/uploads/2023/03/cep3.png"
                                                                                alt="" width="">
                                                                        </a>

                                                                        <ul class="portfolio-categories">
                                                                            <li>
                                                                                <a>Figma</a>
                                                                            </li>
                                                                            <li>
                                                                                <a>Laravel/PHP</a>
                                                                            </li>

                                                                        </ul>
                                                                    </div>
                                                                    <h3><a target="_blank"
                                                                            href="https://citizenengagement.nepad.org/">Citizen
                                                                            Engagement Platform - Online Community
                                                                            Engagement Hub
                                                                        </a></h3>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 scroll-animation"
                                                                data-animation="fade_from_left">
                                                                <div class="portfolio-item portfolio-full">
                                                                    <div class="portfolio-item-inner">
                                                                        <a href="wpriverthemes.com/Tamminga/wp-content/uploads/2023/03/cido.png"
                                                                            data-lightbox="example-1">

                                                                            <img decoding="async" class=""
                                                                                src="wpriverthemes.com/Tamminga/wp-content/uploads/2023/03/cido.png"
                                                                                alt="">
                                                                            <div class="overlay"></div>
                                                                        </a>

                                                                        <ul class="portfolio-categories">
                                                                            <li>
                                                                                <a>WordPress</a>
                                                                            </li>
                                                                            <li>
                                                                                <a>Larevel/PHP</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <h3><a target="_blank"
                                                                            href="https://cidosouthsudan.org/">CIDO-
                                                                            Online Community Engagement Hub</a></h3>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 scroll-animation"
                                                                data-animation="fade_from_right">
                                                                <div class="portfolio-item portfolio-full">
                                                                    <div class="portfolio-item-inner">
                                                                        <a href="wpriverthemes.com/Tamminga/wp-content/uploads/2023/03/komson.png"
                                                                            data-lightbox="example-1">

                                                                            <div class="overlay"></div>
                                                                            <img decoding="async"
                                                                                src="wpriverthemes.com/Tamminga/wp-content/uploads/2023/03/komson.png"
                                                                                alt="">
                                                                        </a>

                                                                        <ul class="portfolio-categories">
                                                                            <!-- <li>
                                                                                <a>WordPress</a>
                                                                            </li> -->
                                                                            <li>
                                                                                <a>Larevel/PHP</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <h3><a target="_blank"
                                                                            href="https://komson.howardkoskey.com/">Komson
                                                                            - Payment app for Komson media</a>
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                            <!-- <div class="col-md-12 scroll-animation"
                                                                data-animation="fade_from_bottom">
                                                                <div class="portfolio-item portfolio-full">
                                                                    <div class="portfolio-item-inner">
                                                                        <a href="wpriverthemes.com/Tamminga/wp-content/uploads/2023/03/portfolio4.jpg"
                                                                            data-lightbox="example-1">
                                                                            <div class="overlay"></div>
                                                                                <img decoding="async"
                                                                                    src="wpriverthemes.com/Tamminga/wp-content/uploads/2023/03/portfolio4.jpg"
                                                                                    alt="">
                                                                              
                                                                        </a>

                                                                        <ul class="portfolio-categories">
                                                                            <li>
                                                                                <a>Figma</a>
                                                                            </li>
                                                                            <li>
                                                                                <a>React</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <h3><a target="_blank" href="#">Hinterland - Real
                                                                            Estate Site Redesign</a></h3>
                                                                </div>
                                                            </div> -->
                                                            <div class="portfolio-item portfolio-full">
                                                                <div class="portfolio-item-inner">
                                                                    <a href="wpriverthemes.com/Tamminga/wp-content/uploads/2023/03/promptai.png"
                                                                        data-lightbox="example-1">
                                                                        <div class="overlay"></div>
                                                                        <img decoding="async"
                                                                            src="wpriverthemes.com/Tamminga/wp-content/uploads/2023/03/promptai.png"
                                                                            alt="">
                                                                        <!-- </div> -->
                                                                    </a>

                                                                    <ul class="portfolio-categories">
                                                                        <li>
                                                                            <a>Next</a>
                                                                        </li>
                                                                        <li>
                                                                            <a>Node</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <h3><a target="_blank" href="#">PromptAI</a></h3>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </section>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-449627b elementor-section-full_width page-section scroll-to-page elementor-section-height-default elementor-section-height-default"
                        data-id="449627b" data-element_type="section" id="testimonial">
                        <div class="elementor-container elementor-column-gap-no">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-78a9b04"
                                data-id="78a9b04" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-09ec53b elementor-widget elementor-widget-draketestimonial"
                                        data-id="09ec53b" data-element_type="widget"
                                        data-widget_type="draketestimonial.default">
                                        <div class="elementor-widget-container">

                                            <!-- <section class="testimonial-area">
                                                <div class="custom-container">
                                                    <div class="testimonial-content content-width">
                                                        <div class="section-header">
                                                            <h4 class="subtitle scroll-animation"
                                                                data-animation="fade_from_bottom">
                                                                <i class="lar la-comment"></i> Clients </h4>
                                                            <h2 class="scroll-animation"
                                                                data-animation="fade_from_bottom">Trusted 
                                                                <span> Clients</span></h2>
                                                        </div> -->

                                            <!-- <div class="testimonial-slider-wrap scroll-animation"
                                                            data-animation="fade_from_bottom">
                                                            <div class="owl-carousel testimonial-slider owl-theme">
                                                                <div class="testimonial-item">
                                                                    <div class="testimonial-item-inner">
                                                                        <div class="author d-flex align-items-center">
                                                                            <img decoding="async"
                                                                                src="wpriverthemes.com/Tamminga/wp-content/uploads/2023/03/testimonial-1.jpg"
                                                                                alt="">
                                                                            <div class="right">
                                                                                <h3>Paublo Dybala</h3>
                                                                                <p class="designation">CEO of <span>IBM
                                                                                        Global</span></p>
                                                                            </div>
                                                                        </div>
                                                                        <p>“Drake - A Developer with the creativity,
                                                                            professional and
                                                                            master of code. Much more than what i'm
                                                                            expect.
                                                                            High quality product & flexiable price.
                                                                            Recommended!.”</p>

                                                                        <a href="#" class="project-btn">Project</a>
                                                                    </div>
                                                                </div>
                                                                <div class="testimonial-item">
                                                                    <div class="testimonial-item-inner">
                                                                        <div class="author d-flex align-items-center">
                                                                            <img decoding="async"
                                                                                src="wpriverthemes.com/Tamminga/wp-content/uploads/2023/03/testimonial-2.jpg"
                                                                                alt="">
                                                                            <div class="right">
                                                                                <h3>Christina Morillo</h3>
                                                                                <p class="designation">Product
                                                                                    Management of <span>Invision App
                                                                                        Inc</span></p>
                                                                            </div>
                                                                        </div>
                                                                        <p>“Drake was a real pleasure to work with and
                                                                            we look
                                                                            forward to working with him again. He's
                                                                            definitely the kind of
                                                                            designer that you can trust with any project
                                                                            from A-Z.”</p>

                                                                        <a href="#" class="project-btn">Project</a>
                                                                    </div>
                                                                </div>
                                                                <div class="testimonial-item">
                                                                    <div class="testimonial-item-inner">
                                                                        <div class="author d-flex align-items-center">
                                                                            <img decoding="async"
                                                                                src="wpriverthemes.com/Tamminga/wp-content/uploads/2023/03/testimonial-3.jpg"
                                                                                alt="">
                                                                            <div class="right">
                                                                                <h3>Phil Foden</h3>
                                                                                <p class="designation">Director of
                                                                                    <span>Envato LLC</span></p>
                                                                            </div>
                                                                        </div>
                                                                        <p>“Extremely profressional and fast service!.
                                                                            Drake is a master
                                                                            of code and he also very creative. We done 3
                                                                            projects with
                                                                            him and certain will continue.”</p>

                                                                        <a href="#" class="project-btn">Project</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="testimonial-footer-nav">
                                                                <div class="testimonial-nav d-flex align-items-center">
                                                                    <button class="prev"><i
                                                                            class="las la-angle-left"></i></button>
                                                                    <div id="testimonial-slide-count"></div>
                                                                    <button class="next"><i
                                                                            class="las la-angle-right"></i></button>
                                                                </div>
                                                            </div>
                                                        </div> -->

                                            <!-- <div class="clients-logos">
                                                            
                                                            <div class="row align-items-center">
                                                                <div class="col-md-3 scroll-animation"
                                                                    data-animation="fade_from_left">
                                                                    <img decoding="async"
                                                                        src="wpriverthemes.com/Tamminga/wp-content/uploads/2023/03/client-1.png"
                                                                        alt="">
                                                                </div>
                                                                <div class="col-md-3 scroll-animation"
                                                                    data-animation="fade_from_bottom">
                                                                    <img decoding="async"
                                                                        src="wpriverthemes.com/Tamminga/wp-content/uploads/2023/03/client-2.png"
                                                                        alt="">
                                                                </div>
                                                                <div class="col-md-3 scroll-animation"
                                                                    data-animation="fade_from_top">
                                                                    <img decoding="async"
                                                                        src="wpriverthemes.com/Tamminga/wp-content/uploads/2023/03/client-3.png"
                                                                        alt="">
                                                                </div>
                                                                <div class="col-md-3 scroll-animation"
                                                                    data-animation="fade_from_right">
                                                                    <img decoding="async"
                                                                        src="wpriverthemes.com/Tamminga/wp-content/uploads/2023/03/client-4.png"
                                                                        alt="">
                                                                </div>
                                                                <div class="col-md-3 scroll-animation"
                                                                    data-animation="fade_from_left">
                                                                    <img decoding="async"
                                                                        src="wpriverthemes.com/Tamminga/wp-content/uploads/2023/03/client-5.png"
                                                                        alt="">
                                                                </div>
                                                                <div class="col-md-3 scroll-animation"
                                                                    data-animation="fade_from_bottom">
                                                                    <img decoding="async"
                                                                        src="wpriverthemes.com/Tamminga/wp-content/uploads/2023/03/client-6.png"
                                                                        alt="">
                                                                </div>
                                                                <div class="col-md-3 scroll-animation"
                                                                    data-animation="fade_from_top">
                                                                    <img decoding="async"
                                                                        src="wpriverthemes.com/Tamminga/wp-content/uploads/2023/03/client-7.png"
                                                                        alt="">
                                                                </div>
                                                                <div class="col-md-3 scroll-animation"
                                                                    data-animation="fade_from_right">
                                                                    <img decoding="async"
                                                                        src="wpriverthemes.com/Tamminga/wp-content/uploads/2023/03/client-8.png"
                                                                        alt="">
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </section> -->

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-74f9fe7 elementor-section-full_width page-section scroll-to-page elementor-section-height-default elementor-section-height-default"
                        data-id="74f9fe7" data-element_type="section" id="pricing">
                        <div class="elementor-container elementor-column-gap-no">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-b698af7"
                                data-id="b698af7" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-687345c elementor-widget elementor-widget-drakepricing"
                                        data-id="687345c" data-element_type="widget"
                                        data-widget_type="drakepricing.default">
                                        <div class="elementor-widget-container">

                                            <section class="pricing-area">
                                                <div class="custom-container">
                                                    <div class="pricing-content content-width">
                                                        <div class="section-header">
                                                            <h4 class="subtitle scroll-animation"
                                                                data-animation="fade_from_bottom">
                                                                <i class="las la-dollar-sign"></i> pricing </h4>
                                                            <h2 class="scroll-animation"
                                                                data-animation="fade_from_bottom">My
                                                                <span>Pricing</span></h2>
                                                        </div>

                                                        <div class="pricing-table-items">
                                                            <div class="row">
                                                                <div class="col-md-6 scroll-animation"
                                                                    data-animation="fade_from_left">
                                                                    <div class="pricing-table">
                                                                        <div class="pricing-table-header">
                                                                            <div
                                                                                class="top d-flex justify-content-between align-items-start">
                                                                                <h4>basic</h4>
                                                                                <p class="text-right">Have design ready
                                                                                    to build?<br>or small budget</p>
                                                                            </div>
                                                                            <h2>$49 <span>/ hours</span></h2>
                                                                        </div>
                                                                        <ul class="feature-lists">
                                                                            <li>Need your wireframe</li>

                                                                            <li>Design with Figma, Framer</li>

                                                                            <li>Implement with Webflow, React,
                                                                                WordPress, Laravel/PHP</li>

                                                                            <li>Remote/Online</li>

                                                                            <li>Work in business days, no weekend.</li>

                                                                            <li>Support 6 months</li>
                                                                        </ul>
                                                                        <a target="_blank" href="#contact"
                                                                            class="theme-btn">pick this package</a>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 scroll-animation"
                                                                    data-animation="fade_from_right">
                                                                    <div class="pricing-table">
                                                                        <div class="pricing-table-header">
                                                                            <div
                                                                                class="top d-flex justify-content-between align-items-start">
                                                                                <h4>premium</h4>
                                                                                <p class="text-right">Not have any
                                                                                    design?<br> Leave its for me</p>
                                                                            </div>
                                                                            <h2>$99 <span>/ hours</span></h2>
                                                                        </div>
                                                                        <ul class="feature-lists">
                                                                            <li>Don't need wireframe or anything</li>

                                                                            <li>Design with Figma, Framer from scratch
                                                                            </li>
                                                                            <li>Implement with Webflow, React,
                                                                                WordPress, Laravel/PHP</li>
                                                                            <li>Remote/Online</li>

                                                                            <li>Work with both weekend</li>

                                                                            <li>Support 12 months</li>

                                                                            <li>Your project alway be priority</li>
                                                                            <li>Customer care gifts</li>
                                                                        </ul>
                                                                        <a target="_blank" href="#contact"
                                                                            class="theme-btn">pick this package</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <p class="info scroll-animation"
                                                                data-animation="fade_from_bottom">
                                                                Don't find any package match with your plan!<br> Want to
                                                                setup a new tailor-made package for only you?. <a
                                                                    target="_blank" href="#contact">Contact Us</a>
                                                            </p>
                                                        </div>

                                                    </div>
                                                </div>
                                            </section>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section> -->
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-ad41ad6 elementor-section-full_width page-section scroll-to-page elementor-section-height-default elementor-section-height-default"
                        data-id="ad41ad6" data-element_type="section" id="contact">
                        <div class="elementor-container elementor-column-gap-no">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a93c64b"
                                data-id="a93c64b" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-60dfddb elementor-widget elementor-widget-drakecontact"
                                        data-id="60dfddb" data-element_type="widget"
                                        data-widget_type="drakecontact.default">
                                        <div class="elementor-widget-container">

                                            <section class="contact-area">
                                                <div class="custom-container">
                                                    <div class="contact-content content-width">
                                                        <div class="section-header">
                                                            <h4 class="subtitle scroll-animation"
                                                                data-animation="fade_from_bottom">
                                                                <i class="las la-envelope"></i> contact </h4>
                                                            <h2 class="scroll-animation"
                                                                data-animation="fade_from_bottom">Let's Work
                                                                <span>Together!</span></h2>
                                                        </div>
                                                        <h3 class="scroll-animation" data-animation="fade_from_bottom">
                                                            tammingagivondo@gmail.com</h3>
                                                        <p id="required-msg">* Marked fields are required to fill.</p>


                                                        <div class="wpcf7 no-js" id="wpcf7-f172-p199-o1" lang="en-US"
                                                            dir="ltr">
                                                            <div class="screen-reader-response">
                                                                <p role="status" aria-live="polite" aria-atomic="true">
                                                                </p>
                                                                <ul></ul>
                                                            </div>
                                                            <form action="send_email.php" method="POST"
                                                                class="wpcf7-form init" aria-label="Contact form"
                                                                enctype="multipart/form-data" novalidate="novalidate"
                                                                data-status="init" id="contactForm">
                                                                <!-- <div style="display: none;">
                                                                    <input type="hidden" name="_wpcf7" value="172" />
                                                                    <input type="hidden" name="_wpcf7_version" value="5.9.3" />
                                                                    <input type="hidden" name="_wpcf7_locale" value="en_US" />
                                                                    <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f172-p199-o1" />
                                                                    <input type="hidden" name="_wpcf7_container_post" value="199" />
                                                                    <input type="hidden" name="_wpcf7_posted_data_hash" value="" />
                                                                </div> -->
                                                                <div class="alert alert-success messenger-box-contact__msg"
                                                                    style="display: none" role="alert">
                                                                    <p>Your message was sent successfully.</p>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="input-group">
                                                                            <p><label for="full-name">Full Name
                                                                                    <sup>*</sup></label><span
                                                                                    class="wpcf7-form-control-wrap"
                                                                                    data-name="full-name"><input
                                                                                        size="40" class=""
                                                                                        id="full-name"
                                                                                        aria-required="true"
                                                                                        aria-invalid="false"
                                                                                        placeholder="Your Full Name"
                                                                                        value="" type="text"
                                                                                        name="full-name"
                                                                                        required /></span></p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="input-group">
                                                                            <p><label for="email">Email
                                                                                    <sup>*</sup></label><span
                                                                                    class="wpcf7-form-control-wrap"
                                                                                    data-name="email"><input size="40"
                                                                                        class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email input-group"
                                                                                        aria-required="true"
                                                                                        aria-invalid="false"
                                                                                        placeholder="Your email address"
                                                                                        value="" type="email"
                                                                                        name="email" required /></span>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="input-group">
                                                                            <p><label for="phone-number">Phone
                                                                                    <span>(optional)</span></label><span
                                                                                    class="wpcf7-form-control-wrap"
                                                                                    data-name="phone"><input
                                                                                        class="wpcf7-form-control wpcf7-number wpcf7-validates-as-number input-group"
                                                                                        aria-invalid="false"
                                                                                        placeholder="Your phone number"
                                                                                        value="" type="tel"
                                                                                        name="phone" /></span></p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="input-group">
                                                                            <p><label for="message">Message</label><span
                                                                                    class="wpcf7-form-control-wrap"
                                                                                    data-name="message"><textarea
                                                                                        cols="40" rows="2"
                                                                                        class="wpcf7-form-control wpcf7-textarea input-group"
                                                                                        id="message"
                                                                                        aria-invalid="false"
                                                                                        placeholder="Write your message here ..."
                                                                                        name="message"
                                                                                        required></textarea></span></p>
                                                                        </div>
                                                                    </div>
                                                                    <!-- <div class="col-md-12">
                                                                        <div class="input-group upload-attachment">
                                                                            <div>
                                                                                <p><label for="upload-attachment"><i class="las la-cloud-upload-alt"></i> Add an attachment<span class="wpcf7-form-control-wrap" data-name="file"><input size="40" class="wpcf7-form-control wpcf7-file input-group upload-attachment" id="upload-attachment" accept="audio/*,video/*,image/*" aria-invalid="false" type="file" name="file" /></span></label></p>
                                                                            </div>  
                                                                        </div>
                                                                    </div> -->
                                                                    <div class="col-md-12">
                                                                        <div class="input-group submit-btn-wrap">
                                                                            <p><button class="theme-btn" type="submit"
                                                                                    name="submit" id="submit">
                                                                                    <span id="loader"
                                                                                        style="display: none;">Loading...</span>
                                                                                    <span id="send_message"> Send
                                                                                        Message</span>

                                                                                </button></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="wpcf7-response-output" aria-hidden="true">
                                                                </div>
                                                            </form>



                                                        </div>

                                                    </div>
                                                </div>
                                            </section>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>


            </div>
        </div>
    </main>

    <!-- <script src="wpriverthemes.com/Tamminga/wp-content/plugins/contact-form-7/includes/swv/js/index7404.js?ver=5.9.3" id="swv-js"></script>
    <script id="contact-form-7-js-extra">
        var wpcf7 = {
            "api": {
                "root": "https:\/\/wpriverthemes.com\/drake\/wp-json\/",
                "namespace": "contact-form-7\/v1"
            }
        };
    </script> -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="wpriverthemes.com/Tamminga/wp-content/plugins/contact-form-7/includes/js/index7404.js?ver=5.9.3"
        id="contact-form-7-js">
    </script>
    <script src="sendmail.js"></script>
    <script src="wpriverthemes.com/Tamminga/wp-content/themes/drake/assets/js/jquery5352.js?ver=6.4.4"
        id="drake-jquery-js"></script>
    <script src="wpriverthemes.com/Tamminga/wp-content/themes/drake/assets/js/bootstrap.bundle.min5352.js?ver=6.4.4"
        id="bootstrap-bundle-js">
    </script>
    <script src="wpriverthemes.com/Tamminga/wp-content/themes/drake/assets/js/owl.carousel5352.js?ver=6.4.4"
        id="owl-carousel-js"></script>
    <script src="wpriverthemes.com/Tamminga/wp-content/themes/drake/assets/js/gsap.min5352.js?ver=6.4.4" id="gsap-js">
    </script>
    <script src="wpriverthemes.com/Tamminga/wp-content/themes/drake/assets/js/ScrollTrigger.min5352.js?ver=6.4.4"
        id="ScrollTrigger-js">
    </script>
    <script src="wpriverthemes.com/Tamminga/wp-content/themes/drake/assets/js/ScrollToPlugin.min5352.js?ver=6.4.4"
        id="ScrollToPlugin-js">
    </script>
    <script src="wpriverthemes.com/Tamminga/wp-content/themes/drake/assets/js/lightbox.min5352.js?ver=6.4.4"
        id="lightbox-js"></script>
    <script src="wpriverthemes.com/Tamminga/wp-content/themes/drake/assets/js/main5352.js?ver=6.4.4" id="drake-main-js">
    </script>
    <script src="wpriverthemes.com/Tamminga/wp-content/themes/drake/assets/js/ajax-form5352.js?ver=6.4.4"
        id="ajax-form-js"></script>
    <script src="wpriverthemes.com/Tamminga/wp-content/themes/drake/assets/js/color5352.js?ver=6.4.4"
        id="drake-color-js"></script>
    <script
        src="wpriverthemes.com/Tamminga/wp-content/plugins/elementor/assets/js/webpack.runtime.min7329.js?ver=3.20.2"
        id="elementor-webpack-runtime-js"></script>
    <script
        src="wpriverthemes.com/Tamminga/wp-content/plugins/elementor/assets/js/frontend-modules.min7329.js?ver=3.20.2"
        id="elementor-frontend-modules-js"></script>
    <script
        src="wpriverthemes.com/Tamminga/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min05da.js?ver=4.0.2"
        id="elementor-waypoints-js"></script>
    <script src="wpriverthemes.com/Tamminga/wp-includes/js/jquery/ui/core.min3f14.js?ver=1.13.2" id="jquery-ui-core-js">
    </script>

    <script id="elementor-frontend-js-before">
        var elementorFrontendConfig = {
            "environmentMode": {
                "edit": false,
                "wpPreview": false,
                "isScriptDebug": false
            },
            "i18n": {
                "shareOnFacebook": "Share on Facebook",
                "shareOnTwitter": "Share on Twitter",
                "pinIt": "Pin it",
                "download": "Download",
                "downloadImage": "Download image",
                "fullscreen": "Fullscreen",
                "zoom": "Zoom",
                "share": "Share",
                "playVideo": "Play Video",
                "previous": "Previous",
                "next": "Next",
                "close": "Close",
                "a11yCarouselWrapperAriaLabel": "Carousel | Horizontal scrolling: Arrow Left & Right",
                "a11yCarouselPrevSlideMessage": "Previous slide",
                "a11yCarouselNextSlideMessage": "Next slide",
                "a11yCarouselFirstSlideMessage": "This is the first slide",
                "a11yCarouselLastSlideMessage": "This is the last slide",
                "a11yCarouselPaginationBulletMessage": "Go to slide"
            },
            "is_rtl": false,
            "breakpoints": {
                "xs": 0,
                "sm": 480,
                "md": 768,
                "lg": 1025,
                "xl": 1440,
                "xxl": 1600
            },
            "responsive": {
                "breakpoints": {
                    "mobile": {
                        "label": "Mobile Portrait",
                        "value": 767,
                        "default_value": 767,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "mobile_extra": {
                        "label": "Mobile Landscape",
                        "value": 880,
                        "default_value": 880,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "tablet": {
                        "label": "Tablet Portrait",
                        "value": 1024,
                        "default_value": 1024,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "tablet_extra": {
                        "label": "Tablet Landscape",
                        "value": 1200,
                        "default_value": 1200,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "laptop": {
                        "label": "Laptop",
                        "value": 1366,
                        "default_value": 1366,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "widescreen": {
                        "label": "Widescreen",
                        "value": 2400,
                        "default_value": 2400,
                        "direction": "min",
                        "is_enabled": false
                    }
                }
            },
            "version": "3.20.2",
            "is_static": false,
            "experimentalFeatures": {
                "e_optimized_assets_loading": true,
                "e_optimized_css_loading": true,
                "additional_custom_breakpoints": true,
                "e_swiper_latest": true,
                "block_editor_assets_optimize": true,
                "ai-layout": true,
                "landing-pages": true,
                "e_image_loading_optimization": true
            },
            "urls": {
                "assets": "https:\/\/wpriverthemes.com\/drake\/wp-content\/plugins\/elementor\/assets\/"
            },
            "swiperClass": "swiper",
            "settings": {
                "page": [],
                "editorPreferences": []
            },
            "kit": {
                "active_breakpoints": ["viewport_mobile", "viewport_tablet"],
                "global_image_lightbox": "yes",
                "lightbox_enable_counter": "yes",
                "lightbox_enable_fullscreen": "yes",
                "lightbox_enable_zoom": "yes",
                "lightbox_enable_share": "yes",
                "lightbox_title_src": "title",
                "lightbox_description_src": "description"
            },
            "post": {
                "id": 199,
                "title": "Earth%20Lines%20Sphere%20%E2%80%93%20Drake",
                "excerpt": "",
                "featuredImage": false
            }
        };
    </script>

    <script src="wpriverthemes.com/Tamminga/wp-content/plugins/elementor/assets/js/frontend.min7329.js?ver=3.20.2"
        id="elementor-frontend-js">
    </script>



</body>



</html>