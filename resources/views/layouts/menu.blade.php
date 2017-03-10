<nav class="nav">
    <div class="nav-left">
        <router-link to="/" class="nav-item">
            <h1 class="title">al'Aes Atha'an</h1>
        </router-link>
    </div>
    <div class="nav-right nav-menu">      
        <router-link to="/handbook" class="nav-item">Handbook</router-link>
        <router-link to="/characters" class="nav-item">Characters</router-link>
        <router-link to="/forums" class="nav-item">Forums</router-link>
        <router-link to="/news" class="nav-item">News</router-link>
        <span class="nav-item" v-show='guest'>
            <button class="button" @click="openLoginModal">Login</button>
        </span>
        <span class="nav-item" v-show='guest'>
            <button class="button"  @click="openRegisterModal">Register</button>
        </span>
        <router-link to="/profile" class="nav-item" v-show='! guest'>
            <span class="icon">
                <i class="fa fa-user"></i>
            </span>
            @{{ user.username }}
        </router-link>
        <span class="nav-item" v-show="! guest">
            <button class="button" @click="logoutUser">Logout</button>
        </span>
    </div>

  <!-- This "nav-toggle" hamburger menu is only visible on mobile -->
  <!-- You need JavaScript to toggle the "is-active" class on "nav-menu" -->
    <span class="nav-toggle">
        <span></span>
        <span></span>
        <span></span>
    </span>
</nav>