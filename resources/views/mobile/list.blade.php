<!DOCTYPE html>
<html>
<!--  This source code is exported from pxCode, you can get more document from https://www.pxcode.io  -->
<head>
    <meta charset="utf-8"/>
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <link
        rel="stylesheet"
        type="text/css"
        href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
        crossorigin="anonymous"
    />
    <link
        rel="stylesheet"
        type="text/css"
        href="https://unpkg.com/aos@2.3.1/dist/aos.css"
    />
    <link rel="stylesheet" type="text/css" href="/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="/css/fonts.css"/>
    <link rel="stylesheet" type="text/css" href="/css/Px.css"/>

    <script
        type="text/javascript"
        src="https://unpkg.com/aos@2.3.1/dist/aos.js"
    ></script>
    <script
        type="text/javascript"
        src="https://unpkg.com/headroom.js@0.12.0/dist/headroom.min.js"
    ></script>
</head>

<body style="display: flex; flex-direction: column">
<div class="px px-block layout">
    <div class="px-flex layout">
        <div
            style="--src:url({{url('/')}}/assets/ea3696eaca79e3c15b9ef88061aeaf82.png)"
            class="px-image layout"
        ></div>
        <h5 class="px-highlights layout">List Laporan - {{$title ?? ""}}</h5>
        <div class="px-flex-item">
            @foreach($data as $item)
                <div class="px-group layout">
                    <h5 class="px-highlights layout1"><a style="color: white"
                                                         href="{{'/pelaporan/detail/'.$item->id}}"> {{$item->user->name}}
                            - {{$item->id}}</a></h5>
                </div>
            @endforeach
        </div>
    </div>
</div>
<script type="text/javascript">
    AOS.init();
</script>
</body>
</html>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');

    *,
    *::before,
    *::after {
        box-sizing: border-box;
    }

    h1, h2, h3, h4, h5, h6, hr, p, figure {
        display: block;
        font-size: 1em;
        font-weight: normal;
        margin: 0;
        border-width: 0;
        opacity: 1;
    }

    ul, ul {
        display: block;
        margin: 0;
        padding: 0;
    }

    li {
        display: block;
    }

    body {
        margin: 0;
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", "Roboto", "Oxygen",
        "Ubuntu", "Cantarell", "Fira Sans", "Droid Sans", "Helvetica Neue",
        sans-serif;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }

    code {
        font-family: source-code-pro, Menlo, Monaco, Consolas, "Courier New",
        monospace;
    }

    @media (max-width: 99999px) {
        .max\:show {
            display: flex;
            flex-direction: column;
        }

        .xxxl\:show {
            display: none;
        }

        .xxl\:show {
            display: none;
        }

        .xl\:show {
            display: none;
        }

        .lg\:show {
            display: none;
        }

        .md\:show {
            display: none;
        }

        .sm\:show {
            display: none;
        }

        .xs\:show {
            display: none;
        }

        .max\:hide {
            display: none;
        }
    }

    @media (max-width: 2999px) {
        .xxxl\:show {
            display: flex;
        }

        .xxxl\:hide {
            display: none;
        }
    }

    @media (max-width: 1919px) {
        .xxl\:show {
            display: flex;
        }

        .xxl\:hide {
            display: none;
        }
    }

    @media (max-width: 1399px) {
        .xl\:show {
            display: flex;
        }

        .xl\:hide {
            display: none;
        }
    }

    @media (max-width: 1199px) {
        .lg\:show {
            display: flex;
        }

        .lg\:hide {
            display: none;
        }
    }

    @media (max-width: 991px) {
        .md\:show {
            display: flex;
        }

        .md\:hide {
            display: none;
        }
    }

    @media (max-width: 767px) {
        .sm\:show {
            display: flex;
        }

        .sm\:hide {
            display: none;
        }
    }

    @media (max-width: 575px) {
        .xs\:show {
            display: flex;
        }

        .xs\:hide {
            display: none;
        }
    }

    .headroom {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 10000;

        will-change: transform;
        transition: transform 200ms linear;
    }

    .headroom--pinned {
        transform: translateY(0%);
    }

    .headroom--unpinned {
        transform: translateY(-100%);
    }
</style>

<style>
    /* fonts.css */
    @import url("https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

    @font-face {
        font-family: "FontAwesome";
        font-weight: normal;
        font-style: normal;
        src: url("https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/fonts/fontawesome-webfont.eot?v=4.3.0");
        src: url("https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/fonts/fontawesome-webfont.eot?#iefix&v=4.3.0") format("embedded-opentype"),
        url("https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/fonts/fontawesome-webfont.woff2?v=4.3.0") format("woff2"),
        url("https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/fonts/fontawesome-webfont.woff?v=4.3.0") format("woff"),
        url("https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/fonts/fontawesome-webfont.ttf?v=4.3.0") format("truetype"),
        url("https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/fonts/fontawesome-webfont.svg?v=4.3.0#fontawesomeregular") format("svg");
    }
</style>

<style>
    /* This source code is exported from pxCode, you can get more document from https://www.pxcode.io */
    .px-block {
        display: flex;
        flex-direction: column;
        background-color: #0d0c0c;
    }

    .px-block.layout {
        position: relative;
        overflow: hidden;
        min-height: 800px;
        flex-shrink: 0;
    }

    .px-flex {
        display: flex;
        flex-direction: column;
    }

    .px-flex.layout {
        position: relative;
        height: -webkit-min-content;
        height: -moz-min-content;
        height: min-content;
        margin: 26px;
    }

    .px-image {
        background: var(--src) center center/contain no-repeat;
    }

    .px-image.layout {
        position: relative;
        height: 14px;
        width: 16px;
        min-width: 16px;
    }

    .px-highlights {
        font: 500 15px/1.2 "Roboto", Helvetica, Arial, serif;
        color: white;
        letter-spacing: 0px;
    }

    .px-highlights.layout {
        position: relative;
        height: -webkit-min-content;
        height: -moz-min-content;
        height: min-content;
        margin: 28px 2px 0px;
    }

    .px-flex-item {
        display: flex;
        flex-direction: column;
        position: relative;
    }

    .px-group {
        display: flex;
        flex-direction: column;
        background-color: black;
        box-shadow: 0px 3px 4px 0px rgba(255, 255, 255, 0.117647);
        border: 1px solid white;
        border-radius: 18px 18px 18px 18px;
    }

    .px-group.layout {
        position: relative;
        height: 55px;
        margin: 28px 1px 0px 0px;
    }

    .px-highlights.layout1 {
        position: relative;
        height: -webkit-min-content;
        height: -moz-min-content;
        height: min-content;
        min-width: 0px;
        width: -webkit-fit-content;
        width: -moz-fit-content;
        width: fit-content;
        margin: 18px 0px 0px 23px;
    }

    .px-group1 {
        display: flex;
        flex-direction: column;
        background-color: black;
        border: 1px solid white;
        border-radius: 18px 18px 18px 18px;
    }

    .px-group1.layout {
        position: relative;
        height: 55px;
        margin: 12px 1px 538px 0px;
    }

    .px-highlights.layout2 {
        position: relative;
        height: -webkit-min-content;
        height: -moz-min-content;
        height: min-content;
        min-width: 0px;
        width: -webkit-fit-content;
        width: -moz-fit-content;
        width: fit-content;
        margin: 18px 0px 0px 23px;
    }
</style>
