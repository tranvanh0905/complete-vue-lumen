<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vue and Lumen</title>
    <link rel="stylesheet" href="dist/app.css"/>
</head>
<body>
<div id="app" class="container-fluid">
    <h1>Vue and Lumen</h1>
    <div>
        <b-nav tabs>
            <b-nav-item>
                <router-link to="/dashboard">Dashboard</router-link>
            </b-nav-item>
            <b-nav-item>
                <router-link to="/category">Category</router-link>
            </b-nav-item>
            <b-nav-item>
                <router-link to="/news">News</router-link>
            </b-nav-item>
            <b-nav-item>
                <router-link to="/login">Login</router-link>
            </b-nav-item>
            <b-nav-item>
                <router-link to="/register">Register</router-link>
            </b-nav-item>
        </b-nav>
    </div>
    <!-- route outlet -->
    <!-- component matched by the route will render here -->
    <router-view></router-view>
</div>
<script src="dist/app.js"></script>
</body>
</html>
