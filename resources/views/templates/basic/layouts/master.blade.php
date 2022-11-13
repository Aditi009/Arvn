<!DOCTYPE html>
<html lang="en-US">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="pingback" href="https://templatekit.jegtheme.com/textilery/xmlrpc.php">
	<title> {{ $general->sitename}} - {{__(@$page_title)}} </title>
	<meta name="robots" content="max-image-preview:large">
    @include('partials.seo')
	<link rel="dns-prefetch" href="//s.w.org">
	<link rel="alternate')}}" type="application/rss+xml" title="Textilery &raquo; Feed"
		href="https://templatekit.jegtheme.com/textilery/feed/">
	<link rel="alternate')}}" type="application/rss+xml" title="Textilery &raquo; Comments Feed"
		href="https://templatekit.jegtheme.com/textilery/comments/feed/">
    @stack('css')
	<script type="text/javascript">
		window._wpemojiSettings = {
			"baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/13.1.0\/72x72\/",
			"ext": ".png",
			"svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/13.1.0\/svg\/",
			"svgExt": ".svg",
			"source": {
				"concatemoji": "https:\/\/templatekit.jegtheme.com\/textilery\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.9.5"
			}
		};
		/*! This file is auto-generated */
		! function (e, a, t) {
			var n, r, o, i = a.createElement("canvas"),
				p = i.getContext && i.getContext("2d");

			function s(e, t) {
				var a = String.fromCharCode;
				p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, e), 0, 0);
				e = i.toDataURL();
				return p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, t), 0, 0), e === i.toDataURL()
			}

			function c(e) {
				var t = a.createElement("script");
				t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t)
			}
			for (o = Array("flag", "emoji"), t.supports = {
					everything: !0,
					everythingExceptFlag: !0
				}, r = 0; r < o.length; r++) t.supports[o[r]] = function (e) {
				if (!p || !p.fillText) return !1;
				switch (p.textBaseline = "top", p.font = "600 32px Arial", e) {
					case "flag":
						return s([127987, 65039, 8205, 9895, 65039], [127987, 65039, 8203, 9895, 65039]) ? !1 : !s([55356,
							56826, 55356, 56819
						], [55356, 56826, 8203, 55356, 56819]) && !s([55356, 57332, 56128, 56423, 56128, 56418, 56128,
							56421, 56128, 56430, 56128, 56423, 56128, 56447
						], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128,
							56430, 8203, 56128, 56423, 8203, 56128, 56447
						]);
					case "emoji":
						return !s([10084, 65039, 8205, 55357, 56613], [10084, 65039, 8203, 55357, 56613])
				}
				return !1
			}(o[r]), t.supports.everything = t.supports.everything && t.supports[o[r]], "flag" !== o[r] && (t.supports
				.everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[o[r]]);
			t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t
				.readyCallback = function () {
					t.DOMReady = !0
				}, t.supports.everything || (n = function () {
						t.readyCallback()
					}, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !
					1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function () {
						"complete" === a.readyState && t.readyCallback()
					})), (n = t.source || {}).concatemoji ? c(n.concatemoji) : n.wpemoji && n.twemoji && (c(n.twemoji), c(n
						.wpemoji)))
		}(window, document, window._wpemojiSettings);
	</script>
	<style >
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
	<link rel="stylesheet" id="jkit-elements-main-css" href="{{asset('textilary/css/main.css')}}"  media="all">
	<link rel="stylesheet" id="wp-block-library-css" href="{{asset('textilary/css/style.min.css')}}"  media="all">
	<style id="global-styles-inline-css')}}" >
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
			--wp--preset--duotone--dark-grayscale: asset('textilery.html#wp-duotone-dark-grayscale');
			--wp--preset--duotone--grayscale: asset('textilery.html#wp-duotone-grayscale');
			--wp--preset--duotone--purple-yellow: asset('textilery.html#wp-duotone-purple-yellow');
			--wp--preset--duotone--blue-red: asset('textilery.html#wp-duotone-blue-red');
			--wp--preset--duotone--midnight: asset('textilery.html#wp-duotone-midnight');
			--wp--preset--duotone--magenta-yellow: asset('textilery.html#wp-duotone-magenta-yellow');
			--wp--preset--duotone--purple-green: asset('textilery.html#wp-duotone-purple-green');
			--wp--preset--duotone--blue-orange: asset('textilery.html#wp-duotone-blue-orange');
			--wp--preset--font-size--small: 13px;
			--wp--preset--font-size--medium: 20px;
			--wp--preset--font-size--large: 36px;
			--wp--preset--font-size--x-large: 42px;
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
	</style>

