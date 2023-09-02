<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Registration Page (v2)</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">

    <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css?v=3.2.0') }}">
    <script
        nonce="c720f315-24ef-4094-9a20-3f327062689f">(function (w, d) { !function (db, dc, dd, de) { db[dd] = db[dd] || {}; db[dd].executed = []; db.zaraz = { deferred: [], listeners: [] }; db.zaraz.q = []; db.zaraz._f = function (df) { return async function () { var dg = Array.prototype.slice.call(arguments); db.zaraz.q.push({ m: df, a: dg }) } }; for (const dh of ["track", "set", "debug"]) db.zaraz[dh] = db.zaraz._f(dh); db.zaraz.init = () => { var di = dc.getElementsByTagName(de)[0], dj = dc.createElement(de), dk = dc.getElementsByTagName("title")[0]; dk && (db[dd].t = dc.getElementsByTagName("title")[0].text); db[dd].x = Math.random(); db[dd].w = db.screen.width; db[dd].h = db.screen.height; db[dd].j = db.innerHeight; db[dd].e = db.innerWidth; db[dd].l = db.location.href; db[dd].r = dc.referrer; db[dd].k = db.screen.colorDepth; db[dd].n = dc.characterSet; db[dd].o = (new Date).getTimezoneOffset(); if (db.dataLayer) for (const dp of Object.entries(Object.entries(dataLayer).reduce(((dq, dr) => ({ ...dq[1], ...dr[1] })), {}))) zaraz.set(dp[0], dp[1], { scope: "page" }); db[dd].q = []; for (; db.zaraz.q.length;) { const ds = db.zaraz.q.shift(); db[dd].q.push(ds) } dj.defer = !0; for (const dt of [localStorage, sessionStorage]) Object.keys(dt || {}).filter((dv => dv.startsWith("_zaraz_"))).forEach((du => { try { db[dd]["z_" + du.slice(7)] = JSON.parse(dt.getItem(du)) } catch { db[dd]["z_" + du.slice(7)] = dt.getItem(du) } })); dj.referrerPolicy = "origin"; dj.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(db[dd]))); di.parentNode.insertBefore(dj, di) };["complete", "interactive"].includes(dc.readyState) ? zaraz.init() : db.addEventListener("DOMContentLoaded", zaraz.init) }(w, d, "zarazData", "script"); })(window, document);</script>
</head>

<body class="hold-transition register-page">
    @yield('content')


    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>

    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('dist/js/adminlte.min.js?v=3.2.0') }}"></script>
</body>

</html>