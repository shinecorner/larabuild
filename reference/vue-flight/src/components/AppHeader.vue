<template>
  <header>
    <div>
      <b-navbar toggleable="lg" type="dark" variant="info">
        <b-navbar-brand to="/">Home</b-navbar-brand>

        <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

        <b-collapse id="nav-collapse" is-nav>
          <b-navbar-nav>
            <b-nav-item to="/colors">Colors</b-nav-item>
          </b-navbar-nav>

          <!-- Right aligned nav items -->
        </b-collapse>
      </b-navbar>
    </div>
  </header>
</template>

<style lang="scss">
header {
  display: flex;
  border-bottom: 1px solid #ccc;
  padding: .5rem 1rem;

  p {
    margin-left: 1rem;
  }
}

nav {
  margin-left: auto;

  ul {
    list-style: none;
  }

  ul li {
    display: inline-flex;
    margin-left: 1rem;
  }
}
</style>