<link rel="stylesheet" href="{{asset($activeTemplateTrue . 'frontend/css/bootstrap.min.css')}}">

<link rel="stylesheet" href="{{asset($activeTemplateTrue . 'frontend/css/main.css')}}">
    <link rel="stylesheet" href="{{asset($activeTemplateTrue . 'frontend/css/custom.css')}}">

	<link rel="stylesheet" id="template-kit-export-css" href="{{asset('textilary/css/template-kit-export-public.min.css')}}" 
		media="all">
	<link rel="stylesheet" id="hfe-style-css" href="{{asset('textilary/css/header-footer-elementor.css')}}"  media="all">
	<link rel="stylesheet" id="elementor-icons-css" href="{{asset('textilary/css/elementor-icons.min.css')}}"  media="all">
	<link rel="stylesheet" id="elementor-frontend-css" href="{{asset('textilary/css/frontend.min.css')}}"  media="all">
	<link rel="stylesheet" id="elementor-post-4-css" href="{{asset('textilary/css/post-4.css')}}"  media="all">
	<link rel="stylesheet" id="elementor-global-css" href="{{asset('textilary/css/global.css')}}"  media="all">
	<link rel="stylesheet" id="elementor-post-17-css" href="{{asset('textilary/css/post-17.css')}}"  media="all">
	<link rel="stylesheet" id="font-awesome-5-all-css" href="{{asset('textilary/css/all.min.css')}}"  media="all">
    <link rel="stylesheet" id="font-awesome-5-all-css" href="{{asset('textilary/css/custom.css')}}"  media="all">
	<link rel="stylesheet" id="font-awesome-4-shim-css" href="{{asset('textilary/css/v4-shims.min.css')}}"  media="all">
	<link rel="stylesheet" id="hfe-widgets-style-css" href="{{asset('textilary/css/frontend.css')}}"  media="all">
	<link rel="stylesheet" id="elementor-post-327-css" href="{{asset('textilary/css/post-327.css')}}"  media="all">
	<link rel="stylesheet" id="elementor-post-328-css" href="{{asset('textilary/css/post-328.css')}}"  media="all">
	<link rel="stylesheet" id="hello-elementor-css" href="{{asset('textilary/css/style.min_1.css')}}"  media="all">
	<link rel="stylesheet" id="hello-elementor-theme-style-css" href="{{asset('textilary/css/theme.min.css')}}"  media="all">
	<link rel="stylesheet" id="google-fonts-1-css"
		href="https://fonts.googleapis.com/css?family=Lato%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CHeebo%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=auto&amp;ver=5.9.5"
		 media="all">
	<link rel="stylesheet" id="elementor-icons-jkiticon-css" href="{{asset('textilary/css/jkiticon.css')}}"  media="all">
	<link rel="stylesheet" id="elementor-icons-shared-0-css" href="{{asset('textilary/css/fontawesome.min.css')}}"  media="all">
	<link rel="stylesheet" id="elementor-icons-fa-solid-css" href="{{asset('textilary/css/solid.min.css')}}"  media="all">
	<link rel="stylesheet" id="elementor-icons-fa-brands-css" href="{{asset('textilary/css/brands.min.css')}}"  media="all">
	<link rel="stylesheet" id="elementor-icons-fa-regular-css" href="{{asset('textilary/css/regular.min.css')}}"  media="all">
	<script type="text/javascript" src="{{asset('textilary/js/jquery.min.js')}}" id="jquery-core-js"></script>
	<script type="text/javascript" src="{{asset('textilary/js/jquery-migrate.min.js')}}" id="jquery-migrate-js"></script>
	<script type="text/javascript" src="{{asset('textilary/js/template-kit-export-public.min.js')}}" id="template-kit-export-js"></script>
	<script type="text/javascript" src="{{asset('textilary/js/v4-shims.min.js')}}" id="font-awesome-4-shim-js"></script>
	<link rel="https://api.w.org/" href="https://templatekit.jegtheme.com/textilery/wp-json/">
	<link rel="alternate')}}" type="application/json"
		href="https://templatekit.jegtheme.com/textilery/wp-json/wp/v2/pages/17">
	<link rel="EditURI')}}" type="application/rsd+xml" title="RSD"
		href="https://templatekit.jegtheme.com/textilery/xmlrpc.php?rsd">
	<link rel="wlwmanifest')}}" type="application/wlwmanifest+xml"
		href="https://templatekit.jegtheme.com/textilery/wp-includes/wlwmanifest.xml">
	<meta name="generator" content="WordPress 5.9.5">
	<link rel="canonical" href="https://templatekit.jegtheme.com/textilery/">
	<link rel="shortlink" href="https://templatekit.jegtheme.com/textilery/">
	<link rel="alternate')}}" type="application/json+oembed"
		href="https://templatekit.jegtheme.com/textilery/wp-json/oembed/1.0/embed?url=https%3A%2F%2Ftemplatekit.jegtheme.com%2Ftextilery%2F">
	<link rel="alternate')}}" type="text/xml+oembed"
		href="https://templatekit.jegtheme.com/textilery/wp-json/oembed/1.0/embed?url=https%3A%2F%2Ftemplatekit.jegtheme.com%2Ftextilery%2F&#038;format=xml">
	<style id="jeg_dynamic_css')}}"  data-type="jeg_custom-css"></style>
