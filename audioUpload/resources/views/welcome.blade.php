<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    @include('./layouts/nav')
  <style>
    element.style {
    background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTU2NyIgaGVpZ2h0PSIxOTUiIHZpZXdCb3g9IjAgMCAxNTY3IDE5NSIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTExMjcgMTkxLjgwOUM4OTQgMTg5LjU2IDU5MC41IDcxLjA3MDkgMzIxIDc1LjEwMDVDMjI2LjA3MyA3Ni41MTk5IDExMS4xMDggODcuNjMwOCAyIDEyOS4zMDRWMC41SDE1NjVWMTAxLjEzOEMxNDAwLjY5IDEyMi4xODcgMTIyNy41NiAxOTIuNzgxIDExMjcgMTkxLjgwOVoiIGZpbGw9IiMxRDFFNEYiLz4KPGcgZmlsdGVyPSJ1cmwoI2ZpbHRlcjBfZikiPgo8cGF0aCBkPSJNMTU2NSAxMDEuMTM4QzE0MDAuNjkgMTIyLjE4NyAxMjI3LjU2IDE5Mi43ODEgMTEyNyAxOTEuODA5Qzg5NCAxODkuNTYgNTkwLjUgNzEuMDcwOSAzMjEgNzUuMTAwNUMyMjYuMDczIDc2LjUxOTggMTExLjEwOCA4Ny42MzA4IDIgMTI5LjMwNCIgc3Ryb2tlPSJ1cmwoI2JhY2szMF9saW5lYXIpIiBzdHJva2Utd2lkdGg9IjMiLz4KPC9nPgo8ZGVmcz4KPGZpbHRlciBpZD0iZmlsdGVyMF9mIiB4PSIwLjQ2NDg0NCIgeT0iNzIuNSIgd2lkdGg9IjE1NjUuNzMiIGhlaWdodD0iMTIxLjgxOSIgZmlsdGVyVW5pdHM9InVzZXJTcGFjZU9uVXNlIiBjb2xvci1pbnRlcnBvbGF0aW9uLWZpbHRlcnM9InNSR0IiPgo8ZmVGbG9vZCBmbG9vZC1vcGFjaXR5PSIwIiByZXN1bHQ9IkJhY2tncm91bmRJbWFnZUZpeCIvPgo8ZmVCbGVuZCBtb2RlPSJub3JtYWwiIGluPSJTb3VyY2VHcmFwaGljIiBpbjI9IkJhY2tncm91bmRJbWFnZUZpeCIgcmVzdWx0PSJzaGFwZSIvPgo8ZmVHYXVzc2lhbkJsdXIgc3RkRGV2aWF0aW9uPSIwLjUiIHJlc3VsdD0iZWZmZWN0MV9mb3JlZ3JvdW5kQmx1ciIvPgo8L2ZpbHRlcj4KPGxpbmVhckdyYWRpZW50IGlkPSJiYWNrMzBfbGluZWFyIiB4MT0iNzMuMzg0NCIgeTE9Ijc1LjM2NTQiIHgyPSIxNTEzLjI5IiB5Mj0iMTAzLjQ4NSIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiPgo8c3RvcCBzdG9wLWNvbG9yPSIjQTEwOUQ1IiBzdG9wLW9wYWNpdHk9IjAiLz4KPHN0b3Agb2Zmc2V0PSIwLjM4MTU5IiBzdG9wLWNvbG9yPSIjQTIwOUQ0Ii8+CjxzdG9wIG9mZnNldD0iMC43NTUzNTgiIHN0b3AtY29sb3I9IiNENjEzODIiLz4KPHN0b3Agb2Zmc2V0PSIwLjk4NTQwNCIgc3RvcC1jb2xvcj0iI0Q4MTQ3RiIgc3RvcC1vcGFjaXR5PSIwIi8+CjwvbGluZWFyR3JhZGllbnQ+CjwvZGVmcz4KPC9zdmc+Cg==);
}
.reviews {
    background-position-y: -1px;
    background-repeat: no-repeat;
    background-size: contain;
    padding-top: 15rem;
    width: 100%;
    background-color: var(--main-bg-color);
    text-align: center;
}
a, abbr, acronym, address, applet, article, aside, audio, b, big, blockquote, body, canvas, caption, center, cite, code, dd, del, details, dfn, div, dl, dt, em, embed, fieldset, figcaption, figure, footer, form, h1, h2, h3, h4, h5, h6, header, hgroup, html, i, iframe, img, ins, kbd, label, legend, li, mark, menu, nav, object, ol, output, p, pre, q, ruby, s, samp, section, small, span, strike, strong, sub, summary, sup, table, tbody, td, tfoot, th, thead, time, tr, tt, u, ul, var, video {
    margin: 0;
    padding: 0;
    border: 0;
    font-size: 100%;
    font: inherit;
    vertical-align: baseline;
}
user agent stylesheet
div {
    display: block;
}
body {
    --main-bg-color: #111233;
    --secondary-bg-color: #1d1e4f;
    --text-color: #7577a6;
    --heading-color: #fff;
    --notif-banner: #090a1e;
    --button-color: #fff;
    --loader-color: #fff;
    --eps-shadow: 0px 4px 74px rgba(0,0,0,0.25);
    --play-icon-color-primary: #fff;
    --play-icon-color-secondary: #b40db7;
    --contributor-shadow: none;
    --hit-color: linear-gradient(90deg,#a109d5,#d9147d);
}
body {
    background: var(--main-bg-color);
    color: var(--text-color);
    background-repeat: no-repeat;
    background-position-y: 6rem;
    background-position-x: center;
    -webkit-transition: all .3s ease-out;
    transition: all .3s ease-out;
}

</style>
<div class="reviews" style="background-image: url(&quot;data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTU2NyIgaGVpZ2h0PSIxOTUiIHZpZXdCb3g9IjAgMCAxNTY3IDE5NSIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTExMjcgMTkxLjgwOUM4OTQgMTg5LjU2IDU5MC41IDcxLjA3MDkgMzIxIDc1LjEwMDVDMjI2LjA3MyA3Ni41MTk5IDExMS4xMDggODcuNjMwOCAyIDEyOS4zMDRWMC41SDE1NjVWMTAxLjEzOEMxNDAwLjY5IDEyMi4xODcgMTIyNy41NiAxOTIuNzgxIDExMjcgMTkxLjgwOVoiIGZpbGw9IiMxRDFFNEYiLz4KPGcgZmlsdGVyPSJ1cmwoI2ZpbHRlcjBfZikiPgo8cGF0aCBkPSJNMTU2NSAxMDEuMTM4QzE0MDAuNjkgMTIyLjE4NyAxMjI3LjU2IDE5Mi43ODEgMTEyNyAxOTEuODA5Qzg5NCAxODkuNTYgNTkwLjUgNzEuMDcwOSAzMjEgNzUuMTAwNUMyMjYuMDczIDc2LjUxOTggMTExLjEwOCA4Ny42MzA4IDIgMTI5LjMwNCIgc3Ryb2tlPSJ1cmwoI2JhY2szMF9saW5lYXIpIiBzdHJva2Utd2lkdGg9IjMiLz4KPC9nPgo8ZGVmcz4KPGZpbHRlciBpZD0iZmlsdGVyMF9mIiB4PSIwLjQ2NDg0NCIgeT0iNzIuNSIgd2lkdGg9IjE1NjUuNzMiIGhlaWdodD0iMTIxLjgxOSIgZmlsdGVyVW5pdHM9InVzZXJTcGFjZU9uVXNlIiBjb2xvci1pbnRlcnBvbGF0aW9uLWZpbHRlcnM9InNSR0IiPgo8ZmVGbG9vZCBmbG9vZC1vcGFjaXR5PSIwIiByZXN1bHQ9IkJhY2tncm91bmRJbWFnZUZpeCIvPgo8ZmVCbGVuZCBtb2RlPSJub3JtYWwiIGluPSJTb3VyY2VHcmFwaGljIiBpbjI9IkJhY2tncm91bmRJbWFnZUZpeCIgcmVzdWx0PSJzaGFwZSIvPgo8ZmVHYXVzc2lhbkJsdXIgc3RkRGV2aWF0aW9uPSIwLjUiIHJlc3VsdD0iZWZmZWN0MV9mb3JlZ3JvdW5kQmx1ciIvPgo8L2ZpbHRlcj4KPGxpbmVhckdyYWRpZW50IGlkPSJiYWNrMzBfbGluZWFyIiB4MT0iNzMuMzg0NCIgeTE9Ijc1LjM2NTQiIHgyPSIxNTEzLjI5IiB5Mj0iMTAzLjQ4NSIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiPgo8c3RvcCBzdG9wLWNvbG9yPSIjQTEwOUQ1IiBzdG9wLW9wYWNpdHk9IjAiLz4KPHN0b3Agb2Zmc2V0PSIwLjM4MTU5IiBzdG9wLWNvbG9yPSIjQTIwOUQ0Ii8+CjxzdG9wIG9mZnNldD0iMC43NTUzNTgiIHN0b3AtY29sb3I9IiNENjEzODIiLz4KPHN0b3Agb2Zmc2V0PSIwLjk4NTQwNCIgc3RvcC1jb2xvcj0iI0Q4MTQ3RiIgc3RvcC1vcGFjaXR5PSIwIi8+CjwvbGluZWFyR3JhZGllbnQ+CjwvZGVmcz4KPC9zdmc+Cg==&quot;);">
    <div class="container">
        <h5> What People say about Abderrahmane </h5>
    </div>
    <div class="list slider" id="review-scroll">
        </div></div>
</body>
</html>