</head>

<body
	class="home page-template page-template-elementor_header_footer page page-id-17 ehf-header ehf-footer ehf-template-hello-elementor ehf-stylesheet-hello-elementor jkit-color-scheme elementor-default elementor-template-full-width elementor-kit-4 elementor-page elementor-page-17">
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
		style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
		<defs>
			<filter id="wp-duotone-dark-grayscale">
				<fecolormatrix color-interpolation-filters="sRGB')}}" type="matrix"
					values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
				<fecomponenttransfer color-interpolation-filters="sRGB">
					<fefuncr type="table" tableValues="0 0.49803921568627" />
					<fefuncg type="table" tableValues="0 0.49803921568627" />
					<fefuncb type="table" tableValues="0 0.49803921568627" />
					<fefunca type="table" tableValues="1 1" />
				</fecomponenttransfer>
				<fecomposite in2="SourceGraphic" operator="in" />
			</filter>
		</defs>
	</svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
		style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
		<defs>
			<filter id="wp-duotone-grayscale">
				<fecolormatrix color-interpolation-filters="sRGB')}}" type="matrix"
					values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
				<fecomponenttransfer color-interpolation-filters="sRGB">
					<fefuncr type="table" tableValues="0 1" />
					<fefuncg type="table" tableValues="0 1" />
					<fefuncb type="table" tableValues="0 1" />
					<fefunca type="table" tableValues="1 1" />
				</fecomponenttransfer>
				<fecomposite in2="SourceGraphic" operator="in" />
			</filter>
		</defs>
	</svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
		style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
		<defs>
			<filter id="wp-duotone-purple-yellow">
				<fecolormatrix color-interpolation-filters="sRGB')}}" type="matrix"
					values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
				<fecomponenttransfer color-interpolation-filters="sRGB">
					<fefuncr type="table" tableValues="0.54901960784314 0.98823529411765" />
					<fefuncg type="table" tableValues="0 1" />
					<fefuncb type="table" tableValues="0.71764705882353 0.25490196078431" />
					<fefunca type="table" tableValues="1 1" />
				</fecomponenttransfer>
				<fecomposite in2="SourceGraphic" operator="in" />
			</filter>
		</defs>
	</svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
		style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
		<defs>
			<filter id="wp-duotone-blue-red">
				<fecolormatrix color-interpolation-filters="sRGB')}}" type="matrix"
					values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
				<fecomponenttransfer color-interpolation-filters="sRGB">
					<fefuncr type="table" tableValues="0 1" />
					<fefuncg type="table" tableValues="0 0.27843137254902" />
					<fefuncb type="table" tableValues="0.5921568627451 0.27843137254902" />
					<fefunca type="table" tableValues="1 1" />
				</fecomponenttransfer>
				<fecomposite in2="SourceGraphic" operator="in" />
			</filter>
		</defs>
	</svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
		style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
		<defs>
			<filter id="wp-duotone-midnight">
				<fecolormatrix color-interpolation-filters="sRGB')}}" type="matrix"
					values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
				<fecomponenttransfer color-interpolation-filters="sRGB">
					<fefuncr type="table" tableValues="0 0" />
					<fefuncg type="table" tableValues="0 0.64705882352941" />
					<fefuncb type="table" tableValues="0 1" />
					<fefunca type="table" tableValues="1 1" />
				</fecomponenttransfer>
				<fecomposite in2="SourceGraphic" operator="in" />
			</filter>
		</defs>
	</svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
		style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
		<defs>
			<filter id="wp-duotone-magenta-yellow">
				<fecolormatrix color-interpolation-filters="sRGB')}}" type="matrix"
					values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
				<fecomponenttransfer color-interpolation-filters="sRGB">
					<fefuncr type="table" tableValues="0.78039215686275 1" />
					<fefuncg type="table" tableValues="0 0.94901960784314" />
					<fefuncb type="table" tableValues="0.35294117647059 0.47058823529412" />
					<fefunca type="table" tableValues="1 1" />
				</fecomponenttransfer>
				<fecomposite in2="SourceGraphic" operator="in" />
			</filter>
		</defs>
	</svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
		style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
		<defs>
			<filter id="wp-duotone-purple-green">
				<fecolormatrix color-interpolation-filters="sRGB')}}" type="matrix"
					values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
				<fecomponenttransfer color-interpolation-filters="sRGB">
					<fefuncr type="table" tableValues="0.65098039215686 0.40392156862745" />
					<fefuncg type="table" tableValues="0 1" />
					<fefuncb type="table" tableValues="0.44705882352941 0.4" />
					<fefunca type="table" tableValues="1 1" />
				</fecomponenttransfer>
				<fecomposite in2="SourceGraphic" operator="in" />
			</filter>
		</defs>
	</svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
		style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
		<defs>
			<filter id="wp-duotone-blue-orange">
				<fecolormatrix color-interpolation-filters="sRGB')}}" type="matrix"
					values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
				<fecomponenttransfer color-interpolation-filters="sRGB">
					<fefuncr type="table" tableValues="0.098039215686275 1" />
					<fefuncg type="table" tableValues="0 0.66274509803922" />
					<fefuncb type="table" tableValues="0.84705882352941 0.41960784313725" />
					<fefunca type="table" tableValues="1 1" />
				</fecomponenttransfer>
				<fecomposite in2="SourceGraphic" operator="in" />
			</filter>
		</defs>
	</svg>
	<div id="page" class="hfeed site">

		<header id="masthead" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
			<p class="main-title bhf-hidden" itemprop="headline"><a href="https://templatekit.jegtheme.com/textilery"
					title="Textilery" rel="home">Textilery</a></p>
			<div data-elementor-type="wp-post" data-elementor-id="327" class="elementor elementor-327">
				<section
					class="elementor-section elementor-top-section elementor-element elementor-element-9b58817 elementor-section-content-middle elementor-hidden-tablet elementor-hidden-phone elementor-section-boxed elementor-section-height-default elementor-section-height-default"
					data-id="9b58817" data-element_type="section"
					data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
					<div class="elementor-container elementor-column-gap-default">
						<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-4bd9290"
							data-id="4bd9290" data-element_type="column">
							<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-4810393 elementor-icon-list--layout-inline elementor-align-left elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
									data-id="4810393" data-element_type="widget" data-widget_type="icon-list.default">
									<div class="elementor-widget-container">
										<ul class="elementor-icon-list-items elementor-inline-items">
											<li class="elementor-icon-list-item elementor-inline-item">
												<span class="elementor-icon-list-icon">
													<i aria-hidden="true" class="fas fa-map-marker-alt"></i> </span>
												<span class="elementor-icon-list-text"> Jl. Sunset Road No.815, Kuta,
													Bali 80361</span>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-93058d2"
							data-id="93058d2" data-element_type="column">
							<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-fb8b624 elementor-icon-list--layout-inline elementor-align-left elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
									data-id="fb8b624" data-element_type="widget" data-widget_type="icon-list.default">
									<div class="elementor-widget-container">
										<ul class="elementor-icon-list-items elementor-inline-items">
											<li class="elementor-icon-list-item elementor-inline-item">
												<span class="elementor-icon-list-icon">
													<i aria-hidden="true" class="fas fa-envelope"></i> </span>
												<span class="elementor-icon-list-text"><a
														href="/cdn-cgi/l/email-protection" class="__cf_email__">care@aarbinindia.com</a></span>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						
					</div>
				</section>
				<section
					class="elementor-section elementor-top-section elementor-element elementor-element-c7f8a16 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
					data-id="c7f8a16" data-element_type="section"
					data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
					<div class="elementor-container elementor-column-gap-default">
						<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-3b64f93"
							data-id="3b64f93" data-element_type="column">
							<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-4a64af6 elementor-widget elementor-widget-image"
									data-id="4a64af6" data-element_type="widget" data-widget_type="image.default">
									<div class="elementor-widget-container">
										<img width="722" height="248" src="{{asset('textilary/images/logo.png')}}"
											class="attachment-full size-full" alt loading="lazy"
											srcset="{{asset('textilary/images/logo.png 722w, images/logo-300x103.png 300w')}}"
											sizes="(max-width: 722px) 100vw, 722px"> </div>
								</div>
							</div>
						</div>
						<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-f3858f0"
							data-id="f3858f0" data-element_type="column">
							<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-d1ec4cd elementor-widget elementor-widget-jkit_nav_menu"
									data-id="d1ec4cd" data-element_type="widget"
									data-widget_type="jkit_nav_menu.default">
									<div class="elementor-widget-container">
										<div class="jeg-elementor-kit jkit-nav-menu break-point-tablet submenu-click-title jeg_module_17__635d0b10cb484"
											data-item-indicator="&lt;i aria-hidden=&quot;true&quot; class=&quot;jki jki-chevron-down-light&quot;&gt;&lt;/i&gt;">
											<button class="jkit-hamburger-menu"><i aria-hidden="true"
													class="jki jki-bars-solid"></i></button>
											<div class="jkit-menu-wrapper">
												<div class="jkit-menu-container">
													<ul id="menu-menu"
														class="jkit-menu jkit-menu-direction-flex jkit-submenu-position-top">
														<li id="menu-item-553"
															class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-17 current_page_item menu-item-553">
															<a href="{{route('home')}}"
																aria-current="page">Home</a></li>
														<li id="menu-item-552"
															class="menu-item menu-item-type-post_type menu-item-object-page menu-item-552">
															<a
																href="{{route('about')}}">About
																Us</a></li>
														<li id="menu-item-551"
															class="menu-item menu-item-type-post_type menu-item-object-page menu-item-551">
															<a
																href="{{route('ourservices')}}">Our Products</a>
														</li>
                                                        <li id="menu-item-551"
															class="menu-item menu-item-type-post_type menu-item-object-page menu-item-551">
															<a
																href="{{route('contact')}}">Contact Us</a>
														</li>
														
														@auth
                                                        <li id="menu-item-10"
															class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-10">
															<a href="#">{{auth()->user()->username}}</a>
															<ul class="sub-menu">
																<li id="menu-item-548"
																	class="menu-item menu-item-type-post_type menu-item-object-page menu-item-548">
																	<a
																		href="{{route('user.home')}}">Dashboard</a>
																</li>
                                                                <li id="menu-item-548"
																	class="menu-item menu-item-type-post_type menu-item-object-page menu-item-548">
																	<a
																		href="{{route('user.logout')}}">Logout</a>
																</li>
																</ul>
														</li>
                                                        @else

                                                        <li id="menu-item-10"
															class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-10">
															<a href="#">Account</a>
															<ul class="sub-menu">
																<li id="menu-item-548"
																	class="menu-item menu-item-type-post_type menu-item-object-page menu-item-548">
																	<a
																		href="{{route('user.login')}}">Login</a>
																</li>
                                                                <li id="menu-item-548"
																	class="menu-item menu-item-type-post_type menu-item-object-page menu-item-548">
																	<a
																		href="{{route('user.register')}}">Register</a>
																</li>
																</ul>
														</li>
                                                        @endauth
														
													</ul>
												</div>
												<div class="jkit-nav-identity-panel">
													<div class="jkit-nav-site-title"><a
															href="https://templatekit.jegtheme.com/textilery"
															class="jkit-nav-logo"><img src="{{asset('textilary/images/logo.png')}}"></a></div>
													<button class="jkit-close-menu"><i aria-hidden="true"
															class="fas fa-times"></i></button>
												</div>
											</div>
											<div class="jkit-overlay"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
					</div>
				</section>
			</div>
		</header>

@yield('content')

		<footer itemtype="https://schema.org/WPFooter" itemscope="itemscope" id="colophon" role="contentinfo">
			<div class="footer-width-fixer">
				<div data-elementor-type="wp-post" data-elementor-id="328" class="elementor elementor-328">
					<section
						class="elementor-section elementor-top-section elementor-element elementor-element-f5a4cee elementor-section-boxed elementor-section-height-default elementor-section-height-default"
						data-id="f5a4cee" data-element_type="section"
						data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-background-overlay"></div>
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-572f5a6"
								data-id="572f5a6" data-element_type="column">
								<div class="elementor-widget-wrap elementor-element-populated">
									<section
										class="elementor-section elementor-inner-section elementor-element elementor-element-4b5a99d elementor-section-boxed elementor-section-height-default elementor-section-height-default"
										data-id="4b5a99d" data-element_type="section">
										<div class="elementor-container elementor-column-gap-no">
											<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-4b2814a"
												data-id="4b2814a" data-element_type="column"
												data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
												<div class="elementor-widget-wrap elementor-element-populated">
													<div class="elementor-element elementor-element-af44df5 elementor-widget elementor-widget-image"
														data-id="af44df5" data-element_type="widget"
														data-widget_type="image.default">
														<div class="elementor-widget-container">
															<img width="722" height="248" src="{{asset('textilary/images/logo.png')}}"
																class="attachment-full size-full" alt loading="lazy"
																srcset="{{asset('textilary/images/logo.png 722w')}} ,{{asset('textilary/images/logo.png 300w')}}"
																sizes="(max-width: 722px) 100vw, 722px"> </div>
													</div>
													<div class="elementor-element elementor-element-d7fa526 elementor-widget elementor-widget-text-editor"
														data-id="d7fa526" data-element_type="widget"
														data-widget_type="text-editor.default">
														<div class="elementor-widget-container">
															Lorem ipsum dolor sit amet, consectet adipiscing elit, sed
															do eiusmod </div>
													</div>
													<div class="elementor-element elementor-element-4a91166 elementor-shape-circle e-grid-align-left e-grid-align-tablet-left elementor-grid-0 elementor-widget elementor-widget-social-icons"
														data-id="4a91166" data-element_type="widget"
														data-widget_type="social-icons.default">
														<div class="elementor-widget-container">
															<div class="elementor-social-icons-wrapper elementor-grid">
																<span class="elementor-grid-item">
																	<a class="elementor-icon elementor-social-icon elementor-social-icon-facebook-f elementor-animation-shrink elementor-repeater-item-c0163ab"
																		target="_blank">
																		<span
																			class="elementor-screen-only">Facebook-f</span>
																		<i class="fab fa-facebook-f"></i> </a>
																</span>
																<span class="elementor-grid-item">
																	<a class="elementor-icon elementor-social-icon elementor-social-icon-twitter elementor-animation-shrink elementor-repeater-item-310ab07"
																		target="_blank">
																		<span
																			class="elementor-screen-only">Twitter</span>
																		<i class="fab fa-twitter"></i> </a>
																</span>
																<span class="elementor-grid-item">
																	<a class="elementor-icon elementor-social-icon elementor-social-icon-instagram elementor-animation-shrink elementor-repeater-item-63f86db"
																		target="_blank">
																		<span
																			class="elementor-screen-only">Instagram</span>
																		<i class="fab fa-instagram"></i> </a>
																</span>
																<span class="elementor-grid-item">
																	<a class="elementor-icon elementor-social-icon elementor-social-icon-youtube elementor-animation-shrink elementor-repeater-item-d54d883"
																		target="_blank">
																		<span
																			class="elementor-screen-only">Youtube</span>
																		<i class="fab fa-youtube"></i> </a>
																</span>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-7d914dc"
												data-id="7d914dc" data-element_type="column">
												<div class="elementor-widget-wrap elementor-element-populated">
													<div class="elementor-element elementor-element-8296876 elementor-widget elementor-widget-heading"
														data-id="8296876" data-element_type="widget"
														data-widget_type="heading.default">
														<div class="elementor-widget-container">
															<h4 class="elementor-heading-title elementor-size-default">
																Quick Links</h4>
														</div>
													</div>
													<div class="elementor-element elementor-element-239067b elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
														data-id="239067b" data-element_type="widget"
														data-widget_type="divider.default">
														<div class="elementor-widget-container">
															<div class="elementor-divider">
																<span class="elementor-divider-separator">
																</span>
															</div>
														</div>
													</div>
													<div class="elementor-element elementor-element-312d7f2 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
														data-id="312d7f2" data-element_type="widget"
														data-widget_type="icon-list.default">
														<div class="elementor-widget-container">
															<ul class="elementor-icon-list-items">
																<li class="elementor-icon-list-item">
																	<a href="#">

																		<span class="elementor-icon-list-text">About
																			Us</span>
																	</a>
																</li>
																<li class="elementor-icon-list-item">
																	<a href="#">

																		<span
																			class="elementor-icon-list-text">Services</span>
																	</a>
																</li>
																<li class="elementor-icon-list-item">
																	<a href="#">

																		<span
																			class="elementor-icon-list-text">Projects</span>
																	</a>
																</li>
																<li class="elementor-icon-list-item">
																	<a href="#">

																		<span
																			class="elementor-icon-list-text">Pricing</span>
																	</a>
																</li>
																<li class="elementor-icon-list-item">
																	<a href="#">

																		<span
																			class="elementor-icon-list-text">Contact</span>
																	</a>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
											<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-96a5910"
												data-id="96a5910" data-element_type="column">
												<div class="elementor-widget-wrap elementor-element-populated">
													<div class="elementor-element elementor-element-bcd1723 elementor-widget elementor-widget-heading"
														data-id="bcd1723" data-element_type="widget"
														data-widget_type="heading.default">
														<div class="elementor-widget-container">
															<h4 class="elementor-heading-title elementor-size-default">
																Useful Links</h4>
														</div>
													</div>
													<div class="elementor-element elementor-element-fb17dda elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
														data-id="fb17dda" data-element_type="widget"
														data-widget_type="divider.default">
														<div class="elementor-widget-container">
															<div class="elementor-divider">
																<span class="elementor-divider-separator">
																</span>
															</div>
														</div>
													</div>
													<div class="elementor-element elementor-element-bcc601f elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
														data-id="bcc601f" data-element_type="widget"
														data-widget_type="icon-list.default">
														<div class="elementor-widget-container">
															<ul class="elementor-icon-list-items">
																<li class="elementor-icon-list-item">
																	<a href="#">

																		<span class="elementor-icon-list-text">Privacy
																			Policy</span>
																	</a>
																</li>
																<li class="elementor-icon-list-item">
																	<a href="#">

																		<span class="elementor-icon-list-text">Terms and
																			Conditions</span>
																	</a>
																</li>
																<li class="elementor-icon-list-item">
																	<a href="#">

																		<span
																			class="elementor-icon-list-text">Disclaimer</span>
																	</a>
																</li>
																<li class="elementor-icon-list-item">
																	<a href="#">

																		<span
																			class="elementor-icon-list-text">Support</span>
																	</a>
																</li>
																<li class="elementor-icon-list-item">
																	<a href="#">

																		<span
																			class="elementor-icon-list-text">FAQ</span>
																	</a>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
											<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-eb6bbd5"
												data-id="eb6bbd5" data-element_type="column">
												<div class="elementor-widget-wrap elementor-element-populated">
													<div class="elementor-element elementor-element-f5d7ff4 elementor-widget elementor-widget-heading"
														data-id="f5d7ff4" data-element_type="widget"
														data-widget_type="heading.default">
														<div class="elementor-widget-container">
															<h2 class="elementor-heading-title elementor-size-default">
																Make Appointment</h2>
														</div>
													</div>
													<div class="elementor-element elementor-element-e90ec7e elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
														data-id="e90ec7e" data-element_type="widget"
														data-widget_type="divider.default">
														<div class="elementor-widget-container">
															<div class="elementor-divider">
																<span class="elementor-divider-separator">
																</span>
															</div>
														</div>
													</div>
													<div class="elementor-element elementor-element-feb9b3c elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
														data-id="feb9b3c" data-element_type="widget"
														data-widget_type="icon-list.default">
														<div class="elementor-widget-container">
															<ul class="elementor-icon-list-items">
																<li class="elementor-icon-list-item">
																	<span class="elementor-icon-list-icon">
																		<i aria-hidden="true" class="far fa-clock"></i>
																	</span>
																	<span class="elementor-icon-list-text">9 AM - 5 PM ,
																		Monday - Saturday</span>
																</li>
															</ul>
														</div>
													</div>
													<div class="elementor-element elementor-element-ee8c35f elementor-widget__width-auto jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box"
														data-id="ee8c35f" data-element_type="widget"
														data-widget_type="jkit_icon_box.default">
														<div class="elementor-widget-container">
															<div
																class="jeg-elementor-kit jkit-icon-box icon-position-left elementor-animation- jeg_module_17_30_635d0b11ed8e6">
																<div class="jkit-icon-box-wrapper hover-from-left">
																	<div
																		class="icon-box icon-box-header elementor-animation-">
																		<div class="icon style-color"><i
																				aria-hidden="true"
																				class="jki jki-phone-line"></i></div>
																	</div>
																	<div class="icon-box icon-box-body">
																		<h3 class="title">Call Us Today</h3>
																		<p class="icon-box-description">0522-315-8065
																		</p>
																	</div>

																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</section>
									<section
										class="elementor-section elementor-inner-section elementor-element elementor-element-3cad825 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
										data-id="3cad825" data-element_type="section">
										<div class="elementor-container elementor-column-gap-no">
											<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-043505a"
												data-id="043505a" data-element_type="column">
												<div class="elementor-widget-wrap elementor-element-populated">
													<div class="elementor-element elementor-element-1e74824 elementor-widget elementor-widget-text-editor"
														data-id="1e74824" data-element_type="widget"
														data-widget_type="text-editor.default">
														<div class="elementor-widget-container">
                                                        AARBIN Is A Registered Trademark Of Arvind Enterprises
														</div>
													</div>
												</div>
											</div>
											<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-fe6529c"
												data-id="fe6529c" data-element_type="column">
												<div class="elementor-widget-wrap elementor-element-populated">
													<div class="elementor-element elementor-element-84eba8c elementor-widget elementor-widget-text-editor"
														data-id="84eba8c" data-element_type="widget"
														data-widget_type="text-editor.default">
														<div class="elementor-widget-container">
															Copyright © 2022-23. All rights reserved.  | Designed By <a href="http://swiftcoder.in">swiftcoder.in</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>
							</div>
						</div>
					</section>
				</div>
			</div>
		</footer>
	</div><!-- #page -->
	<link rel="stylesheet" id="magnific-popup-css" href="{{asset('textilary/css/magnific-popup.css')}}"  media="all">
	<link rel="stylesheet" id="tiny-slider-css" href="{{asset('textilary/css/tiny-slider.css')}}"  media="all">
	<link rel="stylesheet" id="e-animations-css" href="{{asset('textilary/css/animations.min.css')}}"  media="all">
	<script data-cfasync="false" src="{{asset('textilary/js/email-decode.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('textilary/js/webpack.runtime.min.js')}}" id="elementor-webpack-runtime-js"></script>
	<script type="text/javascript" src="{{asset('textilary/js/frontend-modules.min.js')}}" id="elementor-frontend-modules-js"></script>
	<script type="text/javascript" src="{{asset('textilary/js/waypoints.min.js')}}" id="elementor-waypoints-js"></script>
	<script type="text/javascript" src="{{asset('textilary/js/core.min.js')}}" id="jquery-ui-core-js"></script>
	<script type="text/javascript" id="elementor-frontend-js-before">
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
				"close": "Close"
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
						"label": "Mobile",
						"value": 767,
						"default_value": 767,
						"direction": "max",
						"is_enabled": true
					},
					"mobile_extra": {
						"label": "Mobile Extra",
						"value": 880,
						"default_value": 880,
						"direction": "max",
						"is_enabled": false
					},
					"tablet": {
						"label": "Tablet",
						"value": 1024,
						"default_value": 1024,
						"direction": "max",
						"is_enabled": true
					},
					"tablet_extra": {
						"label": "Tablet Extra",
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
			"version": "3.6.5",
			"is_static": false,
			"experimentalFeatures": {
				"e_dom_optimization": true,
				"e_optimized_assets_loading": true,
				"a11y_improvements": true,
				"e_import_export": true,
				"e_hidden_wordpress_widgets": true,
				"landing-pages": true,
				"elements-color-picker": true,
				"favorite-widgets": true,
				"admin-top-bar": true
			},
			"urls": {
				"assets": "https:\/\/templatekit.jegtheme.com\/textilery\/wp-content\/plugins\/elementor\/assets\/"
			},
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
				"id": 17,
				"title": "Textilery%20%E2%80%93%20Just%20another%20Template%20Kits%20by%20Jegtheme%20site",
				"excerpt": "",
				"featuredImage": false
			}
		};
	</script>
	<script type="text/javascript" src="{{asset('textilary/js/frontend.min.js')}}" id="elementor-frontend-js"></script>
	<script type="text/javascript" id="elementor-frontend-js-after">
		var jkit_ajax_url = "https://templatekit.jegtheme.com/textilery/?jkit-ajax-request=jkit_elements",
			jkit_nonce = "ba153519bb";
	</script>
	<script type="text/javascript" src="{{asset('textilary/js/sticky-element.js')}}" id="jkit-sticky-element-js"></script>
	<script type="text/javascript" src="{{asset('textilary/js/nav-menu.js')}}" id="jkit-element-navmenu-js"></script>
	<script type="text/javascript" src="{{asset('textilary/js/video-button.js')}}" id="jkit-element-videobutton-js"></script>
	<script type="text/javascript" src="{{asset('textilary/js/jquery.magnific-popup.min.js')}}" id="magnific-popup-js"></script>
	<script type="text/javascript" src="{{asset('textilary/js/fun-fact.js')}}" id="jkit-element-funfact-js"></script>
	<script type="text/javascript" src="{{asset('textilary/js/progress-bar.js')}}" id="jkit-element-progressbar-js"></script>
	<script type="text/javascript" src="{{asset('textilary/js/team.js')}}" id="jkit-element-team-js"></script>
	<script type="text/javascript" src="{{asset('textilary/js/testimonials.js')}}" id="jkit-element-testimonials-js"></script>
	<script type="text/javascript" src="{{asset('textilary/js/tiny-slider.js')}}" id="tiny-slider-js"></script>
	<script type="text/javascript" id="jkit-element-pagination-js-extra">
		/* <![CDATA[ */
		var jkit_element_pagination_option = {
			"element_prefix": "jkit_element_ajax_"
		};
		/* ]]> */

    </script>
	<script type="text/javascript" src="{{asset('textilary/js/post-pagination.js')}}" id="jkit-element-pagination-js"></script>
	@stack('script')
</body>

</html>

<!-- Dynamic page generated in 1.550 seconds. -->
<!-- Cached page generated by WP-Super-Cache on 2022-10-29 11:14:26 -->

<!-- super cache -->